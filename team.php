<?php/* Template Name: Team */?>
<?php get_header(); ?>
<main class="team-page section-pad">
    <header class="team-intro">
        <h1 id="heading"><?php the_title(); ?></h1>
    </header>
    <?php
        $team = new WP_Query([
            "post_type" => "post",
            "posts_per_page" => -1,
            "category_name" => "Team",
            "orderby" => "title",
            "order" => "ASC",
        ]);
    ?>
    <?php if($team->have_posts()): while($team->have_posts()): $team->the_post(); ?>
    <?php 
        $role = get_field("role");
        $shortBio = get_field("short-bio");
        $email = get_field("email");
        $linkedin = get_field("linkedin");
    ?>
    <li class="team-card">
        <div class="team-photo">
            <?php if(has_photo_thumbnail()){
                    the_post_thumbnail("team-avatar", ["alt" => get_the_title()]);
                } ?>
        </div>
        <div class="team-info">
            <h3 class="team-name"><?php the_title(); ?></h3>
            <?php if($role): ?> <p class="team-role"><?php echo esc_html($role); ?></p> <?php endif; ?>
        </div>
    </li>
    <?php endwhile;?>
    <?php endif;?>
</main>
<?php get_footer(); ?>