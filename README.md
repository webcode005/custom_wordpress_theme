Replace Static Content with WP Dynamic Content
Example changes:

Menus → replace <ul> with:

php
Copy
Edit
<?php wp_nav_menu(array(
    'theme_location' => 'main-menu',
    'container' => false,
    'menu_class' => 'navbar-nav'
)); ?>
Blog content → use WordPress loop:

php
Copy
Edit
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
<?php endwhile; endif; ?>
