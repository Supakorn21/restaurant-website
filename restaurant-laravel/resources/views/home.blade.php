@extends('layouts.landing-page')

@section('title')
{{$settings["general"]->site_title}} | Thailand's number #1 Burger
@endsection

 @section('content')
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
 @endsection


