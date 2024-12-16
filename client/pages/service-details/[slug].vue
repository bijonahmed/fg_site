<script setup>
import {
    ref,
    watch,
    onMounted
} from "vue";
import axios from "axios";
import {
    useUserStore
} from "~~/stores/user";
import swal from "sweetalert2";
import Navbar from "~/components/Navbar.vue";
import {
    strict
} from "assert";

import {
    Swiper,
    SwiperSlide
} from 'swiper/vue';
import 'swiper/swiper-bundle.css'; // Ensure the Swiper styles are imported

import {
    useRoute
} from 'vue-router';

const route = useRoute();
const productName = ref("");
const productDescription = ref("");
const swiperRef = ref(null);
const sliderData = ref([]);

// const whatsAppNumber1 = ref("+8801915728982");
// const whatsAppNumber2 = ref("+8801817511628");
// const email = ref("info@futuregenit.com");

let swiperInstance = null;

const onSwiper = (swiper) => {
    swiperInstance = swiper;
    console.log('Swiper initialized:', swiper);
};

const onSlideChange = () => {
    console.log('Slide changed');
};
const goToNext = () => {
    if (swiperInstance) {
        swiperInstance.slideNext();
    }
};
const goToPrev = () => {
    if (swiperInstance) {
        swiperInstance.slidePrev();
    }
};
const meta = ref({
    description: '',
    keywords: ''
});
const slug = route.params.slug;

const fetchServiceDetails = async () => {
    const response = await axios.get(`/unauthenticate/service-details/${slug}`);
    if (response.data) {
        productName.value = response.data.name;
        productDescription.value = response.data.description.replace(/\n/g, '<br>');;
        sliderData.value = response.data.sliderData;
    }
};
onMounted(async () => {
    fetchServiceDetails();

    try {
        const response = await axios.get(`/meta-services-details/${slug}`);
        if (response.data) {
            meta.value = response.data;
        }
    } catch (error) {
        console.error('Error fetching meta data:', error);
    }

});
// Set head metadata dynamically
useHead(() => ({
    title: productName,
    meta: [{
            name: 'description',
            content: meta.value.description || ""
        },
        {
            name: 'keywords',
            content: meta.value.keywords || ""
        },
    ],
  link: [
    { rel: 'canonical', href: meta.value.canonical || window.location.href },
  ],
}));
</script>

<template>
    <div id="page" class="main">
    
        <div id="cursor">
    
            <div class="cursor__circle"></div>
    
        </div>
    
        <!-- Navbar (auto-imported in Nuxt) -->
    
        <Navbar />
    
        <div class="site-content">
    
            <!-- Page Header -->
    
            <div class="inner-header bg-holder" :style="{ backgroundImage: 'url(/frontend/images/banner/inner-header/page-header-01.jpg)' }">
    
                <div class="container">
    
                    <div class="row justify-content-center">
    
                        <div class="col-md-12 text-center">
    
                            <h1 class="title">{{ productName }}</h1>
    
                            <NuxtLink to="/service">
    
                                <h4>
    
                                    <center>Back</center>
    
                                </h4>
    
                            </NuxtLink>
    
                        </div>
    
                    </div>
    
                </div>
    
            </div>
    
            <div class="content-wrapper">
    
                <!-- Services Section -->
    
                <section class="ellipse-bottom">
    
                    <center>
    
                        <h1 class="title">{{ productName }}</h1>
    
                    </center>
    
                    <div class="container">
    
                        <div class="row justify-content-start">
    
                            <div class="col-lg-12">
    
                                <swiper ref="swiperRef" :slides-per-view="1" :space-between="50" :loop="true" :pagination="{ clickable: true, type: 'bullets' }" :autoplay="{ delay: 3000, disableOnInteraction: false }" @swiper="onSwiper" @slideChange="onSlideChange">
    
                                    <swiper-slide class="img_slider" v-for="data in sliderData" :key="data.id">
    
                                        <img :src="data.images" alt="" class="img-fluid slider_image">
    
                                    </swiper-slide>
    
                                </swiper>
    
                                <!-- Control Buttons -->
    
                                <div class="swiper-controls">
    
                                    <button class="btn_prev" @click="goToPrev">Prev</button>
    
                                    <button class="btn_nxt" @click="goToNext">Next</button>
    
                                </div>
    
                                <div class="service_content text-justify" style="text-align: justify;" v-html="productDescription">
    
                                </div>
    
                            </div>
    
                        </div>
    
                    </div>
    
                </section>
    
                <!-- Contact Information Section -->
    
<br/><br/><br/>    
            </div>
    
        </div>
    
        <!-- Footer (auto-imported in Nuxt) -->
    
        <Footer />
    
    </div>
</template>

<style scoped>
/* Media Queries for Mobile */

@media (max-width: 768px) {
    .contact-item {
        text-align: center;
    }
    .contact-title {
        font-size: 24px;
    }
}

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
