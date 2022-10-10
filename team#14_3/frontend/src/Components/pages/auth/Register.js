import React, { useState } from "react";
import "./Register.css";

const Register = () => {
  const [name, setName] = useState("");
  const [age, setAge] = useState("");
  const [email, setEmail] = useState("");
  const [password, setPassword] = useState("");
  const [confPassword, setConfPassword] = useState("");

  const handleChange = (e) => {
    setName(e.target.value);
  };

  const handleAgeChange = (e) => {
    setAge(e.target.value);
  };

  const handleEmailChange = (e) => {
    setEmail(e.target.value);
  };

  const handlePasswordChange = (e) => {
    setPassword(e.target.value);
  };

  const handleConfPasswordChange = (e) => {
    setConfPassword(e.target.value);
  };

  const handleSubmit = (e) => {
    if (password != confPassword) {
      alert("password Not Match");
    } else {
      alert(
        'A form was submitted with Name :"' +
          name +
          '" ,Age :"' +
          age +
          '" and Email :"' +
          email +
          '"'
      );
    }
    e.preventDefault();
  };
  return (
    <div>
      <header className="register">
        <form
          onSubmit={(e) => {
            handleSubmit(e);
          }}
        >
          <h1 style={{ marginBottom: 25 }}> Sign-up Form </h1>
          <label>Name:</label>

          <input
            type="text"
            value={name}
            required
            onChange={(e) => {
              handleChange(e);
            }}
          />

          <label>Age:</label>

          <input
            type="text"
            value={age}
            required
            onChange={(e) => {
              handleAgeChange(e);
            }}
          />

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

          <label>Confirm Password:</label>

          <input
            type="password"
            value={confPassword}
            required
            onChange={(e) => {
              handleConfPasswordChange(e);
            }}
          />

          <input type="submit" value="Submit" />
        </form>
      </header>
    </div>
  );
};

export default Register;
