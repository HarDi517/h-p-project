
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
    <link rel="strylesheet" href="logIn_css.css">

    <style type="text/css">
     a:link { color: black; text-decoration: none;}
     a:visited { color: black; text-decoration: none;}
     a:hover { color: black; text-decoration: underline;}
    </style>
  <title>LOGIN</title>
 </head>
 <body>
  <div>
      <ul>
        <li><a href="ver1_main.html">메인페이지</a></li>
      </ul>
    </div>
      <!-- 로그인 폼 CSS -->
      <div id="loginer">
        <div id="form">
          <form action="login_php_ye1.php" method="post">
              <legend>LOGIN !</legend>
			  <p>ID:
              <input type="text" name="id" placeholder="Enter Your ID"></p>
              <br><br>
			  <p>PW:
              <input type="password" name="pwd1" placeholder="Enter Your Password"></p>
              <br><br>
              <input type="submit" name="login "value="로그인">
			  <br><br>
			  ------------------------------------------------
              <br><br>
              You Don't Have Your Account?
			  <br><br>

          </form>
		  	  <form action="signup.html" method="post">
			  	<button>회원가입</button>
			  </form>
        </div>
      </div>

      <!-- 하단 -->
      <div id="footer">
        <p align="center">&copy; Copyright</p>
      </div>
    </div>
 </body>
</html>
