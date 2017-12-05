<link rel="import" href="bower_components/polymer/polymer-element.html">
<link rel="import" href="bower_components/paper-button/paper-button.html">
<link rel="import" href="bower_components/iron-input/iron-input.html">
<link rel="import" href="bower_components/paper-input/paper-input.html">
<link rel="import" href="bower_components/paper-button/paper-button.html">
<link rel="import" href="bower_components/paper-dropdown-menu/paper-dropdown-menu.html">
<link rel="import" href="bower_components/paper-item/paper-item.html">
<link rel="import" href="bower_components/paper-listbox/paper-listbox.html">
<link rel="import" href="bower_components/iron-autogrow-textarea/iron-autogrow-textarea.html">
<link rel="import" href="bower_components/iron-ajax/iron-ajax.html">
<link rel="import" href="bower_components/vaadin-upload/vaadin-upload.html">

<html>
<head>
    <meta name="generator" content="Polymer Starter Kit">
       <meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1, user-scalable=yes">
<script src="js/jquery-3.2.1.js"></script>
<script src="js/jquery-ui.js"></script>
<link rel="stylesheet" href="css/kwees-login.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/kwees-bootstrap.min.css">
<script src="js/jquery-3.2.1.js"></script>

</head>

<body>
  
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h4 class="text-center login-title">Cats to Pick</h4>
            <div class="account-wall">
                <img class="profile-img" src="img/cat_logo.png"
                    alt="">
                <form class="form-signin" action="User_Homepage.php" method="post">
                    <paper-input id="username" label="Username"required></paper-input>
                      <paper-input id="pass" label="Password"required></paper-input>
                
                    <paper-button name=submit class="btn btn-primary btn-block" onClick="checkLogin(username.value,pass.value)">Sign In</paper-button>
             <!--<button type="submit" name="submit" onclick="checkLogin(username.value,pass.value)" class="btn btn-primary btn-block">Sign In</button> -->

                <a href="index.php" class="pull-right need-help">Back to Home</a><span class="clearfix"></span>
                </form>
            </div>
            <a href="register.php" class="text-center new-account">Create an account </a>
        </div>
    </div>
</div>
    
    <script>
	//function validateForm() {
	//	var x = document.forms["login"]["userName"].value;
	//	var y = document.forms["login"]["pass"].value;
	//	if (x == "admin" && y == "1234") {
	//		return true;
	//	} else {
	//		alert("Incorrect Username/Password");
	//		return false;
	//	}
	//}
        
        <?php 
        
        ?>
        
        
	function checkLogin(email,password){
            var isUnique = true;
            $.ajax({
                type: "GET",
                url: "http://localhost:8080/db/users/?filter={'username': '" + email + "', 'password': '" + password + "'}",
                dataType: "json",
                success: function(response){
                    console.log(response);
                    if(response._returned > 0){
						console.log("EMail: " + email + ", " + "Password: " + password);
                        if(email=="admin"){
                            localStorage.setItem('Username', email);
                            window.location.href="Admin_Homepage.php";
                        }
                        else{
                            window.location.href="User_Homepage.php";
                        }
                        response = response._embedded;
                        isUnique = false;
                    }
					else{
						console.log("EMail: " + email + ", " + "Password: " + password);
						alert("Incorrect Username/Password");
					}
                },
                async: false,
                error: function(jqXHR, exception){
                    console.log(jqXHR);
                }
            });
            return isUnique;
    }
        
        
	</script>
</body>
</html>