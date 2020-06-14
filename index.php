<!DOCTYPE html>
<html>
<head>
 <title>Welcome!</title>
</head>
<body>
 <h1>Вітаємо!</h1>
<?php $a = ["#ff0000", "#00ff00", "#0000ff"]; ?>
 <p style=  "color: <?php print $a[rand(0,2)]; ?>">
  Поточна дата та час: <?php print date('d.m.Y H:i'); ?>
 </p>
</body>
</html>
