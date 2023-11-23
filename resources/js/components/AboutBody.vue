<template>
    <main>
        <img src="/img/aboutBanner.png" />
        <p>Новинки</p>
            <swiper :navigation="true" :modules="modules" class="mySwiper">
                <swiper-slide><img src="/img/items/01.jpg"><p>Название</p><p>4000 P.</p></swiper-slide>
                <swiper-slide><img src="/img/items/02.jpg"><p>Название</p><p>4000 P.</p></swiper-slide>
                <swiper-slide><img src="/img/items/03.jpg"><p>Название</p><p>4000 P.</p></swiper-slide>
                <swiper-slide><img src="/img/items/04.jpg"><p>Название</p><p>4000 P.</p></swiper-slide>
                <swiper-slide><img src="/img/items/05.jpg"><p>Название</p><p>4000 P.</p></swiper-slide>
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
import { Navigation } from "swiper/modules";

export default {
    name: "AboutBody",
    components: {
        Swiper,
        SwiperSlide,
    },
    setup() {
        return {
            modules: [Navigation],
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
    width: 60%;
    height: 60%;
}
.swiper *{
    display: block;
}
.swiper-slide {
    text-align: center;
    font-size: 18px;
    /* Center slide text vertically */
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 2vh 2vw;
}
.swiper-slide img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
}
/* end slider */
</style>
