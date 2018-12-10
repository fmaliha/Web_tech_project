<?php
             
	$connection = mysqli_connect("localhost", "root", "","ab");

	//Selecting Database from Server
	
	if(isset($_POST['submit']))
	{
	//Fetching variables of the form which travels in URL
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['phn'];
    $address = $_POST['address'];
    $rent_price=$_POST['rnp'];
    $date=$_POST['av'];
  
    if($_FILES['image']['name'])
   	    {
   	    	$target_dir = "img/";
   	    	$target_file = $target_dir . basename($_FILES["image"]["name"]);
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file))
            {
                 $img = $target_file;
            }else{
            	 $img = "";
            }
   	    }

    $sql = "INSERT INTO `post`(`name`, `email`, `address`, `rent_price`, `date_a`, `phone_no`, `image`) VALUES ( '$name','$email','$address',
   	$rent_price,'$date','$contact', '$img')";
   
	// $sql = "INSERT INTO post(name,email,address,rent_price,date_a,phone_no,image) VALUES ('$name', '$email','$address',$rent_price,'$date','$contact', '$img')";
    $result = mysqli_query($connection,$sql);
    // var_dump($result);
}
?>		


<html>
<head>
    <title>Post Add</title>
	<link href='css/style.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
 	<script src="js/post.js"></script>

</head>

<body>
    <header>
	   <div class="row">
		<ul class="main-nav1">
		    
		</ul>
	    </div>
		
		<div class="neon1">
		  <input name="" type="text">
            <input value="Search" type="button">
	    </div>	
	 </header>
	 <div class="logo_menu">
	    <div class="neon">
		    <h3 data="neon">abash.com</h3>
	    </div>
		
		<div class="row">
		<ul class="main-nav">
		    <li class="active"><a href="index.php">Home</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="#">contuct us</a></li>
			<li><a href="login.php">Post ad</a></li>
			<li><a href="login.php">Logout</a></li>
			
		</ul>
		</div>
		</div>
		
		<div class="div3">
		    <ul>
			   <li><a href="#">most popular ad</a></li>
			   <li><a href="#">search filter </a></li>>
			   <input name="" type="text">
               <input value="Search" type="button"> 
		</div>
		
	
		<div class="form_div">
				<div class="title"><h2>House Details </h2></div>
            <form class="quote" accept="post.php" method="post" name="myForm" onsubmit="return validateForm()" enctype="multipart/form-data" >
              <div>
                <label>Name</label><br>
                <input type="text" name="name" placeholder="Name">
              </div>
              <div>
                <label>Email</label><br>
                <input type="email" name="email" placeholder="Emial Address">
              </div>
              <div>
                <label>Address</label><br>
               <textarea name="address" placeholder="Address"></textarea>
              </div>
              <div>
                <label>Rent Price</label><br>
                <input type="number" min="1500" max="100000"  name="rnp" placeholder="Price">
              </div>
              <div>
              	<div>
                <label>Available Date</label><br>
                <input type="Date" name="av" placeholder="Input Date">
              </div>
                <label>Phone No.</label><br>
                <input type="number" name="phn" placeholder="Phone number">
              </div>
              
              <div>
                <label>Upload Picture</label><br>
                <input type="file" name="image" accept="image/jpg,image/png,image/jpg" placeholder="Upload">
              </div>
              <input class="submit" type="submit" name="submit" value="Insert" />


			
	
          </form>
          </div>
		</div>	
			
	

	           
</body>

	
<footer class="footer">
		
		<div class="call_us">
			<h3 >Follow Us</h3>
			<a href="tel:+8801761867763" class="call" title="call now" ><i class="fa fa-phone" style="font-size:30px;background-color:black;color:white"></i></a><br>
			<a href="#" class="call"><i class="fa fa-facebook-f" style="font-size:30px;width:23px;background-color:black;color:white"></i></a><br>
			<a href="#" class="call"><i class="fa fa-google" style="font-size:30px;background-color:black;color:white"></i></a><br>
			<a href="#" class="call"><i class="fa fa-twitter" style="font-size:30px;background-color:black;color:white"></i></a><br>

		</div>

		<div class="fo">
			<h1>Contact With Us</h1><br>
			<p>Phone NO:0175263939</p><br>
			<p>Email:hasdasjd@gmail.com</p>
			
			
		</div>

		
	</footer>
</html>