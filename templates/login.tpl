{include file="header.tpl"}
   <link href="css/login.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <div class="container">
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="img/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            
            <form action="verifyUser" method="post" name="loginform"class="form-signin">
			
	                <span id="reauth-email" class="reauth-email"></span>
	                <input class="form-control" placeholder="Usuario" name="user_name" type="text" value="" autofocus="" required>
	                <input class="form-control" placeholder="Contraseña" name="user_password" type="password" value="" autocomplete="off" required>
	                <button type="submit" class="btn btn-lg btn-success btn-block btn-signin" name="login" id="submit">Iniciar Sesión</button>
            </form>
        </div>
    </div>
 
