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
                  <router-link to="/" href="javascript:;"
                    ><i class="bx bx-home-alt"></i
                  ></router-link>
                </li>
                <li class="breadcrumb-item" aria-current="page">
                  <router-link to="/ecommarce/product-list"
                    >Product List</router-link
                  >
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Product Preview
                </li>
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
                    <table class="table table-bordered w-100">
                      <tr>
                        <td width="21%">Product Name</td>
                        <td width="1%"><strong>:</strong></td>
                        <td width="78%">{{ productData.name }}</td>
                      </tr>

                      <tr>
                        <td>Description</td>
                        <td><strong>:</strong></td>
                        <td>
                          <div v-html="formattedDescription"></div>
                        </td>
                      </tr>



                      <tr>
                        <td>Meta Description</td>
                        <td><strong>:</strong></td>
                        <td>
                          <div v-html="metaformattedDescription"></div>
                        </td>
                      </tr>



                      <tr>
                        <td>Meta Keyword</td>
                        <td><strong>:</strong></td>
                        <td>
                          <div v-html="metaformattedKeywords"></div>
                        </td>
                      </tr>

                      <tr>
                        <td>Status</td>
                        <td><strong>:</strong></td>
                        <td>
                          <div v-if="productData.status === 0" class="marleft">
                            Draft
                          </div>
                          <div v-if="productData.status === 1" class="marleft">
                            Publish
                          </div>
                        </td>
                      </tr>
                    </table>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <div class="alert alert-primary" role="alert">
                        <center><small>Thumbnail Images</small></center>
                        <hr />
                        <img
                          :src="thumbnail"
                          alt="N/A"
                          class="img-fluid max-width-100 img-thumbnail"
                        />
                      </div>
                    </div>

                    <div class="col-md-3">
                      <div class="alert alert-primary" role="alert">
                        <center><small>Mobile Images</small></center>
                        <hr />
                        <img
                          :src="mobile_image"
                          alt="N/A"
                          class="img-fluid max-width-100 img-thumbnail"
                        />
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="alert alert-primary" role="alert">
                        <center><small>Sliders Images</small></center>

                        <div v-for="(row, rowIndex) in chunkedImages"
                          :key="rowIndex"
                          class="row mb-3">
                          <!-- Loop through each image in a chunk -->
                          <div v-for="(imageObj, imgIndex) in row"
                            :key="imgIndex"
                            class="col-4">
                            <img :src="imageObj.images" alt="N/A" class="img-fluid max-width-100 img-thumbnail"/>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- END -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--end row-->
    </div>
  </div>
</template>

<script>
export default {
  head: {
    title: "Product Preview",
  },
  data() {
    return {
      productData: {
        id: "",
        name: "",
        description: "",
        status: "",
        mobile_image: "",
        meta_description: "",
        meta_keywords: "",

        thumbnail: "",
      },
      thumbnail: "",
      mobile_image: "",
      notifmsg: "",
      errors: {},
      productAddImgs: [],
    };
  },
  async mounted() {
    this.productDetails();
    // this.varientHistory();
    // await this.fetchAttributeList();
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
      return this.productData.description.replace(/\n/g, "<br>");
    },
    metaformattedDescription() {
      return this.productData.meta_description.replace(/\n/g, "<br>");
    },
    metaformattedKeywords() {
      return this.productData.meta_keywords.replace(/\n/g, "<br>");
    },

    
  },
  methods: {
    productDetails() {
      let product_id = this.$route.query.parameter;
      this.$axios.get(`/product/productrow/${product_id}`).then((response) => {
        console.log("product row:" + response.data.description);
        this.productData.name = response.data.product.name;
        this.productData.description = response.data.description;

        this.productData.meta_description = response.data.meta_description;
        this.productData.meta_keywords = response.data.meta_keywords;


        this.productData.status = response.data.status;
        this.thumbnail = response.data.thumbnail;
        this.mobile_image = response.data.mobile_image;
        this.productAddImgs = response.data.product_imgs;
         
      });
    },
  },
};
</script>

<style scoped>
.marleft {
  margin-left: -7px;
}

.output-container {
  white-space: pre-line;
  margin-left: -7px;
}
</style>
