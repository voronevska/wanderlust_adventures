<!DOCTYPE html>
<html>
<head>
    <title>Swiper Slider Example</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <style>
      /* normalize */
      body {
        margin: 0;
        padding: 0;
        overflow-x: hidden;
      }

      /* slaider */
      .swiper-container {
          width: 100vw;
          height: 100vh;
          overflow: hidden;
      }
      
      .swiper-slide {
          display: flex;
          align-items: center;
          justify-content: center;
          text-align: center;
          font-size: 18px;
      }

      .swiper-slide img {
          width: 100%;
          height: 100%;
          object-fit: cover;
      }
    </style>
</head>
<body>
    <div id="swiper-container" class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="https://prod-virtuoso.dotcmscloud.com/dA/188da7ea-f44f-4b9c-92f9-6a65064021c1/heroImage1/PowerfulReasons_hero.jpg" alt="Slide 1">
            </div>
            <div class="swiper-slide">
                <img src="https://i0.wp.com/travelmoments.net/wp-content/uploads/2020/10/Welcome-to-Travel-Moments-Homepage.png?fit=2240%2C1260&ssl=1" alt="Slide 2">
            </div>
            <div class="swiper-slide">
                <img src="https://b2415480.smushcdn.com/2415480/wp-content/uploads/2021/09/Action-Tour-Guide-Women-in-Canyon-scaled.jpg?lossy=1&strip=0&webp=1" alt="Slide 3">
            </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var swiper = new Swiper("#swiper-container", {
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                slidesPerView: 1,
                spaceBetween: 0,
            });
        });
    </script>
</body>
</html>
