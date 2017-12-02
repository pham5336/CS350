<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Preezbook</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      @import url(https://fonts.googleapis.com/css?family=Roboto:100);
.flat-form {
  background: #e74c3c;
  color: white;
  margin: 25px auto;
  width: 390px;
  height: 450px;
  position: relative;
  font-family: 'Roboto';
}
.flat-form .tabs {
  display: block;
  background: #c0392b;
  width: 100%;
  height: 40px;
  margin: 0;
  margin-bottom: 20px;
  padding: 0;
  position: relative;
  list-style-type: none;
}
.flat-form .tabs li {
  display: block;
  margin: 0;
  padding: 0;
  float: left;
}
.flat-form .tabs li a {
  display: block;
  background: #c0392b;
  color: white;
  text-decoration: none;
  font-size: 16px;
  float: left;
  padding: 12px 22px;
}
.flat-form .tabs li a.active {
  background: #e74c3c;
  border-right: none;
  -moz-transition: all 0.5s linear;
  -o-transition: all 0.5s linear;
  -webkit-transition: all 0.5s linear;
  transition: all 0.5s linear;
}
.flat-form .tabs li a:hover {
  background: #d65548;
  -moz-transition: all 0.5s linear;
  -o-transition: all 0.5s linear;
  -webkit-transition: all 0.5s linear;
  transition: all 0.5s linear;
}
.flat-form .tabs li:last-child a {
  text-align: center;
  width: 174px;
  padding-left: 0;
  padding-right: 0;
  border-right: none;
}
.flat-form .form-action {
  padding: 0 20px;
  position: relative;
}
.flat-form h1 {
  font-size: 42px;
  padding-bottom: 10px;
}
.flat-form p {
  font-size: 12px;
  padding-bottom: 10px;
  line-height: 25px;
}
.flat-form a {
  color: yellow;
  text-decoration: none;
}
.flat-form a:hover {
  text-decoration: underline;
}
.flat-form form {
  padding-right: 20px !important;
}
.flat-form form input[type=text], .flat-form form input[type=password], .flat-form form input[type=submit] {
  font-family: 'Roboto';
}
.flat-form form input[type=text], .flat-form form input[type=password] {
  width: 100%;
  height: 40px;
  margin-bottom: 10px;
  padding-left: 15px;
  background: #fff;
  border: none;
  color: #e74c3c;
  outline: none;
}
.flat-form form input.button {
  border: none;
  display: block;
  background: #136899;
  height: 40px;
  width: 80px;
  color: #ffffff;
  text-align: center;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  border-radius: 5px;
  -moz-box-shadow: 0px 3px 1px #2075aa;
  -webkit-box-shadow: 0px 3px 1px #2075aa;
  box-shadow: 0px 3px 1px #2075aa;
  -moz-transition: all 0.15s linear;
  -o-transition: all 0.15s linear;
  -webkit-transition: all 0.15s linear;
  transition: all 0.15s linear;
}
.flat-form form input.button:hover {
  background: #1e75aa;
  -moz-box-shadow: 0 3px 1px #237bb2;
  -webkit-box-shadow: 0 3px 1px #237bb2;
  box-shadow: 0 3px 1px #237bb2;
}
.flat-form form input.button:active {
  background: #136899;
  @inclue box-shadow( 0 3px 1px #0f608c );
}
.flat-form form input::-webkit-input-placeholder {
  color: #e74c3c;
}
.flat-form form input:-moz-placeholder {
  color: #e74c3c;
}
.flat-form form input::-moz-placeholder {
  color: #e74c3c;
}
.flat-form form input:-ms-input-placeholder {
  color: #e74c3c;
}
.flat-form .show {
  display: block;
}
.flat-form .hide {
  display: none;
}

body {
  background: #1a1a1a;
}

    </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>
  <div class="flat-form">
  <ul class="tabs">
    <li>
      <a href="#login" class="active">Login</a>
    </li>
    <li>
      <a href="#register">Register</a>
    </li>
  </ul>


  <div id="login" class="form-action show">
    <h1>Login in </h1>
    <form action="includes/login.php" method="post">
      <ul>
        <li>
          <input type="text" placeholder="email" name="email"/>
        </li>
        <li>
          <input type="password" placeholder="Password" name="psw"/>
        </li>
        <li>
          <input type="submit" value="Login" name="submit" class="button" />
        </li>
      </ul>
    </form>
  </div>



  <!--/#login.form-action-->
  <div id="register" class="form-action hide">
    <h1>Register</h1>
    <form  action = "includes/register.php" method= "post">
      <ul>




        <li>
          <input type="text" placeholder="firstname" name="firstname" />
        </li>

        <li>
          <input type="text" placeholder="lastname" name="lastname"/>
        </li>

        <li>
          <input type="text" placeholder="email" name="email"/>
        </li>

        <li>
          <input type="password" placeholder="Password" name="password"/>
        </li>


        




        <li>
          <input type="submit" name="submit" value="Sign Up" class="button" />
        </li>


      </ul>
    </form>
  </div>

</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

    <script  src="js/index.js"></script>

</body>
</html>
