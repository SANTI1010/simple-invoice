{include file="header.tpl"}

 <div class="container">
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="img/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            
            <form action="verifyUser" method="post" name="loginform"class="form-signin">
				<?php
					// show potential errors / feedback (from login object)
					if (isset($login)) {
						if ($login->errors) {
							?>
							<div class="alert alert-danger alert-dismissible" role="alert">
							    <strong>Error!</strong> 
							
							<?php 
							foreach ($login->errors as $error) {
								echo $error;
							}
							?>
							</div>
							<?php
						}
						if ($login->messages) {
							?>
							<div class="alert alert-success alert-dismissible" role="alert">
							    <strong>Aviso!</strong>
							<?php
							foreach ($login->messages as $message) {
								echo $message;
							}
							?>
							</div> 
							<?php 
						}
					}
					?>
	                <span id="reauth-email" class="reauth-email"></span>
	                <input class="form-control" placeholder="Usuario" name="user_name" type="text" value="" autofocus="" required>
	                <input class="form-control" placeholder="Contraseña" name="user_password" type="password" value="" autocomplete="off" required>
	                <button type="submit" class="btn btn-lg btn-success btn-block btn-signin" name="login" id="submit">Iniciar Sesión</button>
            </form><!-- /form -->
            
        </div><!-- /card-container -->
    </div><!-- /container -->
  </body>
</html>
