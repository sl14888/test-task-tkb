<?php
$json = file_get_contents('php://input'); // Получаем данные из POST запроса
$data = json_decode($json, true); // Декодируем JSON в массив

if (json_last_error() === JSON_ERROR_NONE) { // Проверяем, что декодирование прошло успешно
    // Действия с массивом $data
    echo json_encode(true);
} else {
    echo json_encode(false);
}