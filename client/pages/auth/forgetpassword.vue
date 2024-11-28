<template>
    <div>
        <div class="page-wrapper">
            <Navbar />

            <!-- forgetpass section start here  -->
            <section class="login_registration">
                <div class="row">

                    <div class="col-xl-5 col-md-5 m-auto">
                        <div class="login_title">
                            <h1>Forget Password</h1>
                        </div>
                        <form action="" class="login_form">
                            <div class="log_sec reg_sec">
                                <input type="email" class="form-control" placeholder="Email" name="email" required>
                                <button class="pbmit-btn" type="submit">Send</button>
                            </div>
                            <h6 class="log_regi">Return to login? <br> <NuxtLink to="/auth/login">Login</NuxtLink></h6>


                        </form>
                    </div>
                </div>
            </section>
            <!-- forgetpass section end here  -->


            <Footer />
        </div>
    </div>
</template>

<script setup>
import { useUserStore } from '~~/stores/user';
import AdminLayout from '~/layouts/AdminLayout.vue';
const router = useRouter()
const userStore = useUserStore()

definePageMeta({
    middleware: 'is-logged-in'

})

let surname = ref(null)
let first_name = ref(null)
let last_name = ref(null)
let name = ref(null)
let email = ref(null)
let password = ref(null)
let confirmPassword = ref(null)
let errors = ref(null)

const register = async () => {
    errors.value = null

    try {
        await userStore.register(
            surname.value,
            first_name.value,
            last_name.value,
            email.value,
            password.value,
            confirmPassword.value
        )
        router.push('/')
    } catch (error) {
        console.log(error)
        errors.value = error.response.data.errors
    }
}
</script>
