import { getProductsreducer } from "./productsReducers";
import { combineReducers } from "redux";

const rootreducers = combineReducers({
  getProductsData: getProductsreducer
});

export default rootreducers;