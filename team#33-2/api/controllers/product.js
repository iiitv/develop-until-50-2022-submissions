const Product = require("../models/product")

const add_product = async (req, res, next) => {
    try {
        let product = new Product(req.body)
        await product.save()
        res.send(product)
    } catch (error) {
        next()
    }
}

const update_product = async (req, res, next) => {
    try {
        let product = await Product.findByIdAndUpdate(req.params.id, req.body, { new: true })
        res.send(product)
    } catch (error) {
        next()
    }
}

const delete_product = async (req, res, next) => {
    try {
        let product = await Product.findByIdAndDelete(req.params.id)
        res.send(product)
    } catch (error) {
        next()
    }
}

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

module.exports = { add_product, update_product, delete_product, get_all_products, get_product }