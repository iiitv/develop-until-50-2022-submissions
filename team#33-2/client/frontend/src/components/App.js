import React from 'react'
import Header from './Header'
import { BrowserRouter as Router, Switch, Route } from "react-router-dom";
import Home from '../pages/Home';
import ProductPage from '../pages/ProductPage'
import Cart from '../pages/Cart';
import SignIn from '../pages/SignIn'
import Register from "../pages/Register"
import ShippingAddress from '../pages/ShippingAddress';
import PaymentMethod from '../pages/PaymentMethod';
import PlaceOrder from '../pages/PlaceOrder';
import OrderDetails from "../pages/OrderDetails"
import OrderHistory from '../pages/OrderHistory';
import UserProfile from '../pages/UserProfile';
import PrivateRoute from './PrivateRoute';
import SearchResults from '../pages/SearchResults';
import AllProducts from '../pages/Admin/AllProducts';
import CategoryBasedPage from '../pages/CategoryBasedPage';
import Homee from '../pages/Homee';
// import Cards from '../pages/Cards';
// import { Card } from '@material-ui/core';


const App = () => {


    return (
        <>

        <Router>
            <Header/>

            <Switch>
            
                <Route path="/" component={Home} exact></Route>
               

                {/* <Route path="/cards" component={Cards}></Route> */}
               

                <Route exact path="/cart/:id?" component={Cart}></Route>
                <Route exact path="/signin" component={SignIn}></Route>
                <Route exact path="/register" component={Register}></Route>
                <Route path="/products/product/:id" component={ProductPage}></Route>
                <Route path="/shipping" component={ShippingAddress}></Route>
                <Route path="/payment" component={PaymentMethod}></Route>
                <Route path="/placeorder" component={PlaceOrder}></Route>
                <Route path="/order/:id" component={OrderDetails}></Route>
                <Route path="/orderhistory" component={OrderHistory}></Route>
                <PrivateRoute path="/profile" component={UserProfile}></PrivateRoute>
                <Route path="/searchresults/:query" component={SearchResults} exact></Route>
                

                <Route path="/category/:cat" component={CategoryBasedPage} exact></Route>


                {/* Admin sectiojn routes */}
                {/* <Route path="/card" component={Card} exact></Route> */}

                <Route path="/productlist" component={AllProducts}></Route>
                <Route path="/Homee" component={Homee} exact></Route>

            </Switch>
            
            
            

        </Router>

        </>
        
    )
}

export default App
