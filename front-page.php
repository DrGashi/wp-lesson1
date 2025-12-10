<?php get_header(); ?>
<div class="main-cont">
    <main>
        <section class="banner" id="banner">
            <h1>Formula 1®</h1>
            <h3>Audi will compete in the premier class of motorsport in 2026</h3>
            <button class="banner-button">Discover More</button>
        </section>
        <section class="card-section">
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
        <section class="card-section">
            <h1>Press releases</h1>
            <div class="cards">
                <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                <div class="card">
                    <?php the_post_thumbnail(); ?>
                    <span class="date">10/22/2025</span>
                    <p class="title"><?php the_title();?></p>
                    <p class="desc"><?php the_excerpt();?></p>
                    <a href="<?php the_permalink(); ?>">To The Press Release </a>
                </div></article>
                <?php endwhile; ?>
                <nav class="pagination">
                    <?php the_posts_pagination(); ?>
                </nav>
                <?php else: ?>
                    <p>No posts found.</p>
                <?php endif;?>
            </div>
            <img src="<?php echo esc_url(get_theme_file_uri("images/Innovation.jpg")); ?>" alt="">
        </section>
        <section class="card-section">
            <h1>Press releases</h1>
            <div class="cards">
                <div class="card">
                    <img src="<?php echo esc_url(get_theme_file_uri("images/Disney.png")); ?>" alt="">
                    <p class="title">Audi brings Disney+ into the vehicle and enters “the Grid” in the movie “TRON: Ares”</p>
                    <a href="">To The Press Release </a>
                </div>
                <div class="card">
                    <img src="<?php echo esc_url(get_theme_file_uri("images/AutoGuangzhou.png")); ?>" alt="">
                    <p class="title">Auto Guangzhou 2025: Audi continues to push ahead with its largest product initiative in China</p>
                    <a href="">To The Press Release </a>
                    <p class="desc">Audi Q3 SUV: Fuel consumption (combined): 9.0–5.3 l/100 km; CO₂ emissions (combined): 205–137 g/km; CO₂ classes: G–E</p>
                </div>
                <div class="card">
                    <img src="<?php echo esc_url(get_theme_file_uri("images/Scam.png")); ?>" alt="">
                    <p class="title">Warning: scam in the used-car trade</p>
                    <a href="">To The Press Release </a>
                </div>
            </div>
            <div class="section-button">
                <button class="banner-button">To The Audi MediaCenter</button>
            </div>
        </section>
        <section class="card-section audi">
            <div class="image">
                <img src="<?php echo esc_url(get_theme_file_uri("images/Audi.png")); ?>" alt="">
            </div>
            <div class="description">
                <h1>At Audi you’ll find the right vehicle for every requirement</h1>
                <p>Sporty, luxurious, or compact – at Audi you will find the right vehicle for every requirement. Discover and configure our series models now.
                <br><br>
                Power consumption (combined): 18.6–17.5 kWh/100km; CO₂ emissions (combined): 0 g/km; CO₂ emission class: A</p>
            </div>
        </section>
    </main>
    <section class="footer">
        <div class="top-footer">
            <div class="topics">
                <h2 class="title">Topics</h2>
                <p>Company</p>
                <p>Inovation</p>
                <p>Sustainability</p>
                <p>Careers</p>
                <p>Audi in sport</p>
            </div>
            <div class="topics">
                <h2 class="title">AUDI AG</h2>
                <p>Audi Report 2024</p>
                <p>Documents & Policies</p>
                <p>Financial Calendar</p>
                <p>Management</p>
                <p>Locations</p>
            </div>
            <div class="topics">
                <h2 class="title">Services</h2>
                <p>myAudi</p>
                <p>Press</p>
                <p>Contact</p>
                <p>Job portal</p>
            </div>
            <div class="topics">
                <a href="#banner">Back to top Ʌ</a>
            </div>
        </div>
        <div class="line"></div>
        <div class="bottom-footer">
            <span class="copyright">© 2025 AUDI AG. All rights reserved</span>
            <ul>
                <li>Legal Notice</li>
                <li>Legal</li>
                <li>Whistleblower System</li>
                <li>Privacy Policy</li>
                <li>Cookie Policy</li>
                <li>Cookie Consent Options</li>
            </ul>
            <div class="lang-button">
                <button>English</button>
            </div>
        </div>
    </section>
    <?php get_footer();?>
</div>
</body>
</html>