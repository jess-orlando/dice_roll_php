<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dice Roll</title>
</head>
<body style="background-color:dodgerblue">
    <?php

    ?>
    <h1>Dice Roll Game</h1>
    <hr/>
    <?php
        // Global array variables
        $FaceNamesSingular = array("one", "two", "three", "four", "five", "six");
        $FaceNamesPlural = array("ones", "twos", "threes", "fours", "fives", "sixes");

        // Definition of the checkForDoubles() function
        function checkForDoubles($num1, $num2) {
            // let the function grab the global variables 
            global $FaceNamesSingular;
            global $FaceNamesPlural;

            // see if $num1 and $num2 are a match
            if($num1 == $num2) {
                echo "<p>The roll was double ", $FaceNamesPlural[$num1 - 1], " .</p>";
                return true;
            } else {
                echo "<p>The roll was a ", $FaceNamesSingular[$num1 - 1], " and a ", $FaceNamesSingular[$num2 - 1], ".</p>";
                return false;
            }
        }

        // Definition of the displayScoreText() function
        function displayScoreText($score) {
            switch($score) {
                case 2:
                    echo "<p>You rolled Snake Eyes!</p>";
                    break;
                case 3:
                    echo "<p>You rolled a loose deuce!</p>";
                    break;
                case 5:
                    echo "<p>You rolled a fever five!</p>";
                    break;
                case 7:
                    echo "<p>You rolled a natural!</p>";
                    break;
                case 9:
                    echo "<p>You rolled a nina!</p>";
                    break;
                case 11:
                    echo "<p>You rolled a yo!</p>";
                    break;
                case 12:
                     echo "<p>You rolled boxcars!</p>";
                     break;
            }
        }

        // we're back to global code!
        $Dice = array();
        $Dice[0] = rand(1, 6);
        $Dice[1] = rand(1, 6);
        $Total = $Dice[0] + $Dice[1];
        echo "<p>The total score for your roll was $Total</p>";
        checkForDoubles($Dice[0], $Dice[1]);
        displayScoreText($Total);

    ?>
</body>
</html>