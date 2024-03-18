<?php
// Создаем ассоциативный массив с информацией о продуктах (название => цена)
$products = array(
    "Молоко" => 50,
    "Хлеб" => 30,
    "Яблоки" => 80,
    "Мясо" => 300,
    "Сыр" => 200
);

// Инициализируем переменные для хранения информации о товаре с самой высокой ценой
$maxPriceProduct = "";
$maxPrice = 0;

// Проходим по массиву и находим товар с самой высокой ценой
foreach ($products as $product => $price) {
    if ($price > $maxPrice) {
        $maxPrice = $price;
        $maxPriceProduct = $product;
    }
}

// Выводим информацию о товаре с самой высокой ценой
echo "Товар с самой высокой ценой: $maxPriceProduct, Цена: $maxPrice рублей";
?>