<!DOCTYPE html>
<html lang="en">
<head>
  <title>Laravel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #fff;
      padding: 25px;
    }
  </style>
</head>
<body>

<div class="jumbotron">
  <div class="container text-center">
    <h1>cubalaravel</h1>      
    <p></p>
  </div>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
     
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home">Home</a></li>
        <li><a href="product">Product</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login"><span class="glyphicon glyphicon-user"></span> Login</a></li>
        <li><a href="register"> Register</a></li>
        <li><a href="cart"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-default">
        <div class="panel-body"><img src="https://www.healthline.com/hlcmsresource/images/AN_images/AN88-Cucumbers-732x549-thumb.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-default">
        <div class="panel-body"><img src="https://cdn1.sph.harvard.edu/wp-content/uploads/sites/30/2014/01/potatoes-411975_1280-1200x800.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-default">
        <div class="panel-body"><img src="http://www.ibis.org.au/wp-content/uploads/2018/02/broccoli.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"></div>
      </div>
    </div>
  </div>
</div><br>


<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-default">
        <div class="panel-body"><img src="https://amp.businessinsider.com/images/5c1806610df17652ac115193-750-563.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-default">
        <div class="panel-body"><img src="https://ethnicfoodsrus.com/wp-content/uploads/2015/03/Bell-Peppers.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-default">
        <div class="panel-body"><img src="http://static1.uk.businessinsider.com/image/58a36486dd089576288b458e/a-woman-treated-a-fungal-infection-with-garlic--and-it-gave-her-2nd-degree-burns.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"></div>
      </div>
    </div>
  </div>
</div><br>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-default">
        <div class="panel-body"><img src="https://www.healthline.com/hlcmsresource/images/AN_images/AN313-Tomatoes-732x549-Thumb.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-default">
        <div class="panel-body"><img src="https://cdn1.medicalnewstoday.com/content/images/hero/270/270609/270609_1100.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-default">
        <div class="panel-body"><img src="https://www.joyfulbelly.com/Ayurveda/images/content/5-Yellow-Onion.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"></div>
      </div>
    </div>
  </div>
</div><br>




<footer class="container-fluid text-center"></footer>

</body>
</html>
