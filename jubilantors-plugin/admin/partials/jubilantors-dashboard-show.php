<?php

// require_once './public/class-jubilantors-plugin-public.php';
// $plugin_public->wp_display_bar();


?>


<form action="" method="POST">
    <h1>Modifications de la barre de défilement</h1>
    <label for="percentage">Afficher le pourcentage</label>
    <input type="checkbox" id="percentage" name="jubi-percentage">
    <input type="color" value="#fad345" name="color">
    <?php
    submit_button('Enregistrer les modifications');

    ?>
</form>

<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $jubiColor = $_POST['color'];
    if (isset($_POST['jubi-percentage'])) {
        $jubiPercentage = $_POST['jubi-percentage'];
        if (get_option('jubi-percentage') === false) {
            add_option('jubi-percentage', $jubiPercentage);
            add_option('jubi-color', $jubiColor);
        } else {
            update_option('jubi-percentage', $jubiPercentage);
            update_option('jubi-color', $jubiColor);
        }
    } else {
        if (get_option('jubi-percentage') === false) {
            add_option('jubi-percentage', 'off');
            add_option('jubi-color', $jubiColor);
        } else {
            update_option('jubi-percentage', 'off');
            update_option('jubi-color', $jubiColor);
        }
    }
}
$colorBar = get_option('jubi-color');

if (get_option('jubi-percentage') == 'on'){
    $percent = '';
} else {
    $percent = 'display-none';
};
echo '	
<div class="bar-container">
    <div class="bar" style="background:' . $colorBar . '">
        <p class="text-bar ' . $percent . '">50%</p>
    </div>
</div>';
?>