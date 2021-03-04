<template>
  <div class="brand-one">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="brand-one-carousel">
            <no-ssr>
              <carousel
                :autoplay="true"
                :dots="false"
                :nav="false"
                :responsive="{
                  0: { items: 1 },
                  640: { items: 2 },
                  992: { items: 3 },
                  1024: { items: 5 },
                }"
              >
                <div class="single_brand_item">
                  <a href="#"
                    ><img src="/assets/images/meteo/meteo.jpg" alt="metéo"
                  /></a>
                </div>
                <div class="single_brand_item">
                  <a href="#"
                    ><img src="/assets/images/meteo/meteo.jpg" alt="metéo"
                  /></a>
                </div>
                <div class="single_brand_item">
                  <a href="#"
                    ><img src="/assets/images/meteo/meteo.jpg" alt="metéo"
                  /></a>
                </div>
                <div class="single_brand_item">
                  <a href="#"
                    ><img src="/assets/images/meteo/meteo.jpg" alt="metéo"
                  /></a>
                </div>
                <div class="single_brand_item">
                  <a href="#"
                    ><img src="/assets/images/meteo/meteo.jpg" alt="metéo"
                  /></a>
                </div>
                <div class="single_brand_item">
                  <a href="#"
                    ><img src="/assets/images/meteo/meteo.jpg" alt="metéo"
                  /></a>
                </div>
                <div class="single_brand_item">
                  <a href="#"
                    ><img src="/assets/images/meteo/meteo.jpg" alt="metéo"
                  /></a>
                </div>
                <div class="single_brand_item">
                  <a href="#"
                    ><img src="/assets/images/meteo/meteo.jpg" alt="metéo"
                  /></a>
                </div>
                <div class="single_brand_item">
                  <a href="#"
                    ><img src="/assets/images/meteo/meteo.jpg" alt="metéo"
                  /></a>
                </div>
                <div class="single_brand_item">
                  <a href="#"
                    ><img src="/assets/images/meteo/meteo.jpg" alt="metéo"
                  /></a>
                </div>
              </carousel>
            </no-ssr>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Meteo",
};
</script>

<style scoped></style>
