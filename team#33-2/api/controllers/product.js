const Product = require("../models/product")

const get_all_products = async (req, res, next) => {
    try {
        const products = await Product.find().select("name price breif url")
        res.send(products)
    } catch (error) {
        next()
    }
}

const get_product = async (req, res, next) => {
    try {
        const products = await Product.findOne({ _id: req.params.id })
        res.send(products)
    } catch (error) {
        console.log(error);
        next()
    }
}

module.exports = { get_all_products, get_product }