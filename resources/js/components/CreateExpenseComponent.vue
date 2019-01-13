<template>
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-8">
         <div class="card card-default">
            <div class="card-header">
               <span>Create Expense</span>
            </div>
            <div class="card-body">
               <div class="form-group">
                  <label class="control-label col-sm-4" >Title: </label>
                  <div class="col-sm-10"> 
                     <input type="text" name="name" class="form-control" v-validate="'required'">
                     <span v-show="errors.has('name')">{{ errors.first('name') }}</span>
                  </div>
               </div>
               <div class="form-group">
                  <label class="control-label col-sm-4" >Amount </label>
                  <div class="col-sm-10"> 
                     <input type="number" min="0" name="amount" class="form-control" v-validate="'required'">
                  </div>
               </div>
               <div class="form-group">
                  <label class="control-label col-sm-4" >Category: </label>
                  <div class="col-sm-10"> 
                  <select v-for="category in categories" id="category" class="form-control">
                     <option :value=category.id>{{category.title}}</option>
                  </select>
                  </div>
               </div>
               <div class="form-group">
                  <label class="control-label col-sm-4" >Date: </label>
                  <div class="col-sm-10"> 
                     <input type="date" format='yyyy/MM/dd' name="date" class="form-control">
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
                     <button @click="storeExpense" class="btn btn-default">Submit</button>
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
   
       data() {
       return {
           categories: null,
           error: null,
       };
   },
   created() {
       this.fetchCategories();
   },
   methods: {
       storeExpense() {
           let name=$("input[name='name']").val();
           let description=$("input[name='description']").val();
           let amount=$("input[name='amount']").val();
           let category=$('select#category option:selected').val();
           let date=$("input[name='date']").val();
           let newdate = date.toString().replace(/-/g, '/');
           axios
               .post('/expense',{"name":name,"description":description,"amount":amount,"category":category,"date":newdate})
               .then(response => {
               this.$router.push('/expense');
               });
       }, 
       fetchCategories() {
           axios
               .get('/category')
               .then(response => {
               this.categories=response.data;
               });

       }
   }
   }
</script>