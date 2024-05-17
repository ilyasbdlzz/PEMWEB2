<?php

$fruits =["Banana", "Avocado", "Melon", "Waterlemon", ];

echo $fruits[1];
echo "    ";
echo $fruits[3];

echo "<ol>";
    foreach ($fruits as $fruit) {
        echo "<li>" . $fruit . "</li>";
}
echo "</ol>";
?>