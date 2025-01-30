<?php
if (isset($_GET['path'])) {
    echo '<h2>Путь запроса, переданный в точку входа:</h2>';
    echo $_GET['path'];
} else {
    echo 'Привет!';
}