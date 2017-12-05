
<?php
session_start();
//require_once('../mysql_connect.php');
if(isset($_GET['name'])){
$id=$_GET['name'];
/*
$query = "SELECT * from cat_profile where catID='".$id."'";
 $result=mysqli_query($dbc,$query);
  while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
    $catname=$row['cat_name'];
    $eyecolor=$row['eye_color'];
    $tail=$row['tail_length'];
    $sex=$row['sex'];
    $coat=$row['coat'];
    $temperent=$row['temperent'];
    $location=$row['location'];
    $description=$row['description'];
      $image=$row['image'];
}
*/
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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
</head>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
       <script src="js/jquery-1.11.3.min.js"></script>             <!-- jQuery (https://jquery.com/download/) -->
        <script src="js/bootstraps.min.js"></script>                 <!-- Bootstrap (http://v4-alpha.getbootstrap.com/) -->
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

            
    .image-frame {
	float: left;
	position: relative;
	margin: 5px;
	color: #333;
}
.image-frame .image-caption {
	display: none;
	opacity: 0.8;
	background:transparent;
	width: 200px;
	position: absolute;
	bottom: 0px;
	padding: 5px;
}    
    </style>
    <script>
    
    $(document).ready(function() {
    $('.image-frame').hover(function(){
		$('.image-caption',this).slideToggle('slow');
	}, function(){
		$('.image-caption',this).slideToggle('slow');
    });
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

                <section id="tm-section-3" class="tm-section">
                    <div class="tm-container text-xs-center">
                        <div id="cat"></div>
                    
<h1 class="blue-text tm-title"><?//php echo $catname; ?><button type="submit" onclick="deletecat(<?php echo $id; ?>)">
                            <span class="glyphicon glyphicon-search">
                                
                              <img height="35" src="injure.jpeg">  </a>
                            </span>
                        </button></h1>
                   <!--     
                        <p class="margin-b-5">.</p>
                        
                       <div class="tm-gallery-img-container">
                                <a href="User_CatProfile.html">
                                  
                                    <?php// echo '<img height="850"  class="profile" src="data:image;base64,'.$image.'">';?>
                                </a>
                           
                           
                           
                            </div>
                        
                        
                       
                    </div>
                    <div>
                        
              <h3 class="text-margin">Eye Color:<?//php echo $eyecolor?></h3>
            <h3 class="text-margin">Tail Length:<?//php echo $tail?> inch</h3>
                <h3 class="text-margin">Sex:<?//php echo $sex?></h3>
                        <h3 class="text-margin">Coat:<?//php echo $coat?></h3>
                <h3 class="text-margin">Temperent:<?//php echo $temperent?></h3>
                        <h3 class="text-margin">Where to Find:<?//php echo $location?></h3>
              </div>
                    
                </section>
              <hr>
              <div>
              <h1>Description</h1>
                  <p><?php //echo $description?>
-->
</p>
              </div>
              
              
              <script>
                  function deletecat(id){
                  $.ajax({
                        type: "DELETE",
                        url: "http://127.0.0.1:8080/db/cats/?filter={'catname': '"+ id +"'}",
                        dataType: "json",
                        complete: function(jqXHR, exception){
              console.log(jqXHR.status);
              console.log(jqXHR.responseText);
              if(jqXHR.status == 201){
                console.log("ok");
                  alert("Profile deleted!");
                  window.location.href="Admin_Cat.php";
               // $("html, body").animate({ scrollTop: 0 }, "slow");
              }
              else{
console.log("not ok");              }
            }
                  
                  
                  
                  
                  
                  
                  
                  });
                  
                  }
              
              function getCat(id){
            $.ajax({
            
                type: "GET",
                url: "http://127.0.0.1:8080/db/cats/?filter={'catname': '"+ id +"'}",
                dataType: "json",
                success: function(response){
                if(response._returned >0){
                response =response._embedded;
               // b=false;
                console.log("exist");
                    var cat= '';
                    for(var i=0;i < response.length; i++){
                        if(i ==response.length -1){
                        cat+='<h1 class="blue-text tm-title">'+ response[i].catname +'<button type="submit">'
                            +'<span class="glyphicon glyphicon-search"><a href="#kekmalu"><img height="35" src="injure.jpeg"></a></span></button></h1>'
                            +'<div class="tm-gallery-img-container"><a href="User_CatProfile.html"></a></div>'
                            +''
                            +'<h3 class="text-margin">Eye Color:'+ response[i].eye +'</h3><h3 class="text-margin">Tail Length:'+ response[i].tail +' inch</h3><h3 class="text-margin">Sex:'+ response[i].sex +'</h3><h3 class="text-margin">Coat:'+ response[i].coat+' +</h3>'
                            +'<h3 class="text-margin">Temperent:'+ response[i].temperent +'</h3><h3 class="text-margin">Where to Find:location</h3>'
                            + '</div></section><hr><div><h1>Description</h1><p>'+ response[i].desc +'</p>'
                        
                        }
                    }
                    
                    $('#cat').html(cat);
                    
                    
            }
            
            },
                  
            
            });
       // console.log(b);
     //   return b;
        }
              
              
              </script>
              
              <hr>
              <div>
              <h1>More Photos</h1>
              <div class="tm-container text-xs-center">
 
                        <p class="margin-b-5">.</p>
                       
                        <div class="tm-img-grid">
                            <div class="tm-gallery-img-container">
                                <div class="image-frame">
                                <a href="img/file3.webp" class="tm-gallery-img-link">
                                    <img height="500px" src="cat4.jpg" alt="Image" class="img-fluid tm-gallery-img">
                                    <div class="image-caption">
                                            <h2>Catmeup</h2>
	                                   </div>
                                    
                                    <!-- 300x200 -->
                                </a>   
                             </div>
                            </div>
                            <div class="tm-gallery-img-container">
                                <a href="img/file2.webp" class="tm-gallery-img-link">
                                    <img src="cat2.jpg" alt="Image" class="img-fluid tm-gallery-img"> <!-- 300x200 -->
                                </a>
                            </div>
                            <div class="tm-gallery-img-container">
                                <a href="img/file3.webp" class="tm-gallery-img-link">
                                    <img src="cat3.jpg" alt="Image" class="img-fluid tm-gallery-img"> <!-- 300x200 -->
                                </a>                           
                            </div>
                            <div class="tm-gallery-img-container">
                                <a href="img/file3.webp" class="tm-gallery-img-link">
                                    <img height="500px" src="cat4.jpg" alt="Image" class="img-fluid tm-gallery-img"> <!-- 300x200 -->
                                </a>                           
                            </div>
                    
                        
                      
                        </div>
                    </div>
                  
                  
                  <hr>
                  <div>
                  <h1>Community Post<?php echo $id; ?></h1>
                        <div class="f-card">

                                        
                                            <div class="header">
                                              <div class="options"><i class="fa fa-chevron-down"></i></div>
                                              <img class="co-logo" src="https://www.w3schools.com/howto/img_avatar2.png" />
                                              <div class="co-name"><a href="#">Catmalu187</a></div>
                                              <div class="time"><a href="#">2hrs</a> · <i class="fa fa-globe"></i></div>
                                            </div>
                                            <div class="content">
                                              <p>The compassion exhibited by this homeless woman in Ho Chi Minh for the equally homeless cats is very inspiring. Often, the most generous people on Earth are also those who do not have much. See More</p>
                                            </div>
                                          
                                            <div class="reference">
                                              <img class="reference-thumb" src="http://www.chicagobusiness.com/apps/pbcsi.dll/storyimage/CG/20160405/NEWS07/160409939/AR/0/feral-cats.jpg" />
                                              <div class="reference-content">
                                                <div class="reference-title">Le Thi Quy: The Cat’s Mother - NOWNESS</div>
                                                <div class="reference-subtitle">Australian director Andrew Piggott and Doan Phuong Ha's latest short, Le Thi Quy(The Cat's Mother), tells the story of one Ho Chi Minh City resident who opens her home as a refuge for the city's cats. Read more on NOWNESS - http://bit.ly/2pn8tOC</div>
                                                <div class="reference-font">placeholder.it</div>
                                              </div>
                                            </div>
                                            <div class="social">
                                              <div class="social-content"></div>
                                              <div class="social-buttons">
                                                <span><i class="fa fa-thumbs-up"></i>Love</span>
                                                <span><i class="fa fa-comment"></i>Comment</span>
                                                <span><i class="fa fa-share"></i>Report</span></div>
                                            </div>
                                          </div>
                      
                      
                      <div class="whats">
                              <div class="col-xs-12 col-sm-7" id="new_status">
                        <ul class="navbar-nav col-xs-12" id="post_header" role="navigation">
                       
                        <li><a href="#"><span class="glyphicon glyphicon-picture"></span>Add Photos/Video</a></li>
                        
                        </ul>
                        <div class="col-xs-12" id="post_content">
                        <div class="textarea_wrap"><textarea class="col-xs-11" placeholder="What's on your cat-loving mind?"></textarea></div>
                        </div>
                        <div class="col-xs-12" id="post_footer">
                        <div class="col-xs-5">
                            <button class="btn btn-primary">Post</button>
                        </div>
                        </div>
                    </div>
                </div>
                  </div>
                  
              </div>
              

            </div>
       
       
       
            </div>
        
            
         <?php 


echo '<script type="text/javascript">',
     'getCat("'.$id.'");',
     '</script>'
;
?> 
        
            
        
        </body>
    
    
    
    
   



</html>
    