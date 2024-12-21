// https://nuxt.com/docs/api/configuration/nuxt-config

export default defineNuxtConfig({
  ssr: true,
  router: {
    options: {
      hashMode: false,
    },
  },
  nitro: {
    prerender: {
      crawlLinks: true,
      failOnError: false,
    },
  },
  /*
  build: {
    extend(config) {
      config.resolve.fallback = {
        assert: require.resolve('assert'), // Use the assert polyfill for the browser
      };
    },
  },
  */

  // no cache 
  async asyncData({ $nuxt }) {
    $nuxt.$store.commit('SET_CACHE_HEADER', 'no-store');
  },
  
  runtimeConfig: {
    public: {
      baseURL: process.env.NODE_ENV === "production" ? "https://api.futuregenit.com/api/" : "http://127.0.0.1:8000/api/",
    },
  },
  pages: true,
  devtools: { enabled: true },
  experimental: {
    payloadExtraction: true,
  },
  //css: ["~/assets/css/main.css"],

  postcss: {
    plugins: {
      tailwindcss: {},
      autoprefixer: {},
    },
  },
  plugins: [
    // Specify the path to your plugin file
    "~/plugins/axios.js",
    "~/plugins/lazyNuxtLinkAdmin.js",
    // Add other plugins as needed
  ],
  modules: [
    "nuxt-icon",
    "nuxt-lodash",
    "@pinia/nuxt",
    "@pinia-plugin-persistedstate/nuxt",
    "@vite-pwa/nuxt",
  ],
  pwa: {
    manifest: {
      name: "FG",
      short_name: "FG",
      description: "FG",
      theme_color: "#32CD32",
      icons: [
        {
          src: "pwa-192x192.png",
          sizes: "192x192",
          type: "image/png",
        },
        {
          src: "pwa-512x512.png",
          sizes: "512x512",
          type: "image/png",
        },
      ],
    },
    devOptions: {
      enabled: true,
      type: "module",
    },
  },

  app: {
    head: {
      charset: "utf-8",
      viewport: "width=device-width, initial-scale=1, maximum-scale=1",
      // Add CSS file
      link: [
        { rel: 'icon', href: '/frontend/images/futuregenit-logo.png' },
        { rel: "stylesheet", href: "https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&amp;family=Russo+One&amp;display=swap" },
        { rel: "stylesheet", href: "/frontend/css/font-awesome/all.min.css" },
        { rel: "stylesheet", href: "/frontend/css/bootstrap/bootstrap.min.css" },
        // { rel: "stylesheet", href: "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"},
        { rel: "stylesheet", href: "/frontend/css/owl-carousel/owl.carousel.min.css" },
        { rel: "stylesheet", href: "/frontend/css/swiper/swiper.min.css" },
        { rel: "stylesheet", href: "/frontend/css/magnific-popup/magnific-popup.css" },
        { rel: "stylesheet", href: "/frontend/css/style.css" },
        { rel: "stylesheet", href: "https://cdn.jsdelivr.net/npm/sweetalert2@11.14.5/dist/sweetalert2.min.css" },
      ],
      // Add JavaScript file
      script: [

        { src: "/frontend/js/jquery-3.7.1.min.js", type: "text/javascript" },
        { src: "/frontend/js/jquery.appear.js", type: "text/javascript" },
        { src: "/frontend/js/popper/popper.min.js", type: "text/javascript" },
        // { src: "/frontend/js/bootstrap/bootstrap.min.js",type: "text/javascript" },
        { src: "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js", type: "text/javascript" },
        { src: "/frontend/js/owl-carousel/owl.carousel.min.js", type: "text/javascript" },
        { src: "/frontend/js/swiper/swiper.min.js", type: "text/javascript" },
        { src: "/frontend/js/swiperanimation/SwiperAnimation.min.js", type: "text/javascript" },
        { src: "/frontend/js/shuffle/shuffle.min.js", type: "text/javascript" },
        { src: "/frontend/js/magnific-popup/jquery.magnific-popup.js", type: "text/javascript" },
        { src: "/frontend/js/counter/jquery.countTo.js", type: "text/javascript" },
        { src: "/frontend/js/gsap.min.js", type: "text/javascript" },
        { src: "/frontend/js/attractHover.js", type: "text/javascript" },
        { src: "https://cdn.jsdelivr.net/npm/sweetalert2@11.14.5/dist/sweetalert2.all.min.js", type: "text/javascript" },
        // { src: "/frontend/js/custom.js",type: "text/javascript" },
      ],
    },
  },
});
