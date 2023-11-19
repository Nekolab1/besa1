<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Визначення назви кольору</title>
</head>
<body>

<?php
// Функція для отримання назви кольору за допомогою оператора switch-case
function getColorName($colorNumber) {
    switch ($colorNumber) {
        case 1:
            return "Червоний";
        case 2:
            return "Помаранчевий";
        case 3:
            return "Жовтий";
        case 4:
            return "Зелений";
        case 5:
            return "Блакитний";
        case 6:
            return "Синій";
        case 7:
            return "Фіолетовий";
        default:
            return "Невідомий колір";
    }
}

// Введення порядкового номеру кольору
$colorNumber = isset($_GET['color']) ? intval($_GET['color']) : 1;

// Отримання назви кольору
$colorName = getColorName($colorNumber);

// Виведення інформації про розробника
echo "<p>Розробник: Група, Прізвище Ім'я По батькові</p>";
echo "<p>Дата створення документу: " . date("Y-m-d H:i:s") . "</p>";
echo "<p>Поточна дата: " . date("Y-m-d") . "</p>";

// Виведення результату
echo "<p>Назва кольору з порядковим номером $colorNumber: $colorName</p>";
?>

</body>
</html>
