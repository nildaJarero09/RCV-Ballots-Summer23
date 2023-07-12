<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Ballot 2 Voting</title>
  <style>
    .container {
  border-radius: 5px;
  padding: 20px;
}
img{
  display: block;
  margin-left: auto;
  margin-right: auto;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

.col{
  
  float: left;
  width: 50%;
  margin-top: 6px;

}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col, input[type="submit"],.alert {
    width: 100%;
    margin-top: 0;
  }
}

tr,td{
  border: 1px solid black;
  font-size: 28px;
}

table{
  border-collapse: collapse;
  width: 100%;
}

th{
  border: 1px solid black;
  height: 10px;
  font-size: 30px;
}

td{
  height: 62px;
}

input[type="submit"] {

  background-color: darkgray;
  color: black;
  padding: 12px 20px;
  border: 1px solid black;
  border-radius: 4px;
  cursor: pointer;
  float:right;
  font-weight:bold;
  height: 80px;
  width: 160px;
  font-size: 25px;

  
}

input[type="submit"]:hover {
  background-color: lightgray;
  
}

input[type="radio"] {
    width: 100%;
    height: 2em;
  
}

  </style>

  <script>
  window.onload = function() {
  document.querySelectorAll("input[type='radio']").forEach(function(rd) {
    rd.addEventListener("mousedown", function() {
      if(this.checked) {
        this.onclick=function() {
          this.checked=false
        }
      } else {
        this.onclick=null
      }
    })
  })
}
  </script>
  
</head>

<body>
  <img src="BubbleGridBallot_DigitalInstructions (1).png" alt="Instructions" width="925" height="325"></img>
<div class="container">
<form name="ballot2" action="review.php" method="post">
  <table>

    
    <tr>
      <th colspan="6" style="background-color: lightblue;height: 50px; font-size: 32px; ">
        For the Nominations for Office
      </th> 
  
  </tr> 

    <div class="row">
    <tr class ="choices">
      
      <td></td>
      <th> <b>1st <br> Choice <br></b></th> 
      
       <div class="col">
      <th> <b>2nd <br> Choice</b></th> </div>
        <th> <b>3rd <br> Choice</b></th>
        <th> <b>4th <br> Choice</b></th>
        <th> <b>5th <br> Choice</b></th>
    </tr></div>
      <tr class="candidates">
        <td>Mark Twain</td>
        <td> <input type="radio" value="Mark Twain" name="choice1"></td>
       <td>
        <input type="radio" value="Mark Twain" name="choice2"> 
       </td>

        <td>
          <input type="radio" value="Mark Twain" name="choice3">
        </td>

        <td>
          <input type="radio" value="Mark Twain" name="choice4">
        </td>

        <td>
          <input type="radio" value="Mark Twain" name="choice5">
        </td>
        
      </tr>

    <tr class="candidates">
      <td>Thomas Edison</td>
        <td> <input type="radio" value="Thomas Edison" name="choice1" ></td>
       <td>
        <input type="radio" value="Thomas Edison" name="choice2" > 
       </td>

        <td>
          <input type="radio" value="Thomas Edison" name="choice3" >
        </td>

        <td>
          <input type="radio" value="Thomas Edison" name="choice4">
        </td>

        <td>
          <input type="radio" value="Thomas Edison" name="choice5">
        </td>
        
      </tr>

    <tr class="candidates">
      <td>Bill Gates</td>
        <td> <input type="radio" value="Bill Gates" name="choice1" ></td>
       <td>
        <input type="radio" value="Bill Gates" name="choice2" > 
       </td>

        <td>
          <input type="radio" value="Bill Gates" name="choice3" >
        </td>

        <td>
          <input type="radio" value="Bill Gates" name="choice4">
        </td>

        <td>
          <input type="radio" value="Bill Gates" name="choice5">
        </td>
        
      </tr>

    <tr class="candidates">
      <td>Indiana Jones</td>
        <td> <input type="radio" value="Indiana Jones" name="choice1" ></td>
       <td>
        <input type="radio" value="Indiana Jones" name="choice2" > 
       </td>

        <td>
          <input type="radio" value="Indiana Jones" name="choice3" >
        </td>

        <td>
          <input type="radio" value="Indiana Jones" name="choice4">
        </td>

        <td>
          <input type="radio" value="Indiana Jones" name="choice5">
        </td>
        
      </tr>

    <tr class="candidates">
      <td>Marie Antoniette</td>
        <td> <input type="radio" value="Marie Antoiniette" name="choice1"></td>
       <td>
        <input type="radio" value="Marie Antoiniette" name="choice2" > 
       </td>

        <td>
          <input type="radio" value="Marie Antoiniette" name="choice3" >
        </td>

        <td>
          <input type="radio" value="Marie Antoiniette" name="choice4">
        </td>

        <td> 
          <input type="radio" value="Marie Antoiniette" name="choice5" >
        </td>
        
      </tr>
     <tr class="candidates">
        <td>Michael Jordan</td>
        <td> <input type="radio" value="Michael Jordan" name="choice1"></td>
       <td>
        <input type="radio" value="Michael Jordan" name="choice2"> 
       </td>

        <td>
          <input type="radio" value="Michael Jordan" name="choice3">
        </td>

        <td>
          <input type="radio" value="Michael Jordan" name="choice4">
        </td>

        <td>
          <input type="radio" value="Michael Jordan" name="choice5">
        </td>
        
      </tr>

    <tr class="candidates">
      <td>Oprah Winfrey</td>
        <td> <input type="radio" value="Oprah Winfrey" name="choice1" ></td>
       <td>
        <input type="radio" value="Oprah Winfrey" name="choice2" > 
       </td>

        <td>
          <input type="radio" value="Oprah Winfrey" name="choice3" >
        </td>

        <td>
          <input type="radio" value="Oprah Winfrey" name="choice4">
        </td>

        <td>
          <input type="radio" value="Oprah Winfrey" name="choice5">
        </td>
        
      </tr>

    <tr class="candidates">
      <td>Benjamin Franklin</td>
        <td> <input type="radio" value="Benjamin Franklin" name="choice1" ></td>
       <td>
        <input type="radio" value="Benjamin Franklin" name="choice2" > 
       </td>

        <td>
          <input type="radio" value="Benjamin Franklin" name="choice3" >
        </td>

        <td>
          <input type="radio" value="Benjamin Franklin" name="choice4">
        </td>

        <td>
          <input type="radio" value="Benjamin Franklin" name="choice5">
        </td>
        
      </tr>

    <tr class="candidates">
      <td>Natalie Portman</td>
        <td> <input type="radio" value="Natalie Portman" name="choice1" ></td>
       <td>
        <input type="radio" value="Natalie Portman" name="choice2" > 
       </td>

        <td>
          <input type="radio" value="Natalie Portman" name="choice3" >
        </td>

        <td>
          <input type="radio" value="Natalie Portman" name="choice4">
        </td>

        <td>
          <input type="radio" value="Natalie Portman" name="choice5">
        </td>
        
      </tr>

    <tr class="candidates">
      <td>Helen Keller</td>
        <td> <input type="radio" value="Helen Keller" name="choice1"></td>
       <td>
        <input type="radio" value="Helen Keller" name="choice2" > 
       </td>

        <td>
          <input type="radio" value="Helen Keller" name="choice3" >
        </td>

        <td>
          <input type="radio" value="Helen Keller" name="choice4">
        </td>

        <td> 
          <input type="radio" value="Helen Keller" name="choice5" >
        </td>
        
      </tr>

      <tr class="candidates">
      <td>Charles Dickens</td>
        <td> <input type="radio" value="Charles Dickens" name="choice1" ></td>
       <td>
        <input type="radio" value="Charles Dickens" name="choice2" > 
       </td>

        <td>
          <input type="radio" value="Charles Dickens" name="choice3" >
        </td>

        <td>
          <input type="radio" value="Charles Dickens" name="choice4">
        </td>

        <td>
          <input type="radio" value="Charles Dickens" name="choice5">
        </td>
        
      </tr>

    <tr class="candidates">
      <td>Stephen Hawking</td>
        <td> <input type="radio" value="Stephen Hawking" name="choice1" ></td>
       <td>
        <input type="radio" value="Stephen Hawking" name="choice2" > 
       </td>

        <td>
          <input type="radio" value="Stephen Hawking" name="choice3" >
        </td>

        <td>
          <input type="radio" value="Stephen Hawking" name="choice4">
        </td>

        <td>
          <input type="radio" value="Stephen Hawking" name="choice5">
        </td>
        
      </tr>

    <tr class="candidates">
      <td>Harriet Tubman</td>
        <td> <input type="radio" value="Harriet Tubman" name="choice1" ></td>
       <td>
        <input type="radio" value="Harriet Tubman" name="choice2" > 
       </td>

        <td>
          <input type="radio" value="Harriet Tubman" name="choice3" >
        </td>

        <td>
          <input type="radio" value="Harriet Tubman" name="choice4">
        </td>

        <td>
          <input type="radio" value="Harriet Tubman" name="choice5">
        </td>
        
      </tr>

    <tr class="candidates">
      <td>Martin Luther King</td>
        <td> <input type="radio" value="Martin Luther King" name="choice1"></td>
       <td>
        <input type="radio" value="Martin Luther King" name="choice2" > 
       </td>

        <td>
          <input type="radio" value="Martin Luther King" name="choice3" >
        </td>

        <td>
          <input type="radio" value="Martin Luther King" name="choice4">
        </td>

        <td> 
          <input type="radio" value="Martin Luther King" name="choice5" >
        </td>
        
      </tr>
  
  </table>
  <br>
  <input   type="submit" name="submit" value="Next Page">
  </form>
     


</div>
  
  
</body>

</html>
