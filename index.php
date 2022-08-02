<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
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
    <?php

    if(isset($_POST['calculate']))
    {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['op'];
        $outputcase = 1;

        switch($operator)
        {
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'sub':
                $result = $num1 - $num2;
                break;
            case 'mul':
                $result = $num1 * $num2;
                break;
            case 'div':
                if($num2 == 0)
                {
                    $outputcase = 2;
                    echo "Can't divide by 0";
                }
                else
                {
                    $reslut = $num1 / $num2;
                }
                break;
        }
        if($outputcase == 1)
        {
            echo "The answer is: $result";
        }
    }

?>
</body>
</html>