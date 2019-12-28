<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage PetFinder
 * @since PetFinder 1.0
 */
?>

<?php
$user_ID = get_current_user_id();
global $wpdb;

$query = "SELECT display_name FROM wp_users where id =".$user_ID;
$result = $wpdb->get_results( $query );
$userName= $result[0]->display_name;

if($userName==""){
    $userName="Guest";
}
?>

<!DOCTYPE html>

<html ng-app="petfinder">

<head>
	<title>Missing Dog - Search for your lost dogs online!</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_enqueue_script('jquery');?>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() ?>/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() ?>/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() ?>/js/angular/angular-ui-ng-grid/ng-grid.css" />
</head>

<body>

<nav class="navbar navbar-default gray" role="navigation" style="text-align:center">
  <div class="container-fluid container-gray">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#" style="text-align:center">Missing Dog</a>
      <img src="<?php echo get_stylesheet_directory_uri() ?>/images/logo.png" width="35px" height="35px" style="vertical-align:text-top;">
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li><a href="<?php echo get_permalink( '2' );?>">Lost dogs database</a></li>
            <li <?php if (!current_user_can("edit_posts")){?>style="display:none"<?php } ?>><a href="<?php echo get_permalink( '7' );?>">Submit a lost dog</a></li>
        </ul>
      <ul class="nav navbar-nav navbar-right">
        <li <?php if (is_user_logged_in()){?>style="display:none"<?php } ?>><a href="<?php echo wp_login_url( home_url() );?>/">Login</a></li>
        <li <?php if (!is_user_logged_in()){?>style="display:none"<?php } ?>><a href="/petfinder/wp-admin">Administration Panel</a></li>
        <li <?php if (!is_user_logged_in()){?>style="display:none"<?php } ?>><a href="<?php echo wp_logout_url( home_url() );?>/">Logoff</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>