<html>
<head>
  <meta charset="utf-8">
  <title>简单的投票程序</title>
</head>
<body>
  <h1>简单的投票程序</h1>
  <form action="投票结果统计.php" method="POST">
    <h2>以下游戏，你最喜欢哪一个？</h2>
    <p><input type="radio" name="vote" value="原神">原神</p>
    <p><input type="radio" name="vote" value="王者荣耀">王者荣耀</p>
    <p><input type="radio" name="vote" value="和平精英">和平精英</p>
    <p><input type="radio" name="vote" value="QQ飞车">QQ飞车</p>
    <input type="submit" name="submit" value="我要投票">
  </form>
</body>
<style>
    body{
      display:flex;
      flex-direction:column;
      justify-content:flex-start;
      align-items:center;
      height: 100vh;
    }
</style>
</html>