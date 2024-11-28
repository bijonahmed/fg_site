export default defineNuxtRouteMiddleware((to, from) => {
    if (to.fullPath !== '/auth/profile') {
      return navigateTo('/auth/profile')
    }
  })
  