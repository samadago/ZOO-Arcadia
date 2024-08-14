<?php require_once __DIR__."/templates/header.php"?><!--login form-->

<form action=""class="login-form">
 
    <h3>login form</h3>
   
    <input type="email"placeholder="Email"class="box">
    <input type="password"placeholder="Password"class="box">
  
    <div class="remember">
   <input type="checkbox"name=""id="remember-me">
   <label for="remember-me">souviens-toi de moi</label>
  
  </div>
  <a href="connexion.php" class="btn">login</a>
</form>

<!-- end login form-->

<?php require_once __DIR__."/templates/footer.php"?>