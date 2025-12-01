<?php get_header(); ?>
<main>
    <section class="banner">
        <h1>Formula 1®</h1>
        <h3>Audi will compete in the premier class of motorsport in 2026</h3>
        <button class="banner-button">Discover More</button>
    </section>
    <section class="current">
        <h1>Current topics from the world of Audi</h1>
        <div class="cards">
            <div class="card">
                <img src="<?php echo esc_url(get_theme_file_uri("images/VehicleSafety.jpg")); ?>" alt="">
                <span class="date">10/22/2025</span>
                <p class="title">Vehicle safety at Audi: When milliseconds count</p>
                <p class="desc">Find out how Audi is using the latest collision technology – from sensors to crash tests. Learn more.</p>
                <a href="">Read More </a>
            </div>
            <div class="card">
                <img src="<?php echo esc_url(get_theme_file_uri("images/DataScience.jpg")); ?>" alt="">
                <span class="date">10/20/2025</span>
                <p class="title">Data Science and Complex Driving Systems: the Keys to Tomorrow’s Mobility</p>
                <p class="desc">Jan Totz, data scientist specializing in autonomous driving and parking, in an interview.</p>
                <a href="">Read More </a>
            </div>
            <div class="card">
                <img src="<?php echo esc_url(get_theme_file_uri("images/Strive.jpg")); ?>" alt="">
                <p class="title">Strive for clarity</p>
                <p class="desc">The brightest moments in Audi history involved daring leaps of imagination and innovation, cutting-edge technology, and groundbreaking design. The new design philosophy "The Radical Next" builds on this legacy and is based on four principles: clear, technical, intelligent, and emotional. Through the way Audi designs its vehicles, clarity will shape the company.</p>
                <a href="">Read More </a>
            </div>
        </div>
        <img src="<?php echo esc_url(get_theme_file_uri("images/Innovation.jpg")); ?>" alt="">
    </section>
</main>
<?php get_footer(); ?>