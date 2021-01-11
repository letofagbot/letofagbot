<?php

require_once('simplevk-master/autoload.php');
use DigitalStar\vk_api\VK_api as vk_api; // Основной класс


const VK_KEY = "c9a1fbcf5665fd04fef9eaac591f5172995c3b67b7feaab13396c934e1d92e172d343d69c18b0d9f830b6";  // Токен сообщества
const ACCESS_KEY = "f7a306ac";  // Тот самый ключ из сообщества
const VERSION = "5.126"; // Версия API VK


$vk = vk_api::create(VK_KEY, VERSION)->setConfirm(ACCESS_KEY);

$vk->initVars($peer_id, $message, $payload, $vk_id, $type, $data); // Инициализация переменных
// ====== Наши переменные ============
$vk_id = $data->object->from_id; // Узнаем ID пользователя, кто написал нам
$message = $data->object->text; // Само сообщение от пользователя

$date = date("d.m.Y  H:i");
// ====== *************** ============

if ($data->type == 'message_new') {
    switch ($message) {
        case "летофаг":
            $vk->sendMessage($peer_id, "Нихуя себе, меня зовут. Чё?");
            echo 'ok';
        case "ебани время":
            $vk->sendMessage($peer_id, $date, "В пространстве потерялся опять?");
            echo 'ok';

    }


}
