import React from "react";
import "./Footer.css";

export const Footer = () => {
  return (
    <div className="footer">
      <div className="footer-box-image">
        <img src="images/logo-ilab.png" alt="logo" srcset="" />
        <p>Copyright © 2022 infinite learning</p>
      </div>
      <div className="footer-box">
        <h6>Services</h6>
        <br />
        <p>Email Marketing</p>
        <p>Campaigns</p>
        <p>Branding</p>
        <p>Offline</p>
      </div>
      <div className="footer-box">
        <h6>About</h6>
        <br />
        <p>Our Story</p>
        <p>Benefits</p>
        <p>Team</p>
        <p>Careers</p>
      </div>
      <div className="footer-box">
        <h6>Follow Us</h6>
        <br />
        <div className="content">
          <img src="images/logo-facebook.png" alt="facebook" srcset="" />
          <p>Facebook</p>
        </div>
        <div className="logo-twitter">
          <img src="images/logo-twitter.png" alt="Twitter" srcset="" />
          <p>Twitter</p>
        </div>
        <div className="logo-ig">
          <img src="images/logo-instagram.png" alt="Instagram" srcset="" />
          <p>Instagram</p>
        </div>
      </div>
    </div>
  );
};
