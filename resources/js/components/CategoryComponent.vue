<template>
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card card-default">
              <div class="card-header">
                    <span>List All Categories</span>
                </div>
              <div class="card-body">
                 <table class="table">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Category Title</th>
                        <th>Description</th>
                  
                      </tr>
                    </thead>
                    <tbody>
                    <tr  v-for="category in categories">
                    <td>{{category.id}}</td>
                    <td>{{category.title}}</td>
                    <td>{{category.description}}</td>
                    </tr>
                    </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
</template>

<script>
    export default {

        data() {
        return {
            categories: null,
            error: null,
        };
    },
    created() {
        this.fetchCategoryData();
    },
    methods: {
        fetchCategoryData() {
            this.error = this.categories = null;
            this.loading = true;
            axios
                .get('/category')
                .then(response => {
                this.categories=response.data;
                    console.log(response);
                });
        }
    }
  }
</script>