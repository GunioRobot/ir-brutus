<div id="node-<?php print $node->nid; ?>" class="node <?php print $node_classes; ?>">
  <div class="node-inner">

    <?php if (!$page): ?>
      <h2 class="title"><a href="<?php print $node_url; ?>" title="<?php print $title; ?>"><?php print $title; ?></a></h2>
    <?php endif; ?>

    <?php print $picture; ?>

    <?php if ($submitted): ?>
      <span class="submitted"><?php print $submitted; ?></span>
    <?php endif; ?>

    <?php if ($node_top && !$teaser): ?>
    <div class="node-top">
        <?php print $node_top; ?>
    </div><!-- /node-top -->
    <?php endif; ?>

    <div class="content">
      <?php print $content; ?>
    </div>

    <?php if ($terms): ?>
      <div class="taxonomy"><?php print $terms; ?></div>
    <?php endif;?>

    <?php if ($links): ?> 
      <div class="links"> <?php print $links; ?></div>
    <?php endif; ?>

    <?php if ($node_bottom && !$teaser): ?>
    <div class="node-bottom">
        <?php print $node_bottom; ?>
    </div><!-- /node-bottom -->
    <?php endif; ?>

  </div> <!-- /node-inner -->
</div> <!-- /node-->
