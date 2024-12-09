<script setup>
import { ref, watch, onMounted } from "vue";
import axios from "axios";
import { useUserStore } from "~~/stores/user";
import swal from "sweetalert2";
import Navbar from "~/components/Navbar.vue";
import { strict } from "assert";

const meta = ref({ description: '', keywords: '' });

onMounted(async () => {
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
  title: "Thankyou",
  meta: [
    { name: 'description', content: meta.value.description || "" },
    { name: 'keywords', content: meta.value.keywords || "" },
  ],
}));
</script>

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
              <h1 class="title">Thankyou</h1>
            </div>
          </div>
        </div>
      </div>

      <div class="content-wrapper">


        <section class="space-pt bg-black ellipse-top">
          <div class="space-pb ellipse-bottom">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="sticky-top" style="top: 80px;">
                    <h1>Thank you! Your email has been successfully sent.</h1>
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
 