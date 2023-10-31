import React from "react";
import "./Home.css";
import ImageSlider from "../components/Image-slider";
export const Home = () => {
  const images = [
    "images/msi.png",
    "images/nitro-5.png",
    "images/nitro-16.png",
  ];
  return (
    <div className="home">
      <ImageSlider images={images} />
      <p>WHICH MIGHT INTEREST YOU</p>
      <div className="box">
        <div className="button">
          <button className="item">
            <img src="images/mouse.png" alt="mouse" srcset="" />
          </button>
          <button className="item">
            <img src="images/keyboard.png" alt="keyboard" srcset="" />
          </button>
          <button className="item">
            <img src="images/monitor.png" alt="monitor" srcset="" />
          </button>
          <button className="item">
            <img src="images/headphone.png" alt="headphone" srcset="" />
          </button>
          <button className="item">
            <img src="images/desktop.png" alt="desktop" srcset="" />
          </button>
        </div>
      </div>
    </div>
  );
};
