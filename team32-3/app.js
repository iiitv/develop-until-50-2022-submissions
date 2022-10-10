const express = require('express');
const http = require('http');
const bcrypt = require('bcrypt');
const path = require("path");
const bodyParser = require('body-parser');

const app= express();
const server = http.createServer(app);

app.use(bodyParser.urlencoded({extended : false}));
app.use(express.static(path.join(__dirname,'./')));

app.get('/',(req,res) => {
    res.sendFile(path.join(__dirname,'./login.html'));
});
const mongoose = require("mongoose");

mongoose.connect("mongodb+srv://root:rootuser@cluster0.tfekrwi.mongodb.net/?retryWrites=true&w=majority").then(() => {
    console.log("Connected");
}).catch((err)=>{
    console.log(err);
})

const userSchema = new mongoose.Schema({
    username:String,
    password: String,
    email: String
});
const Users = new mongoose.model('User',userSchema);

const write = async(obj) =>{
    // let hashPassword = await bcrypt.hash(obj.password, 10);
    let hashPassword = obj.password;
    const val = new Users({
        username:obj.username,
        password:hashPassword,
        email:obj.email
    })
    const result = await val.save();
    console.log(result);
}


const check = async(obj,res) =>{
    try{
        const result = await Users.exists({username:obj.username});
        console.log(result);
        if(result===null){
            write(obj);
            res.send("<div align ='center'><h2>Registration successful</h2></div><br><br><div align='center'><a href='./login.html'>login</a></div><br><br><div align='center'><a href='./register.html'>Register another user</a></div>");
        }
        else{
            res.send("<div align ='center'><h2>Email already used</h2></div><br><br><div align='center'><a href='./register.html'>Register again</a></div>");
        }
    }
    catch(err){
        console.log(err);
        res.send("Internal server error");
    }
}


const login = async(obj,res) =>{
    try{
        // let hashPassword = await bcrypt.hash(obj.password, 10);
        let hashPassword = obj.password;
        // console.log(hashPassword);
        console.log(obj.username);
        console.log(obj.password);
        const result = await Users.findOne({username:obj.username,password:hashPassword});
        console.log(result);
        if(result!==null){
            res.sendFile(path.join(__dirname,'./home.html'));
        }
        else{
            res.send("<div align ='center'><h2>Invalid email or password</h2></div><br><br><div align ='center'><a href='./login.html'>login again</a></div>");
        }
    }
    catch(err){
        console.log(err);
        res.send("Internal server error");
    }
}




app.post('/register',async(req,res) => {
    try{
        check(req.body,res);
    } catch(err){
        console.log(err);
        res.send("Internal server error");
    }
});

app.post('/login',async(req,res) => {
    try{
        login(req.body,res);
    } catch{
        res.send("Internal server error");
    }
});



server.listen(3000, function(){
    console.log("server is listening on port: 3000");
});