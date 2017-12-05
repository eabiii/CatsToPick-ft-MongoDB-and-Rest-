# Cats to Pick with MongoDB and Restheart
Install the following :
  MongoDB
  Restheart
  XAMPP
Download or clone the project

Start mongodb on the project folder
  Open terminal/cmd on the project
  enter “start mongod -—dbpath /db” (Windows User), “mongod -—dbpath /db”(Mac User)
  enter mongo to connect to the mongod server
  type the following on the mongod server 
  use db
  db.createCollection("users")
  db.createCollection("cats")
  db.createCollection("statusPost")
  db.createCollection("events")
  
  
  
  Start restheart on  the project folder
  Open terminal/cmd on the project folder
  enter “java -jar restheart.jar”
  
  Run Apache server and type the following in the browser:
  http://localhost/CatsToPick/index.php
