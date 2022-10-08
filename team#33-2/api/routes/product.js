const express = require("express")
const { get_all_products, get_product } = require("../controllers/product")

const router = express.Router()

// GET ALL
router.get("/", get_all_products)

// GET
router.get("/:id", get_product)

module.exports = router