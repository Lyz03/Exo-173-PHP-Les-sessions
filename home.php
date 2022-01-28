<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no">
  <title>exo 173</title>
</head>
<body style="background-color: <?= $color ?>">
<form action="index.php" method="post">
  <select name="color" size="1">
    <option value="">--Please choose an option--</option>
    <option value="red">red</option>
    <option value="blue">blue</option>
    <option value="green">green</option>
    <option value="black">black</option>
    <option value="white">white</option>
  </select>
  <input type="submit" value="Envoyer" name="submit">
</form>

<div>
    <a href="/page1.php">page 1</a>
</div>
<div>
    <a href="/page2.php">page 2</a>
</div>

</body>
</html>