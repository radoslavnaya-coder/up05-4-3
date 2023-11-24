<template>
    <main>
        <img src="/img/aboutBanner.png" />
        <p>Новинки</p>
            <swiper :autoplay="{
      delay: 2000,
      disableOnInteraction: false,
    }" :navigation="false" :modules="modules" class="mySwiper">
                <swiper-slide>
                    <img src="/img/items/01.jpg">
                    <p>Название</p>
                    <p>4000 P.</p>
                </swiper-slide>
                <swiper-slide>
                    <img src="/img/items/02.jpg">
                    <p>Название</p>
                    <p>4000 P.</p>
                </swiper-slide>
                <swiper-slide>
                    <img src="/img/items/03.jpg">
                    <p>Название</p>
                    <p>4000 P.</p>
                </swiper-slide>
                <swiper-slide>
                    <img src="/img/items/04.jpg">
                    <p>Название</p>
                    <p>4000 P.</p>
                </swiper-slide>
                <swiper-slide>
                    <img src="/img/items/05.jpg">
                    <p>Название</p>
                    <p>4000 P.</p>
                </swiper-slide>
            </swiper>
    </main>
</template>
<script>
// Import Swiper Vue.js components
import { Swiper, SwiperSlide } from "swiper/vue";

// Import Swiper styles
import "swiper/css";
import "swiper/css/navigation";

// import required modules
import { Autoplay, Navigation } from "swiper/modules";

export default {
    name: "AboutBody",
    components: {
        Swiper,
        SwiperSlide,
    },
    setup() {
        return {
            modules: [Navigation, Autoplay],
        };
    },
};
</script>
<style scoped>
img {
    width: 100%;
}
main p {
    text-align: center;
    font-size: 19px;
    font-weight: 700;
}
/* slider */
.swiper {
    width: 25%;
    height: 60%;
}
.swiper-slide {
    text-align: center;
    font-size: 18px;
    /* Center slide text vertically */
    display: block;
    justify-content: center;
    background: #2F2A2A;
    align-items: center;
    padding: 2vh 2vw;
    height: 45vh;
    color: white;
    border-radius: 10px;
}
.swiper-slide img {
    width: 200px;
    background: white;
    padding: 2vh 2vw;
    object-fit: cover;
    border-radius: 3px;
}
/* end slider */
</style>
