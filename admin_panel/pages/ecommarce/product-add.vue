<template lang="en">
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
                                    <router-link to="/" href="javascript:;"><i
                                            class="bx bx-home-alt"></i></router-link>
                                </li>
                                <li class="breadcrumb-item" aria-current="page">
                                    <router-link to="/ecommarce/product-list">Product List </router-link>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">New Product</li>
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
                                    <div class="card">
                                        <form @submit.prevent="saveData()" id="formrest" class="forms-sample"
                                            enctype="multipart/form-data">
                                            <div class="card-body">
                                                <ul class="nav nav-pills mb-3" role="tablist">
                                                    <li class="nav-item" role="presentation">
                                                        <a class="nav-link active" data-bs-toggle="pill"
                                                            href="#primary-pills-home" role="tab"
                                                            aria-selected="true">
                                                            <div class="d-flex align-items-center">
                                                                <div class="tab-icon"><i
                                                                        class='bx bx-home font-18 me-1'></i>
                                                                </div>
                                                                <div class="tab-title">Products</div>
                                                            </div>
                                                        </a>
                                                    </li>

                                                </ul>
                                                <div class="tab-content" id="pills-tabContent">
                                                    <div class="tab-pane fade show active" id="primary-pills-home"
                                                        role="tabpanel">
                                                        <!-- General  -->
                                                        <div class="row mb-3 required">
                                                            <label for="input-name-1"
                                                                class="col-sm-2 col-form-label required-label">Name</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="name" placeholder="Name"
                                                                    v-model="insertdata.name" class="form-control" />
                                                                <input type="hidden" name="id" id="id"
                                                                    class="form-control" />
                                                                <span class="text-danger"
                                                                    v-if="errors.name">{{ errors . name[0] }}</span>
                                                            </div>
                                                            
                                                        </div>
 

                                                        <div class="row mb-3">
                                                            <label for="input-meta-description-1"
                                                                class="col-sm-2 col-form-label">Meta Description</label>
                                                            <div class="col-sm-10">
                                                                <textarea name="meta_description" required rows="5" placeholder="Meta Description" v-model="insertdata.meta_description"
                                                                    id="description" class="form-control"></textarea>

                                                            </div>
                                                        </div>


                                                        <div class="row mb-3">
                                                            <label for="input-meta-description-1"
                                                                class="col-sm-2 col-form-label">Meta Keywords</label>
                                                            <div class="col-sm-10">
                                                                <textarea name="meta_keywords" required rows="5" placeholder="Meta Keyword" v-model="insertdata.meta_keywords"
                                                                    id="meta_keywords" class="form-control"></textarea>

                                                            </div>
                                                        </div>



                                                        <div class="row mb-3">
                                                            <label for="input-meta-description-1"
                                                                class="col-sm-2 col-form-label">Product Description</label>
                                                            <div class="col-sm-10">
                                                                <textarea name="description" required rows="5" placeholder="Product Description" v-model="insertdata.description"
                                                                    id="description" class="form-control"></textarea>

                                                            </div>
                                                        </div>



                                                 



                                                        

                                                        <div class="card">
                                                            <div class="card-body">

                                                                <div class="row mb-3 required">
                                                                    <label for="input-meta-description-1"
                                                                        class="col-sm-2 col-form-label required-label">Thumbnail
                                                                        Laptop Image</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="file" required
                                                                            class="form-control"
                                                                            accept="image/png,image/jpeg"
                                                                            ref="thumbnail" @change="previewImage" />
                                                                        <span class="text-danger"
                                                                            v-if="errors.files">{{ errors . files[0] }}</span>

                                                                        <img v-if="dpreviewUrl" :src="dpreviewUrl"
                                                                            alt="Preview" class="img-fluid"
                                                                            style="max-width: 200px; margin-top: 10px; border: 1px solid #ddd; padding: 5px; background: #f9f9f9" />

                                                                    </div>

                                                                </div>

                                                                <div class="row mb-3 required">
                                                                    <label for="input-meta-description-1"
                                                                        class="col-sm-2 col-form-label required-label">
                                                                        Mobile Image
                                                                    </label>
                                                                    <div class="col-sm-10">
                                                                        <!-- File Input -->
                                                                        <input type="file" required
                                                                            class="form-control"
                                                                            accept="image/png,image/jpeg" ref="mfiles"
                                                                            @change="mobile_previewImage" />

                                                                        <!-- Error Message -->
                                                                        <span class="text-danger"
                                                                            v-if="errors.mobileImage">{{ errors . mobileImage }}</span>

                                                                        <!-- Image Preview -->
                                                                        <img v-if="mpreviewUrl" :src="mpreviewUrl"
                                                                            alt="Preview" class="img-fluid"
                                                                            style="max-width: 200px; margin-top: 10px; border: 1px solid #ddd; padding: 5px; background: #f9f9f9" />
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="card">
                                                            <div class="card-body">

                                                                <div class="row mb-3 required">
                                                                    <label for="input-meta-description-1"
                                                                        class="col-sm-2 col-form-label required-label">Sliders
                                                                        Image</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="file" multiple required
                                                                            class="form-control"
                                                                            accept="image/png,image/jpeg"
                                                                            @change="handleFiles" />
                                                                        <span class="text-danger"
                                                                            v-if="errors.files">{{ errors . files[0] }}</span>
                                                                        <div v-if="previewUrls.length"
                                                                            class="preview-container">
                                                                            <div v-for="(url, index) in previewUrls"
                                                                                :key="index"
                                                                                class="image-preview"
                                                                                style="display: inline-block; position: relative; margin-right: 10px; margin-top: 10px">
                                                                                <img :src="url"
                                                                                    alt="Preview" class="img-fluid"
                                                                                    style="max-width: 150px; border: 1px solid #ddd; padding: 5px; background: #f9f9f9" />
                                                                                <button type="button"
                                                                                    class="btn btn-danger btn-sm delete-btn"
                                                                                    @click="removeImage(index)"
                                                                                    style="position: absolute;top: -5px; right: -5px; border-radius: 50%; padding: 0.2rem 0.5rem; font-size: 12px;">
                                                                                    ×
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <button type="submit" class="btn btn-success px-5 w-100"><i
                                                                class="bx bx-check-circle mr-1"></i> Save &
                                                            Next</button>
                                                        <!-- dfgdfgdfg -->

                                                    </div>

                                                </div>
                                            </div>
                                        </form>
                                    </div>
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
            title: "Product Add",
        },
        data() {
            return {
                imageUrl: null,
                editor: null, // Store the editor instance
                mobileImage: null, // Stores the selected file
                mpreviewUrl: null, // Stores the preview URL
                dpreviewUrl: null, // Stores the preview URL
                thumbnail: null, // Stores the preview URL
                files: [],
                previewUrls: [],
                errors: {
                    files: null,
                    mobileImage: null, // Error message for mobile image
                    thumbnail: null, // Error message for mobile image
                },
                editorConfig: {
                    // Example editor configuration
                    toolbar: [
                        "bold",
                        "italic",
                        "link",
                        "bulletedList",
                        "numberedList",
                        "blockQuote",
                    ],
                    placeholder: "Enter description here...",
                },
                insertdata: {
                    id: "",
                    name: "",
                    description: "",
                    images: "",
                    meta_description: "",
                    meta_keywords: "",

                    status: 1,
                },
                inputValue: "",
                previewUrl: null,
                mpreviewUrl: null,

                images: [],
                notifmsg: "",
                file: "",
                files: "",
                errors: {},
            };
        },
        mounted() {
            // Check if CKEditor is available in window
            const checkCKEditor = () => {
                if (window.ClassicEditor) {
                    // Initialize CKEditor once it's loaded
                    ClassicEditor.create(this.$refs.editor)
                        .then((editor) => {
                            this.editor = editor;
                            this.editor.setData(this.insertdata.description); // Set initial content
                            // Listen for changes and update the data model
                            this.editor.model.document.on("change:data", () => {
                                this.insertdata.description = this.editor.getData();
                            });
                        })
                        .catch((error) => {
                            console.error("There was a problem initializing CKEditor:", error);
                        });
                } else {
                    // Retry after 100ms if CKEditor isn't loaded yet
                    setTimeout(checkCKEditor, 100);
                }
            };
            // Try loading CKEditor
            checkCKEditor();
        },

        // CKEDITOR.replace('editor');

        beforeDestroy() {
            if (this.editor) {
                this.editor.destroy(); // Clean up the editor instance when the component is destroyed
            }
        },
        methods: {
            previewImage(event) {
                const file = event.target.files[0]; // Get the first file
                if (file) {
                    // Validate file type
                    if (!file.type.match("image/png") && !file.type.match("image/jpeg")) {
                        this.errors.thumbnail = "Only PNG and JPEG images are allowed.";
                        return;
                    }

                    this.errors.thumbnail = null; // Clear any previous error
                    this.thumbnail = file; // Set the selected file

                    // Generate a preview
                    const reader = new FileReader();
                    reader.onload = (e) => {
                        this.dpreviewUrl = e.target.result; // Set the preview URL
                        //console.log("Preview URL:", this.dpreviewUrl); // Debugging log
                    };
                    reader.readAsDataURL(file);
                }
            },

            //this.formData.append("thumbnail", file);

            mobile_previewImage(event) {
                const file = event.target.files[0]; // Get the selected file

                if (file) {
                    // Validate file type
                    if (!file.type.match("image/png") && !file.type.match("image/jpeg")) {
                        this.errors.mobileImage = "Only PNG and JPEG images are allowed.";
                        return;
                    }

                    this.errors.mobileImage = null; // Clear any previous error
                    this.mobileImage = file; // Set the selected file

                    // Generate a preview
                    const reader = new FileReader();
                    reader.onload = (e) => {
                        this.mpreviewUrl = e.target.result; // Set the preview URL
                    };
                    reader.readAsDataURL(file);
                }
            },
            handleFiles(event) {
                this.files = Array.from(event.target.files); // Store files in an array
                this.previewUrls = []; // Clear previous previews

                if (this.files.length > 0) {
                    // Preview each selected image
                    this.files.forEach((file) => {
                        const reader = new FileReader();
                        reader.onload = (e) => {
                            this.previewUrls.push(e.target.result);
                        };
                        reader.readAsDataURL(file);
                    });
                }
            },

            handleImageUpload(event) {
                const files = event.target.files;
                for (let i = 0; i < files.length; i++) {
                    const file = files[i];
                    this.checkImageDimensions(file);
                }
            },

            removeImage(index) {
                console.log("Removing image at index:", index);
                console.log("Before remove:", this.previewUrls, this.files);
                this.previewUrls.splice(index, 1);
                this.files.splice(index, 1);
                console.log("After remove:", this.previewUrls, this.files);
            },

            resetInput() {
                this.previewUrl = null;
                this.$refs.files.value = "";
            },

            onFileSelected() {
                //this.file = this.$refs.file.files[0];
                this.files = this.$refs.files.files[0];
            },

            saveData() {
                const formData = new FormData();
                formData.append("thumbnail", this.thumbnail); //default images
                formData.append("mobile_image", this.mobileImage);
                // Append all files to formData

                if (this.files && this.files.length > 0) {
                    this.files.forEach((file, index) => {
                        formData.append("files[]", file); // Correctly append files with the key 'files[]'
                        console.log("files[]", file); // Debugging log
                    });
                }

                formData.append("id", this.insertdata.id);
                formData.append("name", this.insertdata.name);
                formData.append("description", this.insertdata.description);
                formData.append("meta_description", this.insertdata.meta_description);
                formData.append("meta_keywords", this.insertdata.meta_keywords);

                const headers = {
                    "Content-Type": "multipart/form-data",
                };
                this.$axios
                    .post("/product/save", formData, {
                        headers,
                    })
                    .then((res) => {
                        //$("#formrest")[0].reset();
                        this.success_noti();
                        const product_id = res.data.id;
                        this.$router.push({
                            path: "/ecommarce/product-preview",
                            query: {
                                parameter: product_id,
                            },
                        });
                        return false;
                        //this.$router.push('/ecommarce/product-list');
                    })
                    .catch((error) => {
                        if (error.response.status === 422) {
                            this.errors = error.response.data.errors;
                        }
                    });
            },
            success_noti() {
                Lobibox.notify("success", {
                    pauseDelayOnHover: true,
                    continueDelayOnInactiveTab: false,
                    position: "top right",
                    icon: "bx bx-check-circle",
                    msg: "Your data has been successfully inserted.",
                });
            },
        },
    };
</script>

<style scoped>
    #editor {
        height: 300px;
    }

    .image-preview {
        display: inline-block;
        position: relative;
        margin-right: 10px;
        margin-top: 10px;
    }

    .image-preview img {
        max-width: 150px;
        border: 1px solid #ddd;
        padding: 5px;
        background: #f9f9f9;
    }

    .delete-btn {
        position: absolute;
        top: -5px;
        right: -5px;
        border-radius: 50%;
        padding: 0.2rem 0.5rem;
        font-size: 12px;
    }

    .required-label::after {
        content: "\2605";
        color: red;
        margin-right: 4px;
    }

    ol,
    ul {
        padding-left: 0rem;
    }

    ul {
        list-style: none;
    }

    .bgColor {
        background-color: #c8c8c8;
        padding: 1px;
        border-radius: 2px;
    }

    .img-fluid {
        width: 300px;
        height: 150px;
    }

    .img-fluids {
        margin-top: 10px;
        width: 300px;
        height: 300px;
    }

    /* for checkbox */
    .multiselect {
        position: relative;
        font-family: Arial, sans-serif;
        width: 100%;
    }

    .select-box {
        border: 1px solid #ccc;
        padding: 8px;
        cursor: pointer;
        background-color: #fff;
    }

    .dropdown {
        border: 1px solid #ccc;
        border-top: none;
        max-height: 400px;
        overflow-y: auto;
        position: absolute;
        top: 100%;
        width: 100%;
        background-color: #fff;
        z-index: 1;
    }

    label {
        display: block;
        padding: 5px;
    }

    input[type="checkbox"] {
        margin-right: 8px;
    }

    .widthtxtbox {
        width: 50px;
    }
</style>
