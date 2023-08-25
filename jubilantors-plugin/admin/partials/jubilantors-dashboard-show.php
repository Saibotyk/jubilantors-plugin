<?php

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
        <div>
        <label for="colorPicker">Changer la couleur</label>
        <input type="color" value="<?= $colorBar ?>" name="color" id="colorPicker">
        </div>
        <div>
            <p>Changer le placement (axe X)</p>
            <input type="radio" id="top-placement" name="placementX" value="top">
            <label for="top-placement">Top</label>
            <input type="radio" id="bottom-placement" name="placementX" value="bottom">
            <label for="bottom-placement">Bottom</label>
        </div>
        <div>
            <p>Changer le placement (axe Y)</p>
            <input type="radio" id="right-placement" name="placementY" value="right">
            <label for="right-placement">Right</label>
            <input type="radio" id="left-placement" name="placementY" value="left">
            <label for="left-placement">Left</label>
        </div>
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