<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link>
        <link href="/css/app.css" rel="stylesheet">
        <link>
         <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
         @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
        <section id="welcome">
      <div class="welcome-menu">
        <div class="logo">
          <img
            src="https://www.pngitem.com/pimgs/m/21-216129_restaurants-clipart-restaurant-symbol-logo-for-restaurant-png.png"
            alt=""
          />
        </div>
        <div class="menu">
          <div class="menu-title">Menu</div>
          <ul class="links">
            <li>
              <a href="#">Menu</a>
            </li>
            <li>
              <a href="#">Waitlist</a>
            </li>
            <li>
              <a href="#">Giftcards</a>
            </li>
            <li>
              <a href="#">Offers</a>
            </li>
          </ul>
        </div>
        <div class="social-icons">
          <a href="#"><i class="fa-brands fa-facebook-f"></i> </a>

          <a href="#"><i class="fa-brands fa-twitter"></i> </a>

          <a href="#"> <i class="fa-brands fa-instagram"></i> </a>
        </div>
        <div class="location">
          <div class="address">
            234 Main st, <br />
            New York, New York 11747
          </div>
          <div class="phone-number">
            <a href="tell:+66951833510"> +66951833510 </a>
          </div>
        </div>
      </div>
      <div class="welcome-jumbo">
        <div class="status">New</div>
        <h1>Billy Burgers</h1>
        <div class="burger-fries">
          <img src="./images/main-hamburger0landing-page.png" alt="burger-fries" />
        </div>
      </div>
    </section>

    <section id="information">
      <div class="restaurant-image">
        <img src="./images/top-down.jpeg" alt="" />
      </div>
      <div class="info">
        <h2>We Started From The Bottom In 1987</h2>
        <div class="paragraphs">
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium
            iste fugiat corrupti, voluptas ratione molestias iure? Non
            dignissimos laudantium impedit iure hic animi magni deleniti! Cumque
            recusandae corporis, a accusantium saepe molestias illo voluptate
            nihil ratione velit consectetur! Reiciendis voluptas nobis molestiae
            ab optio doloribus odio quam dolores. Aliquid, unde.
          </p>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium
            iste fugiat corrupti, voluptas ratione molestias iure? Non
            dignissimos laudantium impedit iure hic animi magni deleniti! Cumque
            recusandae corporis, a accusantium saepe molestias illo voluptate
            nihil ratione velit consectetur! Reiciendis voluptas nobis molestiae
            ab optio doloribus odio quam dolores. Aliquid, unde.
          </p>
        </div>
        <a href="#" class="about-link">
          <span>Learn More About Our Restaurant </span>
          <div class="circle-right">
            <i class="fa-solid fa-chevron-right"></i>
          </div>
        </a>
      </div>
    </section>

    <section id="food-preview">
      <h2>We have everything you need to kill your hunger</h2>
      <div class="button-rounded">View Our Menu</div>
      <div class="container">
        <div class="left-btn">
          <i class="fa-solid fa-chevron-left"></i>
        </div>
        <div class="right-btn">
          <i class="fa-solid fa-chevron-right"></i>
        </div>
        <div class="food-slider">
          <div class="sliding-system">
            <div class="slide">
              <div class="background"></div>
              <div class="content">
                <div class="food-title">Starters</div>
                <p class="food-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Impedit earum corrupti explicabo excepturi facilis qui alias
                  mollitia, tempora inventore optio vel magni dicta culpa totam
                  eaque fuga et corporis voluptatum repudiandae aliquid minima
                </p>
                <div class="food-image">
                  <img
                    src="https://static.vecteezy.com/system/resources/previews/010/833/993/original/corn-chips-mexican-nachos-isolated-on-white-background-with-clipping-path-png.png"
                    alt=""
                  />
                </div>
              </div>
            </div>
            <div class="slide">
              <div class="background"></div>
              <div class="content">
                <div class="food-title">Burgers</div>
                <p class="food-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Impedit earum corrupti explicabo excepturi facilis qui alias
                  mollitia, tempora inventore optio vel magni dicta culpa totam
                  eaque fuga et corporis voluptatum repudiandae aliquid minima
                </p>
                <div class="food-image">
                  <img src="./images/main-hamburger0landing-page.png" alt="" />
                </div>
              </div>
            </div>
            <div class="slide">
              <div class="background"></div>
              <div class="content">
                <div class="food-title">Entrees</div>
                <p class="food-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Impedit earum corrupti explicabo excepturi facilis qui alias
                  mollitia, tempora inventore optio vel magni dicta culpa totam
                  eaque fuga et corporis voluptatum repudiandae aliquid minima
                </p>
                <div class="food-image">
                  <img
                    src="https://www.pngkey.com/png/full/342-3422633_pork-entrees-steak-pork-png.png"
                    alt=""
                  />
                </div>
              </div>
            </div>
            <div class="slide">
              <div class="background"></div>
              <div class="content">
                <div class="food-title">Sides</div>
                <p class="food-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Impedit earum corrupti explicabo excepturi facilis qui alias
                  mollitia, tempora inventore optio vel magni dicta culpa totam
                  eaque fuga et corporis voluptatum repudiandae aliquid minima
                </p>
                <div class="food-image">
                  <img
                    src="https://www.freeiconspng.com/thumbs/salad-png/greek-salad-png-21.png"
                    alt=""
                  />
                </div>
              </div>
            </div>
            <div class="slide">
              <div class="background"></div>
              <div class="content">
                <div class="food-title">Deserts</div>
                <p class="food-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Impedit earum corrupti explicabo excepturi facilis qui alias
                  mollitia, tempora inventore optio vel magni dicta culpa totam
                  eaque fuga et corporis voluptatum repudiandae aliquid minima
                </p>
                <div class="food-image">
                  <img src="./images/desserts.png" alt="" />
                </div>
              </div>
            </div>
            <div class="slide">
              <div class="background"></div>
              <div class="content">
                <div class="food-title">Drinks</div>
                <p class="food-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Impedit earum corrupti explicabo excepturi facilis qui alias
                  mollitia, tempora inventore optio vel magni dicta culpa totam
                  eaque fuga et corporis voluptatum repudiandae aliquid minima
                </p>
                <div class="food-image">
                  <img
                    src="https://static.vecteezy.com/system/resources/previews/010/833/993/original/corn-chips-mexican-nachos-isolated-on-white-background-with-clipping-path-png.png"
                    alt=""
                  />
                </div>
              </div>
            </div>
            <div class="slide">
              <div class="background"></div>
              <div class="content">
                <div class="food-title">Beers</div>
                <p class="food-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Impedit earum corrupti explicabo excepturi facilis qui alias
                  mollitia, tempora inventore optio vel magni dicta culpa totam
                  eaque fuga et corporis voluptatum repudiandae aliquid minima
                </p>
                <div class="food-image">
                  <img
                    src="https://static.vecteezy.com/system/resources/previews/010/833/993/original/corn-chips-mexican-nachos-isolated-on-white-background-with-clipping-path-png.png"
                    alt=""
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    </body>
</html>
