document.addEventListener('alpine:init', () => {
    Alpine.store('productpage', {
        products: [],

        init() {
            fetch('rout.php')
    .then(response => response.json())
    .then(data => {
        if (data && data.status === 'success' && Array.isArray(data.data)) {
            this.products = data.data;
        } else {
            console.error('Error loading products:', data.message || 'Unknown error');
        }
    })
    .catch(error => console.error('Network or Fetch error:', error));

        },
    });
});
