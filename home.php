<?php get_header(); ?>
<main class="blog-list">
    <h1 class="blog-title">Latest Posts</h1>

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <article <?php post_class('blog-item') ?>>
        <h2 class="blog-item__title">
            <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
        </h2>
        <p class="blog-item__excerpt">
            <?php the_excerpt();?>
        </p>
    </article>
    <?php endwhile; ?>
    <nav class="pagination">
        <?php the_posts_pagination(); ?>
    </nav>
    <?php else: ?>
        <p>No posts found.</p>
    <?php endif;?>
</main>
<?php get_footer();?>