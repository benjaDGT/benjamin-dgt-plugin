<?php get_header(); ?>

<div class="wrap-preloader">
  <div class="item-wrap-preloader">
    <?php idx_the_custom_logo_header(); ?>
    <span class="preloader-icon"></span>
  </div>
</div>

<main>
  <section id="welcome" class="ms-section ms-animate">
    <h1 class="ms-title">Brickell & Downtown <span>Miami Condos</span></h1>
    <h2 class="ms-subtitle">#1 resource for brickell & downtown miami condos</h2>
    <div class="ms-wrap-btn">
      <a href="#" class="ms-btn"><span>buy a condo</span></a>
      <a href="#" class="ms-btn"><span>list your unit</span></a>
    </div>
    <?php echo do_shortcode('[flex_autocomplete]'); ?>
    <div class="ms-slider">
      <img data-real-type="image" data-img="<?php echo get_template_directory_uri(); ?>/images/home/ms-layer.png" src="<?php echo get_template_directory_uri(); ?>/images/temp.png" class="ms-layer ms-lazy" alt="Lorem ipsum">
    </div>
    <button class="ms-next-step" data-step="#featured-properties">
      <div class="chevron"></div>
      <div class="chevron"></div>
      <div class="chevron"></div>
    </button>
  </section>
  
  <section id="featured-properties" class="ms-section ms-animate">
    <h2 class="ms-title">FEATURED PROPERTIES</h2>
    <?php
      $filter_featured_page_token = flex_filter_has_featured_page();
      if (null !== $filter_featured_page_token) {
        echo do_shortcode(sprintf('[flex_idx_filter id="%s" type="2" slider_item="3" mode="slider" limit="12"]', $filter_featured_page_token));
      }
    ?>
    <div class="ms-wrap-btn">
      <a href="#" class="ms-btn">
        <span>view all listings</span>
      </a>
    </div>
  </section>

	
	
  <section id="about" class="ms-section ms-animate">
    <article>
      <header>
        <h2 class="ms-title">TOP LUXURY REAL ESTATE TOP PRODUCER IN THE AREA</h2>
      </header>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
      <div class="ms-wrap-btn">
        <a href="#" class="ms-btn">
          <span>learn more</span>
        </a>
      </div>
    </article>
    <div class="ms-wrap-img">
      <img data-real-type="image" data-img="<?php echo get_template_directory_uri(); ?>/images/home/ms-about.jpg" class="ms-img ms-img-0 ms-lazy" src="<?php echo get_template_directory_uri(); ?>/images/temp.png" alt="lorem Ipsum">
      <img data-real-type="image" data-img="<?php echo get_template_directory_uri(); ?>/images/home/ms-about-full.jpg" class="ms-img ms-img ms-img-a ms-lazy" src="<?php echo get_template_directory_uri(); ?>/images/temp.png" alt="lorem Ipsum">
      <img data-real-type="image" data-img="<?php echo get_template_directory_uri(); ?>/images/home/ms-about-a.jpg" class="ms-img ms-img ms-img-b ms-lazy" src="<?php echo get_template_directory_uri(); ?>/images/temp.png" alt="lorem Ipsum">
    </div>
    <div class="ms-wrap-img ms-wrap-b">
      <img src="<?php echo get_template_directory_uri(); ?>/images/home/ms-about-b.jpg" class="ms-img ms-img ms-img-b">
    </div>
  </section>

  <section id="ms-ng-a" class="ms-section ms-wrap-ng-cd ms-animate">
    <section class="mg-neighborhoods ">
      <div class="mg-npa" id="wrap-map">
        <div id="code-map-neighboardhood" style="position: relative; overflow: hidden;">
          <div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
            <div class="gm-style" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;">
              <div tabindex="0" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: none;">
                <div style="z-index: 1; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);">
                  <div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;">
                    <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                      <div style="position: absolute; z-index: 987; transform: matrix(1, 0, 0, 1, -116, -215);">
                        <div style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px;">
                          <div style="width: 256px; height: 256px;"></div>
                        </div>
                        <div style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px;">
                          <div style="width: 256px; height: 256px;"></div>
                        </div>
                        <div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px;">
                          <div style="width: 256px; height: 256px;"></div>
                        </div>
                        <div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px;">
                          <div style="width: 256px; height: 256px;"></div>
                        </div>
                        <div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px;">
                          <div style="width: 256px; height: 256px;"></div>
                        </div>
                        <div style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px;">
                          <div style="width: 256px; height: 256px;"></div>
                        </div>
                        <div style="position: absolute; left: 256px; top: 512px; width: 256px; height: 256px;">
                          <div style="width: 256px; height: 256px;"></div>
                        </div>
                        <div style="position: absolute; left: 0px; top: 512px; width: 256px; height: 256px;">
                          <div style="width: 256px; height: 256px;"></div>
                        </div>
                        <div style="position: absolute; left: -256px; top: 512px; width: 256px; height: 256px;">
                          <div style="width: 256px; height: 256px;"></div>
                        </div>
                        <div style="position: absolute; left: -512px; top: 512px; width: 256px; height: 256px;">
                          <div style="width: 256px; height: 256px;"></div>
                        </div>
                        <div style="position: absolute; left: -512px; top: 256px; width: 256px; height: 256px;">
                          <div style="width: 256px; height: 256px;"></div>
                        </div>
                        <div style="position: absolute; left: -512px; top: 0px; width: 256px; height: 256px;">
                          <div style="width: 256px; height: 256px;"></div>
                        </div>
                        <div style="position: absolute; left: -512px; top: -256px; width: 256px; height: 256px;">
                          <div style="width: 256px; height: 256px;"></div>
                        </div>
                        <div style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px;">
                          <div style="width: 256px; height: 256px;"></div>
                        </div>
                        <div style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px;">
                          <div style="width: 256px; height: 256px;"></div>
                        </div>
                        <div style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px;">
                          <div style="width: 256px; height: 256px;"></div>
                        </div>
                        <div style="position: absolute; left: 512px; top: -256px; width: 256px; height: 256px;">
                          <div style="width: 256px; height: 256px;"></div>
                        </div>
                        <div style="position: absolute; left: 512px; top: 0px; width: 256px; height: 256px;">
                          <div style="width: 256px; height: 256px;"></div>
                        </div>
                        <div style="position: absolute; left: 512px; top: 256px; width: 256px; height: 256px;">
                          <div style="width: 256px; height: 256px;"></div>
                        </div>
                        <div style="position: absolute; left: 512px; top: 512px; width: 256px; height: 256px;">
                          <div style="width: 256px; height: 256px;"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;">
                    <div style="position: absolute; left: 0px; top: 0px; z-index: 30;">
                      <div style="position: absolute; z-index: 987; transform: matrix(1, 0, 0, 1, -116, -215);">
                        <div style="width: 256px; height: 256px; position: absolute; left: 0px; top: 256px;">
                          <canvas width="256" height="256" draggable="false" style="width: 256px; height: 256px; user-select: none; position: absolute; left: 0px; top: 0px;"></canvas>
                        </div>
                        <div style="width: 256px; height: 256px; position: absolute; left: -256px; top: 256px;">
                          <canvas width="256" height="256" draggable="false" style="width: 256px; height: 256px; user-select: none; position: absolute; left: 0px; top: 0px;"></canvas>
                        </div>
                        <div style="width: 256px; height: 256px; position: absolute; left: -256px; top: 0px;"></div>
                        <div style="width: 256px; height: 256px; position: absolute; left: 0px; top: 0px;">
                          <canvas width="256" height="256" draggable="false" style="width: 256px; height: 256px; user-select: none; position: absolute; left: 0px; top: 0px;"></canvas>
                        </div>
                        <div style="width: 256px; height: 256px; position: absolute; left: 256px; top: 0px;"></div>
                        <div style="width: 256px; height: 256px; position: absolute; left: 256px; top: 256px;"></div>
                        <div style="width: 256px; height: 256px; position: absolute; left: 256px; top: 512px;"></div>
                        <div style="width: 256px; height: 256px; position: absolute; left: 0px; top: 512px;">
                          <canvas width="256" height="256" draggable="false" style="width: 256px; height: 256px; user-select: none; position: absolute; left: 0px; top: 0px;"></canvas>
                        </div>
                        <div style="width: 256px; height: 256px; position: absolute; left: -256px; top: 512px;">
                          <canvas width="256" height="256" draggable="false" style="width: 256px; height: 256px; user-select: none; position: absolute; left: 0px; top: 0px;"></canvas>
                        </div>
                        <div style="width: 256px; height: 256px; position: absolute; left: -512px; top: 512px;"></div>
                        <div style="width: 256px; height: 256px; position: absolute; left: -512px; top: 256px;"></div>
                        <div style="width: 256px; height: 256px; position: absolute; left: -512px; top: 0px;"></div>
                        <div style="width: 256px; height: 256px; position: absolute; left: -512px; top: -256px;"></div>
                        <div style="width: 256px; height: 256px; position: absolute; left: -256px; top: -256px;"></div>
                        <div style="width: 256px; height: 256px; position: absolute; left: 0px; top: -256px;">
                          <canvas width="256" height="256" draggable="false" style="width: 256px; height: 256px; user-select: none; position: absolute; left: 0px; top: 0px;"></canvas>
                        </div>
                        <div style="width: 256px; height: 256px; position: absolute; left: 256px; top: -256px;"></div>
                        <div style="width: 256px; height: 256px; position: absolute; left: 512px; top: -256px;"></div>
                        <div style="width: 256px; height: 256px; position: absolute; left: 512px; top: 0px;"></div>
                        <div style="width: 256px; height: 256px; position: absolute; left: 512px; top: 256px;"></div>
                        <div style="width: 256px; height: 256px; position: absolute; left: 512px; top: 512px;"></div>
                      </div>
                    </div>
                  </div>
                  <div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div>
                  <div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"></div>
                  <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                    <div style="position: absolute; z-index: 987; transform: matrix(1, 0, 0, 1, -116, -215);">
                      <div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i2271!3i3487!4i256!2m3!1e0!2sm!3i458167433!3m14!2ses-419!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjF8cy5lOmwudC5mfHAuYzojZmY1OTdjODR8cC5sOi0zNyxzLnQ6MTh8cy5lOmcuc3xwLnY6b2ZmLHMudDo1fHMuZTpnfHAubDowfHAuczowfHAuYzojZmZmNWY1ZjJ8cC5nOjEscy50OjgxfHAubDotM3xwLmc6MS4wMCxzLnQ6MTMxNHxwLnY6b2ZmLHMudDoyfHAudjpvZmYscy50OjQwfHMuZTpnLmZ8cC5jOiNmZmJhZTVjZXxwLnY6b24scy50OjN8cC5zOi0xMDB8cC5sOjQ1fHAudjpzaW1wbGlmaWVkLHMudDo0OXxwLnY6c2ltcGxpZmllZCxzLnQ6NDl8cy5lOmcuZnxwLmM6I2ZmZmFjOWE5fHAudjpzaW1wbGlmaWVkLHMudDo0OXxzLmU6bC50fHAuYzojZmY0ZTRlNGUscy50OjUwfHMuZTpsLnQuZnxwLmM6I2ZmNzg3ODc4LHMudDo1MHxzLmU6bC5pfHAudjpvZmYscy50OjR8cC52OnNpbXBsaWZpZWQscy50OjEwNTl8cy5lOmwuaXxwLmg6IzBhMDBmZnxwLnM6LTc3fHAuZzowLjU3fHAubDowLHMudDoxMDU3fHMuZTpsLnQuZnxwLmM6I2ZmNDMzMjFlLHMudDoxMDU3fHMuZTpsLml8cC5oOiNmZjZjMDB8cC5sOjR8cC5nOjAuNzV8cC5zOi02OCxzLnQ6NnxwLmM6I2ZmZWFmNmY4fHAudjpvbixzLnQ6NnxzLmU6Zy5mfHAuYzojZmZhOGQ3ZDgscy50OjZ8cy5lOmwudC5mfHAubDotNDl8cC5zOi01M3xwLmc6MC43OQ!4e0&amp;key=AIzaSyBdlczEuxYRH-xlD_EZH4jv0naeVT1JaA4&amp;token=6853" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                      <div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i2272!3i3487!4i256!2m3!1e0!2sm!3i458167433!3m14!2ses-419!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjF8cy5lOmwudC5mfHAuYzojZmY1OTdjODR8cC5sOi0zNyxzLnQ6MTh8cy5lOmcuc3xwLnY6b2ZmLHMudDo1fHMuZTpnfHAubDowfHAuczowfHAuYzojZmZmNWY1ZjJ8cC5nOjEscy50OjgxfHAubDotM3xwLmc6MS4wMCxzLnQ6MTMxNHxwLnY6b2ZmLHMudDoyfHAudjpvZmYscy50OjQwfHMuZTpnLmZ8cC5jOiNmZmJhZTVjZXxwLnY6b24scy50OjN8cC5zOi0xMDB8cC5sOjQ1fHAudjpzaW1wbGlmaWVkLHMudDo0OXxwLnY6c2ltcGxpZmllZCxzLnQ6NDl8cy5lOmcuZnxwLmM6I2ZmZmFjOWE5fHAudjpzaW1wbGlmaWVkLHMudDo0OXxzLmU6bC50fHAuYzojZmY0ZTRlNGUscy50OjUwfHMuZTpsLnQuZnxwLmM6I2ZmNzg3ODc4LHMudDo1MHxzLmU6bC5pfHAudjpvZmYscy50OjR8cC52OnNpbXBsaWZpZWQscy50OjEwNTl8cy5lOmwuaXxwLmg6IzBhMDBmZnxwLnM6LTc3fHAuZzowLjU3fHAubDowLHMudDoxMDU3fHMuZTpsLnQuZnxwLmM6I2ZmNDMzMjFlLHMudDoxMDU3fHMuZTpsLml8cC5oOiNmZjZjMDB8cC5sOjR8cC5nOjAuNzV8cC5zOi02OCxzLnQ6NnxwLmM6I2ZmZWFmNmY4fHAudjpvbixzLnQ6NnxzLmU6Zy5mfHAuYzojZmZhOGQ3ZDgscy50OjZ8cy5lOmwudC5mfHAubDotNDl8cC5zOi01M3xwLmc6MC43OQ!4e0&amp;key=AIzaSyBdlczEuxYRH-xlD_EZH4jv0naeVT1JaA4&amp;token=62761" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                      <div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i2273!3i3487!4i256!2m3!1e0!2sm!3i458167433!3m14!2ses-419!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjF8cy5lOmwudC5mfHAuYzojZmY1OTdjODR8cC5sOi0zNyxzLnQ6MTh8cy5lOmcuc3xwLnY6b2ZmLHMudDo1fHMuZTpnfHAubDowfHAuczowfHAuYzojZmZmNWY1ZjJ8cC5nOjEscy50OjgxfHAubDotM3xwLmc6MS4wMCxzLnQ6MTMxNHxwLnY6b2ZmLHMudDoyfHAudjpvZmYscy50OjQwfHMuZTpnLmZ8cC5jOiNmZmJhZTVjZXxwLnY6b24scy50OjN8cC5zOi0xMDB8cC5sOjQ1fHAudjpzaW1wbGlmaWVkLHMudDo0OXxwLnY6c2ltcGxpZmllZCxzLnQ6NDl8cy5lOmcuZnxwLmM6I2ZmZmFjOWE5fHAudjpzaW1wbGlmaWVkLHMudDo0OXxzLmU6bC50fHAuYzojZmY0ZTRlNGUscy50OjUwfHMuZTpsLnQuZnxwLmM6I2ZmNzg3ODc4LHMudDo1MHxzLmU6bC5pfHAudjpvZmYscy50OjR8cC52OnNpbXBsaWZpZWQscy50OjEwNTl8cy5lOmwuaXxwLmg6IzBhMDBmZnxwLnM6LTc3fHAuZzowLjU3fHAubDowLHMudDoxMDU3fHMuZTpsLnQuZnxwLmM6I2ZmNDMzMjFlLHMudDoxMDU3fHMuZTpsLml8cC5oOiNmZjZjMDB8cC5sOjR8cC5nOjAuNzV8cC5zOi02OCxzLnQ6NnxwLmM6I2ZmZWFmNmY4fHAudjpvbixzLnQ6NnxzLmU6Zy5mfHAuYzojZmZhOGQ3ZDgscy50OjZ8cy5lOmwudC5mfHAubDotNDl8cC5zOi01M3xwLmc6MC43OQ!4e0&amp;key=AIzaSyBdlczEuxYRH-xlD_EZH4jv0naeVT1JaA4&amp;token=118669" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                      <div style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i2273!3i3488!4i256!2m3!1e0!2sm!3i458167433!3m14!2ses-419!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjF8cy5lOmwudC5mfHAuYzojZmY1OTdjODR8cC5sOi0zNyxzLnQ6MTh8cy5lOmcuc3xwLnY6b2ZmLHMudDo1fHMuZTpnfHAubDowfHAuczowfHAuYzojZmZmNWY1ZjJ8cC5nOjEscy50OjgxfHAubDotM3xwLmc6MS4wMCxzLnQ6MTMxNHxwLnY6b2ZmLHMudDoyfHAudjpvZmYscy50OjQwfHMuZTpnLmZ8cC5jOiNmZmJhZTVjZXxwLnY6b24scy50OjN8cC5zOi0xMDB8cC5sOjQ1fHAudjpzaW1wbGlmaWVkLHMudDo0OXxwLnY6c2ltcGxpZmllZCxzLnQ6NDl8cy5lOmcuZnxwLmM6I2ZmZmFjOWE5fHAudjpzaW1wbGlmaWVkLHMudDo0OXxzLmU6bC50fHAuYzojZmY0ZTRlNGUscy50OjUwfHMuZTpsLnQuZnxwLmM6I2ZmNzg3ODc4LHMudDo1MHxzLmU6bC5pfHAudjpvZmYscy50OjR8cC52OnNpbXBsaWZpZWQscy50OjEwNTl8cy5lOmwuaXxwLmg6IzBhMDBmZnxwLnM6LTc3fHAuZzowLjU3fHAubDowLHMudDoxMDU3fHMuZTpsLnQuZnxwLmM6I2ZmNDMzMjFlLHMudDoxMDU3fHMuZTpsLml8cC5oOiNmZjZjMDB8cC5sOjR8cC5nOjAuNzV8cC5zOi02OCxzLnQ6NnxwLmM6I2ZmZWFmNmY4fHAudjpvbixzLnQ6NnxzLmU6Zy5mfHAuYzojZmZhOGQ3ZDgscy50OjZ8cy5lOmwudC5mfHAubDotNDl8cC5zOi01M3xwLmc6MC43OQ!4e0&amp;key=AIzaSyBdlczEuxYRH-xlD_EZH4jv0naeVT1JaA4&amp;token=2125" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                      <div style="position: absolute; left: 256px; top: 512px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i2273!3i3489!4i256!2m3!1e0!2sm!3i458167433!3m14!2ses-419!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjF8cy5lOmwudC5mfHAuYzojZmY1OTdjODR8cC5sOi0zNyxzLnQ6MTh8cy5lOmcuc3xwLnY6b2ZmLHMudDo1fHMuZTpnfHAubDowfHAuczowfHAuYzojZmZmNWY1ZjJ8cC5nOjEscy50OjgxfHAubDotM3xwLmc6MS4wMCxzLnQ6MTMxNHxwLnY6b2ZmLHMudDoyfHAudjpvZmYscy50OjQwfHMuZTpnLmZ8cC5jOiNmZmJhZTVjZXxwLnY6b24scy50OjN8cC5zOi0xMDB8cC5sOjQ1fHAudjpzaW1wbGlmaWVkLHMudDo0OXxwLnY6c2ltcGxpZmllZCxzLnQ6NDl8cy5lOmcuZnxwLmM6I2ZmZmFjOWE5fHAudjpzaW1wbGlmaWVkLHMudDo0OXxzLmU6bC50fHAuYzojZmY0ZTRlNGUscy50OjUwfHMuZTpsLnQuZnxwLmM6I2ZmNzg3ODc4LHMudDo1MHxzLmU6bC5pfHAudjpvZmYscy50OjR8cC52OnNpbXBsaWZpZWQscy50OjEwNTl8cy5lOmwuaXxwLmg6IzBhMDBmZnxwLnM6LTc3fHAuZzowLjU3fHAubDowLHMudDoxMDU3fHMuZTpsLnQuZnxwLmM6I2ZmNDMzMjFlLHMudDoxMDU3fHMuZTpsLml8cC5oOiNmZjZjMDB8cC5sOjR8cC5nOjAuNzV8cC5zOi02OCxzLnQ6NnxwLmM6I2ZmZWFmNmY4fHAudjpvbixzLnQ6NnxzLmU6Zy5mfHAuYzojZmZhOGQ3ZDgscy50OjZ8cy5lOmwudC5mfHAubDotNDl8cC5zOi01M3xwLmc6MC43OQ!4e0&amp;key=AIzaSyBdlczEuxYRH-xlD_EZH4jv0naeVT1JaA4&amp;token=16652" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                      <div style="position: absolute; left: -512px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i2270!3i3486!4i256!2m3!1e0!2sm!3i458167433!3m14!2ses-419!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjF8cy5lOmwudC5mfHAuYzojZmY1OTdjODR8cC5sOi0zNyxzLnQ6MTh8cy5lOmcuc3xwLnY6b2ZmLHMudDo1fHMuZTpnfHAubDowfHAuczowfHAuYzojZmZmNWY1ZjJ8cC5nOjEscy50OjgxfHAubDotM3xwLmc6MS4wMCxzLnQ6MTMxNHxwLnY6b2ZmLHMudDoyfHAudjpvZmYscy50OjQwfHMuZTpnLmZ8cC5jOiNmZmJhZTVjZXxwLnY6b24scy50OjN8cC5zOi0xMDB8cC5sOjQ1fHAudjpzaW1wbGlmaWVkLHMudDo0OXxwLnY6c2ltcGxpZmllZCxzLnQ6NDl8cy5lOmcuZnxwLmM6I2ZmZmFjOWE5fHAudjpzaW1wbGlmaWVkLHMudDo0OXxzLmU6bC50fHAuYzojZmY0ZTRlNGUscy50OjUwfHMuZTpsLnQuZnxwLmM6I2ZmNzg3ODc4LHMudDo1MHxzLmU6bC5pfHAudjpvZmYscy50OjR8cC52OnNpbXBsaWZpZWQscy50OjEwNTl8cy5lOmwuaXxwLmg6IzBhMDBmZnxwLnM6LTc3fHAuZzowLjU3fHAubDowLHMudDoxMDU3fHMuZTpsLnQuZnxwLmM6I2ZmNDMzMjFlLHMudDoxMDU3fHMuZTpsLml8cC5oOiNmZjZjMDB8cC5sOjR8cC5nOjAuNzV8cC5zOi02OCxzLnQ6NnxwLmM6I2ZmZWFmNmY4fHAudjpvbixzLnQ6NnxzLmU6Zy5mfHAuYzojZmZhOGQ3ZDgscy50OjZ8cy5lOmwudC5mfHAubDotNDl8cC5zOi01M3xwLmc6MC43OQ!4e0&amp;key=AIzaSyBdlczEuxYRH-xlD_EZH4jv0naeVT1JaA4&amp;token=67489" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                      <div style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i2271!3i3486!4i256!2m3!1e0!2sm!3i458167433!3m14!2ses-419!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjF8cy5lOmwudC5mfHAuYzojZmY1OTdjODR8cC5sOi0zNyxzLnQ6MTh8cy5lOmcuc3xwLnY6b2ZmLHMudDo1fHMuZTpnfHAubDowfHAuczowfHAuYzojZmZmNWY1ZjJ8cC5nOjEscy50OjgxfHAubDotM3xwLmc6MS4wMCxzLnQ6MTMxNHxwLnY6b2ZmLHMudDoyfHAudjpvZmYscy50OjQwfHMuZTpnLmZ8cC5jOiNmZmJhZTVjZXxwLnY6b24scy50OjN8cC5zOi0xMDB8cC5sOjQ1fHAudjpzaW1wbGlmaWVkLHMudDo0OXxwLnY6c2ltcGxpZmllZCxzLnQ6NDl8cy5lOmcuZnxwLmM6I2ZmZmFjOWE5fHAudjpzaW1wbGlmaWVkLHMudDo0OXxzLmU6bC50fHAuYzojZmY0ZTRlNGUscy50OjUwfHMuZTpsLnQuZnxwLmM6I2ZmNzg3ODc4LHMudDo1MHxzLmU6bC5pfHAudjpvZmYscy50OjR8cC52OnNpbXBsaWZpZWQscy50OjEwNTl8cy5lOmwuaXxwLmg6IzBhMDBmZnxwLnM6LTc3fHAuZzowLjU3fHAubDowLHMudDoxMDU3fHMuZTpsLnQuZnxwLmM6I2ZmNDMzMjFlLHMudDoxMDU3fHMuZTpsLml8cC5oOiNmZjZjMDB8cC5sOjR8cC5nOjAuNzV8cC5zOi02OCxzLnQ6NnxwLmM6I2ZmZWFmNmY4fHAudjpvbixzLnQ6NnxzLmU6Zy5mfHAuYzojZmZhOGQ3ZDgscy50OjZ8cy5lOmwudC5mfHAubDotNDl8cC5zOi01M3xwLmc6MC43OQ!4e0&amp;key=AIzaSyBdlczEuxYRH-xlD_EZH4jv0naeVT1JaA4&amp;token=123397" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                      <div style="position: absolute; left: 512px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i2274!3i3487!4i256!2m3!1e0!2sm!3i458153254!3m14!2ses-419!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjF8cy5lOmwudC5mfHAuYzojZmY1OTdjODR8cC5sOi0zNyxzLnQ6MTh8cy5lOmcuc3xwLnY6b2ZmLHMudDo1fHMuZTpnfHAubDowfHAuczowfHAuYzojZmZmNWY1ZjJ8cC5nOjEscy50OjgxfHAubDotM3xwLmc6MS4wMCxzLnQ6MTMxNHxwLnY6b2ZmLHMudDoyfHAudjpvZmYscy50OjQwfHMuZTpnLmZ8cC5jOiNmZmJhZTVjZXxwLnY6b24scy50OjN8cC5zOi0xMDB8cC5sOjQ1fHAudjpzaW1wbGlmaWVkLHMudDo0OXxwLnY6c2ltcGxpZmllZCxzLnQ6NDl8cy5lOmcuZnxwLmM6I2ZmZmFjOWE5fHAudjpzaW1wbGlmaWVkLHMudDo0OXxzLmU6bC50fHAuYzojZmY0ZTRlNGUscy50OjUwfHMuZTpsLnQuZnxwLmM6I2ZmNzg3ODc4LHMudDo1MHxzLmU6bC5pfHAudjpvZmYscy50OjR8cC52OnNpbXBsaWZpZWQscy50OjEwNTl8cy5lOmwuaXxwLmg6IzBhMDBmZnxwLnM6LTc3fHAuZzowLjU3fHAubDowLHMudDoxMDU3fHMuZTpsLnQuZnxwLmM6I2ZmNDMzMjFlLHMudDoxMDU3fHMuZTpsLml8cC5oOiNmZjZjMDB8cC5sOjR8cC5nOjAuNzV8cC5zOi02OCxzLnQ6NnxwLmM6I2ZmZWFmNmY4fHAudjpvbixzLnQ6NnxzLmU6Zy5mfHAuYzojZmZhOGQ3ZDgscy50OjZ8cy5lOmwudC5mfHAubDotNDl8cC5zOi01M3xwLmc6MC43OQ!4e0&amp;key=AIzaSyBdlczEuxYRH-xlD_EZH4jv0naeVT1JaA4&amp;token=20900" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                      <div style="position: absolute; left: 512px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i2274!3i3486!4i256!2m3!1e0!2sm!3i458153254!3m14!2ses-419!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjF8cy5lOmwudC5mfHAuYzojZmY1OTdjODR8cC5sOi0zNyxzLnQ6MTh8cy5lOmcuc3xwLnY6b2ZmLHMudDo1fHMuZTpnfHAubDowfHAuczowfHAuYzojZmZmNWY1ZjJ8cC5nOjEscy50OjgxfHAubDotM3xwLmc6MS4wMCxzLnQ6MTMxNHxwLnY6b2ZmLHMudDoyfHAudjpvZmYscy50OjQwfHMuZTpnLmZ8cC5jOiNmZmJhZTVjZXxwLnY6b24scy50OjN8cC5zOi0xMDB8cC5sOjQ1fHAudjpzaW1wbGlmaWVkLHMudDo0OXxwLnY6c2ltcGxpZmllZCxzLnQ6NDl8cy5lOmcuZnxwLmM6I2ZmZmFjOWE5fHAudjpzaW1wbGlmaWVkLHMudDo0OXxzLmU6bC50fHAuYzojZmY0ZTRlNGUscy50OjUwfHMuZTpsLnQuZnxwLmM6I2ZmNzg3ODc4LHMudDo1MHxzLmU6bC5pfHAudjpvZmYscy50OjR8cC52OnNpbXBsaWZpZWQscy50OjEwNTl8cy5lOmwuaXxwLmg6IzBhMDBmZnxwLnM6LTc3fHAuZzowLjU3fHAubDowLHMudDoxMDU3fHMuZTpsLnQuZnxwLmM6I2ZmNDMzMjFlLHMudDoxMDU3fHMuZTpsLml8cC5oOiNmZjZjMDB8cC5sOjR8cC5nOjAuNzV8cC5zOi02OCxzLnQ6NnxwLmM6I2ZmZWFmNmY4fHAudjpvbixzLnQ6NnxzLmU6Zy5mfHAuYzojZmZhOGQ3ZDgscy50OjZ8cy5lOmwudC5mfHAubDotNDl8cC5zOi01M3xwLmc6MC43OQ!4e0&amp;key=AIzaSyBdlczEuxYRH-xlD_EZH4jv0naeVT1JaA4&amp;token=6373" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                      <div style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i2273!3i3486!4i256!2m3!1e0!2sm!3i458167421!3m14!2ses-419!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjF8cy5lOmwudC5mfHAuYzojZmY1OTdjODR8cC5sOi0zNyxzLnQ6MTh8cy5lOmcuc3xwLnY6b2ZmLHMudDo1fHMuZTpnfHAubDowfHAuczowfHAuYzojZmZmNWY1ZjJ8cC5nOjEscy50OjgxfHAubDotM3xwLmc6MS4wMCxzLnQ6MTMxNHxwLnY6b2ZmLHMudDoyfHAudjpvZmYscy50OjQwfHMuZTpnLmZ8cC5jOiNmZmJhZTVjZXxwLnY6b24scy50OjN8cC5zOi0xMDB8cC5sOjQ1fHAudjpzaW1wbGlmaWVkLHMudDo0OXxwLnY6c2ltcGxpZmllZCxzLnQ6NDl8cy5lOmcuZnxwLmM6I2ZmZmFjOWE5fHAudjpzaW1wbGlmaWVkLHMudDo0OXxzLmU6bC50fHAuYzojZmY0ZTRlNGUscy50OjUwfHMuZTpsLnQuZnxwLmM6I2ZmNzg3ODc4LHMudDo1MHxzLmU6bC5pfHAudjpvZmYscy50OjR8cC52OnNpbXBsaWZpZWQscy50OjEwNTl8cy5lOmwuaXxwLmg6IzBhMDBmZnxwLnM6LTc3fHAuZzowLjU3fHAubDowLHMudDoxMDU3fHMuZTpsLnQuZnxwLmM6I2ZmNDMzMjFlLHMudDoxMDU3fHMuZTpsLml8cC5oOiNmZjZjMDB8cC5sOjR8cC5nOjAuNzV8cC5zOi02OCxzLnQ6NnxwLmM6I2ZmZWFmNmY4fHAudjpvbixzLnQ6NnxzLmU6Zy5mfHAuYzojZmZhOGQ3ZDgscy50OjZ8cy5lOmwudC5mfHAubDotNDl8cC5zOi01M3xwLmc6MC43OQ!4e0&amp;key=AIzaSyBdlczEuxYRH-xlD_EZH4jv0naeVT1JaA4&amp;token=111904" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                      <div style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i2272!3i3486!4i256!2m3!1e0!2sm!3i458167433!3m14!2ses-419!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjF8cy5lOmwudC5mfHAuYzojZmY1OTdjODR8cC5sOi0zNyxzLnQ6MTh8cy5lOmcuc3xwLnY6b2ZmLHMudDo1fHMuZTpnfHAubDowfHAuczowfHAuYzojZmZmNWY1ZjJ8cC5nOjEscy50OjgxfHAubDotM3xwLmc6MS4wMCxzLnQ6MTMxNHxwLnY6b2ZmLHMudDoyfHAudjpvZmYscy50OjQwfHMuZTpnLmZ8cC5jOiNmZmJhZTVjZXxwLnY6b24scy50OjN8cC5zOi0xMDB8cC5sOjQ1fHAudjpzaW1wbGlmaWVkLHMudDo0OXxwLnY6c2ltcGxpZmllZCxzLnQ6NDl8cy5lOmcuZnxwLmM6I2ZmZmFjOWE5fHAudjpzaW1wbGlmaWVkLHMudDo0OXxzLmU6bC50fHAuYzojZmY0ZTRlNGUscy50OjUwfHMuZTpsLnQuZnxwLmM6I2ZmNzg3ODc4LHMudDo1MHxzLmU6bC5pfHAudjpvZmYscy50OjR8cC52OnNpbXBsaWZpZWQscy50OjEwNTl8cy5lOmwuaXxwLmg6IzBhMDBmZnxwLnM6LTc3fHAuZzowLjU3fHAubDowLHMudDoxMDU3fHMuZTpsLnQuZnxwLmM6I2ZmNDMzMjFlLHMudDoxMDU3fHMuZTpsLml8cC5oOiNmZjZjMDB8cC5sOjR8cC5nOjAuNzV8cC5zOi02OCxzLnQ6NnxwLmM6I2ZmZWFmNmY4fHAudjpvbixzLnQ6NnxzLmU6Zy5mfHAuYzojZmZhOGQ3ZDgscy50OjZ8cy5lOmwudC5mfHAubDotNDl8cC5zOi01M3xwLmc6MC43OQ!4e0&amp;key=AIzaSyBdlczEuxYRH-xlD_EZH4jv0naeVT1JaA4&amp;token=48234" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                      <div style="position: absolute; left: 512px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i2274!3i3488!4i256!2m3!1e0!2sm!3i458153254!3m14!2ses-419!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjF8cy5lOmwudC5mfHAuYzojZmY1OTdjODR8cC5sOi0zNyxzLnQ6MTh8cy5lOmcuc3xwLnY6b2ZmLHMudDo1fHMuZTpnfHAubDowfHAuczowfHAuYzojZmZmNWY1ZjJ8cC5nOjEscy50OjgxfHAubDotM3xwLmc6MS4wMCxzLnQ6MTMxNHxwLnY6b2ZmLHMudDoyfHAudjpvZmYscy50OjQwfHMuZTpnLmZ8cC5jOiNmZmJhZTVjZXxwLnY6b24scy50OjN8cC5zOi0xMDB8cC5sOjQ1fHAudjpzaW1wbGlmaWVkLHMudDo0OXxwLnY6c2ltcGxpZmllZCxzLnQ6NDl8cy5lOmcuZnxwLmM6I2ZmZmFjOWE5fHAudjpzaW1wbGlmaWVkLHMudDo0OXxzLmU6bC50fHAuYzojZmY0ZTRlNGUscy50OjUwfHMuZTpsLnQuZnxwLmM6I2ZmNzg3ODc4LHMudDo1MHxzLmU6bC5pfHAudjpvZmYscy50OjR8cC52OnNpbXBsaWZpZWQscy50OjEwNTl8cy5lOmwuaXxwLmg6IzBhMDBmZnxwLnM6LTc3fHAuZzowLjU3fHAubDowLHMudDoxMDU3fHMuZTpsLnQuZnxwLmM6I2ZmNDMzMjFlLHMudDoxMDU3fHMuZTpsLml8cC5oOiNmZjZjMDB8cC5sOjR8cC5nOjAuNzV8cC5zOi02OCxzLnQ6NnxwLmM6I2ZmZWFmNmY4fHAudjpvbixzLnQ6NnxzLmU6Zy5mfHAuYzojZmZhOGQ3ZDgscy50OjZ8cy5lOmwudC5mfHAubDotNDl8cC5zOi01M3xwLmc6MC43OQ!4e0&amp;key=AIzaSyBdlczEuxYRH-xlD_EZH4jv0naeVT1JaA4&amp;token=35427" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                      <div style="position: absolute; left: 512px; top: 512px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i2274!3i3489!4i256!2m3!1e0!2sm!3i458164318!3m14!2ses-419!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjF8cy5lOmwudC5mfHAuYzojZmY1OTdjODR8cC5sOi0zNyxzLnQ6MTh8cy5lOmcuc3xwLnY6b2ZmLHMudDo1fHMuZTpnfHAubDowfHAuczowfHAuYzojZmZmNWY1ZjJ8cC5nOjEscy50OjgxfHAubDotM3xwLmc6MS4wMCxzLnQ6MTMxNHxwLnY6b2ZmLHMudDoyfHAudjpvZmYscy50OjQwfHMuZTpnLmZ8cC5jOiNmZmJhZTVjZXxwLnY6b24scy50OjN8cC5zOi0xMDB8cC5sOjQ1fHAudjpzaW1wbGlmaWVkLHMudDo0OXxwLnY6c2ltcGxpZmllZCxzLnQ6NDl8cy5lOmcuZnxwLmM6I2ZmZmFjOWE5fHAudjpzaW1wbGlmaWVkLHMudDo0OXxzLmU6bC50fHAuYzojZmY0ZTRlNGUscy50OjUwfHMuZTpsLnQuZnxwLmM6I2ZmNzg3ODc4LHMudDo1MHxzLmU6bC5pfHAudjpvZmYscy50OjR8cC52OnNpbXBsaWZpZWQscy50OjEwNTl8cy5lOmwuaXxwLmg6IzBhMDBmZnxwLnM6LTc3fHAuZzowLjU3fHAubDowLHMudDoxMDU3fHMuZTpsLnQuZnxwLmM6I2ZmNDMzMjFlLHMudDoxMDU3fHMuZTpsLml8cC5oOiNmZjZjMDB8cC5sOjR8cC5nOjAuNzV8cC5zOi02OCxzLnQ6NnxwLmM6I2ZmZWFmNmY4fHAudjpvbixzLnQ6NnxzLmU6Zy5mfHAuYzojZmZhOGQ3ZDgscy50OjZ8cy5lOmwudC5mfHAubDotNDl8cC5zOi01M3xwLmc6MC43OQ!4e0&amp;key=AIzaSyBdlczEuxYRH-xlD_EZH4jv0naeVT1JaA4&amp;token=11623" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                      <div style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i2272!3i3488!4i256!2m3!1e0!2sm!3i458167445!3m14!2ses-419!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjF8cy5lOmwudC5mfHAuYzojZmY1OTdjODR8cC5sOi0zNyxzLnQ6MTh8cy5lOmcuc3xwLnY6b2ZmLHMudDo1fHMuZTpnfHAubDowfHAuczowfHAuYzojZmZmNWY1ZjJ8cC5nOjEscy50OjgxfHAubDotM3xwLmc6MS4wMCxzLnQ6MTMxNHxwLnY6b2ZmLHMudDoyfHAudjpvZmYscy50OjQwfHMuZTpnLmZ8cC5jOiNmZmJhZTVjZXxwLnY6b24scy50OjN8cC5zOi0xMDB8cC5sOjQ1fHAudjpzaW1wbGlmaWVkLHMudDo0OXxwLnY6c2ltcGxpZmllZCxzLnQ6NDl8cy5lOmcuZnxwLmM6I2ZmZmFjOWE5fHAudjpzaW1wbGlmaWVkLHMudDo0OXxzLmU6bC50fHAuYzojZmY0ZTRlNGUscy50OjUwfHMuZTpsLnQuZnxwLmM6I2ZmNzg3ODc4LHMudDo1MHxzLmU6bC5pfHAudjpvZmYscy50OjR8cC52OnNpbXBsaWZpZWQscy50OjEwNTl8cy5lOmwuaXxwLmg6IzBhMDBmZnxwLnM6LTc3fHAuZzowLjU3fHAubDowLHMudDoxMDU3fHMuZTpsLnQuZnxwLmM6I2ZmNDMzMjFlLHMudDoxMDU3fHMuZTpsLml8cC5oOiNmZjZjMDB8cC5sOjR8cC5nOjAuNzV8cC5zOi02OCxzLnQ6NnxwLmM6I2ZmZWFmNmY4fHAudjpvbixzLnQ6NnxzLmU6Zy5mfHAuYzojZmZhOGQ3ZDgscy50OjZ8cy5lOmwudC5mfHAubDotNDl8cC5zOi01M3xwLmc6MC43OQ!4e0&amp;key=AIzaSyBdlczEuxYRH-xlD_EZH4jv0naeVT1JaA4&amp;token=69526" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                      <div style="position: absolute; left: 0px; top: 512px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i2272!3i3489!4i256!2m3!1e0!2sm!3i458167445!3m14!2ses-419!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjF8cy5lOmwudC5mfHAuYzojZmY1OTdjODR8cC5sOi0zNyxzLnQ6MTh8cy5lOmcuc3xwLnY6b2ZmLHMudDo1fHMuZTpnfHAubDowfHAuczowfHAuYzojZmZmNWY1ZjJ8cC5nOjEscy50OjgxfHAubDotM3xwLmc6MS4wMCxzLnQ6MTMxNHxwLnY6b2ZmLHMudDoyfHAudjpvZmYscy50OjQwfHMuZTpnLmZ8cC5jOiNmZmJhZTVjZXxwLnY6b24scy50OjN8cC5zOi0xMDB8cC5sOjQ1fHAudjpzaW1wbGlmaWVkLHMudDo0OXxwLnY6c2ltcGxpZmllZCxzLnQ6NDl8cy5lOmcuZnxwLmM6I2ZmZmFjOWE5fHAudjpzaW1wbGlmaWVkLHMudDo0OXxzLmU6bC50fHAuYzojZmY0ZTRlNGUscy50OjUwfHMuZTpsLnQuZnxwLmM6I2ZmNzg3ODc4LHMudDo1MHxzLmU6bC5pfHAudjpvZmYscy50OjR8cC52OnNpbXBsaWZpZWQscy50OjEwNTl8cy5lOmwuaXxwLmg6IzBhMDBmZnxwLnM6LTc3fHAuZzowLjU3fHAubDowLHMudDoxMDU3fHMuZTpsLnQuZnxwLmM6I2ZmNDMzMjFlLHMudDoxMDU3fHMuZTpsLml8cC5oOiNmZjZjMDB8cC5sOjR8cC5nOjAuNzV8cC5zOi02OCxzLnQ6NnxwLmM6I2ZmZWFmNmY4fHAudjpvbixzLnQ6NnxzLmU6Zy5mfHAuYzojZmZhOGQ3ZDgscy50OjZ8cy5lOmwudC5mfHAubDotNDl8cC5zOi01M3xwLmc6MC43OQ!4e0&amp;key=AIzaSyBdlczEuxYRH-xlD_EZH4jv0naeVT1JaA4&amp;token=84053" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                      <div style="position: absolute; left: -512px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i2270!3i3487!4i256!2m3!1e0!2sm!3i458167433!3m14!2ses-419!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjF8cy5lOmwudC5mfHAuYzojZmY1OTdjODR8cC5sOi0zNyxzLnQ6MTh8cy5lOmcuc3xwLnY6b2ZmLHMudDo1fHMuZTpnfHAubDowfHAuczowfHAuYzojZmZmNWY1ZjJ8cC5nOjEscy50OjgxfHAubDotM3xwLmc6MS4wMCxzLnQ6MTMxNHxwLnY6b2ZmLHMudDoyfHAudjpvZmYscy50OjQwfHMuZTpnLmZ8cC5jOiNmZmJhZTVjZXxwLnY6b24scy50OjN8cC5zOi0xMDB8cC5sOjQ1fHAudjpzaW1wbGlmaWVkLHMudDo0OXxwLnY6c2ltcGxpZmllZCxzLnQ6NDl8cy5lOmcuZnxwLmM6I2ZmZmFjOWE5fHAudjpzaW1wbGlmaWVkLHMudDo0OXxzLmU6bC50fHAuYzojZmY0ZTRlNGUscy50OjUwfHMuZTpsLnQuZnxwLmM6I2ZmNzg3ODc4LHMudDo1MHxzLmU6bC5pfHAudjpvZmYscy50OjR8cC52OnNpbXBsaWZpZWQscy50OjEwNTl8cy5lOmwuaXxwLmg6IzBhMDBmZnxwLnM6LTc3fHAuZzowLjU3fHAubDowLHMudDoxMDU3fHMuZTpsLnQuZnxwLmM6I2ZmNDMzMjFlLHMudDoxMDU3fHMuZTpsLml8cC5oOiNmZjZjMDB8cC5sOjR8cC5nOjAuNzV8cC5zOi02OCxzLnQ6NnxwLmM6I2ZmZWFmNmY4fHAudjpvbixzLnQ6NnxzLmU6Zy5mfHAuYzojZmZhOGQ3ZDgscy50OjZ8cy5lOmwudC5mfHAubDotNDl8cC5zOi01M3xwLmc6MC43OQ!4e0&amp;key=AIzaSyBdlczEuxYRH-xlD_EZH4jv0naeVT1JaA4&amp;token=82016" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                      <div style="position: absolute; left: -256px; top: 512px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i2271!3i3489!4i256!2m3!1e0!2sm!3i458167445!3m14!2ses-419!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjF8cy5lOmwudC5mfHAuYzojZmY1OTdjODR8cC5sOi0zNyxzLnQ6MTh8cy5lOmcuc3xwLnY6b2ZmLHMudDo1fHMuZTpnfHAubDowfHAuczowfHAuYzojZmZmNWY1ZjJ8cC5nOjEscy50OjgxfHAubDotM3xwLmc6MS4wMCxzLnQ6MTMxNHxwLnY6b2ZmLHMudDoyfHAudjpvZmYscy50OjQwfHMuZTpnLmZ8cC5jOiNmZmJhZTVjZXxwLnY6b24scy50OjN8cC5zOi0xMDB8cC5sOjQ1fHAudjpzaW1wbGlmaWVkLHMudDo0OXxwLnY6c2ltcGxpZmllZCxzLnQ6NDl8cy5lOmcuZnxwLmM6I2ZmZmFjOWE5fHAudjpzaW1wbGlmaWVkLHMudDo0OXxzLmU6bC50fHAuYzojZmY0ZTRlNGUscy50OjUwfHMuZTpsLnQuZnxwLmM6I2ZmNzg3ODc4LHMudDo1MHxzLmU6bC5pfHAudjpvZmYscy50OjR8cC52OnNpbXBsaWZpZWQscy50OjEwNTl8cy5lOmwuaXxwLmg6IzBhMDBmZnxwLnM6LTc3fHAuZzowLjU3fHAubDowLHMudDoxMDU3fHMuZTpsLnQuZnxwLmM6I2ZmNDMzMjFlLHMudDoxMDU3fHMuZTpsLml8cC5oOiNmZjZjMDB8cC5sOjR8cC5nOjAuNzV8cC5zOi02OCxzLnQ6NnxwLmM6I2ZmZWFmNmY4fHAudjpvbixzLnQ6NnxzLmU6Zy5mfHAuYzojZmZhOGQ3ZDgscy50OjZ8cy5lOmwudC5mfHAubDotNDl8cC5zOi01M3xwLmc6MC43OQ!4e0&amp;key=AIzaSyBdlczEuxYRH-xlD_EZH4jv0naeVT1JaA4&amp;token=28145" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                      <div style="position: absolute; left: -512px; top: 512px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i2270!3i3489!4i256!2m3!1e0!2sm!3i458167445!3m14!2ses-419!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjF8cy5lOmwudC5mfHAuYzojZmY1OTdjODR8cC5sOi0zNyxzLnQ6MTh8cy5lOmcuc3xwLnY6b2ZmLHMudDo1fHMuZTpnfHAubDowfHAuczowfHAuYzojZmZmNWY1ZjJ8cC5nOjEscy50OjgxfHAubDotM3xwLmc6MS4wMCxzLnQ6MTMxNHxwLnY6b2ZmLHMudDoyfHAudjpvZmYscy50OjQwfHMuZTpnLmZ8cC5jOiNmZmJhZTVjZXxwLnY6b24scy50OjN8cC5zOi0xMDB8cC5sOjQ1fHAudjpzaW1wbGlmaWVkLHMudDo0OXxwLnY6c2ltcGxpZmllZCxzLnQ6NDl8cy5lOmcuZnxwLmM6I2ZmZmFjOWE5fHAudjpzaW1wbGlmaWVkLHMudDo0OXxzLmU6bC50fHAuYzojZmY0ZTRlNGUscy50OjUwfHMuZTpsLnQuZnxwLmM6I2ZmNzg3ODc4LHMudDo1MHxzLmU6bC5pfHAudjpvZmYscy50OjR8cC52OnNpbXBsaWZpZWQscy50OjEwNTl8cy5lOmwuaXxwLmg6IzBhMDBmZnxwLnM6LTc3fHAuZzowLjU3fHAubDowLHMudDoxMDU3fHMuZTpsLnQuZnxwLmM6I2ZmNDMzMjFlLHMudDoxMDU3fHMuZTpsLml8cC5oOiNmZjZjMDB8cC5sOjR8cC5nOjAuNzV8cC5zOi02OCxzLnQ6NnxwLmM6I2ZmZWFmNmY4fHAudjpvbixzLnQ6NnxzLmU6Zy5mfHAuYzojZmZhOGQ3ZDgscy50OjZ8cy5lOmwudC5mfHAubDotNDl8cC5zOi01M3xwLmc6MC43OQ!4e0&amp;key=AIzaSyBdlczEuxYRH-xlD_EZH4jv0naeVT1JaA4&amp;token=103308" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                      <div style="position: absolute; left: -512px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i2270!3i3488!4i256!2m3!1e0!2sm!3i458167445!3m14!2ses-419!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjF8cy5lOmwudC5mfHAuYzojZmY1OTdjODR8cC5sOi0zNyxzLnQ6MTh8cy5lOmcuc3xwLnY6b2ZmLHMudDo1fHMuZTpnfHAubDowfHAuczowfHAuYzojZmZmNWY1ZjJ8cC5nOjEscy50OjgxfHAubDotM3xwLmc6MS4wMCxzLnQ6MTMxNHxwLnY6b2ZmLHMudDoyfHAudjpvZmYscy50OjQwfHMuZTpnLmZ8cC5jOiNmZmJhZTVjZXxwLnY6b24scy50OjN8cC5zOi0xMDB8cC5sOjQ1fHAudjpzaW1wbGlmaWVkLHMudDo0OXxwLnY6c2ltcGxpZmllZCxzLnQ6NDl8cy5lOmcuZnxwLmM6I2ZmZmFjOWE5fHAudjpzaW1wbGlmaWVkLHMudDo0OXxzLmU6bC50fHAuYzojZmY0ZTRlNGUscy50OjUwfHMuZTpsLnQuZnxwLmM6I2ZmNzg3ODc4LHMudDo1MHxzLmU6bC5pfHAudjpvZmYscy50OjR8cC52OnNpbXBsaWZpZWQscy50OjEwNTl8cy5lOmwuaXxwLmg6IzBhMDBmZnxwLnM6LTc3fHAuZzowLjU3fHAubDowLHMudDoxMDU3fHMuZTpsLnQuZnxwLmM6I2ZmNDMzMjFlLHMudDoxMDU3fHMuZTpsLml8cC5oOiNmZjZjMDB8cC5sOjR8cC5nOjAuNzV8cC5zOi02OCxzLnQ6NnxwLmM6I2ZmZWFmNmY4fHAudjpvbixzLnQ6NnxzLmU6Zy5mfHAuYzojZmZhOGQ3ZDgscy50OjZ8cy5lOmwudC5mfHAubDotNDl8cC5zOi01M3xwLmc6MC43OQ!4e0&amp;key=AIzaSyBdlczEuxYRH-xlD_EZH4jv0naeVT1JaA4&amp;token=88781" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                      <div style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i2271!3i3488!4i256!2m3!1e0!2sm!3i458167445!3m14!2ses-419!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjF8cy5lOmwudC5mfHAuYzojZmY1OTdjODR8cC5sOi0zNyxzLnQ6MTh8cy5lOmcuc3xwLnY6b2ZmLHMudDo1fHMuZTpnfHAubDowfHAuczowfHAuYzojZmZmNWY1ZjJ8cC5nOjEscy50OjgxfHAubDotM3xwLmc6MS4wMCxzLnQ6MTMxNHxwLnY6b2ZmLHMudDoyfHAudjpvZmYscy50OjQwfHMuZTpnLmZ8cC5jOiNmZmJhZTVjZXxwLnY6b24scy50OjN8cC5zOi0xMDB8cC5sOjQ1fHAudjpzaW1wbGlmaWVkLHMudDo0OXxwLnY6c2ltcGxpZmllZCxzLnQ6NDl8cy5lOmcuZnxwLmM6I2ZmZmFjOWE5fHAudjpzaW1wbGlmaWVkLHMudDo0OXxzLmU6bC50fHAuYzojZmY0ZTRlNGUscy50OjUwfHMuZTpsLnQuZnxwLmM6I2ZmNzg3ODc4LHMudDo1MHxzLmU6bC5pfHAudjpvZmYscy50OjR8cC52OnNpbXBsaWZpZWQscy50OjEwNTl8cy5lOmwuaXxwLmg6IzBhMDBmZnxwLnM6LTc3fHAuZzowLjU3fHAubDowLHMudDoxMDU3fHMuZTpsLnQuZnxwLmM6I2ZmNDMzMjFlLHMudDoxMDU3fHMuZTpsLml8cC5oOiNmZjZjMDB8cC5sOjR8cC5nOjAuNzV8cC5zOi02OCxzLnQ6NnxwLmM6I2ZmZWFmNmY4fHAudjpvbixzLnQ6NnxzLmU6Zy5mfHAuYzojZmZhOGQ3ZDgscy50OjZ8cy5lOmwudC5mfHAubDotNDl8cC5zOi01M3xwLmc6MC43OQ!4e0&amp;key=AIzaSyBdlczEuxYRH-xlD_EZH4jv0naeVT1JaA4&amp;token=13618" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                    </div>
                  </div>
                </div>
                <div class="gm-style-pbc" style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;">
                  <p class="gm-style-pbt"></p>
                </div>
                <div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;">
                  <div style="z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);">
                    <div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;">
                      <div style="position: absolute; display: none; top: -553.667px; left: 54.4542px;">
                        <div>
                          <div class="dgt-richmarker-single" style="top:-20px!important;"><strong>Bal Harbour</strong></div>
                        </div>
                      </div>
                      <div style="position: absolute; display: none; top: 727.707px; left: -154.301px;">
                        <div>
                          <div class="dgt-richmarker-single" style="top:-20px!important;"><strong>Key Biscayne</strong></div>
                        </div>
                      </div>
                      <div style="position: absolute; display: none; top: -171.936px; left: 63.0385px;">
                        <div>
                          <div class="dgt-richmarker-single" style="top:-20px!important;"><strong>Miami Beach</strong></div>
                        </div>
                      </div>
                      <div style="position: absolute; display: none; top: 248.98px; left: 7.51992px;">
                        <div>
                          <div class="dgt-richmarker-single" style="top:-20px!important;"><strong>South Beach SOFI</strong></div>
                        </div>
                      </div>
                      <div style="position: absolute; display: none; top: -467.335px; left: 62.5451px;">
                        <div>
                          <div class="dgt-richmarker-single" style="top:-20px!important;"><strong>Surfside</strong></div>
                        </div>
                      </div>
                    </div>
                    <div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div>
                    <div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div>
                    <div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;">
                      <div style="z-index: -202; cursor: pointer; display: none; touch-action: none;">
                        <div style="width: 30px; height: 27px; overflow: hidden; position: absolute;"><img alt="" src="https://maps.gstatic.com/mapfiles/undo_poly.png" draggable="false" style="position: absolute; left: 0px; top: 0px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 90px; height: 27px;"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <iframe aria-hidden="true" frameborder="0" style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: none;" src="about:blank"></iframe>
              <div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;">
                <a target="_blank" rel="noopener" href="https://maps.google.com/maps?ll=25.806244,-80.136423&amp;z=13&amp;t=m&amp;hl=es-419&amp;gl=US&amp;mapclient=apiv3" title="Abrir esta área en Google&nbsp;Maps (se abre en una ventana nueva)" style="position: static; overflow: visible; float: none; display: inline;">
                  <div style="width: 66px; height: 26px; cursor: pointer;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/google_white5.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></div>
                </a>
              </div>
              <div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-sizing: border-box; box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 300px; height: 180px; position: absolute; left: 348px; top: 298px;">
                <div style="padding: 0px 0px 10px; font-size: 16px;">Datos del mapa</div>
                <div style="font-size: 13px;">Datos del mapa ©2019 Google</div>
                <button draggable="false" title="Cerrar" aria-label="Cerrar" type="button" class="gm-ui-hover-effect" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; position: absolute; cursor: pointer; user-select: none; top: 0px; right: 0px; width: 37px; height: 37px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224px%22%20height%3D%2224px%22%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22%23000000%22%3E%0A%20%20%20%20%3Cpath%20d%3D%22M19%206.41L17.59%205%2012%2010.59%206.41%205%205%206.41%2010.59%2012%205%2017.59%206.41%2019%2012%2013.41%2017.59%2019%2019%2017.59%2013.41%2012z%22%2F%3E%0A%20%20%20%20%3Cpath%20d%3D%22M0%200h24v24H0z%22%20fill%3D%22none%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="pointer-events: none; display: block; width: 13px; height: 13px; margin: 12px;"></button>
              </div>
              <div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 329px; bottom: 0px; width: 189px;">
                <div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px;">
                  <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                    <div style="width: 1px;"></div>
                    <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                  </div>
                  <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a style="text-decoration: none; cursor: pointer; display: none;">Datos del mapa</a><span>Datos del mapa ©2019 Google</span></div>
                </div>
              </div>
              <div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;">
                <div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Datos del mapa ©2019 Google</div>
              </div>
              <div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; user-select: none; height: 14px; line-height: 14px; position: absolute; right: 177px; bottom: 0px;">
                <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                  <div style="width: 1px;"></div>
                  <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                </div>
                <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a href="https://www.google.com/intl/es-419_US/help/terms_maps.html" target="_blank" rel="noopener" style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Condiciones del servicio</a></div>
              </div>
              <button draggable="false" title="Activar o desactivar la vista de pantalla completa" aria-label="Activar o desactivar la vista de pantalla completa" type="button" class="gm-control-active gm-fullscreen-control" style="background: none rgb(255, 255, 255); border: 0px; margin: 10px; padding: 0px; position: absolute; cursor: pointer; user-select: none; border-radius: 2px; height: 40px; width: 40px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; overflow: hidden; display: none; top: 60px; right: 0px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%20018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"></button>
              <div class="map-controls-ct" style="z-index: 0; position: absolute; right: 165px; top: 0px;">
                <div class="dgt-map-controls-ct">
                  <div class="dgt-map-zoomIn"></div>
                  <div class="dgt-map-zoomOut"></div>
                </div>
              </div>
              <div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;">
                <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                  <div style="width: 1px;"></div>
                  <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                </div>
                <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a target="_blank" rel="noopener" title="Informar a Google errores en las imágenes o el mapa de carreteras." href="https://www.google.com/maps/@25.8062443,-80.1364231,13z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;">Informar un error en el mapa</a></div>
              </div>
              <div class="gmnoprint" style="margin: 10px; z-index: 0; position: absolute; cursor: pointer; right: 0px; top: 0px;">
                <div class="gm-style-mtc" style="float: left; position: relative;">
                  <div role="button" tabindex="0" title="Mostrar mapa de calles" aria-label="Mostrar mapa de calles" aria-pressed="true" draggable="false" style="direction: ltr; overflow: hidden; text-align: center; height: 40px; display: table-cell; vertical-align: middle; position: relative; color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 18px; background-color: rgb(255, 255, 255); padding: 0px 17px; border-bottom-left-radius: 2px; border-top-left-radius: 2px; background-clip: padding-box; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; min-width: 33px; font-weight: 500;">Mapa</div>
                  <div style="background-color: white; z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; position: absolute; left: 0px; top: 40px; text-align: left; display: none;">
                    <div draggable="false" title="Mostrar mapa de calles con relieve" style="color: black; font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 18px; background-color: rgb(255, 255, 255); padding: 5px 8px 5px 5px; direction: ltr; text-align: left; white-space: nowrap;"><span role="checkbox" style="vertical-align: middle;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224px%22%20height%3D%2224px%22%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22%23000000%22%3E%0A%20%20%20%20%3Cpath%20d%3D%22M0%200h24v24H0z%22%20fill%3D%22none%22%2F%3E%0A%20%20%20%20%3Cpath%20d%3D%22M19%203H5c-1.11%200-2%20.9-2%202v14c0%201.1.89%202%202%202h14c1.11%200%202-.9%202-2V5c0-1.1-.89-2-2-2zm-9%2014l-5-5%201.41-1.41L10%2014.17l7.59-7.59L19%208l-9%209z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 1em; width: 1em; transform: translateY(0.15em); display: none;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224px%22%20height%3D%2224px%22%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22%23000000%22%3E%0A%20%20%20%20%3Cpath%20d%3D%22M19%205v14H5V5h14m0-2H5c-1.1%200-2%20.9-2%202v14c0%201.1.9%202%202%202h14c1.1%200%202-.9%202-2V5c0-1.1-.9-2-2-2z%22%2F%3E%0A%20%20%20%20%3Cpath%20d%3D%22M0%200h24v24H0z%22%20fill%3D%22none%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 1em; width: 1em; transform: translateY(0.15em);"></span><label style="vertical-align: middle; cursor: pointer;">Relieve</label></div>
                  </div>
                </div>
                <div class="gm-style-mtc" style="float: left; position: relative;">
                  <div role="button" tabindex="0" title="Mostrar imágenes satelitales" aria-label="Mostrar imágenes satelitales" aria-pressed="false" draggable="false" style="direction: ltr; overflow: hidden; text-align: center; height: 40px; display: table-cell; vertical-align: middle; position: relative; color: rgb(86, 86, 86); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 18px; background-color: rgb(255, 255, 255); padding: 0px 17px; border-bottom-right-radius: 2px; border-top-right-radius: 2px; background-clip: padding-box; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; min-width: 44px; border-left: 0px;">Satélite</div>
                  <div style="background-color: white; z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; position: absolute; right: 0px; top: 40px; text-align: left; display: none;">
                    <div draggable="false" title="Mostrar imágenes con nombres de calles" style="color: black; font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 18px; background-color: rgb(255, 255, 255); padding: 5px 8px 5px 5px; direction: ltr; text-align: left; white-space: nowrap;"><span role="checkbox" style="vertical-align: middle;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224px%22%20height%3D%2224px%22%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22%23000000%22%3E%0A%20%20%20%20%3Cpath%20d%3D%22M0%200h24v24H0z%22%20fill%3D%22none%22%2F%3E%0A%20%20%20%20%3Cpath%20d%3D%22M19%203H5c-1.11%200-2%20.9-2%202v14c0%201.1.89%202%202%202h14c1.11%200%202-.9%202-2V5c0-1.1-.89-2-2-2zm-9%2014l-5-5%201.41-1.41L10%2014.17l7.59-7.59L19%208l-9%209z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 1em; width: 1em; transform: translateY(0.15em);"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224px%22%20height%3D%2224px%22%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22%23000000%22%3E%0A%20%20%20%20%3Cpath%20d%3D%22M19%205v14H5V5h14m0-2H5c-1.1%200-2%20.9-2%202v14c0%201.1.9%202%202%202h14c1.1%200%202-.9%202-2V5c0-1.1-.9-2-2-2z%22%2F%3E%0A%20%20%20%20%3Cpath%20d%3D%22M0%200h24v24H0z%22%20fill%3D%22none%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 1em; width: 1em; transform: translateY(0.15em); display: none;"></span><label style="vertical-align: middle; cursor: pointer;">Etiquetas</label></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="mg-npb">
        <div class="mg-nheader">
          <h2 class="vc-title-ng">Neighborhoods</h2>
          <a href="#" class="ms-btn"><span>Explore Neighborhoods</span></a>
        </div>
        <div class="mg-sliderneighborhoods gs-container-slider">
          <a class="mg-nsitem" href="#" title="Coconut Grove">
            <h3 class="mg-nsititle">Coconut Grove</h3>
            <img class="mg-nsimg gs-lazy gs-item-loaded" alt="Coconut Grove" src="<?php echo get_template_directory_uri(); ?>/images/neighborhoods/coconut-grove.jpg">
          </a>
          <a class="mg-nsitem" href="#" title="Indian Creek">
            <h3 class="mg-nsititle">Indian Creek</h3>
            <img class="mg-nsimg gs-lazy gs-item-loaded" alt="Indian Creek" src="<?php echo get_template_directory_uri(); ?>/images/neighborhoods/indian-creek.jpg">
          </a>
          <a class="mg-nsitem" href="#" title="Normandy Isle">
            <h3 class="mg-nsititle">Normandy Isle</h3>
            <img class="mg-nsimg gs-lazy gs-item-loaded" alt="Normandy Isle" src="<?php echo get_template_directory_uri(); ?>/images/neighborhoods/normandy-isle.jpg">
          </a>
          <a class="mg-nsitem" href="#" title="North Bay Road">
            <h3 class="mg-nsititle">North Bay Road</h3>
            <img class="mg-nsimg gs-lazy gs-item-loaded" alt="North Bay Road" src="<?php echo get_template_directory_uri(); ?>/images/neighborhoods/north-bay-road.jpg">
          </a>
          <a class="mg-nsitem" href="#" title="Pinecrest">
            <h3 class="mg-nsititle">Pinecrest</h3>
            <img class="mg-nsimg gs-lazy gs-item-loaded" alt="Pinecrest" src="<?php echo get_template_directory_uri(); ?>/images/neighborhoods/pinecrest.jpg">
          </a>
        </div>
      </div>
    </section>
  </section>

  <section id="ms-ng-b" class="ms-section ms-wrap-ng-cd ms-a-format ms-animate">
    <section class="mg-neighborhoods">
      <div class="mg-npb">
        <div class="mg-nheader">
          <h2 class="vc-title-ng">Neighborhoods</h2>
          <a href="#" class="ms-btn"><span>Explore Neighborhoods</span></a>
        </div>
        <div class="mg-sliderneighborhoods gs-container-slider">
          <a class="mg-nsitem" href="#" title="Coconut Grove">
            <h3 class="mg-nsititle">Coconut Grove</h3>
            <img class="mg-nsimg gs-lazy gs-item-loaded" alt="Coconut Grove" src="<?php echo get_template_directory_uri(); ?>/images/neighborhoods/coconut-grove.jpg">
          </a>
          <a class="mg-nsitem" href="#" title="Indian Creek">
            <h3 class="mg-nsititle">Indian Creek</h3>
            <img class="mg-nsimg gs-lazy gs-item-loaded" alt="Indian Creek" src="<?php echo get_template_directory_uri(); ?>/images/neighborhoods/indian-creek.jpg">
          </a>
          <a class="mg-nsitem" href="#" title="Normandy Isle">
            <h3 class="mg-nsititle">Normandy Isle</h3>
            <img class="mg-nsimg gs-lazy gs-item-loaded" alt="Normandy Isle" src="<?php echo get_template_directory_uri(); ?>/images/neighborhoods/normandy-isle.jpg">
          </a>
          <a class="mg-nsitem" href="#" title="North Bay Road">
            <h3 class="mg-nsititle">North Bay Road</h3>
            <img class="mg-nsimg gs-lazy gs-item-loaded" alt="North Bay Road" src="<?php echo get_template_directory_uri(); ?>/images/neighborhoods/north-bay-road.jpg">
          </a>
          <a class="mg-nsitem" href="#" title="Pinecrest">
            <h3 class="mg-nsititle">Pinecrest</h3>
            <img class="mg-nsimg gs-lazy gs-item-loaded" alt="Pinecrest" src="<?php echo get_template_directory_uri(); ?>/images/neighborhoods/pinecrest.jpg">
          </a>
        </div>
      </div>
    </section>
  </section>

  <section id="ms-ng-c" class="ms-section ms-wrap-ng-cd ms-a-format ms-cl-9 ms-animate">
    <section class="mg-neighborhoods">
      <div class="mg-npb">
        <div class="mg-nheader">
          <h2 class="vc-title-ng">Neighborhoods</h2>
          <a href="#" class="ms-btn"><span>Explore Neighborhoods</span></a>
        </div>
        <div class="mg-sliderneighborhoods gs-container-slider">
          <a class="mg-nsitem" href="#" title="Coconut Grove">
            <h3 class="mg-nsititle">Coconut Grove</h3>
            <img class="mg-nsimg gs-lazy gs-item-loaded" alt="Coconut Grove" src="<?php echo get_template_directory_uri(); ?>/images/neighborhoods/coconut-grove.jpg">
          </a>
          <a class="mg-nsitem" href="#" title="Indian Creek">
            <h3 class="mg-nsititle">Indian Creek</h3>
            <img class="mg-nsimg gs-lazy gs-item-loaded" alt="Indian Creek" src="<?php echo get_template_directory_uri(); ?>/images/neighborhoods/indian-creek.jpg">
          </a>
          <a class="mg-nsitem" href="#" title="Normandy Isle">
            <h3 class="mg-nsititle">Normandy Isle</h3>
            <img class="mg-nsimg gs-lazy gs-item-loaded" alt="Normandy Isle" src="<?php echo get_template_directory_uri(); ?>/images/neighborhoods/normandy-isle.jpg">
          </a>
          <a class="mg-nsitem" href="#" title="North Bay Road">
            <h3 class="mg-nsititle">North Bay Road</h3>
            <img class="mg-nsimg gs-lazy gs-item-loaded" alt="North Bay Road" src="<?php echo get_template_directory_uri(); ?>/images/neighborhoods/north-bay-road.jpg">
          </a>
          <a class="mg-nsitem" href="#" title="Pinecrest">
            <h3 class="mg-nsititle">Pinecrest</h3>
            <img class="mg-nsimg gs-lazy gs-item-loaded" alt="Pinecrest" src="<?php echo get_template_directory_uri(); ?>/images/neighborhoods/pinecrest.jpg">
          </a>
          <a class="mg-nsitem" href="#" title="Pine Tree Drive">
            <h3 class="mg-nsititle">Pine Tree Drive</h3>
            <img class="mg-nsimg gs-lazy gs-item-loaded" alt="Pine Tree Drive" src="<?php echo get_template_directory_uri(); ?>/images/neighborhoods/pine-tree-drive.jpg">
          </a>
          <a class="mg-nsitem" href="#" title="Sans Souci Estates">
            <h3 class="mg-nsititle">Sans Souci Estates</h3>
            <img class="mg-nsimg gs-lazy gs-item-loaded" alt="Sans Souci Estates" src="<?php echo get_template_directory_uri(); ?>/images/neighborhoods/sans-souci-estates.jpg">
          </a>
          <a class="mg-nsitem" href="#" title="South Beach">
            <h3 class="mg-nsititle">South Beach</h3>
            <img class="mg-nsimg gs-lazy gs-item-loaded" alt="South Beach" src="<?php echo get_template_directory_uri(); ?>/images/neighborhoods/south-beach.jpg">
          </a>
        </div>
      </div>
    </section>
  </section>

  <section id="condo-areas" class="ms-section ms-wrap-ng-cd ms-animate active">
    <h2 class="ms-title">featured areas & condos</h2>
    <div class="ms-wrap-slider" id="ms-condo-slider">
      <div class="ms-item">
        <a href="#" class="ms-wrap-img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/areas/87park.jpg">
        </a>
        <h3 class="ms-item-title"><a href="#">87 Park</a></h3>
      </div>
      <div class="ms-item">
        <a href="#" class="ms-wrap-img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/areas/fendi.jpg">
        </a>
        <h3 class="ms-item-title"><a href="#">Fendi</a></h3>
      </div>
      <div class="ms-item">
        <a href="#" class="ms-wrap-img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/areas/flatIron.jpg">
        </a>
        <h3 class="ms-item-title"><a href="#">Flatiron</a></h3>
      </div>
      <div class="ms-item">
        <a href="#" class="ms-wrap-img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/areas/ritzcarlton.jpg">
        </a>
        <h3 class="ms-item-title"><a href="#">Ritz Carlton</a></h3>
      </div>
      <div class="ms-item">
        <a href="#" class="ms-wrap-img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/areas/turnberry.jpg">
        </a>
        <h3 class="ms-item-title"><a href="#">Turnberry</a></h3>
      </div>
      <div class="ms-item">
        <a href="#" class="ms-wrap-img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/areas/unaresidences.jpg">
        </a>
        <h3 class="ms-item-title"><a href="#">Una Residences</a></h3>
      </div>
    </div>

    <div class="ms-wrap-btn">
      <a href="#" class="ms-btn">
        <span>View more</span>
      </a>
    </div>
  </section>

  <section id="testimonials" class="ms-section ms-animate">
    <div class="ms-slider" id="testimonial-slider">
      <blockquote>
        <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua”</p>
        <cite>Gary Gottzmann</cite>
      </blockquote>
      <blockquote>
        <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua”</p>
        <cite>Gary Gottzmann</cite>
      </blockquote>
      <blockquote>
        <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua”</p>
        <cite>Gary Gottzmann</cite>
      </blockquote>
    </div>
  </section>

  <aside id="sponsors" class="ms-section ms-animate">
    <img data-real-type="image" data-img="<?php echo get_template_directory_uri(); ?>/images/home/ms-sponsors.png" src="<?php echo get_template_directory_uri(); ?>/images/temp.png" alt="Sponsors" class="ms-lazy">
  </aside>
</main>

<?php get_footer();?>