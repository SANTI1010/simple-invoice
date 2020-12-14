{include file="header.tpl"}



<div class="contenedor">
	<form action="UserLoguedIn" method="post">
	  <div class="form-group row">
	    <label for="staticEmail" class="col-sm-2 col-form-label">User</label>
	    <div class="col-sm-10">
	      <input type="text"  class="form-control-plaintext" id="user" name="input_user_log">
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
	    <div class="col-sm-10">
	      <input type="password" class="form-control" id="password" placeholder="Password" name="input_pass_log">
	    </div>
	  </div>
	  

	  <button class="btn btn-primary"><a class="btn-text">Confirmar</a></button>
	</form>	 
</div>   
	
{include file="footer.tpl"}		

