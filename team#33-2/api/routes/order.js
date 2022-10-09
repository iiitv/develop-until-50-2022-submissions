const express = require("express")
const { add_order, get_order } = require("../controllers/order")

const router = express.Router()

// CREATE
router.post("/", add_order)

// GET
router.get("/", get_order)

module.exports = router