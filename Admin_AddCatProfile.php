<?php

session_start();

 $catname="";
    $eyecolor="";
    $tail="";
    $sex="";
    $coat="";
    $temperent="";
    $location="";
    $description="";

if (isset($_POST['submit'])){
    
        if(getimagesize($_FILES['image']['tmp_name'])==FALSE)
            {
                echo "No image selected";
                
            }
            else
            {
               // $datetime=date("Y-m-d H:i:s");
                $image=addslashes($_FILES['image']['tmp_name']);
                $name=addslashes($_FILES['image']['name']);
                $image=file_get_contents($image);
                $image= base64_encode($image);
    $catname=$_POST['name'];
    $eyecolor=$_POST['eyecolor']; 
    $tail=$_POST['tail'];
    $sex=$_POST['sex'];
    $coat=$_POST['coat'];
    $temperent=$_POST['temperent'];
    $location=$_POST['location'];
    $description=$_POST['description'];
    $query="insert into cat_profile (cat_name,eye_color,tail_length,sex,coat,temperent,location,description,image,imagename)
    values('$catname','$eyecolor','$tail','$sex','$coat','$temperent','$location','$description','$image','$name')";
    $result=mysqli_query($dbc,$query);
    if($result)
    {
    header("Location: http://".$_SERVER['HTTP_HOST'].  dirname($_SERVER['PHP_SELF'])."/Admin_Cat.php");
    
    }
                else
                {
                    echo "U hab error";
                }
            }

            }
    





?>
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
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sugarkek</title>
<!--

-->
    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:100,300,400">   <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.min.css">                <!-- Font Awesome -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" href="css/magnific-popup.css">                                     <!-- Magnific pop up style -->
    <link rel="stylesheet" href="css/templatemo-style.css">                                   <!-- Templatemo style -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
</head>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
       <script src="js/jquery-1.11.3.min.js"></script>             <!-- jQuery (https://jquery.com/download/) -->
    <!--    <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script> <!-- Tether for Bootstrap, http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h --> 
        <script src="js/bootstrap.min.js"></script>                 <!-- Bootstrap (http://v4-alpha.getbootstrap.com/) -->
        <script src="js/jquery.singlePageNav.min.js"></script>      <!-- Single Page Nav (https://github.com/ChrisWojcik/single-page-nav) -->
        <script src="js/jquery.magnific-popup.min.js"></script>     <!-- Magnific pop-up (http://dimsemenov.com/plugins/magnific-popup/) -->
        
    <style>
    #imaginary_container{
    margin-top:20%; /* Don't copy this */
}
.stylish-input-group .input-group-addon{
    background: white !important; 
}
.stylish-input-group .form-control{
	border-right:0; 
	box-shadow:0 0 0; 
	border-color:#ccc;
}
.stylish-input-group button{
    border:0;
    background:transparent;
}
        .text-margin{
       margin:1em 0 .5em;
            display: block;
            

        }
        .profile{
        overflow: hidden;
max-width: 100%;
    height: 40%;
        
        }
        hr { 
    display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: 1px;
}
        .h3{
        z-index: 2;
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
    margin-left: 500px;
    
    
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

    </style>
    <style>
  paper-input {
    max-width: 400px;
    margin: auto;
  }
    </style>
    <style>
    
    paper-button {
    font-family: 'Roboto', 'Noto', sans-serif;
    font-weight: normal;
    font-size: 14px;
    -webkit-font-smoothing: antialiased;
  }
  paper-button.pink {
    color: var(--paper-pink-a200);
    --paper-button-ink-color: var(--paper-pink-a200);
  }
    </style>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="js/vendor/jquery.ui.widget.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<!--<script src="//blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<!--<script src="//blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
<!-- Bootstrap JS is not required, but included for the responsive demo navigation -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="js/jquery.fileupload.js"></script>
<!-- The File Upload processing plugin -->
<script src="js/jquery.fileupload-process.js"></script>
<!-- The File Upload image preview & resize plugin -->
<script src="js/jquery.fileupload-image.js"></script>
<!-- The File Upload audio preview plugin -->
<script src="js/jquery.fileupload-audio.js"></script>
<!-- The File Upload video preview plugin -->
<script src="js/jquery.fileupload-video.js"></script>
<!-- The File Upload validation plugin -->
<script src="js/jquery.fileupload-validate.js"></script>
<script>
/*jslint unparam: true, regexp: true */
/*global window, $ */
$(function () {
    'use strict';
    // Change this to the location of your server-side upload handler:
    var url = window.location.hostname === 'blueimp.github.io' ?
                '//jquery-file-upload.appspot.com/' : 'server/php/',
        uploadButton = $('<button/>')
            .addClass('btn btn-primary')
            .prop('disabled', true)
            .text('Processing...')
            .on('click', function () {
                var $this = $(this),
                    data = $this.data();
                $this
                    .off('click')
                    .text('Abort')
                    .on('click', function () {
                        $this.remove();
                        data.abort();
                    });
                data.submit().always(function () {
                    $this.remove();
                });
            });
    $('#fileupload').fileupload({
        url: url,
        dataType: 'json',
        autoUpload: false,
        acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
        maxFileSize: 999000,
        // Enable image resizing, except for Android and Opera,
        // which actually support image resizing, but fail to
        // send Blob objects via XHR requests:
        disableImageResize: /Android(?!.*Chrome)|Opera/
            .test(window.navigator.userAgent),
        previewMaxWidth: 100,
        previewMaxHeight: 100,
        previewCrop: true
    }).on('fileuploadadd', function (e, data) {
        data.context = $('<div/>').appendTo('#files');
        $.each(data.files, function (index, file) {
            var node = $('<p/>')
                    .append($('<span/>').text(file.name));
            if (!index) {
                node
                    .append('<br>')
                    .append(uploadButton.clone(true).data(data));
            }
            node.appendTo(data.context);
        });
    }).on('fileuploadprocessalways', function (e, data) {
        var index = data.index,
            file = data.files[index],
            node = $(data.context.children()[index]);
        if (file.preview) {
            node
                .prepend('<br>')
                .prepend(file.preview);
        }
        if (file.error) {
            node
                .append('<br>')
                .append($('<span class="text-danger"/>').text(file.error));
        }
        if (index + 1 === data.files.length) {
            data.context.find('button')
                .text('Upload')
                .prop('disabled', !!data.files.error);
        }
    }).on('fileuploadprogressall', function (e, data) {
        var progress = parseInt(data.loaded / data.total * 100, 10);
        $('#progress .progress-bar').css(
            'width',
            progress + '%'
        );
    }).on('fileuploaddone', function (e, data) {
        $.each(data.result.files, function (index, file) {
            if (file.url) {
                var link = $('<a>')
                    .attr('target', '_blank')
                    .prop('href', file.url);
                $(data.context.children()[index])
                    .wrap(link);
            } else if (file.error) {
                var error = $('<span class="text-danger"/>').text(file.error);
                $(data.context.children()[index])
                    .append('<br>')
                    .append(error);
            }
        });
    }).on('fileuploadfail', function (e, data) {
        $.each(data.files, function (index) {
            var error = $('<span class="text-danger"/>').text('File upload failed.');
            $(data.context.children()[index])
                .append('<br>')
                .append(error);
        });
    }).prop('disabled', !$.support.fileInput)
        .parent().addClass($.support.fileInput ? undefined : 'disabled');
});
</script>
        
        <body id="top" class="home">
    
   <div class="container-fluid">
            <div class="row">
              
                <div class="tm-navbar-container">
        
        
                <!-- navbar   -->
                <nav class="navbar navbar-full navbar-fixed-top">

                    <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
                        &#9776;
                    </button>
                        
                    <div class="collapse navbar-toggleable-sm" id="tmNavbar">                            

                         <ul class="nav navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="Admin_Homepage.php"><img height="40" src="cat_house.png"></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Admin_Cat.php"><img height="40" src="cat.png"></a>
                              
                            </li>
  
                            <li class="nav-item">
                                <a class="nav-link" href="admin_community.php"><img height="40" src="community.png"></a>
                            </li>
                            <!--<li class="nav-item">
                                <a class="nav-link external" href="columns.html">Columns</a>
                            </li>
                -->
                        </ul>

                    </div>
                  
                </nav>

              </div>  

           </div>
       
       <div class="container">
	<div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <div id="imaginary_container"> 
                
            </div>
        </div>
	</div>
</div>
       
          <div class="row">
          <!--    <form class="form-signin" method="post" enctype="multipart/form-data"> -->
                <section id="tm-section-3" class="tm-section">
                    <div class="tm-container text-xs-center">
                        
                        
                        <h1 class="blue-text tm-title"><paper-input class="blue-text tm-title" id="catname" label="Cat Name" ></paper-input></h1>
                        
                        
                        
                        <p class="margin-b-5">.</p>
                        
                       <div class="tm-gallery-img-container">
                                <a href="User_CatProfile.html">
                                    <img height="850" src="upload.png" id="blah"  class="profile"> <!-- 300x200 -->
                                    
                                </a>
                           <ul class="navbar-nav col-xs-12" id="post_header" role="navigation">
                     
                        <input onchange="read(this);" type="file" name="image" ><span class="glyphicon glyphicon-picture"></span>
                            
                        <script>
                                  function read(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
                               </script>
                        </ul>
                           
                           
                            </div>
                        
                        
                       
                    </div>
                    <div>
                        
                        <h3 class="text-margin"></h3><paper-input id="eye" class="blue-text tm-title" label="Eye Color" ></paper-input>
            <h3 class="text-margin"><paper-input id="tail"  label="Tail Length" ></h3>
                <h3 class="text-margin"><paper-input id="sex"  label="sex" ></h3>
                        <h3 class="text-margin"><paper-input id="coat" label="Coat" ></h3>
                    <h3 class="text-margin"><paper-input id="temperent" label="Temperent" ></h3>
                <h3 class="text-margin"><paper-input id="location" label="Location" ></h3>        
           
              </div>
                    
                </section>
              <hr>

              <div>
                  <h1>Description</h1>
                      <div class="col-xs-12" id="post_content">
                        <div class="textarea_wrap"><paper-input id="desc" label="Description" ></div>
                        </div>
                      
                  </div>
              
              <hr>
              <div>
 <!--
                  <div>
                  <h1>Photos</h1>
                        <paper-button class="pink">link</paper-button>
                         <ul class="navbar-nav col-xs-12" id="post_header" role="navigation">
                     
                        <input type="file" name="images" ><span class="glyphicon glyphicon-picture"></span>
                        
                        </ul>
                      
                  </div>           
              </div>
                  -->
              
                  <paper-button class="pink" onclick="addCat(catname.value,eye.value,tail.value,sex.value,coat.value,temperent.value,location.value,desc.value)">Add Cat</paper-button>
           <!--   </form> -->
            </div>
              
            </div>
        
        </body>
    <script>
        
        function checkUnique(catname){
        var b=true;
            $.ajax({
            
                type: "GET",
                url: "http://127.0.0.1:8080/db/cats/?filter={'catname': '"+ catname +"'}",
                dataType: "json",
                success: function(response){
                if(response._returned >0){
                response =response._embedded;
                b=false;
                console.log("exist");
            }
            
            },
                   async: false,
                   error: function(jqXHR, exception){
            
            }
            
            });
        console.log(b);
     //   return b;
        }
        
        
        
        
    function addCat(name,eye,tail,sex,coat,temperent,location,desc){
    if(name=="" && eye=="" && tail=="" && sex=="" && coat=="" && temperent=="" && location=="" && desc==""){
    console.log(name);
        console.log(eye);
        console.log(tail);
        console.log(sex);
        console.log(coat);
        console.log(temperent);
        console.log(location);
        console.log(desc);
    }else
        var mongo="http://127.0.0.1:8080/db/cats";
        var restBody = '{"catname":"' + name + '", "eye":"' + eye +'","tail":"' + tail +'","sex":"' + sex +'", "coat":"'+ coat +'","temperent":"'+ temperent +'","location":"'+ location +'","desc":"'+ desc +'"}';
          console.log(restBody);
         console.log(location);
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
                  alert("Profile Added!");
               // $("html, body").animate({ scrollTop: 0 }, "slow");
              }
              else{
console.log("not ok");              }
            }
          });
        }
    
    
    </script>
    
    
    
    
    
   



</html>
    