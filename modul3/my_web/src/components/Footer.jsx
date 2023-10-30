import React from "react";
import "./Footer.css";
export const Footer = () => {
  return (
    <div className="footer">
      <div className="footer-box">
        <p>Follow Us</p>
        <div className="info">
          <div className="sosmed">
            <img src="images/ig-icon.png" alt="instagram" srcset="" />
            <p>instagram</p>
          </div>
          <div className="sosmed">
            <img src="images/fb.png" alt="tiktok" srcset="" />
            <p>Facebook</p>
          </div>
        </div>
        <div className="info">
          <div className="sosmed">
            <img src="images/tiktok.png" alt="tiktok" srcset="" />
            <p>Tiktok</p>
          </div>
          <div className="sosmed">
            <img src="images/twitter.png" alt="Twitter" srcset="" />
            <p>Twitter</p>
          </div>
        </div>
      </div>
      <div className="footer-box">
        <p>Visit Our Offline Store</p>
        <div className="info">
          <div className="sosmed">
            <img src="images/loc-pin.png" alt="location" srcset="" />
            <p>Our location</p>
          </div>
          <div className="sosmed">
            <img src="images/loc-pin.png" alt="location" srcset="" />
            <p>Our location</p>
          </div>
        </div>
        <div className="info">
          <div className="sosmed">
            <img src="images/loc-pin.png" alt="location" srcset="" />
            <p>Our location</p>
          </div>
          <div className="sosmed">
            <img src="images/loc-pin.png" alt="location" srcset="" />
            <p>Our location</p>
          </div>
        </div>
      </div>
    </div>
  );
};
