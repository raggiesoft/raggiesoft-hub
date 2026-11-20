<?php
/**
 * ============================================================================
 * READ-ALONG TEACHING GUIDE (100-LEVEL COURSE EDITION)
 * ============================================================================
 * File: /includes/components/apps/cipher/logic.php
 * Role: Backend JSON Scoring Engine for the "Signal Decryptor" (Bulls & Cows) App
 * Domain: https://raggiesoft.com (Called via `fetch()` POST from `/apps/cipher`)
 *
 * WHAT THIS FILE DOES (PLAIN-ENGLISH OVERVIEW):
 * Powers the server-side code-breaking logic for `https://raggiesoft.com/apps/cipher`.
 * When a player submits a 4-digit guess in the browser, `cipher.js` sends an
 * HTTP `POST` request with a JSON body (`{"difficulty": "...", "secret_code": "...", "guess": "..."}`).
 * This script:
 *   1. Reads the raw JSON request stream from `php://input` (because modern
 *      `application/json` `fetch()` POST bodies do NOT populate `$_POST`!).
 *   2. Validates both `secret_code` and `guess` against the selected difficulty
 *      tier's regular expression (`1-5` vs `1-6` vs `0-9`, unique vs repeats).
 *   3. Runs a classic Two-Pass Mastermind / Bulls-and-Cows algorithm using two
 *      boolean tracking arrays (`$codeUsed` and `$guessUsed`) so duplicate
 *      digits are NEVER double-counted!
 *   4. Returns a pure JSON response (`status`, `result_string` like `"+ + -"`,
 *      and `explanation_log`) with `Content-Type: application/json`.
 *
 * CRITICAL PHP HEADER NOTE:
 * Zero whitespace or HTML may appear before `<?php` on Line 1 because `header()`
 * and `http_response_code(400)` modify HTTP response headers!
 * ============================================================================
 *
 * Stardust Engine - Cipher Logic Core
 * 
 * ARCHITECTURAL OVERVIEW:
 * This script serves as the backend validation and scoring engine for the "Stardust Cipher"
 * mini-game. It receives JSON payloads, validates the input against difficulty-specific
 * regex patterns, and returns a Mastermind-style scoring result (Exact vs Value matches).
 * 
 * LOGIC & CONSTRAINTS:
 * - Operates entirely via JSON POST requests (`php://input`).
 * - Difficulty tiers dictate regex validation (`$validPattern`) and uniqueness rules (`$allowRepeats`).
 * - The scoring engine is highly sensitive. It calculates "Exact Matches" (+) first, then 
 *   calculates "Value Matches" (-) while avoiding double-counting previously used digits.
 * - This file does NOT output HTML; it must remain a pure JSON endpoint.
 * 
 * File Info: includes/components/apps/cipher/logic.php
 * Stardust Cipher Logic Core v2.0
 * Supports variable difficulty tiers
 */

// Declare to the browser's `fetch()` client that our HTTP response body is JSON (not HTML):
header('Content-Type: application/json');

// Inspect PHP's `$_SERVER['REQUEST_METHOD']` superglobal to ensure this endpoint only processes `POST` requests:
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Read the raw HTTP request body via `php://input` and parse JSON into an associative array:
    $input = json_decode(file_get_contents('php://input'), true);
    
    // 1. Determine Rules based on Difficulty (`?? 'calibration'` defaults safely if omitted)
    $difficulty = $input['difficulty'] ?? 'calibration';
    
    $allowRepeats = false;
    $validPattern = '/^[1-5]{4}$/'; // Default: Calibration (exactly 4 digits, each 1 through 5)
    
    switch ($difficulty) {
        case 'orbital': // Digits 1-6, Repeats Allowed
            $allowRepeats = true;
            $validPattern = '/^[1-6]{4}$/';
            break;
        case 'deep': // Digits 0-9, Unique (No Repeats)
            $allowRepeats = false;
            $validPattern = '/^[0-9]{4}$/';
            break;
        case 'horizon': // Digits 0-9, Repeats Allowed
            $allowRepeats = true;
            $validPattern = '/^[0-9]{4}$/';
            break;
        case 'calibration': // Digits 1-5, Unique (No Repeats)
        default:
            $allowRepeats = false;
            $validPattern = '/^[1-5]{4}$/';
            break;
    }

    $secretCodeRaw = trim($input['secret_code']);
    $guessRaw = trim($input['guess']);

    // 2. Input Validation
    // Check format: `preg_match` ensures both strings are strictly 4 allowed digits
    if (!preg_match($validPattern, $secretCodeRaw) || !preg_match($validPattern, $guessRaw)) {
        http_response_code(400); // HTTP 400 Bad Request
        echo json_encode(['status' => 'error', 'message' => 'Invalid digits for this difficulty level.']);
        exit;
    }

    // Check Uniqueness (if repeats are banned):
    // `str_split()` turns `"1231"` into `['1','2','3','1']`; `array_unique()` removes
    // duplicates (`['1','2','3']`), so `count(...) < 4` immediately catches repeated digits!
    if (!$allowRepeats) {
        if (count(array_unique(str_split($secretCodeRaw))) < 4) {
            http_response_code(400);
            echo json_encode(['status' => 'error', 'message' => 'Protocol Violation: Repeats are not allowed in this mode.']);
            exit;
        }
    }

    // 3. The Two-Pass Scoring Engine
    // Convert both 4-character strings into 4-element arrays (`[0..3]`):
    $secretCode = str_split($secretCodeRaw);
    $guess = str_split($guessRaw);
    
    $exactMatches = 0; // "+" (Bull: right digit in the right position)
    $valueMatches = 0; // "-" (Cow: right digit in the wrong position)
    $log = [];
    
    // Boolean flags tracking which positions in `$secretCode` and `$guess` have already been paired:
    $codeUsed = [false, false, false, false];
    $guessUsed = [false, false, false, false];

    // PASS 1: Find EXACT Matches (+)
    // WHY TWO PASSES ARE REQUIRED: Suppose Secret = `1234` and Guess = `1199`.
    // If we checked exact & misplaced matches in a single loop, the second `1` in
    // Guess might falsely match the `1` at index 0! Marking `$codeUsed[$i] = true`
    // and `$guessUsed[$i] = true` for all exact matches FIRST prevents double-counting.
    for ($i = 0; $i < 4; $i++) {
        if ($guess[$i] === $secretCode[$i]) {
            $exactMatches++;
            $codeUsed[$i] = true;
            $guessUsed[$i] = true;
            $log[] = "Spot " . ($i + 1) . ": SIGNAL LOCKED. Digit " . $guess[$i] . " is correct. (+)";
        }
    }

    // PASS 2: Find VALUE Matches (-)
    // For every unmatched digit `$guess[$i]`, scan unmatched positions `$secretCode[$j]`.
    // As soon as one match is found, mark `$codeUsed[$j] = true` and `break` out of the
    // inner loop so one secret digit can only satisfy ONE misplaced guess digit!
    for ($i = 0; $i < 4; $i++) {
        if (!$guessUsed[$i]) {
            for ($j = 0; $j < 4; $j++) {
                if (!$codeUsed[$j] && $guess[$i] === $secretCode[$j]) {
                    $valueMatches++;
                    $codeUsed[$j] = true;
                    $log[] = "Spot " . ($i + 1) . ": SIGNAL DETECTED. Digit " . $guess[$i] . " is valid but misplaced. (-)";
                    break; 
                }
            }
        }
    }

    // Build Priority-Sorted Symbol Output (`+` symbols always precede `-` symbols so
    // symbol order never leaks which specific slot matched):
    $resultString = "";
    for ($i = 0; $i < $exactMatches; $i++) $resultString .= "+ ";
    for ($i = 0; $i < $valueMatches; $i++) $resultString .= "- ";
    
    // Serialize the final score and step-by-step analysis log back to the browser as JSON:
    echo json_encode([
        'status' => 'success',
        'result_string' => trim($resultString),
        'explanation_log' => $log
    ]);
    exit;
}