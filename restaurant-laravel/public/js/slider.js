let slides = $(".sliding-system a.slide").length;
let maxSlides;
let moveTotal;
let currentSlide = 0;
$(window).resize(function () {
    currentSlide = 0;
    $(".sliding-system").css("transform", "translate3d(-0%, 0,0");
});
function desktopSlider() {
    if (a.matches) {
        maxSlides = Math.ceil((slides * 20) / 100);
        moveTotal = 100;
        // Right Button
        $(".right-btn").on("click", () => {
            if (currentSlide < maxSlides) {
                currentSlide += 100;
                $(".sliding-system").css(
                    "transform",
                    `translate3d(-${currentSlide}%, 0, 0)`
                );
            }
        });
        // Left Button
        $(".left-btn").on("click", () => {
            if (currentSlide != 0) {
                currentSlide -= 100;
                $(".sliding-system").css(
                    "transform",
                    `translate3d(-${currentSlide}%, 0, 0)`
                );
            }
        });
    }
}
var a = window.matchMedia("(min-width: 998px)");
desktopSlider(a);
a.addListener(desktopSlider);
function tabletSlider() {
    if (b.matches) {
        maxSlides = Math.ceil((slides * 50) / 100);
        moveTotal = 100;
        // Right Button
        $(".right-btn").on("click", () => {
            if (currentSlide < maxSlides * 100 - 100) {
                currentSlide += 50;
                $(".sliding-system").css(
                    "transform",
                    `translate3d(-${currentSlide}%, 0, 0)`
                );
            }
        });
        // Left Button
        $(".left-btn").on("click", () => {
            if (currentSlide != 0) {
                currentSlide -= 50;
                $(".sliding-system").css(
                    "transform",
                    `translate3d(-${currentSlide}%, 0, 0)`
                );
            }
        });
    }
}
var b = window.matchMedia("(min-width: 768px) and (max-width: 997px");

tabletSlider(b);
b.addListener(tabletSlider);
