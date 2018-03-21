<!DOCTYPE HTML>  
<html>
<head><title>
buy now</title>
  

</head>
<body style="background:url(background2.jpg);background-repeat:no-repeat ;background-size:cover;">
   <h2 align="center">BUY NOW!!!</h2>

<form  align="center" method="post" action="thankyou.php">    
 <b> Name: <input type="text" name="name" required>
  <br><br>
  E-mail: <input type="email" name="email" required>
  <br><br>
 <!-- Quantity: <input type="number" name="quantity" min="1"  max="50" required>
  <br><br>-->
 plan:
<select name="plan" required>

<option value="plan1">plan1</option>
<option value="plan2">plan2</option>
<option value="plan3">plan3</option>
<option value="plan4">plan4</option>
<option value="plan5">plan5</option>
<option value="plan6">plan6</option>

</select><br><br>
 Address: <input type="text" name="address" required>
  <br><br>
Phone no. :<input type="number" name="phone" maxlength="10" max="9999999999"  required>

 </b> <br><br>

  <input  type="submit" name="submit" value="Submit">
 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input  type="reset" name="reset" value="Cancel">  
</form>


</body>
</html>