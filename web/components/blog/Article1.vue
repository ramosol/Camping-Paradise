<template>
  <section class="news_detail">
    <div class="container">
      <div class="row">
        <div class="col-xl-8 col-lg-7">
          <div class="news_detail_left">
            <div class="news_detail_image_box">
              <img src="/assets/images/blog/blog1.jpg" alt="" />
              <div class="news_detail_date_box">
                <p>22 janvier 2021</p>
              </div>
            </div>
            <ul class="list-unstyled news_detail__meta">
              <li>
                <nuxt-link to="/news_detail"
                  ><i class="far fa-user-circle"></i>Axel D.</nuxt-link
                >
              </li>
            </ul>
            <div class="news_detail_content">
              <h2>CONSEILS POUR BIEN ORGANISER SON CAMPING</h2>
              <h3>Bien s’équiper</h3>
              <p class="news_detail_text">
                La clef pour bien réussir son camping passe surtout par un
                équipement adéquat. Alors, quoi apporter? Les incontournables :
                une tente, un sac de couchage, un tapis de sol, une bâche, une
                lampe torche ou lampe frontale, un couteau, une trousse de
                premiers soins. Vous pouvez également penser à d’autres
                accessoires aussi utiles, mais cela dépendra de votre mode de
                camping, de l’ultraléger à l’ultraéquipé. N’oubliez pas que tout
                ce que vous prendrez devra être porté, transporté et rapporté.
                C’est particulièrement vrai pour les accessoires de cuisine, qui
                peuvent être encombrants (réchaud à gaz, poêles, casseroles,
                glacières, vaisselle, etc.), mais essentiels pour cuisiner.
                Dormir sous la tente, c’est faire des compromis : manger froid
                ou chaud, privilégier un accessoire au détriment d’un autre.
                Pour s’équiper, il n’est pas nécessaire de tout acheter : faites
                le tour de la famille et de vos amis pour pouvoir emprunter
                quelques items parfois dispendieux. Vous pouvez aussi acheter
                d’occasion, mais assurez-vous que tout fonctionne correctement.
              </p>
              <h3>Tester son matériel</h3>
              <p class="news_detail_text">
                Si vous avez déjà campé auparavant, rien ne garantit que votre
                équipement est encore opérationnel. Pour éviter toute déconvenue
                au moment fatidique de fixer la tente sans piquets, de gonfler
                votre matelas troué ou de tenter d’allumer un réchaud vide, il
                est essentiel de vérifier l’état de son matériel avant de
                partir.
              </p>
              <h3>Regarder les prévisions météo</h3>
              <p class="news_detail_text">
                En général, un réflexe qu’a tout bon vacancier avant de partir
                en voyage. Mais encore plus important quand il s’agit d’aller
                bivouaquer en nature. Ainsi, vous serez à même de préparer vos
                sacs de voyage en fonction des conditions climatiques prévues
                durant votre séjour. Il serait dommage de devoir s’acheter un
                imperméable ou un veston en catastrophe. Faites un tour sur
                Camping Paradise pour avoir des informations précises sur la
                météo!
              </p>
              <img
                src="/assets/images/blog/article1.2.jpg"
                alt=""
                class="news_detail_image_box_article1"
              /><br /><br />
              <h3>Bien charger son sac à dos</h3>
              <p class="news_detail_text">
                Si vous tentez l’expérience camping en mode sac à dos, il va
                falloir faire des choix, car vous ne pourrez pas tout emporter.
                La règle en matière de sac à dos : le poids après chargement ne
                doit jamais dépasser le quart de votre propre poids. Une fois
                votre sélection faite, remplissez votre sac de manière à bien
                répartir le poids afin d’éviter qu’il ne vous tire vers
                l’arrière. Ainsi, placez d’abord les éléments les plus légers,
                comme le sac de couchage au fond de votre sac. Ensuite, mettez
                les choses les plus lourdes (eau, nourriture, etc.) au milieu,
                dans la région du dos. Cela permettra de mieux vous stabiliser
                tout en gardant votre équilibre et votre liberté de mouvement.
                Enfin, sur le dessus et le devant du sac, insérez les articles
                de poids moyen ou volumineux.
              </p>
              <h3>Planifier vos repas</h3>
              <p class="news_detail_text">
                Le camping n’est pas (toujours) synonyme de nourriture sans goût
                et de plats déshydratés. Cela demande simplement d’être mieux
                organisé qu'à l'habitude. Avant de partir, il est possible de
                préparer bon nombre de repas (notamment les sauces pour les
                pâtes, le chili, etc.), qui seront réchauffés une fois sur
                place. Il n’est toutefois pas nécessaire de prendre tout le
                temps des repas chauds. En plus de pouvoir les préparer à
                l’avance, les repas sans cuisson permettent d’économiser du
                combustible, sans pour autant restreindre votre plaisir de
                campeur et de mangeur. Si vous manquez d’idées de recettes,
                faites un tour dans vos livres de cuisine pour réveiller votre
                créativité!
              </p>
            </div>
            <div class="news_detail__bottom">
              <p class="news_detail__tags">
                <span>Tags:</span>
                <a href="#">Organisation,</a>
                <a href="#">Météo,</a>
                <a href="#">Repas</a>
              </p>
              <div class="news_detail__social-list">
                <a href="#"><i class="fab fa-facebook-square"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
              </div>
            </div>
            <div class="author-one">
              <div class="author-one__image">
                <img
                  src="/assets/images/blog/Axel3.jpg"
                  alt=""
                  width="300"
                  height="290"
                  class="axel"
                />
              </div>
              <div class="author-one__content">
                <h3>Axel Denise</h3>
                <p>
                  Curieux, adepte de nouvelles aventures et surtout passioné de
                  la nature, Axel est toujours à la recherche de nouvelles
                  activitées!
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-5">
          <div class="sidebar">
            <div class="sidebar__single sidebar__post">
              <h3 class="sidebar__title">Autres articles</h3>
              <ul class="sidebar__post-list list-unstyled">
                <li>
                  <div class="sidebar__post-image">
                    <img src="/assets/images/blog/blog2_thumbnail.jpg" alt="" />
                  </div>
                  <div class="sidebar__post-content">
                    <h3>
                      <a href="/article2" class="sidebar__post-content_meta"
                        ><i class="far fa-user-circle"></i>Stan J.</a
                      >
                      <nuxt-link to="/Article2"
                        >LA CHECK-LIST ULTIME DU PARFAIT CAMPEUR POUR FAIRE SON
                        SAC A DOS</nuxt-link
                      >
                    </h3>
                  </div>
                </li>
              </ul>
            </div>
            <div class="sidebar__single sidebar__tags">
              <h3 class="sidebar__title">Tags Populaires</h3>
              <div class="sidebar__tags-list">
                <a href="#">Materiels,</a>
                <a href="#">Check-list,</a>
                <a href="#">Healthy,</a>
                <a href="#">Méteo,</a>
                <a href="#">Repas,</a>
                <a href="#">Organisation,</a>
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
  name: "Article1",
};
</script>

<style scoped></style>
