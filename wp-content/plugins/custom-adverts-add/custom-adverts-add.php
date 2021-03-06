<?php
/*
 * Plugin Name: Custom Adverts Fields.
 * Description: This plugin replaces default advert fields
 */

/** Get custom fields for donation */
add_filter( "adverts_form_load", "my_adverts_form_load") ;

function my_adverts_form_load( $form ) {
    if( $form["name"] != "advert" ) {
        return $form;
    }
    $form["field"][] = array(
        "name" => "my_custom_donation",
        "type" => "adverts_field_select",
        "order" => 25,
        "label" => "Where would you like your donation proceedings to go?",
        "is_required" => false,
        "validator" => array( ),
        "max_choices" => 2,
        "options" => array(
            array("value"=>"1", "text"=>"The new Church roof"),
            array("value"=>"2", "text"=>"Church Flowers"),
            array("value"=>"3", "text"=>"Generic Church upkeep")
        )
    );
    $form["field"][] = array(
        "name" => "my_custom_terms",
        "type" => "adverts_field_checkbox",
        "order" => 25,
        "label" => "Terms and Conditions",
        "is_required" => true,
        "validator" =>  array(
          array( "name" => "is_required" )
        ),
        "max_choices" => 1,
        "options" => array(
            array("value"=>"1", "text"=>"I Agree to the <a href='/terms-and-conditions/' target='_blank'>Terms and Conditions</a>")
        )
    );
    return $form;
}
