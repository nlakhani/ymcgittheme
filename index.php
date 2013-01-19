<?php get_header(); ?>

    <div id="main">
        <div id="article_list">
        <?php
        // load in dynamic post content

        // create a 'while' loop to give instructions to WordPress about what to do if it finds posts in the database
        while(have_posts()):
            the_post();
        ?>
        <article>
            <!-- display each post title -->
            <h1><?php the_title(); ?></h1>

            <!-- display article content -->
            <?php the_content(); ?>
        </article>

        <?php
        endwhile;
        ?>
        </div> <!-- #article_list -->
        <?php get_sidebar(); ?>

    </div> <!-- #main -->

<?php get_footer(); ?>