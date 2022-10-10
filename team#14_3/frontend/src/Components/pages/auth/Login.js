import React, { useState } from "react";
import "./login.css";

const Login = () => {
  const [email, setEmail] = useState("");
  const [password, setPassword] = useState("");

  const handleEmailChange = (e) => {
    setEmail(e.target.value);
  };

  const handlePasswordChange = (e) => {
    setPassword(e.target.value);
  };

  const handleSubmit = (e) => {
    e.preventDefault();
  };
  return (
    <div className="login">
      <form
        onSubmit={(e) => {
          handleSubmit(e);
        }}
      >
        <h1>Login Form</h1>
        <label>Email:</label>
        <input
          type="email"
          value={email}
          required
          onChange={(e) => {
            handleEmailChange(e);
          }}
        />

        <label>Password:</label>
        <input
          type="password"
          value={password}
          required
          onChange={(e) => {
            handlePasswordChange(e);
          }}
        />
        <input type="submit" value="Submit" />
      </form>
    </div>
  );
};

export default Login;
