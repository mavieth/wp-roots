<?php
  // This file assumes that you have included the nav walker from https://github.com/twittem/wp-bootstrap-navwalker
  // somewhere in your theme.
?>
<header class="banner navbar navbar-default navbar-static-top material-static-top" role="banner">
  <div class="container">
    <div class="navbar-header material-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav material-nav']);
      endif;
      ?>
    </nav>
  </div>

<style type="text/css">
/*header .jumbotron {
  background: url('<?php echo get_template_directory_uri(); ?>/assets/images/masthead-horizontal.png') no-repeat center;
  background-size: initial;
  min-height: 350px;
  max-width: 100%;
  padding-bottom: 0px;
  margin-bottom: 0px;
}*/

.jumbotron{
    background: url('<?php echo get_template_directory_uri(); ?>/assets/images/masthead-horizontal.png') no-repeat center center; 
    -webkit-background-size: 100% 100%;
    -moz-background-size: 100% 100%;
    -o-background-size: 100% 100%;
    background-size: 100% 100%;
    min-height: 375px;
}

.jumbotron {
    margin-bottom: 0px;
    border-bottom: 30px solid black;
}
.jumbotron {
    min-height: 425px;
    max-width: 1200px;
    text-align: center;
    margin: 0 auto;
}

/*==========  Mobile First Method  ==========*/

/* Custom, iPhone Retina */ 
@media only screen and (min-width : 320px) {
  .jumbotron{
      min-height: 175px;
  } 
}

/* Extra Small Devices, Phones */ 
@media only screen and (min-width : 480px) {
  .jumbotron{
      min-height: 250px;
  }
}

/* Small Devices, Tablets */
@media only screen and (min-width : 768px) {
  .jumbotron{
      min-height: 350px;
  }

}

/* Medium Devices, Desktops */
@media only screen and (min-width : 992px) {
  .jumbotron{
      min-height: 375px;
  }

}

/* Large Devices, Wide Screens */
@media only screen and (min-width : 1200px) {
  .jumbotron{
      min-height: 375px;
  }

}
#jumbo-background{
  background: white;
}
</style>

<div id="jumbo-background">
<div class="jumbotron"></div>
</div>
</header>