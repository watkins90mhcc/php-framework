function validateProductForm(name, description, cost, retail, qtyOnHand, qtyOnOrder, proNameRegEx, proDescRegEx, proCostRegEx, proRetailRegEx, proQtyohRegEx, proQtyOrdRegEx){
	try{
		var productName = document.forms['productForm']['name'];
		var productNameValue = productName.value;
		if(productNameValue == null || productNameValue == ''){
			alert("Please enter a product name");
			productName.focus();
			return false;
		}
		var productDesc = document.forms['productForm']['description'];
		var productDescValue = productDesc.value;
		if(productDescValue == null || productDescValue == ''){
			alert("Please enter a product description");
			productDesc.focus();
			return false;
		}
		var productCost = document.forms['productForm']['cost']'
		var productCostValue = productCost.value;
		if(productCostValue == null || productCostValue == ''){
			alert("Please enter the cost of the product");
			productCost.focus();
			return false;
		}
		var productRetail = document.forms['productForm']['retail'];
		var productRetailValue = productRetail.value;
		if(productRetailValue == null || productRetailValue == ''){
			alert("Please enter the retail value of the product");
			productRetail.focus();
			return false;
		}
		var productStQty = document.forms['productForm']['qtyOnHand'];
		var productStQtyValue = productStQty.value;
		if(productStQtyValue == null || productStQtyValue == ''){
			alert("Please enter the quantity on hand, zero if there is none");
			productStQty.focus();
			return false;
		}
		var productQtyOrd = document.forms['productForm']['qtyOnOrder'];
		var productQtyOrdValue = productQtyOrd.value;
		if(productQtyOrdValue == null || productQtyOrdValue == ''){
			alert("Please enter the quantity on order, zero if there is none");
			productQtyOrd.focus();
			return false;
		}
		var proNameRegEx = /^[a-zA-Z]+$/;
		if(!productNameValue.match(proNameRegEx)){
			alert("Please enter only letters in product name field");
			productName.focus();
			return false;
		}
		var proDescRegEx = /^[a-zA-Z]+$/;
		if(!productDescValue.match(proDescRegEx)){
			alert("Please enter only letters in description field");
			productDesc.focus();
			return false;
		}
		var proCostRegEx = ;
		if(!productCostValue.match(proCostRegEx)){
			alert("Please enter a valid US currency format");
			productCost.focus();
			return false;
		}
		var proRetailRegEx = ;
		if(!productRetailValue.match(proRetailRegEx)){
			alert("Please enter a valid US currency format in retail field");
			productRetail.focus();
			return false;
		}
		var proQtyohRegEx = /^\d+$/;
		if(!productStQtyValue.match(proQtyohRegEx)){
			alert("Please enter number only in qty on hand field");
			productStQty.focus();
			return false;
		}
		var proQtyOrdRegEx = /^\d+$/;
		if(!productQtyOrdValue.match(proQtyOrdRegEx)){
			alert("Please enter numbers only in qty on order field");
			productQtyOrd.focus();
			return false;
		}
		
	}
	catch(err){
		alert("An error occured: " +err.lineNumber + err.message);
		
	}
	
}