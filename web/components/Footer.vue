<template>
  <div>
    <footer class="site-footer">
      <div class="site-footer_farm_image">
        <img
          src="/assets/images/resources/footerBackground.png"
          alt="Camping"
        />
      </div>

      <div class="container">
        <div class="row no-gutters">
          <div class="col-xl-4 col-lg-4 col-md-6">
            <div
              class="footer-widget__column footer-widget__about wow fadeInUp"
              data-wow-delay="100ms"
            >
              <div class="footer-widget__title">
                <h3>A propos</h3>
              </div>
              <div class="footer-widget_about_text">
                <p>
                  Lorem ipsum dolor sit amet, adipiscing elit. Nulla placerat
                  posuere dui. Pellentesque venenatis sem non lacus ac auctor.
                </p>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-2 col-md-6">
            <div
              class="footer-widget__column footer-widget__link wow fadeInUp"
              data-wow-delay="200ms"
            >
              <div class="footer-widget__title">
                <h3>Explorer</h3>
              </div>
              <ul class="footer-widget__links-list list-unstyled">
                <li><a href="#">A propos</a></li>
                <li><a href="#">Camping</a></li>
                <li><a href="#">Activités</a></li>
                <li><a href="#">Boutique</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-6">
            <div
              class="footer-widget__column footer-widget__news wow fadeInUp"
              data-wow-delay="300ms"
            >
              <div class="footer-widget__title">
                <h3>Blog</h3>
              </div>
              <ul class="footer-widget__news list-unstyled">
                <li>
                  <div class="footer-widget__news_text">
                    <p>
                      <a href="/blog">
                        Conseils pour bien organiser son camping</a
                      >
                    </p>
                  </div>
                  <div class="footer-widget__news_date_box">
                    <p>19 Jan, 2021</p>
                  </div>
                </li>
                <li>
                  <div class="footer-widget__news_text">
                    <p>
                      <a href="/blog"
                        >Les 10 choses indispensables pour partir en camping</a
                      >
                    </p>
                  </div>
                  <div class="footer-widget__news_date_box">
                    <p>30 Oct, 2020</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-6">
            <div
              class="footer-widget__column footer-widget__contact wow fadeInUp"
              data-wow-delay="400ms"
            >
              <div class="footer-widget__title">
                <h3>Contact</h3>
              </div>
              <div class="footer-widget_contact">
           <p>    
      <strong> CAMPING PARADISE Group 🇫🇷</strong><br>
      3 Place Paul Bec<br>
      34000 Montpellier<br>
      France<br>
      
      </p>
                <a href="mailto:info@camping-paradise.fr"
                  >info@camping-paradise.fr</a
                ><br />
                <a href="tel:+33 06-888-0000">+33 06 888 0000</a>
                <div class="site-footer__social">
                  <a href="#"><i class="fab fa-facebook-square"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <div class="site-footer_bottom">
      <div class="container">
        <div class="site-footer_bottom_copyright">
          <p>
            @ All copyright Epitech Bruxelles 2021,
            <a href="#">camping-paradise.fr</a>
          </p>
        </div>
        <div class="site-footer_bottom_menu">
          <ul class="list-unstyled">
            <li><a href="#">Confidentialité</a></li>
            <li><a href="#">Termes d'utilisations</a></li>
          </ul>
        </div>
      </div>
    </div>

    <a
      @click="scrollTop"
      href="#"
      class="scroll-to-target scroll-to-top"
      :style="`display: ${scrollBtn ? 'block' : 'none'}`"
      ><i class="fa fa-angle-up"></i
    ></a>
  </div>
</template>

<script>
export default {
  name: "Footer",
  data() {
    return {
      scrollBtn: false,
    };
  },
  mounted() {
    window.addEventListener("scroll", this.handleScroll);
  },

  methods: {
    handleScroll() {
      if (window.scrollY > 70) {
        this.scrollBtn = true;
      } else if (window.scrollY < 70) {
        this.scrollBtn = false;
      }
    },

    scrollTop() {
      window.scrollTo(0, 0);
    },
  },
};
</script>

<style scoped></style>
