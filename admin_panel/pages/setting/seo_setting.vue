<template>
    <div>
        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">
                <!--breadcrumb-->
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item">
                                    <router-link to="/" href="javascript:;"><i class="bx bx-home-alt"></i></router-link>
                                </li>

                                <li class="breadcrumb-item active" aria-current="page">SEO Setting</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!--end breadcrumb-->

                <!--end row-->
                <div class="row">
                    <div class="col-xl-12 mx-auto">
                        <div class="card border-top border-0 border-4 border-info">
                            <div class="card-body">
                                <div class="border p-4 rounded">
                                    <form @submit.prevent="saveData()" id="formrest" class="forms-sample"
                                        enctype="multipart/form-data">
                                        <div class="row mb-3">
                                            <label for="inputEnterYourName" class="col-sm-3 col-form-label">Index pages
                                                description</label>
                                            <div class="col-sm-9">
                                                <textarea type="text" class="form-control name"
                                                    v-model="insertdata.index_pages_description"></textarea>
                                                <span class="text-danger" v-if="errors.index_pages_description">{{
                                                    errors.index_pages_description[0] }}</span>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="inputEnterYourName" class="col-sm-3 col-form-label">Index pages
                                                keywords</label>
                                            <div class="col-sm-9">
                                                <textarea type="text" class="form-control name"
                                                    v-model="insertdata.index_pages_keywords"></textarea>
                                                <span class="text-danger" v-if="errors.index_pages_keywords">{{
                                                    errors.index_pages_keywords[0] }}</span>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row mb-3">
                                            <label for="inputEnterYourName" class="col-sm-3 col-form-label">Service
                                                pages description</label>
                                            <div class="col-sm-9">
                                                <textarea type="text" class="form-control name"
                                                    v-model="insertdata.services_pages_description"></textarea>
                                                <span class="text-danger" v-if="errors.services_pages_description">{{
                                                    errors.services_pages_description[0] }}</span>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEnterYourName" class="col-sm-3 col-form-label">Category
                                                Service keywords</label>
                                            <div class="col-sm-9">
                                                <textarea type="text" class="form-control name"
                                                    v-model="insertdata.services_pages_keywords"></textarea>
                                                <span class="text-danger" v-if="errors.services_pages_keywords">{{
                                                    errors.services_pages_keywords[0] }}</span>
                                            </div>
                                        </div>
                                        


                                        <div class="row">
                                            <label class="col-sm-3 col-form-label"></label>
                                            <div class="col-sm-9">
                                                <button type="submit" class="btn btn-success px-5 w-100"><i
                                                        class="bx bx-check-circle mr-1"></i> Submit</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </div>
        <!--end page wrapper -->
    </div>
</template>


<script>
export default {
    head: {
        title: 'SEO Setting',
    },
    data() {
        return {
            insertdata: {
                id: 1,
                index_pages_description: '',
                index_pages_keywords: '',
                services_pages_description: '',
                services_pages_keywords: '',
              
            },
            notifmsg: '',
            errors: {},
        }
    },
    created() {
        this.getData();
    },
    methods: {
        getData() {
            let id = 1;
            this.$axios.get(`/findseorow`).then(response => {
                this.insertdata.index_pages_description = response.data.index_pages_description;
                this.insertdata.index_pages_keywords = response.data.index_pages_keywords;
                this.insertdata.services_pages_description = response.data.services_pages_description;
                this.insertdata.services_pages_keywords = response.data.services_pages_keywords;

            });

        },
        saveData() {
            const formData = new FormData();
            formData.append('id', this.insertdata.id);
            formData.append('index_pages_description', this.insertdata.index_pages_description);
            formData.append('index_pages_keywords', this.insertdata.index_pages_keywords);
            formData.append('services_pages_description', this.insertdata.services_pages_description);
            formData.append('services_pages_keywords', this.insertdata.services_pages_keywords);
       
            const headers = {
                'Content-Type': 'multipart/form-data'
            };
            this.$axios.post('/setting/updateSeoSetting',
                formData, {
                headers
            }).then((res) => {
                $('#formrest')[0].reset();
                this.success_noti();
                this.$router.push('/');

            }).catch(error => {
                if (error.response.status === 422) {
                    this.errors = error.response.data.errors;
                }
            });
        },
        success_noti() {
            Lobibox.notify('success', {
                pauseDelayOnHover: true,
                continueDelayOnInactiveTab: false,
                position: 'top right',
                icon: 'bx bx-check-circle',
                msg: 'Your data has been successfully update.'
            });
        },

    },
}
</script>