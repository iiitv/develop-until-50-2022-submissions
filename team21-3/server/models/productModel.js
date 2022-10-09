const mongoose = require('mongoose')


const productsSchema = new mongoose.Schema({
  id: {
    type: String,
    required: true
  },
  img: {
    type: String,
    default: "https://www.och-lco.ca/wp-content/uploads/2015/07/unavailable-image.jpg"
  },
  title: {
    type: Object,
  },
  details: {
    type: String,    
  },
  price: {
    type: Object,
    min: 0    
  },
  discount: {
    type: String
  },
  tags: {
    type: Array
  }


});

module.exports = mongoose.model('products', productsSchema)