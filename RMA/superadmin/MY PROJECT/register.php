<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <title>REGISTRAION</title>
  </head>
  <body>
    <div class="container">
      <h2>REGISTRATION</h2>
      <form id="form" class="form">
        <div class="form-control">
          <label for="username">username</label>
          <input type="text" id="username" placeholder="Enter username" />
          <small>Error Message</small>
        </div>
        <div class="form-control">
          <label for="email">Email</label>
          <input type="text" id="email" placeholder="Enter email" />
          <small>Error Message</small>
        </div>
        <div class="form-control">
          <label for="password">Password</label>
          <input type="password" id="password" placeholder="Enter Password" />
          <small>Error Message</small>
        </div>
        <div class="form-control">
          <label for="password">Confirm Password</label>
          <input
            type="password"
            id="password2"
            placeholder="Confirm Password"
          />
          <small>Error Message</small>
        </div>
            <script src="js/app.js"></script>
        <button type="submit">Submit</button>
        <div class="input-field col s12">
          </div>
          <div class="input-field col s12">
            <p class="margin center medium-small sign-up">Already have an account? <a href="login.php">Login</a></p>
          </div>
      </form>
    </div>

    <script src="js/app.js"></script>
  </body>
</html>
