<template>
    <div id="page" class="main">
        <!-- Cursor -->
        <div id="cursor">
            <div class="cursor__circle"></div>
        </div>

        <!-- Navbar (auto-imported in Nuxt) -->
        <Navbar />

        <div class="site-content">
            <!-- Page Header -->
            <div class="inner-header bg-holder"
                :style="{ backgroundImage: 'url(/frontend/images/banner/inner-header/page-header-01.jpg)' }">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12 text-center">
                            <h1 class="title">Digital Marketing Services</h1>
                            <p>Award-winning website design & creative digital agency services</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content-wrapper">
                <!-- Services Section -->
                <section class="space-ptb ellipse-bottom">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-12">

                                <swiper ref="swiperRef" :slides-per-view="1" :space-between="50" :loop="true"
                                    :pagination="{ clickable: true, type: 'bullets' }"
                                    :autoplay="{ delay: 3000, disableOnInteraction: false }" :dots="true"
                                    @swiper="onSwiper" @slideChange="onSlideChange">
                                    <swiper-slide class="img_slider">
                                        <img src="/frontend/product(2).png" alt="" class="img-fluid slider_image">
                                    </swiper-slide>
                                    <swiper-slide class="img_slider">
                                        <img src="/frontend/product(2).png" alt="" class="img-fluid slider_image">
                                    </swiper-slide>
                                    <swiper-slide class="img_slider">
                                        <img src="/frontend/product(2).png" alt="" class="img-fluid slider_image">
                                    </swiper-slide>
                                </swiper>

                                <!-- Control Buttons -->
                                <div class="swiper-controls">
                                    <button class="btn_prev" @click="goToPrev">Prev</button>
                                    <button class="btn_nxt" @click="goToNext">Next</button>
                                </div>

                                <div class="service_content">
                                    <h1>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</h1>
                                    <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, possimus.</h6>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem maxime facere, repudiandae doloribus libero asperiores tempore rerum repellat accusamus quas minus, a dignissimos placeat qui incidunt vitae fuga minima. Eaque aut, veritatis consequatur natus eius ut. Distinctio voluptatibus labore voluptatem nam quia officiis quas iure excepturi adipisci, illum aliquam harum atque eos aliquid incidunt a ducimus sunt omnis qui ex nesciunt sint velit tenetur quod! Impedit, ex! Dolores alias perspiciatis cumque optio, delectus reprehenderit? Aliquid asperiores libero accusamus dolorem nostrum dolores dignissimos dicta aperiam nesciunt voluptatum. Placeat veniam saepe similique culpa nisi ipsa magnam quas dolorem atque? Blanditiis, recusandae magnam?</p>
                                    <ul>
                                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque doloribus veritatis illum beatae maxime! Sed magnam suscipit non explicabo excepturi eligendi, laboriosam, quibusdam totam ipsa itaque labore nulla ducimus! Dolore!</li>
                                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque doloribus veritatis illum beatae maxime! Sed magnam suscipit non explicabo excepturi eligendi, laboriosam, quibusdam totam ipsa itaque labore nulla ducimus! Dolore!</li>
                                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque doloribus veritatis illum beatae maxime! Sed magnam suscipit non explicabo excepturi eligendi, laboriosam, quibusdam totam ipsa itaque labore nulla ducimus! Dolore!</li>
                                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque doloribus veritatis illum beatae maxime! Sed magnam suscipit non explicabo excepturi eligendi, laboriosam, quibusdam totam ipsa itaque labore nulla ducimus! Dolore!</li>
                                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque doloribus veritatis illum beatae maxime! Sed magnam suscipit non explicabo excepturi eligendi, laboriosam, quibusdam totam ipsa itaque labore nulla ducimus! Dolore!</li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod ipsa nisi veniam quo inventore maxime rerum non in consequatur quia sit, qui illum voluptatem minus quae eius vitae eum. Modi.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <!-- Footer (auto-imported in Nuxt) -->
        <Footer />
    </div>
</template>

<script setup>
import { Swiper, SwiperSlide } from 'swiper/vue';
import 'swiper/swiper-bundle.css'; // Ensure the Swiper styles are imported
import { ref } from 'vue';

const swiperRef = ref(null); // Reference to the Swiper instance

// Store the swiper instance when it's ready
let swiperInstance = null;

const onSwiper = (swiper) => {
    swiperInstance = swiper; // Assign the swiper instance to the variable
    console.log('Swiper initialized:', swiper);
};

const onSlideChange = () => {
    console.log('Slide changed');
};

// Function to go to the next slide
const goToNext = () => {
    if (swiperInstance) {
        swiperInstance.slideNext(); // Go to the next slide
    }
};

// Function to go to the previous slide
const goToPrev = () => {
    if (swiperInstance) {
        swiperInstance.slidePrev(); // Go to the previous slide
    }
};
</script>

<style scoped>
/* Optional: Custom CSS for your slider */
.btn_prev {
    border: none;
    border-radius: 20px;
    color: #fff;
    font-weight: 600;
    background: #70bfff;

}

.btn_nxt {
    border: none;
    border-radius: 20px;
    color: #fff;
    font-weight: 600;
    background: #70bfff;

}

.slider_image {
    border-radius: 10px;
}

.img_slider {
    position: relative;
}

.img_slider {}

.slider_image {
    width: 100%;
    height: auto;
}

.swiper-controls {
    margin-top: 20px;
    text-align: center;
}

.swiper-controls button {
    padding: 10px 20px;
    margin: 5px;
    font-size: 16px;
    cursor: pointer;
}
</style>
