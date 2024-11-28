<template>
    <header class="header header-default header-sticky header-absolute">
        <div class="header-inner">
            <div class="site-logo">
                <NuxtLink  class="navbar-brand" to="/"><img class="img-fluid" src="/frontend/images/logo.svg" alt="logo" /></NuxtLink>
            </div>
            <div class="site-menu d-none d-xl-block">
                <ul class="main-menu">
                    <li class="nav-item" :class="{ active: $route.path === '/' }"><NuxtLink class="nav-link" to="/">Home </NuxtLink> </li>
                    <li class="nav-item" :class="{ active: $route.path === '/service' }"><NuxtLink class="nav-link" to="/service">Service</NuxtLink></li>
                    <li class="nav-item" :class="{ active: $route.path === '/about-us' }"><NuxtLink class="nav-link" to="/about-us">About Us</NuxtLink></li>
                    <li class="nav-item" :class="{ active: $route.path === '/faqs' }"><NuxtLink class="nav-link" to="/faqs">FAQs</NuxtLink></li>
                    <li class="nav-item" :class="{ active: $route.path === '/contact-us' }"><NuxtLink class="nav-link" to="/contact-us">Contact Us</NuxtLink></li>
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
            <a id="menuOffcanvasLabel" class="navbar-brand" href="index.html"><img class="img-fluid"
                    src="/frontend/images/logo.svg" alt="logo" /></a>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"><i
                    class="fa-solid fa-xmark"></i></button>
        </div>
        <div class="offcanvas-body">
            <div class="body-inner">
                <nav class="navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">Home</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item active" href="index.html">Home 01</a></li>
                                <li><a class="dropdown-item" href="index-02.html">Home 02</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">Pages</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="about-us.html">About Us</a></li>
                                <li><a class="dropdown-item" href="pricing.html">Pricing</a></li>
                                <li><a class="dropdown-item" href="careers.html">Careers</a></li>
                                <li><a class="dropdown-item" href="contact-us.html">Contact</a></li>
                                <li><a class="dropdown-item" href="faq.html">Faq</a></li>
                                <li><a class="dropdown-item" href="team.html">Team</a></li>
                                <li><a class="dropdown-item" href="team-single.html">Team Single</a></li>
                                <li><a class="dropdown-item" href="typography.html">Typography</a></li>
                                <li><a class="dropdown-item" href="page-left-sidebar.html">Page Left Sidebar</a></li>
                                <li><a class="dropdown-item" href="page-right-sidebar.html">Page Right Sidebar</a></li>
                                <li><a class="dropdown-item" href="error-404.html">Error 404</a></li>
                                <li><a class="dropdown-item" href="coming-soon.html">Coming Soon</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">Service</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="service.html">Service</a></li>
                                <li><a class="dropdown-item" href="service-detail.html">Service Single</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">Case Studies</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="case-studies.html">Case Studies</a></li>
                                <li><a class="dropdown-item" href="case-studies-detail.html">Case Studies Single</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">Blog</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="blog.html">Blog Standard</a></li>
                                <li><a class="dropdown-item" href="blog-detail.html">Blog Single</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="contact-us.html">Contact</a></li>
                    </ul>
                </nav>
                <div class="bottom-info">
                    <div class="contact-info">
                        <span class="number">+1 234 567 8910</span>
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
                    <h4 class="title mb-3">Scalable Business for Startups</h4>
                    <p>Get the oars in the water and start rowing. Execution is the single biggest factor in achievement
                        so the
                        faster and better your execution.</p>
                </div>
                <div class="socail-info">
                    <ul class="socail-list-item">
                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i>Facebook</a></li>
                        <li><a href="#"><i class="fa-brands fa-instagram"></i>Instagram</a></li>
                        <li><a href="#"><i class="fa-brands fa-x-twitter"></i>Twitter</a></li>
                        <li><a href="#"><i class="fa-brands fa-dribbble"></i>Dribbble</a></li>
                    </ul>
                </div>
                <div class="contact-info">
                    <span class="number">+1 234 567 8910</span>
                    <a class="mail" href="#"><i class="fa-regular fa-envelope"></i>info@gmail.com</a>
                    <span class="text">Looking for collaboration for your next creative project?</span>
                </div>
            </div>
        </div>
    </div>
</template>
<script setup>
import { ref, reactive, onMounted, onUnmounted } from 'vue';
import { useRoute } from 'vue-router';
import $ from 'jquery';
const route = useRoute();

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
});

onUnmounted(() => {
    $(".pbmit-header-search-btn a").off('click');
    $(".pbmit-icon-close").off('click');
    $('.pbmit-site-searchform').off('click');
});
</script>