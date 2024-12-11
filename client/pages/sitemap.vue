<script setup>
import { ref, watch, onMounted } from "vue";
import axios from "axios";
import { useUserStore } from "~~/stores/user";
import swal from "sweetalert2";
import Navbar from "~/components/Navbar.vue";
import { strict } from "assert";

const meta = ref({ description: '', keywords: '' });


const serviceData = ref([]);


const callService = async () => {
  
  try {
    const response = await axios.get('/unauthenticate/getServices');
    if (response.data) {
      serviceData.value = response.data;
    }
  } catch (error) {
    console.error('Error fetching meta data:', error);
  }
};


onMounted(async () => {
  callService();
  try {
    const response = await axios.get('/meta');
    if (response.data) {
      meta.value = response.data;
    }
  } catch (error) {
    console.error('Error fetching meta data:', error);
  }
});
// Set head metadata dynamically
useHead(() => ({
  title: "Site Map",
  meta: [
    { name: 'description', content: meta.value.description || "" },
    { name: 'keywords', content: meta.value.keywords || "" },
  ],
}));
</script>
<style>

.list-group-item {
	position: relative;
	display: block;
	padding: var(--bs-list-group-item-padding-y) var(--bs-list-group-item-padding-x);
	color: #fff;
	text-decoration: none;
	background-color: #0a0b0b;
	border: var(--bs-list-group-border-width) solid #0000
}
</style>
<template>

  <!--=================================
    cursor -->
  <div id="cursor">
    <div class="cursor__circle"></div>
  </div>
  <!--=================================
    cursor -->


  <div id="page" class="main">

    <Navbar />

    <div class="site-content">

      <div class="container-fluid">
        <div class="item-efftect container">
          <div class="efftect overflow-hidden"></div>
          <div class="efftect overflow-hidden"></div>
          <div class="efftect overflow-hidden"></div>
          <div class="efftect overflow-hidden"></div>
          <div class="efftect overflow-hidden"></div>
        </div>
      </div>

      <!--=================================
  Page Header -->
      <div class="inner-header bg-holder"
        style="background-image: url(/frontend/images/banner/inner-header/page-header-01.jpg);">
        <div class="container">
          <div class="row  justify-content-center">
            <div class="col-md-12 text-center">
              <h1 class="title">Sitemap FutureGenIT</h1>
            </div>
          </div>
        </div>
      </div>

      <div class="content-wrapper">


        <section class="bg-black ellipse-top">
          <div class="space-pb ellipse-bottom">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="sticky-top" style="top: 60px;">
                    <div class="container">
      <br/>
        <ul class="list-group">
            <li class="list-group-item"><strong><NuxtLink to="/">Home</NuxtLink></strong></li>
            <li class="list-group-item"><strong><NuxtLink to="/about-us">About Us</NuxtLink></strong></li>
            <li class="list-group-item"><strong><NuxtLink to="/service">Services</NuxtLink></strong></li>
            <li class="list-group-item"><strong><a href="https://clients.futuregenit.com">Domain & Hosting</a></strong></li>
            <li class="list-group-item"><strong><NuxtLink to="/contact-us">Contact</NuxtLink></strong></li>
            <li class="list-group-item">
                <strong>Our Products</strong>
                <ul class="list-group mt-2">
                    <li class="list-group-item" v-for="service in serviceData" :key="service.id"><NuxtLink :to="`/service-details/${service.slug}`">{{ service.name }}</NuxtLink></li>
                    
                </ul>
            </li>
            
        </ul>
    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </section>
        
    

      </div>
    </div>

  </div>
  <Footer />

</template>
 