<template>
  <section class="blog-one">
    <div class="container">
      <div class="text-center block-title">
        <p>Venez découvrir:</p>
        <h3>Notre Mini-Blog!</h3>
        <div class="leaf">
          <img src="/assets/images/resources/leaf.png" alt="" />
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-6">
          <div class="blog_one_single wow fadeInUp" data-wow-delay="300ms">
            <div class="blog_one_image">
              <div class="blog_image">
                <img
                  src="/assets/images/blog/blog1.jpg"
                  alt="Article 1"
                  height="320"
                />
                <div class="blog_one_date_box">
                  <p>22 janvier 2021</p>
                </div>
              </div>
              <div class="blog-one__content">
                <ul class="list-unstyled blog-one__meta">
                  <li>
                    <nuxt-link to="/article2"
                      ><i class="far fa-user-circle"></i>Axel D.</nuxt-link
                    >
                  </li>
                </ul>
                <h3>
                  <nuxt-link to="/Article1"
                    >CONSEILS POUR BIEN<br />ORGANISER SON CAMPING</nuxt-link
                  >
                </h3>
                <div class="blog_one_text">
                  <p>
                    Comme tout bon voyage, partir en camping demande un minimum
                    d’organisation, de planification et de préparation. Voici
                    quelques trucs et astuces utiles pour faire de vous le
                    campeur parfait!
                  </p>
                </div>
                <div class="read_more_btn">
                  <nuxt-link to="/article1"
                    ><i class="fa fa-angle-right"></i>Lire l'article</nuxt-link
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6">
          <div class="blog_one_single wow fadeInUp" data-wow-delay="600ms">
            <div class="blog_one_image">
              <div class="blog_image">
                <img
                  src="/assets/images/blog/blog2.jpg"
                  alt="Article 2"
                  height="320"
                />
                <div class="blog_one_date_box">
                  <p>16 janvier 2021</p>
                </div>
              </div>
              <div class="blog-one__content">
                <ul class="list-unstyled blog-one__meta">
                  <li>
                    <nuxt-link to="/article2"
                      ><i class="far fa-user-circle"></i>Stan J.</nuxt-link
                    >
                  </li>
                </ul>
                <h3>
                  <nuxt-link to="/article2"
                    >LA CHECK-LIST ULTIME DU PARFAIT CAMPEUR POUR FAIRE<br />SON
                    SAC A DOS</nuxt-link
                  >
                </h3>
                <div class="blog_one_text">
                  <p>
                    Camper, c’est le plaisir de retrouver des choses simples et
                    partir à l’aventure sans forcément aller loin de chez soi.
                    Mais ça peut vite virer au cauchemar...
                  </p>
                </div>
                <div class="read_more_btn">
                  <nuxt-link to="/article2"
                    ><i class="fa fa-angle-right"></i>Lire l'article</nuxt-link
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "BlogOne",
};
</script>

<style scoped></style>
