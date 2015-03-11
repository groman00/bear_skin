<div id="page" class="m-scene">
  <div class="wrapper header">
    <header id="header" role="banner">

      <?php if ($logo): ?>
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
      <?php endif; ?>

      <?php if ($site_name || $site_slogan): ?>
        <hgroup id="name-and-slogan">
          <?php if ($site_name): ?>
            <h1 id="site-name">
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
            </h1>
          <?php endif; ?>

          <?php if ($site_slogan): ?>
            <h2 id="site-slogan"><?php print $site_slogan; ?></h2>
          <?php endif; ?>
        </hgroup><!-- /#name-and-slogan -->
      <?php endif; ?>

      <?php print render($page['header']); ?>
        <?php if (theme_get_setting('user_menu')): ?>
          <nav id="bear-user-menu" role="navigation" class="nav-user">
            <?php // provide userMenu label here for WAI accessibility ?>
            <h3 class="u-hidden" id="userMenuLabel"><?php print t('My Account Menu:') ?></h3>
            <?php print $user_menu;  ?>
          </nav>
        <?php endif; ?>
    </header>
  </div>

  <div class="wrapper navigation">
    <nav id="navigation" tabindex="-1" class="main-menu">
      <?php // provide userMenu label here for WAI accessibility ?>
      <h3 class="u-hidden" id="mainMenuLabel"><?php print t('Main Navigation Menu:') ?></h3>
      <?php print render($page['navigation']); ?>
    </nav><!-- /#navigation -->
  </div>

  <div class="wrapper main">
    <div id="main" class="scene_element scene_element--fadein">
      <div id="content" class="column" role="main">
        <?php print render($page['highlighted']); ?>
        <?php print $breadcrumb; ?>
        <a id="main-content"></a>
        <?php print render($title_prefix); ?>
        <?php if ($title): ?>
          <h1 class="title" id="page-title"><?php print $title; ?></h1>
        <?php endif; ?>
        <?php print render($title_suffix); ?>
        <?php print $messages; ?>
        <?php print render($tabs); ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?>
          <ul class="action-links"><?php print render($action_links); ?></ul>
        <?php endif; ?>
        <?php print render($page['content']); ?>
        <?php print $feed_icons; ?>
      </div><!-- /#content -->

      <?php if ($has_sidebar_first || $has_sidebar_second): ?>
        <aside class="sidebars">
          <?php print render($page['sidebar_first']); ?>
          <?php print render($page['sidebar_second']); ?>
        </aside><!-- /.sidebars -->
      <?php endif; ?>

    </div><!-- /#main -->
  </div>
</div><!-- /#page -->
<div class="wrapper footer">
  <?php print render($page['footer']); ?>
</div>
