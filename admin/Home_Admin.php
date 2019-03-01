<html>
<div class="main"><center>
			<div>
				<img width ="1350" height="200"src="images/shop.jpg"/>
			</div>
			<div >
				<table>
				<tr>
					<td><a href="home_admin.php"><h1>Home</h1></a> </td><td></td>
					<td><a href="packageview.php"><h1>Package View</h1></a> </td><td></td>
					<td><a href="create product" ><h1>Create_Product</h1></a> </td><td></td>
					<td><a href="Order_retrieve.php" ><h1>Order_record</h1></a> </td><td></td>
					<td><a href="remove product/index.php" ><h1>Remove_product</h1></a> </td><td></td>
					<td><a href="update product/index.php" ><h1>Update_product</h1></a> </td><td></td>
					<td><a href="reg_msg.php"><h1>Logout</h1></a></td><td></td>							 
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
</center></div>
</html>	