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
                                <!-- <a href="javascript:history.back()" class="mb-3"><i class="fa fa-arrow-left"></i></a> -->
                                <div class="d-flex justify-content-between align-items-center">
                                    <h4>Book Order</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="profile_information">
                                <div class="pbmit-ihbox-style-7 pbmit-ihbox-style-7-second">
                                    <div class="pbmit-ihbox-box d-flex">
                                        <div class="pbmit-ihbox-icon">
                                            <div class="pbmit-ihbox-icon-wrapper">
                                                <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                                    <i class="fa fa-file-text"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pbmit-ihbox-contents">
                                            <h2 class="pbmit-element-title">Book A Order Shipping</h2>
                                            <div class="pbmit-heading-desc">Please Fill All Inquiry To Get Your Total
                                                Price</div>
                                        </div>
                                    </div>
                                </div>
                                <form class="quote_form">
                                    <div class="row">
                                        <div class="col-sm-2 col-12">
                                            <h6>From</h6>
                                        </div>
                                        <div class="col-sm-5 col-6">
                                            <select name="" id="" class="form-control">
                                                <option value="">Country 1</option>
                                                <option value="">Country 2</option>
                                                <option value="">Country 3</option>
                                                <option value="">Country 4</option>
                                                <option value="">Country 5</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-5 col-6">
                                            <select name="" id="" class="form-control">
                                                <option value="">City 1</option>
                                                <option value="">City 2</option>
                                                <option value="">City 3</option>
                                                <option value="">City 4</option>
                                                <option value="">City 5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2 col-12">
                                            <h6>To</h6>
                                        </div>
                                        <div class="col-sm-5 col-6">
                                            <select name="" id="" class="form-control">
                                                <option value="">Country 1</option>
                                                <option value="">Country 2</option>
                                                <option value="">Country 3</option>
                                                <option value="">Country 4</option>
                                                <option value="">Country 5</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-5 col-6">
                                            <select name="" id="" class="form-control">
                                                <option value="">City 1</option>
                                                <option value="">City 2</option>
                                                <option value="">City 3</option>
                                                <option value="">City 4</option>
                                                <option value="">City 5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2 col-12">
                                            <h6>Method</h6>
                                        </div>
                                        <div class="col-sm-10 col-12">
                                            <select name="" id="" class="form-control">
                                                <option value="" disabled selected>Select Method</option>
                                                <option value="">Air</option>
                                                <option value="">Sea</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2 col-12">
                                            <h6>Parcel</h6>
                                        </div>
                                        <div class="col-sm-10" id="dimension">
                                            <!-- Loop through the dimensions array -->
                                            <div v-for="(item, index) in dimensions" :key="index"
                                                class="dimension_container">
                                                <input type="text" class="form-control" placeholder="weight"
                                                    name="weight" v-model="item.weight">
                                                <input type="text" class="form-control" placeholder="length"
                                                    name="length" v-model="item.length">
                                                <input type="text" class="form-control" placeholder="width" name="width"
                                                    v-model="item.width">
                                                <input type="text" class="form-control" placeholder="Height"
                                                    name="height" v-model="item.height">

                                                <!-- Only show the "-" button for dimensions other than the first one -->
                                                <button v-if="dimensions.length > 1 && index > 0" type="button"
                                                    class="btn_rmv" @click="removeDimension(index)">
                                                    <i class="fa fa-minus"></i>
                                                </button>
                                            </div>

                                            <!-- Show the "+" button outside the loop -->
                                            <button type="button" class="btn btn-primary w-100" @click="addMore">
                                                <i class="fa fa-plus me-2 mt-2"></i> Add More
                                            </button>
                                        </div>
                                    </div>
                                    <div class="input-group input-button">
                                        <a href="quote-result.html" class="pbmit-btn">Cost Calculation</a>
                                    </div>
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


// Initialize with one dimension object
const dimensions = ref([
    { weight: '', length: '', width: '', height: '' }
]);

function addMore() {
    dimensions.value.push({ weight: '', length: '', width: '', height: '' });
}

function removeDimension(index) {
    if (dimensions.value.length > 1) {
        dimensions.value.splice(index, 1);
    }
}

onMounted(() => {
    
})
</script>