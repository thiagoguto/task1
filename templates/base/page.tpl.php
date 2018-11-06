<header class="navbar">
        <nav class="container row">
            <?php if ($logo): ?>
            <div class="col-2-3-xs col-2-3-s col-1-3-m col-2-6-l col-2-6 logo">
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                    <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                </a>
            </div>
            <?php endif; ?>
            <?php if ($main_menu): ?>
            <div class="col-1-3-xs col-1-3-s col-2-3-m col-4-6-l col-4-6 ">
                <div class="navbar-right">
                <?php print theme('links__system_main_menu', array(
                'links' => $main_menu,
                'attributes' => array(
                    'id' => 'main-menu',
                    'class' => array('desktop-menu'),
                ),
                'heading' => array(
                    'text' => t('Main menu'),
                    'level' => 'h2',
                    'class' => array('element-invisible'),
                ),
            )); ?>
            <div class='btn-menu'><a href='#'>menu</a></div>
            <?php print theme('links__system_main_menu', array(
                'links' => $main_menu,
                'attributes' => array(
                    'id' => 'main-menu',
                    'class' => array('mobile-menu'),
                ),
                'heading' => array(
                    'text' => t('Main menu'),
                    'level' => 'h2',
                    'class' => array('element-invisible'),
                ),
            )); ?>
            </div>
            </div>
            <?php endif; ?>
        </nav>
</header>
<?php if ($is_front): ?>
<?php print render($page['hero']); ?>
<?php print render($page['home']); ?>
<?php print render($page['content']);  ?>
<?php else: ?>
<div class='main'>
<div class='container row'>
    <?php print render($title_prefix); ?>
    <?php if ($title): ?>
    <h1 class="title" id="page-title">
        <?php print $title; ?>
    </h1>
    <?php endif; ?>
    <?php print render($title_suffix); ?>
    <?php if ($tabs): ?>
    <div class="col-1-1">
        <?php print render($tabs); ?>
    </div>
    <?php endif; ?>
    <?php print render($page['help']); ?>
<?php print render($page['content']);  ?>
</div>
</div>
<?php endif; ?>
<?php print render($page['footer']); ?>