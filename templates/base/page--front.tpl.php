<header>
    <nav class="container row">
        <?php if ($logo): ?>
            <div class='col-l-2 logo'>
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                    <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                </a>
            </div>
        <?php endif; ?>
        <?php if ($main_menu): ?>
            <div class='col-l-10 navbar-right'>
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
            </div>
        <?php endif; ?>
    </nav>
</header>
<?php if ($front_page): ?>
    <?php print render($page['hero']); ?>
    <?php print render($page['home']); ?>
<?php endif; ?>
<?php print render($page['header']); ?>
<?php print render($page['content']);  ?>
<?php print render($page['footer']); ?>

