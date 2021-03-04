<template>
  <div class="site-header__header-one-wrap">
    <div class="topbar-one">
      <div
        class="topbar_bg"
        style="background-image: url(/assets/images/shapes/header-bg.png)"
      ></div>
      <div class="container">
        <div class="topbar-one__left">
          <a href="mailto:info@campingparadise.fr"
            ><span class="icon-message"></span>info@campingparadise.fr</a
          >
          <a href="tel:+33 066 888 0000"
            ><span class="icon-phone-call"></span>+33 066 888 0000</a
          >
        </div>
        <div class="topbar-one__middle">
          <a href="/" class="main-nav__logo">
            <img
              src="/assets/images/resources/logo_paradise1.png"
              class="main-logo"
              alt="Camping Paradise"
              height="105"
              width="200"
            />
          </a>
        </div>
        <div class="topbar-one__right">
          <div class="topbar-one__social">
            <a href="#"><i class="fab fa-facebook-square"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>
    </div>

    <header class="main-nav__header-one">
      <nav
        :class="
          `header-navigation stricky clearfix ${
            sticky ? 'stricked-menu stricky-fixed' : ''
          }`
        "
      >
        <div class="container clearfix">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="main-nav__left">
            <a href="#" class="side-menu__toggler">
              <i @click="mobileToggle = !mobileToggle" class="fa fa-bars"></i>
            </a>
          </div>
          <div class="main-nav__main-navigation">
            <ul class=" main-nav__navigation-box">
              <li class="dropdown current">
                <nuxt-link to="/">Home</nuxt-link>
                <!-- /.sub-menu -->
              </li>
              <li class="dropdown">
                <nuxt-link to="/camping">Camping</nuxt-link>
                <ul>
                  <li><nuxt-link to="/camping">Emplacements</nuxt-link></li>
                </ul>
                <!-- /.sub-menu -->
              </li>
              <li class="dropdown">
                <nuxt-link to="/activite">Activités</nuxt-link>
                <ul>
                  <li><nuxt-link to="/activite">Liste complète</nuxt-link></li>
                </ul>
                <!-- /.sub-menu -->
              </li>
              <li class="dropdown">
                <nuxt-link to="#">Boutique</nuxt-link>
                <ul>
                  <li><nuxt-link to="/product">Produits</nuxt-link></li>
                  <li><nuxt-link to="/cart">Panier</nuxt-link></li>
                  <li><nuxt-link to="/checkout">Checkout</nuxt-link></li>
                </ul>
                <!-- /.sub-menu -->
              </li>
              <li class="dropdown">
                <nuxt-link to="#">Info</nuxt-link>
                <ul>
                  <li><nuxt-link to="/about">A propos</nuxt-link></li>
                  <li><nuxt-link to="/blog">Blog</nuxt-link></li>
                </ul>
                <!-- /.sub-menu -->
              </li>
              <li>
                <nuxt-link to="/contact">Contact</nuxt-link>
              </li>
              <li class="dropdown">
                <nuxt-link :to="token == null ? '/Login' : '/secure'">
                  {{ user.name }}</nuxt-link
                >
                <ul>
                  <li><nuxt-link to="/secure">Mon compte</nuxt-link></li>
                  <li>
                    <nuxt-link to="/addactivity"
                      >Ajouter une activité</nuxt-link
                    >
                  </li>
                  <li><nuxt-link to="/cart">Panier</nuxt-link></li>
                  <li><nuxt-link to="/">Déconnexion</nuxt-link></li>
                </ul>
              </li>
            </ul>
          </div>
          <!-- /.navbar-collapse -->
          <div class="main-nav__right">
            <div class="icon_cart_box">
              <nuxt-link :to="token == null ? '/Login' : '/secure'">
                <span style="padding-left:25px" class="far fa-user"></span>
              </nuxt-link>
              <nuxt-link to="/cart">
                <span
                  style="padding-left:25px"
                  class="fas fa-shopping-cart"
                ></span>
              </nuxt-link>
            </div>
          </div>
        </div>
      </nav>

      <nav
        class="mobile-nav__container"
        :style="`display: ${mobileToggle ? 'block' : 'none'}`"
      >
        <!-- content is loading via js -->

        <ul class="main-nav__navigation-box">
          <li class="dropdown current">
            <div class="menu-holder">
              Home<button class="dropdown-btn">
                <i class="fa fa-angle-right"></i>
              </button>
            </div>
            <!-- /.sub-menu -->
          </li>
          <li class="dropdown">
            <div class="menu-holder">
              Camping<button class="dropdown-btn">
                <i class="fa fa-angle-right"></i>
              </button>
            </div>
            <ul>
              <li><nuxt-link to="/camping">Emplacement</nuxt-link></li>
            </ul>
            <!-- /.sub-menu -->
          </li>
          <li class="dropdown">
            <nuxt-link to="/activite">Activités</nuxt-link>
            <ul>
              <li><nuxt-link to="/activite">Liste complète</nuxt-link></li>
            </ul>
            <!-- /.sub-menu -->
          </li>
          <li class="dropdown">
            <div class="menu-holder">
              Boutique<button class="dropdown-btn">
                <i class="fa fa-angle-right"></i>
              </button>
            </div>
            <ul>
              <li><nuxt-link to="/product">Boutique produits</nuxt-link></li>
              <li><nuxt-link to="/cart">Panier</nuxt-link></li>
              <li><nuxt-link to="/checkout">Checkout</nuxt-link></li>
            </ul>
            <!-- /.sub-menu -->
          </li>
          <li class="dropdown">
            <div class="menu-holder">
              A propos<button class="dropdown-btn">
                <i class="fa fa-angle-right"></i>
              </button>
            </div>
            <!-- /.sub-menu -->
          </li>
          <li class="dropdown">
            <div class="menu-holder">
              Nouvelles<button class="dropdown-btn">
                <i class="fa fa-angle-right"></i>
              </button>
            </div>
            <!-- /.sub-menu -->
          </li>
          <li>
            <nuxt-link to="/contact">Contact</nuxt-link>
          </li>
        </ul>
      </nav>
    </header>
  </div>
</template>

<script>
import { mapGetters } from "vuex";
export default {
  name: "Navbar",
  data() {
    return {
      sticky: false,
      mobileToggle: false,
    };
  },
  mounted() {
    window.addEventListener("scroll", this.handleScroll);
  },
  methods: {
    handleScroll() {
      if (window.scrollY > 70) {
        this.sticky = true;
      } else if (window.scrollY < 70) {
        this.sticky = false;
      }
    },
  },
  computed: {
    ...mapGetters({ user: "login/user", token: "login/token" }),
  },
};
</script>

<style scoped></style>
