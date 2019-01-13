<template>
  <vue-event-calendar :events="demoEvents">
 
    </vue-event-calendar>
</template>
 
<script>
export default {
  data() {
        return {
            demoEvents: []
        };
    },
    created() {
        this.fetchExpenseData();
    },
    methods: {
        fetchExpenseData() {
            this.error = this.demoEvents = [];
            this.loading = true;
            axios
                .get('/expense')
                .then(response => {
                this.demoEvents=response.data;
                    
                });
        }
    }
}
</script>

