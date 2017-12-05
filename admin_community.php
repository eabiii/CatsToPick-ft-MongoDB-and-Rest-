<html>
        
        
           <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
        
            <title>Community</title>
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

/* Style the container */
.catDay {
  border-style: solid;
  border-width: thin;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.catDay h1{
    text-align: center;
}

.catDay h2{
    text-align: center;
}

.catDay img{
    display: block;
    margin: auto;
    width: 300px;
    height: auto;
    border-radius: 50%;
}

.trending {
  height: 390px;
  border-style: solid;
  border-width: thin;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  margin-bottom: 10px; /* Add a top margin to avoid content overlay */
  white-space: nowrap;
  overflow: auto;
}

.events {
 
  height: 400px;
  border-style: solid;
  border-width: thin;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  margin-bottom: 10px; /* Add a top margin to avoid content overlay */
  white-space: nowrap;
  overflow: auto;

  
}


.main {
    margin-top: 50px; /* Add a top margin to avoid content overlay */
    margin-left: 180px; /* Same as the width of the leftnav */
    margin-right: 180px; /* Same as the width of the leftnav */


    
    
}

.catDay {
    margin-bottom: 10px; /* Add a top margin to avoid content overlay */

    
}


.card {
    /* Add shadows to create the "card" effect */
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 250px;
    float:left;
    margin-left: 20px;
    object-fit: cover;
}

/* On mouse-over, add a deeper shadow */
.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
.card img {
    border-radius: 5px 5px 0 0;
}


/* Add some padding inside the card container */
.container {
    padding: 2px 16px;
}

/* On smaller screens, where height is less than 450px, change the style of the leftnav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
    .leftnav {padding-top: 15px;}
    .leftnav a {font-size: 18px;}
}

.body {
}










</style>

<script>
    /* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
        
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
                    <div class="catDay">
                        <h1>Cat of the Day</h1>
                        <br>
                        <img src="catday.png" alt="Catday">
                        <h2>Felix</h2>
                    </div>

                    <div class="trending">
                            <h1>Trending</h1>
                            <br>
                            <div class="card">
                                    <img src="https://i.redd.it/vcq8cogpwttz.jpg" alt="Avatar" style="width:100%">
                                    <div class="container">
                                      <h4><b>#1</b></h4> 
                                      <p>My cat loves fall.</p> 
                                    </div>
                            </div>

                            <div class="card">
                                    <img src="https://i.redd.it/w7stfp0hnvtz.jpg" alt="Avatar" style="width:100%">
                                    <div class="container">
                                      <h4><b>#2</b></h4> 
                                      <p>Blowing in the wind.</p> 
                                    </div>
                            </div>

                            <div class="card">
                                    <img src="https://i.redd.it/dj2xma9ehutz.jpg" alt="Avatar" style="width:100%">
                                    <div class="container">
                                      <h4><b>#3</b></h4> 
                                      <p>Furry one-eyed cat.</p> 
                                    </div>
                            </div>

                    </div>

                    <div class="events">
                            <h1>Events</h1>
                            <br>
                            <div class="card">
                                    <img src="http://i.dailymail.co.uk/i/pix/2015/03/13/269B52AD00000578-2993443-image-a-25_1426263767891.jpg" alt="Avatar" style="width:100%">
                                    <div class="container">
                                      <h4><b>Cat Feeding</b></h4> 
                                      <p>Description.......</p> 
                                    </div>
                            </div>

                            <div class="card">
                                    <img src="http://veterinary-tips.ucoz.com/Animal_Care/Pets/Care_4_Pets/Petting_Your_Cat.jpg" alt="Avatar" style="width:100%">
                                    <div class="container">
                                      <h4><b>Cat Petting</b></h4> 
                                      <p>Description.......</p> 
                                    </div>
                            </div>

                            <div class="card">
                                    <img src="https://www.argospetinsurance.co.uk/assets/uploads/2015/03/Cat-grooming1.jpg" alt="Avatar" style="width:100%">
                                    <div class="container">
                                      <h4><b>Cat Grooming</b></h4> 
                                      <p>Description.......</p> 
                                    </div>
                            </div>


                           


                    </div>
                </div>
                    
                        

                </body>
            
           
        
        
        
        </html>
            