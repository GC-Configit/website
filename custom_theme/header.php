<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="Astro description" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
    <meta name="generator" content="Astro v4.3.6" />
    <script
      src="https://kit.fontawesome.com/879cc0a6e4.js"
      crossorigin="anonymous"
    ></script>
    <title>Amadeusz Czachorowski - Kancelaria Adwokacka</title>
    <style>
      span[data-astro-cid-chyfp7gd] {
        display: flex;
      }
      h3[data-astro-cid-chyfp7gd] {
        flex: 0 0 100%;
        align-items: center;
        margin: 0;
        padding: 0;
        font-weight: 400;
      }
      h3[data-astro-cid-chyfp7gd],
      i[data-astro-cid-chyfp7gd] {
        margin-right: 0.5rem;
        font-size: 1.5rem;
      }
      i[data-astro-cid-chyfp7gd] {
        display: flex;
        justify-content: center;
        min-width: 2rem;
      }
      .grow[data-astro-cid-chyfp7gd] {
        transition: all 0.2s ease-in-out;
        cursor: pointer;
      }
      .grow[data-astro-cid-chyfp7gd]:hover {
        transform: scale(1.1);
      }
      nav[data-astro-cid-5blmo7yk] {
        a {
          color: #000;
        }
        .line {
          width: 50%;
          border-bottom: 1px solid #000;
          margin: 0 auto;
          margin-bottom: 1rem;
        }
      }
      .mobile-image-container[data-astro-cid-5blmo7yk] {
        img {
          max-width: 95lvw;
          height: auto;
        }
      }
      .image-container[data-astro-cid-5blmo7yk] {
        max-height: 250px;
        & img[data-astro-cid-5blmo7yk] {
          min-width: min(1226px, 90vw);
          width: auto;
          height: 10rem;
          mix-blend-mode: multiply;
        }
        .contact {
          padding-left: 12rem;
          align-content: stretch;
          justify-content: center;
        }
        .icon-holder {
          cursor: pointer;
          i,
          a {
            color: #000;
          }
        }
      }
      @media screen and (max-width: 1200px) {
        .image-container[data-astro-cid-5blmo7yk] {
          max-width: 100vw;
          & img[data-astro-cid-5blmo7yk] {
            max-width: 100%;
          }
        }
      }
      ul[data-astro-cid-5blmo7yk] {
        display: flex;
        justify-content: center;
        column-gap: 5rem;
        list-style-type: none;
        font-weight: 500;
        margin-top: -0.25rem;
        padding-bottom: 1rem;
        z-index: 1;
      }
      a[data-astro-cid-5blmo7yk] {
        text-decoration: none;
        color: #fff;
        font-weight: 700;
        cursor: pointer;
      }
      .nav-logo-anchor[data-astro-cid-5blmo7yk] {
        cursor: auto;
      }
      footer[data-astro-cid-sz7xmlte] {
        background-color: #223d3c;
        color: #fff;
        text-align: center;
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 10rem;
        padding: 1rem 0;
        .container {
          > * {
            padding: 0.25rem 2rem;
          }
        }
        h4,
        p {
          color: #fff;
        }
        h4 {
          text-align: left;
          line-height: 1.7em;
        }
        .contact {
          margin-left: auto;
        }
      }
      @media screen and (max-width: 1200px) {
        footer[data-astro-cid-sz7xmlte] {
          position: static;
          margin-top: 2rem;
          height: auto;
          display: flex;
          flex-direction: row;
          flex-wrap: wrap;
          width: unset;
          padding-left: 1rem;
          .container {
            > * {
              padding: 0;
            }
          }
          .contact {
            margin-left: unset;
          }
        }
      }
      :root {
        --primary-text: rgb(34, 61, 60);
        --standard-font-family: "Proxima Nova", serif;
        --header-font-family: "Linotype Diot Italic", serif;
        --secondary-text: #fff;
        --background-color: #fff;
      }
      html,
      body {
        font-family: Verdana, sans-serif;
        margin: 0;
        padding: 0;
      }
      * {
        font-family: var(--standard-font-family);
      }
      html {
        height: 0;
      }
      body {
        background-color: var(--background-color);
        position: relative;
        min-height: 100vh;
        padding-bottom: 3rem;
      }
      @media screen and (max-width: 1200px) {
        body {
          padding-bottom: 0rem;
        }
      }
      @font-face {
        font-family: Proxima Nova;
        src: url(/fonts/proximanova_regular.ttf) format("truetype");
      }
      @font-face {
        font-family: Linotype Diot Italic;
        src: url(/fonts/linotypediot_italic.ttf) format("truetype");
      }
      h1,
      h2,
      h3,
      h4,
      h5,
      h6 {
        color: var(--primary-text);
        font-family: var(--header-font-family);
      }
      @media screen and (max-width: 1200px) {
        h1 {
          font-size: 1.75em;
          word-break: keep-all;
          max-width: 100vw;
        }
        h2 {
          font-size: 1.5em;
          word-break: keep-all;
          max-width: 100vw;
        }
        h3 {
          font-size: 1.25em;
          word-break: keep-all;
          max-width: 100vw;
        }
      }
      i {
        color: var(--primary-text);
      }
      p {
        color: var(--primary-text);
        line-height: 1.7em;
        text-align: justify;
      }
      main {
        display: flex;
        margin: 0 10rem 10rem;
      }
      @media screen and (max-width: 1200px) {
        main {
          margin: 0 0.25rem;
        }
      }
      .center {
        display: flex;
        justify-content: center;
        align-items: center;
      }
      .f-column {
        display: flex;
        flex-direction: column;
      }
      .f-row {
        display: flex;
        flex-direction: row;
      }
      .mobile {
        display: none;
      }
      .text-holder {
        p,
        li {
          line-height: 1.7em;
        }
      }
      @media screen and (max-width: 1200px) {
        main > .main-container {
          flex-direction: column;
        }
        .f-row {
          flex-wrap: wrap;
        }
        .mobile {
          display: block;
        }
        .desktop {
          display: none;
        }
      }
      .p-1 {
        padding: 1rem;
      }
    </style>
    <?php wp_head();?>
</head>
<!-- beginning of body + navbar -->
<body>
    <nav class="f-column desktop" data-astro-cid-5blmo7yk>
      <div class="image-container f-row" data-astro-cid-5blmo7yk>
        <a class="nav-logo-anchor" href="/" data-astro-cid-5blmo7yk
          ><img
            alt="logo"
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
          <a href="/prawo-karne-i-wykroczenia" data-astro-cid-5blmo7yk
            >Prawo karne i wykroczenia</a
          >
        </li>
        <li data-astro-cid-5blmo7yk>
          <a href="/prawo-cywilne" data-astro-cid-5blmo7yk>Prawo cywilne</a>
        </li>
        <li data-astro-cid-5blmo7yk>
          <a href="/odszkodowania" data-astro-cid-5blmo7yk>Odszkodowania</a>
        </li>
        <li data-astro-cid-5blmo7yk>
          <a href="/prawo-rodzinne" data-astro-cid-5blmo7yk>Prawo rodzinne</a>
        </li>
        <li data-astro-cid-5blmo7yk>
          <a href="/egzekucja-i-windykacja" data-astro-cid-5blmo7yk
            >Egzekucja i windykacja</a
          >
        </li>
        <li data-astro-cid-5blmo7yk>
          <a href="/kontakt" data-astro-cid-5blmo7yk>Kontakt</a>
        </li>
      </ul>
      <div class="line" data-astro-cid-5blmo7yk></div>
    </nav>
    <nav class="f-column mobile" data-astro-cid-5blmo7yk>
      <div class="mobile-image-container" data-astro-cid-5blmo7yk>
        <a class="nav-logo-anchor" href="/" data-astro-cid-5blmo7yk
          ><img
            alt="log"
            src="/wp-content/themes/custom_theme/assets/images/navbar-logo-gold.jpg"
            data-astro-cid-5blmo7yk
        /></a>
      </div>
    </nav>
