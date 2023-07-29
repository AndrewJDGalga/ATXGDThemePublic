<!DOCTYPE html>
<html>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title><?php wp_title('|', true, 'right'); ?></title>
        <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_uri()); ?>" type="text/css">
        <!--Adobe Hightower + Bilo font link-->
        <link rel="stylesheet" href="https://use.typekit.net/fgr8upo.css">
    </head>
    <body>
        <header class="atxgd-header">
                <div class="header_logo header_backing-image">
                    <a class="header_home-wrapper" href="<?php echo home_url( ); ?>">
                        <img src="<?php echo get_template_directory_uri() . '/assets/banner/ATX-GD-Logo-CW-02.webp' ?>" alt="ATX Game Designers Group name">
                    </a>
                </div>
                <div class="header_nav">
                    <?php 
                        //dynamic menu
                        wp_nav_menu(array(
                            'theme_location' => 'primary-menu',
                            'container' => '',
                            'menu_class' => 'wp-nav-ul'
                        ));
                    ?>
                </div>
        </header>

        <?php wp_head(); ?>

        <article class="atxgd-content">
            <?php if(have_posts(  )) : while(have_posts(  )) : the_post(  );?>
                <h1 style="display: none;"><?php the_title( ); ?></h1>
                <?php the_content(); ?>
                <?php wp_link_pages( ); ?>
                <?php edit_post_link(); ?>
            <?php endwhile;?>
            <?php 
                if(get_next_posts_link( )){ next_posts_link( );}
            ?>
            <?php 
                if(get_previous_posts_link()) { previous_posts_link();}
            ?>
            <?php else: ?> 
                <p>No posts found. :( </p>
            <?php endif; ?>
        </article>

        <?php wp_footer(); ?>

        <footer class="atxgd-footer">
            <div class="icon-container high-center-wave">
                <a href="https://www.facebook.com/groups/austinboardgamedesigners" target="_blank">
                    <img class="facebook-svg" src="<?php echo get_template_directory_uri() . '/assets/icons/icons8-facebook_green.svg' ?>" alt="Green-colored SVG of the Facebook F logo">
                </a>
                <a href="https://www.meetup.com/austin-board-game-designers-and-play-testers/" target="_blank">
                    <img class="meetup-svg" src="<?php echo get_template_directory_uri() . '/assets/icons/meetup-svgrepo-com.svg' ?>" alt="Green-colored SVG of the Meetup 'Swarm' logo">
                </a>
            </div>
        </footer>
    </body>
</html>