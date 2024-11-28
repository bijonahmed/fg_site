<template>
    <swiper
      :slides-per-view="1"
      :space-between="50"
      :loop="true"
      :pagination="{
        clickable: true,  // Allows clicking on dots to navigate
        type: 'bullets'   // Dot navigation type
      }"
      @swiper="onSwiper"
      @slideChange="onSlideChange"
    >
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
  </template>
  
  <script setup>
  import { Swiper, SwiperSlide } from 'swiper/vue';
  import 'swiper/swiper-bundle.css'; // Ensure Swiper styles are imported
  
  const onSwiper = (swiper) => {
    console.log(swiper);
  };
  
  const onSlideChange = () => {
    console.log('Slide changed');
  };
  </script>
  
  <style scoped>
  /* Optional: Customize the slider styles here */
  .img_slider {
    position: relative;
  }
  
  .slider_image {
    width: 100%;
    height: auto;
  }
  
  /* You can also style the pagination dots if you want */
  .swiper-pagination {
    position: absolute;
    bottom: 10px;
    left: 50%;
    transform: translateX(-50%);
  }
  
  .swiper-pagination-bullet {
    background-color: #fff;  /* Example: White dots */
    width: 10px;
    height: 10px;
    border-radius: 50%;
  }
  
  .swiper-pagination-bullet-active {
    background-color: #007bff;  /* Active dot color */
  }
  </style>
  