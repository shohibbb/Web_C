import React from "react";
import "./Hero.css";

export const Hero = () => {
  return (
    <div className="hero">
      <img src="images/hero.jpg" alt="hero" srcset="" />
      <div className="welcome">
        <h1>Selamat Datang</h1>
        <p>di website praktikum pemrograman web</p>
      </div>
    </div>
  );
};
