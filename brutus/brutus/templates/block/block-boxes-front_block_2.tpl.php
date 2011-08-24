<div id="block-<?php print $block->module .'-'. $block->delta; ?>" class="<?php print $block_classes . ' ' . $block_zebra ?>">
  <div class="block-inner">

    <?php if (!empty($block->subject)): ?>
      <h3 class="title block-title"><?php print $block->subject; ?></h3>
    <?php endif; ?>

    <div class="content">
      <ul>
        <li>
          <?php print l(t('Estructura a su gusto'), $base_url . 'utilidad/estructura', array('attributes' => array('title' => 'Vea un ejemplo'))) ?>
        </li>
        <li>
          <a href="http://compass-style.org/docs/reference/blueprint/grid/" target="_blank" title="Blueprint Grid">Utilize Blueprint</a>
        </li>
      </ul>
    </div>

    <?php print $edit_links; ?>

  </div> <!-- /block-inner -->
</div> <!-- /block -->
