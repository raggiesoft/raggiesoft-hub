<?php
// includes/components/apps/cipher/logic.php
// Stardust Cipher Logic Core v2.0
// Supports variable difficulty tiers

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
    for ($i = 0; $i < 4; $i++) {
        if ($guess[$i] === $secretCode[$i]) {
            $exactMatches++;
            $codeUsed[$i] = true;
            $guessUsed[$i] = true;
            $log[] = "Spot " . ($i + 1) . ": SIGNAL LOCKED. Digit " . $guess[$i] . " is correct. (+)";
        }
    }

    // Find VALUE Matches (-)
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