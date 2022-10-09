import "./App.css";
import Home from "./Components/pages/Home/Home";
import Login from "./Components/pages/auth/Login";
import Register from "./Components/pages/auth/Register";
import { Route, Routes } from "react-router-dom";
import Navigationbar from "./Components/Navbar/Navigationbar";

function App() {
  return (
    <div className="app">
      <Routes>
        <Route exact path="/login" element={<Login />}></Route>
        <Route exact path="/register" element={<Register />}></Route>
        <Navigationbar />
        <Route exact path="/" element={<Home />}></Route>
      </Routes>
    </div>
  );
}

export default App;
