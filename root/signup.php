
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Sign Up</title>

<style type="text/css">
#signupform{
	margin-top:24px;
		
}
#signupform > div {
	margin-top: 12px;
	
}
#signupform > input,select {
	width: 200px;
	padding: 3px;
	background: #ffffff;
}
#signupbtn {
	font-size:18px;
	padding: 12px;
}
#pageMiddle{
background:#ffffff;
    width: 500px;
	margin: 0px auto;
	height: 700px;
	
	}

</style>
<script src="js/main.js"></script>
<script src="js/ajax.js"></script>
<script src="js/scroll.js"></script>
<script>
function restrict(elem){
	var tf = _(elem);
	var rx = new RegExp;
	if(elem == "email"){
		rx = /[' "]/gi;
	} else if(elem == "phone"){
		rx = /[^0-9]/gi;
	}
	tf.value = tf.value.replace(rx, "");
}
function emptyElement(x){
	_(x).innerHTML = "";
}

function signup(){
	var f = _("fname").value;
	var l = _("lname").value;
	var e = _("email").value;
	var p1 = _("pass1").value;
	var p2= _("pass2").value;
	var p = _("phone").value;
	var s = _("sex").value;
	var c = _("college").value;
	var y = _("year").value;
	var status = _("status");
	if(f == "" || l == "" || e == "" || p1 == ""||p2==""||p==""||s==""|| c == ""|| y==""){
		status.innerHTML = "Fill out all of the form data";
		 return false;
	} else if(p1 != p2){
		status.innerHTML = "Your password fields do not match";
		return false;
	}
	else
	{
	 return true;
	}
}
/*function openTerms(){
	_("terms").style.display = "block";
	emptyElement("status");
}*/
/* function addEvents(){
	_("elemID").addEventListener("click", func, false);
}
window.onload = addEvents; */
</script>
</head>
<body>

<div id="pageMiddle">
  <h2 style="color:#0066FF">Sign Up Here</h2>
  <form name="signupform" id="signupform" onSubmit="return signup();" action="payfee.php" method="post">
    <div>First Name: </div>
    <input id="fname" type="text" name="f" onFocus="emptyElement('status')"  maxlength="16">
	 <div>Last Name: </div>
    <input id="lname" type="text" name="l" onFocus="emptyElement('status')"  maxlength="16">
   
    <div>Email Address:</div>
    <input id="email" type="text" name="e" onFocus="emptyElement('status')" onKeyUp="restrict('email')" maxlength="88">
    <div>Create Password:</div>
    <input id="pass1" type="password" name="p1" onFocus="emptyElement('status')" maxlength="16">
    <div>Confirm Password:</div>
    <input id="pass2" type="password" name="c1" onFocus="emptyElement('status')" maxlength="16">
	<div>Phone: </div>
    <input id="phone" type="int" name="p" onFocus="emptyElement('status')" onKeyUp="restrict('phone')" maxlength="10">
	<div>College: </div>
    <input id="college" type="text" name="c" onFocus="emptyElement('status')"  maxlength="100">
    <div>Gender:</div>
	<select id="sex" name="s" onFocus="emptyElement('status')">
      <option value=""></option>
      <option value="m">Male</option>
      <option value="f">Female</option>
    </select>
    <div>Year:</div>
    <select id="year" name="y" onFocus="emptyElement('status')">
        <option value=""></option>
      <option value="1">I-year</option>
      <option value="2">II-year</option>
	  <option value="3">III-year</option>
      <option value="4">IV-year</option>
    </select>
   
   
    <br /><br />
    <div class="twitter_left2" style="text-align:left">
      <input type="submit"  name="save" value="Submit" style="background-color:#1CB4E5;padding: 10px;">
   </div>
    <span id="status"></span>
<H3 style="color:#F00"> Note: (scroll down)</H3>
<center>
<p> Submit button will redirect you to registration payment page. Please pay 200 INR for successful registration
!</p>
<p style="color:#F00"> Do not close the window even after the payment is successful. For succesful registration, please be patient to fill some data after payment.</p>
</center> 
  </form>
</div>
</body>
</html>