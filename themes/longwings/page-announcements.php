<?php
/*
Template Name : Announcements
*/

get_header();
require('navbar.php');
require('small-hero.php');
?>

<div id="primary" class="content-area" >
    <main id="main" class="site-main" style="padding-bottom:40px;">
        <div class="cardholders-main" >
        <div class="main-card-cover" style="display: flex; flex-direction: column; align-items:center; padding-top: 40px;">
            <?php
            $args = array(
                'post_type' => 'post', // Fetch regular posts
                'posts_per_page' => 5, // Display 10 posts per page
                'paged' => get_query_var('paged') ? get_query_var('paged') : 1 // Pagination
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
                    // Display post content here
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="max-width: 1000px; width: 100%; border: 2px solid #333; min-height: 200px; border-radius: 10px; background-color: rgba(255, 255, 255, 0.8); padding: 30px; margin-bottom: 40px;">
                        <header class="entry-header">
                            <h2 class="entry-title" style="font-family:BioRhyme; font-size: 2rem;"><a style="color:#333;"href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        </header>
                        <div class="entry-meta">
                            <span class="posted-on" style="font-family: Alike; font-weight: bold;">Posted on <?php echo get_the_date(); ?></span>
                        </div>
                        <div class="entry-content" style="font-family:Alike;">
                            <?php the_excerpt(); 
                            if (has_excerpt()) { // Check if an explicit excerpt is set
                                echo '<a style="color: #333; font-family: Alike;"href="' . get_permalink() . '" class="read-more">Read More</a>';
                            } else {
                                echo '<a style="color: #333; font-family: Alike;"href="' . get_permalink() . '" class="read-more">Read More</a>';
                            }
                            ?>
                        </div>
                    </article>
                <?php endwhile; ?>
                <div class="pagination">
                    <?php
                    echo paginate_links(array(
                        'total' => $query->max_num_pages,
                    ));
                    ?>
                </div>
            <?php
            else :
                echo '<p>No posts found</p>';
            endif;
            wp_reset_postdata();
            ?>
        </div>
        </div>
    </main><!-- #main -->
</div><!-- #primary -->

<?php
require('cta.php');
get_footer();
?>