<template>
  <div class="error-page">
    <div class="error-container">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 600 400">
  <g fill="none" fill-rule="evenodd">
    <circle cx="300" cy="200" r="200" fill="#f9f9f9" />
    <path fill="#3498db" d="M120 260h360v40H120z" />
    <text fill="#555" font-family="Arial, sans-serif" font-size="64" font-weight="bold">
      <tspan x="150" y="200">404</tspan>
    </text>
    <text fill="#555" font-family="Arial, sans-serif" font-size="24">
      <tspan x="120" y="250">Page Not Found</tspan>
    </text>
  </g>
</svg>

      <h1 class="error-title">Oops! Page Not Found</h1>
      <p class="error-message">
        The page you're looking for doesn't exist or has been moved.
      </p>
      <NuxtLink to="/" class="home-button">🏠 Back to Home</NuxtLink>
    </div>
  </div>
</template>

<script setup>
definePageMeta({
  layout: 'default', // Use your desired layout, or leave default
});
</script>

<style scoped>
/* Main container styling */
.error-page {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background: linear-gradient(to bottom, #f9f9f9, #ececec);
  font-family: 'Arial', sans-serif;
}

/* Inner container */
.error-container {
  text-align: center;
  padding: 2rem;
  max-width: 600px;
  background: #fff;
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
  border-radius: 12px;
}

/* SVG Image */
.error-image {
  max-width: 100%;
  height: auto;
  margin-bottom: 2rem;
}

/* Title */
.error-title {
  font-size: 2.5rem;
  color: #333;
  margin-bottom: 1rem;
}

/* Message */
.error-message {
  font-size: 1.25rem;
  color: #555;
  margin-bottom: 2rem;
}

/* Button */
.home-button {
  display: inline-block;
  padding: 0.75rem 1.5rem;
  background: #3498db;
  color: white;
  font-size: 1rem;
  text-decoration: none;
  border-radius: 25px;
  transition: background-color 0.3s ease, transform 0.2s ease;
}

.home-button:hover {
  background-color: #2980b9;
  transform: scale(1.05);
}
</style>
