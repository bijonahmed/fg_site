<script lang="ts" setup></script>

<template>
  <div>
    Layout: default
    <slot />
  </div>
</template>

<style scoped></style>
<script setup>
export default {
  mounted() {
    if (process.client) {
      // Get the last visited route from sessionStorage
      const lastVisitedRoute = sessionStorage.getItem('lastVisitedRoute');
      
      // If a last visited route exists, redirect the user
      if (lastVisitedRoute && lastVisitedRoute !== window.location.pathname) {
        this.$router.push(lastVisitedRoute);  // Redirect to the last visited route
      }
    }
  }
};
</script>
