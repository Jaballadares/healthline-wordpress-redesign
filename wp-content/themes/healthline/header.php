<!DOCTYPE html>
<!--[if IE 7]> <html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]> <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js"> <!--<![endif]-->
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="google-site-verification" content="lC19838MQdUht79Pd1YQHYbhAx3qy-rbg3w3bHAMLxc" />


    <title><?php wp_title('-', TRUE, 'right'); ?> <?php bloginfo('description'); ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/library/img/structure/favicon.png">

    <?php wp_head(); ?>

    <script src="//use.typekit.net/gpy1eil.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
  </head>

  <body <?php body_class(); ?>>

  <header class="header-main">

  <!-- <div class="modal" id="modal-bar">
  <span class="exit" id="exit">&#10006;</span>
  <input type="checkbox" id="modal__trigger" class="modality"/>
  <label for="modal__trigger" class="modalCenter" id="modality">
  <img src="http://corp.healthline.com/wp-content/uploads/2015/07/RiseLogo.png" alt="" class="riseLogo"/>Set up sometime to chat with us at the Rise Conference - July 19-21, 2015</label>
  <div class="modal__overlay" id="modal__overlay">
    <div class="modal__wrap">
      <label for="modal__trigger">&#10006;</label>
      <form action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST" class="riseForm">
      <input type="hidden" name="oid" value="00DG0000000i5W2">
      <input type="hidden" id="lead_
      source" name="lead_source" value="RisePreShow">
       <input type="hidden" name="retURL" value="http://healthline.dev/?thanks">

      <div class="replace">
        <h3>Schedule Some Time to Chat With One of Our Team Members About <a href="http://corp.healthline.com/solutions/coding-insight/" class="riseInsight">Coding InSight</a></h3>


        <label for="first_name" class="placeholder-hide">Name</label>
        <input type="text" placeholder="Name" id="first_name" name="first_name" maxlength="40" size="20">
        <input type="hidden" name="last_name" id="last_name">
        <label for="email" class="placeholder-hide"></label>
        <input type="text" placeholder="E-mail" name="email" id="email" required>
        <input type="submit" name="submit" value="Submit!" class="riseSubmit">
      </div>
     </form>
    </div>
  </div>
</div> -->

  <?php do_action('hl_ct_new_site_ad'); ?>
  <div class="container">

    <div class="row">
      <nav class="nav-main span12" role="navigation">

        <h1>
          <a href="/"><img src="<?php bloginfo('template_directory'); ?>/library/img/structure/healthline.png" alt="Healthline" width="222" height="43"></a>
        </h1>

        <a href="#" class="mobile-nav">+ Menu</a>

        <?php bones_main_nav(); ?>

      </nav>
    </div><!--! .row -->

  </div>
</header>