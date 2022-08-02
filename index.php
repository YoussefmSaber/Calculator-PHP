<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculator</title>
    
</head>
<body>
    <div class="container">
    
    
        <form method="post" class="form">
            <input type="text" name="num1" placeholder="Number1" class="num-input brdr-rad">
            <input type="text" name="num2" placeholder="Number2" class="num-input brdr-rad">

            <div class="select">
                <select name="op" style="width:170px" class="brdr-rad">
                    <option value="none">None</option>
                    <option value="add">Addition</option>
                    <option value="sub">Subtract</option>
                    <option value="mul">Multiply</option>
                    <option value="div">Divide</option>
                </select>
            </div>

            <div class="select">
                <button type="submit" name="calculate" value="Calculate" class="brdr-rad btn">Calculate</button>
            </div>
        
        </form>
        <div class="result">
        <?php

        if(isset($_POST['calculate']))
        {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operator = $_POST['op'];
            $outputcase = 1;

            switch($operator)
            {
                case 'none':
                    $outputcase = 2;
                    echo "Please select an operation";
                    break;
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
                print $result;
            }
        }
        ?>
</div>
</div>
</body>
</html>