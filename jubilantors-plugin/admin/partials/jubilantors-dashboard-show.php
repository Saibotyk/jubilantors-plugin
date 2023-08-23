<?php

// require_once './public/class-jubilantors-plugin-public.php';
// $plugin_public->wp_display_bar();
// $plugin_public->wp_display_reinitButton();


?>


<form action="" method="POST">
    <h1>Modifications de la barre de défilement</h1>
    <label for="percentage">Afficher le pourcentage</label>
    <input type="checkbox" id="percentage" name="jubi-percentage">
    <?php
    submit_button('Enregistrer les modifications');

    ?>
</form>

<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $jubiPercentage = $_POST['jubi-percentage'];
    if (isset($_POST['jubi-percentage'])) {
        if (get_option('jubi-percentage') === false) {
            add_option('jubi-percentage', $jubiPercentage);
        } else {
            update_option('jubi-percentage', $jubiPercentage);
        }
    } else {
        if (get_option('jubi-percentage') === false) {
            add_option('jubi-percentage', 'off');
        } else {
            update_option('jubi-percentage', 'off');
        }
    }
}
?>