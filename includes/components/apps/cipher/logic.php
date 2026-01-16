<?php
// includes/components/apps/cipher/logic.php
// The "Stardust Cipher" Logic Core
// Formerly Mastermind. Rebranded to match the Stardust Engine aesthetic.

// Set the header to return JSON, not HTML
header('Content-Type: application/json');

// Only run if we receive data
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Get the raw JSON input from the JavaScript fetch
    $input = json_decode(file_get_contents('php://input'), true);
    
    // Sanitize and split into arrays
    // We treat input as strings to preserve leading zeros if any (though 1-5 usually avoids this)
    $secretCode = str_split(trim($input['secret_code']));
    $guess = str_split(trim($input['guess']));
    
    $exactMatches = 0; // The Pluses (+)
    $valueMatches = 0; // The Minuses (-)
    $log = []; // The explanation array
    
    // Arrays to track which numbers have already been "used" for scoring
    // This prevents double-counting a single number in the code against multiple matches in the guess.
    $codeUsed = [false, false, false, false];
    $guessUsed = [false, false, false, false];

    // STEP 1: Find Exact Matches (Pluses)
    // We strictly check for the same number in the same spot first.
    for ($i = 0; $i < 4; $i++) {
        if ($guess[$i] === $secretCode[$i]) {
            $exactMatches++;
            $codeUsed[$i] = true;
            $guessUsed[$i] = true;
            $log[] = "Spot " . ($i + 1) . ": SIGNAL LOCKED. The digit " . $guess[$i] . " is correct and in position. (+)";
        }
    }

    // STEP 2: Find Value Matches (Minuses)
    // We check the remaining numbers to see if they exist elsewhere in the code.
    for ($i = 0; $i < 4; $i++) {
        if (!$guessUsed[$i]) { // Only check if this spot wasn't already a Plus
            for ($j = 0; $j < 4; $j++) {
                // If this spot in the code hasn't been matched yet...
                // AND the numbers match...
                if (!$codeUsed[$j] && $guess[$i] === $secretCode[$j]) {
                    $valueMatches++;
                    $codeUsed[$j] = true; // Mark this code number as used so it can't be matched again
                    $log[] = "Spot " . ($i + 1) . ": SIGNAL DETECTED. The digit " . $guess[$i] . " is valid, but the frequency (position) is wrong. (-)";
                    break; // Stop looking for this specific number; we found its pair
                }
            }
        }
    }

    // STEP 3: Build the String (+ first, then -)
    $resultString = "";
    for ($i = 0; $i < $exactMatches; $i++) $resultString .= "+ ";
    for ($i = 0; $i < $valueMatches; $i++) $resultString .= "- ";
    
    // Return the data package
    echo json_encode([
        'status' => 'success',
        'result_string' => trim($resultString),
        'explanation_log' => $log
    ]);
    exit;
}