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
                                    <router-link to="/" href="javascript:;"><i class="bx bx-home-alt"></i></router-link>
                                </li>
                                <li class="breadcrumb-item" aria-current="page">
                                    <router-link to="/ecommarce/product-list">Product List </router-link>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Product</li>
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
                                        <form @submit.prevent="saveData()" id="formrest" class="forms-sample" enctype="multipart/form-data">
                                            <div class="card-body">
                                                <ul class="nav nav-pills mb-3" role="tablist">
                                                    <li class="nav-item" role="presentation">
                                                        <a class="nav-link active" data-bs-toggle="pill" href="#primary-pills-home" role="tab" aria-selected="true">
                                                            <div class="d-flex align-items-center">
                                                                <div class="tab-icon"><i class='bx bx-home font-18 me-1'></i>
                                                                </div>
                                                                <div class="tab-title">Products</div>
                                                            </div>
                                                        </a>
                                                    </li>
    
                                                </ul>
                                                <div class="tab-content" id="pills-tabContent">
                                                    <div class="tab-pane fade show active" id="primary-pills-home" role="tabpanel">
                                                        <!-- General  -->
                                                        <div class="row mb-3 required">
                                                            <label for="input-name-1" class="col-sm-2 col-form-label required-label">Name</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="name" placeholder="Name" v-model="insertdata.name" class="form-control" />
                                                                <input type="hidden" name="id" id="id" class="form-control" />
                                                                <span class="text-danger" v-if="errors.name">{{ errors . name[0] }}</span>
                                                            </div>
                                                        </div>
    
                                                        <div class="row mb-3">
                                                            <label for="input-meta-description-1" class="col-sm-2 col-form-label">Meta Description</label>
                                                            <div class="col-sm-10">
                                                                <textarea name="meta_description" required rows="5" placeholder="Meta Description" v-model="insertdata.meta_description" id="description" class="form-control"></textarea>
    
                                                            </div>
                                                        </div>
    
                                                        <div class="row mb-3">
                                                            <label for="input-meta-description-1" class="col-sm-2 col-form-label">Meta Keywords</label>
                                                            <div class="col-sm-10">
                                                                <textarea name="meta_keywords" required rows="5" placeholder="Meta Keyword" v-model="insertdata.meta_keywords" id="meta_keywords" class="form-control"></textarea>
    
                                                            </div>
                                                        </div>
    
                                                        <div class="row mb-3">
                                                            <label for="input-meta-description-1" class="col-sm-2 col-form-label">Product Description</label>
                                                            <div class="col-sm-10">
                                                                <!-- <textarea name="description" id="editor" required rows="5" ref="editor" placeholder="Product Description" v-model="insertdata.description" class="form-control"></textarea> -->
                                                                <div>
                                                                    <button type="button" @click="applyBold">Bold</button>
                                                                    <button type="button" @click="applyHeading('h1')">H1</button>
                                                                    <button type="button" @click="applyHeading('h2')">H2</button>
                                                                    <button type="button" @click="applyHeading('h3')">H3</button>
                                                                    <button type="button" @click="applyHeading('h4')">H4</button>
                                                                    <button type="button" @click="applyHeading('h5')">H5</button>
                                                                    <button type="button" @click="applyParagraph">Paragraph</button>
                                                                </div>
    
                                                                <textarea name="description" id="editor" required rows="5" ref="editor" placeholder="Product Description" v-model="insertdata.description" class="form-control"></textarea>
                                                            </div>
                                                        </div>
    
                                                        <div class="card">
                                                            <div class="card-body">
    
                                                                <div class="row mb-3 required">
                                                                    <label for="input-meta-description-1" class="col-sm-2 col-form-label required-label">Thumbnail
                                                                                                                                     Laptop Image</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="file" class="form-control" accept="image/png, image/jpeg" ref="thumbnail_default" @change="showDefaultImage" />
    
                                                                        <div v-if="imagePreview" class="mt-3">
                                                                            <img :src="imagePreview" alt="Image Preview" class="img-thumbnail" style="max-width: 200px;" />
                                                                        </div>
    
                                                                        <br/>
    
                                                                        <img :src="thumbnail" alt="N/A" class="img-fluid max-width-100 img-thumbnail" />
                                                                    </div>
    
                                                                </div>
    
                                                                <div class="row mb-3 required">
                                                                    <label for="input-meta-description-1" class="col-sm-2 col-form-label required-label">
                                                                                                                                    Mobile Image
                                                                                                                                </label>
                                                                    <div class="col-sm-10">
                                                                        <!-- File Input -->
                                                                        <input type="file" class="form-control" accept="image/png,image/jpeg" ref="mfiles" @change="mobile_previewImage" />
    
                                                                        <!-- Error Message -->
                                                                        <span class="text-danger" v-if="errors.mobileImage">{{ errors . mobileImage }}</span>
    
                                                                        <!-- Image Preview -->
                                                                        <img v-if="mpreviewUrl" :src="mpreviewUrl" alt="Preview" class="img-fluid" style="max-width: 200px; margin-top: 10px; border: 1px solid #ddd; padding: 5px; background: #f9f9f9" />
    
                                                                        <br />
                                                                        <div class="alert alert-primary" role="alert">
                                                                            <center><small>Mobile Images</small>
                                                                            </center>
                                                                            <hr />
                                                                            <img :src="mobile_image" alt="N/A" class="img-fluid max-width-100 img-thumbnail" />
                                                                        </div>
                                                                    </div>
                                                                </div>
    
                                                            </div>
                                                        </div>
    
                                                        <div class="card">
                                                            <div class="card-body">
    
                                                                <div class="row mb-3 required">
                                                                    <label for="input-meta-description-1" class="col-sm-2 col-form-label required-label">Sliders
                                                                                                                                    Image</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="file" multiple class="form-control" accept="image/png,image/jpeg" @change="handleFiles" />
                                                                        <span class="text-danger" v-if="errors.files">{{ errors . files[0] }}</span>
                                                                        <div v-if="previewUrls.length" class="preview-container">
                                                                            <div v-for="(url, index) in previewUrls" :key="index" class="image-preview" style="display: inline-block; position: relative; margin-right: 10px; margin-top: 10px">
                                                                                <img :src="url" alt="Preview" class="img-fluid" style="max-width: 150px; border: 1px solid #ddd; padding: 5px; background: #f9f9f9" />
                                                                                <button type="button" class="btn btn-danger btn-sm delete-btn" @click="removeImage(index)" style="position: absolute;top: -5px; right: -5px; border-radius: 50%; padding: 0.2rem 0.5rem; font-size: 12px;">
                                                                                                                                                ×
                                                                                                                                            </button>
                                                                            </div>
                                                                        </div>
                                                                        <br /> <br />
                                                                        <div class="col-md-6">
                                                                            <div class="alert alert-primary" role="alert">
                                                                                <center><small>Sliders Images</small>
                                                                                </center>
    
                                                                                <div v-for="(row, rowIndex) in chunkedImages" :key="rowIndex" class="row mb-3">
                                                                                    <!-- Loop through each image in a chunk -->
                                                                                    <div v-for="(imageObj, imgIndex) in row" :key="imgIndex" class="col-4 position-relative">
                                                                                        <span class="cross-button-left" @click="removeImages(imageObj.id)">×</span>
                                                                                        <img :src="imageObj.images" alt="N/A" class="img-fluid max-width-100 img-thumbnail" />
                                                                                    </div>
                                                                                </div>
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
        title: "Product Edit",
    },
    data() {
        return {

            imagePreview: null,
            // Variable to store selected image file
            selectedImage: null, // To store the selected file
            // dpreviewUrl: null,  
            imageUrl: null,
            editor: null, // Store the editor instance
            mobileImage: null, // Stores the selected file
            mpreviewUrl: null, // Stores the preview URL
            dpreviewUrl: null, // Stores the preview URL
            thumbnail: null, // Stores the preview URL
            files: [],
            previewUrls: [],
            mobile_image: "",
            errors: {
                files: null,
                mobileImage: null, // Error message for mobile image
                thumbnail: null, // Error message for mobile image
            },
            productData: {
                id: "",
                name: "",
                description: "",
                status: "",
                mobile_image: "",
                thumbnail: "",
            },

            insertdata: {
                id: "",
                name: "",
                description: "",
                meta_description: "",
                meta_keywords: "",
                images: "",
                status: 1,
            },
            inputValue: "",
            previewUrl: null,
            mpreviewUrl: null,
            productAddImgs: [],
            images: [],
            notifmsg: "",
            file: "",
            files: "",
            errors: {},
        };
    },
    async mounted() {
        // checkCKEditor();
        this.productDetails();
        //add editor

        //end
    },
    beforeDestroy() {
        if (this.editor) {
            this.editor.destroy(); // Clean up the editor instance when the component is destroyed
        }
    },
    computed: {
        chunkedImages() {
            const chunkSize = 3; // Number of images per row
            const chunks = [];
            for (let i = 0; i < this.productAddImgs.length; i += chunkSize) {
                chunks.push(this.productAddImgs.slice(i, i + chunkSize));
            }
            return chunks;
        },
        formattedDescription() {
            // Replace newlines with <br> tags for rendering in HTML
            return this.productData.description.replace(/\n/g, "<br>");
        },
    },


    methods: {
        applyBold() {
            this.applyFormatting('bold');
        },
        applyHeading(headingTag) {
            this.applyFormatting(headingTag);
        },
        applyParagraph() {
      this.applyFormatting('p');
    },
    
    
        applyFormatting(type) {
            const textarea = this.$refs.editor;
      const cursorPosition = textarea.selectionStart;
      const selectedText = textarea.value.substring(textarea.selectionStart, textarea.selectionEnd);

      let formattedText = selectedText;

      // If bold button is clicked
      if (type === 'bold') {
        formattedText = `<b>${selectedText}</b>`;  // Wrap with <b> tag
      } 
      // If heading button is clicked (h1, h2, etc.)
      else if (['h1', 'h2', 'h3', 'h4', 'h5'].includes(type)) {
        formattedText = `<${type}>${selectedText}</${type}>`;  // Wrap with heading tags
      }

      else if (type === 'p') {
        formattedText = `<p>${selectedText}</p>`;  // Wrap with <p> tag
      }
      // Replace selected text with formatted text
      const beforeText = textarea.value.substring(0, textarea.selectionStart);
      const afterText = textarea.value.substring(textarea.selectionEnd);

      textarea.value = beforeText + formattedText + afterText;
      this.insertdata.description = textarea.value; // Update v-model

      // Set cursor position back to where it was
      textarea.selectionStart = textarea.selectionEnd = cursorPosition + formattedText.length;
        },


        showDefaultImage(event) {
            const file = event.target.files[0]; // Get the selected file

            if (file) {
                // Validate the file type (only PNG and JPEG allowed)
                if (!file.type.match("image/png") && !file.type.match("image/jpeg")) {
                    alert("Only PNG and JPEG images are allowed.");
                    return;
                }

                // Store the selected image file
                this.selectedImage = file;

                // Use FileReader to generate the image preview
                const reader = new FileReader();
                reader.onload = (e) => {
                    // Set the image preview URL
                    this.imagePreview = e.target.result;
                };

                // Read the image as a data URL
                reader.readAsDataURL(file);
            }
        },

        previewImage() {
            // Correctly access the input element using the ref 'thumbnail'
            const input = this.$refs.thumbnail;

            // Check if input exists and if files are selected
            if (input && input.files && input.files[0]) {
                const file = input.files[0]; // Get the first selected file

                // Validate file type (only PNG and JPEG)
                if (!file.type.match("image/png") && !file.type.match("image/jpeg")) {
                    this.errors.thumbnail = "Only PNG and JPEG images are allowed.";
                    return;
                }

                this.errors.thumbnail = null; // Clear any previous error message
                this.thumbnail = file; // Store the selected file

                // Generate a preview using FileReader
                const reader = new FileReader();
                reader.onload = (e) => {
                    this.dpreviewUrl = e.target.result; // Set the preview URL
                };
                reader.readAsDataURL(file); // Read the file as a data URL
            } else {
                this.errors.thumbnail = "No file selected."; // Handle no file selected
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

        removeImages(id) {
            this.$axios
                .get(`/product/additionaIMagesDelete`, {
                    params: {
                        images_id: id,
                    },
                })
                .then((response) => {
                    //console.log(`Varient History: ${response.data}`);
                    this.productDetails();
                });
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
                .post("/product/productUpdate", formData, {
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

        handleImageUpload(event) {
            const files = event.target.files;
            for (let i = 0; i < files.length; i++) {
                const file = files[i];
                this.checkImageDimensions(file);
            }
        },

        removeImage(index) {
            this.images.splice(index, 1);
        },
        previewImage(event) {
            this.onFileSelected();
            const file = event.target.files[0];
            this.previewUrl = URL.createObjectURL(file);
            // this.checkImageDimensionsThunbnail(file);
        },
        // Update the description data model when the content changes
        updateDescription(event) {
            this.insertdata.description = event.target.innerHTML;
        },
        productDetails() {
            let product_id = this.$route.query.parameter;
            this.$axios.get(`/product/productrow/${product_id}`).then((response) => {
                //console.log("product row:" + response.data);
                this.insertdata.id = response.data.product.id;
                this.insertdata.name = response.data.product.name;
                this.insertdata.description = response.data.description;
                this.insertdata.meta_description = response.data.meta_description;
                this.insertdata.meta_keywords = response.data.meta_keywords;
                this.insertdata.status = response.data.status;
                this.thumbnail = response.data.thumbnail;
                this.mobile_image = response.data.mobile_image;
                this.productAddImgs = response.data.product_imgs;

                // = response.data.product_cat;
            });
        },
    },
};
</script>

<style scoped>
/* Position and style the cross button on the left side */

#editor {
    height: 300px;
}

.cross-button-left {
    position: absolute;
    top: 10px;
    left: 10px;
    /* Move the button to the left */
    font-size: 18px;
    color: white;
    background-color: red;
    border: none;
    border-radius: 50%;
    width: 25px;
    height: 25px;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    z-index: 10;
    text-align: center;
    line-height: 1;
}

/* Add hover effect for better interaction */

.cross-button-left:hover {
    background-color: darkred;
}

/* Ensure the image container has relative positioning */

.position-relative {
    position: relative;
}

/* Add hover effect for better interaction */

.cross-button:hover {
    background-color: darkred;
}

/* Ensure the image container has relative positioning */

.position-relative {
    position: relative;
}

.required-label::after {
    content: "\2605";
    color: red;
    margin-right: 4px;
}

/* CSS */

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
