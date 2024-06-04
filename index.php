<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    </head>
    <body>
    <div class="login-wrap ">
  <div class="login-html">
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
    <div class="login-form">
      <div class="sign-in-htm">
        <form action='form.php' method='post'>
        <div class="group">
          <label for="user" class="label">Username</label>
          <input id="user" type="text" class="input" name='name'>
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="pass" type="password" class="input" data-type="password" name='pass'>
        </div>
        <div class="group">
          <input id="check" type="checkbox" class="check" checked>
          <label for="check"><span class="icon"></span> Keep me Signed in</label>
        </div>
        <div class="group">
          <input type="submit" class="button" value="Sign In" name='sub'>
        </div>
        </form>

        <div class="hr"></div>
        <div class="foot-lnk">
          <a href="#forgot">Forgot Password?</a>
        </div>
      </div>



      <div class="sign-up-htm">
        <div class="group">
            <form action='form.php' method='post'>
                
          <label for="user" class="label">Username</label>
          <input id="user" type="text" class="input"  name='username'>
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="pass" type="password" class="input" data-type="password" name='pass'>
        </div>
        <div class="group">
          <label for="pass" class="label">Repeat Password</label>
          <input id="pass" type="password" class="input" data-type="password" name='cpass'>
        </div>
        <div class="group">
          <label for="pass" class="label">Email Address</label>
          <input id="pass" type="email" class="input" name='mail'>
        </div>

        <div class="group">
          <input type="submit" class="button" value="Sign Up" name='submit'>
        </div>
        </form>


        <div class="hr"></div>
        <div class="foot-lnk">
          <label for="tab-1">Already Member?</a>
        </div>

      </div>
    </div>
  </div>
</div>
    
    </body>
</html>