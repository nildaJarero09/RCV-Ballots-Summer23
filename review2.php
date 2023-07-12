<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Ballot 2 Review Page</title>
</head>
<style>
  h3{
    text-align: center;
    font-size: 35px;
  }

p{
  font-size: 30px;
}
  div{
    font-size: 30px;
  }
  

button {
  display: block;
  background-color: darkgray;
  color: black;
  padding: 10px 22px;
  border: 1px solid black;
  border-radius: 4px;
  cursor: pointer;
  font-weight: bold;
  float:right;
  font-size: x-large;
}

button:hover {
  background-color: lightgray;
}

input[type="button"]{
  display: block;
  background-color: darkgray;
  color: black;
  padding: 10px 22px;
  border: 1px solid black;
  border-radius: 4px;
  cursor: pointer;
  font-weight: bold;
  float:left;
  font-size: x-large;
  

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
 
  if (isset($_POST["choice1"]))
  {echo  "<div><b>1st Choice: </b>", " ",$_POST["choice1"], "</div><br>";}
 else
 {echo "<div><b>1st Choice: </b></div></br>";}

 if (isset($_POST["choice2"]))
 {echo  "<div><b>2nd Choice: </b>", " ",$_POST["choice2"], "</div><br>";}
else
{echo "<div><b>2nd Choice:</b></div><br>";}

if (isset($_POST["choice3"]))
 {echo  "<div><b>3rd Choice: </b>", " ",$_POST["choice3"], "</div><br>";}
else
{echo "<div><b>3rd Choice:</b></div><br>";}

if (isset($_POST["choice4"]))
 {echo  "<div><b>4th Choice: </b>", " ",$_POST["choice4"], "</div><br>";}
else
{echo "<div><b>4th Choice:</b></div><br>";}

if (isset($_POST["choice5"]))
 {echo  "<div><b>5th Choice: </b>", " ",$_POST["choice5"], "</div><br>";}
else
{echo "<div><b>5th Choice:</b></div><br>";}
  
?>
<a href="bye2.php">
        <button name="Submit">Submit</button>
    </a>

    <input type="button" value="Go back" onclick="history.back()">


</body>
</html>
