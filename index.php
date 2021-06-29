<!DOCTYPE html>

<html lang = "en">
<head>
    <meta charset = "utf-8"/>
    <title>
        Journey log - experience tracker
    </title>
    <h1>  Tracking the journey.. from a newbie.. to a hero </h1>
</head>
<body>
    <body style = "background-color:bisque;">
    
    <!-- FORM DEL -->

    <div class="grid-container">
    <div class="grid-item">
    <form action = "index.php" method = "post">
    Did you learn something new about the city: <input type = "text" name = "learn-new"> <br>
    Did you defeat a formiddable foe: <input type = "text" name = "foe"><br>
    Rate your foe (0-10; 0:no foe) : <input type="number" min="0" max="10" name = "foe-rating"> <br>
    Did you improve your group's standing in the city? <input type = "text" name = "group-standing"><br>
    Did you have fun? <input type = "text" name = "fun"><br>
    </div>

     <!-- BILD DEL -->

    
    <div class="grid-item">
    <img src=data:image/jpeg;base64,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 alt="Girl in a jacket">
    <!-- picture from: https://dunesjedi.wordpress.com/2019/01/16/frodo-an-undervalued-hero/ --->

    <br>

    <input type ="submit" value = "Add day record">

    </form>
    </div>
</div>

<?php

//define all variables
$experience;
$learnNew = $_POST['learn-new'];
$foe = $_POST['foe'];
$foerating = $_POST['foe-rating'];
$groupStanding = $_POST['group-standing'];
$fun = $_POST['fun'];
$xpgain = 0;

//opening file + reading value
$fileHandle = fopen("listofrecords.txt", 'a+')or die("Unable to open file!");
//fread($fileHandle,filesize("listofrecords.txt"));


///
$line = '';
$cursor = -1;
fseek($fileHandle, $cursor, SEEK_END);
$char = fgetc($fileHandle);
//Trim trailing newline characters in the file
while ($char === "\n" || $char === "\r") {
   fseek($fileHandle, $cursor--, SEEK_END);
   $char = fgetc($fileHandle);
}
//Read until the next line of the file begins or the first newline char
while ($char !== false && $char !== "\n" && $char !== "\r") {
   //Prepend the new character
   $line = $char . $line;
   fseek($fileHandle, $cursor--, SEEK_END);
   $char = fgetc($fileHandle);
}
//echo $line;
echo "<br>";




////

$line_ar = explode(',', $line);
$currentexperience = end($line_ar);
echo "Your current total experience is : ";
echo $currentexperience;
echo "<br>";


//getting xp as xp gain
if (stripos($learnNew, "yes") !== false) {
    $xpgain = $xpgain + 100;
}
if (stripos($foe, "yes") !== false) {
    $xpgain = $xpgain + ($foerating*100);
}
if (stripos($groupStanding, "yes") !== false) {
    $xpgain = $xpgain + 100;
}
if (stripos($fun, "yes") !== false) {
    $xpgain = $xpgain + 20;
}
//getting total xp
$experience = $currentexperience + $xpgain;

//writing in file
fwrite($fileHandle, $learnNew.",".$foe.",".$groupStanding.",".$fun.",".$xpgain.",".$experience."\n");

////


// printing
echo "Record added. You gained ";
echo $xpgain;
echo "xp .";
echo "<br>";
echo "Your total experience points are: ";
echo $experience;
echo "<br>";
echo "Great work today, get some rest :)" ;

//





//close file
fclose($fileHandle);

?>




</body>
</html>
