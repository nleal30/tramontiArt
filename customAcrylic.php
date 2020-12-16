<?php
include_once 'header.php';
?>
    <section class="inner-sec">
        <div class="container">
            <h1>Custom Acrylic Pet Portrait</h1>
            <div class="row">
			
			<!-------SLIDESHOW--->
                <div class="col-md-5">
                    <div class="slideshow product-img">
						<div class="slideshowNum">1 / 3</div>
                        <img src="images/product-img.jpg" alt="img">
                    </div>
					<div class="slideshow product-img">
						<div class="slideshowNum">2 / 3</div>
                        <img src="images/acrylic2.jpg" alt="img">
                    </div>
					<div class="slideshow product-img">
						<div class="slideshowNum">3 / 3</div>
                        <img src="images/acrylic3.jpg" alt="img">
                    </div>
					<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
					<a class="next" onclick="plusSlides(1)">&#10095;</a>
					<div class="caption-container">
					<p id="caption"></p>
					</div>
					
						<div class="column">
						<img class="demo cursor" src="images/product-img.jpg" style="width:100%" onclick="currentSlide(1)" alt="Acrylic Portrait">
						</div>
						<div class="column">
						<img class="demo cursor" src="images/acrylic2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Acrylic Portrait">
						</div>
						<div class="column">
						<img class="demo cursor" src="images/acrylic3.jpg" style="width:100%" onclick="currentSlide(3)" alt="Acrylic Portrait">
						</div>
                </div>
				<script type = "text/javascript" src = "js/slideshow.js"></script>
				<!----SLIDESHOW----->
				
                <div class="col-md-7">
                    <div class="product-content-sec">
                        <label for = "Size"> Size: </label>
						<select name = "size" id = "size" >
							<option value = "4x6">4x6</option>
							<option value = "5.5x8.5">5.5X8.5</option>
							<option value = "8x10">8x10</option>
						</select>
						<br/>
						<label for = "numPets"> Number of Pets: </label>
						<select name = "numPets" id = "numPets" >
							<option value = "1">1</option>
							<option value = "2">2</option>
							<option value = "3">3</option>
						</select>
						<br/>
						<label for ="orderDesign"> Select a shape: </label>
						<div class = "orderDesign">
							<button class = "Shape_button" value = "square" onclick = "buttonSelectionFormat(this)">
							<img class = "shape_img" src="images/square_shape.jpg">
							</button>
							<button class = "Shape_button" value = "circle" onclick= "buttonSelectionFormat(this)">
							<img class = "shape_img" src="images/circle_shape.jpg">
							</button>
							<button class = "Shape_button" value = "hexagon" onclick= "buttonSelectionFormat(this)">
							<img class = "shape_img" src="images/hexagon_shape.jpg">
							</button>
							<button class = "Shape_button" value = "rhombus" onclick= "buttonSelectionFormat(this)">
							<img class = "shape_img" src="images/rhombus_shape.jpg">
							</button>
							<br/>
							<button class = "Shape_button" value = "rectangle" onclick= "buttonSelectionFormat(this)">
							<img class = "shape_img" src="images/rectangle_shape.jpg">
							</button>
							<button class = "Shape_button" value = "oval" onclick= "buttonSelectionFormat(this)">
							<img class = "shape_img" src="images/oval_shape.jpg">
							</button>
							<button class = "Shape_button" value = "pentagon" onclick= "buttonSelectionFormat(this)">
							<img class = "shape_img" src="images/pentagon_shape.jpg">
							</button>
							<button class = "Shape_button" value = "octogon" onclick= "buttonSelectionFormat(this)">
							<img class = "shape_img" src="images/octogon_shape.jpg">
							</button>
							<button class = "Shape_button" value = "Triangle" onclick= "buttonSelectionFormat(this)">
							<img class = "shape_img" src="images/triangle_shape.jpg">
							</button>
						</div>
						
						<br/>
                        <a href="#" class="btn buy-btn">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-12">
                    <div class="mail">
                        <span><i class="far fa-envelope"></i></span><a href="mailto:Hello@mysite.com">Hello@mysite.com</a>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="phone">
                        <span><i class="fas fa-phone-square"></i></span>800 1230 4569
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <div class="share">
                        <ul>
                            <li>
                                <a href=""> <span class="fab fa-facebook"></span></a>
                            </li>
                            <li>
                                <a href=""> <span class="fab fa-instagram"></span></a>
                            </li>
                            <li>
                                <a href=""> <span class="fab fa-twitter"></span></a>
                            </li>
                            <li>
                                <a href=""> <span class="fab fa-pinterest"></span></a>
                            </li>
                            <li>
                                <a href=""> <span class="fab fa-google-plus-g"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <h5>(C) 2017. All Rights Reserved. <a href="#">Single Product Template</a></h5>
        </div>
    </footer>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js">
    </script>
    <script src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</body>

</html>