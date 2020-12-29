class Order {
	constructor(medium, bust, size, numPets,background_shape, color)
	{
		this.baseTotal = 25;
		this.sizeTotal = 0;
		this.petNumTotal = 0;

		this.waterColorPrice = 5;
		this.acrylicPrice = 10;
		this.sizePrice = 5;
		this.petNumPrice = 5;
		
		this.medium = medium;
		this.bust = bust;
		this.size = size;
		this.numPets = numPets;
		this.background_shape = background_shape;
		this.color = color;
		this.oldSelect = null;
		
	}
	calcSize(){
		return (this.size * this.sizePrice);		
	}
	
	calcNumPets(){
		return (this.numPets * this.petNumPrice);
	}
	calcBust(){
		if (this.bust == "True")
		{
			return 2;
		}
		else
		{
			return 0;
		}
	}

	calcTotal(){
			var petNumTotal = this.calcNumPets();
			var sizeTotal = this.calcSize();
			var bustTotal = this.calcBust();
			switch(this.medium)
			{	
				case "Ink":
				var finalTotal = this.baseTotal + petNumTotal + sizeTotal + bustTotal;
				break;	
				case "Acrylic":
				var finalTotal = this.baseTotal + this.acrylicPrice + petNumTotal + sizeTotal + bustTotal;
				break;	
				case "Watercolor":
				var finalTotal = this.baseTotal + this.waterColorPrice + petNumTotal + sizeTotal + bustTotal;
				break;		
			}
	
			return finalTotal;
	}
	
	get total()
	{
		return this.calcTotal();
	}
	
	shapeSelectionFormat(selection){
	if (this.oldSelect != null)
	{
		this.oldSelect.style.border = "0";	
	}
	if(selection == this.oldSelect)
	{
		selection.style.border = "0";
		this.oldSelect = null;
		this.background_shape = null;
	}
	else{
		selection.style.border = "5px solid #6ea054";
		this.oldSelect = selection; 
		this.background_shape = selection.name;
		
	}
	}

	cartAdd(){
		localStorage["CartTotal"] = cartTotal;
		cartTotal = parseInt(localStorage["CartTotal"]) + 1;
		console.log(cartTotal);
		if (cartTotal == 1)
		{
			document.getElementById("Shopping_Cart").style.display = "Block";
		}
		
		document.getElementById("order" + cartTotal).innerHTML = this.medium + " Portait $" +  this.total + "<li id = order" + (cartTotal +1) + "></li>";
		document.getElementById("Cart_Num").innerHTML = cartTotal;
		
		
		localStorage["CartTotal"] = cartTotal;
		
		document.getElementById("checkout_button").style.display = "inline";
		
		localStorage["CartStatus"] = document.getElementsByClassName("Cart_preview")[0].outerHTML;
		
		console.log(document.getElementsByClassName("Cart_preview")[0].outerHTML);
		
	}
	cartDelete(orderNum){
		console.log(orderNum);
		document.getElementById("order" + orderNum).innerHTML = "";
		cartTotal = cartTotal - 1;
		document.getElementById("Cart_Num").innerHTML = cartTotal;
		localStorage["CartTotal"] = cartTotal;
		localStorage["CartStatus"] = document.getElementsByClassName("Cart_preview")[0].outerHTML;
	}
	
	consoleDisplayOrder(ordNum)
	{
		var myNumPets = parseInt(this.numPets) + 1;
		var mySize;
		switch(this.size)
		{
			case 0:
			mySize = "4x6";
			break;
			
			case "1":
			mySize = "5.5x8.5";
			break;
			
			case "2":
			mySize = "8x10";
			break;
		}
		console.log("Session Order Number: " + ordNum);
		console.log("Total: " + this.total);
		console.log("Medium: " + this.medium);
		console.log("Background Color: " + this.color);
		console.log("Background Shape: " + this.background_shape);
		console.log("Number of Pets: " + myNumPets);	
		console.log("Size: " + mySize);
	}
	
}

function checkoutBuild(order, orderNum)
{
	var imageSource;
	switch(order.medium)
	{
		case "Acrylic":
		imageSource = 'images/acrylic2.jpg';
		break;
		case "WaterColor":
		imageSource = 'images/acrylic3.jpg';
		break;
	}
	var head = "<div class = 'checkoutOrderSum'> \
					<h1> " + order.medium + " Portrait  <span class='close' name = " + orderNum + ">&times;</span> </h1>\
					<div class = 'orderContents'>\
					<ul>"
	var tail = "</ul>\
			</div>\
			<div class='checkoutThumnailContainer'>\
			<img class = 'checkoutThumnail' src =" + imageSource + ">\
			</div>\
			</div>\
			</br>"
	
		
	var orderKeys = Object.keys(order);
	var orderVals = Object.values(order);
	var ordTitle = "<h1> "
	var middle = ""
	for(var i = 0; i < orderKeys.length; i++)
	{
		switch(orderKeys[i])
		{
			case "numPets":
				orderVals[i] = parseInt(orderVals[i]) + 1;
				middle += "<li> Number of Pets: " + orderVals[i] + "</li>"
				break;
			case "background_shape":
				if(orderVals[i] == null)
				{
					orderVals[i] = "None";
				}
				middle += "<li> Background Shape: " + orderVals[i] + "</li>"
				break;
			case "color":
				middle += "<li id='colorCheckoutContain'> Background Color: <div id = 'colorDisplay' style='background-color:" + orderVals[i] + ";'>  </div> </li>"
				break;
			case "size":
				switch(orderVals[i])
				{
					case 0: 
					orderVals[i] = "4x6";
					break;
					case 1:
					orderVals[i] = "5.5x8.5";
					break;
					case 2:
					orderVals[i] = "8x10";
					break;
				}
				middle += "<li> Size: " + orderVals[i] + "</li>"
				break;
		}
	}
	middle += "<li id= 'checkoutTotal'> Total: " + order.total + "</li>";
	var finString = head + middle + tail;
	
	return finString;
}




