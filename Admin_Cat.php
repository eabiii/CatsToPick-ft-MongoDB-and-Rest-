<?php 

session_start();

?>

<html>
    <link rel="import" href="bower_components/polymer/polymer-element.html">
<link rel="import" href="bower_components/paper-button/paper-button.html">
<link rel="import" href="bower_components/iron-input/iron-input.html">
<link rel="import" href="bower_components/paper-input/paper-input.html">
<link rel="import" href="bower_components/paper-dropdown-menu/paper-dropdown-menu.html">
<link rel="import" href="bower_components/paper-item/paper-item.html">
<link rel="import" href="bower_components/paper-listbox/paper-listbox.html">
<link rel="import" href="bower_components/iron-autogrow-textarea/iron-autogrow-textarea.html">
<link rel="import" href="bower_components/iron-ajax/iron-ajax.html">
   <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sugarkek</title>
<!--

-->
    <!-- load stylesheets -->
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
    
   <div onload="showIT()" class="container-fluid">
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
                <div class="input-group stylish-input-group">
                    <input type="text" class="form-control"  placeholder="Search" >
                    <span class="input-group-addon">
                        <button type="submit">
                            <span class="glyphicon glyphicon-search">
                                <a href="#.html">
                              <img height="35" src="search-512.png">  </a>
                            </span>
                        </button> 
                        <button type="submit">
                        <a href="Admin_AddCatProfile.php">
                        <img height="35" src="add.png">  </a>
                        </button>
                    </span>
                </div>
            </div>
            
        </div>
	</div>
              
</div>
       
          <div class="row">

                <section id="tm-section-3" class="tm-section">
                    <div class="tm-container text-xs-center">
                        
                        <h2 class="blue-text tm-title">Cat Profile</h2>
                        <p class="margin-b-5">.</p>
                       
                        <div class="tm-img-grid">
                            
                            <?php
                            /*
                            $query="select * from cat_profile";
                            $result=mysqli_query($dbc,$query); 
                            while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                            {
                            $id=$row["catID"];
                            
                            ?>
                            
                            
                            
                            
                            <div class="tm-gallery-img-container">
                                <div class="image-frame">
                                <a href="Admin_CatProfile.php?id=<?php echo $id; ?>" class="tm-gallery-img-link">
                                    <!--<img height="500px" src="cat1.jpg" alt="Image" class="img-fluid tm-gallery-img">-->
                                    <?php echo '<img height="600" width="600"  class="img-fluid tm-gallery-img" src="data:image;base64,'.$row['image'].'">';?>
                                    <div class="image-caption">
                                            <h2><?php echo $row["cat_name"];?></h2>
	                                   </div>
                                    
                                    <!-- 300x200 -->
                                </a>   
                             </div>
                            </div>
                            <?php
                            }
                            */
                            ?>
                            
                            
                          
                        
                      
                        </div>
                        <div id="catprofile">
                        
                        </div>
                        
                        <script>
                        
                            
                            
                            
                            
                          function showCat(){
    $.ajax({
      type: "GET",
      url: "http://127.0.0.1:8080/db/cats",
      dataType: "json",
      success: function(response){
        console.log(response);
        response = response._embedded;
        var cat = '';
        cat += '<div class="row">';
        for(var i = 0; i < response.length; i++){
          if(i == response.length - 1){
            cat += '<div class="col-md-3">'
                + '<div class="card text-white bg-success" style="height:12rem;">'
                + '<div class="card-body text-center">'
                + '<a href="Admin_CatProfile.php?name=' + response[i].catname + '" class="text-white"><h4 class="card-title">' + response[i].catname + ' ' + response[i].id + '</h4></a>'
                + '</div></div>';
          }else{
            cat += '<div class="col-md-3">'
                + '<div class="card text-white bg-success" style="height:12rem;">'
                + '<div class="card-body text-center">'
                + '<a href="Admin_CatProfile.php?name=' + response[i].catname + '" class="text-white"><h4 class="card-title">' + response[i].catname + ' ' + response[i].eye + '</h4></a>'
                + '</div></div></div>';
          }
        }
        cat += '</div>';
        $('#catprofile').html(cat);
      },
      error: function(jqXHR, exception){
        console.log(jqXHR);
      }
    });
  }
                    
                        
                        
                        </script>
                                <?php 


echo '<script type="text/javascript">',
     'showCat();',
     '</script>'
;
?>
                    </div>
                </section>

            </div>
       
       
       
            </div>
        
            
        
        
            
        
        </body>
    
    
    
    
   



</html>
    