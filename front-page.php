<?php get_header();?>
<main>
    <section class="hero">
        <img src="<?php echo esc_url(get_theme_file_uri("images/mtFSL8tRFgH6.png")); ?>" alt="">
    </section>
    <section class="features">
        <br>
        <h2 id="heading">Why chose us?</h2>
        <br>
        <li style="margin: 5px">
            <img src="<?php echo esc_url(get_theme_file_uri("images/project.png")); ?>" alt="">
            <span>Project based learning</span>
        </li>
        <li style="margin: 5px">
            <img src="<?php echo esc_url(get_theme_file_uri("images/ins.png")); ?>" alt="">
            <span>Instructors who inspire</span>
        </li>
        <li style="margin: 5px">
            <img src="<?php echo esc_url(get_theme_file_uri("images/feature.png")); ?>" alt="">
            <span>Future ready digital skills</span>
        </li>
        <li style="margin: 5px">
            <img src="<?php echo esc_url(get_theme_file_uri("images/online.png")); ?>" alt="">
            <span>Online or in person</span>
        </li>
    </section>
    <section class="section-pad">
        <h2 id="curricula-heading">Curriculumn by Age</h2>
        <ul class="curricula-grid">
            <li class="card">
                <h3 class="card-title">
                    <span class="label">CURRICULUMN FOR THE GROUP AGE</span>
                    <span class="age">8-11</span>
                </h3>
                <ul class="class-points">
                    <li><strong>Content:</strong></li>
                    <li><strong>Period:</strong></li>
                    <li><strong>Intensity:</strong></li>
                    <li><strong>Method</strong></li>
                </ul>
            </li>
        </ul>
    </section>
</main>
<?php get_footer();?>