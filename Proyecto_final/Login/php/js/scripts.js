/*!
* Start Bootstrap - Shop Homepage v5.0.6 (https://startbootstrap.com/template/shop-homepage)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-shop-homepage/blob/master/LICENSE)
*/
// This file is intentionally blank
// Use this file to add JavaScript to your project

// Evento para manejar clics en los botones "Add to cart" de los productos
const addToCartButtons = document.querySelectorAll('.addToCartButton');
addToCartButtons.forEach(button => {
    button.addEventListener('click', function() {
        const productId = this.getAttribute('data-product-id');
        agregarAlCarrito(productId);
    });
});