// ()
export const getProducts = () => async (dispatch) => {
  try {
    const data = await axios.get("http://localhost:4000/app/getProducts").then((res) => {
      console.log(res);
      dispatch({ type: "SUCCESSFULLY_RECEIEVED_PRODUCTS", payload: res })
    })
      .catch((err) => {
        console.log("Error Found!");
        console.log(err);
      });

  }
  catch (err) {
    dispatch({ type: "FAILED_TO_GET_PRODUCTS", payload:err.response })
  }
}