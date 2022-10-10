const mongoose = require("mongoose")

const order_schema = mongoose.Schema({
    user_id: {
        type: String,
        required: true
    },
    products: [{
        product_id: String,
        name: String,
        price: Number,
        quantity: Number,
        brand: String
    }]
}, { timestamps: true })

module.exports = mongoose.model("order", order_schema)