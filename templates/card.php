<div class="scroll-card">
        <?php
          $props = [
            'imgSrc' => '[Image URL]',
            'imgAlt' => '[Image Alt Text]',
            'fallbackText' => '[Short Text if Image Fails]',
            'title' => '[Item Title]',
            'description' => '[Brief Description]',
            'buttonProps' => [
              'href' => '[Destination URL]',
              'text' => '[Button Text]',
              'variant' => 'primary', /* options: primary, secondary, success, danger, warning, info, light, dark */
              'icon' => 'fa-duotone fa-star', /* FontAwesome Icon */
              'fullWidth' => true
            ]
          ];
          include __DIR__ . '/../includes/components/card.php';
        ?>
      </div>