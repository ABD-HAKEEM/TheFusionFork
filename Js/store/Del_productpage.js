document.addEventListener('alpine:init', () => {
    // Store for managing product deletion
    Alpine.store('admindelete', {
        products: [], // Initialize the products array to store the product list

        deleteProduct(productId) {
            fetch(`../../Delrout.php`, {
                method: 'POST', // Use POST to send the product ID to the backend
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ id: productId }), // Include the product ID
            })
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`HTTP error! status: ${response.status}`);
                    }
                    return response.json();
                })
                .then(data => {
                    if (data && data.status === 'success') {
                        // Filter the product out of the local array
                        this.products = this.products.filter(product => product.id !== productId);
                        console.log(`Product ${productId} deleted successfully.`);
                    } else {
                        console.error('Error deleting product:', data.message || 'Unknown error');
                    }
                })
                .catch(error => {
                    console.error('Network or Fetch error:', error);
                });
        }
        
    });
});
