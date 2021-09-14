<?php
$index = 0;
$contacts = array(
    "Телеграф" => "%$*___-$%8",
    "Телекс" => "*^^976t34190)&)*",
    "Голубиная почта" => "#@guli-shmuli",
    "Пейджер" => "__odin_tree",
    "Радиосвязь" => "onteno",
    "Однокласники" => "vk@78"
);
$icons = array(
    "./img/telegram_white_24dp.svg",
    "./img/settings_phone_white_24dp.svg" ,
    "./img/flight_takeoff_white_24dp.svg",
    "./img/videogame_asset_white_24dp.svg",
    "./img/radio_white_24dp.svg",
    "./img/elderly_white_24dp.svg"

);

function allContacts($contacts, $icons, $index) {
    foreach ($contacts as $key => $value){
        echo " <p class=\"contacts__text\"><img src=\"".$icons[$index]."\" alt=\"icon radio\"class=\"contacts__icon\">".$key.": <span class=\"contacts__value\">".$value."</span></p>";
        $index++;
    }
}
allContacts($contacts, $icons, $index);
?>