<template>
  <div>
    <Navbar />
    <Contact />
    <Footer />
  </div>
</template>

<script>
import Navbar from "../components/Navbar";
import Contact from '../components/Contact';
import Footer from "../components/Footer";
export default {
  components: {
    Navbar,
    Contact,
    Footer,
    
  },
  head() {
    return {
      title: "Camping Paradise  | Contact",
    };
  },
};
</script>