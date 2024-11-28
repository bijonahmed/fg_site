<template>
  <div>

    <VitePwaManifest />
    <NuxtPage />


    <!-- Scroll To Top -->
    <div class="pbmit-progress-wrap" @click="scrollToTop">
      <i class="fa-solid fa-arrow-top"></i>
    </div>
    <!-- Scroll To Top End -->
  </div>
</template>

<script setup>
// import Navbar from "~~/component/Navbar.vue";
// import Footer from "~~/component/Footer.vue";
import { useUserStore } from "~~/stores/user";
import { computed } from "vue";
import $ from 'jquery';


const userStore = useUserStore();
const isLoggedIn = computed(() => userStore.isLoggedIn);
const userRoleIsAdmin = computed(() => userStore.role_id === 1);
const userStatusIsAdmin = computed(() => userStore.status === 1);

const scrollToTop = (event) => {
  event.preventDefault();
  $('html, body').animate({ scrollTop: 0 }, 550);
};

const pbmitBackToTop = () => {
  const progressPath = document.querySelector('.pbmit-progress-wrap path');
  const pathLength = progressPath.getTotalLength();

  // Initialize path properties
  progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
  progressPath.style.strokeDasharray = `${pathLength} ${pathLength}`;
  progressPath.style.strokeDashoffset = pathLength;
  progressPath.getBoundingClientRect();
  progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';

  const updateProgress = () => {
    const scroll = $(window).scrollTop();
    const height = $(document).height() - $(window).height();
    const progress = pathLength - (scroll * pathLength / height);
    progressPath.style.strokeDashoffset = progress;
  };

  // Initial update
  updateProgress();

  // Update progress on scroll
  $(window).scroll(updateProgress);

  // Toggle visibility based on scroll position
  const offset = 50;
  $(window).on('scroll', function () {
    if ($(this).scrollTop() > offset) {
      $('.pbmit-progress-wrap').addClass('active-progress');
    } else {
      $('.pbmit-progress-wrap').removeClass('active-progress');
    }
  });
};
onMounted(() => {
  // pbmitBackToTop();
});
</script>