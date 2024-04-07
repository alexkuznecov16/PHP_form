<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./main.css">
  <title>My <?php echo 'first';?> PHP</title>
</head>
<body>
  <form action="./includes/formHandler.php" method="post" id="myForm">
      <label for="name">Name:</label>
      <br>
      <input required type="text" id="name" name="name">
      <br>
      <br>
      <label for="email">Email:</label>
      <br>
      <input required type="email" id="email" name="email">
      <br>
      <br>
      <label for="phonenumber">Phone number:</label>
      <br>
      <input required type="tel" id="phonenumber" name="phonenumber">
      <br>
      <br>
      <label for="message">Message:</label>
      <br>
      <textarea required id="message" name="message" rows="4" cols="50"></textarea>
      <br>
      <br>
      <button id="submitButton" type="submit" disabled>Submit</button>
  </form>

  <div class="modal">
    <div class="modal-box">
      <img src="./assets/green-tick.png" alt="green tick">
      <h2>The form has been sent!</h2>
      <p>Your details has been successfully submitted!</p>
    </div>
  </div>

  <script src="./modal.js"></script>

  <!--<?php
  $full_name = 'Anthony Smith'; // full name variable
  echo "My name is $full_name."; // print greeting

  // Scalar types (contains one value)
  $string = 'Daniel Schmidt';
  $int = 123324;
  $float = 1.33333;
  $bool = true; // 1 = true, 0 = false

  // Array type
  $array = [$float, $string, $int, $bool]; // or array(values)

  // Object type
  $object = null; // or $object = new Car();

  echo '<br/>';
  echo '<br/>';
  echo '<br/>';
  echo $_GET['name'];
  echo '<br/>';
  echo $_GET['age']
  ?> -->
</body>
</html>