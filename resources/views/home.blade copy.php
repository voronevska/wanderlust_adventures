<!DOCTYPE html>
<html>
<head>
    <title>Swiper</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
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

    <p>
      Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam commodi natus tenetur minus mollitia, quas delectus magni nihil laboriosam qui id veniam, maxime debitis quo. Cupiditate dolores necessitatibus eum harum.
      Placeat modi cumque vitae quo ducimus, magnam nostrum? Nobis modi quae incidunt sint doloremque quibusdam pariatur fugit soluta ea debitis. Hic eligendi et eos, vel repellendus praesentium animi doloremque eaque.
      Esse, id. Blanditiis laudantium omnis voluptates iusto quia inventore culpa quisquam odit veritatis obcaecati, aliquid laborum tempora corporis adipisci facere impedit neque aliquam incidunt, a eius harum? Eos, autem non?
    </p>

    <div class="testimonial-carousel">
        <div class="swiper-container testimonial-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="testimonial-slide">
                        <h3>Відгук 1</h3>
                        <p>Текст першого відгуку</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-slide">
                        <h3>Відгук 2</h3>
                        <p>Текст другого відгуку</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-slide">
                        <h3>Відгук 3</h3>
                        <p>Текст третього відгуку</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-slide">
                        <h3>Відгук 4</h3>
                        <p>Текст четвертого відгуку</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-slide">
                        <h3>Відгук 5</h3>
                        <p>Текст п'ятого відгуку</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-slide">
                        <h3>Відгук 6</h3>
                        <p>Текст шостого відгуку</p>
                    </div>
                </div>
            </div>
            <div class="swiper-testimonial-button-next"></div>
            <div class="swiper-testimonial-button-prev"></div>
        </div>
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
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
            });

            var testimonialSwiper = new Swiper(".testimonial-swiper", {
                navigation: {
                    nextEl: ".swiper-testimonial-button-next",
                    prevEl: ".swiper-testimonial-button-prev",
                },
                slidesPerView: 3,
                spaceBetween: 15,
                loop: true,
            });
        });
    </script>
</body>
</html>
