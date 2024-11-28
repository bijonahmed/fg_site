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
                                <!-- <a href="javascript:history.back()" class="mb-3"><i class="fa fa-arrow-left"></i></a> -->
                                <div class="d-flex justify-content-between align-items-center">
                                    <h4>Order list</h4>
                                    <NuxtLink to="/user/create-order" class="d-block fw-bold">Create a new order</NuxtLink>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-stripe table_orderlist">
                                    <thead>
                                        <tr>
                                            <th scope="col">Tracking Id</th>
                                            <th scope="col">Parcel</th>
                                            <th scope="col">Total Weight</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">(Rate - £4.80) Price</th>
                                            <th scope="col">Handling Charges</th>
                                            <th scope="col">Total Shipping Cost</th>
                                            <th scope="col">Payment status</th>
                                            <th scope="col">Payment Method</th>
                                            <th scope="col">Status
                                                <i title="
												Order Received: The shipping company has received the order.
Preparing for Shipment: The order is being prepared for shipment.
Shipment Created: The shipment order has been created in the system.
Picked Up: The package has been picked up from the sender.
In Transit: The package is on its way to the destination.
Arrived at Facility: The package has arrived at a sorting or distribution facility.
Customs Clearance: The package is undergoing customs clearance (if international).
Customs Cleared: The package has cleared customs.
Out for Delivery: The package is out for delivery to the recipient.
Attempted Delivery: A delivery attempt was made but was unsuccessful.
Delivery Rescheduled: The delivery has been rescheduled.
Delivered: The package has been successfully delivered to the recipient.
Delivery Exception: An issue has occurred that might delay delivery (e.g., bad weather, incorrect address).
Returned to Sender: The package is being returned to the sender.
Lost: The package has been reported as lost.
Damaged: The package has been reported as damaged.
Cancelled: The shipment has been cancelled." class="fa  fa-info-circle"></i>
                                            </th>
                                            <td scope="col">Action</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>#783745</th>
                                            <td>
                                                Weight=10Kg Volume Weight=562.50 kg L=150 W=150 H=150
                                            </td>
                                            <td>562.50Kg</td>
                                            <td>1</td>
                                            <td>£12300</td>
                                            <td>£20</td>
                                            <td>£12320</td>
                                            <td>Paid</td>
                                            <td>Paid by Card</td>
                                            <td>Pending</td>
                                            <td>
                                                <div class="btn-group">
                                                    <button class="btn btn-primary"><i class="fa fa-print"></i></button>
                                                    <button class="btn btn-warning" data-bs-toggle="modal"
                                                        data-bs-target="#shareModal"><i
                                                            class="fa fa-share"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>#783745</th>
                                            <td>
                                                Weight=10Kg Volume Weight=562.50 kg L=150 W=150 H=150
                                            </td>
                                            <td>562.50Kg</td>
                                            <td>1</td>
                                            <td>£12300</td>
                                            <td>£20</td>
                                            <td>£12320</td>
                                            <td>Paid</td>
                                            <td>Paid by Gpay</td>
                                            <td>Pending</td>
                                            <td>
                                                <div class="btn-group">
                                                    <button class="btn btn-primary"><i class="fa fa-print"></i></button>
                                                    <button class="btn btn-warning" data-bs-toggle="modal"
                                                        data-bs-target="#shareModal"><i
                                                            class="fa fa-share"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>#783745</th>
                                            <td>
                                                Weight=10Kg Volume Weight=562.50 kg L=150 W=150 H=150
                                            </td>
                                            <td>562.50Kg</td>
                                            <td>1</td>
                                            <td>£12300</td>
                                            <td>£20</td>
                                            <td>£12320</td>
                                            <td>Paid</td>
                                            <td>Paid by ApplePay</td>
                                            <td>Pending</td>
                                            <td>
                                                <div class="btn-group">
                                                    <button class="btn btn-primary"><i class="fa fa-print"></i></button>
                                                    <button class="btn btn-warning" data-bs-toggle="modal"
                                                        data-bs-target="#shareModal"><i
                                                            class="fa fa-share"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>#783745</th>
                                            <td>
                                                Weight=10Kg Volume Weight=562.50 kg L=150 W=150 H=150
                                            </td>
                                            <td>562.50Kg</td>
                                            <td>1</td>
                                            <td>£12300</td>
                                            <td>£20</td>
                                            <td>£12320</td>
                                            <td>Paid</td>
                                            <td>Paid by Card</td>
                                            <td>Unpaid</td>
                                            <td>
                                                <div class="btn-group">
                                                    <button class="btn btn-primary"><i class="fa fa-print"></i></button>
                                                    <button class="btn btn-warning" data-bs-toggle="modal"
                                                        data-bs-target="#shareModal"><i
                                                            class="fa fa-share"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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


onMounted(() => {
})
</script>