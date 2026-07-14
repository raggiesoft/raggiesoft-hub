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
}
?>