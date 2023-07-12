<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Ballot 3 Review Page</title>
</head>
<style>
  h3{
      text-align: center;
    font-size: 35px;
  }

p{
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
  font-size: x-large;
  float:right; 
}

  div{
    font-size: 30px;
    inline height: 2em;
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
 
  if (isset($_POST["candidate1"]))
  {echo  "<div><b>1st Choice: </b>", " ",$_POST["candidate1"], "</div><br>";}
 else
 {echo "<div><b>1st Choice: </b></div></br>";}

 if (isset($_POST["candidate2"]))
 {echo  "<div><b>2nd Choice: </b>", " ",$_POST["candidate2"], "</div><br>";}
else
{echo "<div><b>2nd Choice:</b></div><br>";}

if (isset($_POST["candidate3"]))
 {echo  "<div><b>3rd Choice: </b>", " ",$_POST["candidate3"], "</div><br>";}
else
{echo "<div><b>3rd Choice:</b></div><br>";}

if (isset($_POST["candidate4"]))
 {echo  "<div><b>4th Choice: </b>", " ",$_POST["candidate4"], "</div><br>";}
else
{echo "<div><b>4th Choice:</b></div><br>";}

if (isset($_POST["candidate5"]))
 {echo  "<div><b>5th Choice: </b>", " ",$_POST["candidate5"], "</div><br>";}
else
{echo "<div><b>5th Choice:</b></div><br>";}
  
?>
<a href="bye.php">
        <button name="submit">Submit</button>
    </a>

    <input type="button" value="Go back" onclick="history.back()">


</body>
</html>
