<!DOCTYPE html>
<html lang="ru">

<head>
  <meta name="author" content="sergey.sepol@gmail.com">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Список дел</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="container">
    <h1>Список дел</h1>
    <div class="border">
      <form action="add.php" method="POST">
        <input id="task" type="text" name="task" placeholder="Введите задачу..." class="form-control">
        <button type="submit" name="sendTask" class="btn btn-primary">Отправить</button>
      </form>

        <?php
            require 'configDB.php';

            echo '<ul>';
            $query = $pdo->query('SELECT * FROM `tasks` ORDER BY `id` DESC');
            while($row = $query->fetch(PDO::FETCH_OBJ)) {
                echo '
                <li>
                    <b>' . $row->task . '</b>
                    <a href="delete.php?id='.$row->id.'">
                        <button>Удалить</button>
                    </a>
                </li>';
            }
            echo '</ul>';
        ?>

    </div>
  </div>
</body>

</html>