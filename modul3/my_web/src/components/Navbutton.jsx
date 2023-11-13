import React from "react";
import { Link } from "react-router-dom";

const Navbutton = ({ to, children }) => {
  return (
    <Link to={to} className="circle-button">
      {children}
    </Link>
  );
};

export default Navbutton;
