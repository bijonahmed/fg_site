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
  title: "About US",
  meta: [
    { name: 'description', content: meta.value.description || "" },
    { name: 'keywords', content: meta.value.keywords || "" },
  ],
  link: [
    { rel: 'canonical', href: 'https://futuregenit.com/about-us' },
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
              <h1 class="title">About FutureGenIT</h1>
              <p>Our Expertise. Know more about what we do</p>
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
                    <div class="section-title mb-0">
                      <span class="sub-title"><img class="img-fluid" src="/frontend/images/subtitle-icon.png" alt="" />
                        Our
                        History</span>
                      <h2 class="title">Our History</h2>
                    </div>
                    <p class="mb-5 mb-lg-0 ms-lg-5" style="text-align: justify">About Us - FutureGenIT

                      Founded in 2017, FutureGenIT is a world-class software company committed to delivering innovative
                      and high-quality technological solutions. Based in Dhaka, Bangladesh, our company has become a
                      trusted name in the IT industry, serving clients both locally and globally.

                      At FutureGenIT, we specialize in crafting cutting-edge software that addresses diverse business
                      needs, from small enterprises to large corporations. Our expertise spans across multiple domains,
                      including application development, process automation, and IT consultancy.

                      Driven by a passion for excellence, we prioritize client satisfaction by delivering robust,
                      scalable, and secure software solutions. Our team of dedicated professionals is at the forefront
                      of technology, ensuring that we provide value-driven services that align with modern business
                      trends.

                      FutureGenIT is proud to represent Bangladesh on the global stage, combining innovation,
                      reliability, and expertise to create solutions that empower businesses to achieve their goals.
                      Join us on this journey to shape the future of technology.</p>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </section>
        <!--=================================
    History -->

        <!--=================================
    Our Staff -->
        <section class="space-ptb">
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
        <!--=================================
    Our Staff -->

        <!--=================================
    Our Testimonial -->
        <section class="space-pt testimonial-section overflow-hidden bg-black ellipse-top">
          <div class="space-pb ellipse-bottom">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-md-10">
                  <div class="section-title text-center">
                    
                    <h2 class="title"> Successfully delivered 260+ projects to over 100 clients worldwide.</h2>
                  </div>
                </div>
              </div>
              <div class="row justify-content-start">
                <div class="col-md-11">
                  <div class="owl-carousel slider-overflow" data-cursor-type="text" data-custom-text="Drag"
                    data-nav-arrow="false" data-items="2" data-lg-items="1" data-md-items="1" data-sm-items="1"
                    data-space="50">
                    <div class="item">
                      <div class="testimonial-wrapper testimonial-style-2">
                        <div class="testimonial-ratings">
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-regular fa-star"></i>
                        </div>
                        <div class="testimonial-quote"><img class="img-fluid" src="/frontend/images/quote-icon-01.png"
                            alt="" />
                        </div>
                        <div class="testimonial-content">
                          <p>The IT-Hub database has been one of our current sources for recruitment, backed by a very
                            experienced team who would go out of their way to make sure that requests are taken ahead.
                          </p>
                        </div>
                        <div class="testimonial-author">
                          <div class="author-info">
                            <h6 class="author-name">Key Benefits</h6>
                            <span class="author-position">Administrator</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="testimonial-wrapper testimonial-style-2">
                        <div class="testimonial-ratings">
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-regular fa-star"></i>
                        </div>
                        <div class="testimonial-quote"><img class="img-fluid" src="/frontend/images/quote-icon-01.png"
                            alt="" />
                        </div>
                        <div class="testimonial-content">
                          <p>The IT-Hub database has been one of our current sources for recruitment, backed by a very
                            experienced team who would go out of their way to make sure that requests are taken ahead.
                          </p>
                        </div>
                        <div class="testimonial-author">
                          <div class="author-info">
                            <h6 class="author-name">Joanna williams</h6>
                            <span class="author-position">Consultant</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="testimonial-wrapper testimonial-style-2">
                        <div class="testimonial-ratings">
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-regular fa-star"></i>
                        </div>
                        <div class="testimonial-quote"><img class="img-fluid" src="/frontend/images/quote-icon-01.png"
                            alt="" />
                        </div>
                        <div class="testimonial-content">
                          <p>The IT-Hub database has been one of our current sources for recruitment, backed by a very
                            experienced team who would go out of their way to make sure that requests are taken ahead.
                          </p>
                        </div>
                        <div class="testimonial-author">
                          <div class="author-info">
                            <h6 class="author-name">Anne Smith</h6>
                            <span class="author-position">Officer</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="testimonial-wrapper testimonial-style-2">
                        <div class="testimonial-ratings">
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-regular fa-star"></i>
                        </div>
                        <div class="testimonial-quote"><img class="img-fluid" src="/frontend/images/quote-icon-01.png"
                            alt="" />
                        </div>
                        <div class="testimonial-content">
                          <p>The IT-Hub database has been one of our current sources for recruitment, backed by a very
                            experienced team who would go out of their way to make sure that requests are taken ahead.
                          </p>
                        </div>
                        <div class="testimonial-author">
                          <div class="author-info">
                            <h6 class="author-name">John Doe</h6>
                            <span class="author-position">Director</span>
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

      </div>
    </div>

  </div>
  <Footer />

</template>
 