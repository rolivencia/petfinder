<?php

/**
 * Template Name: PetFinder Submit Page Template
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
                <div class="panel-body" style="text-align: center" ng-controller="submitController">
                    <div class="row">
                        <div class="col-xs-1 col-sm-2 col-md-3 col-lg-4"></div>
                        <div class="col-xs-3 col-sm-2 col-md-3 col-lg-1">
                            <ul class="list-group">
                                <li class="list-group-item list-group-item-info">Name</li>
                                <li class="list-group-item list-group-item-info">Breed</li>
                                <li class="list-group-item list-group-item-info">Location</li>
                                <li class="list-group-item list-group-item-info">Date</li>
                                <li class="list-group-item list-group-item-info">Gender</li>
                                <li class="list-group-item list-group-item-info">Description</li>
                            </ul>
                        </div>
                        <div class="col-xs-7 col-sm-6 col-md-3 col-lg-3">
                            <ul class="list-group">
                                <li class="list-group-item list-group-item-info">
                                    <input type="text" class="form-control" placeholder="What's the name of the lost dog?" ng-model="varName">
                                </li>
                                <li class="list-group-item list-group-item-info">
                                    <input type="text" class="form-control" placeholder="What's the breed of the lost dog?" ng-model="breed">
                                </li>
                                <li class="list-group-item list-group-item-info">
                                    <input type="text" class="form-control" placeholder="Where did the dog get lost?" ng-model="varLocation">
                                </li>
                                <li class="list-group-item list-group-item-info">
                                    <input id="lostDate" type="text" class="form-control picker" placeholder="When did the dog get lost?" ng-model="date">
                                </li>
                                <li class="list-group-item list-group-item-info">
                                    <select id="petGender" class="form-control input" ng-model="gender">
                                        <option selected>Not specified</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </li>
                                <li class="list-group-item list-group-item-info">
                                    <input type="text" class="form-control" placeholder="Description of the lost dog" ng-model="varDescription">
                                </li>
                            </ul>
                        </div>
                        <div class="col-xs-1 col-sm-2 col-md-3 col-lg-4"></div>
                    </div>

                    <button type="button" class="btn btn-primary" name "submit" ng-click="submit()">
                        <span class="glyphicon glyphicon-arrow-up"></span> Submit
                    </button>
                </div>      
        </div>
        </body>
    </html>

<?php

get_footer();

?>

<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri()?>/js/jquery/datepicker.js"></script>

