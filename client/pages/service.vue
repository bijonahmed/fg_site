

<template>
<title>Services</title>
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
      <!--=================================
        Page Header -->
      <div class="inner-header bg-holder"
        style="background-image: url(/frontend/images/banner/inner-header/page-header-01.jpg);">
        <div class="container">
          <div class="row  justify-content-center">
            <div class="col-md-12 text-center">
              <h1 class="title">Futuregenit Services</h1>
         
            </div>
          </div>
        </div>
      </div>

      <div class="content-wrapper">

        <!--=================================
          Services -->
        <section class="space-ptb ellipse-bottom">
          <div class="container">


              


            <div class="row justify-content-start">
              <div class="col-lg-12">
                <!-- =============== Product list start here ============== -->
                <div class="pro_list_item" v-for="service in serviceData"
                :key="service.id">
                  <NuxtLink :to="`/service-details/${service.slug}`">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="service_box">
                          <div class="laptop_image">
                            <img src="/frontend/laptop.png" alt="image" class="img-fluid">
                            <img :src="service.thumbnail" :alt="meta?.keywords" class="img-fluid lp_img">
                          </div>
                          <div class="m_image_box">
                            <div class="mobile_image">
                              <img src="/frontend/mobile.png" alt="" class="img-fluid">
                              <img :src="service.mobile_image" :alt="meta?.keywords" class="img-fluid m_image">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-8">
                        <div class="service_content">
                          <NuxtLink :to="`/service-details/${service.slug}`"><h4>{{ service.name }}</h4></NuxtLink>
                          <p>{{ service.description }}</p>
                         <NuxtLink :to="`/service-details/${service.slug}`"> <p>More.....</p></NuxtLink>
                        </div>
                      </div>
                    </div>
                  </NuxtLink>
                </div>
                 
              </div>
            </div>
          </div>
        </section>


        <!-- ================================================================================= -->
        <section class="space-ptb ellipse-bottom">
          <div class="container">
            <div class="row justify-content-start">
              <div class="col-lg-12">
                <div class="services grid-wrapper grid-xl-4 grid-lg-3 grid-md-2 grid-sm-1">

                  <div class="service-wrapper service-style-1">
                    <div class="service-inner">
                      <div class="service-icon">
                        <img class="img-fluid" src="/frontend/images/svg/services/Information-Security.svg" :alt="meta?.keywords">
                      </div>
                      <div class="bg-icon">
                        <img class="img-fluid" src="/frontend/images/svg/services/color-icon/Information-Security.svg"
                        :alt="meta?.keywords">
                      </div>
                      <div class="service-content">
                        <h5 class="service-title">Information Security</h5>
                        <p>Remind yourself of someone you know who died suddenly and the fact that there is no guarantee
                          that tomorrow</p>
                        <div class="service-links">
                          <a class="btn-arrow" href="#"><svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <g clip-path="url(#clip0_923_133)">
                                <path
                                  d="M8.70801 0.959961L9.29825 2.7665C10.2512 5.68321 12.8308 7.77453 15.8928 8.1128C12.8468 8.37564 10.2578 10.4348 9.3276 13.3343L8.70801 15.2657"
                                  stroke="inherit" stroke-width="2" />
                                <path d="M15.7602 8.12158H0.1875" stroke="inherit" stroke-width="2" />
                              </g>
                              <defs>
                                <clipPath id="clip0_923_133">
                                  <rect width="15.904" height="14.8437" fill="inherit"
                                    transform="translate(0.1875 0.578125)" />
                                </clipPath>
                              </defs>
                            </svg></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="service-wrapper service-style-1">
                    <div class="service-inner">
                      <div class="service-icon">
                        <img class="img-fluid" src="/frontend/images/svg/services/Data-Synchronization.svg" :alt="meta?.keywords">
                      </div>
                      <div class="bg-icon">
                        <img class="img-fluid" src="/frontend/images/svg/services/color-icon/Data-Synchronization.svg"
                        :alt="meta?.keywords">
                      </div>
                      <div class="service-content">
                        <h5 class="service-title">Data Synchronization</h5>
                        <p>Remind yourself of someone you know who died suddenly and the fact that there is no guarantee
                          that tomorrow</p>
                        <div class="service-links">
                          <a class="btn-arrow" href="#"><svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <g clip-path="url(#clip0_923_134)">
                                <path
                                  d="M8.70801 0.959961L9.29825 2.7665C10.2512 5.68321 12.8308 7.77453 15.8928 8.1128C12.8468 8.37564 10.2578 10.4348 9.3276 13.3343L8.70801 15.2657"
                                  stroke="inherit" stroke-width="2" />
                                <path d="M15.7602 8.12158H0.1875" stroke="inherit" stroke-width="2" />
                              </g>
                              <defs>
                                <clipPath id="clip0_923_134">
                                  <rect width="15.904" height="14.8437" fill="inherit"
                                    transform="translate(0.1875 0.578125)" />
                                </clipPath>
                              </defs>
                            </svg></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="service-wrapper service-style-1">
                    <div class="service-inner">
                      <div class="service-icon">
                        <img class="img-fluid" src="/frontend/images/svg/services/Mobile-Platforms.svg" :alt="meta?.keywords">
                      </div>
                      <div class="bg-icon">
                        <img class="img-fluid" src="/frontend/images/svg/services/color-icon/Mobile-Platforms.svg"
                          alt="#">
                      </div>
                      <div class="service-content">
                        <h5 class="service-title">Mobile Platforms</h5>
                        <p>There is really no magic to it and it’s not reserved only for a select few people. As such,
                          success really has nothing.</p>
                        <div class="service-links">
                          <a class="btn-arrow" href="#"><svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <g clip-path="url(#clip0_923_135)">
                                <path
                                  d="M8.70801 0.959961L9.29825 2.7665C10.2512 5.68321 12.8308 7.77453 15.8928 8.1128C12.8468 8.37564 10.2578 10.4348 9.3276 13.3343L8.70801 15.2657"
                                  stroke="inherit" stroke-width="2" />
                                <path d="M15.7602 8.12158H0.1875" stroke="inherit" stroke-width="2" />
                              </g>
                              <defs>
                                <clipPath id="clip0_923_135">
                                  <rect width="15.904" height="14.8437" fill="inherit"
                                    transform="translate(0.1875 0.578125)" />
                                </clipPath>
                              </defs>
                            </svg></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="service-wrapper service-style-1">
                    <div class="service-inner">
                      <div class="service-icon">
                        <img class="img-fluid" src="/frontend/images/svg/services/Process-Automation.svg" :alt="meta?.keywords">
                      </div>
                      <div class="bg-icon">
                        <img class="img-fluid" src="/frontend/images/svg/services/color-icon/Process-Automation.svg"
                        :alt="meta?.keywords">
                      </div>
                      <div class="service-content">
                        <h5 class="service-title">Process Automation</h5>
                        <p>It must come from the natural product of your desire to achieve something and your belief
                          that you are capable.</p>
                        <div class="service-links">
                          <a class="btn-arrow" href="#"><svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <g clip-path="url(#clip0_923_136)">
                                <path
                                  d="M8.70801 0.959961L9.29825 2.7665C10.2512 5.68321 12.8308 7.77453 15.8928 8.1128C12.8468 8.37564 10.2578 10.4348 9.3276 13.3343L8.70801 15.2657"
                                  stroke="inherit" stroke-width="2" />
                                <path d="M15.7602 8.12158H0.1875" stroke="inherit" stroke-width="2" />
                              </g>
                              <defs>
                                <clipPath id="clip0_923_136">
                                  <rect width="15.904" height="14.8437" fill="inherit"
                                    transform="translate(0.1875 0.578125)" />
                                </clipPath>
                              </defs>
                            </svg></a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="service-wrapper service-style-1">
                    <div class="service-inner">
                      <div class="service-icon">
                        <img class="img-fluid" src="/frontend/images/svg/services/Event-Processing.svg" :alt="meta?.keywords">
                      </div>
                      <div class="bg-icon">
                        <img class="img-fluid" src="/frontend/images/svg/services/color-icon/Event-Processing.svg"
                        :alt="meta?.keywords">
                      </div>
                      <div class="service-content">
                        <h5 class="service-title">Event Processing</h5>
                        <p>There is really no magic to it and it’s not reserved only for a select few people. As such,
                          success really has nothing.</p>
                        <div class="service-links">
                          <a class="btn-arrow" href="#"><svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <g clip-path="url(#clip0_923_137)">
                                <path
                                  d="M8.70801 0.959961L9.29825 2.7665C10.2512 5.68321 12.8308 7.77453 15.8928 8.1128C12.8468 8.37564 10.2578 10.4348 9.3276 13.3343L8.70801 15.2657"
                                  stroke="inherit" stroke-width="2" />
                                <path d="M15.7602 8.12158H0.1875" stroke="inherit" stroke-width="2" />
                              </g>
                              <defs>
                                <clipPath id="clip0_923_137">
                                  <rect width="15.904" height="14.8437" fill="inherit"
                                    transform="translate(0.1875 0.578125)" />
                                </clipPath>
                              </defs>
                            </svg></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="service-wrapper service-style-1">
                    <div class="service-inner">
                      <div class="service-icon">
                        <img class="img-fluid" src="/frontend/images/svg/services/Content-Management.svg" :alt="meta?.keywords">
                      </div>
                      <div class="bg-icon">
                        <img class="img-fluid" src="/frontend/images/svg/services/color-icon/Content-Management.svg"
                        :alt="meta?.keywords">
                      </div>
                      <div class="service-content">
                        <h5 class="service-title">Content Management</h5>
                        <p>There are basically six key areas to higher achievement. Some people will tell you there are
                          four while others.</p>
                        <div class="service-links">
                          <a class="btn-arrow" href="#"><svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <g clip-path="url(#clip0_923_138)">
                                <path
                                  d="M8.70801 0.959961L9.29825 2.7665C10.2512 5.68321 12.8308 7.77453 15.8928 8.1128C12.8468 8.37564 10.2578 10.4348 9.3276 13.3343L8.70801 15.2657"
                                  stroke="inherit" stroke-width="2" />
                                <path d="M15.7602 8.12158H0.1875" stroke="inherit" stroke-width="2" />
                              </g>
                              <defs>
                                <clipPath id="clip0_923_138">
                                  <rect width="15.904" height="14.8437" fill="inherit"
                                    transform="translate(0.1875 0.578125)" />
                                </clipPath>
                              </defs>
                            </svg></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="service-wrapper service-style-1">
                    <div class="service-inner">
                      <div class="service-icon">
                        <img class="img-fluid" src="/frontend/images/svg/services/Content-Management.svg" :alt="meta?.keywords">
                      </div>
                      <div class="bg-icon">
                        <img class="img-fluid" src="/frontend/images/svg/services/color-icon/Content-Management.svg"
                        :alt="meta?.keywords">
                      </div>
                      <div class="service-content">
                        <h5 class="service-title">Meet the our team</h5>
                        <p>There are basically six key areas to higher achievement. Some people will tell you there are
                          four while others.</p>
                        <div class="service-links">
                          <a class="btn-arrow" href="#"><svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <g clip-path="url(#clip0_923_139)">
                                <path
                                  d="M8.70801 0.959961L9.29825 2.7665C10.2512 5.68321 12.8308 7.77453 15.8928 8.1128C12.8468 8.37564 10.2578 10.4348 9.3276 13.3343L8.70801 15.2657"
                                  stroke="inherit" stroke-width="2" />
                                <path d="M15.7602 8.12158H0.1875" stroke="inherit" stroke-width="2" />
                              </g>
                              <defs>
                                <clipPath id="clip0_923_139">
                                  <rect width="15.904" height="14.8437" fill="inherit"
                                    transform="translate(0.1875 0.578125)" />
                                </clipPath>
                              </defs>
                            </svg></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="service-wrapper service-style-1">
                    <div class="service-inner">
                      <div class="service-icon">
                        <img class="img-fluid" src="/frontend/images/svg/services/Content-Management.svg" :alt="meta?.keywords">
                      </div>
                      <div class="bg-icon">
                        <img class="img-fluid" src="/frontend/images/svg/services/color-icon/Content-Management.svg"
                        :alt="meta?.keywords">
                      </div>
                      <div class="service-content">
                        <h5 class="service-title">Our challenges</h5>
                        <p>There are basically six key areas to higher achievement. Some people will tell you there are
                          four while others.</p>
                        <div class="service-links">
                          <a class="btn-arrow" href="#"><svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <g clip-path="url(#clip0_923_140)">
                                <path
                                  d="M8.70801 0.959961L9.29825 2.7665C10.2512 5.68321 12.8308 7.77453 15.8928 8.1128C12.8468 8.37564 10.2578 10.4348 9.3276 13.3343L8.70801 15.2657"
                                  stroke="inherit" stroke-width="2" />
                                <path d="M15.7602 8.12158H0.1875" stroke="inherit" stroke-width="2" />
                              </g>
                              <defs>
                                <clipPath id="clip0_923_140">
                                  <rect width="15.904" height="14.8437" fill="inherit"
                                    transform="translate(0.1875 0.578125)" />
                                </clipPath>
                              </defs>
                            </svg></a>
                        </div>
                      </div>
                    </div>
                  </div>


                </div>
              </div>
            </div>
          </div>
        </section>
        <!--=================================
          Services -->

      </div>
    </div>

  </div>
  <Footer />

</template>
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
    const response = await axios.get('/meta-services');
    if (response.data) {
      meta.value = response.data;
    }
  } catch (error) {
    console.error('Error fetching meta data:', error);
  }

});
// Set head metadata dynamically
useHead(() => ({
  title: "Our Services",
  meta: [
    { name: 'description', content: meta.value.description || "" },
    { name: 'keywords', content: meta.value.keywords || "" },
  ],
  link: [
    { rel: 'canonical', href: 'https://futuregenit.com/service' },
  ],
}));
</script>
<style>
</style>