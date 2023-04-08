@extends('layouts.app')
@section('title')
Menu - {{$settings["general"]->site_title}} 
@endsection

@section('content')
    <div id="menu-page">
        <section id="food-preview">
            <h2>We have everything you need to kill your hunger</h2>
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
                                    <img src="https://static.vecteezy.com/system/resources/previews/010/833/993/original/corn-chips-mexican-nachos-isolated-on-white-background-with-clipping-path-png.png"
                                        alt="" />
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
                                    <img src="https://www.pngkey.com/png/full/342-3422633_pork-entrees-steak-pork-png.png"
                                        alt="" />
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
                                    <img src="https://www.freeiconspng.com/thumbs/salad-png/greek-salad-png-21.png"
                                        alt="" />
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
                                    <img src="https://static.vecteezy.com/system/resources/previews/010/833/993/original/corn-chips-mexican-nachos-isolated-on-white-background-with-clipping-path-png.png"
                                        alt="" />
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
                                    <img src="https://static.vecteezy.com/system/resources/previews/010/833/993/original/corn-chips-mexican-nachos-isolated-on-white-background-with-clipping-path-png.png"
                                        alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
