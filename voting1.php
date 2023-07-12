<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Ballot 1 Voting</title>
 <style>
  
   h2{
  font-size: 37px;
  text-align: center;
}

h3{
  font-size: 32px
}

.paragraph{
  font-family:'Times New Roman', Times, serif;
  font-size: 28px;
  text-align: center;
  line-height: 2em;
}

p{
  line-height: 2em;
  font-size: 28px;
}

input[type="number"] {
  width: 75px;
  height: 70px;
  background-color: #e8e8e8;
  border-radius: 4pt;
  -moz-appearance: textfield;
  font-weight: bold;
  font-size: 28px;
  margin-top: 25px;
}
   
input[type="number"]::-webkit-inner-spin-button, 
input[type="number"]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}

input[type="number"]:invalid{
  border: 1px solid red;
}
   


label span{
  line-height: 1.8;
  font-size: 28px;
}

.error-message {
  display: none;
  font-size: 28px; /* Adjust the font size as per your preference */
  color: black;
  margin-top: 5px;
  background-color: #fb969c;
  width: 500px;
}
   input:invalid {
  border: 2px solid red;
}


input:invalid + label .error-message {
  display: block;
}
   

input[type="submit"]{
  display: block;
  background-color: darkgray;
  color: black;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-weight: bold;
  font-size: x-large;
  float: right;
  height: 75px;
  width: 150px;

}

input[type="submit"]:hover {
  background-color: lightgray;
}

  .modal-container {
    display: none;
    position: fixed;
    z-index: 9999;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #fb969c;
    padding: 20px;
    border: 1px solid red;
    border-radius: 4px;
    text-align: center;
  }

  .modal-message {
    font-size: 28px;
    margin-bottom: 10px;
    
  }

  .modal-button {
    display: inline-block;
    padding: 12px 18px;
    background-color: lightgray;
    color: black;
    border: 1px solid black;
    font-weight: bold;
    border-radius: 4px;
    cursor: pointer;
  }

* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.col {
  float: left;
  width: 50%;
  
}
 </style>
 
</head>

<body>

  <h2> 2023 Ballot </h2>
<h3>Follow these instructions carefully:</h3>
<p> 1.&emsp;Put the number <b>“1”</b> in the space next to the name of your first choice.<br>
2.&emsp;Put the number <b>“2”</b> in the space next to the name of your second choice, the number <b>“3”</b> next to your third choice, and so on until you have voted for as many candidates as you want. <br>
3.&emsp;Do not put the same number next to more than one name.<br>
4.&emsp;Do not skip numbers when ranking candidates.<br></p>

  <div class="paragraph">
One candidate will be elected to serve in 2023.</div>
  <br>
  
    
  <form  id="ballot1" method="post" action="review.php" autocomplete="on" >
    <div class="col"> 
    
     <label><input type="number" name="num_a"  min="1" max="14"  oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1'); validateNumber2(this, 'Please enter a number between 1 and 14', 'error-msg-a');this.setCustomValidity('')" oninvalid="this.setCustomValidity('Please enter a number between 1 and 14')" class="unique">  <span>Mark Twain</span></label>
       <span class="error-message" id="error-msg-a">Please enter a number between 1 and 14</span>
<br>
    <label><input type="number" name="num_b"  min="1" max="14"  oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');validateNumber2(this, 'Please enter a number between 1 and 14', 'error-msg-b'); this.setCustomValidity('')" oninvalid="this.setCustomValidity('Please enter a number between 1 and 14')" class="unique">  <span>Bill Gates</span></label>
       <span class="error-message" id="error-msg-b">Please enter a number between 1 and 14</span>
    <br>
    
     <label><input type="number" name="num_c"  min="1" max="14" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1'); validateNumber2(this, 'Please enter a number between 1 and 14', 'error-msg-c');this.setCustomValidity('')" oninvalid="this.setCustomValidity('Please enter a number between 1 and 14')" class="unique">  <span>Marie Antoinette</span></label>
       <span class="error-message" id="error-msg-c">Please enter a number between 1 and 14</span>
<br>
    <label><input type="number" name="num_d"   min="1" max="14" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');validateNumber2(this, 'Please enter a number between 1 and 14', 'error-msg-d'); this.setCustomValidity('')" oninvalid="this.setCustomValidity('Please enter a number between 1 and 14')" class="unique"> <span>Oprah Winfrey</span></label>
       <span class="error-message" id="error-msg-d">Please enter a number between 1 and 14</span>
    <br>
     <label><input type="number" name="num_e"  min="1" max="14" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');validateNumber2(this, 'Please enter a number between 1 and 14', 'error-msg-e'); this.setCustomValidity('')" oninvalid="this.setCustomValidity('Please enter a number between 1 and 14')" class="unique">  <span>Natalie Portman</span></label>
       <span class="error-message" id="error-msg-e">Please enter a number between 1 and 14</span>
<br>
    <label>
  <input type="number" name="num_f" min="1" max="14" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');validateNumber2(this, 'Please enter a number between 1 and 14', 'error-msg-f'); this.setCustomValidity('')" oninvalid="this.setCustomValidity('Please enter a number between 1 and 14')" class="unique">
  <span>Charles Dickens</span>
</label>
       <span class="error-message" id="error-msg-f">Please enter a number between 1 and 14</span>
<br>

    <label><input type="number" name="num_g"  min="1" max="14" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1'); validateNumber2(this, 'Please enter a number between 1 and 14', 'error-msg-g');this.setCustomValidity('')" oninvalid="this.setCustomValidity('Please enter a number between 1 and 14')" class="unique">  <span>Harriet Tubman</span></label>
       <span class="error-message" id="error-msg-g">Please enter a number between 1 and 14</span><br>
    </div>
    
    
    <div class="col">
 <label><input type="number" name="num_h"  min="1" max="14"  oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1'); validateNumber2(this, 'Please enter a number between 1 and 14', 'error-msg-h');this.setCustomValidity('')" oninvalid="this.setCustomValidity('Please enter a number between 1 and 14')" class="unique">  <span>Thomas Edison</span></label> <span class="error-message" id="error-msg-h">Please enter a number between 1 and 14</span>
<br>
    <label><input type="number" name="num_i"  min="1" max="14"  oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1'); validateNumber2(this, 'Please enter a number between 1 and 14', 'error-msg-i');this.setCustomValidity('')" oninvalid="this.setCustomValidity('Please enter a number between 1 and 14')" class="unique"> <span>Indiana Jones</span></label>
       <span class="error-message" id="error-msg-i">Please enter a number between 1 and 14</span>
    <br>
     <label><input type="number" name="num_j"  min="1" max="14" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');validateNumber2(this, 'Please enter a number between 1 and 14', 'error-msg-j'); this.setCustomValidity('')" oninvalid="this.setCustomValidity('Please enter a number between 1 and 14')" class="unique">  <span>Michael Jordan</span></label>
       <span class="error-message" id="error-msg-j">Please enter a number between 1 and 14</span>
<br>
    <label><input type="number" name="num_k"  min="1" max="14"  oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1'); validateNumber2(this, 'Please enter a number between 1 and 14', 'error-msg-k');this.setCustomValidity('')" oninvalid="this.setCustomValidity('Please enter a number between 1 and 14')" class="unique">  <span>Benjamin Franklin</span></label>
       <span class="error-message" id="error-msg-k">Please enter a number between 1 and 14</span>
    <br>
     <label><input type="number" name="num_l"  min="1" max="14"  oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');validateNumber2(this, 'Please enter a number between 1 and 14', 'error-msg-l'); this.setCustomValidity('')" oninvalid="this.setCustomValidity('Please enter a number between 1 and 14')" class="unique">  <span>Helen Keller</span></label>
       <span class="error-message" id="error-msg-l">Please enter a number between 1 and 14</span>
<br>

      <label><input type="number" name="num_m"  min="1" max="14"  oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1'); validateNumber2(this, 'Please enter a number between 1 and 14', 'error-msg-m');;setCustomValidity('') " oninvalid="this.setCustomValidity('Please enter a number between 1 and 14')"class="unique">  <span>Stephen Hawking</span>
</label>
      <span class="error-message" id="error-msg-m">Please enter a number between 1 and 14</span>
<br>

      
  
      <label><input type="number" name="num_n"  min="1" max="14" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1'); validateNumber2(this, 'Please enter a number between 1 and 14', 'error-msg-n');setCustomValidity('') " class="unique">  <span>Martin Luther King</span>
</label>
      <span class="error-message" id="error-msg-n">Please enter a number between 1 and 14</span>
      <br>
     </div>
    <br>
   <label> <input type="submit" value="Next Page"></label>
  </form> 
<br>

<script>

  document.getElementById("ballot1").addEventListener("submit", e => {
   
    const values = Array.from(e.target.querySelectorAll('.unique'))
      .map(input => parseInt(input.value)).filter(num => num === num);


    
  
     /* if (!isUnique(values)) {
        e.preventDefault();
        showModal("Each rank may only be used once.");*/
      try {
      const repeatedNumbers = findRepeatedNumbers(values);
      if (repeatedNumbers.length > 0) {
        e.preventDefault();
        const message = `Multiple candidates have the following rank:  ${repeatedNumbers[0]}`;
        showModal(message);
      }
    } catch (err) {
      showModal(err.message);
    }
  });
 /* function isUnique(arr) {
    const set = new Set;
    for (let i = 0; i < arr.length; i++) {
      const val = arr[i];
      if (set.has(val)) {
        return false;
      }
      set.add(val);
    }
    return true;
  }*/

  function findRepeatedNumbers(arr) {
    const set = new Set();
    const repeatedNumbers = [];

    for (let i = 0; i < arr.length; i++) {
      const val = arr[i];
      if (set.has(val) && !repeatedNumbers.includes(val)) {
        repeatedNumbers.push(val);
      }
      set.add(val);
    }

    return repeatedNumbers;
  }


  

  function showModal(message) {
    const modalContainer = document.createElement('div');
    modalContainer.className = 'modal-container';

    const modalMessage = document.createElement('div');
    modalMessage.className = 'modal-message';
    modalMessage.textContent = message;

    const modalButton = document.createElement('button');
    modalButton.className = 'modal-button';
    modalButton.textContent = 'OK';
    modalButton.addEventListener('click', closeModal);

    modalContainer.appendChild(modalMessage);
    modalContainer.appendChild(modalButton);
    document.body.appendChild(modalContainer);

    modalContainer.style.display = 'block';
  }

  function closeModal() {
    const modalContainer = document.querySelector('.modal-container');
    if (modalContainer) {
      modalContainer.style.display = 'none';
      document.body.removeChild(modalContainer);
    }
  }

 function validateNumber(input) {

  var errorMessage = document.querySelectorAll('.error-message');
  if (input.validity.rangeOverflow || input.validity.rangeUnderflow) {
    errorMessage.style.display = 'block';
  } else {
    errorMessage.style.display = 'none';
  }
}


  function validateNumber2(input, errorMessage, errorId) {
  var errorElement = document.getElementById(errorId);

  if (input.validity.rangeOverflow || input.validity.rangeUnderflow) {
    errorElement.textContent = errorMessage;
    errorElement.style.display = 'block';
  } else {
    errorElement.style.display = 'none';
  }
}

</script>

</body>

</html>
