<?php
    require "database.json";
    include_once "backend.php";

?>


<h1>Ofertas do Brenão</h1>

<ul> <h2>Frutas</h2>
    <?php foreach($frutas as $fruta): ?>
    <li><?= $fruta ?></li>
    <?php endforeach;?>
</ul>