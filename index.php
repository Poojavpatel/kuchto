<!DOCTYPE html>
<html>
<head>
<title>registration form</title>

	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" type="text/css" href="style1.css" media="all" />
    <link rel="stylesheet" type="text/css" href="demo.css" media="all" />

</head>
<style>
h1{color:#FFFFFF;
}
</style>
<body style="background:url(background2.jpg);background-repeat:no-repeat ;background-size:cover;">
  
			<header><br><br>
				<h1 align="center"><span><b><font color="black">SIGN IN HERE...!!!</font></b></span> </h1>
            </header>     <br><br>  
      <div  class="form">
    		<form id="contactform" method="post" action="thankyou1.php"> 
    			<p class="contact"><label for="name"> First Name</label></p> 
    			<input id="name" name="first name" required=""  type="text"> 
                       <p class="contact"><label for="name"> Last Name</label></p> 
    			<input id="name" name="last name" required=""  type="text"> 
    			 
    			<p class="contact"><label for="email">Email</label></p> 
    			<input id="email" name="email" placeholder="example@domain.com" required="" type="email"> 
                    		<p class="contact"><label for="password">password</label></p>
    		         <p><input type="password" required name="password" onchange="form.pwd2.pattern = this.value;"></p>
                <p class="contact"><label for="confirm_password">confirm_password</label></p> 
    			<p><input type="password" required  name="confirm_password"></p>

       
               
            <input class="buttom" name="submit" id="submit" tabindex="5" value="Sign me up!" type="submit"> 	 
   </form> 
</div>  
    

</body>
</html>
