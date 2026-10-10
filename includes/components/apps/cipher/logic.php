<?php
/**
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

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = json_decode(file_get_contents('php://input'), true);
    
    // 1. Determine Rules based on Difficulty
    $difficulty = $input['difficulty'] ?? 'calibration';
    
    $allowRepeats = false;
    $validPattern = '/^[1-5]{4}$/'; // Default: Calibration
    
    switch ($difficulty) {
        case 'orbital': // 1-6, Repeats Allowed
            $allowRepeats = true;
            $validPattern = '/^[1-6]{4}$/';
            break;
        case 'deep': // 0-9, Unique
            $allowRepeats = false;
            $validPattern = '/^[0-9]{4}$/';
            break;
        case 'horizon': // 0-9, Repeats Allowed
            $allowRepeats = true;
            $validPattern = '/^[0-9]{4}$/';
            break;
        case 'calibration': // 1-5, Unique
        default:
            $allowRepeats = false;
            $validPattern = '/^[1-5]{4}$/';
            break;
    }

    $secretCodeRaw = trim($input['secret_code']);
    $guessRaw = trim($input['guess']);

    // 2. Validation
    // Check format
    if (!preg_match($validPattern, $secretCodeRaw) || !preg_match($validPattern, $guessRaw)) {
        http_response_code(400);
        echo json_encode(['status' => 'error', 'message' => 'Invalid digits for this difficulty level.']);
        exit;
    }

    // Check Uniqueness (if repeats are banned)
    if (!$allowRepeats) {
        if (count(array_unique(str_split($secretCodeRaw))) < 4) {
            http_response_code(400);
            echo json_encode(['status' => 'error', 'message' => 'Protocol Violation: Repeats are not allowed in this mode.']);
            exit;
        }
    }

    // 3. The Scoring Engine
    // (This logic works for both Unique and Repeats modes!)
    $secretCode = str_split($secretCodeRaw);
    $guess = str_split($guessRaw);
    
    $exactMatches = 0;
    $valueMatches = 0;
    $log = [];
    
    $codeUsed = [false, false, false, false];
    $guessUsed = [false, false, false, false];

    // Find EXACT Matches (+)
    // First pass: Only look for exact positional matches to prevent false positives later.
    for ($i = 0; $i < 4; $i++) {
        if ($guess[$i] === $secretCode[$i]) {
            $exactMatches++;
            $codeUsed[$i] = true;
            $guessUsed[$i] = true;
            $log[] = "Spot " . ($i + 1) . ": SIGNAL LOCKED. Digit " . $guess[$i] . " is correct. (+)";
        }
    }

    // Find VALUE Matches (-)
    // Second pass: Look for digits that exist in the code but in the wrong spot, 
    // ensuring we don't reuse digits already matched.
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

    // Build Output
    $resultString = "";
    for ($i = 0; $i < $exactMatches; $i++) $resultString .= "+ ";
    for ($i = 0; $i < $valueMatches; $i++) $resultString .= "- ";
    
    echo json_encode([
        'status' => 'success',
        'result_string' => trim($resultString),
        'explanation_log' => $log
    ]);
    exit;
}