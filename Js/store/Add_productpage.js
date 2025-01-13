document.addEventListener('alpine:init', () => {
    Alpine.store('adminAdd', {
        // Define form fields
        name: '',
        description: '',
        price: '',
        category: '',
        stock_quantity: '',
        image: '',
        products: [], // To store added products

        // Method to create a product
        createProduct() {
            // Gather product data from form fields
            const productData = {
                name: this.name.trim(),
                description: this.description.trim(),
                price: parseFloat(this.price),
                category: this.category.trim(),
                stock_quantity: this.stock_quantity ? parseInt(this.stock_quantity, 10) : null,
                image: this.image.trim(),
            };

            // Log the product data being sent for debugging
            console.log('Sending product data:', productData);

            // Send POST request to server
            fetch('../../Addrout.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify(productData),
            })
            .then(async (response) => {
                // Capture raw response for debugging
                const text = await response.text();
                console.log('Raw server response:', text);

                // Try to parse the response as JSON
                try {
                    const data = JSON.parse(text);
                    console.log('Parsed response:', data);

                    if (data.status === 'success') {
                        // Add the new product to the products array
                        this.products.push(data.data);
                        alert('Product created successfully!');
                        this.resetForm(); // Reset form after success
                    } else {
                        console.error('Error from server:', data.message);
                        alert('Error: ' + data.message);
                    }
                } catch (jsonError) {
                    console.error('Failed to parse JSON response:', jsonError);
                    alert('Unexpected server response. Check the console for details.');
                }
            })
            .catch((error) => {
                // Handle network errors
                console.error('Network error:', error);
                alert('Network error: ' + error.message);
            });
        },

        // Reset the form fields
        resetForm() {
            this.name = '';
            this.description = '';
            this.price = '';
            this.category = '';
            this.stock_quantity = '';
            this.image = '';
        },
    });
});
