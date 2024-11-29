const express = require('express');
const bodyParser = require('body-parser');
const cors = require('cors');

const app = express();
const PORT = 3000;

app.use(cors());
app.use(bodyParser.json());

// Data dummy untuk produk
let products = [
  { id: 1, name: 'Alexander Christie', price: 1000000 },
  { id: 2, name: 'Rolex Gold Series', price: 7000000 },
  { id: 3, name: 'Eiger Sports', price: 600000 },
  { id: 4, name: 'Citizen Gold series', price: 900000 },
  { id: 5, name: 'V-Tech', price: 1000000 },
  { id: 6, name: 'SkMEI AD1881', price: 500000 },
  { id: 7, name: 'Sunlifex 9095', price: 700000 },
  { id: 8, name: 'Dziner 8106', price: 760000 },
  { id: 9, name: 'Jar Vis 001', price: 800000 },
  { id: 10, name: 'Fossil', price: 1000000 },
];

// READ: Get All Products
app.get('/api/products', (req, res) => {
  res.json(products);
});

// CREATE: Add New Product
app.post('/api/products', (req, res) => {
  const newProduct = {
    id: products.length + 1,
    name: req.body.name,
    price: req.body.price,
  };
  products.push(newProduct);
  res.status(201).json(newProduct);
});

// READ: Get Product by ID
app.get('/api/products/:id', (req, res) => {
  const product = products.find((p) => p.id === parseInt(req.params.id));
  if (!product) return res.status(404).json({ message: 'Product not found' });
  res.json(product);
});

// UPDATE: Update Product by ID
app.put('/api/products/:id', (req, res) => {
  const product = products.find((p) => p.id === parseInt(req.params.id));
  if (!product) return res.status(404).json({ message: 'Product not found' });

  product.name = req.body.name || product.name;
  product.price = req.body.price || product.price;
  res.json(product);
});

// DELETE: Delete Product by ID
app.delete('/api/products/:id', (req, res) => {
  const productIndex = products.findIndex((p) => p.id === parseInt(req.params.id));
  if (productIndex === -1) return res.status(404).json({ message: 'Product not found' });

  products.splice(productIndex, 1);
  res.json({ message: 'Product deleted successfully' });
});

app.listen(PORT, () => {
  console.log(`Server is running on http://localhost:${PORT}`);
});
