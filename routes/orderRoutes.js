const express = require('express');
const Order = require('../models/Order');
const { protect, adminOnly } = require('../middleware/authMiddleware');
const router = express.Router();

// Create an order
router.post('/', protect, async (req, res) => {
  try {
    const { products, total } = req.body;
    if (!products || !Array.isArray(products) || products.length === 0) {
      return res.status(400).json({ message: "Products are required." });
    }
    const order = new Order({ userId: req.user.id, products, total });
    await order.save();
    res.status(201).json(order);
  } catch (error) {
    res.status(500).json({ message: "Failed to create order", error: error.message });
  }
});

// Get orders of the logged-in user
router.get('/my', protect, async (req, res) => {
  try {
    const orders = await Order.find({ userId: req.user.id }).populate('products.productId');
    res.json(orders);
  } catch (error) {
    res.status(500).json({ message: "Failed to fetch user orders", error: error.message });
  }
});

// Admin: Get all orders
router.get('/', protect, adminOnly, async (req, res) => {
  try {
    const orders = await Order.find().populate('products.productId userId');
    res.json(orders);
  } catch (error) {
    res.status(500).json({ message: "Failed to fetch all orders", error: error.message });
  }
});

// Admin: Update any order status
router.put('/:id/status', protect, adminOnly, async (req, res) => {
  try {
    const { status } = req.body;
    if (!status) {
      return res.status(400).json({ message: "Order status is required." });
    }

    const updatedOrder = await Order.findByIdAndUpdate(
      req.params.id,
      { status },
      { new: true }
    );

    if (!updatedOrder) {
      return res.status(404).json({ message: "Order not found" });
    }

    res.json(updatedOrder);
  } catch (error) {
    res.status(500).json({ message: "Failed to update order status", error: error.message });
  }
});

// Admin: Delete an order
router.delete('/:id', protect, adminOnly, async (req, res) => {
  try {
    const order = await Order.findByIdAndDelete(req.params.id);
    if (!order) {
      return res.status(404).json({ message: "Order not found" });
    }
    res.json({ message: "Order deleted successfully" });
  } catch (error) {
    res.status(500).json({ message: "Failed to delete order", error: error.message });
  }
});

module.exports = router;
