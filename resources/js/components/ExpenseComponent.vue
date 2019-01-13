
<template>
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card card-default">
              <div class="card-header">
                    <span>List All Expense</span>
                </div>
              <div class="card-body">
                 <table class="table">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Expense Title</th>
                        <th>Category</th>
                        <th>Amount</th>
                        <th>Description</th>
                      </tr>
                    </thead>
                    <tbody>
                    <tr  v-for="expense in expenses">
                    <td>{{expense.id}}</td>
                    <td>{{expense.title}}</td>
                    <td>{{expense.category.title}}</td>
                    <td>{{expense.amount}}</td>
                    <td>{{expense.desc}}</td>
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
            expenses: null,
            error: null,
        };
    },
    created() {
        this.fetchExpenseData();
    },
    methods: {
        fetchExpenseData() {
            this.error = this.expenses = null;
            this.loading = true;
            axios
                .get('/expense')
                .then(response => {
                this.expenses=response.data;
                    console.log(response);
                });
        }
    }
  }
</script>