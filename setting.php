<!DOCTYPE html>
<html>
  <head>
     <title>Settings </title>
       <link rel="stylesheet" type="text/css" href="index.css">
       <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type=" text/css">
       <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
       <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  </head>
  
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
       <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>  
            
            <a href="Assignment2.html" class="navbar-brand">Lifestyle Store </a>
          </div>
          
          
          <div class="collapse navbar-collapse" id="myNavbar">      
            <ul class="nav navbar-nav navbar-right">
              <li><a href="cart.html"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
              <li><a href="setting.html"><span class="glyphicon glyphicon-cog"></span> Settings</a></li> 
              <li><a href="logout.html"><span class="glyphicon glyphicon-off"></span> Log out</a></li> 
            </ul>
           </div>
        </div>
      </nav> 

      <div class="elements">
           <h3 class="asd">Change Password</h3> 
           <form>
                <div class="form-group col-xs-5 "><input type="text" class="form-control"  placeholder="Old Password">    </div>
                <div class="form-group col-xs-5 col-xs-offset-2 "><input type="text" class="form-control"  placeholder="New Password">    </div>
                <div class="form-group col-xs-5"><input type="text" class="form-control"  placeholder="Confirm Password">    </div>
           </form>
      </div>