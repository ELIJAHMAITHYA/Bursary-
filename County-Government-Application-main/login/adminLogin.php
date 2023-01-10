<html>
  <head>
    <style>
      /* Add some basic styling */
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
      .form-container input[type="text"],
      .form-container input[type="password"] {
        width: 100%;
        margin-bottom: 15px;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
      }

      .form-container input[type="submit"] {
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
      <form action="checkAdminLogin.php" method="POST">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br>
        <input type="submit" value="Submit">
      </form> 
      <p id="errmsg"></p>
    </div>

  </body>
</html>
