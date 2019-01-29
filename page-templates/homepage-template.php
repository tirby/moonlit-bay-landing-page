<?php
/**
* Template Name: Home Page Template
*
* @package WordPress
* @subpackage Codelation Default
* @since Codelation Default 0.1
*/
get_header(); ?>

<section class="application-hero">
  <div class="section-content">

    <div class="summary">
      <h1>
        We Take Your Summers Seriously
      </h1>

      <p>
        Whether you are looking to find that elusive trophy fish, shore lunch,
        or a place to land after a long work week; Moonlit Bay is waiting for you.
      </p>

      <div class="application-form">
        <div class="form">
          <div class="form-row three-column actions">
            <div class="column call-us">
              <a href="mailto:moonlitbay.59@gmail.com" class="button large">
                <i class="fas fa-envelope-square"></i>
                <span>Email Us</span>
              </a>
            </div>
            <div class="email-us">
              <a href="tel:7017394722" class="button large inverted">
                <i class="fas fa-phone-square"></i>
                <span>701-739-4722</span>
              </a>
            </div>
            <div class="social">
              <a href="https://www.facebook.com/moonlitbay/" target="_blank" class="button large inverted">
                <i class="fab fa-facebook-square"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<section class="app-section homepage-content">
  <article class="section-content tight page-content">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; endif; ?>

  </article>
</section>

<?php get_footer(); ?>
