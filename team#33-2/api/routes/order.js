const express = require("express")
const verify_token = require("../utils/verify_token")
const { add_order, get_order } = require("../controllers/order")

const router = express.Router()

// CREATE
router.post("/", verify_token, add_order)

// GET
router.get("/", verify_token, get_order)

module.exports = router