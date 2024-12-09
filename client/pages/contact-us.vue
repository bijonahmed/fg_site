<script setup>
import { ref, watch, onMounted } from "vue";
import axios from "axios";
import { useUserStore } from "~~/stores/user";
import swal from "sweetalert2";
import Navbar from "~/components/Navbar.vue";
import { strict } from "assert";

const meta = ref({ description: '', keywords: '' });
const router = useRouter()

const form = ref({
  name: '',
  email: '',
  phone: '',
  message: ''
})

const errors = ref({});
const submitForm = async () => {
  try {
    errors.value = {}
    const response = await axios.post('/unauthenticate/contact', form.value)

    form.value = {
      name: '',
      email: '',
      phone: '',
      message: ''
    }


    router.push('/thankyou')
  } catch (error) {
    // Handle backend validation errors
    if (error.response && error.response.status === 422) {
      errors.value = error.response.data.errors
    } else {
     // alert('Failed to send message. Please try again.')
    }
  }
}

onMounted(async () => {
    
});
// Set head metadata dynamically
useHead(() => ({
    title: "Contact Us",
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
    
            <div class="inner-header bg-holder" style="background-image: url(/frontend/images/banner/inner-header/page-header-01.jpg);">
    
                <div class="container">
    
                    <div class="row  justify-content-center">
    
                        <div class="col-md-12 text-center">
    
                            <h1 class="title">Contact us</h1>
    
                            <p>Let success motivate you.</p>
    
                        </div>
    
                    </div>
    
                </div>
    
            </div>
    
            <div class="content-wrapper">
    
                <!--=================================
    
          Contact Us -->
    
                <section class="space-ptb z-index-2">
    
                    <div class="container">
    
                        <div class="row">
    
                            <div class="col-xl-6 col-lg-5">
    
                                <div class="section-title is-sticky">
    
                                    <span class="sub-title"><img class="img-fluid" src="/frontend/images/subtitle-icon.png" alt=""> Our
    
                            Direction</span>
    
                                    <h2 class="title"> Get in touch with us. We love talking about digital strategy </h2>
    
                                    <p>So, make the decision to move forward. Commit your decision to paper, just to bring it into focus. Then, go for it!</p>
    
                                </div>
    
                            </div>
    
                            <div class="col-xl-6 col-lg-7">
    
                                <div class="location-items grid-wrapper grid-xl-2 grid-lg-2 grid-md-2 grid-sm-2 grid-xs-1">
    
                                    <div class="location-wrapper location-style-1 bg-black">
    
                                        <div class="location-inner">
    
                                            <div class="location-info">
    
                                                <div class="city-image">
    
                                                    <img class="img-fluid" src="/frontend/images/city-shanghai.png" alt="">
    
                                                </div>
    
                                                <div class="city-info">
    
                                                    <h5 class="city-name"><a href="#">Bangladesh</a></h5>
    
                                                    <div class="city-location">
    
                                                        <div class="location-item">
    
                                                            <i class="icon"><img class="img-fluid" src="/frontend/images/icon-location.png"
    
                                          alt=""></i>
    
                                                            <div class="list-label">Gulsan-78, House-2, Dhaka, Bangladesh</div>
    
                                                        </div>
    
                                                        <div class="location-item">
    
                                                            <i class="icon"><img class="img-fluid" src="/frontend/images/icon-phone-call.png"
    
                                          alt=""></i>
    
                                                            <div class="list-label">+(123) 456-7890</div>
    
                                                        </div>
    
                                                        <div class="location-item">
    
                                                            <i class="icon"><img class="img-fluid" src="/frontend/images/icon-email.png" alt=""></i>
    
                                                            <div class="list-label">letstalk@worthy.com</div>
    
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
    
          Contact Us -->
    
                <!--=================================
    
          Contact Us -->
    
                <section class="space-pt ellipse-top bg-black">
    
                    <div class="space-pb ellipse-bottom">
    
                        <div class="container">
    
                            <div class="row justify-content-center">
    
                                <div class="col-md-10">
    
                                    <div class="section-title text-center">
    
                                        <span class="sub-title d-flex justify-content-center"><img class="img-fluid"
    
                                src="/frontend/images/subtitle-icon.png" alt=""> contact us</span>
    
                                        <h2 class="title"> Need assistance? please fill the form </h2>
    
                                    </div>
    
                                    <div class="form-wrapper">
    
                                      <form @submit.prevent="submitForm" class="contact-form form-style-border">
    <div class="row">
      <div class="col-md-4">
        <input
          v-model="form.name"
          type="text"
          class="form-control"
          placeholder="Name"
          aria-label="Name"
          :class="{'is-invalid': errors.name}"
        />
        <div v-if="errors.name" class="invalid-feedback">{{ errors.name[0] }}</div>
      </div>

      <div class="col-md-4">
        <input
          v-model="form.email"
          type="email"
          class="form-control"
          placeholder="Email"
          aria-label="Email"
          :class="{'is-invalid': errors.email}"
        />
        <div v-if="errors.email" class="invalid-feedback">{{ errors.email[0] }}</div>
      </div>

      <div class="col-md-4">
        <input
          v-model="form.phone"
          type="text"
          class="form-control"
          id="phone"
          placeholder="Phone"
          :class="{'is-invalid': errors.phone}"
        />
        <div v-if="errors.phone" class="invalid-feedback">{{ errors.phone[0] }}</div>
      </div>

      <div class="col-lg-12">
        <textarea
          v-model="form.message"
          class="form-control"
          rows="6"
          placeholder="Message"
          :class="{'is-invalid': errors.message}"
         
        ></textarea>
        <div v-if="errors.message" class="invalid-feedback">{{ errors.message[0] }}</div>
      </div>

      <div class="col-lg-12">
        <button type="submit" class="btn btn-effect">
          <span>Send Message</span>
          <svg width="20" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_59_253)">
              <path
                d="M19.4854 11.4293L17.0513 12.221C13.1214 13.4993 10.3036 16.9595 9.84784 21.0668C9.49371 16.981 6.71926 13.5081 2.81255 12.2604L0.210283 11.4293"
                stroke="white"
                stroke-width="2"
              />
              <path d="M9.83594 20.8889L9.83594 0" stroke="white" stroke-width="2" />
            </g>
            <defs>
              <clipPath id="clip0_59_253">
                <rect width="21.3333" height="20" fill="white" transform="translate(20) rotate(90)" />
              </clipPath>
            </defs>
          </svg>
        </button>
      </div>
    </div>
  </form>
    
                                    </div>
    
                                </div>
    
                            </div>
    
                        </div>
    
                    </div>
    
                </section>
    
                <!--=================================
    
          Contact Us -->
    
            </div>
    
        </div>
    
    </div>
    
    <Footer />
</template>
<style scoped>
.is-invalid {
  border-color: red;
}

.invalid-feedback {
  color: red;
  font-size: 12px;
}
</style>