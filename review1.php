<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Ballot 1 Review Page</title>
</head>
<style>
  h3{
      font-size: 35px;
    text-align: center;
  }

p{
  font-size: 30px;
}
  div{
    font-size: 30px;
    inline height: 2em;
  }

button {
  display: block;
  background-color: darkgray;
  color: black;
  padding: 12px 25px;
  border: 1px solid black;
  border-radius: 4px;
  cursor: pointer;
  font-weight: bold;
  font-size: x-large;
  float:right;
}

button:hover {
  background-color: lightgray;
}


input[type="button"]{
  display: block;
  background-color: darkgray;
  color: black;
  padding: 12px 20px;
  border: 1px solid black;
  border-radius: 4px;
  cursor: pointer;
  font-weight: bold;
  font-size: x-large;
  float:left;
  
}
input[type="button"]:hover{
  background-color: lightgray;
}

</style>
<body>
  <h3><b>Review Choices</b></h3>

  <p>Below are the choices you have made. If you would like to make changes, click on the "Go Back" button to change your vote. <b>Please be sure to review your choices and correct any mistakes
*before* casting your ballot.</b></br>
If you do not want to make changes, click the “Submit” button to go submit your ballot.<br><br>
For office:</p>

<?php

$choices = array();
 
  if (!empty($_POST["num_a"])) {
  $choices["Mark Twain"] = $_POST["num_a"];
}

if (!empty($_POST["num_b"])) {
  $choices["Bill Gates"] = $_POST["num_b"];
}

if (!empty($_POST["num_c"]))
 {
  $choices["Marie Antoinette"] = $_POST["num_c"];}

if (!empty($_POST["num_d"]))
 {
  $choices["Oprah Winfrey"] = $_POST["num_d"];}


if (!empty($_POST["num_e"]))
 {
 $choices["Natalie Portman"] = $_POST["num_e"];}

  if (!empty($_POST["num_f"]))
  { 
 $choices["Charles Dickens"] = $_POST["num_f"];}
 
 if (!empty($_POST["num_g"]))
 { 
  $choices["Harriet Tubman"] = $_POST["num_g"];}

if (!empty($_POST["num_h"]))
 {
  $choices["Thomas Edison"] = $_POST["num_h"];}

if (!empty($_POST["num_i"]))
 {
  $choices["Indiana Jones"] = $_POST["num_i"];}


if (!empty($_POST["num_j"]))
{
 $choices["Michael Jordan"] = $_POST["num_j"];}

  if (!empty($_POST["num_k"]))
  {
  $choices["Benjamin Franklin"] = $_POST["num_k"];}
 
 if (!empty($_POST["num_l"]))
  {
$choices["Helen Keller"] = $_POST["num_l"];}
 
 
 if (!empty($_POST["num_m"]))
  {
   $choices["Stephen Hawking"] = $_POST["num_m"];
  }

   if (!empty($_POST["num_n"]))
  { 
    $choices["Martin Luther King"] = $_POST["num_n"];
  }

asort($choices, SORT_NUMERIC);
$maxx = max($choices) ;


for ($y = 1; $y <= $maxx; $y++) {
  $choiceKey = array_search($y, $choices);
  $ordinalSuffix = findSuffix($y);
  
  if ($choiceKey !== false) {
    echo "<div><b>{$ordinalSuffix} Choice:</b> {$choiceKey}</div><br>";
  } else {
    echo "<div><b>{$ordinalSuffix} Choice:</b></div><br>";
  }
}
function findSuffix($number){
    switch ($number) {
    case 1:
      return $number . 'st';
    case 2:
      return $number . 'nd';
    case 3:
      return $number . 'rd';
    default:
      return $number . 'th';
  }
}
?>

<br>
<a href="exit1.php">
  
        <button name="Submit">Submit</button>
</a>
  
    <input type="button" value="Go Back" onclick="history.back()">

    

    


</body>
</html>
