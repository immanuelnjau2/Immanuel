<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional Statements</title>
</head>
<body>
    <pre></pre>
    <?php
    // if statement
    if (11 > 9) {
        echo "It's Break-Time!";
    }

    $time = 1;
    if ($time == 1) {
        echo "Home-Time, have a good afternoon!";
    }
    // if...else statement
    $t = date("H");
    if ($t < "20") {
        echo "Have a good day!";
    }else {
        echo "Have a good night!";
    }
    //if...elseif...else
    if ($t < "10") {
        echo "Have a good morning!";
    }elseif ($t < "20") {    
        echo "Have a good day!";
    }else {
        echo "Have a good night!";
    }
    //switch
    $favcolor = "purple";

    switch ($favcolor) {
    case "green";
        echo "Your favorite color is purple!";
        break;
    case "cyan";
        echo "Your favorite color is cyan!";
        break;
    case "orange";
        echo "Your favorite color is orange!";
        break;
    default:
        echo "Your favorite color is neither purple, cyan, nor orange!";
    }
    ?>
    </pre>
</body>
</html>