<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="background">
        <div class="container">
            <div class="screen">
                <div class="screen-body">
                    <div class="screen-body-item-left">
                        <div class="app-little">
                            <div class="animated infinite pulse">
                                <div class="line"> PHP <br> Calculator <br> </div> 
                            </div>
                        </div>
                    </div>
                    <div class="screen-body-item">
                        <div class="app-form">
                            <form method="POST">
                                <div class="app-form-group">
                                    <input type="text" name="num1" class="app-form-control" placeholder="Enter First Number">
                                </div>
                                <div class="app-form-group">
                                    <input type="text" name="num2" class="app-form-control" placeholder="Enter Second Number">
                                </div>
                                <div class="select-style">
                                    <select name="operation">
                                        <option value="add">Addition</option>
                                        <option value="sub">Subtraction</option>
                                        <option value="mult">Multiplication</option>
                                        <option value="div">Division</option>
                                    </select>
                                </div>
                                <div>
                                    <input type="submit" name="submit" value="submit" class="app-form-button">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="app-form-group showdata">
                    <p>
                        <?php
                          if(isset($_POST['submit'])){
                            $num1 = $_POST['num1'];
                            $num2 = $_POST['num2'];
                            // echo $num1 . $num2;
                            $operation =$_POST['operation'];

                            switch($operation){
                                case "add": $sum = $num1 + $num2;
                                   echo "The Addition of two Numbers = " .$sum;
                                    break;
                                     
                                case "sub": $sub = $num1 - $num2;
                                   echo "The Subtraction of two Numbers = " .$sub;
                                    break;
                                    
                                case "mult": $mult = $num1 * $num2;
                                   echo "The Multiplication of two Numbers = " .$mult;
                                    break;
                                    
                                case "div": $div = $num1 / $num2;
                                   echo "The Division of two Numbers = " .$div;
                                    break;

                                default: echo "Sorry You Entered Wrong Number";
                            }
                          }
                        ?>
                    </p>
                </div>
            </div>
        
        </div>
    </div>
</body>
</html>
