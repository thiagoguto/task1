<header>
    <nav>
        <?php if ($logo): ?>
            <div class='logo'>
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                    <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                </a>
            </div>
        <?php endif; ?>
        <?php if ($main_menu): ?>
            <?php print theme('links__system_main_menu', array(
                'links' => $main_menu,
                'attributes' => array(
                    'id' => 'main-menu',
                    'class' => array('navbar-menu', 'clearfix'),
                ),
                'heading' => array(
                    'text' => t('Main menu'),
                    'level' => 'h2',
                    'class' => array('element-invisible'),
                ),
            )); ?>
        <?php endif; ?>
    </nav>
</header>
<?php print render($page['header']); ?>
<?php print render($page['content']);  ?>
<?php print render($page['footer']); ?>

