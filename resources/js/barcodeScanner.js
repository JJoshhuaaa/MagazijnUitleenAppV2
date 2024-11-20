document.getElementById('searchProductBtn').addEventListener('click', function() {
    const barcode = document.getElementById('barcode').value;

    // Make an API call to get product by barcode
    fetch(`/api/products/${barcode}`)
        .then(response => response.json())
        .then(data => {
            if (data) {
                const productDetails = `
                    <h3>Product Details</h3>
                    <p><strong>Name:</strong> ${data.product_name}</p>
                    <p><strong>Description:</strong> ${data.description}</p>
                    <p><strong>Category:</strong> ${data.category}</p>
                `;
                document.getElementById('productDetails').innerHTML = productDetails;
            } else {
                document.getElementById('productDetails').innerHTML = '<p>No product found with this barcode.</p>';
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
});