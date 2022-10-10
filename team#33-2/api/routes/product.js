const express = require("express")
const verify_token = require("../utils/verify_token")

const { add_product, update_product, delete_product, get_all_products, get_all_products_of_name, get_product } = require("../controllers/product")

const router = express.Router()

// CREATE
router.post("/", verify_token, add_product)

// UPDATE
router.put("/:id", verify_token, update_product)

// DELETE
router.delete("/:id", verify_token, delete_product)

// GET ALL
router.get("/", verify_token, get_all_products)
router.get("/name/:title", verify_token, get_all_products_of_name)

// GET
router.get("/:id", verify_token, get_product)

module.exports = router