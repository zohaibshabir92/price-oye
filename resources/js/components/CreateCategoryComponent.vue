<template>
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-8">
         <div class="card card-default">
            <div class="card-header">
               <span>Create Category</span>
            </div>
            <div class="card-body">
               <div class="form-group">
                  <label class="control-label col-sm-4" >Title: </label>
                  <div class="col-sm-10"> 
                     <input type="text" name="name" class="form-control">
                  </div>
               </div>
               <div class="form-group">
                  <label class="control-label col-sm-4" >Description: </label>
                  <div class="col-sm-10"> 
                     <input type="text" name="description" class="form-control">    
                  </div>
               </div>
              
               <div class="form-group">
                  <div class="col-sm-offset-4 col-sm-10">
                     <button @click="storeCategory" class="btn btn-default">Submit</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   </div>
</template>
<script>
   export default {
   methods: {
       storeCategory() {
           let name=$("input[name='name']").val();
           let description=$("input[name='description']").val();
           axios
               .post('/category',{"name":name,"description":description})
               .then(response => {
               this.$router.push('/category');
               });
       }, 
   }
   }
</script>