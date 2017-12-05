<?php
session_start();

?>

<html>
    
    
       <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="generator" content="Polymer Starter Kit">
       <meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1, user-scalable=yes">
        <title>User Homepage</title>
    <!--
    
    -->
        <!-- load stylesheets -->
          <!-- Google web font "Open Sans" -->
        <link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.min.css">                <!-- Font Awesome -->
        <link rel="stylesheet" href="css/bootstrap.min.css">                                      <!-- Bootstrap style -->
        <link rel="stylesheet" href="css/magnific-popup.css">                                     <!-- Magnific pop up style -->
        <link rel="stylesheet" href="css/templatemo-style.css">                                   <!-- Templatemo style -->
    
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
              <![endif]-->
    
<style>
    body {
font-family: "Lato", sans-serif;
}

.icon-bar {
width: 100%; /* Full-width */
background-color: #555; /* Dark-grey background */
overflow: auto; /* Overflow due to float */
position: fixed;
top:0;
z-index: 2;
}

.icon-bar a {
float: left; /* Float links side by side */
text-align: center; /* Center-align text */
width: 25%; /* Equal width (5 icons with 20% width each = 100%) */
padding: 12px 0; /* Some top and bottom padding */
transition: all 0.3s ease; /* Add transition for hover effects */
color: white; /* White text color */
font-size: 36px; /* Increased font size */
}

.icon-bar a:hover {
background-color: rgb(87, 163, 94); /* Add a hover color */
}

.active {
background-color: #4CAF50; /* Add an active/current color */
}

.leftnav {
height: 100%;
width: 180px;
position: fixed;
z-index: 1;
top: 54px;
left: 0;
overflow-x: hidden;
padding-top: 20px;
}

.leftnav p {
text-align: center;
text-decoration: none;
font-size: 25px;
color: #818181;
display: block;
}

.leftnav a:hover {
color: #f1f1f1;
}

.leftnav img {
display: block;
margin: auto;
width: 100px;
height: auto;
border-radius: 50%;
}

.leftnav button {
-webkit-transition-duration: 0.4s; /* Safari */
transition-duration: 0.4s;

height:40px; 
width:100px; 
margin: -20px -50px; 
position:relative;
top:50%; 
left:50%;


}

.leftnav button:hover {
background-color: #4CAF50; /* Add an active/current color */
color: white;

}

.main {
border-style: solid;
border-width: thin;
background-color: #219234;
background-image: url("catbkg.jpg");


margin-top: 50px; /* Add a top margin to avoid content overlay */
margin-left: 180px; /* Same as the width of the leftnav */
margin-right: 180px; /* Same as the width of the leftnav */

}

/* On smaller screens, where height is less than 450px, change the style of the leftnav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
.leftnav {padding-top: 15px;}
.leftnav a {font-size: 18px;}
}

.rightnav {
height: 100%;
width: 180px;
position: fixed;
z-index: 1;
top: 54px;
right: 0;
overflow-x: hidden;
transition: 0.5s;
padding-top: 20px;
}

.rightnav p {
text-align: center;
text-decoration: none;
font-size: 25px;
color: #818181;
display: block;
}

.dropbtn {
margin-right: 10px;
background-color: #4CAF50;
color: white;
padding: 16px;
font-size: 16px;
border: none;
cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
background-color: #3e8e41;
}

.dropdown {
margin-top:250px;
position: relative;
display: inline-block;
z-index: 0;
}

.dropdown-content {
display: none;
position: absolute;
background-color: #f9f9f9;
min-width: 160px;
overflow: auto;
box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
z-index: 1;
}

.dropdown-content a {

color: black;
padding: 12px 16px;
text-decoration: none;
display: block;
}

.dropdown a:hover {background-color: #f1f1f1}

.show {display:block;}

*/ Style inputs, select elements and textareas */
input[type=text], select, textarea{
width: 300px;
height: 100px;
padding: 12px;
border: 1px solid #ccc;
border-radius: 4px;


}

/* Style the label to display next to the inputs */
label {
padding: 12px 12px 12px 0;
display: inline-block;
}

/* Style the submit button */
input[type=submit] {
margin-right: 10px;
background-color: #4CAF50;
color: white;
padding: 12px 20px;
border: none;
border-radius: 4px;
cursor: pointer;
float: right;
}

/* Clear floats after the columns */
.row:after {
float: left;
width: 500px;
margin-top: 6px;
content: "";
display: table;
clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
.col-25, .col-75, input[type=submit] {
width: 100%;
margin-top: 0;
}
}









*, *:before, *:after {
-webkit-box-sizing: border-box;
   -moz-box-sizing: border-box;
        box-sizing: border-box;
}

body {
background-color:#e9ebee;
}

.container{
margin-top:280px;
}

.f-card {
background-color:white;
/*height:400px;*/
width:502px;
border: 1px solid #d0d1d5;
border-radius:3px;
margin: auto;
margin-bottom:10px;
padding: 12px; 

box-shadow: 0 0 5px rgba(0, 0, 0, .30); /* Not original, just a test */
}

.header {
margin-bottom:17px;
}

.co-logo {
/*display:block;*/
float:left;
margin-right:8px;
border-radius: 50%;

width:40px;
height:40px;
}

.co-name > a {
font-family: Helvetica;
font-size:14px;
font-weight: bold;
line-height: 1.38;
color: #36994f;
text-decoration:none;

margin-bottom:2px;
}

.co-name > a:hover {
text-decoration:underline;
}

.time {
font-family: Helvetica;
font-size:12px;
color: #90949c;
}

.time > a {
color: #90949c;
text-decoration:none;
}

.time > a:hover {
text-decoration:underline;
}

.options {
font-family: Helvetica;
font-size:12px;
color: #e5e5e5;
float:right;
}

.options:hover {
color: black; /* Fallback */
color: rgba(0, 0, 0, .30);
}

.content {
clear:both;
font-family: Helvetica, sans-serif;
font-size:14px;
line-height: 1.38;
}

.reference {
width:476px;
}
.reference-thumb {
display:block;
width:476px;
height:249px;
}

.reference-content {
border: 2px solid black;
border: 2px solid rgba(0, 0, 0, .1);
border-top: 0;
padding: 10px 12px 10px 12px;
}

.reference:hover .reference-content {
border-color: black; /* Fallback */
border-color: rgba(0, 0, 0, .15);
}

.reference-title {
font-family: Georgia;
font-size: 18px;
font-weight: 500;
line-height: 22px;

margin-bottom:5px;
}

.reference-subtitle {
font-family: Helvetica;
font-size:12px;
line-height: 16px; 
}

.reference-font {
color: #90949c;
font-family: Helvetica;
font-size: 11px;
line-height: 11px;
text-transform: uppercase;

padding-top:9px; 
}

.social {
margin-top:12px;
}
.social-buttons {
color: #7f7f7f;
font-family: Helvetica;
font-size: 12px;
font-weight:bold;
line-height:14px;

border-top:1px solid #e5e5e5;
padding-top:4px;

}

.social-buttons span {
font-size: 12px;
margin-right:20px;
padding:4px 4px 4px 0;
}

.social-buttons span:hover {
text-decoration:underline;
cursor:pointer;
}

.social-buttons span i {
padding-right:4px;
}




.whats {
margin-left: 250px;

}



#new_status {
width:502px;
background-color: #FFF;
border-radius: 5px;
box-shadow: 1px 0 10px #AAA;
font-family: 'Helvetica Neaue', 'Helvetica', sans-serif;
margin-top: 1rem;
padding: 0;
}

#post_header {
border-bottom: solid #E8E8E8 1px;
margin: 0 2%;
padding: 0.65rem 0;
width: 95.75%;
}
#post_header li {
display: inline-block;
}
#post_header a {
font-size: 1.2rem;
padding: 1rem 0;
text-decoration: none;
}
#post_header li+li {
border-left: solid #E8E8E8 1px;
}
#post_header li:first-child a {
padding: 0 1rem 0 0;
}
#post_header li:nth-child(2) a {
padding: 0 1rem;
}
#post_header li:last-child a {
padding: 0 0 0 1rem;
}
#post_header .glyphicon {
margin-right: 0.5rem;
}

#post_content {
margin: 0 2%;
padding: 0;
width: 95.75%;
}
#post_content img {
border: solid #DDD 1px;
margin: 1.25rem 0;
padding: 0;
}
#post_content .textarea_wrap {
cursor: text;
}
#post_content textarea {
border: 0;
margin: 0rem 0 0.5rem 0;
outline: 0;
padding: 2.5rem 0 0 1.25rem;
resize: none;
}

#post_footer {
border-top: solid #E8E8E8 1px;
line-height: 3rem;
padding: 0 2% 0 3%;
}
#post_footer .navbar-nav {
padding: 0;
}
#post_footer .navbar-nav li {
display: inline-block;
}
#post_footer .navbar-nav a {
display: block;
padding: 2rem 1.25rem 2.2rem 1.25rem;
}
#post_footer .navbar-nav .glyphicon {
line-height: 0;
}
#post_footer :not(.btn) .glyphicon {
color: #999;
}
#post_footer div {
padding: 0;
text-align: right;
}
#post_footer .btn {
border-radius: 2px;
font-size: 1.2rem;
font-weight: bold;
line-height: 2.2rem;
margin-top: 0.75rem;
padding: 0 0.75rem;
vertical-align: middle;
}
#post_footer .btn-default {
color: #666;
margin-right: 0.5rem;
}
#post_footer .btn-default .glyphicon {
color: #666;
margin-right: 0.5rem;
}
#post_footer .caret {
color: #666;
margin-left: 0.5rem;
}
#post_footer .btn-primary {
background-color: #4ea259;
padding: 0 2rem;
}






.button {
  font-size: 1em;
  padding: 10px;
  color: #fff;
  border: 2px solid #06D85F;
  border-radius: 20px/50px;
  text-decoration: none;
  cursor: pointer;
  transition: all 0.3s ease-out;
}
.button:hover {
  background: #06D85F;
}

.overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
  margin: 70px auto;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  width: 30%;
  position: relative;
  transition: all 5s ease-in-out;
}

.popup h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup .close:hover {
  color: #06D85F;
}
.popup .content {
  max-height: 30%;
  overflow: auto;
}

@media screen and (max-width: 700px){
  .box{
    width: 70%;
  }
  .popup{
    width: 70%;
  }
}







</style>

    
    </head>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
           <script src="js/jquery-1.11.3.min.js"></script>             <!-- jQuery (https://jquery.com/download/) -->
            <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script> <!-- Tether for Bootstrap, http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h --> 
            <script src="js/bootstrap.min.js"></script>                 <!-- Bootstrap (http://v4-alpha.getbootstrap.com/) -->
            <script src="js/jquery.singlePageNav.min.js"></script>      <!-- Single Page Nav (https://github.com/ChrisWojcik/single-page-nav) -->
            <script src="js/jquery.magnific-popup.min.js"></script>     <!-- Magnific pop-up (http://dimsemenov.com/plugins/magnific-popup/) -->
            
        
        
            
            <body>

            <div class="icon-bar">
                    <a class="nav-link" href="Admin_Homepage.php"><img height="30" src="cat_house.png"></a>
                    <a class="nav-link" href="Admin_Cat.php"><img height="30" src="cat.png"></a>
                    <a class="nav-link" href="admin_community.php"><img height="30" src="community.png"></a>
                     
            </div>

            
            <div class="main">
                    
                                            
}
?>      
                                        


<script>
 

</script>

<?php



  if(isset($_FILES["imageFile"]["name"])){
    $validextensions = array("jpeg", "jpg", "png");
    $temporary = explode(".", $_FILES["imageFile"]["name"]);
    $file_extension = end($temporary);
    if ((($_FILES["imageFile"]["type"] == "image/png") || ($_FILES["imageFile"]["type"] == "image/jpg") || ($_FILES["imageFile"]["type"] == "image/jpeg")) && ($_FILES["imageFile"]["size"] < 1000000000)){
      if ($_FILES["imageFile"]["error"] > 0) {
        echo "Return Code: " . $_FILES["imageFile"]["error"] . "<br/><br/>";
      } else {
        /*
        echo "<span>Your File Uploaded Succesfully...!!</span><br/>";
        echo "<br/><b>File Name:</b> " . $_FILES["myFile"]["name"] . "<br>";
        echo "<b>Type:</b> " . $_FILES["myFile"]["type"] . "<br>";
        echo "<b>Size:</b> " . ($_FILES["myFile"]["size"] / 1024) . " kB<br>";
        echo "<b>Temp file:</b> " . $_FILES["myFile"]["tmp_name"] . "<br>";
        echo "<p>Hello</p>";
        */
        move_uploaded_file($_FILES["imageFile"]["tmp_name"], "/Applications/XAMPP/xamppfiles/htdocs/phptest/" . $_FILES["imageFile"]["name"]);
      }
    }
  }
  ?>


                
                   <div class="f-card">

                          <div class="col-xs-12 col-sm-7" id="new_status">
                    <ul class="navbar-nav col-xs-12" id="post_header" role="navigation">
                  <!--    <form action=" method="post" enctype="multipart/form-data"> ---->


                     <input type="text" id="video" name="video" placeholder="Video Url"> 
                          <input type="file" name="image" accept=".jpg, .jpeg" placeholder="UPLOAD"> 
                          

                    </ul>
                    <div class="col-xs-12" id="post_content">

                    <div class="textarea_wrap"><textarea id="description" name="description" class="col-xs-11" placeholder="What's on your cat-loving mind?"></textarea></div>
                    
                    </div>
                    <div class="col-xs-12" id="post_footer">
                    <div class="col-xs-5">
                        <button type="submit" name="submit" onclick="addPost(description.value, video.value)" class="btn btn-primary">Post</button>
                        </form>
                    </div>
                    </div>
                </div>
            </div>

                          <div class="container">

            <div id="userPost">
                        
            </div>
                              

          



            <div id="myleftnav" class="leftnav">
                    <img src="img_avatar.png" alt="Avatar">
                    <p><?php echo $user;?></p>
                <a href="logout.php"> <button>LOGOUT</button></a>
                

                  </div>
                  

                  
           <div id="myrightnav" class="rightnav">
                    <a href="Admin_Events.php"> <p>Events</p></a>
                

</div>

            </body> 

           

                
                
                <div id="popup1" class="overlay">
                    <div class="popup">
                        <h2>Comment</h2>
                        <a class="close" href="#">&times;</a>
                        <div class="content">

                        </div>
                    </div>
                </div>
        
     
<script>




var utc = new Date().toJSON().slice(0,10).replace(/-/g,'/');

  function getVideoId(url) {
    var regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/;
    var match = url.match(regExp);

    if (match && match[2].length == 11) {
        return match[2];
    } else {
        return 'error';
    }
}

    function addPost(description, video){
      if(video){
        var ytl = getVideoId(video);
      }
      if(!video){
        var ytl = "";
      }
      

      if(video ==""){
        console.log("No video");
      }
    if(description==""){
    console.log("No user");
    }else
        var mongo="http://127.0.0.1:8080/db/statusPost";
        var restBody = '{"user":"' + "admin" + '", "description":"' + description + '","videoURL":"' + ytl + '","date":"' + utc +'"}';
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
               
              }
              else{
                  console.log("not ok");              }
            }
          });
          location.reload();
        }
    


  function showPost(){
    $.ajax({
      type: "GET",
      url: "http://127.0.0.1:8080/db/statusPost",
      dataType: "json",
      success: function(response){
        console.log(response);
        response = response._embedded;
        var post = '';
        post += '<div class="row">';
        for(var i = 0; i < response.length; i++){
          var vidURL = response[i].videoURL;



          if(i == response.length - 1){
            if(!response[i].videoURL ){
              post += '<div class="f-card"><div class="header">'
                + '<div class="options"><i class="fa fa-chevron-down"></i></div>'
                + '<img class="co-logo" src="https://www.w3schools.com/howto/img_avatar2.png" />'
                + '<div class="co-name"><a href="#">'+ response[i].user+'</a></div>'
                + '<div class="time"><a href="#">'+ response[i].date +'</a> · <i class="fa fa-globe"></i></div>'
                + '</div>'
                + '<div class="content">'
                + '<p>'+response[i].description+'</p>'
                + '</div>'
                + '<div class="reference">'
                + '</div>'
                + '<div class="social">'
                + '<div class="social-content"></div>'
                + '<div class="social-buttons">'
                + '<span><i class="fa fa-thumbs-up"></i>Love</span>'
                + '<span>'
                + '<span><i class="fa fa-share" id="report"></i>Report</span></div>'

                + '</div></div>';
            }
            else{
            post += '<div class="f-card"><div class="header">'
                + '<div class="options"><i class="fa fa-chevron-down"></i></div>'
                + '<img class="co-logo" src="https://www.w3schools.com/howto/img_avatar2.png" />'
                + '<div class="co-name"><a href="#">'+ response[i].user+'</a></div>'
                + '<div class="time"><a href="#">'+ response[i].date +'</a> · <i class="fa fa-globe"></i></div>'
                + '</div>'
                + '<div class="content">'
                + '<p>'+response[i].description+'</p>'
                + '</div>'
                + '<div class="reference">'
                + '<iframe class=//www.youtube.com/embed/"reference-thumb" src='+response[i].videoURL+'></iframe>'
                + '</div>'
                + '<div class="social">'
                + '<div class="social-content"></div>'
                + '<div class="social-buttons">'
                + '<span><i class="fa fa-thumbs-up"></i>Love</span>'
                + '<span>'
                + '<span><i class="fa fa-share" id="report"></i>Report</span></div>'

                + '</div></div>';
              }
          }else{
            if(!response[i].videoURL !=""){
              post += '<div class="f-card"><div class="header">'
                + '<div class="options"><i class="fa fa-chevron-down"></i></div>'
                + '<img class="co-logo" src="https://www.w3schools.com/howto/img_avatar2.png" />'
                + '<div class="co-name"><a href="#">'+ response[i].user+'</a></div>'
                + '<div class="time"><a href="#">'+ response[i].date +'</a> · <i class="fa fa-globe"></i></div>'
                + '</div>'
                + '<div class="content">'
                + '<p>'+response[i].description+'</p>'
                + '</div>'
                + '<div class="reference">'
                + '</div>'
                + '<div class="social">'
                + '<div class="social-content"></div>'
                + '<div class="social-buttons">'
                + '<span><i class="fa fa-thumbs-up"></i>Love</span>'
                + '<span>'
                + '<span><i class="fa fa-share" id="report"></i>Report</span></div>'

                + '</div></div>';
            }
            else{
            post += '<div class="f-card"><div class="header">'
                + '<div class="options"><i class="fa fa-chevron-down"></i></div>'
                + '<img class="co-logo" src="https://www.w3schools.com/howto/img_avatar2.png" />'
                + '<div class="co-name"><a href="#">'+ response[i].user+'</a></div>'
                + '<div class="time"><a href="#">'+ response[i].date +'</a> · <i class="fa fa-globe"></i></div>'
                + '</div>'
                + '<div class="content">'
                + '<p>'+response[i].description+'</p>'
                + '</div>'
                + '<div class="reference">'
                + '<iframe class="reference-thumb" src=//www.youtube.com/embed/'+response[i].videoURL+'></iframe>'
                + '</div>'
                + '<div class="social">'
                + '<div class="social-content"></div>'
                + '<div class="social-buttons">'
                + '<span><i class="fa fa-thumbs-up"></i>Love</span>'
                + '<span>'
                + '<span><i class="fa fa-share" id="report"></i>Report</span></div>'

                + '</div></div>';
              }
          }
        }
        post += '</div>';
        $('#userPost').html(post);
      },
      error: function(jqXHR, exception){
        console.log(jqXHR);
      }
    });
  }


    </script>

    <?php 


echo '<script type="text/javascript">',
     'showPost();',
     '</script>'
;
?>







    
    
    
    </html>
        