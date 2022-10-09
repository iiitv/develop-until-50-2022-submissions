const mongoose = require("mongoose")

const product_schema = mongoose.Schema({
    name: {
        type: String,
        required: true
    },
    price: {
        type: Number,
        required: true
    },
    brand: {
        type: String,
        required: true
    },
    breif: {
        type: String,
        required: true
    },
    desc: {
        type: String,
        required: true
    },
    category: {
        type: [String],
        default: []
    },
    stock: {
        type: Number,
        min: 0,
        required: true
    },
    url: {
        type: [Number],
        required: true
    }
})

module.exports = mongoose.model("product", product_schema)