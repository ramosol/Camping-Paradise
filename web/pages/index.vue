<template>
  <div>
    <Navbarhome />
    <Slider />
    <DetailsOne />
    <CustomerReview />
    <Video />
    <Footer />
  </div>
</template>

<script>
import Slider from "../components/homepage/Slider";
import Navbarhome from "../components/homepage/Navbarhome";
import DetailsOne from "../components/DetailsOne";
import CustomerReview from "../components/homepage/CustomerReview.vue";
import Video from "../components/homepage/Video";
import Footer from "../components/Footer.vue";


export default {
  components: {
    Navbarhome,
    Slider,
    DetailsOne,
    CustomerReview,
    Video,
    Footer,
  },
  data(){
    return {
      currentPosition: {}
    }
  },
  head() {
    return {
      title: "Camping Paradise  | Home",
    };
  },
};
</script>
