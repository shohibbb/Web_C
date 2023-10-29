import React from "react";
import { Link } from "react-router-dom";
import "./style.css";
export const Navbar = () => {
  return (
    <headers>
      <h2>Navbar</h2>
      <nav>
        <ul>
          <li>
            <Link to="/">Home</Link>
          </li>
          <li>
            <Link to="/About">About</Link>
          </li>
          <li>
            <Link to="/Contact">Contact</Link>
          </li>
        </ul>
      </nav>
    </headers>
  );
};
