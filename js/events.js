////------Display cart if orders are in it
if (cartTotal > 0)
		{
			document.getElementById("Shopping_Cart").style.display = "Block";
			document.getElementById("checkout_button").style.display = "inline";

		}

////window load events
window.addEventListener("load", function(){		
//Update medium on page loading
switch(page){
	case ("/customAcrylic.php"):
	thisOrder.medium = "Acrylic";
	orderEvents()
	break;
	
	case ("/checkout.php"):
	document.getElementById("FinalOrder").innerHTML = checkoutInner;
	document.getElementById("FinalOrderTotal").innerHTML = finalTotal;
	//closeButton listener
	for(var i = 0; i < checkoutCloseButtons.length; i++)
	{
		console.log(i);
		checkoutCloseButtons[i].addEventListener('click', function(event){localStorage.removeItem("Order" + event.target.getAttribute("name"));event.target.parentElement.parentElement.style.display = "None" ;/*need this to update*/document.getElementById("FinalOrderTotal").innerHTML = finalTotal;thisOrder.cartDelete(parseInt(event.target.getAttribute("name")) + 1 );}, false)
	}
	break;
}}, false)



////Events that happen on order pages
function orderEvents()
{
	//-----Update total and thisOrder after bust change
	bust_element.addEventListener("change", function(event){thisOrder.bust = event.target.value;
	total_display_element.innerHTML = thisOrder.total;
	console.log(thisOrder);}, false);

	//-----Update total and thisOrder after size change
	size_element.addEventListener("change", function(event){thisOrder.size = event.target.value;
	total_display_element.innerHTML = thisOrder.total;
	console.log(thisOrder);}, false);

	//-----Update total and thisOrder after numPets change
	num_pets_element.addEventListener("change", function(event){thisOrder.numPets = event.target.value;
	total_display_element.innerHTML = thisOrder.total;
	console.log(thisOrder);}, false);

	//-----Update thisOrder after numPets change
	color_element.addEventListener("change", function(event){thisOrder.color = event.target.value;
	console.log(thisOrder);
	console.log(document.getElementById("order1").innerHtml)
	}, false);
	//-----Update thisOrder after shape change
	for(var i = 0; i < shape_elements.length; i++)
	{
		shape_elements[i].addEventListener('click', function(event){thisOrder.shapeSelectionFormat(event.target)}, false)
	}

	//-----Update cart after add to cart click
	add_cart.addEventListener("click", function(event){thisOrder.cartAdd();console.log(thisOrder); localStorage["Order" + (cartTotal-1)] = JSON.stringify(thisOrder);}, false);
}


////Events that happen on all pages
/*					FOOTER EVENTS 				*/
clear_cart.addEventListener("click", function(event){for(var i = 0; i < cartTotal; i++){localStorage.removeItem("Order" + i);}localStorage["CartTotal"] = 0; document.getElementById("checkout_button").style.display = "none";
 document.getElementById("Shopping_Cart").style.display = "None";}, false);

