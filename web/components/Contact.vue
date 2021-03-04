<template>

<div>
  <br />
<div id="titre" class="titre">
    <h1 ><strong> pouvons-nous
vous aider ?</strong></h1>
 <h3>Vous avez perdu le nord ? <br />Comptez sur nous pour vous réorienter. Vous avez une question ? 
    Vous souhaitez vous plaindre ou formuler un commentaire sur un achat effectué en ligne  ? <br />
    Nous sommes joignables du lundi au dimanche (sauf les jours fériés) de 10h à 22h,  ci-dessous vous pouvez retrouver comment nous joindre.</h3>
<br/>

 <div id="adress-info" class="adress-info">
     <p><strong>Du lundi au dimanche: </strong><br>10:00 à 22:00 <br />
      <strong> CAMPING PARADISE Group 🇫🇷</strong><br>
      3 Place Paul Bec<br>
      34000 Montpellier<br>
      France<br>
      +33 1 44 08 00 75
      </p>
                                
 </div>

</div>
  <div id="contact-form" class="contact-form">
    <h1 class="contact-form_title">Contact Form</h1>
    <div class="separator"></div>

    <form class="form">
      <input
        required
        name="name"
        placeholder="Nom"
        type="text"
        autocomplete="off"
      />
      <input
        required
        name="email"
        placeholder="Email"
        type="email"
        autocomplete="off"
      />
      <textarea name="message" rows="4" placeholder="Message"></textarea>
      <button class="button">Send</button>
    </form>
    <br/>
  </div>
  </div>
</template>

<script>
export default {
  name: "Contact",
  data() {
    return {
      fab: false,
    };
  },
  contact: {
    names: "",
    email: "",
    message: "",
  },
};
</script>
<style scoped>
body {
  background: #f1f1f1;
  font-family: "Roboto", sans-serif;
}

.contact-form {
  font-family: 16px;
  margin: 0 auto;
  max-width: 600px;
  width: 100%;
}

.contact-form .separator {
  border-bottom: solid 1px #ccc;
  margin-bottom: 15px;
}

.contact-form .form {
  display: flex;
  flex-direction: column;
  font-size: 16px;
}

.contact-form_title {
  color: #333;
  text-align: left;
  font-size: 28px;
}

.contact-form input[type="email"],
.contact-form input[type="text"],
.contact-form textarea {
  border: solid 1px #e8e8e8;
  font-family: "Roboto", sans-serif;
  padding: 10px 7px;
  margin-bottom: 15px;
  outline: none;
}

.contact-form textarea {
  resize: none;
}
.titre {
    text-align: center;
}

.contact-form .button {
  background: #da552f;
  border: solid 1px #da552f;
  color: white;
  cursor: pointer;
  padding: 10px 50px;
  text-align: center;
  text-transform: uppercase;
}

.contact-form .button:hover {
  background: #ea532a;
  border: solid 1px #ea532a;
}

.contact-form input[type="email"],
.contact-form input[type="text"],
.contact-form textarea,
.contact-form .button {
  font-size: 15px;
  border-radius: 3px;
}
</style>