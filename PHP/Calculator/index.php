<html>
<body>
<h3>Calculator</h3>
<form method="get" action="addition.php">
  First number: <input name="first_num" type="number"><br>
  Second number: <input name="second_num" type="number"><br>
  <button type="submit">Add</button>
  <button formaction="division.php" type="submit">Divide</button>
  <button formaction="multiplication.php" type="submit">Multiply</button>
  <button formaction="subtraction.php" type="submit">Subtract</button>
</form>
<a href="index.php">Reset</a>
</body>
</html>