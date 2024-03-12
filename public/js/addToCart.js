addToCartButtons = document.querySelectorAll(".add-to-cart");
addToCartButtons.forEach((button) => {
	button.addEventListener("click", () => {
		const productId = button.getAttribute("data-product-id");
		const xhr = new XMLHttpRequest();
		xhr.open("POST", "/product", true);
		xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		xhr.onreadystatechange = function () {
			if (xhr.readyState == 4 && xhr.status == 200) {
				console.log(productId);
			}
		};
		xhr.send("product_id=" + encodeURIComponent(productId));
	});
});
