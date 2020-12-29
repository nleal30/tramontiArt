var checkoutInner = "</br> ";
let thisOrder = new Order(null, "False", 0, 0, null, null);
console.log(localStorage);

/*localStorage["CartTotal"] = 0;
localStorage.removeItem("Order0");*/

var cartTotal = localStorage["CartTotal"] || 0;


if(cartTotal > 0)
{
	document.getElementsByClassName("Cart_preview")[0].outerHTML = localStorage["CartStatus"];
	document.getElementById("Cart_Num").innerHTML = cartTotal;
}

console.log(cartTotal);

var finalTotal = 0;
for(var i = 0; i < cartTotal; i++)
{
	var temp = JSON.parse(localStorage["Order" + i]);
	var ord = new Order(temp.medium, temp.bust, temp.size, temp.numPets, temp.background_shape, temp.color);
	console.log("------------------------------");
	ord.consoleDisplayOrder(i +1);
	finalTotal += ord.total
	checkoutInner += checkoutBuild(ord, i);
	console.log(localStorage["Order" + i]);
}
console.log("Final Total: " + finalTotal);


var bust_element = document.getElementById("bust");
var total_display_element = document.getElementById("total_display"); 
var size_element = document.getElementById("size");
var num_pets_element = document.getElementById("numPets");
var color_element = document.getElementById("color");
var shape_elements = document.getElementsByClassName("Shape_button");
var add_cart = document.getElementById("add_cart");
var clear_cart = document.getElementById("Clear_Cart");
var page = window.location.pathname;
var checkoutCloseButtons = document.getElementsByClassName("close");

