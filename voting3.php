<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Ballot 3 Voting</title>
 <style>
   
p{
  text-align: center;
  font-size: 32px;
}
  th,td,tr {
  border:1px solid black;
  
}

th{
  background-color: lightgray;
  height: 50px;
  font-size: 28px;
}

  label {
    display:block;
    padding: 10px 8px;
    cursor: pointer;
    border-bottom: 1px solid black;
 
  
}
   
label span {
    line-height: 25px;
    font-size: 28px;
   
}

input[type='radio'] {
  display: inline-block;
  height: 22px;
  width: 22px;
  position: relative;
 --clickable-space-around-button: -40px;
  padding: 12px 15px;
  cursor: pointer;
  margin-right: 8px;
}

input[type='radio']::after {
  content: "";
  left: var(--clickable-space-around-button);
  right: var(--clickable-space-around-button);
  bottom: var(--clickable-space-around-button);
  top: var(--clickable-space-around-button);
  position: absolute;
}



button {
  display: block;
  background-color: darkgray;
  color: black;
  padding: 12px 22px;
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



 </style>
</head>

<body>
  
  <p><b>Instructions to Voters: To vote, completely fill in the box(es) next to your choice(s) like this <br></b></p>
    
  <p><b>Select only one candidate per choice<br>
You are not required to choose more than one candidate</p></b>
    
 
<table style="width:100%">
  <tr>
    <th>1st Choice <br> Select One</th>
    <th>2nd Choice <br> Select One</th>
    <th>3rd Choice <br> Select One</th>
    <th>4th Choice <br> Select One</th>
    <th>5th Choice <br> Select One</th>
  </tr>
  
  <tr>
    <td><br>
   <form name="ballot1" action="review.php" method="POST">

     <label><input type="radio"  value="Mark Twain" name="candidate1" > <span>Mark Twain</span></label>
    
    <label>
        <input type="radio" value="Thomas Edison" name="candidate1" >
    <span>Thomas <br> &emsp; Edison</span></label> <br>

        <label>
          <input type="radio" value="Bill Gates" name="candidate1">
          <span>Bill Gates</span>
        </label><br>
      <label>
  <input type="radio" value="Indiana Jones" name="candidate1" > <span>Indiana <br> &emsp; Jones</span></label><br>

      <label>
        <input type="radio" value="Marie Antoinette" name="candidate1" > <span>Marie <br> &emsp; Antoinette</span></label><br>
      <label>
        <input type="radio" value="Michael Jordan" name="candidate1" > <span>Michael <br> &emsp; Jordan </span></label><br><label>
        <input type="radio" value="Oprah Winfrey" name="candidate1" > <span>Oprah <br> &emsp; Winfrey  </span></label><br>
      <label>
        <input type="radio" value="Benjamin Franklin" name="candidate1"> <span>Benjamin <br> &emsp; Franklin</span></label><br>
      <label>
        <input type="radio" value="Natalie Portman" name="candidate1" > <span>Natalie <br> &emsp; Portman</span></label><br>
      <label>
        <input type="radio" value="Helen Keller" name="candidate1"> <span>Helen Keller</span></label><br>
      <label>
        <input type="radio" value="Charles Dickens" name="candidate1"> <span>Charles <br> &emsp; Dickens</span></label><br>
      <label>
        <input type="radio" value="Stephen Hawking" name="candidate1" > <span>Stephen <br> &emsp; Hawking</span></label><br>
      <label>
        <input type="radio" value="Harriet Tubman" name="candidate1" > <span>Harriet <br> &emsp; Tubman</span></label><br>
      <label>
        <input type="radio" value="Martin Luther King" name="candidate1"> <span>Martin<br>&emsp;Luther King</span></label> 

    
      </td>
    
    <td><br>
      <label><input type="radio"  value="Mark Twain" name="candidate2" > <span>Mark Twain</span></label>
    
    <label>
        <input type="radio" value="Thomas Edison" name="candidate2" >
    <span>Thomas <br> &emsp; Edison</span></label> <br>

        <label>
          <input type="radio" value="Bill Gates" name="candidate2">
          <span>Bill Gates</span>
        </label><br>
      <label>
  <input type="radio" value="Indiana Jones" name="candidate2" > <span>Indiana <br> &emsp; Jones</span></label><br>

      <label>
        <input type="radio" value="Marie Antoinette" name="candidate2" > <span>Marie <br> &emsp; Antoinette</span></label><br>
      <label>
        <input type="radio" value="Michael Jordan" name="candidate2" > <span>Michael <br> &emsp; Jordan </span></label><br><label>
        <input type="radio" value="Oprah Winfrey" name="candidate2" > <span>Oprah <br> &emsp; Winfrey</span></label><br>
      <label>
        <input type="radio" value="Benjamin Franklin" name="candidate2"> <span>Benjamin <br> &emsp; Franklin</span></label><br>
      <label>
        <input type="radio" value="Natalie Portman" name="candidate2" > <span>Natalie <br> &emsp; Portman</span></label><br>
      <label>
        <input type="radio" value="Helen Keller" name="candidate2"> <span>Helen Keller</span></label><br>
      <label>
        <input type="radio" value="Charles Dickens" name="candidate2"> <span>Charles <br> &emsp; Dickens</span></label><br>
      <label>
        <input type="radio" value="Stephen Hawking" name="candidate2" > <span>Stephen <br> &emsp; Hawking</span></label><br>
      <label>
        <input type="radio" value="Harriet Tubman" name="candidate2" > <span>Harriet <br> &emsp; Tubman</span></label><br>
      <label>
        <input type="radio" value="Martin Luther King" name="candidate2"> <span>Martin<br>&emsp;Luther King</span></label>      

    </td>
  
  <td><br>
  
      <label>
        <input type="radio" value="Mark Twain" name="candidate3"> <span>Mark Twain</span></label>
    
    <label>
        <input type="radio" value="Thomas Edison" name="candidate3">
    <span>Thomas <br> &emsp; Edison</span></label> <br>

        <label>
          <input type="radio" value="Bill Gates" name="candidate3">
          <span>Bill Gates</span>
        </label><br>
    <label>
  <input type="radio" value="Indiana Jones" name="candidate3"> <span>Indiana <br> &emsp; Jones</span></label><br>
      <label>
        <input type="radio" value="Marie Antoinette" name="candidate3"> <span>Marie <br> &emsp; Antoinette</span></label><br>
      <label>
        <input type="radio" value="Michael Jordan" name="candidate3"> <span>Michael <br> &emsp; Jordan </span></label><br><label>
        <input type="radio" value="Oprah Winfrey" name="candidate3"> <span>Oprah <br> &emsp; Winfrey</span></label><br>
      <label>
        <input type="radio" value="Benjamin Franklin" name="candidate3"> <span>Benjamin <br> &emsp; Franklin</span></label><br>
      <label>
        <input type="radio" value="Natalie Portman" name="candidate3"> <span>Natalie <br> &emsp; Portman</span></label><br>
      <label>
        <input type="radio" value="Helen Keller" name="candidate3"> <span>Helen Keller</span></label><br>
      <label>
        <input type="radio" value="Charles Dickens" name="candidate3"> <span>Charles <br> &emsp; Dickens</span></label><br>
      <label>
        <input type="radio" value="Stephen Hawking" name="candidate3"> <span>Stephen <br> &emsp; Hawking</span></label><br>
      <label>
        <input type="radio" value="Harriet Tubman" name="candidate3"> <span>Harriet <br> &emsp; Tubman</span></label><br>
      <label>
         <input type="radio" value="Martin Luther King" name="candidate3"> <span>Martin<br>&emsp;Luther King</span></label> 
  
  </td>

  <td><br>
      <label>
        <input type="radio"  value="Mark Twain" name="candidate4"> <span>Mark Twain</span></label>
    
    <label>
        <input type="radio" value="Thomas Edison" name="candidate4">
    <span>Thomas <br> &emsp; Edison</span></label> <br>

        <label>
          <input type="radio" value="Bill Gates" name="candidate4">
          <span>Bill Gates</span>
        </label><br>
      <label>
  <input type="radio" value="Indiana Jones" name="candidate4"> <span>Indiana <br> &emsp; Jones</span></label><br>

      <label>
        <input type="radio" value="Marie Antoinette" name="candidate4"> <span>Marie <br> &emsp; Antoinette</span></label><br>
      <label>
        <input type="radio" value="Michael Jordan" name="candidate4"> <span>Michael <br> &emsp; Jordan </span></label><br><label>
        <input type="radio" value="OprahWinfrey" name="candidate4"> <span>Oprah <br> &emsp; Winfrey</span></label><br>
      <label>
        <input type="radio" value="Benjamin Franklin" name="candidate4"> <span>Benjamin <br> &emsp; Franklin</span></label><br>
      <label>
        <input type="radio" value="Natalie Portman" name="candidate4"> <span>Natalie <br> &emsp; Portman</span></label><br>
      <label>
        <input type="radio" value="Helen Keller" name="candidate4"> <span>Helen Keller</span></label><br>
      <label>
        <input type="radio" value="Charles Dickens" name="candidate4"> <span>Charles <br> &emsp; Dickens</span></label><br>
      <label>
        <input type="radio" value="Stephen Hawking" name="candidate4"> <span>Stephen <br> &emsp; Hawking</span></label><br>
      <label>
        <input type="radio" value="Harriet Tubman" name="candidate4"> <span>Harriet <br> &emsp; Tubman</span></label><br>
      <label>
         <input type="radio" value="Martin Luther King" name="candidate4"> <span>Martin<br>&emsp;Luther King</span></label> 

</td>
      
  
  <td><br>
    
      <label>
        <input type="radio"  value="Mark Twain" name="candidate5"> <span>Mark Twain</span></label>
    
    <label>
        <input type="radio" value="Thomas Edison" name="candidate5">
    <span>Thomas <br> &emsp; Edison</span></label> <br>

        <label>
          <input type="radio" value="Bill Gates" name="candidate5">
          <span>Bill Gates</span>
        </label><br>
      <label>
  <input type="radio" value="Indiana Jones" name="candidate5"> <span>Indiana <br> &emsp; Jones</span></label><br>

      <label>
        <input type="radio"  value="Marie Antoinette" name="candidate5"> <span>Marie <br> &emsp; Antoinette</span></label><br>
      <label>
        <input type="radio"  value="Michael Jordan" name="candidate5"> <span>Michael <br> &emsp; Jordan </span></label><br><label>
        <input type="radio"  value="Oprah Winfrey" name="candidate5"> <span>Oprah <br> &emsp; Winfrey</span></label><br>
      <label>
        <input type="radio"  value="Benjamin Franklin" name="candidate5"> <span>Benjamin <br> &emsp; Franklin</span></label><br>
      <label>
        <input type="radio"  value="Natalie Portman" name="candidate5"> <span>Natalie <br> &emsp; Portman</span></label><br>
      <label>
        <input type="radio"  value="Helen Keller" name="candidate5"> <span>Helen Keller</span></label><br>
      <label>
        <input type="radio"  value="Charles Dickens" name="candidate5"> <span>Charles <br> &emsp; Dickens</span></label><br>
      <label>
        <input type="radio"  value="Stephen Hawking" name="candidate5"> <span>Stephen <br> &emsp; Hawking</span></label><br>
      <label>
        <input type="radio"  value="Harriet Tubman" name="candidate5"> <span>Harriet <br> &emsp; Tubman</span></label><br>
      <label>
         <input type="radio" value="Martin Luther King" name="candidate5"> <span>Martin<br>&emsp;Luther King</span></label> 
  </td>
  </tr>
  <br>
  </table>
  <br>
 
        <button id="sub" type="submit">Next Page</button>

</form>
   <script>
  document.querySelectorAll("label").forEach(function(label) {
    label.addEventListener("mousedown", function() {
      var radio = this.querySelector("input[type='radio']");
    
     if(radio.checked) {
        radio.onclick=function() {
          radio.checked=false
        }
      } else {
        radio.onclick=null
      }
    })
  })
   </script>
</body>
</html>

