<?php

/**
 * Template Name: PetFinder Lost Dogs Template
 *
 * @package WordPress
 * @subpackage PetFinder
 * @since PetFinder 1.0
 */

?>

<?php
get_header();
if (is_front_page() && twentyfourteen_has_featured_posts()) {
    // Include the featured content template.
    get_template_part('featured-content');
}
?>

<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>Basic HTML File</title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>

        <div class="panel">
                <div class="panel-body" style="text-align: center" ng-controller="homeController">

                    <div class="panel-body">
                        <div class="col-xs-1 col-sm-2 col-md-3 col-lg-4"></div>
                        <div class="col-xs-10 col-sm-8 col-md-6 col-lg-4">
                            <form class="form-inline" ng-submit="search()">
                                <div class="form-group" style="width: 100%; text-align: right;">
                                    <input type="text" class="form-control" placeholder="Search" ng-model="searchText"  style="width:430px">
                                    <span class="glyphicon glyphicon-search searchIcon"></span>
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-xs-1 col-sm-2 col-md-3 col-lg-4"></div>
                    </div>

                    <div>
                        <div class="col-sm-1 col-md-2 col-lg-2"></div>
                        <div class="col-xs-12 col-sm-10 col-md-8 col-lg-8" ng-grid="gridOptions">
                             <form id="form1" action="#" method="post" target="_blank">
                                <pre id="selectedItems" style="display:none;">{{gridOptions.selectedItems}}</pre>
                                <input id="postInput" name="selectedItems" type="hidden" value="">
                            </form>
                        </div>
                        <div class="col-sm-1 col-md-2 col-lg-2"></div>
                    </div>

                    <div class="panel-body" <?php if (!current_user_can("edit_posts")){?>style="display:none"<?php } ?>>
                        <div class="col-xs-1 col-sm-2 col-md-3 col-lg-4"></div>
                        <div class="col-xs-10 col-sm-8 col-md-6 col-lg-4">
                            <button type="submit" class="btn btn-primary" ng-click="markAsFound()">Mark as found</button>
                            <button type="submit" class="btn btn-lost" ng-click="markAsLost()">Mark as lost</button>
                        </div>
                        <div class="col-xs-1 col-sm-2 col-md-3 col-lg-4"></div>
                    </div>


                </div>      
        </div>

        </body>
    </html>

<?php

get_footer();

?>



