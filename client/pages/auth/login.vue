<template>
    <title>Login</title>
    <div>
      <div class="page-wrapper">
        <Navbar />
  
        <!-- login registration section start here -->
        <section class="login_registration">
          <div class="row">
            <div class="col-xl-5 col-md-5 m-auto">
              <div class="login_title">
                <h1>Log In </h1>
                <p>Continue with your account</p>
              </div>
              <form @submit.prevent="login" class="login_form">
                <div class="log_sec reg_sec">
                  <input
                    type="email"
                    v-model="email"
                    class="form-control"
                    placeholder="Email"
                    name="email"
                    required
                  />
  
                  <input
                    type="password"
                    v-model="password"
                    class="form-control mb-1"
                    placeholder="Password"
                    name="password"
                    required
                  />
  
                  <div class="form-group">
                    <div class="CaptchaWrap">
                      <div class="row d-flex">
                        <div class="col">
                          <div
                            id="CaptchaImageCode"
                            class="CaptchaTxtField bgCanvas"
                          >
                            <canvas
                              id="CapCode"
                              class="capcode border"
                              width="250"
                              height="50"
                            ></canvas>
                            <input
                              type="hidden"
                              id="UserCaptchaCode"
                              class="CaptchaTxtField form-control mt-2"
                              v-model="captchaInput"
                              @input="validateCaptcha"
                            />
                          </div>
                        </div>
                        <div class="col">
                          <button
                            type="button"
                            class="btn btn-primary"
                            @click="createCaptcha"
                          >
                            <i class="fa fa-refresh" aria-hidden="true"></i>
                          </button>
                        </div>
                      </div>
                    </div>
  
                    <input
                      type="text"
                      class="CaptchaTxtField form-control mt-2"
                      placeholder="Enter Captcha - Case Sensitive"
                      v-model="userCapInput"
                    />
  
                    <span id="WrongCaptchaError" class="error">
                      {{ captchaError }}
                    </span>
                    <span class="text-danger">{{ errors.userCapInput }}</span>
                  </div>
                  <button
                    type="submit"
                    :disabled="loading"
                    class="pbmit-btn d-flex justify-content-center mt-3"
                  >
                    <span v-if="loading">Loading...</span>
                    <span v-else>Sign In</span>
                  </button>
                </div>
                <p class="forget_password">
                  <nuxt-link to="/auth/forgetpassword">Forget Password?</nuxt-link>
                </p>
                <h6 class="log_regi">
                  Don't have an account? <br />
                  <nuxt-link to="/auth/register">Sign up</nuxt-link>
                </h6>
              </form>
            </div>
          </div>
        </section>
        <!-- login registration section end here -->
        <Footer />
      </div>
    </div>
  </template>
  
  <script setup>
  import axios from 'axios';
  import { onMounted, ref, computed } from 'vue';
  import { useUserStore } from '~/stores/user';
  import { useRouter } from 'vue-router';
  
  const userStore = useUserStore();
  const router = useRouter();
  
  const loading = ref(false);
  const email = ref('');
  const password = ref('');
  const captchaInput = ref('');
  const userCapInput = ref('');
  const errors = ref({ email: '', password: '', userCapInput: '' });
  const captchaError = ref('');
  const captchaValid = ref(false);
  
  const isLoggedIn = computed(() => userStore.isLoggedIn);
  
  const checkLogin = () => {
    if (isLoggedIn.value) {
      router.push('/user/profile');
    }
  };
  
  function createCaptcha() {
    const canvas = document.getElementById('CapCode');
    const context = canvas.getContext('2d');
    const captchaCode = generateCaptchaCode(6); // Change the length as needed
  
    context.clearRect(0, 0, canvas.width, canvas.height);
    context.font = '48px Arial';
    context.fillText(captchaCode, 10, 50);
  
    captchaInput.value = captchaCode;
  }
  
  function generateCaptchaCode(length) {
    const characters = '0123456789';
    let result = '';
    for (let i = 0; i < length; i++) {
      result += characters.charAt(Math.floor(Math.random() * characters.length));
    }
    return result;
  }
  
  function validateCaptcha() {
    if (
      captchaInput.value.toUpperCase() !==
      document.getElementById('UserCaptchaCode').value.toUpperCase()
    ) {
      captchaError.value = 'Incorrect CAPTCHA code';
      captchaValid.value = false;
    } else {
      captchaError.value = '';
      captchaValid.value = true;
    }
  }
  
  async function login() {
    try {
      loading.value = true;
      await userStore.login(email.value, password.value, captchaInput.value, userCapInput.value);
      const token = window.localStorage.getItem('token');
      if (token) {
        axios.defaults.headers.common['Authorization'] = 'Bearer ' + userStore.api_token;
      }
  
      const userrole = window.localStorage.getItem('userrole');
      if (userrole == 1 || userrole == 3) {
        router.push('/user/profile');
      } else {
        loading.value = false;
        await userStore.logout();
        localStorage.removeItem('token');
        router.push('/');
      }
    } catch (error) {
      loading.value = false;
      if (error.response && error.response.data.errors) {
        const responseErrors = error.response.data.errors;
        errors.value = {
          email: responseErrors.email ? responseErrors.email[0] : '',
          password: responseErrors.password ? responseErrors.password[0] : '',
          userCapInput: responseErrors.userCapInput ? responseErrors.userCapInput[0] : '',
        };
      } else {
        console.error('An error occurred while logging in:', error);
      }
    }
  }
  
  onMounted(() => {
    createCaptcha();
    checkLogin();
  });
  </script>
  