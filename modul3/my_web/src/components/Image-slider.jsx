import React, { useState, useEffect } from "react";
import "./ImagesSlider.css";

const ImageSlider = ({ images }) => {
  const [currentImage, setCurrentImage] = useState(0);

  const nextImage = () => {
    setCurrentImage((currentImage + 1) % images.length);
  };

  const previousImage = () => {
    setCurrentImage(currentImage === 0 ? images.length - 1 : currentImage - 1);
  };

  useEffect(() => {
    const interval = setInterval(() => {
      nextImage();
    }, 3000);

    return () => {
      clearInterval(interval);
    };
  }, [currentImage]);

  return (
    <div className="image-slider">
      <div className="image-container">
        <img src={images[currentImage]} alt="Slider" />
      </div>
      <button className="prev-button" onClick={previousImage}>
        <img src="images/back-arrow.png" alt="arrow" srcSet="" />
      </button>
      <button className="next-button" onClick={nextImage}>
        <img src="images/arrow.png" alt="arrow" srcSet="" />
      </button>
    </div>
  );
};

export default ImageSlider;
