<template>
    <div>
        <div class="page-wrapper">
            <Navbar />

            <!-- login registration section start here  -->
            <section class="login_registration">
                <div class="row">

                    <div class="col-xl-5 col-md-5 m-auto">
                        <div class="login_title">
                            <h1>Sign Up</h1>
                            <p>Create new account</p>
                        </div>
                        <form action="" class="login_form">
                            <div class="log_sec reg_sec">
                                <select name="" v-model="surname" id="" class="form-control"></select>
                                <input type="text" class="form-control  " placeholder="Full name" name="name" required>
                                <input type="email" class="form-control" placeholder="Email" name="email" required>
                                <input type="text" class="form-control " placeholder="Password" name="password"
                                    required>
                                <input type="text" class="form-control  " placeholder="Retype Password"
                                    name="repassword" required>

                                <button type="submit" class="pbmit-btn">Register</button>
                            </div>
                            <!-- <p class="forget_password"><a href="forgetpassword.html">Forget Password</a></p> -->
                            <h6 class="log_regi">Already have an account? <br> <NuxtLink href="login">Login</NuxtLink></h6>


                        </form>
                    </div>
                </div>
            </section>
            <!-- login registration section end here  -->


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
