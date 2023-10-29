import React from "react";
import { Hero } from "../components/hero";
import { Navbar } from "../components/Navbar";
import { Footer } from "../components/Footer";

function Home() {
  return (
    <div>
      <Navbar />
      <Hero />
      <Footer />
    </div>
  );
}

export default Home;
