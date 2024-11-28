<template>
    <div>
        <div class="pbmit-header-overlay">
            <div class="site-header-menu">
                <div class="container-fluid">
                    <div class="pbmit-header-content d-flex align-items-center justify-content-between">
                        <div class="pbmit-logo-area">
                            <div class="site-branding pbmit-logo-area">
                                <h1 class="site-title">
                                    <nuxtLink to="/">
                                        <img class="logo-img" src="/frontend/images/logo.svg" alt="Logistbiz">
                                    </nuxtLink>
                                </h1>
                            </div>
                        </div>
                        <div class="site-navigation">
                            <nav class="main-menu navbar-expand-xl navbar-light">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->
                                    <button class="navbar-toggler" @click="navbarToggole()" type="button">
                                        <i class="pbmit-base-icon-menu-1"></i>
                                    </button>
                                </div>
                                <div class="pbmit-mobile-menu-bg"></div>
                                <div class="collapse navbar-collapse clearfix show" id="pbmit-menu">
                                    <div class="pbmit-menu-wrap">
                                        <span class="closepanel" @click="navbarToggole()">
                                            <svg class="qodef-svg--close qodef-m" xmlns="http://www.w3.org/2000/svg"
                                                width="20.163" height="20.163" viewBox="0 0 26.163 26.163">
                                                <rect width="36" height="1" transform="translate(0.707) rotate(45)">
                                                </rect>
                                                <rect width="36" height="1" transform="translate(0 25.456) rotate(-45)">
                                                </rect>
                                            </svg>
                                        </span>
                                        <ul class="navigation clearfix">
                                            <li :class="{ active: isActive('/') }">
                                                <nuxt-link to="/">Home</nuxt-link>
                                                <!-- <a href="index.html">Home</a> -->
                                            </li>
                                            <li :class="{ active: isActive('/about') }">
                                                <nuxt-link to="/about">About Us</nuxt-link>
                                            </li>
                                            <li :class="{ active: isActive('/our-service') }">
                                                <nuxt-link to="/our-service">Our Service</nuxt-link>
                                            </li>
                                            <li :class="{ active: isActive('/package-tracking') }">
                                                <nuxt-link to="/package-tracking">Package Tracking</nuxt-link>
                                            </li>
                                            <li :class="{ active: isActive('/request-quote') }">
                                                <nuxt-link to="/request-quote">Request a quote</nuxt-link>
                                            </li>
                                            <li class="dropdown sign_button">
                                                <NuxtLink to="/user/profile">
                                                    <div>
                                                        <p>Hello, Sign in</p>
                                                        <h6>Accounts</h6>
                                                    </div>
                                                </NuxtLink>
                                                <ul>
                                                    <li>
                                                        <nuxt-link class="pbmit-btn text-white" to="/auth/login">Sign
                                                            in</nuxt-link>
                                                    </li>
                                                    <p>New here
                                                        <nuxt-link to="/auth/register">Sign Up</nuxt-link>
                                                    </p>
                                                </ul>
                                                <span class="righticon"><i
                                                        class="pbmit-base-icon-angle-right"></i></span>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </nav>
                        </div>
                        <div class="pbmit-right-box d-flex align-items-center">
                            <div class="pbmit-header-search-btn">
                                <a href="#"><i class="pbmit-base-icon-search-1"></i></a>
                            </div>
                            <div class="pbmit-button-box">
                                <nuxt-link class="pbmit-btn" to="/contact-us">Contact Us</nuxt-link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search Box Start Here -->
        <div class="pbmit-search-overlay">
            <div class="pbmit-icon-close">
                <svg class="qodef-svg--close qodef-m" xmlns="http://www.w3.org/2000/svg" width="28.163" height="28.163"
                    viewBox="0 0 26.163 26.163">
                    <rect width="36" height="1" transform="translate(0.707) rotate(45)"></rect>
                    <rect width="36" height="1" transform="translate(0 25.456) rotate(-45)"></rect>
                </svg>
            </div>
            <div class="pbmit-search-outer">
                <form class="pbmit-site-searchform">
                    <input type="search" class="form-control field searchform-s" name="s" placeholder="Search …">
                    <button type="submit"></button>
                </form>
            </div>
        </div>
        <!-- Search Box End Here -->
    </div>
</template>
<script setup>
import { ref, reactive, onMounted } from 'vue';
import { useRoute } from 'vue-router';
import axios from 'axios';
import $ from 'jquery';
const route = useRoute();

function isActive(path) {
    return route.path === path;
}

const headerFixed = () => {
    const handleScroll = () => {
        const header = document.getElementById('myElement')
        const mainHeader = document.getElementById('main_header')

        if (window.scrollY > 40) {
            header.classList.add('shadow')
            mainHeader.classList.add('sticky-top')
            header.classList.add('bg-white')
        } else {
            header.classList.remove('shadow')
            mainHeader.classList.remove('sticky-top')
            header.classList.remove('bg-white')
        }
    }

    window.addEventListener('scroll', handleScroll)

    // Cleanup on component unmount
    onUnmounted(() => {
        window.removeEventListener('scroll', handleScroll)
    })
}
const navbarToggole = () => {
    $('header').toggleClass("active");
}
const handleScroll = () => {
    const scrollPosition = $(window).scrollTop()
    const header = $('.pbmit-header-overlay')

    if (scrollPosition > 100) {
        header.addClass('bg-white');
        header.addClass('shadow');
    } else {
        header.removeClass('bg-white')
        header.removeClass('shadow')
    }
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
onMounted(() => {
    setupEventHandlers();

    $(window).on('scroll', handleScroll)
})

onUnmounted(() => {
    $(window).off('scroll', handleScroll);
    $(".pbmit-header-search-btn a").off('click');
    $(".pbmit-icon-close").off('click');
    $('.pbmit-site-searchform').off('click');
})
</script>