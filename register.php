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
<script src="js/jquery-3.2.1.js"></script>
<script src="js/jquery-ui.js"></script>
<link rel="stylesheet" href="css/kwees-login.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/kwees-bootstrap.min.css">
<script src="js/jquery-3.2.1.js"></script>

</head>

<body>
<div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Create an account</h3>
			 			</div>
			 			<div class="panel-body">
			    		<form role="form" method="post">
			    			<div class="row">
			    				<div class="col-xs-12 col-sm-12 col-md-12">
			    					<div class="form-group">
			                <input type="text" name="user_name" id="user_name" class="form-control input-sm" placeholder="Username" required>
			    					</div>
			    				</div>
			    			</div>

			    			<div class="form-group">
			    				<input type="email" name="email" id="email" class="form-control input-sm" placeholder="DLSU Email Address" required>
			    			</div>

			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password" required>
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password" required>
			    					</div>
			    				</div>
			    			</div>
                             <paper-button type="submit" class="btn btn-primary btn-block" onclick="checkRegister(user_name.value,password.value,email.value)"></paper-button>
							<a href="login.php" onclick="test" class="btn btn-info btn-block">Already have an account?</a>
			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>
</body>
<script>
	function test(username,password,email){
    if(username=="" && password==""){
    console.log("No user");
    }else
        var mongo="http://127.0.0.1:8080/db/users";
        var restBody = '{"username":"' + username + '", "password":"' + password + '", "email":"' + email + '"}';
          console.log(restBody);
          $.ajax({
            type: "POST",
            url: mongo,
            processData: false,
            contentType: "application/json",
            data: restBody,
            complete: function(jqXHR, exception){
              console.log(jqXHR.status);
              console.log(jqXHR.responseText);
              if(jqXHR.status == 201){
                console.log("ok");
                  window.location.href="login.php";
               // $("html, body").animate({ scrollTop: 0 }, "slow");
              }
              else{
console.log("not ok");              }
            }
          });
    }
	function checkRegister(username,password,email){
            var isUnique = true;
            $.ajax({
                type: "GET",
                url: "http://localhost:8080/db/users/?filter={'email': '" + email + "', 'username': '" + username + "', 'password': '"+ password +"'}",
                dataType: "json",
                success: function(response){
                    console.log(response);
                    if(response._returned > 0){
						alert("Username/Email already exists!")
                        response = response._embedded;
                        isUnique = false;
                    }
					else{
						console.log("EMail: " + email + ", " + "Password: " + password);
						var mongo="http://127.0.0.1:8080/db/users";
        var restBody = '{"username":"' + username + '", "password":"' + password + '", "email":"' + email + '", "type": 2}';
          console.log(restBody);
          $.ajax({
            type: "POST",
            url: mongo,
            processData: false,
            contentType: "application/json",
            data: restBody,
            complete: function(jqXHR, exception){
              console.log(jqXHR.status);
              console.log(jqXHR.responseText);
              if(jqXHR.status == 201){
                console.log("ok");
                  window.location.href="login.php";
               // $("html, body").animate({ scrollTop: 0 }, "slow");
              }
              else{
console.log("not ok");              }
            }
          });
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
</html>