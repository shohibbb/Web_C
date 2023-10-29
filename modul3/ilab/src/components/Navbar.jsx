import React from "react";
import { Link } from "react-router-dom";
import "./style.css";

export const Navbar = () => {
  return (
    <div>
      <h2>Navbar</h2>
      <nav>
        <ul>
          <li>
            <Link to="/">Home</Link>
            <Link to="/About">About</Link>
            <Link to="/Contact">Contact</Link>
          </li>
        </ul>
      </nav>
    </div>
  );
};
