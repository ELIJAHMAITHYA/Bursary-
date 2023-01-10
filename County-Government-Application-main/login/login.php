
<html>
    <head>
        <style>
             body {
        font-family: Arial, sans-serif;
      }
      ::selection {
    background: #ffb7b7;
}


      /* Style the form container */
      .form-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 30%;
        margin: 0 auto;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 20px;
      }

      /* Style the form elements */
      .form-container input[type="number"],
      .form-container input[type="password"] {
        width: 100%;
        margin-bottom: 15px;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
      }

      .form-container input[type="submit"],button,.admin {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }

      /* Style the error message */
      #errmsg {
        color: red;
        margin-bottom: 10px;
      }
        </style>
    </head>
    <body>
    <div class="form-container">
      <div class="error" id="error-message"></div>
      <form action="./checklogin.php" method="POST">
        <label for="username">IdNo:</label><br>
        <input type="number" id="idno" name="idno" required><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="pwd" required><br>
        <input type="submit" value="Submit">
      </form> 
      <p>No Account?   <a href="./signup.php"><button 
    style="width:auto; font-size: 20px;">SignUp</button>
    </a>
    </p>
    <p id="errmsg"></p>
    <a href="./adminLogin.php" class="admin" style="text-decoration: none; text-align: center;">
        Admin
    </a>
    </div>

  </body>
</html>