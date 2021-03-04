<template>
  <section class="testimonials-one">
    <div class="container">
      <div class="row">
        <div class="col-xl-6 col-lg-6">
          <div class="testimonials_one_left">
            <div class="text-left block-title">
              <p>Témoignages</p>
              <h3>Ce que nos clients pensent<br />de Camping Paradise</h3>
              <div class="leaf">
                <img src="/assets/images/resources/leaf.png" alt="" />
              </div>
            </div>
            <div class="testimonials_one_text">
              <p>
                Les voyageurs aiment nous partager leurs premières expériences
                de voyage via notre communauté. Des anecdotes et histoires de
                voyage inoubliables, de grandes réussites mais aussi des ratés,
                des aventures à couper le souffle…
              </p>
            </div>
            <div class="project_counted wow fadeInUp" data-wow-delay="300ms">
              <div class="icon_box">
                <span class="fas fa-smile-beam"></span>
              </div>
              <div class="project-content">
                <h3 class="counter">200 0000</h3>
                <p>Campeurs heureux à travers toute l'Europe</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6">
          <div class="testimonials_one_content">
            <div class="testimonials_one_carousel owl-carousel">
              <no-ssr>
                <carousel :items="1" :autoplay="true" :nav="false" :dots="true">
                  <div class="testimonials_one_single_item">
                    <div class="text">
                      <p>
                        Excellente plateforme pour trouver le plus beau des
                        endroits pour faire du camping sauvage. Merci Camping
                        Paradise!
                      </p>
                    </div>
                    <div class="client_thumbnail">
                      <div class="client_title">
                        <h4>Alexis Resses</h4>
                        <p>Client depuis 2014</p>
                      </div>
                    </div>
                  </div>
                  <div class="testimonials_one_single_item">
                    <div class="text">
                      <p>
                        Très bon site pour trouver des accesoires de camping.
                        Sacs de couchage et lampes de poche aux meilleurs prix!
                        Et surtout top qualité!
                      </p>
                    </div>
                    <div class="client_thumbnail">
                      <div class="client_title">
                        <h4>Amine Bachri</h4>
                        <p>Client depuis 2008</p>
                      </div>
                    </div>
                  </div>
                  <div class="testimonials_one_single_item">
                    <div class="text">
                      <p>
                        Mes enfants, ma femme et moi avons découvert des
                        activités très enrichissantes grâce à Camping Paradise!
                        J'adore! Merci!
                      </p>
                    </div>
                    <div class="client_thumbnail">
                      <div class="client_title">
                        <h4>Marco DF.</h4>
                        <p>Client depuis 2019</p>
                      </div>
                    </div>
                  </div>
                </carousel>
              </no-ssr>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "CustomerReview",
};
</script>

<style scoped></style>
