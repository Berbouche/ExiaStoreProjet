<?php?>    
<form id="formRegister" method="post" action="Model/register.php">
	<label for="nom"><br><br>Your Lastname :</label>
    <input type="text" name="lastname" id="nom" /><br/><br/>
    <label for="firstname">Your Firstname :</label>
    <input type="text" name="firtname" id="firstname" /><br/><br/>
    <label for="pass">Your Password :</label>
    <input type="password" name="pass" id="pass" /><br><br />
    <label for="email">Your e-mail :</label>
    <input type="email" name="email" id="email" /><br><br />  
    <label for="date">Your birthday :</label>
    <input type="date" name="birthday" id="birthday"/><br/><br/>
    <input type="submit" value="Send" class="auto-style1" style="width: 90px" />
    </form>
