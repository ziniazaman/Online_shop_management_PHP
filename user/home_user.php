<?php
session_start();
//echo $_SESSION['sess_user'];
if(!isset($_SESSION['sess_user']))
{
	header("location:../login.php");
}
else{
	
	include ('db.php');
	$username=$_SESSION['sess_user'];
?>

<html>
<body>
<div class="main">
<center>
			<div>
				<img width ="1350" height="150"src="images/shop.jpg"/>
			</div>
			<div >
				<table>
				<tr>
					<td><a href="home_user.php"><h1>Home</h1></a> </td><td></td>
					<td><a href="user_package.php"><h1>Clothing Gallery:</h1></a> </td><td></td>
					<td><a  href="logout.php"><h1>Logout</h1></a></td><td></td>
												
	        </tr>  
			</table> 
			 </div>			
			 <div class="mySlides fade">
 
  <img width="1350" height="430" src="images/product.jpg">
  
</div>

<div class="mySlides fade">
 
  <img width="1350" height="430" src="images/HK2.jpg"/>
  
</div>
<div class="mySlides fade">
 
  <img width="1350" height="430" src="images/Sh.jpg"/>
  
</div>

<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script> 

</center>
            
</div>
</body>
</html>
<?php
}
?>