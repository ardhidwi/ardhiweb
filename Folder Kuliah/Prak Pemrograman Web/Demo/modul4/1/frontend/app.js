// Mengambil data produk dari backend dan menampilkan ke tabel
function fetchProducts() {
  fetch('http://localhost:3000/api/products') // Panggil API backend
      .then(response => response.json()) // Ubah response ke JSON
      .then(data => {
          const tableBody = document.querySelector('#productTable tbody');
          tableBody.innerHTML = ''; // Kosongkan tabel sebelum menambahkan data baru

          // Looping data produk untuk ditampilkan
          data.forEach(product => {
              const row = document.createElement('tr');
              row.innerHTML = `
                  <td>${product.id}</td>
                  <td>${product.name}</td>
                  <td>${product.price}</td>
              `;
              tableBody.appendChild(row);
          });
      })
      .catch(error => console.error('Error fetching products:', error));
}

// Menambahkan produk baru ke backend
function addProduct(event) {
  event.preventDefault(); // Mencegah form reload
  const name = document.querySelector('#name').value;
  const price = document.querySelector('#price').value;

  fetch('http://localhost:3000/api/products', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({ name, price }),
  })
      .then(response => response.json())
      .then(() => {
          fetchProducts(); // Refresh tabel setelah produk ditambahkan
          document.querySelector('#addProductForm').reset(); // Reset form
      })
      .catch(error => console.error('Error adding product:', error));
}

// Menjalankan fungsi fetchProducts saat halaman dimuat
window.onload = fetchProducts;

// Event listener untuk form submit
document.querySelector('#addProductForm').addEventListener('submit', addProduct);
