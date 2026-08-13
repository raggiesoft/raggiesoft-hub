<?php
// Go up one level from /classes/ to /includes/, then navigate down into the 3rdparty directory
require_once __DIR__ . '/../components/3rdparty/parsedown/parsedown.php';

class StardustParsedown extends Parsedown {
    
    protected function blockTableComplete(array $Block) {
        $Block = parent::blockTableComplete($Block);

        if (!$Block) {
            return $Block;
        }

        // 1. Target the array of <th> elements in the <thead>
        if (isset($Block['element']['text'][0]['text'][0]['text'])) {
            $headers = &$Block['element']['text'][0]['text'][0]['text'];
            
            // Apply scope="col" to all standard headers
            foreach ($headers as &$th) {
                $th['attributes']['scope'] = 'col';
            }
            
            // 2. Check our trigger: Is the top-left header cell empty?
            $isRowHeaderTable = empty(trim($headers[0]['text']));
            
            // 3. If triggered, convert the first <td> in every <tbody> row to a <th scope="row">
            if ($isRowHeaderTable && isset($Block['element']['text'][1]['text'])) {
                $rows = &$Block['element']['text'][1]['text']; // The <tbody> <tr>s
                
                foreach ($rows as &$tr) {
                    if (isset($tr['text'][0])) {
                        // Change 'td' to 'th'
                        $tr['text'][0]['name'] = 'th';
                        // Add the row scope attribute
                        $tr['text'][0]['attributes']['scope'] = 'row';
                    }
                }
            }
        }

        // 4. Add your Bootstrap 5.3 classes
        $Block['element']['attributes']['class'] = 'table table-striped table-hover align-middle';

        // 5. Wrap the entire table in the responsive div
        $ResponsiveWrapper = array(
            'name' => 'div',
            'attributes' => array(
                'class' => 'table-responsive my-4'
            ),
            'handler' => 'element',
            'text' => $Block['element']
        );

        $Block['element'] = $ResponsiveWrapper;

        return $Block;
    }

    // NEW EXTENSION: Handle Checkbox Lists for DSP Forms
    protected function blockLi($Line, array $Block = null) {
        // Call the parent to do the heavy lifting of parsing the list item
        $Block = parent::blockLi($Line, $Block);

        if (!$Block) {
            return $Block;
        }

        // Target the text content of the list item
        if (isset($Block['element']['handler']) && $Block['element']['handler'] === 'line') {
            $text = $Block['element']['text'];

            // Check if the text starts with a Markdown checkbox pattern
            $isChecked = false;
            $isCheckbox = false;

            if (preg_match('/^\[[xX]\]\s/', $text)) {
                $isChecked = true;
                $isCheckbox = true;
                $text = preg_replace('/^\[[xX]\]\s/', '', $text); // Remove the [x]
            } elseif (preg_match('/^\[ \]\s/', $text)) {
                $isCheckbox = true;
                $text = preg_replace('/^\[ \]\s/', '', $text); // Remove the [ ]
            }

            // If a checkbox pattern was found, inject the HTML
            if ($isCheckbox) {
                // Generate a unique ID for accessibility mapping
                $checkboxId = 'chk-' . uniqid();

                $checkboxHtml = '<input class="form-check-input me-2" type="checkbox" id="' . $checkboxId . '" disabled';
                if ($isChecked) {
                    $checkboxHtml .= ' checked';
                }
                $checkboxHtml .= ' aria-label="Read-only checkbox for DSP Metadata status">';

                // Update the text property, turning off the 'line' handler so HTML renders correctly
                $Block['element']['handler'] = 'elements';
                $Block['element']['text'] = array(
                    array(
                        'name' => 'div',
                        'attributes' => array('class' => 'form-check d-flex align-items-center mb-1'),
                        'text' => array(
                            array('rawHtml' => $checkboxHtml),
                            array(
                                'name' => 'label',
                                'attributes' => array(
                                    'class' => 'form-check-label text-dark', 
                                    'for' => $checkboxId
                                ),
                                'handler' => 'line',
                                'text' => $text // The remaining text after the [x] is stripped
                            )
                        )
                    )
                );
                
                // Add a class to the parent <li> to remove standard bullet styling
                $Block['element']['attributes']['class'] = 'list-unstyled';
            }
        }

        return $Block;
    }
}
?>