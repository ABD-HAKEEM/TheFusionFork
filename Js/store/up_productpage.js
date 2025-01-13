document.addEventListener('alpine:init', () => {
    // Store for managing product updates
    Alpine.store('adminUpdate', {
        products: [], // Initialize the products array to store the product list

        updateProduct(updatedProduct) {
            // Send the updated product details to the backend
            fetch(`../../Up_rout.php`, {
                method: 'POST', // Use POST to send the product details to the backend
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(updatedProduct), // Include the updated product details
            })
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`HTTP error! status: ${response.status}`);
                    }
                    return response.json();
                })
                .then(data => {
                    if (data && data.status === 'success') {
                        // Update the local product in the array
                        const index = this.products.findIndex(product => product.id === updatedProduct.id);
                        if (index !== -1) {
                            this.products[index] = updatedProduct;
                        }
                        console.log(`Product ${updatedProduct.id} updated successfully.`);
                    } else {
                        console.error('Error updating product:', data.message || 'Unknown error');
                    }
                })
                .catch(error => {
                    console.error('Network or Fetch error:', error);
                });
        }
    });
});
