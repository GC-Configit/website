<!DOCTYPE html>
<html lang="pl-PL">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="google-site-verification" content="vHY64JRm9W2_i7sfV3cINygYx6rudQjtucNtJpUCNRc" />
    <!-- Pre load images and fonts -->
    <link rel="preload" as="image" href="/wp-content/themes/custom_theme/assets/images/intro.webp">
    <link rel="preload" as="image" href="/wp-content/themes/custom_theme/assets/images/navbar-logo-gold.jpg">
    <link rel="preload" as="font" href="/wp-content/themes/custom_theme/assets/fonts/proximanova_regular.ttf">
    <link rel="preload" as="font" href="/wp-content/themes/custom_theme/assets/fonts/linotypediot_italic.ttf">
    <title>Czachorowski Adwokat</title>
    <!-- Icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="/wp-content/themes/custom_theme/assets/images/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="/wp-content/themes/custom_theme/assets/images/favicon-16x16.png"
    />
    <script type="module">
      document
        .getElementById("copyright")
        .appendChild(
          document.createTextNode(new Date().getFullYear().toString())
        );
      const e = (o) =>
          (document.querySelector(".cookie-bar-holder").style.display = o),
        t = "accept-cookie";
      localStorage.getItem(t) == null && e("block");
      document
        .getElementById("accept-cookies")
        .addEventListener("click", function () {
          localStorage.setItem(t, "accepted"), e("none");
        });
    </script>
    <?php wp_head();?>
</head>
<!-- beginning of body + navbar -->
 <body>
    <!-- Desktop -->
    <nav class="f-column desktop" data-astro-cid-5blmo7yk>
      <div class="image-container f-row" data-astro-cid-5blmo7yk>
        <a class="nav-logo-anchor" href="/" data-astro-cid-5blmo7yk
          ><img
            alt="log"
            src="/wp-content/themes/custom_theme/assets/images/navbar-logo-gold.jpg"
            data-astro-cid-5blmo7yk
        /></a>
        <div class="contact f-column" data-astro-cid-5blmo7yk>
          <div class="icon-holder f-row" data-astro-cid-chyfp7gd>
            <span class="grow" data-astro-cid-chyfp7gd
              ><i class="fa-solid fa-phone" data-astro-cid-chyfp7gd></i>
              <h3 data-astro-cid-chyfp7gd>
                <a href="tel:+48792010469" data-astro-cid-5blmo7yk
                  >792 010 469</a
                >
              </h3>
              <span data-astro-cid-chyfp7gd></span
            ></span>
          </div>
        </div>
      </div>
      <ul data-astro-cid-5blmo7yk>
        <li data-astro-cid-5blmo7yk>
          <a href="/" data-astro-cid-5blmo7yk>Strona Główna</a>
        </li>
        <li data-astro-cid-5blmo7yk>
          <a href="/#o-mnie" data-astro-cid-5blmo7yk>O mnie</a>
        </li>
        <li class="dropdown" data-astro-cid-5blmo7yk>
          <a data-astro-cid-5blmo7yk>Oferta</a>
          <div class="dropdown-content" data-astro-cid-5blmo7yk>
            <a href="/prawo-karne-i-wykroczenia" data-astro-cid-5blmo7yk
              >Prawo karne i wykroczenia</a
            >
            <a href="/prawo-cywilne" data-astro-cid-5blmo7yk>Prawo cywilne</a>
            <a href="/odszkodowania" data-astro-cid-5blmo7yk>Odszkodowania</a>
            <a href="/prawo-rodzinne" data-astro-cid-5blmo7yk>Prawo rodzinne</a>
            <a href="/egzekucja-i-windykacja" data-astro-cid-5blmo7yk
              >Egzekucja i windykacja</a
            >
            <a href="/pomoc-frankowiczom" data-astro-cid-5blmo7yk
              >Pomoc frankowiczom</a
            >
          </div>
        </li>
        <li data-astro-cid-5blmo7yk>
          <a href="/kontakt" data-astro-cid-5blmo7yk>Kontakt</a>
        </li>
      </ul>
      <div class="line" data-astro-cid-5blmo7yk></div>
    </nav>
    <!-- Mobile -->
    <nav class="f-column mobile" data-astro-cid-5blmo7yk>
      <div class="mobile-image-container" data-astro-cid-5blmo7yk>
        <a class="nav-logo-anchor" href="/" data-astro-cid-5blmo7yk
          ><img
            alt="log"
            src="/wp-content/themes/custom_theme/assets/images/navbar-logo-gold.jpg"
            data-astro-cid-5blmo7yk
        /></a>
        <div class="row" data-astro-cid-5blmo7yk>
          <div class="f-row mobile-menu" data-astro-cid-5blmo7yk>
            <div class="f-column" data-astro-cid-5blmo7yk>
              <button class="button-46 dropdown" data-astro-cid-5blmo7yk>
                <h3 data-astro-cid-5blmo7yk>
                  <i class="fa-solid fa-bars" data-astro-cid-5blmo7yk></i>
                </h3>
                <div class="dropdown-content" data-astro-cid-5blmo7yk>
                  <a href="/" data-astro-cid-5blmo7yk>Strona Główna</a>
                  <a href="/#o-mnie" data-astro-cid-5blmo7yk>O mnie</a>
                  <a href="/kontakt" data-astro-cid-5blmo7yk>Kontakt</a>
                  <span class="dropdown" data-astro-cid-5blmo7yk>
                    Oferta
                    <div
                      class="dropdown-content internal"
                      data-astro-cid-5blmo7yk
                    >
                      <a
                        href="/prawo-karne-i-wykroczenia"
                        data-astro-cid-5blmo7yk
                        >Prawo karne i wykroczenia</a
                      >
                      <a href="/prawo-cywilne" data-astro-cid-5blmo7yk
                        >Prawo cywilne</a
                      >
                      <a href="/odszkodowania" data-astro-cid-5blmo7yk
                        >Odszkodowania</a
                      >
                      <a href="/prawo-rodzinne" data-astro-cid-5blmo7yk
                        >Prawo rodzinne</a
                      >
                      <a href="/egzekucja-i-windykacja" data-astro-cid-5blmo7yk
                        >Egzekucja i windykacja</a
                      >
                      <a href="/pomoc-frankowiczom" data-astro-cid-5blmo7yk
                        >Pomoc frankowiczom</a
                      >
                    </div>
                  </span>
                </div>
              </button>
            </div>
          </div>
        </div>
      </div>
    </nav>
