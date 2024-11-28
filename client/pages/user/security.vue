<template>
    <div class="page-wrapper">
        <!-- Header Main Area -->
        <header class="site-header header-style-1 fixed-top bg-white" id="main_header">
            <NavbarHome />
        </header>
        <!-- Header Main Area End Here -->

        <div class="dashbord_container">
            
            <UserSidebar/>
			<div class="dashboard_main">
				<div class="dashboard_content">
					<div class="row">
						<div class="col-md-12">
							<div class="profile_page">
								<a href="javascript:history.back()" class="mb-3"><i class="fa fa-arrow-left"></i></a>
								<h4>Profile</h4>
							</div>
						</div>
						<div class="col-md-6">
							<div class="profile_information">
								<form action="">
									<div class="pro_info_header">
										<h6>Password</h6>
										<button class="btn_update">Update</button>
									</div>

									<input type="password" class="form-control" placeholder="Previous Password">
									<input type="password" class="form-control" placeholder="New Password">
									<input type="password" class="form-control" placeholder="Confirm Password">
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
    </div>
</template>
<script setup>
import { onMounted, ref, computed } from 'vue';
import { useUserStore } from '~/stores/user';
import { useRouter } from 'vue-router';
const route = useRoute();

const userStore = useUserStore();
const router = useRouter();


const headerFixed = () => {
    const handleScroll = () => {
        const header = document.getElementById('myElement')
        const mainHeader = document.getElementById('main_header')

        if (window.scrollY > 40) {
            header.classList.add('shadow')
            mainHeader.classList.add('sticky-top')
            header.classList.add('bg-white')
        } else {
            header.classList.remove('shadow')
            mainHeader.classList.remove('sticky-top')
            header.classList.remove('bg-white')
        }
    }

    window.addEventListener('scroll', handleScroll)

    // Cleanup on component unmount
    onUnmounted(() => {
        window.removeEventListener('scroll', handleScroll)
    })
}
onMounted(() => {
    headerFixed();
})
</script>