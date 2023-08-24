<?php

// require_once './public/class-jubilantors-plugin-public.php';
// $plugin_public->wp_display_bar();
if (get_option('jubi-color') === false) {
    $colorBar = 'linear-gradient(180deg, rgba(0,0,0,1) 0%, rgba(255,0,0,1) 50%, rgba(0,0,0,1) 100%)';
} else {
    $colorBar = get_option('jubi-color');
}
if (get_option('jubi-percentage') == 'on'){
    $percent = '';
} else {
    $percent = 'display-none';
}
?>


<form action="" method="POST">
    <h1>Modifications de la barre de défilement</h1>
    <label for="percentage">Afficher le pourcentage</label>
    <input type="checkbox" id="percentage" name="jubi-percentage">
    <input type="color" value="<?=$colorBar?>" name="color">
    <?php
    submit_button('Enregistrer les modifications');

    ?>
</form>

<?php
echo '	
<div class="bar-container">
    <div class="bar" style="background:linear-gradient(180deg, rgba(0,0,0,1) 0%,' . $colorBar . '50%, rgba(0,0,0,1) 100%)">
        <p class="text-bar ' . $percent . '">50%</p>
    </div>
</div>';
?>