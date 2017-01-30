<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP stuff</title>
    <style>
    .header{
      text-align: center;
      background-color: lightgrey;
      padding: 2em;
    }
    </style>
  </head>
  <body>
    <h1 class="header">
      hey buds
   </h1>
   <ul>
     <?php foreach ($names as $name => $age) : ?>
       <li><?= "$name : $age" ?></li>
    <?php endforeach; ?>
   </ul>
  </body>
</html>
