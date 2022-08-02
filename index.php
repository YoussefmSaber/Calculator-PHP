<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="calculate.php" method="post">
        <input type="text" name="num1">
        <input type="text" name="num2">
        <select name="op">
            <option value="add">Addition</option>
            <option value="sub">Subtract</option>
            <option value="mul">Multiply</option>
            <option value="div">Divide</option>
        </select>
        <input type="submit" name="calculate">
    </form>
</body>
</html>