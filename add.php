<?php

$task = $_POST['task'];
if($task == '') {
    echo 'Введите задачу';
    exit();
}

require 'configDB.php';

$sql = 'INSERT INTO tasks(task) VALUES(:task)'; 
$query = $pdo->prepare($sql);
$query->execute(['task' => $task]);

header('Location: /');

?>