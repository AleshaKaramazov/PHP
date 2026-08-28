<?php

$users = [
    ["name" => "Алексей", "age" => 25],
    ["name" => "Мария", "age" => 17],
    ["name" => "Иван", "age" => 30],
    ["name" => "Ольга", "age" => -5], 
    ["name" => "Влад", "age" => 19],
];

try {
    foreach ($users as $user) {
        if ($user['age'] < 0) 
            throw new Exception('');
        

        if ($user['age'] > 18) 
            echo "user: " . $user['name'] . " (age: " . $user['age'] . ")\n";
        
    }
} catch (Exception $e) {}

for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        echo $i . ' * ' . $j . ' = ' . ($i * $j) . "<br>";
    }
    echo "<br>"; 
}

$cities = ["Санкт-Петербург", "Новосибирск", "Москва", "Екатеринбург", "Казань"];

foreach ($cities as $city) {
    if ($city === "Москва") {
        echo "Нашел!\n";
        break;
    }
}
