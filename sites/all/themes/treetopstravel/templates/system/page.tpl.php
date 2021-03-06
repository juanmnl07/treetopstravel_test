<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 */
?>
<header class="header" role="banner">
  
  <?php if ($page['top_header']): ?>
    <div class="top-header-container" id="top-header">
      <div class="grid-1000 top-header-wrapper">
        <?php if ($logo): ?>
    <div class="logo-container"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
      <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
    </a></div>
  <?php endif; ?>
        <?php print render($page['top_header']); ?>
      </div>
    </div>  
  <?php endif; ?>
  <div class="main-header">
    
  <?php if ($page['utility_bar']): ?>
    <div class="utility-bar">
      <?php print render($page['utility_bar']); ?>
    </div><!-- end utility bar -->
  <?php endif; ?>
  

  

  <?php if ($site_name || $site_slogan): ?>

      <?php if ($site_name): ?>
        <?php if ($title): ?>

          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>

        <?php else: /* Use h1 when the content title is empty */ ?>
          <h1 id="site-name">
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
          </h1>
        <?php endif; ?>
      <?php endif; ?>

      <?php if ($site_slogan): ?>
        <?php print $site_slogan; ?>
      <?php endif; ?>

  <?php endif; ?>

  <?php print render($page['header']); ?>

</div>
</header>

<?php if ($page['above_content']): ?>
  <section class="above-content">
    <?php print render($page['above_content']); ?>
  </section>
<?php endif; // end Above Content ?>

<div class="main-content">
  <?php if ($breadcrumb): ?>
    <div class="grid-1000"><?php print $breadcrumb; ?></div>
  <?php endif; ?>

  <?php if ($page['highlighted']): ?>
    <?php print render($page['highlighted']); ?>
  <?php endif; ?>

    <a id="main-content"></a>
    <div class="main" role="main">
       <?php if ($messages): ?>
  <div class="messages-wrapper">
    <div class="messages-content">
      <?php print $messages; ?>
    </div>
  </div>
  <?php endif; ?>
    <?php /*<div class="grid-1000"><?php print render($title_prefix); ?>
      <?php if ($title): ?><h2 class="title" id="page-title"><?php print $title; ?></h2><?php endif; ?>
      <?php print render($title_suffix); ?>
    </div>   */?>

      <?php if ($tabs): ?>
        <?php print render($tabs); ?>

      <?php endif; ?>

      <?php print render($page['help']); ?>

      <?php if ($action_links): ?>
        <ul class="action-links">
          <?php print render($action_links); ?>
        </ul>
      <?php endif; ?>

      <?php print render($page['content']); ?>

    </div>

  <?php if ($page['sidebar_first']): ?>
    <div id="sidebar-first" class="">
      <?php print render($page['sidebar_first']); ?>
    </div> <!-- /.section, /#sidebar-first -->
  <?php endif; ?>

  <?php if ($page['sidebar_second']): ?>
    <div id="sidebar-second" class="">
      <?php print render($page['sidebar_second']); ?>
    </div> <!-- /.section, /#sidebar-second -->
  <?php endif; ?>
</div>

<?php if ($page['below_content']): ?>
  <section class="below-content">
    <?php print render($page['below_content']); ?>
  </section>
<?php endif; // end Below Content ?>

<footer class="footer-zone" role="contentinfo">
  
  <?php if ($page['pre_footer']): ?>
    <div class="prefooter">
      <div class="grid-1000">
        <?php print render($page['pre_footer']); ?>
      </div>
    </div>
  <?php endif; ?>
  <div class="grid-1000">
  <?php if ($page['footer_left']): ?>
    <div class="footer-left">
      <?php print render($page['footer_left']); ?>
    </div>
  <?php endif; ?>
 
  <?php if ($page['footer_right']): ?>
    <div class="footer-right">
      <?php print render($page['footer_right']); ?>
    </div>
  <?php endif; ?>
  </div>
  <div class="footer">
    <div class="grid-1000">
      <?php print render($page['footer']); ?>
    </div>
  </div>
</footer>

<?php if ($page['closure']): ?>
<aside class="closure">
  <?php print render($page['closure']); ?>
</aside>
<?php endif; // end closure ?>



