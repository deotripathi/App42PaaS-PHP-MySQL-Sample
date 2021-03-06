<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>App42 Sample Php-MySQL Application</title>
<link href="css/style-User-Input-Form.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery-1.6.4.js"></script>
<script type="text/javascript" language="javascript">
	$(document).ready(function() {
		$('#SubmitButton').click(function() {
			//$("#contactPersonErr").hide();
			var error = "false";
			$("#contactPersonErr").hide();
			$("#emailErr").hide();
			if ($.trim($("#contactPerson").val()).length == 0) {
				$("#contactPersonErr").show();
				error = "true";
			}if ($.trim($("#email").val()).length == 0) {
				$("#emailErr").show();
				error = "true";
			}
			if (error == "true") {
				return false;
			}
			return true;
		});
	});
</script>
</head>
<body>
	<div class="App42PaaS_header_wrapper">
    	<div class="App42PaaS_header_inner">
        	<div class="App42PaaS_header">  
            </div> 
    	</div>
	</div>
<!------------------------------------Header Closed------------------------------------------->
	<div class="App42PaaS_body_wrapper">
    	<div class="App42PaaS_body">
        	<div class="App42PaaS_body_inner">
            <div class="contactPage_title">User Input Form</div>
 
            <div class="form_wrapper">
			<form method="post" action="save.php">
			<fieldset>
  		  	<legend>Personal Particular</legend>
            <div class="contactForm_tr">
				<div class="contactForm_td1">Name</div>
            	<div class="contactForm_tdMiddle">: </div>
           		<div class="contactForm_td2">
                <input name="name" type="text" class="Personal-input" id="contactPerson" value=""></div>
				<div class="contactForm_td2" style="color: red; padding-left: 90px; display: none;" id="contactPersonErr">Name is mandatory</div>
            </div>
			<div class="contactForm_tr">
				<div class="contactForm_td1">Email</div>
            	<div class="contactForm_tdMiddle">: </div>
           		<div class="contactForm_td2"><input name="email" type="text" id="email" class="Personal-input" maxlength="30">
                </div>
				<div class="contactForm_td2" style="color: red; padding-left: 90px; display: none;" id="emailErr">Email is mandatory</div>
            </div>
			</fieldset>
			<fieldset>
			<legend>What do you like about this Page :</legend>
            <div class="massage-box">
			<textarea name="description" cols="30" rows="5" class="massage-textFild">Enter your instruction here...</textarea>
            </div>
			</fieldset>
			<div class="form-button" style="margin-left:100px; margin-right:10px;"><input id="SubmitButton" class="submit_btn" type="image" border="0" name="submit" alt="Submit" src="images/submit_btn.png"></input></div>
			<div class="form-button"><input id="Submit"  class="clear_btn" type="image" border="0" name="clear" alt="clear" src="images/clear_btn.png"></div>
			</form>
			</div>
            
         
           
            </div>
    	</div>
    </div>
</body>
</html>
