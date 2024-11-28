<template lang="">
    <div class="dashboard_sidebar">
                <aside class="sidebar_dash">
                    <button type="button" class="btn_show_sidebar"><i class="fa fa-chevron-right"></i></button>
                    <div class="sidebar_profile">
                        <!-- <img src="/frontend/images/avatar/img-02.jpg" alt="" class="img-fluid"> -->
                        <div>
                            <h1>Jhon Smith</h1>
                            <p>@username</p>
                        </div>
                    </div>
                    <ul>
                        <li  :class="{ active: isActive('/user/profile') }"><NuxtLink to="profile">
                            <i class="fa fa-user"></i><span>Profile</span></NuxtLink></li>
                        <li :class="{ active: isActive('/user/order-details') }"><NuxtLink to="order-details"><i class="fa fa-file-text-o"></i><span>Order
                                    details</span></NuxtLink></li>
                        <li :class="{ active: isActive('/user/security') }"><NuxtLink to="security"><i class="fa fa-lock"></i><span>Security</span></NuxtLink>
                        </li>
                        <li >
                            <a href="#" @click="logout"><i class="fa fa-sign-out"></i><span>Sign out</span></a></li>
                    </ul>
                </aside>
            </div>
</template>
<script setup>
import { useUserStore } from '~~/stores/user'
import { storeToRefs } from 'pinia';
import { useCartStore } from '~~/stores/cart';
const userStore = useUserStore();
const { isLoggedIn } = storeToRefs(userStore)
const cartStore = useCartStore();

import { ref, reactive, onMounted } from 'vue';
import { useRoute } from 'vue-router';
import axios from 'axios';
import $ from 'jquery';
const route = useRoute();

function isActive(path) {
    return route.path === path;
}
const logout = async () => {
    const router = useRouter();
    try {
        await userStore.logout();
        localStorage.removeItem('token');
        router.push('/');
        return;
    } catch (error) {
        console.error(error);
    }
};
</script>
