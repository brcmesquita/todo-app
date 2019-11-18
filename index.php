<!DOCTYPE html >
<html lang="pt-br" >

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>To Do</title>
</head>

<body>
  <div class="list">
    <h1 class="header">To do.</h1>

    <ul class="items">
      <li>
        <span class="item">Pick up shopping.</span>
        <a href="#" class="done-button">Mark as done</a>
      </li>
      <li><span class="item done">Learn PHP.</span></li>
      <li><span class="item">Go vegan.</span></li>
    </ul>

    <form class="item-add" action="add.php" method="post">
      <input type="text" name="name" id="name" placeholder="Digite uma tarefa aqui." class="input" autocomplete="off"
        required />
      <input type="submit" value="Add" class="submit" />
    </form>
  </div>


  <link rel="stylesheet" href="css/estilos.css" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light+Two&display=swap" rel="stylesheet" />
</body>

</html>