<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href=".\assets\style.css" />
    <link rel="icon" type="image/vnd.icon" href="./assets/images/favicon.ico">
    <link
    href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
    rel="stylesheet"
  />
  <meta
      property="og:title"
      content="Isabelle Blondelle Yoga du Rire, Communication/Naturopathie Animalière et Soins Énergétiques"
    />
    <meta property="og:locale" content="fr_FR" />
    <meta property="og:type" content="website" />
    <meta
      property="og:url"
      content="https://estebann12.github.io/Isabelle-Blondelle2/"
    />
    <meta property="og:author" content="Isabelle Blondelle" />
    <meta
      property="og:description"
      content=""
    />
    <meta
      property="og:image"
      content="https://estebann12.github.io/Isabelle-Blondelle2/assets/images/isasourire.webp"
    />
  <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "Isabelle Blondelle Énergéticienne, Naturopathe/Communicatrice Animalière, Animatrice Yoga du Rire",
        "image": "https://estebann12.github.io/Isabelle-Blondelle2/assets/images/isasourire.webp",
        "@id": "https://estebann12.github.io/Isabelle-Blondelle2/assets/images/isasourire.webp",
        "url": "https://estebann12.github.io/Isabelle-Blondelle2",
        "address": {
          "@type": "PostalAddress",
          "addressCountry": "FR"
        },
        "openingHoursSpecification": {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
          "opens": "10:00",
          "closes": "19:00"
        }
      }
    </script>
    <title>Isabelle Blondelle Yoga du Rire, Communication/Naturopathie Animalière et Soins Énergétiques</title>
    <meta
      name="description"
      content="Depuis 8 ans, je suis Communicatrice Animalière, Énergéticienne Maître Reiki et j'anime des ateliers de Yoga du Rire depuis 3 ans, tout en continuant mon métier à d'aide soignante spécialisée dans le handicap. Aujourd'hui je me suis libérée de ce poste pour être pleinement au service des personnes et des animaux qui ont besoin de retrouver leur bien-être, leur santé et leur chemin de vie. Je pense sincèrement que chacun peut aller mieux si nos consciences se libèrent et s'harmonisent vers nos atouts qui nous montrent le chemin."
    />
    <meta
      name="description"
      content=" Il n’existe pas de longueur fixe pour une meta description, mais, si votre texte est trop long, Google ne sélectionnera que 155 à 160 caractères de son contenu. Le"
    />
  </head>
  <body id="accueil">
    <header>
      <section class="top-header">
        <div class="content-top">
         <h1 class="name">
           Isabelle Blondelle
         </h1>
         <img class="logo" src="./assets/images/logo.jpg"></img>
        </div>
    </header>
  </section>
  <section class="section-onglet">
    <div class="onglet">
    <a href=".\index.php">Accueil</a>
  </div>
  <div class="onglet">
    <a href=".\pages\naturopathie.html">Naturopathie</a>
  </div>
  <div class="onglet">
    <a href=".\pages\communicationanimale.html">Communication Animale</a>
  </div>
  <div class="onglet">
    <a href=".\pages\énergétique.html">Énergétique</a>
  </div>
  <div class="onglet">
    <a href=".\pages\yogadurire.html">Yoga du Rire</a>
  </div>
  <div class="onglet">
    <a href=".\pages\chamanisme.html">Chamanisme</a>
  </div>
  <div class="onglet">
    <a href=".\pages\tarifs.html">Tarifs</a>
  </div>
  </section>
  </section>
    <section id="texte">
      <div class="apropos">
        <a>Bonjour,</a> 
           <a>Je pratique diverses méthodes, car j’ai beaucoup de centres d’intérêt qui m’animent.</a>

        <a>Je suis avant tout une femme au cœur ouvert envers tout ce qui est vivant.</a> 
        
        <a>Je me définis comme étant Animiste. Pourquoi Animiste ? Je considère avec amour, que toutes les choses vivantes sur terre ont une âme et méritent le respect. Voilà, pourquoi je me définis ainsi !</a>
        
        <a>Je vous propose de découvrir mon univers et s’il vous plaît c’est que peut-être je peux vous aider à cheminer vers un monde meilleur pour vous et donc pour nous tous !</a>
        
        
        <a>Ma pratique :</a>
          <a>->Naturopathie Animalière</a>
          <a>->Communicatrice Animalière</a>
          <a>->Maître Reiki Usui et Tibétain</a>
          <a>->Bio-énergie avec une antenne de Lécher</a>
          <a>->Relaxations</a>
          <a>->Yoga du Rire</a>
          <a>->Chamanisme</a>
        
        
          <a > Venez comme vous êtes, je ne suis jamais dans le jugement, mais toujours dans <span style="color:red">l’Amour  !</span></a>

      </div>

    </section>
    <section id="comments_container">
      <h2>Votre Avis</h2>
      <form method="post">
        <div>
          <label for="firstName">Prénom</label>
          <input type="text" id="firstName" name="firstName" placeholder="Prénom" required>
        </div>
        <div>
          <label for="lastName">Nom</label>
          <input type="text" id="lastName" name="lastName" placeholder="Nom" required>
        </div>
        <div>
          <label for="message">Message</label>
          <textarea id="message" name="message" cols="30" rows="10" placeholder="Partagez votre expérience..." required></textarea>
        </div>
        <button type="submit">Enregistrer</button>
      </form>
    </section>
    <section id="comments_display">
      <?php
      $message = $pdo->query(
        "SELECT * FROM message"
      )->fetchAll();

      foreach ($messages as $message) :
      ?>
      <article>
        <p><?= $message['firstName'];?><?= $message['lastName']; ?></p>
        <p><?= $message['message']; ?></p>
      </article>
      <?php endforeach; ?>
      <article>
        <p>Jeanne Trophe</p>
         <p>j'en suis ressortit plus libre que jamais</p>
      </article>
      <article>
        <p>John Doe</p>
        <p>C'était bluffant j'ai pus ressentir toute les parties de mon corps se relâcher</p>
      </article>   <article>
        <p>Sophie Bluel</p>
        <p>Mon chien va beaucoup mieux depuis la communication animale merci</p>
      </article>
    </section>
    <section class="section-contact">
      <h2>Contactez Moi</h2>
      <form class="contact-form" action="contact.php" method="post">
        <div class="form-content">
          <label for="name" class="label-contact" >Nom et Prénom</label>
          <input class="input-contact" type="text" name="name" id="name" placeholder="Nom et Prénom" autocomplete="off"/>
          <label for="email" class="label-contact">Adresse Email</label>
          <input class="input-contact" type="email" name="email" id="email" placeholder="exemple@gmail.com" autocomplete="off"/>
          <label for="phone" class="label-contact">N° Téléphone</label>
          <input class="input-contact" type="phone" name="phone" id="phone" placeholder="+33" autocomplete="off"/>
          <label for="objet" class="label-contact">Objet</label>
          <select class="select-contact" name="objet" id="subject">
            <option selected>Sélectionner l'objet de la demande</option>
            <option value="naturopathie">Naturopathie</option>
            <option value="communication">Communication Animale</option>
            <option value="energetique">Énergétique</option>
            <option value="yogadurire">Yoga du Rire</option>
            <option value="chamanisme">Chamanisme</option>
            <option value="rdv">Prendre Rendez-vous</option>
            <option value="devis">Faire un devis</option>
            <option value="autre">Autre</option>
          </select>
          <label for="message" class="label-contact">Message</label>
          <textarea class="message-contact" name="message_avis" cols="20" rows="10" id="message_avis" placeholder="Merci de renseigner vos questions ou vos commentaires..."></textarea>
          <button class="button-contact" type="submit" value="Envoyer">Envoyer</button>
        </div>
      </form>
     
     </section>
     <footer class="footer">
      <div class="footer-text">
        <a href="https://www.instagram.com/reikiza_energies/"><i class='bx bxl-instagram'></i>reikiza_energies</a>
        <a href="https://www.facebook.com/profile.php?id=100008238468492"><i class='bx bxl-facebook'></i> Isabelle Hublet Blondelle</a>
        <a href="https://www.youtube.com/@isabellehubletblondelleami3827"><i class='bx bxl-youtube'></i>  Isabelle Hublet Blondelle amizanimaux</a>
        <a href="https://www.tiktok.com/@blondelle.isabelle"><i class='bx bxl-tiktok'></i>@blondelle.isabelle</a>
        <a href="https://www.linkedin.com/in/isabelle-hublet-blondelle-a17549176/"><i class='bx bxl-linkedin'>  Isabelle Blondelle</i></a>
        <a href="https://estebann12.github.io/Mon-Portfolio/">Copyright &copy; 2024 by Estebann Krebs | Tout Droits Réservé.</a>
  
      </div>
  
      <div class="footer-iconTop">
        <a href="#"><i class='bx bx-up-arrow-alt'></i></a>
  
      </div>
     </footer>
  </body>
</html>
