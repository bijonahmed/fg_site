// plugins/route-tracker.js
export default defineNuxtPlugin(nuxtApp => {
    const router = useRouter();
    
    // Listen for route changes and store the current route in sessionStorage
    router.afterEach((to) => {
      // Store the last visited route in sessionStorage
      sessionStorage.setItem('lastVisitedRoute', to.fullPath);
    });
  });
  