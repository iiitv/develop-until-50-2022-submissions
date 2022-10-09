import {
  ShoppingCartOutlined,
  MenuOutlined,
  LoginOutlined,
} from "@ant-design/icons";
import { Menu, Input, Space } from "antd";
import React, { useState } from "react";
import "./Navigationbar.css";
const { Search } = Input;

const items = [
  {
    label: "Products",
    key: "Products list",
    icon: <MenuOutlined />,
  },
  {
    label: "Login",
    key: "Login",
    icon: <LoginOutlined />,
  },
  {
    label: "Cart(0)",
    key: "cart",
    icon: <ShoppingCartOutlined />,
  },
];

const Navigationbar = () => {
  const [current, setCurrent] = useState("mail");

  const onClick = (e) => {
    console.log("click ", e);
    setCurrent(e.key);
  };

  const onSearch = (value) => console.log(value);
  return (
    <div className="navbar">
      <h2>BUY THAT</h2>
      <div style={{ width: 325, fontSize: "bold" }}>
        <Menu
          onClick={onClick}
          selectedKeys={[current]}
          mode="horizontal"
          items={items}
        />
      </div>
      <div>
        <Search
          className="searchbar"
          placeholder="input search text"
          onSearch={onSearch}
          enterButton
        />
      </div>
    </div>
  );
};

export default Navigationbar;
