<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    Wanderlust Adventures - Tourism Agency
  </title>

  <link rel="icon" type="image/png" href="images/logo.png" sizes="32x32">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Pacifico&display=swap" rel="stylesheet">

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
  </style>
</head>

<body>
  <header class="bg-gray-900 bg-opacity-95 fixed top-0 w-full z-20">
    <div class="container mx-auto p-4 flex items-center justify-between">
      <nav class="flex place-content-between w-full items-center">
        <a href="#" class="mr-6">
          <img src="images/logo.png" alt="logo" class="h-12">
        </a>

        <ul class="flex flex-col md:flex-row text-right">
          <li>
            <a href="#about" class="text-white ml-4 md:pr-8 hover:text-yellow-300 transition duration-300">
              About Us
            </a>
          </li>
          <li>
            <a href="#products" class="text-white ml-4 md:pr-8 hover:text-yellow-300 transition duration-300">
              Our Products
            </a>
          </li>
          <li>
            <a href="#testimonials" class="text-white ml-4 md:pr-8 hover:text-yellow-300 transition duration-300">
              Testimonials
            </a>
          </li>
          <li>
            <a href="#pricing" class="text-white ml-4 md:pr-8 hover:text-yellow-300 transition duration-300">
              Pricing
            </a>
          </li>
          <li>
            <a href="#contact" class="text-white ml-4 hover:text-yellow-300 transition duration-300">
              Contact
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
  
  <section id="about" class="py-12">
    <div class="container mx-auto px-4 h-full my-4 md:my-12 lg:my-24">
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

  <section id="products" class="bg-blue-50 py-12">
    <div class="container mx-auto px-4 my-4 md:my-12 lg:my-18">
      <h2 class="text-4xl font-bold mb-6">
        Our products
      </h2>

      <div class="grid grid-cols-1 gap-6">
        <!-- Product 1: Family Vacations -->
        <div class="flex flex-col md:flex-row items-stretch">
          <div class="mb-4 md:w-1/3 md:mr-8">
            <a href="#contact">
              <img 
                src="images/products/family.jpeg"
                alt="Family Vacation" 
                class="w-full rounded-lg h-full object-cover"
              >
            </a>
          </div>

          <div class="md:w-2/3">
            <h3 class="text-xl font-bold mb-2">
              Family Vacations
            </h3>

            <p class="text-gray-700 mb-4 text-justify">
              Experience unforgettable moments with your family. Discover classic destinations that offer something for everyone. From relaxing beach getaways to exciting theme park adventures, our family vacations cater to all ages and interests. Create lifelong memories and strengthen your family bond with our carefully crafted itineraries.
            </p>

            <a href="#price" class="bg-yellow-500 text-white py-2 px-4 rounded hover:bg-yellow-400 transition duration-300">
              I Want This!
            </a>
          </div>
        </div>
  
        <hr /> 

        <!-- Product 2: Kids Trips -->
        <div class="flex flex-col-reverse md:flex-row items-stretch">
          <div class="md:w-2/3 md:mr-8">
            <h3 class="text-xl font-bold mt-4 mb-2">
              Kids Trips
            </h3>

            <p class="text-gray-700 mb-4 text-justify">
              Create amazing memories for your children. Our kids trips are designed to provide a perfect balance of education, entertainment, and exploration. From interactive museum visits to outdoor adventures, we offer a wide range of activities that will keep your kids engaged and excited. Our expert guides ensure a safe and enjoyable experience, making every moment of the trip unforgettable for your little ones.
            </p>

            <a href="#contact" class="bg-yellow-500 text-white py-2 px-4 rounded hover:bg-yellow-400 transition duration-300">
              I Want This!
            </a>
          </div>
          <div class="md:w-1/3">
            <a href="#contact">
              <img 
                src="images/products/kid.jpeg"
                alt="Kids Trip" 
                class="w-full rounded-lg h-full object-cover"
                >
            </a>
          </div>
        </div>
  
        <hr /> 

        <!-- Product 3: Exotic Tours -->
        <div class="flex flex-col md:flex-row items-stretch">
          <div class="md:w-1/3 md:mr-8">
            <a href="#price">
              <img
                src="images/products/exotic.jpeg" 
                alt="Exotic Tours" 
                class="w-full rounded-lg h-full object-cover"
                >
            </a>
          </div>
          <div class="md:w-2/3">
            <h3 class="text-xl font-bold mt-4 mb-2">
              Exotic Tours
            </h3>

            <p class="text-gray-700 mb-4 text-justify">
              Embark on a journey of discovery to exotic destinations. Immerse yourself in the vibrant cultures, breathtaking landscapes, and rich histories of these extraordinary places. Our exotic tours take you off the beaten path, allowing you to experience hidden gems and connect with local communities. Whether you dream of exploring ancient temples, trekking through lush jungles, or savoring exotic cuisine, our expertly curated itineraries ensure an immersive and unforgettable adventure.
            </p>

            <a href="#price" class="bg-yellow-500 text-white py-2 px-4 rounded hover:bg-yellow-400 transition duration-300">
              I Want This!
            </a>
          </div>
        </div>
  
        <hr /> 

        <!-- Product 4: Customized Tours -->
        <div class="flex flex-col-reverse md:flex-row items-stretch">
          <div class="md:w-2/3 md:mr-8">
            <h3 class="text-xl font-bold mt-4 mb-2">
              Customized Tours
            </h3>

            <p class="text-gray-700 mb-4 text-justify">
              Create your own personalized travel experience. Our customized tours offer the flexibility to design every aspect of your journey according to your preferences and interests. From selecting your destinations and activities to choosing accommodation and transportation options, we provide expert guidance and support at every step. Whether you desire a romantic getaway, an adventurous expedition, or a cultural immersion, our team of travel specialists will curate a unique itinerary tailored to your individual needs, ensuring an unforgettable and truly personalized travel experience.
            </p>
            
            <a href="#contact" class="bg-yellow-500 text-white py-2 px-4 rounded hover:bg-yellow-400 transition duration-300">
              I Want This!
            </a>
          </div>
          <div class="md:w-1/3">
            <a href="#contact">
              <img 
                src="images/products/customize.jpeg"
                alt="Customized Tours"
                class="w-full rounded-lg h-full object-cover"
              >
            </a>            
          </div>
        </div>  
      </div>
    </div>
  </section>

  <section id="testimonials" class="py-12 w-screen overflow-hidden">
    <div class="container mx-auto my-4 md:my-12 lg:my-18 p-4">
      <h2 class="text-4xl font-bold mb-6">
        Testimonials
      </h2>

      <div class="testimonial-carousel relative flex justify-center items-stretch">
        <div class="swiper-container testimonial-swiper w-full overflow-hidden">
          <div class="swiper-wrapper flex">
            <div class="swiper-slide bg-yellow-300 md:w-1/3 flex text-lg rounded-2xl">
              <div class="testimonial-slide p-8 overflow-hidden object-contain">
                <img
                  class="w-60 mx-auto"
                  src="images/testimonials/customer_1.png"
                  alt="Customer 1"
                >
            
                <h3 class="italic mb-4 md:text-center">
                  John Doe
                </h3>
            
                <p class="relative rounded-xl border-l-4 border-r-4 p-4">
                  <svg class="absolute top-2 left-0 -ml-4" xmlns="http://www.w3.org/2000/svg" height="32" viewBox="0 -960 960 960" width="32">
                    <path d="M453-241 213-481l240-240 42 42-198 198 198 198-42 42Zm253 0L466-481l240-240 42 42-198 198 198 198-42 42Z"/>
                  </svg>

                  I had an amazing experience with your company. The tour was well-organized, and the guides were knowledgeable and friendly. I highly recommend your services!

                  <svg class="absolute bottom-2 right-0 -mr-4"xmlns="http://www.w3.org/2000/svg" height="32" viewBox="0 -960 960 960" width="32">
                    <path d="m255-241-42-42 198-198-198-198 42-42 240 240-240 240Zm253 0-42-42 198-198-198-198 42-42 240 240-240 240Z"/>
                  </svg>
                </p>                
              </div>
            </div>

            <div class="swiper-slide bg-gray-300 md:w-1/3 flextext-lg rounded-2xl">
              <div class="testimonial-slide p-8 overflow-hidden object-contain">
                <img
                  class="w-60 mx-auto"
                  src="images/testimonials/customer_2.png"
                  alt="Customer 2"
                >
            
                <h3 class="italic mb-4 md:text-center">
                  Jane Smith
                </h3>
            
                <p class="relative rounded-xl border-l-4 border-r-4 p-4">
                  <svg class="absolute top-2 left-0 -ml-4" xmlns="http://www.w3.org/2000/svg" height="32" viewBox="0 -960 960 960" width="32">
                    <path d="M453-241 213-481l240-240 42 42-198 198 198 198-42 42Zm253 0L466-481l240-240 42 42-198 198 198 198-42 42Z"/>
                  </svg>

                  I've been on multiple trips with your company, and each time has been fantastic. The itineraries are well-planned, and the accommodations are top-notch. Thank you for creating memorable experiences!

                  <svg class="absolute bottom-2 right-0 -mr-4"xmlns="http://www.w3.org/2000/svg" height="32" viewBox="0 -960 960 960" width="32">
                    <path d="m255-241-42-42 198-198-198-198 42-42 240 240-240 240Zm253 0-42-42 198-198-198-198 42-42 240 240-240 240Z"/>
                  </svg>
                </p>                
              </div>
            </div>

            <div class="swiper-slide bg-yellow-300 md:w-1/3 flextext-lg rounded-2xl">
              <div class="testimonial-slide p-8 overflow-hidden object-contain">
                <img
                  class="w-60 mx-auto"
                  src="images/testimonials/customer_3.png"
                  alt="Customer 3"
                >
            
                <h3 class="italic mb-4 md:text-center">
                  David Johnson
                </h3>
            
                <p class="relative rounded-xl border-l-4 border-r-4 p-4">
                  <svg class="absolute top-2 left-0 -ml-4" xmlns="http://www.w3.org/2000/svg" height="32" viewBox="0 -960 960 960" width="32">
                    <path d="M453-241 213-481l240-240 42 42-198 198 198 198-42 42Zm253 0L466-481l240-240 42 42-198 198 198 198-42 42Z"/>
                  </svg>

                  I couldn't be happier with the customized tour I booked through your company. Everything was tailored to my preferences, and the local guides provided valuable insights. I will definitely book with you again!

                  <svg class="absolute bottom-2 right-0 -mr-4"xmlns="http://www.w3.org/2000/svg" height="32" viewBox="0 -960 960 960" width="32">
                    <path d="m255-241-42-42 198-198-198-198 42-42 240 240-240 240Zm253 0-42-42 198-198-198-198 42-42 240 240-240 240Z"/>
                  </svg>
                </p>                
              </div>
            </div>

            <div class="swiper-slide bg-gray-300 md:w-1/3 flextext-lg rounded-2xl">
              <div class="testimonial-slide p-8 overflow-hidden object-contain">
                <img
                  class="w-60 mx-auto"
                  src="images/testimonials/customer_4.png"
                  alt="Customer 4"
                >
            
                <h3 class="italic mb-4 md:text-center">
                  Sarah Williams
                </h3>
            
                <p class="relative rounded-xl border-l-4 border-r-4 p-4">
                  <svg class="absolute top-2 left-0 -ml-4" xmlns="http://www.w3.org/2000/svg" height="32" viewBox="0 -960 960 960" width="32">
                    <path d="M453-241 213-481l240-240 42 42-198 198 198 198-42 42Zm253 0L466-481l240-240 42 42-198 198 198 198-42 42Z"/>
                  </svg>

                  The family trip we took with your company exceeded our expectations. The activities were suitable for all ages, and the children had a blast. Thank you for creating unforgettable memories!

                  <svg class="absolute bottom-2 right-0 -mr-4"xmlns="http://www.w3.org/2000/svg" height="32" viewBox="0 -960 960 960" width="32">
                    <path d="m255-241-42-42 198-198-198-198 42-42 240 240-240 240Zm253 0-42-42 198-198-198-198 42-42 240 240-240 240Z"/>
                  </svg>
                </p>                
              </div>
            </div>

            <div class="swiper-slide bg-yellow-300 md:w-1/3 flextext-lg rounded-2xl">
              <div class="testimonial-slide p-8 overflow-hidden object-contain">
                <img
                  class="w-60 mx-auto"
                  src="images/testimonials/customer_5.png"
                  alt="Customer 5"
                >
            
                <h3 class="italic mb-4 md:text-center">
                  Michael Brown
                </h3>
            
                <p class="relative rounded-xl border-l-4 border-r-4 p-4">
                  <svg class="absolute top-2 left-0 -ml-4" xmlns="http://www.w3.org/2000/svg" height="32" viewBox="0 -960 960 960" width="32">
                    <path d="M453-241 213-481l240-240 42 42-198 198 198 198-42 42Zm253 0L466-481l240-240 42 42-198 198 198 198-42 42Z"/>
                  </svg>

                  I've always dreamed of going on an exotic tour, and your company made it a reality. The destinations were breathtaking, and the local experiences were authentic. I can't wait to book my next adventure with you!

                  <svg class="absolute bottom-2 right-0 -mr-4"xmlns="http://www.w3.org/2000/svg" height="32" viewBox="0 -960 960 960" width="32">
                    <path d="m255-241-42-42 198-198-198-198 42-42 240 240-240 240Zm253 0-42-42 198-198-198-198 42-42 240 240-240 240Z"/>
                  </svg>
                </p>                
              </div>
            </div>

            <div class="swiper-slide bg-gray-300 md:w-1/3 flextext-lg rounded-2xl">
              <div class="testimonial-slide p-8 overflow-hidden object-contain">
                <img
                  class="w-60 mx-auto"
                  src="images/testimonials/customer_6.png"
                  alt="Customer 6"
                >
            
                <h3 class="italic mb-4 md:text-center">
                  Linda Davis
                </h3>
            
                <p class="relative rounded-xl border-l-4 border-r-4 p-4">
                  <svg class="absolute top-2 left-0 -ml-4" xmlns="http://www.w3.org/2000/svg" height="32" viewBox="0 -960 960 960" width="32">
                    <path d="M453-241 213-481l240-240 42 42-198 198 198 198-42 42Zm253 0L466-481l240-240 42 42-198 198 198 198-42 42Z"/>
                  </svg>

                  I wanted a personalized trip, and your team delivered beyond my expectations. The attention to detail and the level of service were exceptional. Thank you for making my dream trip a reality!

                  <svg class="absolute bottom-2 right-0 -mr-4"xmlns="http://www.w3.org/2000/svg" height="32" viewBox="0 -960 960 960" width="32">
                    <path d="m255-241-42-42 198-198-198-198 42-42 240 240-240 240Zm253 0-42-42 198-198-198-198 42-42 240 240-240 240Z"/>
                  </svg>
                </p>                
              </div>
            </div>
          </div>
        </div>


        <div class="swiper-testimonial-button-next absolute top-1/2 -translate-y-1/2 -right-5 z-10 cursor-pointer bg-gray-100 rounded-2xl border hidden md:block">
          <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48">
            <path d="m561-242-43-42 168-168H160v-60h526L517-681l43-42 241 241-240 240Z"/>
          </svg>
        </div>

        <div class="swiper-testimonial-button-prev absolute top-1/2 -translate-y-1/2 -left-5 z-10 cursor-pointer bg-gray-100 rounded-2xl border hidden md:block">
          <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48">
            <path d="M359-242 120-481l239-239 43 43-166 166h604v60H236l166 166-43 43Z"/>
          </svg>
        </div>
      </div>
    </div>
  </section>

  <section id="pricing" class="bg-blue-50 py-12">
    <div class="container mx-auto my-4 md:my-12 lg:my-18 px-4">
      <h2 class="text-4xl font-bold mb-6">Our Prices</h2>
      <div class="grid lg:grid-cols-3 gap-6">
        <!-- Price Variant 1: Family Vacations -->
        <div class="flex flex-col bg-white rounded-lg p-6">
          <div class="flex items-center mb-4">
            <svg class="mr-6" xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48" fill="#FB923C">
              <path d="M794-128 531-391l46-46 263 263-46 46Zm-570-46q-53-58-78.5-128.5T120-446q0-78 29-152t88-133q59-59 133.5-88T523-848q73 0 143.5 25.5T794-744L224-174Zm3-89 69-70q-16-22-32-47.5t-29.5-54Q221-463 212-493.5T200-556q-27 74-18.5 151T227-263Zm117-115 246-248q-46-36-93.5-56.5t-90.5-27q-43-6.5-76.5 0T278-685q-18 18-23 51.5t2.5 75q7.5 41.5 29 88T344-378Zm291-294 72-69q-66-42-143.5-49T412-768q30 3 59.5 12t58 21.5q28.5 12.5 55 28.5t50.5 34Z"/>
            </svg>
            <h3 class="text-xl font-bold">
              Family Vacations
            </h3>
          </div>
        
          <ul class="list-disc list-inside mb-4 flex-1">
            <li class="text-gray-700">
              Classic destinations for all ages and interests
            </li>
          
            <li class="text-gray-700">
              Relaxing beach getaways
            </li>
          
            <li class="text-gray-700">
              Exciting theme park adventures
            </li>
          
            <li class="text-gray-700">
              Fun-filled water park experiences
            </li>
          
            <li class="text-gray-700">
              Educational and cultural tours
            </li>
          
            <li class="text-gray-700">
              Outdoor adventures and nature exploration
            </li>
          
            <li class="text-gray-700">
              All-inclusive family resorts with activities for everyone
            </li>
          
            <li class="text-gray-700">
              Family-friendly cruises and cruise ship vacations
            </li>
          
            <li class="text-gray-700">
              Wildlife encounters and safaris
            </li>
          </ul>
        
          <hr class="mb-4" />
        
          <div class="flex text-lg mb-4">
            <span class="text-gray-700 ml-2">
              Price from:
            </span>

            <span class="ml-1 font-bold text-gray-700">
              $ 800
            </span>
          </div>
        
          <a href="#contact" class="bg-yellow-500 text-white font-bold text-lg p-4 rounded hover:bg-yellow-400 transition duration-300 flex items-center justify-center">
            Get It
          </a>
        </div>
        
        <!-- Price Variant 2: Exotic Tours -->
        <div class="flex flex-col bg-white rounded-lg p-6">
          <div class="flex items-center mb-4">
            <svg class="mr-6" xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48" fill="#FB923C">
              <path d="M341-67q-48 0-85-28.5T204-169q-16 26-39 40.5T110-114q-47 0-78-33T1-225q0-49 30.5-77.5T109-332q-18-20-28-46.5T71-432q0-38 19.5-71t55.5-53q5 13 12.5 28t15.5 26q-20 13-31.5 32T131-430q0 60 48.5 75.5T273-330l11 19q-12 35-19.5 57.5T257-212q0 34 25.5 59.5T342-127q41 0 67.5-34.5t43-82q16.5-47.5 25.5-96t15-75.5l58 16q-9 43-21 100t-34.5 108.5Q473-139 436.5-103T341-67ZM111-174q21 0 35.5-14.5T161-224q0-21-14.5-35.5T111-274q-21 0-35.5 14.5T61-224q0 21 14.5 35.5T111-174Zm300-190q-45-40-82-74.5T265.5-506q-26.5-33-41-65T210-639q0-60 42-102t102-42q9 0 17 .5t16 2.5q-9-17-13-29t-4-24q0-46 32-78t78-32q46 0 78 32t32 78q0 11-3.5 23.5T573-780q8-2 16-2.5t17-.5q57 0 96.5 36.5T748-656q-14-1-30-.5t-30 2.5q-5-30-27-49.5T606-723q-37 0-58.5 20.5T490-640h-21q-37-44-58.5-63.5T354-723q-36 0-60 24t-24 60q0 24 13 49t37 53.5q24 28.5 58 60t76 69.5l-43 43Zm69-419q21 0 35.5-14.5T530-833q0-21-14.5-35.5T480-883q-21 0-35.5 14.5T430-833q0 21 14.5 35.5T480-783ZM618-66q-22 0-43.5-7T533-94q8-12 16-27t13-28q14 11 28.5 16.5T620-127q35 0 59.5-25.5T704-212q0-20-8-42.5T677-311l11-19q46-8 94-23.5t48-75.5q0-44-32-65.5T727-516q-42 0-99.5 16T494-459l-15-58q76-25 137-42t111-17q64 0 113.5 38.5T890-430q0 27-10 53t-28 46q46 1 77 30t31 77q0 45-31 78t-78 33q-31 0-55-14.5T757-168q-16 45-53 73.5T618-66Zm233-107q20 0 34.5-14.5T900-223q0-20-15-35.5T850-274q-20 0-35 15t-15 35q0 20 15.5 35.5T851-173Zm-740-51Zm369-609Zm370 609Z"/>
            </svg>
        
            <h3 class="text-xl font-bold">
              Exotic Tours
            </h3>
          </div>
        
          <ul class="list-disc list-inside mb-4 flex-1">
            <li class="text-gray-700">
              Journey of discovery to vibrant cultures and breathtaking landscapes
            </li>
          
            <li class="text-gray-700">
              Off the beaten path experiences
            </li>
          
            <li class="text-gray-700">
              Connecting with local communities
            </li>
          
            <li class="text-gray-700">
              Immersive culinary adventures
            </li>
          
            <li class="text-gray-700">
              UNESCO World Heritage site explorations
            </li>
          
            <li class="text-gray-700">
              Luxury accommodations with unique cultural experiences
            </li>
          
            <li class="text-gray-700">
              Spiritual and wellness retreats in tranquil settings
            </li>
          
            <li class="text-gray-700">
              Outdoor activities like hiking, diving, and snorkeling in breathtaking environments
            </li>
          </ul>          
        
          <hr class="mb-4" />
        
          <div class="flex text-lg mb-4">
            <span class="text-gray-700 ml-2">
              Price from:
            </span>

            <span class="ml-1 font-bold text-gray-700">
              $ 600
            </span>
          </div>

          <a href="#contact" class="bg-yellow-500 text-white font-bold text-lg p-4 rounded hover:bg-yellow-400 transition duration-300 flex items-center justify-center">
            Get It
          </a>
        </div>
  
        <!-- Price Variant 3: Kids Trips -->
        <div class="flex flex-col bg-white rounded-lg p-6">
          <div class="flex items-center mb-4">
            <svg class="mr-6" xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48" fill="#FB923C">
              <path d="M276-160q-45 0-79.5-33.5T159-275q-37-23-57.5-58.432T81-411q0-52 30.5-93.5T192-557l-81-85-19 20q-9 10-21.5 10T49-621.5q-9-9.5-9-21.5t9-22l81-84q9-9 21.5-9t21.5 9.5q9 9.5 9 21.5t-9 21l-19 21 72 77 39-117q11-33 38.485-54 27.486-21 61.515-21h232q34.412 0 62.206 21Q687-758 697-725l50 166q57 5 95 46.5T880-411q0 42.136-20.5 77.568Q839-298 802-275q-3 48-37.5 81.5T685-160q-42 0-73.5-29T572-260H389q-8 42-39.5 71T276-160Zm-2-401h175v-179h-84q-14.576 0-25.788 9.5T323-707l-49 146Zm235 0h175l-44.898-145.655Q634-721 622.788-730.5 611.576-740 597-740h-88v179ZM389-320h183q11-36 43-58t70-22q32 0 59 17t44 44q17-13 24.5-32.427T820-411q0-38-26-64t-64-26H231q-38 0-64 26t-26 64q0 20.146 8 39.573T173-339q16-29 43.585-45 27.586-16 59.415-16 38 0 70 22t43 58ZM276-220q25.5 0 42.75-17.25T336-280q0-25.5-17.25-42.75T276-340q-25.5 0-42.75 17.25T216-280q0 25.5 17.25 42.75T276-220Zm409 0q25.5 0 42.75-17.25T745-280q0-25.5-17.25-42.75T685-340q-25.5 0-42.75 17.25T625-280q0 25.5 17.25 42.75T685-220ZM481-411Z"/>
            </svg>
        
            <h3 class="text-xl font-bold">
              Kids Trips
            </h3>
          </div>
        
          <ul class="list-disc list-inside mb-4 flex-1">
            <li class="text-gray-700">
              Education, entertainment, and exploration for children
            </li>
          
            <li class="text-gray-700">
              Interactive museum visits
            </li>
          
            <li class="text-gray-700">
              Outdoor adventures
            </li>
          
            <li class="text-gray-700">
              Animal encounters and zoo visits
            </li>
          
            <li class="text-gray-700">
              Theme park experiences tailored for kids
            </li>
          
            <li class="text-gray-700">
              Fun and educational workshops and classes
            </li>
          
            <li class="text-gray-700">
              Cultural and historical tours with kid-friendly activities
            </li>
          
            <li class="text-gray-700">
              Water parks and swimming activities
            </li>
          
            <li class="text-gray-700">
              Sports camps and activities for active kids
            </li>
          
            <li class="text-gray-700">
              Outdoor picnics and nature walks
            </li>
          </ul>
          
        
          <hr class="mb-4" />
        
          <div class="flex text-lg mb-4">
            <span class="text-gray-700 ml-2">
              Price from:
            </span>

            <span class="ml-1 font-bold text-gray-700">
              $ 400
            </span>
          </div>

          <a href="#contact" class="bg-yellow-500 text-white font-bold text-lg p-4 rounded hover:bg-yellow-400 transition duration-300 flex items-center justify-center">
            Get It
          </a>
        </div>
      </div>
    </div>
  </section>
  
  <section id="contact" class="py-12">
    <div class="container my-4 md:my-12 lg:mt-18 mx-auto px-4 flex flex-col md:flex-row">
      <div class="w-full md:w-1/2">
        <h2 class="text-4xl font-bold mb-6">
          Contact us
        </h2>
        
        <form id="contact-form" class="max-w-lg mr-8">
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
              Name
            </label>
            <input
              class="shadow appearance-none border rounded w-full p-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:ring-2 focus:ring-yellow-500" 
              id="name" 
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
      
        <div class="w-full lg:w-1/3 lg:pr-16 mb-8 lg:self-baseline">
          <p class="mb-4">
            Stay updated on the latest adventures!
          </p>
      
          <form id="subscribeForm" class="flex width-full">
            <input 
              id="emailInput"
              type="text"
              placeholder="Enter your email"
              class="px-4 py-2 rounded-l-lg mr-2 flex-1 text-black focus:outline-none focus:ring-2 focus:ring-yellow-500"
              required
              pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
            >
            <button 
              type="submit"
              class="bg-yellow-500 hover:bg-yellow-400 text-white px-4 py-2 rounded-r-lg transition-colors duration-300"
              onclick="submitForm(event)"
            >
              Subscribe
            </button>
          </form>

          <p id="errorMessage" class="hidden mt-4 text-red-300 text-center"></p>
          <p id="successMessage" class="hidden mt-4 text-green-300 text-center">Success</p>
      
          <ul class="list-none flex mt-4">
            <li class="w-1/4 px-2 flex justify-center">
              <a href="https://www.facebook.com/" target="_blank">
                <img src="images/social/facebook.png" alt="facebook" class="object-contain">
              </a>
            </li>
      
            <li class="w-1/4 px-2 flex justify-center">
              <a href="https://www.instagram.com/" target="_blank">
                <img src="images/social/instagram.png" alt="instagram" class="object-contain">
              </a>
            </li>
      
            <li class="w-1/4 px-2 flex justify-center">
              <a href="https://www.youtube.com/" target="_blank">
                <img src="images/social/youtube.png" alt="youtube" class="object-contain">
              </a>
            </li>
      
            <li class="w-1/4 px-2 flex justify-center">
              <a href="https://twitter.com/" target="_blank">
                <img src="images/social/twitter.png" alt="twitter" class="object-contain">
              </a>
            </li>
          </ul>
        </div>
{{--       
        <div class="w-full lg:w-1/6 lg:self-baseline">
          <p class="mb-4 lg:mb-8">
            ...& join us on social media
          </p>
      
          <ul class="list-none flex">
            <li class="w-1/4 px-2 flex justify-center">
              <a href="https://www.facebook.com/" target="_blank">
                <img src="images/social/facebook.png" alt="facebook" class="object-contain">
              </a>
            </li>
      
            <li class="w-1/4 px-2 flex justify-center">
              <a href="https://www.instagram.com/" target="_blank">
                <img src="images/social/instagram.png" alt="instagram" class="object-contain">
              </a>
            </li>
      
            <li class="w-1/4 px-2 flex justify-center">
              <a href="https://www.youtube.com/" target="_blank">
                <img src="images/social/youtube.png" alt="youtube" class="object-contain">
              </a>
            </li>
      
            <li class="w-1/4 px-2 flex justify-center">
              <a href="https://twitter.com/" target="_blank">
                <img src="images/social/twitter.png" alt="twitter" class="object-contain">
              </a>
            </li>
          </ul>
        </div> --}}
      </div>
      

      <div class="mt-8 text-center text-sm text-gray-400">
        <p>
          &copy; 2023 Wanderlust Adventures - Tourism Agency. All rights reserved.
        </p>
      </div>
    </div>
  </footer>

  <!-- Script for Contact us -->
  <script>
    const form = document.getElementById('contact-form');
    const submitBtn = document.getElementById('submit-btn');
    const messageContainer = document.getElementById('message-container');

    form.addEventListener('submit', function(event) {
      event.preventDefault();

      if (form.checkValidity()) {
        const formData = new FormData(form);

        fetch('/contact', {
          method: 'POST',
          body: formData
        })
        .then(response => response.json())
        .then(data => {
          form.reset();

          if (data.success) {
            const successMessage = document.createElement('div');
            successMessage.textContent = 'Successful';
            successMessage.classList.add('text-green-500', 'ml-4');
            messageContainer.innerHTML = '';
            messageContainer.appendChild(successMessage);

            setTimeout(function() {
              successMessage.remove();
            }, 3000);
          } else {
            const errorMessage = document.createElement('div');
            errorMessage.textContent = 'Error: ' + (data.message || 'Unknown error');
            errorMessage.classList.add('text-red-500', 'ml-4');
            messageContainer.innerHTML = '';
            messageContainer.appendChild(errorMessage);

            setTimeout(function() {
              errorMessage.remove();
            }, 3000);
          }
        })
        .catch(error => {
          console.error(error);
          const errorMessage = document.createElement('div');
          errorMessage.textContent = 'An error occurred. Please try again later.';
          errorMessage.classList.add('text-red-500', 'ml-4');
          messageContainer.innerHTML = '';
          messageContainer.appendChild(errorMessage);

          setTimeout(function() {
              errorMessage.remove();
          }, 3000);
        });
      } else {
        const errorMessage = document.createElement('div');
        errorMessage.textContent = 'Please fill out all required fields.';
        errorMessage.classList.add('text-red-500', 'ml-4');
        messageContainer.innerHTML = '';
        messageContainer.appendChild(errorMessage);

        setTimeout(function() {
          errorMessage.remove();
        }, 3000);
      }
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
        spaceBetween: 15,
        loop: true,
        breakpoints: {
          768: {
            slidesPerView: 2,
          },
          1200: {
            slidesPerView: 3,
          },
        },
      });
    });
  </script>
</body>
</html>
