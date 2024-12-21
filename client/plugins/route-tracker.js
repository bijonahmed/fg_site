// plugins/route-tracker.js

export default defineNuxtPlugin((nuxtApp) => {
    const router = useRouter();
  
    // Listen for route changes and store the current route path in sessionStorage
    router.afterEach((to) => {
      // Ensure we're in the client-side environment (not SSR)
      if (process.client) {
        sessionStorage.setItem('lastVisitedRoute', to.fullPath);
      }
    });
  });
  