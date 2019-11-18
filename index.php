<?php

require_once 'app/init.php';

$itemsQuery = $db->prepare("
  SELECT id, name, done
  FROM items
  WHERE user = :user
  ");

$itemsQuery->execute([
  'user' => $_SESSION['user_id']
]);

$items = $itemsQuery->rowCount() ? $itemsQuery : [];

#foreach($items as $item) {
#  print_r($item);
#}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>To Do</title>
</head>

<body>
  <div class="list">
    <h1 class="header">To do.</h1>

    <?php if (!empty($items)) : ?>
      <ul class="items">
        <?php foreach ($items as $item) : ?>
          <li>
            <span class="item<?php echo $item['done'] ? ' done' : '' ?>"><?php echo $item['name']; ?></span>
            <?php if (!$item['done']) : ?>
              <a href="mark.php?as=done&item=<?php echo $item['id']; ?>" class="done-button">Mark as done</a>
            <?php else : ?>
              <a href="mark.php?as=notdone&item=<?php echo $item['id']; ?>" class="done-button">Mark as undone</a>
            <?php endif; ?>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php else : ?>
      <p>Você não adicionou nenhuma tarefa ainda</p>
    <?php endif; ?>

    <form class="item-add" action="add.php" method="post">
      <input type="text" name="name" id="name" placeholder="Digite uma tarefa aqui." class="input" autocomplete="off" required />
      <input type="submit" value="Add" class="submit" />
    </form>
  </div>


  <link rel="stylesheet" href="css/estilos.css" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light+Two&display=swap" rel="stylesheet" />
</body>

</html>