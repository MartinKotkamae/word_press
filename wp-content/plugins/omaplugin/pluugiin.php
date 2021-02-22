<?php
/**
 * Plugin Name: Very First Plugin
 * Plugin URl: https://martinkotkamae.ikt.khk.ee/
 * Description: Esimene oma tehtud plugin.
 * Version: 1.0
 * Author: Martin Kotkamäe
 * Author URl: https://martinkotkamae.ikt.khk.ee/
**/

add_action("admin_menu", "addMenu");
function addMenu()
{
    add_menu_page("Example Options", "Example Options", 4, "example-options", "exampleMenu");
    add_submenu_page("example-options", "Option 1", "Option1", 4, "example-option-1", "option1");
}

function exampleMenu()
{
    echo "Hello World!";
}

function option1()
{
    echo "Valik!";
}
?>