const express = require("express")
const { add_product, update_product, delete_product, get_all_products, get_product } = require("../controllers/product")

const router = express.Router()

// CREATE
router.post("/", add_product)

// UPDATE
router.put("/:id", update_product)

// DELETE
router.delete("/:id", delete_product)

// GET ALL
router.get("/", get_all_products)

// GET
router.get("/:id", get_product)

module.exports = router