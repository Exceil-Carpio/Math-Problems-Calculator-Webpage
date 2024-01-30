<!DOCTYPE html>

<?php 
    error_reporting(E_ERROR | E_PARSE);

    $input1 = isset($_POST['input1'])? $_POST['input1'] : "";
    $input2 = isset($_POST['input2'])? $_POST['input2'] : "";
    $choice = isset($_POST['choice'])? $_POST['choice'] : "";
?>

<html>
    <head>
        <meta charset ="UTF-8">
        <meta name="Carpio's and Jose's Case Study" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <title>Case Study 3</title>
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    </head>

    <body>
        <div class="navbar">
            <h3><label for="home" class="home">Case Study 3</label></h3>
        </div>
        
        <input type="checkbox" id="check">
        <label for="check">
            <i class="fas fa-bars" id="btn"></i>
            <i class="fas fa-times" id="cancel"></i>
        </label>

        <input class="tabs" type="radio" name="sRadio" id="home" checked>
        <input class="tabs" type="radio" name="sRadio" id="problem1">
        <input class="tabs" type="radio" name="sRadio" id="problem2">
        <input class="tabs" type="radio" name="sRadio" id="problem3">
        <input class="tabs" type="radio" name="sRadio" id="problem4">
        <input class="tabs" type="radio" name="sRadio" id="problem5">
        <input class="tabs" type="radio" name="sRadio" id="problem6">
        <input class="tabs" type="radio" name="sRadio" id="problem7">
        <input class="tabs" type="radio" name="sRadio" id="problem8">
        <input class="tabs" type="radio" name="sRadio" id="problem9">
        <input class="tabs" type="radio" name="sRadio" id="problem10">
        <input class="tabs" type="radio" name="sRadio" id="problem11">
        <input class="tabs" type="radio" name="sRadio" id="problem12">
        <input class="tabs" type="radio" name="sRadio" id="problem13">
        <input class="tabs" type="radio" name="sRadio" id="problem14">
        <input class="tabs" type="radio" name="sRadio" id="problem15">
        <input class="tabs" type="radio" name="sRadio" id="problem16">
        <input class="tabs" type="radio" name="sRadio" id="problem17">
        <input class="tabs" type="radio" name="sRadio" id="problem18">
        <input class="tabs" type="radio" name="sRadio" id="problem19">
        <input class="tabs" type="radio" name="sRadio" id="problem20">

        <div class="sidebar">
            <header>Operations</header>
            <ul>
                <li><label for="problem1" class="problem1">Positive Integer Multiplication</label></li>
                <li><label for="problem2" class="problem2">Integer Multiplication</label></li>
                <li><label for="problem3" class="problem3">Positive Integer Division</label></li>
                <li><label for="problem4" class="problem4">Summation of Prime Numbers</label></li>
                <li><label for="problem5" class="problem5">Fibonacci Sequence</label></li>
                <li><label for="problem6" class="problem6">Factorial</label></li>
                <li><label for="problem7" class="problem7">Perfect Integer</label></li>
                <li><label for="problem8" class="problem8">Summation of a Series of Numbers</label></li>
                <li><label for="problem9" class="problem9">Summation of the <br/> Square of a Series of Numbers</label></li>
                <li><label for="problem10" class="problem10">Summation of a Series of Numbers Raised to Itself</label></li>
                <li><label for="problem11" class="problem11">Reverse a String of Numbers</label></li>
                <li><label for="problem12" class="problem12">English Equivalent of a String of Numbers</label></li>
                <li><label for="problem13" class="problem13">English Equivalent of a Reversed String of Numbers</label></li>
                <li><label for="problem14" class="problem14">Summation of Inputted Numbers</label></li>
                <li><label for="problem15" class="problem15">Palindrome</label></li>
                <li><label for="problem16" class="problem16">Word per Line</label></li>
                <li><label for="problem17" class="problem17">Letter per Line</label></li>
                <li><label for="problem18" class="problem18">Plural Form of Nouns</label></li>
                <li><label for="problem19" class="problem19">Encryption by Substitution</label></li>
                <li><label for="problem20" class="problem20">Letter Occurance Counter</label></li>
            </ul>
            <div class="space"></div>
        </div>

        <section>
            <div class="content welcome" style="text-align: center">
                <h1>Open Source Programming</h1>
                <h1>with Framework</h1>
                <hr/>
                <h3>Case Study 3 - Looping</h3>
            </div>

            <div class="content problem-1">
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                    <div class="innerBorder problem-1">
                        <table>
                            <tr> 
                                <td class="unit" style="text-align: right;"> 
                                    First no. &nbsp; &nbsp; = &nbsp; &nbsp;
                                </td>
                                <td> <input type="number" name="input1" min="0" id="inputField" value="<?php echo ($choice == 1)? $input1 : ""; ?>" required> </td>
                                <td class="unit" style="text-align: center;"> 
                                    &nbsp; &nbsp; x &nbsp; &nbsp;
                                </td>
                                <td class="unit" style="text-align: right;"> 
                                    &nbsp; &nbsp; Second no. &nbsp; &nbsp; = &nbsp; &nbsp;
                                </td>
                                <td> <input type="number" name="input2" min="0" id="inputField2" value="<?php echo ($choice == 1)? $input2 : ""; ?>" required> </td>
                                    <td> 
                                        <input type="hidden" name="choice" value="1"/>
                                        <input type= "submit" stlye="width: 200px;" value="compute" />
                                    </td>
                            </tr>
                        </table>
                    </div>
                    <h2 style="margin: 10px; margin-top: 20px">Product:</h2>
                    <div class="innerBorder problem-1">
                        <table>
                            <tr>
                                <td colspan="4">
                                    <textarea class="textLeft" cols="50" rows="10" readonly><?php
                                        if($choice == 1){
                                            if($input1 > 0 && $input2 > 0){
                                                $result = 0;
                                                for($i = 0; $i < $input2; $i++){
                                                    $result += $input1;
                                                }

                                                echo number_format($result);
                                            }
                                        }
                                    ?>
                                    </textarea>
                                </td>
                            </tr>
                        </table>
                    </div>
                </form>
            </div>

            <div class="content problem-2">
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                    <div class="innerBorder problem-1">
                    <table>
                        <tr> 
                            <td class="unit" style="text-align: right;"> 
                                First no. &nbsp; &nbsp; = &nbsp; &nbsp;
                            </td>
                            <td> <input type="number" name="input1" id="inputField" value="<?php echo ($choice == 2)? $input1 : "" ?>" required> </td>
                            <td class="unit" style="text-align: center;"> 
                                &nbsp; &nbsp; x &nbsp; &nbsp;
                            </td>
                            <td class="unit" style="text-align: right;"> 
                                &nbsp; &nbsp; Second no. &nbsp; &nbsp; = &nbsp; &nbsp;
                            </td>
                            <td> <input type="number" name="input2" id="inputField2" value="<?php echo ($choice == 2)? $input2 : "" ?>" required> </td>
                                <td> 
                                    <input type="hidden" name="choice" value="2"/>
                                    <input type= "submit" style="width: 200px;" value="compute" />
                                </td>
                        </tr>
                    </table>
                    </div>
                    <h2 style="margin: 10px; margin-top: 20px">Product:</h2>
                    <div class="innerBorder problem-1">
                    <table>
                        <tr>
                            <td colspan="4">
                                <textarea class="textLeft" cols="50" rows="10" readonly><?php
                                    if($choice == 2){
                                        $isNegative = false;

                                        if($input1 < 0 && $input2 > 0){
                                            $input1 *= -1;
                                            $isNegative = true;
                                        }elseif($input2 < 0 && $input1 > 0){
                                            $input2 *= -1;
                                            $isNegative = true;
                                        }elseif($input2 < 0 && $input1 < 0){
                                            $input1 *= -1;
                                            $input2 *= -1;
                                            $isNegative = false;
                                        }

                                        $result = 0;
                                        for($i = 0; $i < $input2; $i++){
                                            $result += $input1;
                                        }

                                        if($isNegative){
                                            $result *= -1;
                                        }

                                        echo number_format($result);
                                    }
                                ?>
                                </textarea>
                            </td>
                        </tr>
                    </table>
                    </div>
                </form>
            </div>

            <div class="content problem-3">
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                    <div class="innerBorder problem-3">
                        <table>
                            <tr> 
                                <td class="unit" style="text-align: right;"> 
                                    First no. &nbsp; &nbsp; = &nbsp; &nbsp;
                                </td>
                                <td> <input type="number" name="input1" min="0" id="inputField" value="<?php echo ($choice == 3)? $input1 : ""; ?>" required> </td>
                                <td class="unit" style="text-align: center;"> 
                                    &nbsp; &nbsp; ÷ &nbsp; &nbsp;
                                </td>
                                <td class="unit" style="text-align: right;"> 
                                    &nbsp; &nbsp; Second no. &nbsp; &nbsp; = &nbsp; &nbsp;
                                </td>
                                <td> <input type="number" name="input2" min="0" id="inputField2" value="<?php echo ($choice == 3)? $input2 : ""; ?>" required> </td>
                                    <td> 
                                        <input type="hidden" name="choice" value="3"/>
                                        <input type= "submit" stlye="width: 200px;" value="compute" />
                                    </td>
                            </tr>
                        </table>
                    </div>
                    <h2 style="margin: 10px; margin-top: 20px">Quotient:</h2>
                    <div class="innerBorder problem-3">
                        <table>
                            <?php
                                if($choice == 3){
                                    $remainder = 0;
                                    $quotient = 0;
                                    $temp = $input1;
                                    while($input1 >= $input2){
                                        $input1 -= $input2;
                                        $quotient++;
                                        $remainder = $input1;
                                    }
                                    $input1 = $temp;
                                }
                            ?>

                            <tr>
                                <td colspan="4">
                                    <textarea class="textLeft" cols="50" rows="3" readonly><?php 
                                            if($choice == 3){
                                                echo number_format($quotient);
                                            }
                                        ?>
                                    </textarea>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <h2 style="margin: 10px; margin-top: 20px">Remainder:</h2>
                    <div class="innerBorder problem-3">
                        <table>
                            <tr>
                                <td colspan="4">
                                    <textarea class="textLeft" cols="50" rows="3" readonly><?php 
                                            if($choice == 3){
                                                echo number_format($remainder);
                                            }
                                        ?>
                                    </textarea>
                                </td>
                            </tr>
                        </table>
                    </div>
                </form>
            </div>

            <div class="content problem-4">
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                    <div class="innerBorder problem-4">
                        <table>
                            <tr> 
                                <td class="unit" style="text-align: right;"> 
                                    Initial prime no. &nbsp; &nbsp; = &nbsp; &nbsp;
                                </td>
                                <td> <input type="number" name="input1" min="0" id="inputField" value="<?php echo ($choice == 4)? $input1 : ""; ?>" required> </td>
                                <td class="unit" style="text-align: center;"> 
                                    &nbsp; &nbsp; to &nbsp; &nbsp;
                                </td>
                                <td class="unit" style="text-align: right;"> 
                                    &nbsp; &nbsp; Final prime no. &nbsp; &nbsp; = &nbsp; &nbsp;
                                </td>
                                <td> <input type="number" name="input2" min="0" id="inputField2" value="<?php echo ($choice == 4)? $input2 : ""; ?>" required> </td>
                                    <td> 
                                        <input type="hidden" name="choice" value="4"/>
                                        <input type= "submit" stlye="width: 200px;" value="compute" />
                                </td>
                            </tr>
                        </table>
                    </div>
                    <h2 style="margin: 10px; margin-top: 20px">Sum:</h2>
                    <div class="innerBorder problem-4">
                        <table>
                            <tr>
                                <td colspan="4">
                                    <textarea class="textLeft" cols="50" rows="10" readonly><?php
                                            if($choice == 4){
                                                $result = 0;
                                                for($i = $input1; $i <= $input2; $i++){
                                                    if(is_prime($i)){
                                                        $result += $i;
                                                    }
                                                }
                                                echo number_format($result);
                                            }
                                        ?>
                                    </textarea>
                                </td>
                            </tr>
                        </table>
                    </div>
                </form>
            </div>

            <div class="content problem-5">
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                    <div class="innerBorder problem-5">
                        <table>
                            <tr> 
                                <td class="unit" style="text-align: right;"> 
                                    Number &nbsp; &nbsp; = &nbsp; &nbsp;
                                </td>
                                <td> <input type="number" name="input1" min="0" id="inputField" value="<?php echo ($choice == 5)? $input1 : ""; ?>" required> </td>
                                    <td> 
                                        <input type="hidden" name="choice" value="5"/>
                                        <input type= "submit" stlye="width: 200px;" value="compute" />
                                    </td>
                            </tr>
                        </table>
                    </div>
                    <h2 style="margin: 10px; margin-top: 20px">Fibonacci Sequence:</h2>
                    <div class="innerBorder problem-5">
                        <table>
                            <tr>
                                <td colspan="4">
                                    <textarea class="textLeft" cols="50" rows="10" readonly><?php 
                                            if($choice == 5){
                                                $output = "";
                                                $firstNum = 1;
                                                $secondNum = 1;
                                                $nextNum = 0;
                                                $temp = 0;
                                                for($i = 0; $i < $input1; $i++){
                                                    if($i == 0){
                                                        $output = $output.$firstNum;
                                                    }else{
                                                        $output = $output.', '.$firstNum;
                                                    }

                                                    $nextNum = $secondNum + $firstNum;
                                                    $firstNum = $secondNum;
                                                    $secondNum = $nextNum;
                                                }

                                                echo $output;
                                            }
                                        ?>
                                    </textarea>
                                </td>
                            </tr>
                        </table>
                    </div>
                </form>
            </div>

            <div class="content problem-6">
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                    <div class="innerBorder problem-5">
                    <table>
                        <tr> 
                            <td class="unit" style="text-align: right;"> 
                                Factorial of &nbsp; &nbsp; = &nbsp; &nbsp;
                            </td>
                            <td> <input type="number" name="input1" min="0" id="inputField" value="<?php echo ($choice == 6)? $input1 : ""; ?>" required> </td>
                                <td> 
                                    <input type="hidden" name="choice" value="6"/>
                                    <input type= "submit" stlye="width: 200px;" value="compute" />
                                </td>
                        </tr>
                    </table>
                    </div>
                    <h2 style="margin: 10px; margin-top: 20px">Product:</h2>
                    <div class="innerBorder problem-6">
                    <table>
                        <tr>
                            <td colspan="4">
                                <textarea class="textLeft" cols="50" rows="10" readonly><?php 
                                        if($choice == 6){
                                            $result = 1;
                                            for($i=1; $i <= $input1; $i++){
                                                $result *= $i;
                                            }
                                            echo number_format($result);
                                        }
                                    ?>
                                </textarea>
                            </td>
                        </tr>
                    </table>
                    </div>
                </form>
            </div>

            <div class="content problem-7">
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                    <div class="innerBorder problem-7">
                        <table>
                            <tr> 
                                <td class="unit" style="text-align: right;"> 
                                    Integer to check &nbsp; &nbsp; = &nbsp; &nbsp;
                                </td>
                                <td> <input type="number" name="input1" id="inputField" value="<?php echo ($choice == 7)? $input1 : ""; ?>" required> </td>
                                    <td> 
                                        <input type="hidden" name="choice" value="7"/>
                                        <input type= "submit" stlye="width: 200px;" value="compute" />
                                    </td>
                            </tr>
                        </table>
                    </div>
                    <h2 style="margin: 10px; margin-top: 20px">Is the given integer perfect?</h2>
                    <div class="innerBorder problem-7">
                        <table>
                            <tr>
                                <td colspan="4">
                                    <textarea class="textLeft" cols="50" rows="10" readonly><?php 
                                            if($choice == 7){
                                                $temp = 0;
                                                for($i = 1; $i < $input1; $i++){
                                                    if($input1%$i == 0){
                                                        $temp += $i;
                                                    }
                                                }
                                                
                                                if($input1 == $temp){
                                                    echo "Yes";
                                                }else{
                                                    echo "No";
                                                }
                                            }
                                        ?>
                                    </textarea>
                                </td>
                            </tr>
                        </table>
                    </div>
                </form>
            </div>

            <div class="content problem-8">
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                    <div class="innerBorder problem-8">
                    <table>
                        <tr> 
                            <td class="unit" style="text-align: right;"> 
                                Number limit &nbsp; &nbsp; = &nbsp; &nbsp;
                            </td>
                            <td> <input type="number" name="input1" min=0; id="inputField" value="<?php echo ($choice == 8)? $input1 : ""; ?>" required> </td>
                                <td> 
                                    <input type="hidden" name="choice" value="8"/>
                                    <input type= "submit" stlye="width: 200px;" value="compute" />
                                </td>
                        </tr>
                    </table>
                    </div>
                    <h2 style="margin: 10px; margin-top: 20px">Sum:</h2>
                    <div class="innerBorder problem-8">
                    <table>
                        <tr>
                            <td colspan="4">
                                <textarea class="textLeft" cols="50" rows="10" readonly><?php 
                                        if($choice == 8){
                                            $result = 0;
                                            for($i=0; $i <= $input1; $i++){
                                                $result += $i;
                                            }
                                            echo $result;
                                        }
                                    ?>
                                </textarea>
                            </td>
                        </tr>
                    </table>
                    </div>
                </form>
            </div>

            <div class="content problem-9">
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                    <div class="innerBorder problem-8">
                        <table>
                            <tr> 
                                <td class="unit" style="text-align: right;"> 
                                    Number limit &nbsp; &nbsp; = &nbsp; &nbsp;
                                </td>
                                <td> <input type="number" name="input1" min="0" id="inputField" value="<?php echo ($choice == 9)? $input1: ""; ?>" required> </td>
                                    <td> 
                                        <input type="hidden" name="choice" value="9"/>
                                        <input type= "submit" stlye="width: 200px;" value="compute" />
                                    </td>
                            </tr>
                        </table>
                    </div>
                    <h2 style="margin: 10px; margin-top: 20px">Sum of squares until the number limit:</h2>
                    <div class="innerBorder problem-8">
                        <table>
                            <tr>
                                <td colspan="4">
                                    <textarea class="textLeft" cols="50" rows="10" readonly><?php 
                                            if($choice == 9){
                                                $result = 0;
                                                for($i=0; $i <= $input1; $i++){
                                                    $result += $i**2;
                                                }
                                                echo $result;
                                            }
                                        ?>
                                    </textarea>
                                </td>
                            </tr>
                        </table>
                    </div>
                </form>
            </div>

            <div class="content problem-10">
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                    <div class="innerBorder problem-10">
                        <table>
                            <tr> 
                                <td class="unit" style="text-align: right;"> 
                                    Number limit &nbsp; &nbsp; = &nbsp; &nbsp;
                                </td>
                                <td> <input type="number" name="input1" min="0" id="inputField" value="<?php echo ($choice == 10)? $input1: ""; ?>" required> </td>
                                    <td> 
                                        <input type="hidden" name="choice" value="10"/>
                                        <input type= "submit" stlye="width: 200px;" value="compute" />
                                    </td>
                            </tr>
                        </table>
                    </div>
                    <h2 style="margin: 10px; margin-top: 20px">Sum of powers from 1 - no. limit:</h2>
                    <div class="innerBorder problem-10">
                        <table>
                            <tr>
                                <td colspan="4">
                                    <textarea class="textLeft" cols="50" rows="10" readonly><?php 
                                            if($choice == 10){
                                                $result = 0;
                                                for($i=1; $i <= $input1; $i++){
                                                    $result += $i**$i;
                                                }
                                                echo $result;
                                            }
                                        ?>
                                    </textarea>
                                </td>
                            </tr>
                        </table>
                    </div>
                </form>
            </div>

            <div class="content problem-11">
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                    <div class="innerBorder problem-11">
                        <table>
                            <tr> 
                                <td class="unit" style="text-align: right;"> 
                                    Integer &nbsp; &nbsp; = &nbsp; &nbsp;
                                </td>
                                <td> <input type="number" name="input1" min="0" id="inputField" value="<?php echo ($choice == 11)? $input1: ""; ?>" required> </td>
                                    <td> 
                                        <input type="hidden" name="choice" value="11"/>
                                        <input type= "submit" stlye="width: 200px;" value="compute" />
                                    </td>
                            </tr>
                        </table>
                    </div>
                    <h2 style="margin: 10px; margin-top: 20px">Reversed Input:</h2>
                    <div class="innerBorder problem-11">
                        <table>
                            <tr>
                                <td colspan="4">
                                    <textarea class="textLeft" cols="50" rows="10" readonly><?php 
                                            if($choice == 11){
                                                $reversed = "";
                                                for($i=strlen((string)$input1); 0 <= $i ; $i--){
                                                    $reversed = $reversed.$input1[$i];
                                                }
                                                echo $reversed;
                                            }
                                        ?>
                                    </textarea>
                                </td>
                            </tr>
                        </table>
                    </div>
                </form>
            </div>

            <div class="content problem-12">
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                    <div class="innerBorder problem-12">
                        <table>
                            <tr> 
                                <td class="unit" style="text-align: right;"> 
                                    Integer &nbsp; &nbsp; = &nbsp; &nbsp;
                                </td>
                                <td> <input type="number" name="input1" min="0" id="inputField" value="<?php echo ($choice == 12)? $input1: ""; ?>" required> </td>
                                    <td> 
                                        <input type="hidden" name="choice" value="12"/>
                                        <input type= "submit" stlye="width: 200px;" value="compute" />
                                    </td>
                            </tr>
                        </table>
                    </div>
                    <h2 style="margin: 10px; margin-top: 20px">English equivalent:</h2>
                    <div class="innerBorder problem-12">
                        <table>
                            <tr>
                                <td colspan="4">
                                    <textarea class="textLeft" cols="50" rows="10" readonly><?php 
                                            if($choice == 12){
                                                $output = "";
                                                $strEquivalent = "";
                                                for($i = 0; $i < strlen((string)$input1); $i++){
                                                    switch($input1[$i]){
                                                        case 0:
                                                            $strEquivalent = "zero";
                                                            break;
                                                        case 1:
                                                            $strEquivalent = "one";
                                                            break;
                                                        case 2:
                                                            $strEquivalent = "two";
                                                            break;
                                                        case 3:
                                                            $strEquivalent = "three";
                                                            break;
                                                        case 4:
                                                            $strEquivalent = "four";
                                                            break;
                                                        case 5:
                                                            $strEquivalent = "five";
                                                            break;
                                                        case 6:
                                                            $strEquivalent = "six";
                                                            break;
                                                        case 7:
                                                            $strEquivalent = "seven";
                                                            break;
                                                        case 8:
                                                            $strEquivalent = "eight";
                                                            break;
                                                        case 9:
                                                            $strEquivalent = "nine";
                                                            break;
                                                    }
                                                    $output = $output.$strEquivalent." ";
                                                }
                                                echo $output;
                                            }
                                        ?>
                                    </textarea>
                                </td>
                            </tr>
                        </table>
                    </div>
                </form>
            </div>

            <div class="content problem-13">
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                    <div class="innerBorder problem-13">
                        <table>
                            <tr> 
                                <td class="unit" style="text-align: right;"> 
                                    Integer &nbsp; &nbsp; = &nbsp; &nbsp;
                                </td>
                                <td> <input type="number" name="input1" min="0" id="inputField" value="<?php echo ($choice == 13)? $input1: ""; ?>" required> </td>
                                    <td> 
                                        <input type="hidden" name="choice" value="13"/>
                                        <input type= "submit" stlye="width: 200px;" value="compute" />
                                    </td>
                            </tr>
                        </table>
                    </div>
                    <h2 style="margin: 10px; margin-top: 20px">English equivalent of Reversed Input:</h2>
                    <div class="innerBorder problem-13">
                        <table>
                            <tr>
                                <td colspan="4">
                                    <textarea class="textLeft" cols="50" rows="10" readonly><?php 
                                            if($choice == 13){
                                                $reversed = "";
                                                $strEquivalent = "";
                                                for($i=strlen((string)$input1); 0 <= $i ; $i--){
                                                    switch($input1[$i]){
                                                        case 0:
                                                            $strEquivalent = "zero";
                                                            break;
                                                        case 1:
                                                            $strEquivalent = "one";
                                                            break;
                                                        case 2:
                                                            $strEquivalent = "two";
                                                            break;
                                                        case 3:
                                                            $strEquivalent = "three";
                                                            break;
                                                        case 4:
                                                            $strEquivalent = "four";
                                                            break;
                                                        case 5:
                                                            $strEquivalent = "five";
                                                            break;
                                                        case 6:
                                                            $strEquivalent = "six";
                                                            break;
                                                        case 7:
                                                            $strEquivalent = "seven";
                                                            break;
                                                        case 8:
                                                            $strEquivalent = "eight";
                                                            break;
                                                        case 9:
                                                            $strEquivalent = "nine";
                                                            break;
                                                    }

                                                    $reversed = $reversed.$strEquivalent." ";
                                                }
                                                echo $reversed;
                                            }
                                        ?>
                                    </textarea>
                                </td>
                            </tr>
                        </table>
                    </div>
                </form>
            </div>

            <div class="content problem-14">
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                    <div class="innerBorder problem-14">
                        <table>
                            <tr> 
                                <td class="unit" style="text-align: right;"> 
                                    Integer &nbsp; &nbsp; = &nbsp; &nbsp;
                                </td>
                                <td> <input type="number" name="input1" min="0" id="inputField" value="<?php echo ($choice == 14)? $input1: ""; ?>" required> </td>
                                    <td> 
                                        <input type="hidden" name="choice" value="14"/>
                                        <input type= "submit" stlye="width: 200px;" value="compute" />
                                    </td>
                            </tr>
                        </table>
                    </div>
                    <h2 style="margin: 10px; margin-top: 20px">Sum of integer:</h2>
                    <div class="innerBorder problem-14">
                        <table>
                            <tr>
                                <td colspan="4">
                                    <textarea class="textLeft" cols="50" rows="10" readonly><?php 
                                            if($choice == 14){
                                                $result = 0;
                                                for($i=0; $i < strlen((string)$input1); $i++){
                                                    $result += $input1[$i];
                                                }
                                                echo $result;
                                            }
                                        ?>
                                    </textarea>
                                </td>
                            </tr>
                        </table>
                    </div>
                </form>
            </div>

            <div class="content problem-15">
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                    <div class="innerBorder problem-15">
                        <table>
                            <tr> 
                                <td class="unit" style="text-align: right;"> 
                                    Integer to check &nbsp; &nbsp; = &nbsp; &nbsp;
                                </td>
                                <td> <input type="number" name="input1" min="0" id="inputField" value="<?php echo ($choice == 15)? $input1: ""; ?>" required> </td>
                                    <td> 
                                        <input type="hidden" name="choice" value="15"/>
                                        <input type= "submit" stlye="width: 200px;" value="compute" />
                                    </td>
                            </tr>
                        </table>
                    </div>
                    <h2 style="margin: 10px; margin-top: 20px">Is the given integer a palindrome?</h2>
                    <div class="innerBorder problem-15">
                        <table>
                            <tr>
                                <td colspan="4">
                                    <textarea class="textLeft" cols="50" rows="10" readonly><?php 
                                            if($choice == 15){
                                                $reversed = "";
                                                for($i=strlen((string)$input1); 0 <= $i ; $i--){
                                                    $reversed = $reversed.$input1[$i];
                                                }
                                                
                                                if($input1 == $reversed){
                                                    echo "Yes";
                                                }else{
                                                    echo "No";
                                                }
                                            }
                                        ?>
                                    </textarea>
                                </td>
                            </tr>
                        </table>
                    </div>
                </form>
            </div>

            <div class="content problem-16">
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                    <div class="innerBorder problem-16">
                        <table>
                            <tr> 
                                <td class="unit" style="text-align: right;"> 
                                    Sentence &nbsp; &nbsp; = &nbsp; &nbsp;
                                </td>
                                <td> 
                                    <textarea class="text" name="input1" id="inputField" style="height: 100px; width: 250px; margin-right: 10px; resize: none; overflow: auto" required><?php 
                                        echo ($choice == 16)? $input1: ""; 
                                        ?>
                                    </textarea>
                                </td>
                                    <td> 
                                        <input type="hidden" name="choice" value="16"/>
                                        <input type= "submit" stlye="width: 200px;" value="convert" />
                                    </td>
                            </tr>
                        </table>
                    </div>
                    <h2 style="margin: 10px; margin-top: 20px">Sentence broken down to word per line:</h2>
                    <div class="innerBorder problem-16">
                        <table>
                            <tr>
                                <td colspan="4">
                                    <textarea class="textLeft" class="textLeft" cols="50" rows="10" readonly><?php 
                                            if($choice == 16){
                                                $word = '';
                                                for($i=0; $i < strlen((string)$input1); $i++){
                                                    if($input1[$i] == ' ' || $input1[$i] == '\n' || $input1[$i] == '\r'){
                                                        if($word != ''){
                                                            echo $word."\n";
                                                            $word = '';
                                                        }
                                                    }else{
                                                        $word = $word.$input1[$i];
                                                    }
                                                }

                                                
                                                if($word != ''){
                                                    echo $word."\n";
                                                }
                                            }
                                        ?>
                                    </textarea>
                                </td>
                            </tr>
                        </table>
                    </div>
                </form>
            </div>

            <div class="content problem-17">
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                    <div class="innerBorder problem-17">
                        <table>
                            <tr> 
                                <td class="unit" style="text-align: right;"> 
                                    Sentence &nbsp; &nbsp; = &nbsp; &nbsp;
                                </td>
                                <td> 
                                    <textarea class="text" name="input1" id="inputField" style="height: 100px; width: 250px; margin-right: 10px; resize: none; overflow: auto" required><?php 
                                        echo ($choice == 17)? $input1: ""; 
                                        ?>
                                    </textarea>
                                </td>
                                    <td> 
                                        <input type="hidden" name="choice" value="17"/>
                                        <input type= "submit" stlye="width: 200px;" value="convert" />
                                    </td>
                            </tr>
                        </table>
                    </div>
                    <h2 style="margin: 10px; margin-top: 20px">Sentence broken down to letter per line:</h2>
                    <div class="innerBorder problem-17">
                        <table>
                            <tr>
                                <td colspan="4">
                                    <textarea class="textLeft" cols="50" rows="10" readonly><?php 
                                            if($choice == 17){
                                                $letters = '';
                                                for($i = 0; $i < strlen((string)$input1); $i++){
                                                    if ($input1[$i] !== ' ' && $input1[$i] !== '\n' && $input1[$i] !== '\r') {
                                                        $letters .= $input1[$i] . "\n";
                                                    }
                                                }
                                                echo $letters;
                                            }
                                        ?>
                                    </textarea>
                                </td>
                            </tr>
                        </table>
                    </div>
                </form>
            </div>

            <div class="content problem-18">
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                    <div class="innerBorder problem-18">
                        <table>
                            <tr> 
                                <td class="unit" style="text-align: right;"> 
                                    Noun &nbsp; &nbsp; = &nbsp; &nbsp;
                                </td>
                                <td> 
                                    <textarea type="text" name="input1" id="inputField" style="height: 100px; width: 250px; margin-right: 10px; resize: none; overflow: auto" required><?php 
                                            echo ($choice == 18)? $input1: ""; 
                                        ?>
                                    </textarea>
                                </td>
                                    <td> 
                                        <input type="hidden" name="choice" value="18"/>
                                        <input type= "submit" stlye="width: 200px;" value="convert" />
                                    </td>
                            </tr>
                        </table>
                    </div>
                    <h2 style="margin: 10px; margin-top: 20px">Plural form:</h2>
                    <div class="innerBorder problem-18">
                        <table>
                            <tr>
                                <td colspan="4">
                                    <textarea class="textLeft" cols="50" rows="10" readonly><?php 
                                            if($choice == 18){
                                                $pluralForms = '';
                                                $totalNouns = 0;
                                                $noun = '';

                                                for ($i = 0; $i <= strlen((string)$input1); $i++) {
                                                    if ($i === strlen((string)$input1) || $input1[$i] === ',') {
                                                        $noun = trim($noun);
                                            
                                                        if ($noun !== '') {
                                                            if ($totalNouns > 0) {
                                                                $pluralForms .= ', ' . getPluralForm($noun);
                                                            } else {
                                                                $pluralForms .= getPluralForm($noun);
                                                            }
                                                            $totalNouns++;
                                                        }
                                            
                                                        $noun = '';
                                                    } else {
                                                        $noun .= $input1[$i];
                                                    }
                                                }
                                            
                                                echo $pluralForms;
                                            }
                                        ?>
                                    </textarea>
                                </td>
                            </tr>
                        </table>
                    </div>
                </form>
            </div>

            <div class="content problem-19" style="border: none;">
                <div style="display: flex;">
                    <div style="border: 5px solid; border-color: #03045E; margin-right: 30px;">
                        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                            <div class="innerBorder problem-19">
                                <table>
                                    <tr>
                                        <td class="unit" style="text-align: right;"> 
                                            Sentence &nbsp; &nbsp; = &nbsp; &nbsp;
                                        </td>
                                        <td> 
                                            <textarea class="text" name="input1" id="inputField" style="height: 100px; width: 250px; margin-right: 10px; resize: none; overflow: auto" required><?php 
                                                echo ($choice == 19)? $input1: ""; 
                                                ?>
                                            </textarea>
                                        </td>
                                            <td> 
                                                <input type="hidden" name="choice" value="19"/>
                                                <input type= "submit" stlye="width: 200px;" value="convert" />
                                            </td>
                                    </tr>
                                </table>
                            </div>
                            <h2 style="margin: 10px; margin-top: 20px">Encrypted sentence:</h2>
                            <div class="innerBorder problem-19">
                                <table>
                                    <tr>
                                        <td colspan="4">
                                            <textarea class="textLeft" cols="50" rows="10" readonly><?php
                                                    if($choice == 19){
                                                        $encryptedSentence = '';
                                                        $input1 = trim($input1);

                                                        for ($i = 0; $i < strlen((string)$input1); $i++) {
                                                            $char = strtoupper($input1[$i]);
                            
                                                            switch ($char) {
                                                                case 'A':
                                                                    $encryptedSentence .= '!';
                                                                    break;
                                                                case 'B':
                                                                    $encryptedSentence .= '"';
                                                                    break;
                                                                case 'C':
                                                                    $encryptedSentence .= '#';
                                                                    break;
                                                                case 'D':
                                                                    $encryptedSentence .= '$';
                                                                    break;
                                                                case 'E':
                                                                    $encryptedSentence .= '%';
                                                                    break;
                                                                case 'F':
                                                                    $encryptedSentence .= '&';
                                                                    break;
                                                                case 'G':
                                                                    $encryptedSentence .= "'";
                                                                    break;
                                                                case 'H':
                                                                    $encryptedSentence .= '(';
                                                                    break;
                                                                case 'I':
                                                                    $encryptedSentence .= ')';
                                                                    break;
                                                                case 'J':
                                                                    $encryptedSentence .= ',';
                                                                    break;
                                                                case 'K':
                                                                    $encryptedSentence .= '.';
                                                                    break;
                                                                case 'L':
                                                                    $encryptedSentence .= '~';
                                                                    break;
                                                                case 'M':
                                                                    $encryptedSentence .= '}';
                                                                    break;
                                                                case 'N':
                                                                    $encryptedSentence .= '|';
                                                                    break;
                                                                case 'O':
                                                                    $encryptedSentence .= '[';
                                                                    break;
                                                                case 'P':
                                                                    $encryptedSentence .= '\\';
                                                                    break;
                                                                case 'Q':
                                                                    $encryptedSentence .= ']';
                                                                    break;
                                                                case 'R':
                                                                    $encryptedSentence .= '^';
                                                                    break;
                                                                case 'S':
                                                                    $encryptedSentence .= '_';
                                                                    break;
                                                                case 'T':
                                                                    $encryptedSentence .= ':';
                                                                    break;
                                                                case 'U':
                                                                    $encryptedSentence .= ';';
                                                                    break;
                                                                case 'V':
                                                                    $encryptedSentence .= '<';
                                                                    break;
                                                                case 'W':
                                                                    $encryptedSentence .= '=';
                                                                    break;
                                                                case 'X':
                                                                    $encryptedSentence .= '>';
                                                                    break;
                                                                case 'F':
                                                                    $encryptedSentence .= '?';
                                                                    break;
                                                                case 'Z':
                                                                    $encryptedSentence .= '@';
                                                                    break;
                                                                default:
                                                                    $encryptedSentence .= $char;
                                                            }
                                                        }
                                                        echo $encryptedSentence;
                                                    }
                                                ?>
                                            </textarea>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </form>
                    </div>

                    <div style="border: 5px solid; border-color: #03045E; display: flex; justify-content: center;">
                        <table>
                            <tr> 
                                <td class="unit" style="text-align: right;"> 
                                    <table style="width: 200px; border: 1px solid;">
                                        <tr>
                                            <td class="unit" style="text-align: center; border: 1px solid;">
                                                <b>Letter</b>
                                            </td>
                                            <td class="unit" style="text-align: center; border: 1px solid;">
                                                <b>Equivalent</b>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>A</td>
                                            <td>!</td>
                                        </tr>
                                        <tr>
                                            <td>B</td>
                                            <td>"</td>
                                        </tr>
                                        <tr>
                                            <td>C</td>
                                            <td>#</td>
                                        </tr>
                                        <tr>
                                            <td>D</td>
                                            <td>$</td>
                                        </tr>
                                        <tr>
                                            <td>E</td>
                                            <td>%</td>
                                        </tr>
                                        <tr>
                                            <td>F</td>
                                            <td>&</td>
                                        </tr>
                                        <tr>
                                            <td>G</td>
                                            <td>'</td>
                                        </tr>
                                        <tr>
                                            <td>H</td>
                                            <td>(</td>
                                        </tr>
                                        <tr>
                                            <td>I</td>
                                            <td>)</td>
                                        </tr>
                                        <tr>
                                            <td>J</td>
                                            <td>,</td>
                                        </tr>
                                        <tr>
                                            <td>K</td>
                                            <td>.</td>
                                        </tr>
                                        <tr>
                                            <td>L</td>
                                            <td>~</td>
                                        </tr>
                                        <tr>
                                            <td>M</td>
                                            <td>}</td>
                                        </tr>
                                    </table>
                                </td>
                                <td class="unit" style="text-align: right;"> 
                                    <table style="width: 200px; border: 1px solid;">
                                        <tr>
                                            <td class="unit" style="text-align: center; border: 1px solid;">
                                                <b>Letter</b>
                                            </td>
                                            <td class="unit" style="text-align: center; border: 1px solid;">
                                                <b>Equivalent</b>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>N</td>
                                            <td>|</td>
                                        </tr>
                                        <tr>
                                            <td>O</td>
                                            <td>[</td>
                                        </tr>
                                        <tr>
                                            <td>P</td>
                                            <td>\</td>
                                        </tr>
                                        <tr>
                                            <td>Q</td>
                                            <td>]</td>
                                        </tr>
                                        <tr>
                                            <td>R</td>
                                            <td>^</td>
                                        </tr>
                                        <tr>
                                            <td>S</td>
                                            <td>_</td>
                                        </tr>
                                        <tr>
                                            <td>T</td>
                                            <td>:</td>
                                        </tr>
                                        <tr>
                                            <td>U</td>
                                            <td>;</td>
                                        </tr>
                                        <tr>
                                            <td>V</td>
                                            <td><</td>
                                        </tr>
                                        <tr>
                                            <td>W</td>
                                            <td>=</td>
                                        </tr>
                                        <tr>
                                            <td>X</td>
                                            <td>></td>
                                        </tr>
                                        <tr>
                                            <td>Y</td>
                                            <td>?</td>
                                        </tr>
                                        <tr>
                                            <td>Z</td>
                                            <td>@</td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <div class="content problem-20">
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                    <div class="innerBorder problem-20">
                        <table>
                            <tr> 
                                <td class="unit" style="text-align: right;"> 
                                    Sentence &nbsp; &nbsp; = &nbsp; &nbsp;
                                </td>
                                <td> 
                                    <textarea class="text" name="input1" id="inputField" style="height: 100px; width: 250px; margin-right: 10px; resize: none; overflow: auto" required><?php 
                                        echo ($choice == 20)? $input1: ""; 
                                        ?>
                                    </textarea>
                                </td>
                                    <td> 
                                        <input type="hidden" name="choice" value="20"/>
                                        <input type= "submit" stlye="width: 200px;" value="count" />
                                    </td>
                            </tr>
                        </table>
                    </div>
                    <h2 style="margin: 10px; margin-top: 20px">Occurrences of each letter:</h2>
                    <div class="innerBorder problem-20">
                        <table>
                            <tr>
                                <td colspan="4">
                                    <textarea class="textLeft" cols="50" rows="10" readonly><?php
                                            if($choice == 20){
                                                $sentence = strtolower((string)$input1);
                                                $sentence = trim($sentence);

                                                for ($i = 0; $i < strlen($sentence); $i++) {
                                                    $char = $sentence[$i];

                                                    if (!ctype_lower($char) && $char != ' ') {
                                                        continue;
                                                    }

                                                    $occurred = false;
                                                    for ($j = 0; $j < $i; $j++) {
                                                        if ($sentence[$j] == $char) {
                                                            $occurred = true;
                                                            break;
                                                        }
                                                    }

                                                    if (!$occurred) {
                                                        $count = 0;
                                                        
                                                        for ($k = $i; $k < strlen($sentence); $k++) {
                                                            if ($sentence[$k] == $char) {
                                                                $count++;
                                                            }
                                                        }

                                                        if ($char == ' ') {
                                                            $char = 'space';
                                                        }
                                                        echo $char . ' = ' . $count . "\n";
                                                    }
                                                }
                                            }
                                        ?>
                                    </textarea>
                                </td>
                            </tr>
                        </table>
                    </div>
                </form>
            </div>

            <?php 
                function is_prime($num) {
                    if ($num <= 1) {
                        return false;
                    }
                    for ($i = 2; $i <= $num/2; $i++) {
                        if ($num % $i == 0) {
                            return false;
                        }
                    }
                    return true;
                }

                function getPluralForm($noun) {
                    if (substr($noun, -1) === 'y') {
                        return substr($noun, 0, -1) . 'ies';
                    }elseif (in_array(substr($noun, -1), ['s', 'ch', 'sh'])) {
                        return $noun . 'es';
                    } else {
                        return $noun . 's';
                    }
                }
            
            ?>

        </section>

        <script>
            $(document).ready(function(){
                if(localStorage.selected) {
                    $('#' + localStorage.selected).attr('checked', true);
                }

                $('.tabs').click(function(){
                    localStorage.setItem("selected", this.id);
                });
            });
        </script>
    </body>
</html>