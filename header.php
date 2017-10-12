<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php wp_title() ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.js"></script>
    <script src="<?php bloginfo('template_directory')?>/assets/js/bxslider.js"></script>
    <!-- bxSlider CSS file -->
    <link href="<?php bloginfo('template_directory')?>/assets/css/bxslider.css" rel="stylesheet" />
    <?php wp_head() ?>
  </head>
  <body>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">WebSiteName</a>
      </div>
      <?php $params = array('menu_class','nav navbar-nav','menu'=>'meu') ?>
      <?php wp_nav_menu($params) ?>
    </div>
  </nav>
    <?php if(is_home()): ?>
    <div class="header">
      <div class="wrap">
        <h1><a href="<?php echo site_url()?>" title="<?php bloginfo('name')?>">AJAT Desenvolvimento</a></h1>
        <div class="infor">

          <?php
            $args = array('post_type'=>'page','pagename'=>'sobre');
            $my_page = get_posts($args);
          ?>
          <?php if($my_page) : foreach($my_page as $post): setup_postdata($post) ?>

            <h2><?php the_title() ?></h2>
            <?php the_excerpt() ?>
            <a href="<?php the_permalink()?>" class="custom-botao">Leia mais</a>

          <?endforeach;?>
          <?php else:?>
            <p>Nenhum conteúdo inserido na página sobre</p>
          <?php endif;?>

        </div>
      </div>
    </div>
  <?php else:?>
    <div class="header-page">
      <div class="wrap">
        <h1><a href="<?php echo site_url()?>" title="<?php bloginfo('name')?>">AJAT Desenvolvimento</a></h1>
      </div>
      <div class="blog-page">
        <div class="wrap">
          <?php if(is_category()): ?>
            <h2>Blog</h2>
          <?php else: ?>
            <h2><?php the_title() ?></h2>
          <?php endif ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
