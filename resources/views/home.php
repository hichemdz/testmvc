<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <h1>Home page</h1>
  <img src="https://localhost/learn/mvc/resources/img/img.jpg" />
  <form method='POST' action='<?=route('home')?>'>
       <input name='name' value="hichem" />
       <input type="submit" value="send your name">
  </form>
</html>