<?php get_header() ?>
<div class="content">
  <div class="wrap">
    <div class="blog">

        <div class="box-list-posts">

            <?php $cont = 1; if(have_posts()) : while(have_posts()): the_post() ?>
              <div class="list-posts <?= ($cont % 2 == 0 ) ? "segundo-post" : "" ?>">
              <?php the_post_thumbnail() ?>
              <div class="box-content-post ">
                <h2><?php the_title() ?></h2>
                <p><?php the_excerpt() ?></p>
                <a href="<?php the_permalink()?>" class="custom-botao">Leia mais</a>
              </div>
            </div>
              <?php $cont ++; endwhile;endif; ?>
        </div>
    </div>
    <div class="clear">

    </div>
  </div>
</div>
<?php get_footer() ?>
