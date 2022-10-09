const express = require('express');
const router = express.Router();
const signUpTemplateCopy = require('../models/userModel');
const products = require('../models/productModel');
// console.log("Routes")

router.post('/signup', (req, res) => {    
  const signedUpUser = new signUpTemplateCopy({
    firstName:req.body.firstName,
    lastName:req.body.lastName,
    userName:req.body.userName,
    email:req.body.email,
    password:req.body.password
  })

  signedUpUser.save()
  .then( (data) => {
    //Data might cause some errors here.....
    res.json(data)
    console.log("Database Updated")
  })
  .catch((error) => {
    res.json(error, () => {
      console.log("What is going on!")
    });
  })
})

router.get('/getproductsone/:id', async (req, res) => {  
  try{
    const productsData = await products.find();
    // console.log(productsData);
    res.status(201).json(productsData)
  }
  catch(err){
    console.log("Error!!!", err.message);
  }
})

router.get('/getProducts', async (req, res) => {  
  try{
    const {id} = req.params;
    // console.log(productsData);
    const individualData = await products.findOne({id: id})
    res.status(201).json(individualData)
  }
  catch(err){
    res.status(400).json(individualData)
    console.log("Error!!!", err.message);
  }
})

module.exports = router