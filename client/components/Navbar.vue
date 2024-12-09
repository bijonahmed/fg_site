<template>
    <header class="header header-default header-sticky header-absolute">
        <div class="header-inner">
            <div class="site-logo">
                <NuxtLink class="navbar-brand" to="/"><img class="img-fluid" src="/frontend/images/futuregenit-logo.png"
                        alt="logo" style="height:50px;" /></NuxtLink>
            </div>
            <div class="site-menu d-none d-xl-block">
                <ul class="main-menu">
                    <li class="nav-item" :class="{ active: $route.path === '/' }">
                        <NuxtLink class="nav-link" to="/">Home </NuxtLink>
                    </li>
                    <li class="nav-item" :class="{ active: $route.path === '/service' }">
                        <NuxtLink class="nav-link" to="/service">Service</NuxtLink>
                    </li>

                    <li class="nav-item">
                        <a href="https://clients.futuregenit.com/" target="_blank" class="nav-link">Domain Hosting</a>
                    </li>
                    <li class="nav-item" :class="{ active: $route.path === '/about-us' }">
                        <NuxtLink class="nav-link" to="/about-us">About Us</NuxtLink>
                    </li>
                    <!-- <li class="nav-item" :class="{ active: $route.path === '/faqs' }"><NuxtLink class="nav-link" to="/faqs">FAQs</NuxtLink></li> -->
                    <li class="nav-item" :class="{ active: $route.path === '/contact-us' }">
                        <NuxtLink class="nav-link" to="/contact-us">Contact Us</NuxtLink>
                    </li>
                </ul>
            </div>

            <div class="site-action d-none d-xl-block">
                <div class="action-hamburger">
                    <a class="hamburger" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                        aria-controls="offcanvasRight">
                        <span class="hamburger-container">
                            <span class="hamburger-inner"></span>
                            <span class="hamburger-hidden"></span>
                        </span>
                    </a>
                </div>
            </div>

            <div class="mobile-action d-block d-xl-none">
                <div class="mobile-hamburger">
                    <a class="hamburger" href="#" data-bs-toggle="offcanvas" data-bs-target="#menuOffcanvas"
                        aria-controls="menuOffcanvas">
                        <span class="hamburger-container">
                            <span class="hamburger-inner"></span>
                            <span class="hamburger-hidden"></span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Menu OffCanvas -->
    <div class="offcanvas main-menu-offcanvas offcanvas-end" tabindex="-1" id="menuOffcanvas"
        aria-labelledby="menuOffcanvasLabel">
        <div class="offcanvas-header">
            <NuxtLink id="menuOffcanvasLabel" class="navbar-brand" to="/"><img class="img-fluid"
                    src="/frontend/images/futuregenit-logo.png" alt="logo" /></NuxtLink>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"><i
                    class="fa-solid fa-xmark"></i></button>
        </div>
        <div class="offcanvas-body">
            <div class="body-inner">
                <nav class="navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <NuxtLink href="/">Home</NuxtLink>
                        </li>

                        <li class="nav-item"><a class="nav-link" href="/about-us">About US</a></li>
                        <li class="nav-item"><a class="nav-link" href="/service">Service</a></li>
                        <li class="nav-item"><a class="nav-link" href="/contact-us">Contact</a></li>
                    </ul>
                </nav>
                <div class="bottom-info">
                    <div class="contact-info">
                        <span class="number">
                            <a class="whatsapp-link" :href="'https://wa.me/' + serviceData.whtsApp" target="_blank" style="color:white;font-size: 24px;"> {{ serviceData.whtsApp }}</a>
                        </span>
                        <a class="mail" href="#"><i class="fa-regular fa-envelope"></i>info@gmail.com</a>
                        <span class="text">Looking for collaboration for your next creative project?</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=================================
      Header Side Panel -->
    <div class="offcanvas offcanvas-end sidepanel-offcanvas" tabindex="-1" id="offcanvasRight">
        <div class="offcanvas-header">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"><i
                    class="fa-solid fa-xmark"></i></button>
        </div>

        <div class="offcanvas-body">
            <div class="body-inner">
                <div class="about-info">
                    <h4 class="title mb-3">FutureGenIT</h4>
                    <p style="text-align: justify;">Founded in 2017, FutureGenIT is a world-class software company
                        committed to delivering innovative and high-quality technological solutions. Based in Dhaka,
                        Bangladesh, our company has become a trusted name in the IT industry, serving clients both
                        locally and globally.</p>
                </div>
                <div class="socail-info">
                    <ul class="socail-list-item">
                        <li><a :href="serviceData.facebook"><i class="fa-brands fa-facebook-f"></i>Facebook</a></li>
                        <!-- <li><a href="#"><i class="fa-brands fa-instagram"></i>Instagram</a></li>
                        <li><a href="#"><i class="fa-brands fa-x-twitter"></i>Twitter</a></li>
                        <li><a href="#"><i class="fa-brands fa-dribbble"></i>Dribbble</a></li> -->
                    </ul>
                </div>
                <div class="contact-info">
                    <span class="number">
                        <a class="whatsapp-link" :href="'https://wa.me/' + serviceData.whtsApp" target="_blank" style="color:white;font-size: 24px;"> {{ serviceData.whtsApp }}</a>
                        
                        </span>
                    <a class="mail" href="#"><i class="fa-regular fa-envelope"></i>{{ serviceData.email }}</a>
                    <span class="text">Feel free to reach out to us for any inquiries or additional information. You can
                        email us at info@futuregenit—we’re here to assist you!</span>
                </div>
            </div>
        </div>
    </div>
</template>
<style>
.header-default .site-logo .navbar-brand {
    display: block;
    padding: 20px 0;
}
</style>
<script setup>
import { ref, reactive, onMounted, onUnmounted } from 'vue';
import { useRoute } from 'vue-router';
import $ from 'jquery';
const route = useRoute();
import axios from "axios";



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
function isActive(path) {
    return route.path === path;
}

// Define event handlers
const setupEventHandlers = () => {
    $(".pbmit-header-search-btn a").on('click', function (event) {
        event.preventDefault(); // Prevent default action
        $(".pbmit-search-overlay").addClass('st-show');
        $("body").addClass('st-prevent-scroll');
    });

    $(".pbmit-icon-close").on('click', function () {
        $(".pbmit-search-overlay").removeClass('st-show');
        $("body").removeClass('st-prevent-scroll');
    });

    $('.pbmit-site-searchform').on('click', function (event) {
        event.stopPropagation(); // Prevent click events from propagating
    });
};

// Attach and detach event handlers



const logout = async () => {
    const router = useRouter(); // Get the router object

    //let res = confirm('Are you sure you want to sign out?');
    try {
        //if (res) {
        await userStore.logout();
        localStorage.removeItem('token');
        router.push('/'); // Redirect to the root route
        return;
        //}
    } catch (error) {
        console.error(error);
    }
};
const navbarToggole = () => {
    $('header').toggleClass("active");
}
onMounted(() => {
    setupEventHandlers();
    callService();
    
});

onUnmounted(() => {
    $(".pbmit-header-search-btn a").off('click');
    $(".pbmit-icon-close").off('click');
    $('.pbmit-site-searchform').off('click');
});
</script>