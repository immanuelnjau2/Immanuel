<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Types</title>

    <style>
        .greeting{
            color:blue;
            font-size:17px;
            text-transform:none;
        }
    </style>
</head>
<body>
    <h1>Data Types</h1>
        
    <?php

    $birthYear = 2004; //My Birth Year(Integer)
    $currentYear = date("Y"); //Current Year(Integer)
    $name = Null;
    $height = 5.1; //My Height(Float)
    $age = $currentYear-$birthYear; //Calculation of My Cureent Age(Integer)
    $hobbies = ["Gaming", "Watching YouTube", "Playing Golf", "Swimming", "Playing cards", "Playing pool"];
    $age_above_30 = $age>30; //Setting the Age above 30 to True(Boolean)
    $greeting = "Hello, my name is $name and I am $age years old. My height is $height meters"; //Statement(String)

    echo "<p class='greeting'>$greeting</p>"; //Output
    echo "<p>My hobbies are: ";
    echo implode(",", $hobbies);// We use implode function to Display individual item from the Array
    echo"</p>";
    
    if($age_above_30){
        echo "<p>This person is over 30 years old, thus exempt them</p>"; //id the condition is True
    } else{
        echo "<p>This is person is qualified</p>"; //if the condition is False
    }
    

    ?>
</body>
</html>
