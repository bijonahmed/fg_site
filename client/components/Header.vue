<template>
  <div>
      <header class="site-header header-style-1">
          <div class="pbmit-header-overlay">
              <div class="site-header-menu">
                  <div class="container-fluid">
                      <div class="pbmit-header-content d-flex align-items-center justify-content-between">
                          <div class="pbmit-logo-area">
                              <div class="site-branding pbmit-logo-area">
                                  <h1 class="site-title">
                                        <nuxtLink to="/">
                                            <img class="logo-img" src="/frontend/images/logo.png" alt="Logistbiz">
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
                                          <rect width="36" height="1" transform="translate(0.707) rotate(45)"></rect>
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
                                              <li class="">
                                                  <nuxt-link to="/package-tracking">Package Tracking</nuxt-link>
                                              </li>
                                              <li class="">
                                                  <nuxt-link to="/request-quote">Request a quote</nuxt-link>
                                              </li>
                                              <li class="dropdown sign_button">
                                                  <a href="our-service.html">
                                                      <div>
                                                          <p>Hello, Sign in</p>
                                                          <h6>Accounts</h6>
                                                      </div>
                                                  </a>
                                                  <ul>
                                                      <li>
                                                          <nuxt-link class="pbmit-btn text-white" to="/login">Sign
                                                              in</nuxt-link>
                                                      </li>
                                                      <p>New here
                                                          <nuxt-link to="/register">Sign Up</nuxt-link>
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
      </header>
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

const navbarToggole = () => {
  $('header').toggleClass("active");
}
</script>