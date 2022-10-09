const products = [];

export const getProductsreducer = (state = {products}, action) => {
  switch(action.type){
    case "SUCCESSFULLY_RECEIEVED_PRODUCTS":
      return{
        products: action.payload
      }
    case  "FAILED_TO_GET_PRODUCTS":
      return{
        products: action.payload
      }
  }
}