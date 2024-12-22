<?php get_header(); ?>
<div class="wrap">
    <div id="primary" class="site-main" role="main">
      <main id="main" class="site-main" role="main">
        <section class="error-404-not-found">
            <header class="page-header">
                <h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found', 'mytheme' ); ?></h1>
            </header>
            <div class="page-content">
                <p><a href="index.php"><?php _e('Вернуться назад', 'mytheme'); ?></a></p>
            </div>
        </section>
      </main>
    </div>
</div>

<?php get_footer(); ?>