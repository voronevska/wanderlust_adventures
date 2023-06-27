<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wanderlust Adventures</title>
  <link rel="icon" type="image/png" href="images/logo.png" sizes="32x32">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Pacifico&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

  <style>
    body {
      font-family: 'Montserrat', sans-serif;
    }

    h1, h2 {
      font-family: 'Pacifico', sans-serif;
      user-select: none;
    }

    .swiper-pagination-bullet {
      opacity: 0.7;
      background-color: white;
      border: 1px solid #333;
    }

    .swiper-pagination-bullet-active {
      background-color: #333;
      border: 1px solid white;
    }

    .bgc-1 {
      background: linear-gradient(to left, #3b5998, #6792c7, #96b5e1, #c7d9f5);
    }

    .bgc-2 {
      background: linear-gradient(to right, #a3d9ff, #92c8f9, #aab5e7, #c997d4, #e378c2, #f864b0, #ff868c);
    }

    .bgc-3 {
      background: linear-gradient(to right, #ff9999 25%, #ff8080 40%, #ff6666 55%, #ff4d4d 70%, #ff4d4d);
    }

    .bgc-4 {
      background: linear-gradient(to left, #73c7ff, #87d0ff, #9bdcff, #a9e4ff, #b6ecff, #c3f3ff);
    }
  </style>
</head>

<body>
  <header class="bg-gray-900 bg-opacity-95 fixed top-0 w-full z-20">
    <div class="container mx-auto px-4 flex items-center justify-between">
      <nav class="flex place-content-between w-full items-center">
      <!-- An additional submenu has been created for "Our products" -->
        <a href="#" class="mr-6">
          <img src="images/logo.png" alt="logo" class="h-12 my-4">
        </a>

        <ul class="flex flex-col md:flex-row self-stretch text-right">
          <li class="flex items-stretch">
            <a href="#about" class="flex items-center text-white ml-4 md:pr-8 hover:text-yellow-300 transition duration-300 flex-grow">
              About Us
            </a>
          </li>

          <li class="flex items-stretch group relative">
            <a href="#products" class="flex items-center text-white ml-4 md:pr-8 hover:text-yellow-300 transition duration-300">
              Our Products
            </a>

            <ul class="hidden self-bottom absolute top-16 py-2 bg-gray-900 bg-opacity-95 rounded-lg text-left shadow-md transition duration-300 ease-in-out">
              <li>
                <a href="#product-1" class="anchor block px-4 py-2 text-white hover:bg-yellow-400">
                  Family vacation
                </a>
              </li>

              <li>
                <a href="#product-2" class="anchor block px-4 py-2 text-white hover:bg-yellow-400">
                  Kids Trip
                </a>
              </li>

              <li>
                <a href="#product-3" class="anchor block px-4 py-2 text-white hover:bg-yellow-400">
                  Exotic Tour
                </a>
              </li>

              <li>
                <a href="#product-4" class="anchor block px-4 py-2 text-white hover:bg-yellow-400">
                  Customized Tour
                </a>
              </li>

              <li>
                <a href="#testimonials" class="anchor block px-4 py-2 text-white hover:bg-yellow-400">
                  Testimonials
                </a>
              </li>
            </ul>
          </li>

          <li class="flex items-stretch">
            <a href="#features" class="flex items-center text-white ml-4 md:pr-8 hover:text-yellow-300 transition duration-300 flex-grow">
              Our features
            </a>
          </li>

          <li class="flex items-stretch">
            <a href="#testimonials" class="flex items-center text-white ml-4 md:pr-8 hover:text-yellow-300 transition duration-300 flex-grow">
              Testimonials
            </a>
          </li>

          <li class="flex items-stretch">
            <a href="#pricing" class="flex items-center text-white ml-4 md:pr-8 hover:text-yellow-300 transition duration-300 flex-grow">
              Pricing
            </a>
          </li>

          <li class="flex items-stretch">
            <a href="#contact" class="flex items-center text-white ml-4 md:pr-8 hover:text-yellow-300 transition duration-300 flex-grow">
              Contact
            </a>
          </li>

          <li class="flex items-stretch">
            <a href="#social" class="flex items-center text-white ml-4 hover:text-yellow-300 transition duration-300 flex-grow">
              Social Media
            </a>
          </li>
        </ul>
      </nav>      
    </div>
  </header>

  <section class="bg-gray-100">
    <div class="mx-auto">
      <div id="swiper-container" class="swiper-container relative h-screen w-screen overflow-hidden">
        <div class="absolute w-1/3 ml-10 top-1/2 transform -translate-y-1/2 z-10">
          <h1 
            class="text-4xl sm:text-6xl md:text-8xl text-white text-center p-4" 
            style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);"
          >
            Unlock a World of Emotions with Us
          </h1>
        </div>
  
        <div class="swiper-wrapper">
          <div class="swiper-slide flex items-center justify-center text-center text-xl">
            <img
              src="images/main_slider/mountains.jpg"
              alt="Slide 1" 
              class="w-full h-full object-cover">
          </div>
  
          <div class="swiper-slide flex items-center justify-center text-center text-xl">
            <img 
              src="images/main_slider/skuba_daiving.jpg"
              alt="Slide 2" 
              class="w-full h-full object-cover">
          </div>
  
          <div class="swiper-slide flex items-center justify-center text-center text-xl">
            <img 
              src="images/main_slider/ballon.jpg"
              alt="Slide 3"
              class="w-full h-full object-cover">
          </div>
        </div>
  
        <div class="swiper-pagination"></div>
        
        <div class="swiper-button-next text-gray-900" style="text-shadow: 0 0 2px rgba(255, 254, 252, 1);"></div>
        <div class="swiper-button-prev text-gray-900" style="text-shadow: 0 0 2px rgba(255, 254, 252, 1);"></div>
      </div>      
    </div>
  </section>
  
  <section class="py-12">
    <div id="about" class="container mx-auto px-4 h-full my-4 md:my-12 lg:my-24">
      <div class="flex flex-col md:flex-row gap-8">
        <div class="md:w-2/5">
          <img 
            src="images/lets_go.gif" 
            alt="About Image" 
            class="w-full object-cover rounded-lg md:rounded-none md:rounded-l-lg h-full"
          >
        </div>
  
        <div class="flex flex-col md:w-3/5">
          <h2 class="text-4xl font-bold mb-6">
            About Us
          </h2>
  
          <p class="text-lg text-center text-justify">
            Welcome to Wanderlust Adventures, your gateway to unforgettable travel experiences. We are passionate about creating extraordinary journeys and helping you explore the world in style.
          </p>
  
          <p class="text-lg mt-8 text-center text-justify">
            At Wanderlust Adventures, we believe that travel is not just about visiting new places, but about immersing yourself in different cultures, discovering hidden gems, and creating lifelong memories.
          </p>
  
          <p class="text-lg mt-8 text-center text-justify">
            Our team of experienced travel enthusiasts is dedicated to curating exceptional itineraries tailored to your preferences. Whether you're seeking adventure, relaxation, or cultural encounters, we've got you covered.
          </p>
  
          <p class="text-lg mt-8 text-center text-justify">
            Join us on a journey of discovery and let us take care of every detail, from flights and accommodations to local guides and unique activities. Your dream vacation starts here with Wanderlust Adventures.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-blue-50 py-12">
    <div id="products" class="container mx-auto px-4 my-4 md:my-12 lg:my-18">
      <h2 class="text-4xl font-bold mb-6">
        Our products
      </h2>

      <div class="flex flex-col gap-6">
      <!-- use the reverse props to use conditional rendering to display the component -->
        <x-product-box
          id="product-1"
          title="Family Vacation"
          image="images/products/family.jpeg"
        >
          Experience unforgettable moments with your family. Discover classic destinations that offer something for everyone. From relaxing beach getaways to exciting theme park adventures, our family vacations cater to all ages and interests. Create lifelong memories and strengthen your family bond with our carefully crafted itineraries.
        </x-product-box>
        
        <hr />

        <x-product-box
          id="product-2"
          title="Kids Trip"
          image="images/products/kid.jpeg"
          reverse="true"
        >
          Create amazing memories for your children. Our kids trips are designed to provide a perfect balance of education, entertainment, and exploration. From interactive museum visits to outdoor adventures, we offer a wide range of activities that will keep your kids engaged and excited. Our expert guides ensure a safe and enjoyable experience, making every moment of the trip unforgettable for your little ones.
        </x-product-box>
        
        <hr />

        <x-product-box
          id="product-3"
          title="Exotic Tour"
          image="images/products/exotic.jpeg"
        >
          Embark on a journey of discovery to exotic destinations. Immerse yourself in the vibrant cultures, breathtaking landscapes, and rich histories of these extraordinary places. Our exotic tours take you off the beaten path, allowing you to experience hidden gems and connect with local communities. Whether you dream of exploring ancient temples, trekking through lush jungles, or savoring exotic cuisine, our expertly curated itineraries ensure an immersive and unforgettable adventure.
        </x-product-box>
  
        <hr />

        <x-product-box
          id="product-4"
          title="Customized Tour"
          image="images/products/customize.jpeg"
          reverse="true"
        >
          Create your own personalized travel experience. Our customized tours offer the flexibility to design every aspect of your journey according to your preferences and interests. From selecting your destinations and activities to choosing accommodation and transportation options, we provide expert guidance and support at every step. Whether you desire a romantic getaway, an adventurous expedition, or a cultural immersion, our team of travel specialists will curate a unique itinerary tailored to your individual needs, ensuring an unforgettable and truly personalized travel experience.
        </x-product-box>
      </div>
    </div>
  </section>

  <section class="py-12">
    <div id="features" class="container mx-auto px-4 my-4 md:my-12 lg:my-18">
      <h2 class="text-4xl font-bold mb-6">
        Our Features
      </h2>

      <p class="mb-4 lg:mb-8 text-justify">
        Tourist agency Wanderlust Adventures is your reliable partner in the world of travel. We offer a wide range of services and provide unforgettable tourist experiences to our clients. Take a look at the advantages of Wanderlust Adventures.
      </p>

      <div class="flex flex-col md:flex-row gap-6 mb-4 lg:mb-8">
        <x-feature-box
          title="Individual Approach"
          svgPath="M320-480v80q0 66 47 113t113 47q66 0 113-47t47-113v-80H320Zm160 180q-42 0-71-29t-29-71v-20h200v20q0 42-29 71t-71 29ZM340-680q-38 0-67.5 27.5T231-577l58 14q6-26 20-41.5t31-15.5q17 0 31 15.5t20 41.5l58-14q-12-48-41.5-75.5T340-680Zm280 0q-38 0-67.5 27.5T511-577l58 14q6-26 20-41.5t31-15.5q17 0 31 15.5t20 41.5l58-14q-12-48-41.5-75.5T620-680ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-400Zm0 340q142.375 0 241.188-98.812Q820-337.625 820-480t-98.812-241.188Q622.375-820 480-820t-241.188 98.812Q140-622.375 140-480t98.812 241.188Q337.625-140 480-140Z"
        >
          We understand that each client has unique needs and preferences. Therefore, we create tours that fully cater to your requirements and preferences.
          <br />
          Our experts are ready to listen to your wishes and recommend the best options to make your journey unforgettable.
        </x-feature-box>

        <x-feature-box
          title="Professionalism and Experience"
          svgPath="m346-60-76-130-151-31 17-147-96-112 96-111-17-147 151-31 76-131 134 62 134-62 77 131 150 31-17 147 96 111-96 112 17 147-150 31-77 130-134-62-134 62Zm27-79 107-45 110 45 67-100 117-30-12-119 81-92-81-94 12-119-117-28-69-100-108 45-110-45-67 100-117 28 12 119-81 94 81 92-12 121 117 28 70 100Zm107-341Zm-43 133 227-225-45-41-182 180-95-99-46 45 141 140Z"
        >
          We have years of experience in the tourism and travel industry, enabling us to provide you with high-quality service and expert consultation.
          <br />
          Our experts are constantly in touch with global tourism trends and the latest developments to provide you with the most up-to-date information.
        </x-feature-box>

        <x-feature-box
          title="Wide Selection of Tourist Offerings"
          svgPath="M458-81q-79-4-148-37t-120-86.5q-51-53.5-80.5-124.269Q80-399.537 80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q149 0 259 94t135 236h-61q-17-84-71-150t-135-99v18q0 35-24 61t-59 26h-87v87q0 16.575-13.5 27.787Q410-568 393-568h-83v88h110v125h-67L149-559q-5 20-7 39.667-2 19.666-2 39.333 0 135 91 233t227 106v60Zm392-26L716-241q-21 15-45.5 23t-50.065 8q-71.015 0-120.725-49.618Q450-309.235 450-380.118 450-451 499.618-500.5q49.617-49.5 120.5-49.5Q691-550 740.5-500.29T790-379.565q0 25.565-8.5 50.065Q773-305 759-283l134 133-43 43ZM619.859-270Q666-270 698-301.859q32-31.859 32-78T698.141-458q-31.859-32-78-32T542-458.141q-32 31.859-32 78T541.859-302q31.859 32 78 32Z"
        >
          We offer a vast selection of tours from various countries and regions around the world. You can choose from stunning beach vacations, exciting excursions, cultural routes, adventurous hikes, and much more.
          <br />
          Regardless of your budget and preferences, we will find the optimal tour option for you, so you can enjoy every moment of your journey.
        </x-feature-box>
      </div>

      <p class="text-justify">
        Travel is our passion, and we strive to make each of your journeys unforgettable and memorable. Choose Wanderlust Adventures and give us the opportunity to provide you with the best travel experiences!
      </p>
    </div>
  </section>

  <section class="bg-blue-50 py-12 w-screen overflow-hidden">
    <div id="testimonials" class="container mx-auto my-4 md:my-12 lg:my-18 p-4">
      <h2 class="text-4xl font-bold mb-6">
        Testimonials
      </h2>

      <div class="testimonial-carousel relative flex justify-center items-stretch">
        <div class="swiper-container testimonial-swiper w-full overflow-hidden">
          <div id="testimonials-container" class="swiper-wrapper flex"></div>
        </div>


        <div class="swiper-testimonial-button-next absolute top-1/2 -right-5 z-10 cursor-pointer bg-gray-100 rounded-2xl border hidden md:block">
          <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48">
            <path d="m561-242-43-42 168-168H160v-60h526L517-681l43-42 241 241-240 240Z"/>
          </svg>
        </div>

        <div class="swiper-testimonial-button-prev absolute top-1/2 -left-5 z-10 cursor-pointer bg-gray-100 rounded-2xl border hidden md:block">
          <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48">
            <path d="M359-242 120-481l239-239 43 43-166 166h604v60H236l166 166-43 43Z"/>
          </svg>
        </div>
      </div>
    </div>
  </section>

  <section class="py-12">
    <div id="pricing" class="container mx-auto my-4 md:my-12 lg:my-18 px-4">
      <h2 class="text-4xl font-bold mb-6">Our Prices</h2>

      <div class="grid lg:grid-cols-3 gap-6">
        <!-- All the necessary data, which will differ for different packages - in the props -->
        <!-- Did not use $slot, as it was in task, because we had a list in which the elements are also repeated, so I passed it as 'items'[] -->
        <!-- Since the prices are given here - the button directs to the contact form so that the person can order immediately. 
        The call to action that leads to this block with prices - "Our products" -->

        <x-pricing-box
          packageName="Family Vacation"
          price="800"
          svgPath="M794-128 531-391l46-46 263 263-46 46Zm-570-46q-53-58-78.5-128.5T120-446q0-78 29-152t88-133q59-59 133.5-88T523-848q73 0 143.5 25.5T794-744L224-174Zm3-89 69-70q-16-22-32-47.5t-29.5-54Q221-463 212-493.5T200-556q-27 74-18.5 151T227-263Zm117-115 246-248q-46-36-93.5-56.5t-90.5-27q-43-6.5-76.5 0T278-685q-18 18-23 51.5t2.5 75q7.5 41.5 29 88T344-378Zm291-294 72-69q-66-42-143.5-49T412-768q30 3 59.5 12t58 21.5q28.5 12.5 55 28.5t50.5 34Z"
          :items="[
              'Classic destinations for all ages and interests',
              'Relaxing beach getaways',
              'Exciting theme park adventures',
              'Fun-filled water park experiences',
              'Educational and cultural tours',
              'Outdoor adventures and nature exploration',
              'All-inclusive family resorts with activities for everyone',
              'Family-friendly cruises and cruise ship vacations',
              'Wildlife encounters and safaris'
          ]"
        />

        <x-pricing-box
          packageName="Exotic Tour"
          price="600"
          svgPath="M341-67q-48 0-85-28.5T204-169q-16 26-39 40.5T110-114q-47 0-78-33T1-225q0-49 30.5-77.5T109-332q-18-20-28-46.5T71-432q0-38 19.5-71t55.5-53q5 13 12.5 28t15.5 26q-20 13-31.5 32T131-430q0 60 48.5 75.5T273-330l11 19q-12 35-19.5 57.5T257-212q0 34 25.5 59.5T342-127q41 0 67.5-34.5t43-82q16.5-47.5 25.5-96t15-75.5l58 16q-9 43-21 100t-34.5 108.5Q473-139 436.5-103T341-67ZM111-174q21 0 35.5-14.5T161-224q0-21-14.5-35.5T111-274q-21 0-35.5 14.5T61-224q0 21 14.5 35.5T111-174Zm300-190q-45-40-82-74.5T265.5-506q-26.5-33-41-65T210-639q0-60 42-102t102-42q9 0 17 .5t16 2.5q-9-17-13-29t-4-24q0-46 32-78t78-32q46 0 78 32t32 78q0 11-3.5 23.5T573-780q8-2 16-2.5t17-.5q57 0 96.5 36.5T748-656q-14-1-30-.5t-30 2.5q-5-30-27-49.5T606-723q-37 0-58.5 20.5T490-640h-21q-37-44-58.5-63.5T354-723q-36 0-60 24t-24 60q0 24 13 49t37 53.5q24 28.5 58 60t76 69.5l-43 43Zm69-419q21 0 35.5-14.5T530-833q0-21-14.5-35.5T480-883q-21 0-35.5 14.5T430-833q0 21 14.5 35.5T480-783ZM618-66q-22 0-43.5-7T533-94q8-12 16-27t13-28q14 11 28.5 16.5T620-127q35 0 59.5-25.5T704-212q0-20-8-42.5T677-311l11-19q46-8 94-23.5t48-75.5q0-44-32-65.5T727-516q-42 0-99.5 16T494-459l-15-58q76-25 137-42t111-17q64 0 113.5 38.5T890-430q0 27-10 53t-28 46q46 1 77 30t31 77q0 45-31 78t-78 33q-31 0-55-14.5T757-168q-16 45-53 73.5T618-66Zm233-107q20 0 34.5-14.5T900-223q0-20-15-35.5T850-274q-20 0-35 15t-15 35q0 20 15.5 35.5T851-173Zm-740-51Zm369-609Zm370 609Z"
          :items="[
            'Journey of discovery to vibrant cultures and breathtaking landscapes',
            'Off the beaten path experiences',
            'Connecting with local communities',
            'Immersive culinary adventures',
            'UNESCO World Heritage site explorations',
            'Luxury accommodations with unique cultural experiences',
            'Spiritual and wellness retreats in tranquil settings',
            'Outdoor activities like hiking, diving, and snorkeling in breathtaking environments'
          ]"
        />

        <x-pricing-box
          packageName="Kids Trip"
          price="400"
          svgPath="M276-160q-45 0-79.5-33.5T159-275q-37-23-57.5-58.432T81-411q0-52 30.5-93.5T192-557l-81-85-19 20q-9 10-21.5 10T49-621.5q-9-9.5-9-21.5t9-22l81-84q9-9 21.5-9t21.5 9.5q9 9.5 9 21.5t-9 21l-19 21 72 77 39-117q11-33 38.485-54 27.486-21 61.515-21h232q34.412 0 62.206 21Q687-758 697-725l50 166q57 5 95 46.5T880-411q0 42.136-20.5 77.568Q839-298 802-275q-3 48-37.5 81.5T685-160q-42 0-73.5-29T572-260H389q-8 42-39.5 71T276-160Zm-2-401h175v-179h-84q-14.576 0-25.788 9.5T323-707l-49 146Zm235 0h175l-44.898-145.655Q634-721 622.788-730.5 611.576-740 597-740h-88v179ZM389-320h183q11-36 43-58t70-22q32 0 59 17t44 44q17-13 24.5-32.427T820-411q0-38-26-64t-64-26H231q-38 0-64 26t-26 64q0 20.146 8 39.573T173-339q16-29 43.585-45 27.586-16 59.415-16 38 0 70 22t43 58ZM276-220q25.5 0 42.75-17.25T336-280q0-25.5-17.25-42.75T276-340q-25.5 0-42.75 17.25T216-280q0 25.5 17.25 42.75T276-220Zm409 0q25.5 0 42.75-17.25T745-280q0-25.5-17.25-42.75T685-340q-25.5 0-42.75 17.25T625-280q0 25.5 17.25 42.75T685-220ZM481-411Z"
          :items="[
            'Education, entertainment, and exploration for children',
            'Interactive museum visits',
            'Outdoor adventures',
            'Animal encounters and zoo visits',
            'Theme park experiences tailored for kids',
            'Fun and educational workshops and classes',
            'Cultural and historical tours with kid-friendly activities',
            'Water parks and swimming activities',
            'Sports camps and activities for active kids',
            'Outdoor picnics and nature walks'
          ]"
        />
      </div>
    </div>
  </section>
  
  <section class="bg-blue-50 py-12">
    <div id="contact" class="container my-4 md:my-12 lg:mt-18 mx-auto px-4 flex flex-col md:flex-row">
      <div class="w-full md:w-1/2">
        <h2 class="text-4xl font-bold mb-6">
          Contact us
        </h2>
        
        <form id="contact-form" class="max-w-lg mr-8" action="{{ route('store') }}" method="POST">
        @csrf
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
              Name
            </label>
            <input
              class="shadow appearance-none border rounded w-full p-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:ring-2 focus:ring-yellow-500" 
              id="name" 
              name="name"
              type="text"
              placeholder="Enter your name"
              required
            >
          </div>
  
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
              Email
            </label>
            <input 
              class="shadow appearance-none border rounded w-full p-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:ring-2 focus:ring-yellow-500" 
              id="email"
              name="email"
              type="email"
              placeholder="Enter your email"
              required
            >
          </div>
  
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">
              Phone
            </label>
            <input
              class="shadow appearance-none border rounded w-full p-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:ring-2 focus:ring-yellow-500" 
              id="phone"
              name="phone"
              type="text"
              placeholder="Enter your phone number"
              required
            >
          </div>
  
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="message">
              Message
            </label>
            <textarea
              class="shadow appearance-none border rounded w-full p-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:ring-2 focus:ring-yellow-500" 
              id="message"
              name="message"
              placeholder="Enter your message"
              required
            ></textarea>
          </div>
  
          <div class="mb-4 flex items-center">
            <label class="flex items-center">
              <input type="checkbox" class="form-checkbox" required>
              <span class="ml-2 text-gray-700">
                I agree to the terms and conditions
              </span>
            </label>
          </div>
  
          <div class="flex items-center justify-start">
            <button 
              id="submit-btn"
              class="bg-yellow-500 hover:bg-yellow-400 text-white font-bold py-2 px-4 mr-4 rounded focus:outline-none focus:shadow-outlin transition duration-300"
              type="submit"
            >
              Send
            </button>
            <div id="message-container"></div>
          </div>
        </form>
      </div>

      <div class="w-full md:w-1/2 mt-6 md:mt-0">
        <img
          src="images/mountain.jpeg"
          alt="contacts"
          class="h-full w-full object-cover rounded-xl"
        >
      </div>
    </div>
  </section>

  <section id="social-media" class="py-12">
    <div id="social" class="container my-4 md:my-12 lg:mt-18 mx-auto px-4 flex flex-col md:flex-row items-center">
      <h2 class="md:w-1/2 text-4xl font-bold mb-6 md:mb-0">
        Join us in our social media:
      </h2>

      <ul class="md:w-1/2 flex justify-end items-center">
        <li class="w-1/4 px-2 flex justify-center">
          <a
            class="social-link flex md:w-3/4"
            data-target="bgc-1"
            href="https://www.facebook.com/"
            target="_blank"
          >
            <svg class="self-center" width="100%" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;" version="1.1" viewBox="0 0 512 512" width="100%" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:serif="http://www.serif.com/" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M449.446,0c34.525,0 62.554,28.03 62.554,62.554l0,386.892c0,34.524 -28.03,62.554 -62.554,62.554l-106.468,0l0,-192.915l66.6,0l12.672,-82.621l-79.272,0l0,-53.617c0,-22.603 11.073,-44.636 46.58,-44.636l36.042,0l0,-70.34c0,0 -32.71,-5.582 -63.982,-5.582c-65.288,0 -107.96,39.569 -107.96,111.204l0,62.971l-72.573,0l0,82.621l72.573,0l0,192.915l-191.104,0c-34.524,0 -62.554,-28.03 -62.554,-62.554l0,-386.892c0,-34.524 28.029,-62.554 62.554,-62.554l386.892,0Z"/></svg>
          </a>
        </li>
  
        <li class="w-1/4 px-2 flex justify-center">
          <a
            class="social-link flex md:w-3/4"
            data-target="bgc-2"
            href="https://www.instagram.com/"
            target="_blank"
          >
            <svg class="self-center" width="100%" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;" version="1.1" viewBox="0 0 512 512" width="100%" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:serif="http://www.serif.com/" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M449.446,0c34.525,0 62.554,28.03 62.554,62.554l0,386.892c0,34.524 -28.03,62.554 -62.554,62.554l-386.892,0c-34.524,0 -62.554,-28.03 -62.554,-62.554l0,-386.892c0,-34.524 28.029,-62.554 62.554,-62.554l386.892,0Zm-193.446,81c-47.527,0 -53.487,0.201 -72.152,1.053c-18.627,0.85 -31.348,3.808 -42.48,8.135c-11.508,4.472 -21.267,10.456 -30.996,20.184c-9.729,9.729 -15.713,19.489 -20.185,30.996c-4.326,11.132 -7.284,23.853 -8.135,42.48c-0.851,18.665 -1.052,24.625 -1.052,72.152c0,47.527 0.201,53.487 1.052,72.152c0.851,18.627 3.809,31.348 8.135,42.48c4.472,11.507 10.456,21.267 20.185,30.996c9.729,9.729 19.488,15.713 30.996,20.185c11.132,4.326 23.853,7.284 42.48,8.134c18.665,0.852 24.625,1.053 72.152,1.053c47.527,0 53.487,-0.201 72.152,-1.053c18.627,-0.85 31.348,-3.808 42.48,-8.134c11.507,-4.472 21.267,-10.456 30.996,-20.185c9.729,-9.729 15.713,-19.489 20.185,-30.996c4.326,-11.132 7.284,-23.853 8.134,-42.48c0.852,-18.665 1.053,-24.625 1.053,-72.152c0,-47.527 -0.201,-53.487 -1.053,-72.152c-0.85,-18.627 -3.808,-31.348 -8.134,-42.48c-4.472,-11.507 -10.456,-21.267 -20.185,-30.996c-9.729,-9.728 -19.489,-15.712 -30.996,-20.184c-11.132,-4.327 -23.853,-7.285 -42.48,-8.135c-18.665,-0.852 -24.625,-1.053 -72.152,-1.053Zm0,31.532c46.727,0 52.262,0.178 70.715,1.02c17.062,0.779 26.328,3.63 32.495,6.025c8.169,3.175 13.998,6.968 20.122,13.091c6.124,6.124 9.916,11.954 13.091,20.122c2.396,6.167 5.247,15.433 6.025,32.495c0.842,18.453 1.021,23.988 1.021,70.715c0,46.727 -0.179,52.262 -1.021,70.715c-0.778,17.062 -3.629,26.328 -6.025,32.495c-3.175,8.169 -6.967,13.998 -13.091,20.122c-6.124,6.124 -11.953,9.916 -20.122,13.091c-6.167,2.396 -15.433,5.247 -32.495,6.025c-18.45,0.842 -23.985,1.021 -70.715,1.021c-46.73,0 -52.264,-0.179 -70.715,-1.021c-17.062,-0.778 -26.328,-3.629 -32.495,-6.025c-8.169,-3.175 -13.998,-6.967 -20.122,-13.091c-6.124,-6.124 -9.917,-11.953 -13.091,-20.122c-2.396,-6.167 -5.247,-15.433 -6.026,-32.495c-0.842,-18.453 -1.02,-23.988 -1.02,-70.715c0,-46.727 0.178,-52.262 1.02,-70.715c0.779,-17.062 3.63,-26.328 6.026,-32.495c3.174,-8.168 6.967,-13.998 13.091,-20.122c6.124,-6.123 11.953,-9.916 20.122,-13.091c6.167,-2.395 15.433,-5.246 32.495,-6.025c18.453,-0.842 23.988,-1.02 70.715,-1.02Zm0,53.603c-49.631,0 -89.865,40.234 -89.865,89.865c0,49.631 40.234,89.865 89.865,89.865c49.631,0 89.865,-40.234 89.865,-89.865c0,-49.631 -40.234,-89.865 -89.865,-89.865Zm0,148.198c-32.217,0 -58.333,-26.116 -58.333,-58.333c0,-32.217 26.116,-58.333 58.333,-58.333c32.217,0 58.333,26.116 58.333,58.333c0,32.217 -26.116,58.333 -58.333,58.333Zm114.416,-151.748c0,11.598 -9.403,20.999 -21.001,20.999c-11.597,0 -20.999,-9.401 -20.999,-20.999c0,-11.598 9.402,-21 20.999,-21c11.598,0 21.001,9.402 21.001,21Z"/></svg>
          </a>
        </li>
  
        <li class="w-1/4 px-2 flex justify-center">
          <a
            class="social-link flex md:w-3/4"
            data-target="bgc-3"
            href="https://www.youtube.com/"
            target="_blank"
          >
            <svg class="self-center" width="100%" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;" version="1.1" viewBox="0 0 512 512" width="100%" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:serif="http://www.serif.com/" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M449.446,0c34.525,0 62.554,28.03 62.554,62.554l0,386.892c0,34.524 -28.03,62.554 -62.554,62.554l-386.892,0c-34.524,0 -62.554,-28.03 -62.554,-62.554l0,-386.892c0,-34.524 28.029,-62.554 62.554,-62.554l386.892,0Zm-20.967,175.63c-4.139,-15.489 -16.337,-27.687 -31.826,-31.826c-28.078,-7.524 -140.653,-7.524 -140.653,-7.524c0,0 -112.575,0 -140.653,7.524c-15.486,4.139 -27.686,16.337 -31.826,31.826c-7.521,28.075 -7.521,86.652 -7.521,86.652c0,0 0,58.576 7.521,86.648c4.14,15.489 16.34,27.69 31.826,31.829c28.078,7.521 140.653,7.521 140.653,7.521c0,0 112.575,0 140.653,-7.521c15.489,-4.139 27.687,-16.34 31.826,-31.829c7.521,-28.072 7.521,-86.648 7.521,-86.648c0,0 0,-58.577 -7.521,-86.652Zm-208.481,140.653l0,-108.002l93.53,54.001l-93.53,54.001Z"/></svg>
          </a>
        </li>
  
        <li class="w-1/4 px-2 flex justify-center">
          <a
            class="social-link flex md:w-3/4"
            data-target="bgc-4"
            href="https://twitter.com/"
            target="_blank"
          >
            <svg class="self-center" width="100%" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;" version="1.1" viewBox="0 0 512 512" width="100%" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:serif="http://www.serif.com/" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M449.446,0c34.525,0 62.554,28.03 62.554,62.554l0,386.892c0,34.524 -28.03,62.554 -62.554,62.554l-386.892,0c-34.524,0 -62.554,-28.03 -62.554,-62.554l0,-386.892c0,-34.524 28.029,-62.554 62.554,-62.554l386.892,0Zm-253.927,424.544c135.939,0 210.268,-112.643 210.268,-210.268c0,-3.218 0,-6.437 -0.153,-9.502c14.406,-10.421 26.973,-23.448 36.935,-38.314c-13.18,5.824 -27.433,9.809 -42.452,11.648c15.326,-9.196 26.973,-23.602 32.49,-40.92c-14.252,8.429 -30.038,14.56 -46.896,17.931c-13.487,-14.406 -32.644,-23.295 -53.946,-23.295c-40.767,0 -73.87,33.104 -73.87,73.87c0,5.824 0.613,11.494 1.992,16.858c-61.456,-3.065 -115.862,-32.49 -152.337,-77.241c-6.284,10.881 -9.962,23.601 -9.962,37.088c0,25.594 13.027,48.276 32.95,61.456c-12.107,-0.307 -23.448,-3.678 -33.41,-9.196l0,0.92c0,35.862 25.441,65.594 59.311,72.49c-6.13,1.686 -12.72,2.606 -19.464,2.606c-4.751,0 -9.348,-0.46 -13.946,-1.38c9.349,29.426 36.628,50.728 68.965,51.341c-25.287,19.771 -57.164,31.571 -91.8,31.571c-5.977,0 -11.801,-0.306 -17.625,-1.073c32.337,21.15 71.264,33.41 112.95,33.41Z"/></svg>
          </a>
        </li>
      </ul>
    </div>
  </section>
  
  <footer class="bg-gray-800 text-white">
    <div class="container mx-auto py-8 px-4">
      <div class="flex flex-wrap justify-between items-center">
        <div class="w-full md:w-1/6 mb-4 md:mb-8">
          <a href="#" class="w-full flex justify-center md:justify-start">
            <img src="images/logo.png" alt="logo" class="h-16 mx-auto">
          </a>
        </div>
      
        <div class="md:w-5/6 lg:w-1/2 lg:pr-16 mb-8">
          <ul class="list-none flex flex-wrap justify-center gap-4 lg:gap-10 lg:self-baseline">
            <li>
              <a href="#contact" class="hover:text-yellow-300 transition duration-300">
                FAQ
              </a>
            </li>
      
            <li>
              <a href="#contact" class="hover:text-yellow-300 transition duration-300">
                Cookies
              </a>
            </li>
      
            <li>
              <a href="#contact" class="hover:text-yellow-300 transition duration-300">
                Privacy Policy
              </a>
            </li>
      
            <li>
              <a href="#contact" class="hover:text-yellow-300 transition duration-300">
                Terms and Conditions
              </a>
            </li>
          </ul>
        </div>
      
        <div class="w-full lg:w-1/3 lg:pr-16 mb-8 mt-4 md:mt-0 lg:self-baseline">
          <p class="mb-4">
            Stay updated on the latest adventures!
          </p>
      
          <form id="subscribeForm" class="flex flex-col md:flex-row width-full">
            <input 
              id="emailInput"
              type="text"
              placeholder="Enter your email"
              class="px-4 py-2 md:rounded-l-lg mb-2 md:mb-0 md:mr-2 flex-1 text-black focus:outline-none focus:ring-2 focus:ring-yellow-500"
              required
              pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
            >
            <button 
              type="submit"
              class="bg-yellow-500 hover:bg-yellow-400 text-white px-4 py-2 md:rounded-r-lg transition-colors duration-300"
              onclick="submitForm(event)"
            >
              Subscribe
            </button>
          </form>

          <p id="errorMessage" class="hidden mt-4 text-red-300 text-center"></p>
          <p id="successMessage" class="hidden mt-4 text-green-300 text-center">Success</p>
        </div>
      </div>
      

      <div class="mt-4 md:mt-8 text-center text-sm text-gray-400">
        <p>
          &copy; 2023 Wanderlust Adventures - Tourism Agency. All rights reserved.
        </p>
      </div>
    </div>
  </footer>


  <!-- Script for Swiper slider -->
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
        slidesPerView: 1,
        spaceBetween: 0,
        loop: true,
        breakpoints: {
          992: {
            slidesPerView: 5,
            spaceBetween: 10,
          },
        },
      });
    });
  </script>

  <!-- Testimonials - AJAX request & displaying -->
  <script>
    function testimonials() {
      return new Promise(function(resolve, reject) {
        let xhr = new XMLHttpRequest();

        var url = 'http://127.0.0.1:8000/testimoniale';
        xhr.open("GET", url, true);

        xhr.onreadystatechange = function () {
          if (this.readyState == 4) {
            if (this.status == 200) {
              var response = JSON.parse(this.responseText);
              resolve(response);
            } else {
              reject(this.status);
            }
          }
        };

        xhr.send();
      });
    }

    testimonials()
      .then(function(response) {
        console.log(response);
        displayTestimonials(response);
      })
      .catch(function(error) {
        console.error('Error:', error);
      });

    function displayTestimonials(testimonials) {
      var container = document.getElementById('testimonials-container');

      testimonials.forEach(function(testimonial) {
        var testimonialElement = createTestimonialElement(testimonial);
        container.appendChild(testimonialElement);
      });
    }

    function createTestimonialElement(testimonial) {
      var testimonialSlide = document.createElement('div');
      testimonialSlide.className = 'swiper-slide bg-white flex text-lg rounded-2xl';

      var testimonialContent = document.createElement('div');
      testimonialContent.className = 'testimonial-slide w-full p-8 overflow-hidden object-contain';

      var image = document.createElement('img');
      image.className = 'w-1/2 md:w-1/3 lg:w-2/3 mx-auto mb-8 rounded-full';
      image.src = testimonial.imagine;
      image.alt = testimonial.nume;

      var name = document.createElement('h3');
      name.className = 'italic mb-4 text-center';
      name.textContent = testimonial.nume;

      var rating = document.createElement('p');
      rating.className = 'mb-4 text-sm text-gray-400';
      rating.textContent = 'Rating: ' + testimonial.rating;

      var quote = document.createElement('p');
      quote.textContent = testimonial.text;

      testimonialContent.appendChild(image);
      testimonialContent.appendChild(name);
      testimonialContent.appendChild(rating);
      testimonialContent.appendChild(quote);
      testimonialSlide.appendChild(testimonialContent);

      return testimonialSlide;
    }
  </script>

  <!-- Menu sublist  -->
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var dropdown = document.querySelector('.group');
      var dropdownMenu = document.querySelector('.group ul');

      dropdown.addEventListener('mouseenter', function () {
        dropdownMenu.classList.remove('hidden');
      });

      dropdown.addEventListener('mouseleave', function () {
        dropdownMenu.classList.add('hidden');
      });
    });
  </script>

  <!-- Link scrolling to sections -->
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var menuLinks = document.querySelectorAll('a');

      menuLinks.forEach(function (link) {
        link.addEventListener('click', function (event) {
          event.preventDefault();

          var targetId = link.getAttribute('href');
          var targetElement = document.querySelector(targetId);

          if (targetElement) {
            var offsetTop = targetElement.offsetTop - 100;
            window.scrollTo({ top: offsetTop, behavior: 'smooth' });
          }
        });
      });
    });
  </script>

  <!-- Script for Contact us -->
  <script>
    document.getElementById('contact-form').addEventListener('submit', function (event) {
      event.preventDefault();

      var form = event.target;
      var formData = new FormData(form);

      fetch(form.action, {
        method: 'POST',
        body: formData
      })
      .then(function (response) {
        if (response.ok) {
          return response.json();
        } else if (response.status === 422) {
          return response.json().then(function (data) {
            throw new Error(JSON.stringify(data.errors));
          });
        } else {
          throw new Error('Error in sending');
        }
      })
      .then(function (data) {
        var messageContainer = document.getElementById('message-container');
        messageContainer.textContent = data.message;
        messageContainer.style.color = 'green';

        form.reset();

        setTimeout(function () {
          messageContainer.textContent = '';
          messageContainer.style.color = '';
        }, 3000);
      })
      .catch(function (error) {
        console.error(error.message);
        document.getElementById('message-container').textContent = 'Error: ' + error.message;
      });
    });
  </script>
  
  <!-- Subscribe button -->
  <script>
    function submitForm(event) {
      event.preventDefault();
  
      var emailInput = document.getElementById("emailInput");
      var errorMessage = document.getElementById("errorMessage");
      var successMessage = document.getElementById("successMessage");
  
      if (emailInput.checkValidity()) {
        emailInput.value = "";
        errorMessage.classList.add("hidden");
        successMessage.classList.remove("hidden");
        setTimeout(function() {
          successMessage.classList.add("hidden");
        }, 3000);
      } else {
        errorMessage.textContent = "Please enter a valid email address.";
        errorMessage.classList.remove("hidden");
        setTimeout(function() {
          errorMessage.classList.add("hidden");
        }, 3000);
      }
    }
  </script>

  <!-- Social -->
  <script>
    const social = document.getElementById('social-media');
    const links = document.querySelectorAll('.social-link');

    links.forEach(function(link) {
      link.addEventListener('mouseover', function() {
        const targetClass = link.getAttribute('data-target');
        social.classList.add(targetClass);
        links.forEach(function(otherLink) {
          if (otherLink !== link) {
            otherLink.classList.add('opacity-25');
          }
        });
      });

      link.addEventListener('mouseout', function() {
        const targetClass = link.getAttribute('data-target');
        social.classList.remove(targetClass);
        links.forEach(function(otherLink) {
          if (otherLink !== link) {
            otherLink.classList.remove('opacity-25');
          }
        });
      });
    });
  </script>
</body>
</html>
