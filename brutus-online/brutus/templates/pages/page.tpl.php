<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
  <head>
    
    <title><?php print $head_title; ?></title>
    <?php print $head; ?>
    <?php print $styles; ?>
    <!--[if lte IE 6]><style type="text/css" media="all">@import "<?php print $base_path . path_to_theme() ?>/css/ie/ie6.css"</style><![endif]-->
    <!--[if IE 7]><style type="text/css" media="all">@import "<?php print $base_path . path_to_theme() ?>/css/ie/ie7.css"</style><![endif]-->
    <?php print $scripts; ?>
  </head>

  <body id="<?php print $body_id; ?>" class="<?php print $body_classes; ?>">
    <div id="skip"><a href="#content"><?php print t('Skip to Content'); ?></a> <a href="#navigation"><?php print t('Skip to Navigation'); ?></a></div>  
    
    <!-- HEADER TOP -->
    <?php if ($header_top): ?>
	    <div id="header-top">
	    		<div id="header-top-wrapper">
		    		<div id="header-top-inner">
                        <?php print $header_top; ?>
		    		</div><!-- /header-inner -->
		    	</div><!-- /header-top-wapper -->
	    </div><!-- /header-top (full screen) -->
    <?php endif; ?>
    
    <div id="page">

    <!-- HEADER -->

    <div id="header">

      <div id="logo-title">
	
        <?php if (!empty($logo)): ?>
        <a href="<?php print $front_page; ?>" title="<?php print $site_name; ?>" rel="home" id="logo">
            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
          </a>
        <?php endif; ?>

        <div id="name-and-slogan">
          <?php if (!empty($site_name)): ?>
            <h1 id="site-name">
              <a href="<?php print $front_page ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
            </h1>
          <?php endif; ?>
          <?php if (!empty($site_slogan)): ?>
            <div id="site-slogan"><?php print $site_slogan; ?></div>
          <?php endif; ?>
        </div> <!-- /name-and-slogan -->

      </div> <!-- /logo-title -->

      <?php if ($header): ?>
        <div id="header-region">
          <?php print $header; ?>
        </div>
      <?php endif; ?>

    </div> <!-- /header -->

    <?php print $breadcrumb; ?>

    <!-- MAIN -->

    <div id="main" class="clearfix col16">
    
      <div id="content">
        <div id="content-inner" class="inner column center">

          <?php if ($content_top): ?>
            <div id="content-top">
              <?php print $content_top; ?>
            </div> <!-- /#content-top -->
          <?php endif; ?>

          <?php if ($title || $mission || $messages || $help || $tabs): ?>
          
            <div id="content-header">
              <?php if ($tabs): ?>
                <div class="tabs"><?php print $tabs; ?></div>
              <?php endif; ?>

              <?php if ($title): ?>
                <h2 class="title"><?php print $title; ?></h2>
              <?php endif; ?>

              <?php if ($mission): ?>
                <div id="mission"><?php print $mission; ?></div>
              <?php endif; ?>

              <?php print $messages; ?>

              <?php print $help; ?> 

            </div> <!-- /#content-header -->
          <?php endif; ?>

          <div id="content-area">
            <?php print $content; ?>
          </div> <!-- /#content-area -->

          <?php print $feed_icons; ?>

          <?php if ($content_bottom): ?>
            <div id="content-bottom">
              <?php print $content_bottom; ?>
            </div><!-- /#content-bottom -->
          <?php endif; ?>

          </div>
        </div> <!-- /content-inner /content -->

        <?php if ($left): ?>
          <div id="sidebar-first" class="column sidebar first">
            <div id="sidebar-first-inner" class="inner">
              <?php print $left; ?>
            </div>
          </div>
        <?php endif; ?> <!-- /sidebar-left -->

        <?php if ($right): ?>
          <div id="sidebar-second" class="column sidebar second last">
            <div id="sidebar-second-inner" class="inner">
              <?php print $right; ?>
            </div>
          </div>
        <?php endif; ?> <!-- /sidebar-second -->

      </div> <!-- /main -->

      <!-- FOOTER -->

      <?php if(!empty($footer_message) || !empty($footer)): ?>
        <div id="footer">
          <?php print $footer_message; ?>
          <?php print $footer; ?>
        </div> <!-- /footer -->
      <?php endif; ?>

    </div> <!-- /page -->
          
      <!-- FOOTER BOTTOM -->
    <?php if ($footer_bottom): ?>
	    <div id="footer-bottom">
	    		<div id="footer-bottom-wrapper">
		    		<div id="footer-bottom-inner">
		    			<?php print $footer_bottom; ?>
		    		</div><!-- /footer-bottom-inner -->
		    	</div><!-- /footer-bottom-wapper -->
	    </div><!-- /footer-bottom (full screen) -->
    <?php endif; ?>
    <?php print $closure; ?>
  </body>
</html>
