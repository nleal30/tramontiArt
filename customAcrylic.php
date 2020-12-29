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
						<div class="slideshowNum">1 / 4</div>
                        <img src="images/product-img.jpg" alt="img">
                    </div>
					<div class="slideshow product-img">
						<div class="slideshowNum">2 / 4</div>
                        <img src="images/acrylic2.jpg" alt="img">
                    </div>
					<div class="slideshow product-img">
						<div class="slideshowNum">3 / 4</div>
                        <img src="images/acrylic3.jpg" alt="img">
                    </div>
					<div class="slideshow product-img">
						<div class="slideshowNum">4 / 4</div>
                        <img src="images/acrylic4.jpg" alt="img">
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
						<div class="column">
						<img class="demo cursor" src="images/acrylic4.jpg" style="width:100%" onclick="currentSlide(4)" alt="Acrylic Portrait">
						</div>
                </div>
				<script type = "text/javascript" src = "js/slideshow.js"></script>
				<!----SLIDESHOW----->
                <div class="col-md-7">
					<div class="product-description-sect">
					 Describe ProductDescribe ProductDescribe ProductDescribe ProductDescribe ProductDescribe ProductDescribe ProductDescribe Product
					</Div>
					<br/>
                    <div class="product-content-sec">
						<label for = "Bust"> Bust: </label>
						<select class = "orderBuild" name = "bust" id = "bust">
							<option value = "False">No</option>
							<option value = "True">Yes</option>
						</select>
                        <label for = "Size"> Size: </label>
						<select class = "orderBuild" name = "size" id = "size">
							<option value = "0">4x6</option>
							<option value = "1">5.5X8.5</option>
							<option value = "2">8x10</option>
						</select>
						<br/>
						<br/>
						<label for = "numPets"> Number of Pets: </label>
						<select class = "orderBuild" name = "numPets" id = "numPets">
							<option value = "0">1</option>
							<option value = "1">2</option>
							<option value = "2">3</option>
						</select>
						<br/>
						<br/>
						<label for ="orderDesign"> Please select a background shape: </label>
						<div name = "orderDesign" class = "orderDesign">
							<button class = "Shape_button" name = "square">
							<img name = "square" class = "shape_img" src="images/square_shape.jpg">
							</button>
							<button class = "Shape_button" name = "circle">
							<img class = "shape_img" name = "circle" src="images/circle_shape.jpg">
							</button>
							<button class = "Shape_button" name = "hexagon">
							<img class = "shape_img" name = "hexagon" src="images/hexagon_shape.jpg">
							</button>
							<button class = "Shape_button" name = "rhombus">
							<img class = "shape_img" name = "rhombus" src="images/rhombus_shape.jpg">
							</button>
							<button class = "Shape_button" name = "rectangle">
							<img class = "shape_img" name = "rectangle" src="images/rectangle_shape.jpg">
							</button>
							<br/>
							<button class = "Shape_button" name = "oval">
							<img class = "shape_img" name = "oval" src="images/oval_shape.jpg">
							</button>
							<button class = "Shape_button" name = "pentagon">
							<img class = "shape_img" name = "pentagon" src="images/pentagon_shape.jpg">
							</button>
							<button class = "Shape_button" name = "octogon">
							<img class = "shape_img"  name = "octogon" src="images/octogon_shape.jpg">
							</button>
							<button class = "Shape_button" name = "Triangle">
							<img class = "shape_img" name = "Triangle" src="images/triangle_shape.jpg">
							</button>
						</div>
							</br>
							</br>
							<form action="/action_page.php">
							<label for="favcolor">Please select a background color:</label>
							<input type="color" id="color" name="color" value="#ffffff"><br><br>
							</form>
						<form>
							<label for="files">Upload images of dog here:</label>
							<input type="file" id="files" name="files" multiple><br><br>
						</form>
						<br/>
						<br/>
						<div class= "totals">
						<label > Total: $<label> 
						<p id = "total_display">35</p>
						</div>
						<div>
                        <a class="btn buy-btn" id ="add_cart">Add to Cart</a>
						</div>
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
<?php
include_once 'footer.php';
?>
