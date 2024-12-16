<script setup>
import { ref, watch, onMounted } from "vue";
import axios from "axios";
import { useUserStore } from "~~/stores/user";
import swal from "sweetalert2";
import Navbar from "~/components/Navbar.vue";
import { strict } from "assert";

const meta = ref({ description: '', keywords: '' });
const marqueeList = ref([]);
const serviceList = ref([]);

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
  title: meta.value.title || "",
  meta: [
    { name: 'description', content: meta.value.description || "" },
    { name: 'keywords', content: meta.value.keywords || "" },
  ],
  link: [
    { rel: 'canonical', href: 'https://futuregenit.com/' },
  ],
}));
</script>


<template>
  <client-only>
    <div id="cursor">
      <div class="cursor__circle"></div>
    </div>
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

        <!--=================================  Main Banner -->
        <div class="main-banner main-banner-1">
          <div class="banner-inner">
            <img class="img-fluid banner-bg-one" src="/frontend/images/banner/banner-01/banner-bg-01.png" alt="#">

            <div class="container">
              <div class="row">
                <center>
                  <h1 class="banner-title">FutureGen IT</h1>
                </center>
                <div class="col-md-6">
                  <img class="img-fluid rotate rotate-img" src="/frontend/images/banner/banner-01/banner-shape-01.png"
                    alt="#">
                </div>
                <div class="col-md-6 ms-auto">
                  <div class="banner-content">
                    <h2>Creative solutions real results</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="space-medium-ptb_">
          <div class="container-fluid p-0">
            <div class="row g-0">
              <div class="col-md-12">
                <div class="marquee-wrapper">
                  <div class="marquee-inner">
                    <div class="marquee-item">
                      <span class="icon"><img class="img-fluid" src="/frontend/images/client-logo/brand-icon1.png"
                          alt="" /></span>
                      <span class="title">Web Design</span>
                    </div>
                    <div class="marquee-item">
                      <span class="icon"><img class="img-fluid" src="/frontend/images/client-logo/brand-icon2.png"
                          alt="" /></span>
                      <span class="title">UI/UX Design</span>
                    </div>
                    <div class="marquee-item">
                      <span class="icon"><img class="img-fluid" src="/frontend/images/client-logo/brand-icon3.png"
                          alt="" /></span>
                      <span class="title">Developer</span>
                    </div>
                    <div class="marquee-item">
                      <span class="icon"><img class="img-fluid" src="/frontend/images/client-logo/brand-icon4.png"
                          alt="" /></span>
                      <span class="title">ISO Developer</span>
                    </div>
                    <div class="marquee-item">
                      <span class="icon"><img class="img-fluid" src="/frontend/images/client-logo/brand-icon5.png"
                          alt="" /></span>
                      <span class="title">Digital Agency</span>
                    </div>
                    <div class="marquee-item">
                      <span class="icon"><img class="img-fluid" src="/frontend/images/client-logo/brand-icon1.png"
                          alt="" /></span>
                      <span class="title">Web Design</span>
                    </div>
                    <div class="marquee-item">
                      <span class="icon"><img class="img-fluid" src="/frontend/images/client-logo/brand-icon2.png"
                          alt="" /></span>
                      <span class="title">UI/UX Design</span>
                    </div>
                    <div class="marquee-item">
                      <span class="icon"><img class="img-fluid" src="/frontend/images/client-logo/brand-icon3.png"
                          alt="" /></span>
                      <span class="title">Developer</span>
                    </div>
                    <div class="marquee-item">
                      <span class="icon"><img class="img-fluid" src="/frontend/images/client-logo/brand-icon4.png"
                          alt="" /></span>
                      <span class="title">ISO Developer</span>
                    </div>
                    <div class="marquee-item">
                      <span class="icon"><img class="img-fluid" src="/frontend/images/client-logo/brand-icon5.png"
                          alt="" /></span>
                      <span class="title">Digital Agency</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--=================================
    Client Logo -->
    
        <!--=================================
    Our Services -->
        <section class="space-pt bg-black z-index-2 ellipse-top">
          <div class="space-pb ellipse-bottom">
            <div class="container">
              <div class="row justify-content-between">
                <div class="col-xxl-5 col-xl-5 mb-5 mb-xl-0">
                  <div class="sticky-top" style="top: 80px;">
                    <div class="section-title">
                      <span class="sub-title"><img class="img-fluid" src="/frontend/images/subtitle-icon.png" alt="">
                        Our
                        Steps</span>
                      <h2 class="title">FuturegenIT</h2>
                    </div>
                    <div class="ps-xxl-5 ms-0 ms-md-5">
                      <p class="text-justify" style="text-align: justify">FuturegenIT is a world-class, renowned
                        software company dedicated to delivering cutting-edge solutions to businesses across various
                        industries. With a team of expert developers and innovative thinkers, we provide scalable and
                        efficient software that drives success. Our commitment to quality, reliability, and customer
                        satisfaction sets us apart in the competitive software market. We offer a range of services,
                        including web development, mobile applications, and cloud solutions. FuturegenIT continues to
                        lead the way in shaping the future of technology with excellence and expertise.</p>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-6 col-xl-7">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="services grid-wrapper">
                        <div class="service-wrapper service-style-1">
                          <div class="service-inner">
                            <div class="service-icon">
                              <img class="img-fluid" src="/frontend/images/svg/services/Information-Security.svg"
                                alt="#">
                            </div>
                            <div class="bg-icon">
                              <img class="img-fluid"
                                src="/frontend/images/svg/services/color-icon/Information-Security.svg" alt="#">
                            </div>
                            <div class="service-content">
                              <h5 class="service-title">Information Security</h5>
                              <p style="text-align: justify;">
                                Information Security at FuturegenIT ensures the protection of sensitive data through
                                advanced encryption, robust firewalls, and proactive monitoring. We safeguard your
                                assets with cutting-edge technology and best practices to prevent unauthorized access
                                and data breaches.</p>
                              <div class="service-links">

                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="service-wrapper service-style-1">
                          <div class="service-inner">
                            <div class="service-icon">
                              <img class="img-fluid" src="/frontend/images/svg/services/Data-Synchronization.svg"
                                alt="#">
                            </div>
                            <div class="bg-icon">
                              <img class="img-fluid"
                                src="/frontend/images/svg/services/color-icon/Data-Synchronization.svg" alt="#">
                            </div>
                            <div class="service-content">
                              <h5 class="service-title">Data Synchronization</h5>
                              <p style="text-align: justify;">
                                Data Synchronization at FuturegenIT ensures seamless real-time data flow across systems.
                                We optimize your data management, ensuring consistency and accuracy, whether on-site or
                                in the cloud, for enhanced operational efficiency.</p>
                              <div class="service-links">

                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="service-wrapper service-style-1">
                          <div class="service-inner">
                            <div class="service-icon">
                              <img class="img-fluid" src="/frontend/images/svg/services/Mobile-Platforms.svg" alt="#">
                            </div>
                            <div class="bg-icon">
                              <img class="img-fluid" src="/frontend/images/svg/services/color-icon/Mobile-Platforms.svg"
                                alt="#">
                            </div>
                            <div class="service-content">
                              <h5 class="service-title">Mobile Platforms</h5>
                              <p style="text-align: justify">FuturegenIT excels in developing innovative mobile
                                platforms, creating seamless, user-friendly apps for both Android and iOS. We help
                                businesses reach their audience on-the-go with robust, scalable solutions.</p>
                              <div class="service-links">

                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="services grid-wrapper service-top-space">
                        <div class="service-wrapper service-style-1">
                          <div class="service-inner">
                            <div class="service-icon">
                              <img class="img-fluid" src="/frontend/images/svg/services/Process-Automation.svg" alt="#">
                            </div>
                            <div class="bg-icon">
                              <img class="img-fluid"
                                src="/frontend/images/svg/services/color-icon/Process-Automation.svg" alt="#">
                            </div>
                            <div class="service-content">
                              <h5 class="service-title">Process Automation</h5>
                              <p style="text-align: justify">FuturegenIT specializes in process automation, streamlining
                                workflows to enhance efficiency and reduce manual errors. Our solutions optimize
                                business operations, saving time and cost.</p>
                              <div class="service-links">

                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="service-wrapper service-style-1">
                          <div class="service-inner">
                            <div class="service-icon">
                              <img class="img-fluid" src="/frontend/images/svg/services/Mobile-Platforms.svg" alt="#">
                            </div>
                            <div class="bg-icon">
                              <img class="img-fluid" src="/frontend/images/svg/services/color-icon/Mobile-Platforms.svg"
                                alt="#">
                            </div>
                            <div class="service-content">
                              <h5 class="service-title">IOS Development</h5>
                              <p style="text-align: justify">FuturegenIT offers expert iOS development, creating
                                high-performance apps for Apple devices. We deliver user-friendly, innovative, and
                                secure mobile solutions tailored to your business needs.</p>
                              <div class="service-links">
                                <a class="btn-arrow" href="#"><svg width="17" height="16" viewBox="0 0 17 16"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
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
                              <img class="img-fluid" src="/frontend/images/svg/services/Process-Automation.svg" alt="#">
                            </div>
                            <div class="bg-icon">
                              <img class="img-fluid"
                                src="/frontend/images/svg/services/color-icon/Process-Automation.svg" alt="#">
                            </div>
                            <div class="service-content">
                              <h5 class="service-title">Device Develoment</h5>
                              <p style="text-align: justify">FuturegenIT specializes in device development, including
                                fingerprint scanners, door devices, and access control systems. We provide innovative,
                                secure, and reliable solutions to enhance your security infrastructure.</p>
                              <div class="service-links">
                                <a class="btn-arrow" href="#"><svg width="17" height="16" viewBox="0 0 17 16"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
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
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!--=================================
    Our Staff -->
        <section class="space-pb bg-black z-index-2">
          <div class="container">
            <div class="row">
              <div class="col-xxl-6 col-lg-8">
                <div class="section-title mb-lg-0">
                  <span class="sub-title"><img class="img-fluid" src="/frontend/images/subtitle-icon.png" alt=""> Our
                    TEAM</span>
                  <h2 class="title mb-0">Our team is friendly, talkative, and fully reliable.</h2>
                </div>
              </div>
              <div class="col-xxl-6 col-lg-4 align-self-end">
               
              </div>
            </div>

            <div class="row mt-xl-5 pt-5">
              <div class="col-md-12">
                <div class="team-boxs grid-wrapper grid-xl-4 grid-lg-3 grid-md-2 grid-sm-2 grid-xs-1">
                  <div class="team-item team-style-1">
                    <div class="team-img">
                      <img class="img-fluid" src="/frontend/images/team/mamun.jpg" alt="" />
                    </div>
                    <div class="team-info">
                      <a href="team-detail.html" class="team-title">Mamunur Rashid</a>
                      <span class="team-destination">Co-Founder & CEO</span>
                      
                    </div>
                  </div>
                  <div class="team-item team-style-1">
                    <div class="team-img">
                      <img class="img-fluid" src="/frontend/images/team/bijon.png" alt="" />
                    </div>
                    <div class="team-info">
                      <a href="team-detail.html" class="team-title">Md. Gazi Giash Uddin</a>
                      <span class="team-destination">Co-Founder & Software Programmer</span>
                   
                    </div>
                  </div>

                  <div class="team-item team-style-1">
                    <div class="team-img">
                      <img class="img-fluid" src="/frontend/images/team/sam.png" alt="" />
                    </div>
                    <div class="team-info">
                      <a href="team-detail.html" class="team-title">Jiwemeto Samuel</a>
                      <span class="team-destination">Chief Advisor</span>
                   
                    </div>
                  </div>

                  <div class="team-item team-style-1">
                    <div class="team-img">
                      <img class="img-fluid" src="/frontend/images/team/kashem_ali.png" alt="" />
                     
                    </div>
                    <div class="team-info">
                      <a href="team-detail.html" class="team-title">Kashem Ali</a>
                      <span class="team-destination">Software Architecture </span>
                    
                    </div>
                  </div>
                  <div class="team-item team-style-1">
                    <div class="team-img">
                      <img class="img-fluid" src="/frontend/images/team/pronoy.png" alt="" />
                    
                    </div>
                    <div class="team-info">
                      <a href="team-detail.html" class="team-title">Pronoy</a>
                      <span class="team-destination">Junior Developer</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </section>
      </div>

    </div>
    <Footer />
  </client-only>
</template>
