<template>
 
  <footer class="site-footer footer-dark">
    <div class="footer-main">
      <div class="container">
        <div class="row">
          <div class="col-xl-3 col-md-5">
            <div class="widget widget-address-info">
              <h5 class="widget-title">Where To Find Us</h5>
              <ul class="address-info-list">
                <li><i class="icon"><img class="img-fluid" src="/frontend/images/svg/address-info-contacts.svg" alt="" /></i><span class="info"><span>{{ serviceData.officeAddress }}</span></span></li>
                
                <li><i class="icon"><img class="img-fluid" src="/frontend/images/svg/address-info-headphone.svg"
                      alt="" /></i><span class="info"><span><a class="whatsapp-link" :href="'https://wa.me/' + serviceData.whtsApp" target="_blank" style="color:white;font-size: 24px;"> {{ serviceData.whtsApp }}</a></span>24 hours </span></li>



                      
                <li><i class="icon"><img class="img-fluid" src="/frontend/images/svg/address-info-email.svg" alt="" /></i><span
                    class="info"><span>{{serviceData.email}}</span>24x7 online support</span></li>
              </ul>
            </div>
          </div>
          <div class="col-xl-5 col-md-7">
            <div class="widget">
              
              <div class="widget widget-menu">
                <h6 class="widget-title">Quick Links</h6>
                <ul class="list-unstyled list-col-3 mb-0">
                  <li><NuxtLink to="/">Home</NuxtLink></li>
                  <li><NuxtLink to="/about-us">About us</NuxtLink></li>
                  <li><NuxtLink to="/service">Service</NuxtLink></li>
                  <li><NuxtLink to="/contact-us">Contact</NuxtLink></li>
                  <li><NuxtLink to="/sitemap">Site Map</NuxtLink></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-12 ms-auto">
            <div class="widget widget-info">
              <h5 class="widget-title">Call Center</h5>
              <i class="fab fa-whatsapp" style="font-size: 24px;"></i>  <a class="whatsapp-link" :href="'https://wa.me/' + serviceData.whtsApp" target="_blank" style="color:white;font-size: 24px;"> {{ serviceData.whtsApp }}
    </a>
             
            </div>
            <div class="widget-socail" style="color:white;font-size: 30px;">
              <a target="_blank" :href="serviceData.facebook">
               <i class="fab fa-facebook"></i>  <!-- FontAwesome Facebook icon -->
          </a>
            </div>
          </div>
        </div>

      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <p><nuxt-link class="footer-logo" to="/"><img class="img-fluid" src="/frontend/images/futuregenit-logo.png" style="height:50px;" alt="logo" /></nuxt-link>
            </p>
          </div>
          <div class="col-lg-6 text-lg-end">
            <p>Develop and design by <a href="#">FuturegenIT</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>
</template>


<script setup>
import { ref, watch, onMounted } from "vue";
import axios from "axios";
import { useUserStore } from "~~/stores/user";
import swal from "sweetalert2";
import Navbar from "~/components/Navbar.vue";
import { strict } from "assert";


const serviceData = ref([]);

const callService = async () => {
  
  try {
    const response = await axios.get('/unauthenticate/getSetting');
    if (response.data) {
      serviceData.value = response.data;
    }
  } catch (error) {
    console.error('Error fetching meta data:', error);
  }
};

onMounted(async () => {
  callService();


});

</script>