<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title> Dashboard | AppTeria</title>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/font-awesome.min.css">

<link rel="stylesheet" href="css/magnific-popup.css">

<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/owl.carousel.css">

<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/style2.css">
<link rel="stylesheet" href="css/style3.css">
<link rel="stylesheet" href="css/style4.css">
<link rel="icon" href="favicon.ico" type="image/x-icon">

</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">


<!-- PRE LOADER -->

<div class="preloader">
     <div class="sk-spinner sk-spinner-pulse"></div>
</div>



<!-- Navigation Section -->

<div class="navbar navbar-default navbar-fixed-top" style="background-color: white;">
	<div class="container">

		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<a href="index.html" class="navbar-brand"><span>App</span> Teria</a>
		</div>

		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="index.html" class="smoothScroll">Home</a></li>
				<li><a href="index.html#about" class="smoothScroll">About</a></li>
                <li><a href="index.html#screenshot" class="smoothScroll">Features</a></li>
                <li><a href="dashboard.php" class="smoothScroll btn-success*" >Dashboard</a></li>
                <li><a href="index.html" class="smoothScroll btn-success*">Log out</a></li>  
			</ul>
		</div>

	</div>
</div>


<div class="container" style="background-image: url(https://pcbx.us/bexy.jpg);">
<br> <br> <br> <br> <br> 
    <h2>Dashboard | AppTeria</h2>
     
    <br>

    <?php
      include 'user/changedevicestate.php';
    ?>
    
    <div class="content">
      <a href="#" class="btn left">
        <span class="left icon">
          <form action="#" method="POST" name='load1form'>
            <label class="rocker rocker-small">
              <input type="checkbox" name="load1" id="load1" onChange='submit(this)'>
              
              <span class="switch-right">On</span>
              <span class="switch-left">Off</span>
            </label>
          </form>                  
        </span>
        <span class="right title"><span class="arrow-right"></span>LOAD 1</span>
      </a>
      
      <a href="#" class="btn right">
        <span class="left title"><span class="arrow-left"></span>LOAD 2</span>
        <span class="right icon fa fa-television">x
          <label class="rocker rocker-small">
            <input type="checkbox" name="load2" id="load2" onChange='submit(this)'>
            <span class="switch-left">Off</span>
            <span class="switch-right">On</span>
          </label> 
        </span>
      </a>
    </div>
    <br>

    <br>
    <div class="content">
      <a href="#" class="btn left">
        <span class="left icon">        
            <label class="rocker rocker-small">
              <input type="checkbox" name="load3" id="load3" onChange='submit(this)'>>
              <span class="switch-left">Off</span>
              <span class="switch-right">On</span>
            </label>          
          </span>
        <span class="right title"><span class="arrow-right"></span>LOAD 3</span>
      </a>
      
      <a href="#" class="btn right">
        <span class="left title"><span class="arrow-left"></span>LOAD 4</span>
        <span class="right icon fa fa-television">
          <label class="rocker rocker-small">
            <input type="checkbox" name="load4" id="load4" onChange='submit(this)'>>
            <span class="switch-left">Off</span>
            <span class="switch-right">On</span>
          </label> 
        </span>
      </a>
    </div>
    <br>

    <br>
    <div class="content">
      <a href="#" class="btn left">
        <span class="left icon">        
            <label class="rocker rocker-small">
              <input type="checkbox" name="load5" id="load5" onChange='submit(this)'>>
              <span class="switch-left">Off</span>
              <span class="switch-right">On</span>
            </label>          
          </span>
        <span class="right title"><span class="arrow-right"></span>LOAD 5</span>
      </a>
      
      <a href="#" class="btn right">
        <span class="left title"><span class="arrow-left"></span>LOAD 6</span>
        <span class="right icon fa fa-television">
          <label class="rocker rocker-small">
            <input type="checkbox" name="load6" id="load6" onChange='submit(this)'>>
            <span class="switch-left">Off</span>
            <span class="switch-right">On</span>
          </label> 
        </span>
      </a>
    </div>
    <br>
    
    
    
  </div>


  <a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>


<!-- SCRIPTS -->

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/magnific-popup-options.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

<script type="text/javascript">


  

  submit = form => {
    document.querySelector(form.name).submit();
  }

  let deviceState = "<?php echo $rowi[3].$rowi[4].$rowi[5].$rowi[6].$rowi[7].$rowi[8]; ?>";
  
  for (let i = 0; i < 6; i++) {
    document.querySelector('#load'+(i+1)).checked = deviceState[i] == 0 ? false : true;
  }
  
  
  

</script>

</body>
</html>