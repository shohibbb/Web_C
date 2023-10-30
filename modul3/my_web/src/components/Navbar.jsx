import React from "react";
import "./Navbar.css";

export const Navbar = () => {
  return (
    <div className="navbar">
      <div className="right">
        <img src="images/logo-ilab.png" alt="logo" srcset="" />
      </div>
      <div className="title-web">
        <h3>Galaxy Solusindo</h3>
      </div>
      <div>
        <button className="circle-button">
          <img src="images/search-icon.png" alt="search" srcset="" />
        </button>
        <button className="circle-button">
          <img src="images/shopping-cart.png" alt="message" srcset="" />
        </button>
        <button className="circle-button">
          <img src="images/message-circle.png" alt="message" srcset="" />
        </button>
        <button className="circle-button">
          <img src="images/user-icon.png" alt="user" srcset="" />
        </button>
      </div>
    </div>
  );
};
