<?php

// require_once './public/class-jubilantors-plugin-public.php';
// $plugin_public->wp_display_bar();
if (get_option('jubi-color') === false) {
    $colorBar = 'black';
} else {
    $colorBar = get_option('jubi-color');
}
if (get_option('jubi-percentage') == 'on') {
    $percent = '';
    $check = 'checked';
} else {
    $percent = 'display-none';
    $check = '';
}
?>

<div class="div-admin">
    <form action="" method="POST" class="form-admin">
        <h1>Modifications de la barre de défilement</h1>
        <div class="check-admin">
            <label for="percentage">Afficher le pourcentage</label>
            <input type="checkbox" id="percentage" name="jubi-percentage" <?=$check?> >
        </div>
        <input type="color" value="<?= $colorBar ?>" name="color" id="colorPicker">
        <?php
        submit_button('Enregistrer les modifications');

        ?>
    </form>
    <?php
    echo '	
<div class="bar-admin">
    <div class="bar-container"> 
        <div class="bar" style="background-color:'. $colorBar .'">
        <p class="text-bar ' . $percent . '">50%</p>
        </div>
    </div>
</div> ';
    ?>
</div>
<img src="" alt="">