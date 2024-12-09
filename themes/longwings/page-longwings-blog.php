<?php
require_once('header.php');
require_once('navbar.php');
require('small-hero.php');

// Set the number of posts per page
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$records = new WP_Query([
    'posts_per_page' => 6, // Adjust the number of posts per page as needed
    'post_type' => 'longwings_blog_post',
    'order' => 'ASC',
    'paged' => $paged
]);
?>
<style>
    .card {
        height: 100%; /* Make cards take full height of the column */
    }
    .card-body {
        display: flex;
        flex-direction: column;
        justify-content: space-between; /* Space out elements */
        flex-grow: 1; /* Allow card body to grow */
    }
    .card-img-top {
        height: 350px; /* Set a fixed height for images */
        object-fit: cover; /* Ensure images cover the area without stretching */
    }
</style>

<div class="container" style="padding-top:30px;">
    <div class="row">
        <?php if ($records->have_posts()) : ?>
            <?php while ($records->have_posts()) : $records->the_post(); ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" alt="<?php the_title(); ?>" >
                        <?php endif; ?>
                        <div class="card-body">
                            <h5 class="card-title"><?php the_title(); ?></h5>
                            <p class="card-text"><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn" style="background-color: #333; color:gold;">Read More</a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <p>No posts found.</p>
        <?php endif; ?>
    </div>

    <!-- Pagination -->
    <div class="pagination">
        <?php
        echo paginate_links([
            'total' => $records->max_num_pages,
            'current' => $paged,
            'prev_text' => __('« Previous'),
            'next_text' => __('Next »'),
        ]);
        ?>
    </div>
</div>

<?php
require_once('footer.php');
?>