
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/s.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   
  <title>Home of burgers</title>
		<div>
  <a href="ulog.php">Home</a>
  <ul>
    <li>
      <a href="#">Menu</a>
      <ul>
        <li><a href="#">Burgers</a></li>
        <li><a href="#">Drink</a></li>
        <li><a href="#">Fries</a></li>
		<li><a href="#">Salads</a></li>
		
      </ul>
    </li>
	 <li>
      <a href="#">Contact</a>
	  </li>
	  	 <li>
      <a href="/forma/logout.php">Logout</a>
	  </li>
  </ul>

</div>
	<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
	<body background="img/drvo.jpg">
	<img src="img/bur.jpg" >
	
<h2>Burgers on flek</h2>
<div class="sara" style="max-width:250px">
  <img class="slideShow" src="img/bur.jpg" style="width:100%">
  <img class="slideShow" src="img/fries.jpg" style="width:100%">
  <img class="slideShow" src="img/salata.jpg" style="width:100%">
  <img class="slideShow" src="img/sokic.jpg" style="width:100%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("slideShow");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); 
}
</script>
	<h1>BURGERS</h1>
	<table>
  <tr>
    <th><img id="img1" src="img/burger.jpg"></th>
    <th><p>100% Beef Patty: Ingredients: 100% pure USDA inspected beef;<br>
	No fillers, no extenders. Prepared with grill seasoning (salt, black pepper).<br>
	Thankfully, McDonald's and several other chains recently stopped using the “pink slime” in their beef
	</p></th>
  </tr>
    <tr>
    <th><img id="img1" src="img/fries.jpg"></th>
    <th><p>
	Slice potatoes into French fries, and place into cold water so they won't turn brown while you prepare the oil.<br>
	Heat oil in a large skillet over medium-high heat.<br>
	While the oil is heating, sift the flour, garlic salt, onion salt, (regular) salt, and paprika into a large bowl.</p></th>
  </tr>
    <tr>
    <th><img id="img1" src="img/salata.jpg"></th>
    <th><p>Jicama-Mango Slaw:<br>
	Toss julienned mango and jicama, red onion, radish and cilantro;<br>
	add cumin, salt and cayenne. Drizzle with olive oil and lime juice.<br>
	26. Tricolor Salad: Whisk 1 part balsamic vinegar with 3 parts olive oil, and salt and pepper.</p></th>
  </tr>
    <tr>
    <th><img id="img1" src="img/sokic.jpg"></th>
    <th><p>
	Juice the apple and ginger together, then juice the rest of the fruit.<br>
	Pour the #juice in a large glass and fill to the top with sparkling water and serve with ice.</p></th>
  </tr>
</table>

		<p></p>
        <div class="col-25">
            <div class="container">
                <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
                <p><a href="#">Burger beef 500gr</a> <span class="price">$15</span></p>
                <p><a href="#">Cola 0,5l</a> <span class="price">$5</span></p>
                <p><a href="#">Ceaser salad extra backon</a> <span class="price">$8</span></p>
                <p><a href="#">French fries small</a> <span class="price">$2</span></p>
                <hr>
                <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
             <p><input type="submit" value="Order now!" class="btn"></p>
			</div>
        </div>
    </div>

  <footer>
  <p>Created by: Sara Davidovic 1924 </p>
  <p>Contact information: sara.davidovic.1924@metropolitan.ac.rs
	</p>
</footer>
	</body>
	
	</html>
	