<!DOCTYPE html>
<html lang="en" dir="ltr">




<head>
  <meta charset="UTF-8">

  <!-- Page Title -->
  <title>About DM Tech Studio | Digital Marketing Agency in Ahmedabad</title>

  <!-- Meta Tags -->
  <meta name="description" content="Learn more about DM Tech Studio, a trusted digital marketing company in Prahladnagar, Ahmedabad providing result-driven online marketing, SEO, and web solutions.">
  <meta name="keywords" content="mix_design, resume, portfolio, personal page, cv, template, one page, responsive, html5, css3, creative, clean">
  <meta name="author" content="mix_design">
  <link rel="canonical" href="https://dmtechstudio.com/about-us.php" />

  <!-- Viewport Meta-->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Template Favicon & Icons Start -->
  <link rel="icon" href="assets/img/favicon/favicon.png" sizes="any">
  <link rel="icon" href="assets/img/favicon/icon.png" type="image/svg+xml">
  <link rel="apple-touch-icon" href="assets/img/favicon/apple-touch-icon.png">
  <link rel="manifest" href="assets/img/favicon/manifest.webmanifest">
  <!-- Template Favicon & Icons End -->

  <!-- Facebook Metadata Start -->
  <meta property="og:image:height" content="1200">
  <meta property="og:image:width" content="1200">
  <meta property="og:title" content="DM Tech Studio - Digital Marketing Agency In Ahmedabad ">
  <meta property="og:description" content="Elevate your digital presence with DM Tech Studio dynamic and stylish  for creative agencies and personal brands. With modern layouts, smooth interactions and a polished aesthetic,DM Tech Studio helps showcase projects, services and expertise with clarity and impact.">
  <meta property="og:url" content="https://mixdesign.dev/themeforest/rayo">
  <meta property="og:image" content="assets/img/og-image.html">
  <!-- Facebook Metadata End -->

  <!-- Template Styles Start -->
  <!-- <link rel="stylesheet" type="text/css" href="assets/css/loaders/loader.min.css"> -->
  <link rel="stylesheet" type="text/css" href="assets/css/plugins.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/main.min.css">
  <!-- Template Styles End -->

  <!-- Custom Browser Color Start -->
  <meta name="theme-color" media="(prefers-color-scheme: light)" content="#FAF7F6">
  <meta name="theme-color" media="(prefers-color-scheme: dark)" content="#161616">
  <meta name="msapplication-navbutton-color" content="#161616">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <!-- Custom Browser Color End -->
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-W50GMV5E8M"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-W50GMV5E8M');
</script>

<!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">

  <link rel="stylesheet" href="assets/css/custom.css">
<style>
/* ============================================
   CEO About Block
   ============================================ */
.mxd-team-cards__about {
  height: 100%;
  padding: 40px 44px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  gap: 32px;
  position: relative;
  overflow: hidden;
  transition: background 0.3s ease;
}

/* Subtle background accent */
.mxd-team-cards__about::before {
  content: '';
  position: absolute;
  top: -60px;
  right: -60px;
  width: 220px;
  height: 220px;
  border-radius: 50%;
  background: var(--color-accent, #111);
  opacity: 0.04;
  pointer-events: none;
}

.mxd-team-cards__about::after {
  content: '';
  position: absolute;
  bottom: -40px;
  left: -40px;
  width: 140px;
  height: 140px;
  border-radius: 50%;
  background: var(--color-accent, #111);
  opacity: 0.03;
  pointer-events: none;
}

.mxd-team-cards__item:hover .mxd-team-cards__about {
  background: rgba(0, 0, 0, 0.015);
}

/* ============================================
   Stats Row
   ============================================ */
.mxd-ceo-stats {
  display: flex;
  gap: 0;
  flex-wrap: wrap;
  margin-top: -12px;
}

.mxd-ceo-stat {
  display: flex;
  flex-direction: column;
  gap: 6px;
  padding: 0 32px 0 0;
  margin-right: 32px;
  border-right: 1px solid var(--color-border, rgba(0,0,0,0.1));
}

.mxd-ceo-stat:last-child {
  border-right: none;
  padding-right: 0;
  margin-right: 0;
}

.mxd-ceo-stat__value {
  font-size: 3.4rem;
  font-weight: 800;
  color: var(--color-bright, #111);
  line-height: 1;
  letter-spacing: -0.04em;
  position: relative;
  display: inline-block;
  transition: letter-spacing 0.3s ease;
}

/* Animated underline accent on value */
.mxd-ceo-stat__value::after {
  content: '';
  position: absolute;
  bottom: -4px;
  left: 0;
  width: 24px;
  height: 2px;
  background: var(--color-accent, #111);
  opacity: 0.3;
  border-radius: 2px;
}

.mxd-ceo-stat__label {
  font-size: 0.7rem;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.12em;
  color: var(--color-muted, #999);
  margin-top: 8px;
}

.mxd-team-cards__item:hover .mxd-ceo-stat__value {
  letter-spacing: -0.01em;
}

/* ============================================
   Divider
   ============================================ */
.mxd-ceo-divider {
  width: 40px;
  height: 2px;
  background: var(--color-accent, #111);
  opacity: 0.15;
  border-radius: 2px;
}

/* ============================================
   Bio
   ============================================ */
.mxd-ceo-bio {
  position: relative;
  padding-left: 18px;
}

.mxd-ceo-bio::before {
  content: '';
  position: absolute;
  left: 0;
  top: 4px;
  bottom: 4px;
  width: 2px;
  background: var(--color-accent, #111);
  opacity: 0.2;
  border-radius: 2px;
}

.mxd-ceo-bio p {
  font-size: 1.95rem;
  line-height: 1.85;
  color: var(--color-muted, #666);
  max-width: 500px;
  font-weight: 400;
  letter-spacing: 0.01em;
}

/* ============================================
   LinkedIn CTA
   ============================================ */
.mxd-ceo-cta {
  display: flex;
  align-items: center;
  gap: 16px;
}

.mxd-ceo-cta::before {
  content: '';
  display: block;
  width: 32px;
  height: 1px;
  background: var(--color-muted, #aaa);
  flex-shrink: 0;
}

/* ============================================
   Responsive
   ============================================ */
@media (max-width: 991px) {
  .mxd-team-cards__about {
    padding: 32px 28px;
    gap: 24px;
  }

  .mxd-ceo-stats {
    margin-top: -8px;
  }

  .mxd-ceo-stat__value {
    font-size: 2.8rem;
  }

  .mxd-ceo-stat {
    padding-right: 24px;
    margin-right: 24px;
  }
}

@media (max-width: 767px) {
  .mxd-team-cards__about {
    padding: 28px 20px;
    gap: 20px;
  }

  .mxd-ceo-stats {
    gap: 0;
    margin-top: -6px;
  }

  .mxd-ceo-stat {
    padding-right: 20px;
    margin-right: 20px;
  }

  .mxd-ceo-stat__value {
    font-size: 2.4rem;
  }

  .mxd-ceo-bio p {
    font-size: 0.85rem;
  }
}

@media (max-width: 480px) {
  .mxd-team-cards__about {
    padding: 24px 16px;
    gap: 16px;
  }

  .mxd-ceo-stats {
    flex-direction: column;
    gap: 16px;
    margin-top: 0;
  }

  .mxd-ceo-stat {
    border-right: none;
    border-bottom: 1px solid var(--color-border, rgba(0,0,0,0.08));
    padding: 0 0 16px 0;
    margin: 0;
  }

  .mxd-ceo-stat:last-child {
    border-bottom: none;
    padding-bottom: 0;
  }

  .mxd-ceo-stat__value {
    font-size: 2rem;
  }

  .mxd-ceo-bio p {
    font-size: 0.82rem;
    max-width: 100%;
  }

  .mxd-ceo-cta::before {
    display: none;
  }
}
</style>

</head>

<body>

  <!-- Loader Start -->
  <div id="loader" class="loader">
    <div class="loader__wrapper">
      <div class="loader__content">
        <div class="loader__count">
          <span class="count__text"></span>
          <span class="count__percent"></span>
        </div>
      </div>
    </div>
  </div>
  <!-- Loader End -->

  <!-- header start -->

  <?php require_once 'elements/header.php';
  ?>

  <!-- header end -->

  <!-- Page Content Start -->
  <main id="mxd-page-content" class="mxd-page-content inner-page-content">

    <!-- Section - Inner Page Headline Start -->
    <div class="mxd-section mxd-section-inner-headline padding-headline-pre-block">
      <div class="mxd-container grid-container">

        <!-- Block - Inner Page Headline Start -->
        <div class="mxd-block loading-wrap">
          <div class="container-fluid px-0">
            <div class="row gx-0">

              <!-- Inner Headline Name Start -->
              <div class="col-12 col-xl-2 mxd-grid-item no-margin">
                <div class="mxd-block__name name-inner-headline loading__item">
                  <p class="mxd-point-subtitle">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 20 20" fill="currentColor">
                      <path fill="currentColor" d="M19.6,9.6c0,0-3,0-4,0c-0.4,0-1.8-0.2-1.8-0.2c-0.6-0.1-1.1-0.2-1.6-0.6c-0.5-0.3-0.9-0.8-1.2-1.2
                          c-0.3-0.4-0.4-0.9-0.5-1.4c0,0-0.1-1.1-0.2-1.5c-0.1-1.1,0-4.4,0-4.4C10.4,0.2,10.2,0,10,0S9.6,0.2,9.6,0.4c0,0,0.1,3.3,0,4.4
                          c0,0.4-0.2,1.5-0.2,1.5C9.4,6.7,9.2,7.2,9,7.6C8.7,8.1,8.2,8.5,7.8,8.9c-0.5,0.3-1,0.5-1.6,0.6c0,0-1.2,0.1-1.7,0.2
                          c-1,0.1-4.2,0-4.2,0C0.2,9.6,0,9.8,0,10c0,0.2,0.2,0.4,0.4,0.4c0,0,3.1-0.1,4.2,0c0.4,0,1.7,0.2,1.7,0.2c0.6,0.1,1.1,0.2,1.6,0.6
                          c0.4,0.3,0.8,0.7,1.1,1.1c0.3,0.5,0.5,1,0.6,1.6c0,0,0.1,1.3,0.2,1.7c0,1,0,4.1,0,4.1c0,0.2,0.2,0.4,0.4,0.4s0.4-0.2,0.4-0.4
                          c0,0,0-3.1,0-4.1c0-0.4,0.2-1.7,0.2-1.7c0.1-0.6,0.2-1.1,0.6-1.6c0.3-0.4,0.7-0.8,1.1-1.1c0.5-0.3,1-0.5,1.6-0.6
                          c0,0,1.3-0.1,1.8-0.2c1,0,4,0,4,0c0.2,0,0.4-0.2,0.4-0.4C20,9.8,19.8,9.6,19.6,9.6L19.6,9.6z" />
                    </svg>
                    <span>About Us</span>
                  </p>
                </div>
              </div>
              <!-- Inner Headline Name Start -->

              <!-- Inner Headline Content Start -->
              <div class="col-12 col-xl-10 mxd-grid-item no-margin">

                <div class="mxd-block__content">
                  <div class="mxd-block__inner-headline">
                    <h1>Full-Service Creative & Digital Agency in Ahmedabad</h1>
                    <p class="inner-headline__text t-large t-bright">When you look at successful brands, they are easy to find, simple to connect with, and leave a lasting impression. At DM Tech Studio in Ahmedabad, we follow the same approach for every business we work with. With 5+ years of experience in digital marketing, branding, and website development, we focus on creating practical and result-oriented digital solutions. Our goal is not just to make your brand look good, but to help it perform better, reach the right audience, and grow consistently. Every strategy we create is designed with clarity, creativity, and real business impact in mind, so your brand stands strong in today’s competitive digital space.</p>
                  </div>
                </div>

              </div>
              <!-- Inner Headline Content End -->

            </div>
          </div>
        </div>
        <!-- Block - Inner Page Headline End -->

      </div>
    </div>
    <!-- Section - Inner Page Headline End -->

    <!-- Section - Culture & Values Start -->
    <div class="mxd-section padding-grid-pre-mtext">
      <div class="mxd-container grid-container">

        <!-- Block - Culture & Values Start -->
        <div class="mxd-block">
          <div class="mxd-values loading__fade">
            <div class="container-fluid p-0">
              <div class="row g-0 d-flex">
                <div class="col-12 col-xl-2 mxd-values__item order-2 order-xl-1 mxd-grid-item no-margin animate-card-2">
                  <div class="mxd-values__lists fullheight-xl">
                    <div class="container-fluid p-0 fullheight-xl">
                      <div class="row g-0 fullheight-xl d-xl-flex flex-xl-column justify-content-xl-between">
                        <div class="col-12 col-sm-6 col-xl-12 mxd-values__lists-item">
                          <ul>
                            <li>
                              <p class="t-small anim-uni-in-up">SEO Services</p>
                            </li>
                            <li>
                              <p class="t-small anim-uni-in-up">Web Development</p>
                            </li>
                            <li>
                              <p class="t-small anim-uni-in-up">Digital marketing</p>
                            </li>
                            <li>
                              <p class="t-small anim-uni-in-up">E-Commerce</p>
                            </li>
                            <li>
                              <p class="t-small anim-uni-in-up">YouTube marketing</p>
                            </li>
                            <li>
                              <p class="t-small anim-uni-in-up">App development</p>
                            </li>
                            <li>
                              <p class="t-small anim-uni-in-up">Google Ads</p>
                            </li>
                          </ul>
                        </div>
                        <div class="col-12 col-sm-6 col-xl-12 mxd-values__lists-item">
                          <ul>
                            <li>
                              <p class="t-small anim-uni-in-up">SEO Services</p>
                            </li>
                            <li>
                              <p class="t-small anim-uni-in-up">Web Development</p>
                            </li>
                            <li>
                              <p class="t-small anim-uni-in-up">Digital marketing</p>
                            </li>
                            <li>
                              <p class="t-small anim-uni-in-up">E-Commerce</p>
                            </li>
                            <li>
                              <p class="t-small anim-uni-in-up">YouTube marketing</p>
                            </li>
                            <li>
                              <p class="t-small anim-uni-in-up">App development</p>
                            </li>
                            <li>
                              <p class="t-small anim-uni-in-up">Google Ads</p>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-xl-4 mxd-values__item order-1 order-xl-2 mxd-grid-item no-margin animate-card-2">
                  <div class="mxd-values__image image-large-desktop image-values-1 parallax-img-small"></div>
                </div>
                <div class="col-12 col-xl-6 mxd-values__item order-3 order-xl-3 mobile-reverse mxd-grid-item no-margin animate-card-2">
                  <div class="mxd-values__image image-small-desktop image-values-2 parallax-img-small"></div>
                  <div class="mxd-values__descr has-top-list anim-uni-in-up">
                    <p class="t-bright t-large reveal-type">
                      Your brand is your most valuable asset, and at DM Tech Studio in Ahmedabad, our team crafts the perfect strategy to elevate it. By combining creativity with a results-driven approach, we ensure your brand connects with the right audience and stands out in Ahmedabad’s competitive market.</p>
                    <p class="t-bright t-large reveal-type">Our expert team of researchers, strategists, designers, and developers at DM Tech Studio in Ahmedabad follows streamlined processes to transform insights into actionable solutions. We build cohesive, impactful brands that deliver measurable results and meaningful growth in Ahmedabad’s competitive market.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Block - Culture & Values Start -->

      </div>
    </div>
    <!-- Section - Culture & Values End -->

    <!-- Section - Marquee Text One Line Start -->
    <div class="mxd-section padding-mtext">
      <div class="mxd-container fullwidth-container">

        <!-- Block - Marquee Text One Line Start -->
        <div class="mxd-block">
          <div class="marquee marquee-right--gsap muted-extra">
            <div class="marquee__toright">
              <!-- single item -->
              <div class="marquee__item one-line item-regular text">
                <p class="marquee__text">SEO Services</p>
                <div class="marquee__image">
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80" fill="currentColor">
                    <path fill="currentColor" d="M78.4,38.4c0,0-11.8,0-15.8,0c-1.6,0-4.8-0.2-7.1-0.8c-2.3-0.6-4.3-0.8-6.3-2.4c-2-1.2-3.5-3.2-4.7-4.8
                        c-1.2-1.6-1.6-3.6-2-5.5c-0.3-1.5-0.7-4.3-0.8-5.9c-0.2-4.3,0-17.4,0-17.4C41.8,0.8,41,0,40.2,0s-1.6,0.8-1.6,1.6c0,0,0,13.1,0,17.4
                        c0,1.6-0.6,4.3-0.8,5.9c-0.3,2-0.8,4-2,5.5c-1.2,2-2.8,3.6-4.7,4.8s-4,1.8-6.3,2.4c-1.9,0.5-4.7,0.6-6.7,0.8c-3.9,0.4-16.6,0-16.6,0
                        C0.8,38.4,0,39.2,0,40c0,0.8,0.8,1.6,1.6,1.6c0,0,12.2,0,16.6,0c1.6,0,4.8,0.3,6.7,0.8c2.3,0.6,4.3,0.8,6.3,2.4
                        c1.6,1.2,3.2,2.8,4.3,4.4c1.2,2,2.1,3.9,2.4,6.3c0.2,1.7,0.7,4.7,0.8,6.7c0.2,4,0,16.2,0,16.2c0,0.8,0.8,1.6,1.6,1.6
                        s1.6-0.8,1.6-1.6c0,0,0-12.3,0-16.2c0-1.6,0.5-5.1,0.8-6.7c0.5-2.3,0.8-4.4,2.4-6.3c1.2-1.6,2.8-3.2,4.3-4.4c2-1.2,3.9-2,6.3-2.4
                        c1.8-0.3,5.1-0.7,7.1-0.8c3.5-0.2,15.8,0,15.8,0c0.8,0,1.6-0.8,1.6-1.6C80,39.2,79.2,38.4,78.4,38.4C78.4,38.4,78.4,38.4,78.4,38.4z
                        " />
                  </svg>
                </div>
              </div>
              <!-- single item -->
              <div class="marquee__item one-line item-regular text">
                <p class="marquee__text">Web Development</p>
                <div class="marquee__image">
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80" fill="currentColor">
                    <path fill="currentColor" d="M78.4,38.4c0,0-11.8,0-15.8,0c-1.6,0-4.8-0.2-7.1-0.8c-2.3-0.6-4.3-0.8-6.3-2.4c-2-1.2-3.5-3.2-4.7-4.8
                        c-1.2-1.6-1.6-3.6-2-5.5c-0.3-1.5-0.7-4.3-0.8-5.9c-0.2-4.3,0-17.4,0-17.4C41.8,0.8,41,0,40.2,0s-1.6,0.8-1.6,1.6c0,0,0,13.1,0,17.4
                        c0,1.6-0.6,4.3-0.8,5.9c-0.3,2-0.8,4-2,5.5c-1.2,2-2.8,3.6-4.7,4.8s-4,1.8-6.3,2.4c-1.9,0.5-4.7,0.6-6.7,0.8c-3.9,0.4-16.6,0-16.6,0
                        C0.8,38.4,0,39.2,0,40c0,0.8,0.8,1.6,1.6,1.6c0,0,12.2,0,16.6,0c1.6,0,4.8,0.3,6.7,0.8c2.3,0.6,4.3,0.8,6.3,2.4
                        c1.6,1.2,3.2,2.8,4.3,4.4c1.2,2,2.1,3.9,2.4,6.3c0.2,1.7,0.7,4.7,0.8,6.7c0.2,4,0,16.2,0,16.2c0,0.8,0.8,1.6,1.6,1.6
                        s1.6-0.8,1.6-1.6c0,0,0-12.3,0-16.2c0-1.6,0.5-5.1,0.8-6.7c0.5-2.3,0.8-4.4,2.4-6.3c1.2-1.6,2.8-3.2,4.3-4.4c2-1.2,3.9-2,6.3-2.4
                        c1.8-0.3,5.1-0.7,7.1-0.8c3.5-0.2,15.8,0,15.8,0c0.8,0,1.6-0.8,1.6-1.6C80,39.2,79.2,38.4,78.4,38.4C78.4,38.4,78.4,38.4,78.4,38.4z
                        " />
                  </svg>
                </div>
              </div>
              <!-- single item -->
              <div class="marquee__item one-line item-regular text">
                <p class="marquee__text">Digital marketing</p>
                <div class="marquee__image">
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80" fill="currentColor">
                    <path fill="currentColor" d="M78.4,38.4c0,0-11.8,0-15.8,0c-1.6,0-4.8-0.2-7.1-0.8c-2.3-0.6-4.3-0.8-6.3-2.4c-2-1.2-3.5-3.2-4.7-4.8
                        c-1.2-1.6-1.6-3.6-2-5.5c-0.3-1.5-0.7-4.3-0.8-5.9c-0.2-4.3,0-17.4,0-17.4C41.8,0.8,41,0,40.2,0s-1.6,0.8-1.6,1.6c0,0,0,13.1,0,17.4
                        c0,1.6-0.6,4.3-0.8,5.9c-0.3,2-0.8,4-2,5.5c-1.2,2-2.8,3.6-4.7,4.8s-4,1.8-6.3,2.4c-1.9,0.5-4.7,0.6-6.7,0.8c-3.9,0.4-16.6,0-16.6,0
                        C0.8,38.4,0,39.2,0,40c0,0.8,0.8,1.6,1.6,1.6c0,0,12.2,0,16.6,0c1.6,0,4.8,0.3,6.7,0.8c2.3,0.6,4.3,0.8,6.3,2.4
                        c1.6,1.2,3.2,2.8,4.3,4.4c1.2,2,2.1,3.9,2.4,6.3c0.2,1.7,0.7,4.7,0.8,6.7c0.2,4,0,16.2,0,16.2c0,0.8,0.8,1.6,1.6,1.6
                        s1.6-0.8,1.6-1.6c0,0,0-12.3,0-16.2c0-1.6,0.5-5.1,0.8-6.7c0.5-2.3,0.8-4.4,2.4-6.3c1.2-1.6,2.8-3.2,4.3-4.4c2-1.2,3.9-2,6.3-2.4
                        c1.8-0.3,5.1-0.7,7.1-0.8c3.5-0.2,15.8,0,15.8,0c0.8,0,1.6-0.8,1.6-1.6C80,39.2,79.2,38.4,78.4,38.4C78.4,38.4,78.4,38.4,78.4,38.4z
                        " />
                  </svg>
                </div>
              </div>
              <!-- single item -->
              <div class="marquee__item one-line item-regular text">
                <p class="marquee__text">E-Commerce</p>
                <div class="marquee__image">
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80" fill="currentColor">
                    <path fill="currentColor" d="M78.4,38.4c0,0-11.8,0-15.8,0c-1.6,0-4.8-0.2-7.1-0.8c-2.3-0.6-4.3-0.8-6.3-2.4c-2-1.2-3.5-3.2-4.7-4.8
                        c-1.2-1.6-1.6-3.6-2-5.5c-0.3-1.5-0.7-4.3-0.8-5.9c-0.2-4.3,0-17.4,0-17.4C41.8,0.8,41,0,40.2,0s-1.6,0.8-1.6,1.6c0,0,0,13.1,0,17.4
                        c0,1.6-0.6,4.3-0.8,5.9c-0.3,2-0.8,4-2,5.5c-1.2,2-2.8,3.6-4.7,4.8s-4,1.8-6.3,2.4c-1.9,0.5-4.7,0.6-6.7,0.8c-3.9,0.4-16.6,0-16.6,0
                        C0.8,38.4,0,39.2,0,40c0,0.8,0.8,1.6,1.6,1.6c0,0,12.2,0,16.6,0c1.6,0,4.8,0.3,6.7,0.8c2.3,0.6,4.3,0.8,6.3,2.4
                        c1.6,1.2,3.2,2.8,4.3,4.4c1.2,2,2.1,3.9,2.4,6.3c0.2,1.7,0.7,4.7,0.8,6.7c0.2,4,0,16.2,0,16.2c0,0.8,0.8,1.6,1.6,1.6
                        s1.6-0.8,1.6-1.6c0,0,0-12.3,0-16.2c0-1.6,0.5-5.1,0.8-6.7c0.5-2.3,0.8-4.4,2.4-6.3c1.2-1.6,2.8-3.2,4.3-4.4c2-1.2,3.9-2,6.3-2.4
                        c1.8-0.3,5.1-0.7,7.1-0.8c3.5-0.2,15.8,0,15.8,0c0.8,0,1.6-0.8,1.6-1.6C80,39.2,79.2,38.4,78.4,38.4C78.4,38.4,78.4,38.4,78.4,38.4z
                        " />
                  </svg>
                </div>
              </div>
              <!-- single item -->
              <div class="marquee__item one-line item-regular text">
                <p class="marquee__text">YouTube marketing</p>
                <div class="marquee__image">
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80" fill="currentColor">
                    <path fill="currentColor" d="M78.4,38.4c0,0-11.8,0-15.8,0c-1.6,0-4.8-0.2-7.1-0.8c-2.3-0.6-4.3-0.8-6.3-2.4c-2-1.2-3.5-3.2-4.7-4.8
                        c-1.2-1.6-1.6-3.6-2-5.5c-0.3-1.5-0.7-4.3-0.8-5.9c-0.2-4.3,0-17.4,0-17.4C41.8,0.8,41,0,40.2,0s-1.6,0.8-1.6,1.6c0,0,0,13.1,0,17.4
                        c0,1.6-0.6,4.3-0.8,5.9c-0.3,2-0.8,4-2,5.5c-1.2,2-2.8,3.6-4.7,4.8s-4,1.8-6.3,2.4c-1.9,0.5-4.7,0.6-6.7,0.8c-3.9,0.4-16.6,0-16.6,0
                        C0.8,38.4,0,39.2,0,40c0,0.8,0.8,1.6,1.6,1.6c0,0,12.2,0,16.6,0c1.6,0,4.8,0.3,6.7,0.8c2.3,0.6,4.3,0.8,6.3,2.4
                        c1.6,1.2,3.2,2.8,4.3,4.4c1.2,2,2.1,3.9,2.4,6.3c0.2,1.7,0.7,4.7,0.8,6.7c0.2,4,0,16.2,0,16.2c0,0.8,0.8,1.6,1.6,1.6
                        s1.6-0.8,1.6-1.6c0,0,0-12.3,0-16.2c0-1.6,0.5-5.1,0.8-6.7c0.5-2.3,0.8-4.4,2.4-6.3c1.2-1.6,2.8-3.2,4.3-4.4c2-1.2,3.9-2,6.3-2.4
                        c1.8-0.3,5.1-0.7,7.1-0.8c3.5-0.2,15.8,0,15.8,0c0.8,0,1.6-0.8,1.6-1.6C80,39.2,79.2,38.4,78.4,38.4C78.4,38.4,78.4,38.4,78.4,38.4z
                        " />
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Block - Marquee Text One Line End -->

      </div>
    </div>
    <!-- Section - Marquee Text One Line End -->

    <!-- Section - Parallax Divider Start -->
    <div class="mxd-section padding-pre-title">
      <div class="mxd-container">
        <div class="mxd-divider">
          <div class="mxd-divider__image divider-image-8 parallax-img"></div>
        </div>
      </div>
    </div>
    <!-- Section - Parallax Divider End -->


    <!-- Section - Marquee Images Two Lines Start -->
    <div class="mxd-section padding-pre-title">
      <div class="mxd-container fullwidth-container">

        <!-- Block - Marquee Images Two Lines Start -->
        <div class="mxd-block">
          <div class="marquee marquee--gsap">
            <!-- top line -->
            <div class="marquee__top">
              <!-- item -->
              <div class="marquee__item image">
                <a class="marquee__link" href="#">
                  <img src="assets/img/marquee/5.png" alt="Image" style="height: 100%;">
                </a>
              </div>
              <div class="marquee__item image">
                <a class="marquee__link" href="#">
                  <img src="assets/img/marquee/9.jpeg" alt="Image" style="height: 100%;">
                </a>
              </div>
              <!-- item -->
              <!-- <div class="marquee__item has-caption padding-4">
                <p>Inspiring<br>ideas</p>
              </div> -->
              <!-- item -->
              <div class="marquee__item">
                <a class="marquee__link" href="#">
                  <img src="assets/img/marquee/2.png" alt="Image">
                </a>
              </div>
              <!-- item -->
              <div class="marquee__item">
                <a class="marquee__link" href="#">
                  <img src="assets/img/marquee/3.jpg" alt="Image">
                </a>
              </div>
              <div class="marquee__item image">
                <a class="marquee__link" href="#">
                  <img src="assets/img/marquee/7.jpg" alt="Image" style="height: 100%;">
                </a>
              </div>
              <!-- item -->
              <!-- <div class="marquee__item has-caption padding-4">
                <p>Creative<br>minds</p>
              </div> -->
              <!-- item -->
              <div class="marquee__item">
                <a class="marquee__link" href="#">
                  <img src="assets/img/marquee/4.png" alt="Image">
                </a>
              </div>
            </div>
            <!-- bottom line -->
            <div class="marquee__bottom">
              <!-- item -->
              <!-- <div class="marquee__item has-caption padding-4">
                <p>Inspiring<br>ideas</p>
              </div> -->
              <div class="marquee__item">
                <a class="marquee__link" href="#">
                  <img src="assets/img/marquee/8.jpeg" alt="Image">
                </a>
              </div>
              <!-- item -->
              <div class="marquee__item">
                <a class="marquee__link" href="#">
                  <img src="assets/img/marquee/5.png" alt="Image">
                </a>
              </div>
              <!-- item -->
              <div class="marquee__item">
                <a class="marquee__link" href="#">
                  <img src="assets/img/marquee/6.png" alt="Image">
                </a>
              </div>
              <div class="marquee__item">
                <a class="marquee__link" href="#">
                  <img src="assets/img/marquee/2.png" alt="Image">
                </a>
              </div>
              <!-- item -->
              <!-- <div class="marquee__item has-caption padding-4">
                <p>Creative<br>minds</p>
              </div> -->
              <!-- item -->
              <div class="marquee__item">
                <a class="marquee__link" href="#">
                  <img src="assets/img/marquee/7.jpg" alt="Image">
                </a>
              </div>
              <!-- item -->
              <div class="marquee__item">
                <a class="marquee__link" href="#">
                  <img src="assets/img/marquee/9.jpeg" alt="Image">
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- Block - Marquee Images Two Lines End -->

      </div>
    </div>
    <!-- Section - Marquee Images Two Lines End -->

   <!-- Section - Team Leaders Start -->
<div class="mxd-section padding-pre-grid">
  <div class="mxd-container grid-container">
    <!-- Block - Team Leaders Start -->
    <div class="mxd-block">
      <div class="mxd-team-cards">
        <div class="container-fluid p-0">
          <div class="row g-0 flex-column-reverse flex-xl-row">

            <!-- item cards -->
            <div class="col-12 col-xl-8">
              <div class="container-fluid p-0">
                <div class="row g-0">

                  <!-- single card -->
                  <div class="col-12 col-md-4 mxd-team-cards__item mxd-grid-item no-margin-desktop animate-card-3">
                    <div class="mxd-team-cards__media anim-uni-in-up">
                      <div class="mxd-team-cards__photo">
                        <img src="assets/img/team/1.jpg" alt="Deepak Jangid">
                      </div>
                    </div>
                    <div class="mxd-team-cards__info">
                      <p class="mxd-team-cards__name t-large t-bright t-caption">
                        <a href="https://www.linkedin.com/in/deepak-jangid-2a88a31ba/" target="_blank" rel="noopener noreferrer">Deepak Jangid</a>
                      </p>
                      <p>CEO and Director</p>
                    </div>
                  </div>

                  <!-- CEO About Card -->
                  <div class="col-12 col-md-8 mxd-team-cards__item mxd-grid-item no-margin-desktop animate-card-3">
                    <div class="mxd-team-cards__about anim-uni-in-up">

                      <!-- Stats Row -->
                      <div class="mxd-ceo-stats">
                        <div class="mxd-ceo-stat">
                          <span class="mxd-ceo-stat__value">10+</span>
                          <span class="mxd-ceo-stat__label">Years Experience</span>
                        </div>
                        <div class="mxd-ceo-stat">
                          <span class="mxd-ceo-stat__value">200+</span>
                          <span class="mxd-ceo-stat__label">Projects Delivered</span>
                        </div>
                        <div class="mxd-ceo-stat">
                          <span class="mxd-ceo-stat__value">50+</span>
                          <span class="mxd-ceo-stat__label">Global Clients</span>
                        </div>
                      </div>
<!-- add this between .mxd-ceo-stats and .mxd-ceo-bio -->
<div class="mxd-ceo-divider"></div>
                      <!-- Bio -->
                      <div class="mxd-ceo-bio">
                        <p>Deepak Jangid is a visionary technology leader with over a decade of experience building high-performing digital products. He founded the company with a mission to bridge the gap between great design and flawless engineering — driving teams that consistently deliver exceptional results for clients worldwide.</p>
                      </div>

                      <!-- LinkedIn CTA -->
                      <div class="mxd-ceo-cta">
                        <a class="btn btn-anim btn-default btn-outline slide-right-up" href="https://www.linkedin.com/in/deepak-jangid-2a88a31ba/" target="_blank" rel="noopener noreferrer">
                          <span class="btn-caption">Connect on LinkedIn</span>
                          <i class="ph-bold ph-arrow-up-right"></i>
                        </a>
                      </div>

                    </div>
                  </div>

                </div>
              </div>
            </div>

            <!-- item title -->
            <div class="col-12 col-xl-4 mxd-team-cards__item mxd-grid-item no-margin animate-card-3">
              <div class="mxd-team-cards__h2-block right-block">
                <!-- Section Title Start -->
                <div class="mxd-section-title pre-grid">
                  <div class="container-fluid p-0">
                    <div class="row g-0">
                      <div class="col-12">
                        <div class="mxd-section-title__title">
                          <h2 class="reveal-type">Creative leaders</h2>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="mxd-section-title__descr">
                          <p class="anim-uni-in-up">Technical experts dedicated to delivering flawless,
                            high-performing digital experiences.</p>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="mxd-section-title__controls anim-uni-in-up">
                          <a class="btn btn-anim btn-default btn-outline slide-right-up" href="contact.php">
                            <span class="btn-caption">Meet our team</span>
                            <i class="ph-bold ph-arrow-up-right"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Section Title End -->
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    <!-- Block - Team Leaders End -->
  </div>
</div>
<!-- Section - Team Leaders End -->

    <!-- Section - Statistics Cards Start -->
    <div class="mxd-section overflow-hidden padding-pre-title">
      <div class="mxd-container grid-container">
        <!-- Block - Services Cards #02 Start -->
        <div class="mxd-block">
          <div class="mxd-services-cards-s">
            <div class="container-fluid px-0">
              <div class="row gx-0">
                <!-- item -->
                <div class="col-12 col-xl-8 mxd-services-cards-s__item mxd-grid-item anim-uni-scale-in-right">
                  <div class="mxd-services-cards-s__inner justify-between bg-base-tint radius-l padding-4">
                    <div class="mxd-services-cards-s__title">
                      <h3 class="anim-uni-in-up">Search Engine<br>Optimization (SEO)</h3>
                    </div>
                    <div class="mxd-services-cards-s__info width-50">
                      <div class="mxd-services-cards-s__tags">
                        <span class="tag tag-default tag-outline anim-uni-in-up">On-page SEO</span>
                        <span class="tag tag-default tag-outline anim-uni-in-up">Off-page SEO</span>
                        <span class="tag tag-default tag-outline anim-uni-in-up">Technical SEO</span>
                        <span class="tag tag-default tag-outline anim-uni-in-up">Local SEO</span>
                      </div>
                      <p class="anim-uni-in-up">Improve your website rankings with targeted SEO strategies that drive qualified traffic and generate high-quality leads in Ahmedabad.</p>
                    </div>
                    <div class="mxd-services-cards-s__image image-right">
                      <img src="assets/img/new-img/seo.png" alt="SEO Services">
                    </div>
                  </div>
                </div>
                <!-- item -->
                <div class="col-12 col-xl-4 mxd-services-cards-s__item mxd-grid-item anim-uni-scale-in-left">
                  <div class="mxd-services-cards-s__inner justify-end bg-accent radius-l padding-4">
                    <div class="mxd-services-cards-s__title">
                      <h3 class="opposite anim-uni-in-up">Social Media Marketing</h3>
                    </div>
                    <div class="mxd-services-cards-s__info">
                      <div class="mxd-services-cards-s__tags">
                        <span class="tag tag-default tag-outline-opposite anim-uni-in-up">Facebook Ads</span>
                        <span class="tag tag-default tag-outline-opposite anim-uni-in-up">Instagram</span>
                        <span class="tag tag-default tag-outline-opposite anim-uni-in-up">LinkedIn</span>
                      </div>
                      <p class="t-opposite anim-uni-in-up">Grow your brand and engage your audience in Ahmedabad with creative social media campaigns and result-driven advertising strategies.</p>
                    </div>
                    <div class="mxd-services-cards-s__image image-top-right">
                      <img class="mxd-move" src="assets/img/new-img/2.png" alt="Social Media Marketing">
                    </div>
                  </div>
                </div>
                <!-- item -->
                <div class="col-12 col-xl-4 mxd-services-cards-s__item mxd-grid-item anim-uni-scale-in-right">
                  <div class="mxd-services-cards-s__inner bg-additional radius-l padding-4">
                    <div class="mxd-services-cards-s__title">
                      <h3 class="anim-uni-in-up">Content Marketing</h3>
                    </div>
                    <div class="mxd-services-cards-s__info">
                      <div class="mxd-services-cards-s__tags">
                        <span class="tag tag-default tag-outline anim-uni-in-up">Blogs</span>
                        <span class="tag tag-default tag-outline anim-uni-in-up">Copywriting</span>
                        <span class="tag tag-default tag-outline anim-uni-in-up">Videos</span>
                      </div>
                      <p class="t-bright anim-uni-in-up">Deliver engaging, high-quality content that attracts the right audience in Ahmedabad, builds trust, and converts visitors into loyal customers.</p>
                    </div>
                    <div class="mxd-services-cards-s__image image-bottom">
                      <img class="mxd-rotate-slow" src="assets/img/illustrations/1200x1200_service-image-03.webp" alt="Content Marketing">
                    </div>
                  </div>
                </div>
                <!-- item -->
                <div class="col-12 col-xl-4 mxd-services-cards-s__item mxd-grid-item anim-uni-scale-in">
                  <div class="mxd-services-cards-s__inner bg-base-opp radius-l padding-4">
                    <div class="mxd-services-cards-s__title">
                      <h3 class="opposite anim-uni-in-up">Pay-Per-Click (PPC)</h3>
                    </div>
                    <div class="mxd-services-cards-s__info">
                      <div class="mxd-services-cards-s__tags">
                        <span class="tag tag-default tag-outline-opposite anim-uni-in-up">Google Ads</span>
                        <span class="tag tag-default tag-outline-opposite anim-uni-in-up">Display Ads</span>
                        <span class="tag tag-default tag-outline-opposite anim-uni-in-up">Remarketing</span>
                      </div>
                      <p class="t-opposite anim-uni-in-up">Achieve higher ROI through targeted advertising campaigns in Ahmedabad designed to drive quick, measurable performance.</p>
                    </div>
                    <div class="mxd-services-cards-s__image image-bottom image-bottom-2">
                      <img src="assets/img/illustrations/1200x1200_service-image-04.webp" alt="PPC Advertising">
                    </div>
                  </div>
                </div>
                <!-- item -->
                <div class="col-12 col-xl-4 mxd-services-cards-s__item mxd-grid-item anim-uni-scale-in-left">
                  <div class="mxd-services-cards-s__inner justify-end bg-base-tint radius-l padding-4">
                    <div class="mxd-services-cards-s__title">
                      <h3 class="anim-uni-in-up">Email Marketing</h3>
                    </div>
                    <div class="mxd-services-cards-s__info">
                      <div class="mxd-services-cards-s__tags">
                        <span class="tag tag-default tag-outline anim-uni-in-up">Automation</span>
                        <span class="tag tag-default tag-outline anim-uni-in-up">Campaigns</span>
                        <span class="tag tag-default tag-outline anim-uni-in-up">Newsletters</span>
                      </div>
                      <p class="anim-uni-in-up">Engage customers in Ahmedabad with personalized, automated, and conversion-focused email marketing campaigns.</p>
                    </div>
                    <div class="mxd-services-cards-s__image image-top" style="top:-40px;">
                      <img src="assets/img/new-img/3.png" alt="Email Marketing">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Block - Services Cards #02 End -->
      </div>
    </div>
    <!-- Section - Statistics Cards End -->

    <!-- Section - Approach and Philosophy Start -->
    <div class="mxd-section padding-pre-grid mobile-grid-s">
      <div class="mxd-container grid-container">

        <!-- Block - Section Title Start -->
        <div class="mxd-block">
          <div class="mxd-section-title">
            <div class="container-fluid p-0">
              <div class="row g-0">
                <div class="col-12 col-xl-6 mxd-grid-item no-margin">
                  <div class="mxd-section-title__hrtitle anim-uni-in-up">
                    <h2 class="reveal-type">Approach and philosophy</h2>
                  </div>
                </div>
                <div class="col-12 col-xl-3 mxd-grid-item no-margin">
                  <div class="mxd-section-title__hrdescr">
                    <p class="anim-uni-in-up">Design</p>
                    <p class="anim-uni-in-up">Development</p>
                    <p class="anim-uni-in-up">Mastership</p>
                  </div>
                </div>
                <div class="col-12 col-xl-3 mxd-grid-item no-margin">
                  <div class="mxd-section-title__hrcontrols anim-uni-in-up">
                    <a class="btn btn-anim btn-default btn-outline slide-right-up" href="contact.php">
                      <span class="btn-caption">Let's Chat</span>
                      <i class="ph-bold ph-arrow-up-right"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Block - Section Title End -->

        <!-- Block - Approach and Philosophy List Start -->
        <div class="mxd-block">
          <div class="mxd-approach-list">
            <!-- item -->
            <div class="mxd-approach-list__item">
              <div class="mxd-approach-list__border anim-uni-in-up"></div>
              <div class="mxd-approach-list__inner">
                <div class="container-fluid px-0">
                  <div class="row gx-0">
                    <div class="col-12 col-xl-2 mxd-grid-item no-margin">
                      <div class="mxd-approach-list__image anim-uni-in-up">
                        <img src="assets/img/icons/h70_appr-01.webp" alt="Icon">
                      </div>
                    </div>
                    <div class="col-12 col-xl-4 mxd-grid-item no-margin">
                      <div class="mxd-approach-list__title anim-uni-in-up">
                        <h6>Perfection</h6>
                      </div>
                    </div>
                    <div class="col-12 col-xl-6 mxd-grid-item no-margin">
                      <div class="mxd-approach-list__descr anim-uni-in-up">
                        <p>Perfection is the pursuit of excellence where every detail aligns seamlessly to create something flawless. It is not just the absence of mistakes but the presence of precision, balance, and quality in everything we do. True perfection is achieved when creativity, effort, and vision come together to deliver results that feel complete, polished, and timeless.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mxd-approach-list__border anim-uni-in-up"></div>
            </div>
            <!-- item -->
            <div class="mxd-approach-list__item">
              <div class="mxd-approach-list__border anim-uni-in-up"></div>
              <div class="mxd-approach-list__inner">
                <div class="container-fluid px-0">
                  <div class="row gx-0">
                    <div class="col-12 col-xl-2 mxd-grid-item no-margin">
                      <div class="mxd-approach-list__image anim-uni-in-up">
                        <img src="assets/img/icons/h70_appr-02.webp" alt="Icon">
                      </div>
                    </div>
                    <div class="col-12 col-xl-4 mxd-grid-item no-margin">
                      <div class="mxd-approach-list__title anim-uni-in-up">
                        <h6>Innovative</h6>
                      </div>
                    </div>
                    <div class="col-12 col-xl-6 mxd-grid-item no-margin">
                      <div class="mxd-approach-list__descr anim-uni-in-up">
                        <p>Innovative is the ability to think beyond conventions and create solutions that redefine possibilities. It’s about blending creativity with technology, challenging the ordinary, and transforming ideas into impactful outcomes. True innovation doesn’t just follow trends it sets them, inspiring progress and shaping a future where imagination becomes reality.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mxd-approach-list__border anim-uni-in-up"></div>
            </div>
            <!-- item -->
            <div class="mxd-approach-list__item">
              <div class="mxd-approach-list__border anim-uni-in-up"></div>
              <div class="mxd-approach-list__inner">
                <div class="container-fluid px-0">
                  <div class="row gx-0">
                    <div class="col-12 col-xl-2 mxd-grid-item no-margin">
                      <div class="mxd-approach-list__image anim-uni-in-up">
                        <img src="assets/img/icons/h70_appr-03.webp" alt="Icon">
                      </div>
                    </div>
                    <div class="col-12 col-xl-4 mxd-grid-item no-margin">
                      <div class="mxd-approach-list__title anim-uni-in-up">
                        <h6>Expertise</h6>
                      </div>
                    </div>
                    <div class="col-12 col-xl-6 mxd-grid-item no-margin">
                      <div class="mxd-approach-list__descr anim-uni-in-up">
                        <p>Expertise is the mastery that comes from knowledge, skill, and experience working together in harmony. It reflects the confidence to solve challenges, the precision to deliver quality, and the wisdom to guide decisions. True expertise goes beyond knowing it’s the ability to apply insight effectively, creating solutions that inspire trust and drive success..</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mxd-approach-list__border anim-uni-in-up"></div>
            </div>
            <!-- item -->
            <div class="mxd-approach-list__item">
              <div class="mxd-approach-list__border anim-uni-in-up"></div>
              <div class="mxd-approach-list__inner">
                <div class="container-fluid px-0">
                  <div class="row gx-0">
                    <div class="col-12 col-xl-2 mxd-grid-item no-margin">
                      <div class="mxd-approach-list__image anim-uni-in-up">
                        <img src="assets/img/icons/h70_appr-04.webp" alt="Icon">
                      </div>
                    </div>
                    <div class="col-12 col-xl-4 mxd-grid-item no-margin">
                      <div class="mxd-approach-list__title anim-uni-in-up">
                        <h6>Full-Cycle services</h6>
                      </div>
                    </div>
                    <div class="col-12 col-xl-6 mxd-grid-item no-margin">
                      <div class="mxd-approach-list__descr anim-uni-in-up">
                        <p>Full-Cycle Services represent an end-to-end approach where every stage of a project is handled with care, expertise, and precision. From initial strategy and planning to design, development, execution, and ongoing support, it ensures nothing is left incomplete. This holistic process delivers seamless experiences, consistent quality, and results that evolve with your business needs.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mxd-approach-list__border anim-uni-in-up"></div>
            </div>
            <!-- item -->
            <div class="mxd-approach-list__item">
              <div class="mxd-approach-list__border anim-uni-in-up"></div>
              <div class="mxd-approach-list__inner">
                <div class="container-fluid px-0">
                  <div class="row gx-0">
                    <div class="col-12 col-xl-2 mxd-grid-item no-margin">
                      <div class="mxd-approach-list__image anim-uni-in-up">
                        <img src="assets/img/icons/h70_appr-05.webp" alt="Icon">
                      </div>
                    </div>
                    <div class="col-12 col-xl-4 mxd-grid-item no-margin">
                      <div class="mxd-approach-list__title anim-uni-in-up">
                        <h6>Client Success</h6>
                      </div>
                    </div>
                    <div class="col-12 col-xl-6 mxd-grid-item no-margin">
                      <div class="mxd-approach-list__descr anim-uni-in-up">
                        <p>Client Success is the measure of our work and the foundation of our values. It means going beyond delivering services to building partnerships that create real impact. By understanding each client’s goals, challenges, and vision, we craft strategies that drive growth, foster trust, and ensure lasting results. True success is achieved when our clients thrive.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mxd-approach-list__border anim-uni-in-up"></div>
            </div>
          </div>
        </div>
        <!-- Block - Approach and Philosophy List Start -->

      </div>
    </div>
    <!-- Section - Approach and Philosophy End -->

    <!-- Section - Marquee Text One Line Start -->
    <div class="mxd-section padding-mtext-pre-grid">
      <div class="mxd-container fullwidth-container">

        <!-- Block - Marquee Text One Line Start -->
        <div class="mxd-block">
          <div class="marquee marquee-right--gsap muted-extra">
            <div class="marquee__toright">
              <!-- single item -->
              <div class="marquee__item one-line item-regular text">
                <p class="marquee__text">Our Partners</p>
                <div class="marquee__image">
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80" fill="currentColor">
                    <path fill="currentColor" d="M78.4,38.4c0,0-11.8,0-15.8,0c-1.6,0-4.8-0.2-7.1-0.8c-2.3-0.6-4.3-0.8-6.3-2.4c-2-1.2-3.5-3.2-4.7-4.8
                        c-1.2-1.6-1.6-3.6-2-5.5c-0.3-1.5-0.7-4.3-0.8-5.9c-0.2-4.3,0-17.4,0-17.4C41.8,0.8,41,0,40.2,0s-1.6,0.8-1.6,1.6c0,0,0,13.1,0,17.4
                        c0,1.6-0.6,4.3-0.8,5.9c-0.3,2-0.8,4-2,5.5c-1.2,2-2.8,3.6-4.7,4.8s-4,1.8-6.3,2.4c-1.9,0.5-4.7,0.6-6.7,0.8c-3.9,0.4-16.6,0-16.6,0
                        C0.8,38.4,0,39.2,0,40c0,0.8,0.8,1.6,1.6,1.6c0,0,12.2,0,16.6,0c1.6,0,4.8,0.3,6.7,0.8c2.3,0.6,4.3,0.8,6.3,2.4
                        c1.6,1.2,3.2,2.8,4.3,4.4c1.2,2,2.1,3.9,2.4,6.3c0.2,1.7,0.7,4.7,0.8,6.7c0.2,4,0,16.2,0,16.2c0,0.8,0.8,1.6,1.6,1.6
                        s1.6-0.8,1.6-1.6c0,0,0-12.3,0-16.2c0-1.6,0.5-5.1,0.8-6.7c0.5-2.3,0.8-4.4,2.4-6.3c1.2-1.6,2.8-3.2,4.3-4.4c2-1.2,3.9-2,6.3-2.4
                        c1.8-0.3,5.1-0.7,7.1-0.8c3.5-0.2,15.8,0,15.8,0c0.8,0,1.6-0.8,1.6-1.6C80,39.2,79.2,38.4,78.4,38.4C78.4,38.4,78.4,38.4,78.4,38.4z
                        " />
                  </svg>
                </div>
              </div>
              <!-- single item -->
              <div class="marquee__item one-line item-regular text">
                <p class="marquee__text">Our Partners</p>
                <div class="marquee__image">
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80" fill="currentColor">
                    <path fill="currentColor" d="M78.4,38.4c0,0-11.8,0-15.8,0c-1.6,0-4.8-0.2-7.1-0.8c-2.3-0.6-4.3-0.8-6.3-2.4c-2-1.2-3.5-3.2-4.7-4.8
                        c-1.2-1.6-1.6-3.6-2-5.5c-0.3-1.5-0.7-4.3-0.8-5.9c-0.2-4.3,0-17.4,0-17.4C41.8,0.8,41,0,40.2,0s-1.6,0.8-1.6,1.6c0,0,0,13.1,0,17.4
                        c0,1.6-0.6,4.3-0.8,5.9c-0.3,2-0.8,4-2,5.5c-1.2,2-2.8,3.6-4.7,4.8s-4,1.8-6.3,2.4c-1.9,0.5-4.7,0.6-6.7,0.8c-3.9,0.4-16.6,0-16.6,0
                        C0.8,38.4,0,39.2,0,40c0,0.8,0.8,1.6,1.6,1.6c0,0,12.2,0,16.6,0c1.6,0,4.8,0.3,6.7,0.8c2.3,0.6,4.3,0.8,6.3,2.4
                        c1.6,1.2,3.2,2.8,4.3,4.4c1.2,2,2.1,3.9,2.4,6.3c0.2,1.7,0.7,4.7,0.8,6.7c0.2,4,0,16.2,0,16.2c0,0.8,0.8,1.6,1.6,1.6
                        s1.6-0.8,1.6-1.6c0,0,0-12.3,0-16.2c0-1.6,0.5-5.1,0.8-6.7c0.5-2.3,0.8-4.4,2.4-6.3c1.2-1.6,2.8-3.2,4.3-4.4c2-1.2,3.9-2,6.3-2.4
                        c1.8-0.3,5.1-0.7,7.1-0.8c3.5-0.2,15.8,0,15.8,0c0.8,0,1.6-0.8,1.6-1.6C80,39.2,79.2,38.4,78.4,38.4C78.4,38.4,78.4,38.4,78.4,38.4z
                        " />
                  </svg>
                </div>
              </div>
              <!-- single item -->
              <div class="marquee__item one-line item-regular text">
                <p class="marquee__text">Our Partners</p>
                <div class="marquee__image">
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80" fill="currentColor">
                    <path fill="currentColor" d="M78.4,38.4c0,0-11.8,0-15.8,0c-1.6,0-4.8-0.2-7.1-0.8c-2.3-0.6-4.3-0.8-6.3-2.4c-2-1.2-3.5-3.2-4.7-4.8
                        c-1.2-1.6-1.6-3.6-2-5.5c-0.3-1.5-0.7-4.3-0.8-5.9c-0.2-4.3,0-17.4,0-17.4C41.8,0.8,41,0,40.2,0s-1.6,0.8-1.6,1.6c0,0,0,13.1,0,17.4
                        c0,1.6-0.6,4.3-0.8,5.9c-0.3,2-0.8,4-2,5.5c-1.2,2-2.8,3.6-4.7,4.8s-4,1.8-6.3,2.4c-1.9,0.5-4.7,0.6-6.7,0.8c-3.9,0.4-16.6,0-16.6,0
                        C0.8,38.4,0,39.2,0,40c0,0.8,0.8,1.6,1.6,1.6c0,0,12.2,0,16.6,0c1.6,0,4.8,0.3,6.7,0.8c2.3,0.6,4.3,0.8,6.3,2.4
                        c1.6,1.2,3.2,2.8,4.3,4.4c1.2,2,2.1,3.9,2.4,6.3c0.2,1.7,0.7,4.7,0.8,6.7c0.2,4,0,16.2,0,16.2c0,0.8,0.8,1.6,1.6,1.6
                        s1.6-0.8,1.6-1.6c0,0,0-12.3,0-16.2c0-1.6,0.5-5.1,0.8-6.7c0.5-2.3,0.8-4.4,2.4-6.3c1.2-1.6,2.8-3.2,4.3-4.4c2-1.2,3.9-2,6.3-2.4
                        c1.8-0.3,5.1-0.7,7.1-0.8c3.5-0.2,15.8,0,15.8,0c0.8,0,1.6-0.8,1.6-1.6C80,39.2,79.2,38.4,78.4,38.4C78.4,38.4,78.4,38.4,78.4,38.4z
                        " />
                  </svg>
                </div>
              </div>
              <!-- single item -->
              <div class="marquee__item one-line item-regular text">
                <p class="marquee__text">Our Partners</p>
                <div class="marquee__image">
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80" fill="currentColor">
                    <path fill="currentColor" d="M78.4,38.4c0,0-11.8,0-15.8,0c-1.6,0-4.8-0.2-7.1-0.8c-2.3-0.6-4.3-0.8-6.3-2.4c-2-1.2-3.5-3.2-4.7-4.8
                        c-1.2-1.6-1.6-3.6-2-5.5c-0.3-1.5-0.7-4.3-0.8-5.9c-0.2-4.3,0-17.4,0-17.4C41.8,0.8,41,0,40.2,0s-1.6,0.8-1.6,1.6c0,0,0,13.1,0,17.4
                        c0,1.6-0.6,4.3-0.8,5.9c-0.3,2-0.8,4-2,5.5c-1.2,2-2.8,3.6-4.7,4.8s-4,1.8-6.3,2.4c-1.9,0.5-4.7,0.6-6.7,0.8c-3.9,0.4-16.6,0-16.6,0
                        C0.8,38.4,0,39.2,0,40c0,0.8,0.8,1.6,1.6,1.6c0,0,12.2,0,16.6,0c1.6,0,4.8,0.3,6.7,0.8c2.3,0.6,4.3,0.8,6.3,2.4
                        c1.6,1.2,3.2,2.8,4.3,4.4c1.2,2,2.1,3.9,2.4,6.3c0.2,1.7,0.7,4.7,0.8,6.7c0.2,4,0,16.2,0,16.2c0,0.8,0.8,1.6,1.6,1.6
                        s1.6-0.8,1.6-1.6c0,0,0-12.3,0-16.2c0-1.6,0.5-5.1,0.8-6.7c0.5-2.3,0.8-4.4,2.4-6.3c1.2-1.6,2.8-3.2,4.3-4.4c2-1.2,3.9-2,6.3-2.4
                        c1.8-0.3,5.1-0.7,7.1-0.8c3.5-0.2,15.8,0,15.8,0c0.8,0,1.6-0.8,1.6-1.6C80,39.2,79.2,38.4,78.4,38.4C78.4,38.4,78.4,38.4,78.4,38.4z
                        " />
                  </svg>
                </div>
              </div>

            </div>
          </div>
        </div>
        <!-- Block - Marquee Text One Line End -->

      </div>
    </div>
    <!-- Section - Marquee Text One Line End -->
    <!-- Section - Partners Cards Start -->
    <div class="mxd-section padding-pre-title">
      <div class="mxd-container grid-container">

        <!-- Block - Partners Cards Start -->
        <div class="mxd-block">
          <div class="mxd-partners-cards">
            <div class="container-fluid p-0">
              <div class="row g-0">
                <!-- item -->
                <!-- <div class="col-12 col-md-6 col-xl-2 mxd-partners-cards__item mxd-grid-item animate-card-4">
                  <a class="mxd-partners-cards__inner" href="#0">
                    <div class="mxd-partners-cards__logo">
                      <img src="assets/img/brands/1.png" alt="Partner Logo">
                    </div>
                  </a>
                </div> -->
                <!-- item -->
                <div class="col-12 col-md-6 col-xl-2 mxd-partners-cards__item mxd-grid-item animate-card-4">
                  <a class="mxd-partners-cards__inner" href="#0">
                    <div class="mxd-partners-cards__logo">
                      <img src="assets/img/brands/18.jpg" alt="Partner Logo">
                    </div>
                  </a>
                </div>
                <!-- item -->
                <div class="col-12 col-md-6 col-xl-2 mxd-partners-cards__item mxd-grid-item animate-card-4">
                  <a class="mxd-partners-cards__inner" href="#0">
                    <div class="mxd-partners-cards__logo">
                      <img src="assets/img/brands/19.jpg" alt="Partner Logo">
                    </div>
                  </a>
                </div>
                <!-- item -->
                <div class="col-12 col-md-6 col-xl-2 mxd-partners-cards__item mxd-grid-item animate-card-4">
                  <a class="mxd-partners-cards__inner" href="#0">
                    <div class="mxd-partners-cards__logo">
                      <img src="assets/img/brands/4.png" alt="Partner Logo">
                    </div>
                  </a>
                </div>
                <!-- item -->
                <div class="col-12 col-md-6 col-xl-2 mxd-partners-cards__item mxd-grid-item animate-card-4">
                  <a class="mxd-partners-cards__inner" href="#0">
                    <div class="mxd-partners-cards__logo">
                      <img src="assets/img/brands/5.png" alt="Partner Logo">
                    </div>
                  </a>
                </div>
                <!-- item -->
                <div class="col-12 col-md-6 col-xl-2 mxd-partners-cards__item mxd-grid-item animate-card-4">
                  <a class="mxd-partners-cards__inner" href="#0">
                    <div class="mxd-partners-cards__logo">
                      <img src="assets/img/brands/6.png" alt="Partner Logo">
                    </div>
                  </a>
                </div>
                <!-- item -->
                <div class="col-12 col-md-6 col-xl-2 mxd-partners-cards__item mxd-grid-item animate-card-4">
                  <a class="mxd-partners-cards__inner" href="#0">
                    <div class="mxd-partners-cards__logo">
                      <img src="assets/img/brands/20.jpg" alt="Partner Logo">
                    </div>
                  </a>
                </div>
                <!-- item -->
                <div class="col-12 col-md-6 col-xl-2 mxd-partners-cards__item mxd-grid-item animate-card-4">
                  <a class="mxd-partners-cards__inner" href="#0">
                    <div class="mxd-partners-cards__logo">
                      <img src="assets/img/brands/8.png" alt="Partner Logo">
                    </div>
                  </a>
                </div>
                <!-- item -->
                <div class="col-12 col-md-6 col-xl-2 mxd-partners-cards__item mxd-grid-item animate-card-4">
                  <a class="mxd-partners-cards__inner" href="#0">
                    <div class="mxd-partners-cards__logo">
                      <img src="assets/img/brands/9.png" alt="Partner Logo">
                    </div>
                  </a>
                </div>
                <!-- item -->
                <div class="col-12 col-md-6 col-xl-2 mxd-partners-cards__item mxd-grid-item animate-card-4">
                  <a class="mxd-partners-cards__inner" href="#0">
                    <div class="mxd-partners-cards__logo">
                      <img src="assets/img/brands/10.png" alt="Partner Logo">
                    </div>
                  </a>
                </div>
                <!-- item -->
                <div class="col-12 col-md-6 col-xl-2 mxd-partners-cards__item mxd-grid-item animate-card-4">
                  <a class="mxd-partners-cards__inner" href="#0">
                    <div class="mxd-partners-cards__logo">
                      <img src="assets/img/brands/11.png" alt="Partner Logo">
                    </div>
                  </a>
                </div>
                <!-- item -->
                <div class="col-12 col-md-6 col-xl-2 mxd-partners-cards__item mxd-grid-item animate-card-4">
                  <a class="mxd-partners-cards__inner" href="#0">
                    <div class="mxd-partners-cards__logo">
                      <img src="assets/img/brands/12.png" alt="Partner Logo">
                    </div>
                  </a>
                </div>
                <!-- item -->
                <div class="col-12 col-md-6 col-xl-2 mxd-partners-cards__item mxd-grid-item animate-card-4">
                  <a class="mxd-partners-cards__inner" href="#0">
                    <div class="mxd-partners-cards__logo">
                      <img src="assets/img/brands/13.png" alt="Partner Logo">
                    </div>
                  </a>
                </div>
                <!-- item -->
                <div class="col-12 col-md-6 col-xl-2 mxd-partners-cards__item mxd-grid-item animate-card-4">
                  <a class="mxd-partners-cards__inner" href="#0">
                    <div class="mxd-partners-cards__logo">
                      <img src="assets/img/brands/21.jpg" alt="Partner Logo">
                    </div>
                  </a>
                </div>
                <!-- item -->
                <div class="col-12 col-md-6 col-xl-2 mxd-partners-cards__item mxd-grid-item animate-card-4">
                  <a class="mxd-partners-cards__inner" href="#0">
                    <div class="mxd-partners-cards__logo">
                      <img src="assets/img/brands/15.png" alt="Partner Logo">
                    </div>
                  </a>
                </div>
                <!-- item -->
                <div class="col-12 col-md-6 col-xl-2 mxd-partners-cards__item mxd-grid-item animate-card-4">
                  <a class="mxd-partners-cards__inner" href="#0">
                    <div class="mxd-partners-cards__logo">
                      <img src="assets/img/brands/16.jpg" alt="Partner Logo">
                    </div>
                  </a>
                </div>
                <!-- item -->
                <div class="col-12 col-md-6 col-xl-2 mxd-partners-cards__item mxd-grid-item animate-card-4">
                  <a class="mxd-partners-cards__inner" href="#0">
                    <div class="mxd-partners-cards__logo">
                      <img src="assets/img/brands/17.jpg" alt="Partner Logo">
                    </div>
                  </a>
                </div>
                <div class="col-12 col-md-6 col-xl-2 mxd-partners-cards__item mxd-grid-item animate-card-4">
                  <a class="mxd-partners-cards__inner" href="#0">
                    <div class="mxd-partners-cards__logo">
                      <img src="assets/img/brands/22.jpg" alt="Partner Logo">
                    </div>
                  </a>
                </div>
                <div class="col-12 col-md-6 col-xl-2 mxd-partners-cards__item mxd-grid-item animate-card-4">
                  <a class="mxd-partners-cards__inner" href="#0">
                    <div class="mxd-partners-cards__logo">
                      <img src="assets/img/brands/23.jpg" alt="Partner Logo">
                    </div>
                  </a>
                </div>
                <div class="col-12 col-md-6 col-xl-2 mxd-partners-cards__item mxd-grid-item animate-card-4">
                  <a class="mxd-partners-cards__inner" href="#0">
                    <div class="mxd-partners-cards__logo">
                      <img src="assets/img/brands/24.jpg" alt="Partner Logo">
                    </div>
                  </a>
                </div>
                <div class="col-12 col-md-6 col-xl-2 mxd-partners-cards__item mxd-grid-item animate-card-4">
                  <a class="mxd-partners-cards__inner" href="#0">
                    <div class="mxd-partners-cards__logo">
                      <img src="assets/img/brands/25.jpg" alt="Partner Logo">
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Block - Partners Cards End -->

      </div>
    </div>
    <!-- Section - Partners Cards End -->

    <!-- Section - Parallax Divider Start -->
    <div class="mxd-section padding-pre-title">
      <div class="mxd-container">
        <div class="mxd-divider">
          <div class="mxd-divider__image divider-image-9 parallax-img"></div>
        </div>
      </div>
    </div>
    <!-- Section - Parallax Divider End -->

    <!-- Section - Blog Preview Start -->
    <div class="mxd-section padding-blog">
      <div class="mxd-container grid-container">

        <!-- Block - Section Title Start -->
        <div class="mxd-block">
          <div class="mxd-section-title pre-grid">
            <div class="container-fluid p-0">
              <div class="row g-0">
                <div class="col-12 col-xl-5 mxd-grid-item no-margin">
                  <div class="mxd-section-title__hrtitle">
                    <h2 class="reveal-type anim-uni-in-up">Recent insights</h2>
                  </div>
                </div>
                <div class="col-12 col-xl-4 mxd-grid-item no-margin">
                  <div class="mxd-section-title__hrdescr">
                    <p class="anim-uni-in-up">Inspiring ideas, creative insights, and the latest
                      in design and tech. Fueling innovation for your digital journey.</p>
                  </div>
                </div>
                <div class="col-12 col-xl-3 mxd-grid-item no-margin">
                  <div class="mxd-section-title__hrcontrols anim-uni-in-up">
                    <a class="btn btn-anim btn-default btn-outline slide-right-up" href="blog.php">
                      <span class="btn-caption">All Articles</span>
                      <i class="ph-bold ph-arrow-up-right"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Block - Section Title End -->

        <!-- Block - Blog Preview Cards Start -->
       <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>


<div class="swiper blogSwiper">

  <div class="swiper-wrapper">

    <div class="swiper-slide">
     <a class="mxd-blog-preview__media" href="why-businesses-need-professional-website-development-services-in-ahmedabad.php">
              <div class="mxd-blog-preview__image blog-preview-image-8 parallax-img-small swiper-lazy"></div>

              <div class="swiper-lazy-preloader"></div>

              <div class="mxd-preview-hover">
                <i class="mxd-preview-hover__icon">
                  <img src="assets/img/icons/icon-eye.svg" alt="Eye Icon" loading="lazy">
                </i>
              </div>

              <div class="mxd-blog-preview__tags">
                <span class="tag tag-default tag-permanent">Digital Marketing</span>
                <span class="tag tag-default tag-permanent">Internet Marketing</span>
              </div>
            </a>

            <div class="mxd-blog-preview__data">
              <a class="anim-uni-in-up" href="why-businesses-need-professional-website-development-services-in-ahmedabad.php">
                <span>Why Businesses Need Professional </span>Why Businesses Need Professional Website Development Services in Ahmedabad
              </a>
            </div>
    </div>


    <div class="swiper-slide">
     <a class="mxd-blog-preview__media" href="driving-real-business-growth-in-ahmedabad.php">
              <div class="mxd-blog-preview__image blog-preview-image-7 parallax-img-small swiper-lazy"></div>

              <div class="swiper-lazy-preloader"></div>

              <div class="mxd-preview-hover">
                <i class="mxd-preview-hover__icon">
                  <img src="assets/img/icons/icon-eye.svg" alt="Eye Icon" loading="lazy">
                </i>
              </div>

              <div class="mxd-blog-preview__tags">
                <span class="tag tag-default tag-permanent">Digital Marketing</span>
                <span class="tag tag-default tag-permanent">Internet Marketing</span>
              </div>
            </a>

            <div class="mxd-blog-preview__data">
              <a class="anim-uni-in-up" href="driving-real-business-growth-in-ahmedabad.php">
                <span>DM Tech Studio: </span>Driving Real Business Growth in Ahmedabad
              </a>
            </div>
    </div>

    <div class="swiper-slide">
      <a class="mxd-blog-preview__media" href="professional-website-development-for-business-growth.php"> <div class="mxd-blog-preview__image blog-preview-image-6 parallax-img-small"> <!-- <img class="parallax-img-small" src="assets/img/blog/preview/1000x1250_prv-06.webp" alt="Blog Preview Image"> --> </div> <div class="mxd-preview-hover"> <i class="mxd-preview-hover__icon"> <img src="assets/img/icons/icon-eye.svg" alt="Eye Icon"> </i> </div> <div class="mxd-blog-preview__tags"> <span class="tag tag-default tag-permanent">Website Development</span> <span class="tag tag-default tag-permanent">Website SEO</span> </div> </a> <div class="mxd-blog-preview__data"> <a class="anim-uni-in-up" href="professional-website-development-for-business-growth.php"><span>Professional Website Development </span>for Business Growth</a> </div>
    </div>

    <div class="swiper-slide">
     <a class="mxd-blog-preview__media" href="why-every-local-business-in-ahmedabad-needs-local-seo-in-2026.php"> <div class="mxd-blog-preview__image blog-preview-image-5 parallax-img-small"> <!-- <img class="parallax-img-small" src="assets/img/blog/preview/1000x1250_prv-05.webp" alt="Blog Preview Image"> --> </div> <div class="mxd-preview-hover"> <i class="mxd-preview-hover__icon"> <img src="assets/img/icons/icon-eye.svg" alt="Eye Icon"> </i> </div> <div class="mxd-blog-preview__tags"> <span class="tag tag-default tag-permanent">Digital Marketing</span> <span class="tag tag-default tag-permanent">Local SEO</span> </div> </a> <div class="mxd-blog-preview__data"> <a class="anim-uni-in-up" href="why-every-local-business-in-ahmedabad-needs-local-seo-in-2026.php"><span>Why Every Local Business in Ahmedabad </span>Needs Local SEO in 2026</a> </div>
    </div>

    <div class="swiper-slide">
      <a class="mxd-blog-preview__media" href="why-every-local-business-needs-social-media-marketing-2025.php"> <div class="mxd-blog-preview__image blog-preview-image-4 parallax-img-small"> <!-- <img class="parallax-img-small" src="assets/img/blog/preview/1000x1250_prv-04.webp" alt="Blog Preview Image"> --> </div> <div class="mxd-preview-hover"> <i class="mxd-preview-hover__icon"> <img src="assets/img/icons/icon-eye.svg" alt="Eye Icon"> </i> </div> <div class="mxd-blog-preview__tags"> <span class="tag tag-default tag-permanent">Social Media Marketing</span> <span class="tag tag-default tag-permanent">Local SEO</span> </div> </a> <div class="mxd-blog-preview__data"> <a class="anim-uni-in-up" href="why-every-local-business-needs-social-media-marketing-2025.php"><span>Why Every Local Business Needs </span>Social Media Marketing in 2025</a> </div>
    </div>
  <div class="swiper-slide">
     <a class="mxd-blog-preview__media" href="why-your-brand-is-your-most-valuable-asset-in-2025.php"> <div class="mxd-blog-preview__image blog-preview-image-1 parallax-img-small"> <!-- <img class="parallax-img-small" src="assets/img/blog/preview/1000x1250_prv-01.webp" alt="Blog Preview Image"> --> </div> <div class="mxd-preview-hover"> <i class="mxd-preview-hover__icon"> <img src="assets/img/icons/icon-eye.svg" alt="Eye Icon"> </i> </div> <div class="mxd-blog-preview__tags"> <span class="tag tag-default tag-permanent">Branding</span> <span class="tag tag-default tag-permanent">Digital Marketing</span> </div> </a> <div class="mxd-blog-preview__data"> <a class="anim-uni-in-up" href="why-your-brand-is-your-most-valuable-asset-in-2025.php"><span>Why Your Brand </span>is Your Most Valuable Asset in 2025</a> </div>
    </div>
    
      <div class="swiper-slide">
     <a class="mxd-blog-preview__media" href="the-rise-of-voice-search-how-to-optimize-in-2025.php"> <div class="mxd-blog-preview__image blog-preview-image-2 parallax-img-small"> <!-- <img class="parallax-img-small" src="assets/img/blog/preview/1000x1250_prv-02.webp" alt="Blog Preview Image"> --> </div> <div class="mxd-preview-hover"> <i class="mxd-preview-hover__icon"> <img src="assets/img/icons/icon-eye.svg" alt="Eye Icon"> </i> </div> <div class="mxd-blog-preview__tags"> <span class="tag tag-default tag-permanent">SEO</span> <span class="tag tag-default tag-permanent">AI</span> </div> </a> <div class="mxd-blog-preview__data"> <a class="anim-uni-in-up" href="the-rise-of-voice-search-how-to-optimize-in-2025.php">The Rise of Voice <span>Search: How to </span> Optimize in 2025</a> </div>
    </div>
    
    
      <div class="swiper-slide">
      <a class="mxd-blog-preview__media" href="building-trust-with-ai-driven-content-in-2025.php"> <div class="mxd-blog-preview__image blog-preview-image-3 parallax-img-small"> <!-- <img class="parallax-img-small" src="assets/img/blog/preview/1000x1250_prv-03.webp" alt="Blog Preview Image"> --> </div> <div class="mxd-preview-hover"> <i class="mxd-preview-hover__icon"> <img src="assets/img/icons/icon-eye.svg" alt="Eye Icon"> </i> </div> <div class="mxd-blog-preview__tags"> <span class="tag tag-default tag-permanent">News</span> <span class="tag tag-default tag-permanent">AI</span> </div> </a> <div class="mxd-blog-preview__data"> <a class="anim-uni-in-up" href="building-trust-with-ai-driven-content-in-2025.php">Building Trust with <span>AI-Driven Content </span> in 2025</a> </div>
    </div>


  </div>

  <!-- Buttons -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>

  <!-- Progress Bar -->
  <div class="swiper-progress">
    <div class="swiper-progress-bar"></div>
  </div>

</div>
<!-- ===== BLOG SLIDER START  ===== -->

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<script>
  const slider = document.querySelector(".blogSwiper");
  const progressBar = slider.querySelector(".swiper-progress-bar");

  let isVisible = false;
  let userInteracted = false;

  const swiper = new Swiper(slider, {
    slidesPerView: 3,
    loop: true,
    speed: 700,

    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },

    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints: {
      0: { slidesPerView: 1 },
      768: { slidesPerView: 2 },
      1024: { slidesPerView: 3 },
    },

    on: {
      autoplayTimeLeft(_, time, progress) {
        progressBar.style.width = ((1 - progress) * 100) + "%";
      },
      touchStart() {
        userInteracted = true;
        swiper.autoplay.stop();
      }
    }
  });

  /* Start autoplay only when visible */
  const observer = new IntersectionObserver(
    ([entry]) => {
      isVisible = entry.isIntersecting;
      if (isVisible && !userInteracted) {
        swiper.autoplay.start();
      } else {
        swiper.autoplay.stop();
        progressBar.style.width = "0%";
      }
    },
    { threshold: 0.4 }
  );

  observer.observe(slider);

  /* Stop autoplay on button click */
  document.querySelector(".swiper-button-next").onclick = () => {
    userInteracted = true;
    swiper.autoplay.stop();
  };

  document.querySelector(".swiper-button-prev").onclick = () => {
    userInteracted = true;
    swiper.autoplay.stop();
  };
</script>

    
  <div class="progress"><span></span></div>
</div>

</div>


<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<script>
const carousel = document.getElementById("blogCarousel");
const slider = carousel.querySelector(".slider");
const cards = carousel.querySelectorAll(".card");
const nextBtn = carousel.querySelector(".next");
const prevBtn = carousel.querySelector(".prev");
const progress = carousel.querySelector(".progress span");

let index = 0;
let cardWidth = cards[0].offsetWidth + 20;
let interval;
let duration = 3000;

function moveSlide() {
  slider.style.transform = `translateX(-${index * cardWidth}px)`;

  progress.style.width = "0%";
  progress.style.transition = "none";

  setTimeout(() => {
    progress.style.transition = `width ${duration}ms linear`;
    progress.style.width = "100%";
  }, 50);
}

function next() {
  index++;
  if (index >= cards.length - 2) index = 0;
  moveSlide();
}

function prev() {
  index--;
  if (index < 0) index = cards.length - 3;
  moveSlide();
}

function startAuto() {
  interval = setInterval(next, duration);
}

function stopAuto() {
  clearInterval(interval);
}

carousel.addEventListener("mouseenter", stopAuto);
carousel.addEventListener("mouseleave", startAuto);

nextBtn.onclick = () => { stopAuto(); next(); startAuto(); };
prevBtn.onclick = () => { stopAuto(); prev(); startAuto(); };

moveSlide();
startAuto();
</script>
</script>








<script src="assets/js/libs.min.js"></script>
<script src="assets/js/app.min.js"></script>

<!--BLOG SLIDER End-->>


    <!-- Section - CTA Start -->
    <div class="mxd-section overflow-hidden">
      <div class="mxd-container">

        <!-- Block - CTA Start -->
        <div class="mxd-block">
          <div class="mxd-promo">
            <div class="mxd-promo__inner anim-zoom-out-container">
              <!-- background -->
              <div class="mxd-promo__bg"></div>
              <!-- caption -->
              <div class="mxd-promo__content">
                <p class="mxd-promo__title anim-uni-in-up">
                  <span class="mxd-promo__icon">
                    <img src="assets/img/icons/300x300_obj-cta-01.webp" alt="Icon">
                  </span>
                  <span class="mxd-promo__caption reveal-type">Let's talk about your project!</span>
                </p>
                <div class="mxd-promo__controls anim-uni-in-up">
                  <a class="btn btn-anim btn-default btn-large btn-additional slide-right-up" href="contact.php">
                    <span class="btn-caption">Contact Us</span>
                    <i class="ph-bold ph-arrow-up-right"></i>
                  </a>
                </div>
              </div>
              <!-- parallax images -->
              <div class="mxd-promo__images">
                <img class="promo-image promo-image-1" src="assets/img/illustrations/cta-img-01.webp" alt="Image">
                <img class="promo-image promo-image-2" src="assets/img/illustrations/cta-img-02.webp" alt="Image">
              </div>
            </div>
          </div>
        </div>
        <!-- Block - CTA End -->

      </div>
    </div>
    <!-- Section - CTA End -->

  </main>
  <!-- Page Content End -->


  <!-- footer-start -->

  <?php
  require_once 'elements/footer.php';
  ?>
  <!-- footer-end -->

  <!-- To Top Button Start -->
  <a href="#top" id="to-top" class="btn btn-to-top slide-up anim-no-delay">
    <i class="ph ph-arrow-up"></i>
  </a>
  <!-- To Top Button End -->

  <!-- Load Scripts Start -->
  <script src="assets/js/libs.min.js"></script>
  <script src="assets/js/app.min.js"></script>
  <script>
    const statsCounter1 = new countUp.CountUp("stats-counter-1", 50, optionsPlus);
    const statsCounter2 = new countUp.CountUp("stats-counter-2", 80, optionsPlus);
    const statsCounter3 = new countUp.CountUp("stats-counter-3", 10, optionsPlus);
    const statsCounter4 = new countUp.CountUp("stats-counter-4", 8, optionsPlus);
    statsCounter1.start();
    statsCounter2.start();
    statsCounter3.start();
    statsCounter4.start();
  </script>
  <script>
    $(window).on("scroll", function() {
      if ($(window).scrollTop() > 10) {
        $(".mxd-header").addClass("is-hidden");
      } else {
        $(".mxd-header").removeClass("is-hidden");
      }
    });
  </script>
  <!-- Load Scripts End -->

</body>


</html>
