<template>
  <div>
    <Navbar />
    <PageHeader title="Modification du compte utilisateur" />
    <EditAccount />
    <Footer />
  </div>
</template>

<script>
import Navbar from "../components/Navbar";
import PageHeader from "../components/PageHeader";
import EditAccount from "../components/auth/EditAccount";
import Footer from "../components/Footer";
export default {
  components: {
    Navbar,
    PageHeader,
    EditAccount,
    Footer,
  },
  head() {
    return {
      title: "Camping Paradise  | Compte",
    };
  },
};
</script>
