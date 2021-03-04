<template>
  <section class="banner_four_section">
    <div class="banner-carousel-four owl-theme owl-carousel">
      <no-ssr>
        <carousel :items="1" :autoplay="true" :nav="false">
          <!-- Slide Item -->
          <div class="slide-item">
            <div
              class="image-layer"
              style="background-image: url(/assets/images/main-slider/slide1.jpg);"
            ></div>
            <div class="auto-container">
              <div class="content-box">
                <div class="text-right content">
                  <div class="inner">
                    <h1>
                      <span>Camping</span> Paradise:<br />
                      Les plus beaux<br />
                      sites de camping
                    </h1>
                    <div class="link-box">
                      <nuxt-link to="/about" class="thm-btn"
                        >Découvrir</nuxt-link
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide Item -->
          <div class="slide-item">
            <div
              class="image-layer"
              style="background-image: url(/assets/images/main-slider/slide3.jpg);"
            ></div>
            <div class="auto-container">
              <div class="content-box">
                <div class="text-right content">
                  <div class="inner">
                    <h1>
                      <span>Camping</span> Paradise<br />
                      Activités à<br />
                      Proximité
                    </h1>
                    <div class="link-box">
                      <nuxt-link to="/about" class="thm-btn"
                        >Découvrir</nuxt-link
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide Item -->
          <div class="slide-item">
            <div
              class="image-layer"
              style="background-image: url(/assets/images/main-slider/slide2.jpg);"
            ></div>
            <div class="auto-container">
              <div class="content-box">
                <div class="text-right content">
                  <div class="inner">
                    <h1>
                      <span>Camping</span> Paradise<br />
                      Notre boutique<br />
                      En ligne
                    </h1>
                    <div class="link-box">
                      <nuxt-link to="/about" class="thm-btn"
                        >Découvrir</nuxt-link
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </carousel>
      </no-ssr>
    </div>
  </section>
</template>

<script>
export default {
  name: "Slider",
};
</script>

<style scoped></style>
