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
        <a href="/about" class="about-link">
          <span>Learn More About Our Restaurant </span>
          <div class="circle-right">
            <i class="fa-solid fa-chevron-right"></i>
          </div>
        </a>
      </div>
    </section>

   @include('includes.food-categories-slider')
 @endsection


