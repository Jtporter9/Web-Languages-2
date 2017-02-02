
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
<link rel="stylesheet" href="./styles.css" type="text/css">
  <title>Send an Email</title>
</head>
  <body class="body">

<?php include './header.php';?>

    <?php
    echo '
    <div class="main-container">
          <form name="sign-up" method="post" action="submit.php">
    <h2>Sign me up!</h2>
      <div>
        <label>Username/Email: (Text Input) </label>
        <input id="email" type="text" name="email"/>
      </div>

      <div>
        <label>Password: (Password Input) </label>
        <input id="password" type="password" name="password"/>
      </div>

      <div>
        <label>Subscribe to email list: (Radio Button) </label>
        <span>No</span>
        <input id="subscribe" type="radio" name="subscribe"/>        
        <span>Yes</span>
        <input id="subscribe" type="radio" name="subscribe"/>
      </div>

      <div>
        <label>Gender: (Drop Down List (DDL)) </label>
        <select id="gender" name="gender">
          <option>Male</option>
          <option>Female</option>
        </select>
      </div>

      <div class="textarea-div">
        <label>About you: (Text Area) </label>
        <textarea id="about-you" name="about-you"></textarea>
      </div>
      <button class="btn" type="submit">Submit</button>
    </form>

    <div class="box-right">
        <h2>Instructions</h2>
        <label>Build a form</label><br/>
        <big>Use what you learned from previous classes to build a web form. This form should include at least the following:</big>
        <p>❏ Three different input types (text, radio, dropdown, etc)</p>
        <p>❏ Five different inputs</p>
        <label>PHP SENDER 5</label><br/>
        <big>After reading the chapter, build a php file that send the values from the five inputs to your email box.</big>
        <p>❏ Send the message</p>
        <p>❏ Format the message so the variables are contained in a cohesive sentence.</p>
        <label>BONUS 2</label><br/>
        <big>Make it look awesome by adding CSS, Google fonts, and styling that you learned in web essentials.</big>        
        <p>❏ Impress Me = 2</p>
        <p>❏ Weak Attempt = 1</p>
        <p>❏ No Attempt = 0</p>
    </div>
    </div>
    ';?>

  </body>
</html>
