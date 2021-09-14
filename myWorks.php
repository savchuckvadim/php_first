<?php
$myWorks = array('Создал файл с расширением HTML', 'Создал файл с расширением CSS', 'Создал файл с расширением JS', 'Создал файл с расширением PHP');

function allworks($myWorks) {
    foreach ($myWorks as $value){
        echo " <p class=\"myWorks__text\">".$value."</p>";
    }
}

?>

<div class="myWorks__textContainer">
    <!-- <p class="myWorks__text">Создал файл с расширением HTML</p>
    <p class="myWorks__text">Создал файл с расширением CSS</p>
    <p class="myWorks__text">Создал файл с расширением JS</p>
    <p class="myWorks__text">Создал файл с расширением PHP</p> -->
    <?php 
allWorks($myWorks);
    ?>
    <p class="myWorks__text">Есть подтверждения</p>
    <p class="myWorks__text">Скоро и для Вас сделаю - обращайтесь</p>
</div>
<img src="./img/skills2.jpg" alt="image computer" class="myWorks__image">