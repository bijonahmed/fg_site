<template>
    <div class="page-wrapper">
        <!-- Header Main Area -->
        <header class="site-header header-style-1 fixed-top bg-white" id="main_header">
            <NavbarHome />
        </header>
        <!-- Header Main Area End Here -->

        <div class="dashbord_container">
            <UserSidebar />
            <div class="dashboard_main">
                <div class="dashboard_content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="profile_page">
                                <a href="javascript:history.back()" class="mb-3"><i class="fa fa-arrow-left"></i></a>
                                <h4>Profile </h4>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="profile_information">
                                <form action="">
                                    <div class="pro_info_header">
                                        <h6>Personal Profile Information<br>
                                            <p>Please provide the following personal details to complete your
                                                profile. All fields marked with an asterisk (*) are required.</p>
                                        </h6>
                                        <button class="btn_update">Update</button>
                                    </div>
                                    <select name="" id="" class="form-control">
                                        <option value="">Mr.</option>
                                        <option value="">Mrs.</option>
                                        <option value="">Dr.</option>
                                    </select>
                                    <input type="text" class="form-control" placeholder="First name*" required>
                                    <input type="text" class="form-control" placeholder="Last name*" required>
                                    <input type="email" class="form-control" placeholder="Email address*" required>
                                    <input type="number" id="phoneInput" class="form-control" required
                                        placeholder="Phone*">
                                    <input type="text" class="form-control" placeholder="Date of birth*"
                                        onfocus="(this.type='date')" onblur="(this.type='text')">
                                    <select name="" id="" class="form-control" required>
                                        <option value="" selected disabled>Select Gender</option>
                                        <option value="">Male</option>
                                        <option value="">Female</option>
                                    </select>
                                    <select name="" id="" class="form-control" required>
                                        <option value="" selected disabled>Country*</option>
                                        <option value="">UAE</option>
                                        <option value="">USA</option>
                                        <option value="">UK</option>
                                    </select>
                                    <select name="" id="" class="form-control" required>
                                        <option value="" selected disabled>State*</option>
                                        <option value="">State 1</option>
                                        <option value="">State 2</option>
                                    </select>
                                    <select name="" id="" class="form-control" required>
                                        <option value="" selected disabled>City*</option>
                                        <option value="">City 1</option>
                                        <option value="">City 2</option>
                                    </select>
                                    <input type="text" class="form-control" placeholder="Address line 1">
                                    <input type="text" class="form-control" placeholder="Address line 2">
                                    <input type="text" class="form-control" placeholder="Zip code/Postal Code*"
                                        required>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="profile_information">
                                <form action="">
                                    <div class="pro_info_header">
                                        <h6>Merchant Profile Information<br>
                                            <p>Please provide the following business information to complete your
                                                merchant profile. All fields marked with an asterisk (*) are
                                                required.
                                            </p>
                                        </h6>
                                        <button class="btn_update">Update</button>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Business Name:*">
                                    <input type="text" class="form-control" placeholder="Business Address:*">
                                    <input type="text" class="form-control" placeholder="Contact Person:*">
                                    <input type="email" class="form-control" placeholder="Contact Email:*">
                                    <input type="text" id="m_phone" class="form-control"
                                        placeholder="Contact Phone Number:*">
                                    <input type="text" class="form-control"
                                        placeholder="Business Registration Number:*">
                                    <select name="" id="" class="form-control">
                                        <option value="" selected disabled>Business Type:*</option>
                                        <option value="">Retail</option>
                                        <option value="">Wholesale</option>
                                        <option value="">Service</option>
                                        <option value="">Other</option>
                                    </select>
                                    <input type="text" class="form-control" placeholder="Products/Services Offered:*">
                                    <input type="text" class="form-control" placeholder="Operating Hours:*">
                                    <input type="text" class="form-control" placeholder="Website:">
                                    <input type="text" class="form-control" placeholder="Social Media Links:">
                                    <input type="text" class="form-control" placeholder="Additional Information:">
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
    definePageMeta({
        middleware: 'is-logged-out',

    })

    const userStore = useUserStore();
    const router = useRouter();

    onMounted(() => {

    })
</script>