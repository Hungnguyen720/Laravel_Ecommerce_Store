<template>
<div>
    <h1>analytics</h1>
    <div class="row">
        <div class="col-lg">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Total Sales</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div id="app">
                        <linechart></linechart>
                    </div>
                </div>
            </div>
        </div>
            <div class="col-lg">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Orders</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div id="app">
                    </div>
                    <orderschart></orderschart>
                    </div>
                </div>
            </div>
    </div>
        <div class="row">
            <div class="col-12">
                <h1>{{ ordersPendingFulfillment }} Open Orders Pending Fulfillment </h1>
            </div>
        </div>
</div>
</template>
<script>

export default {
    data() {
        return {
            message: 'Hello, world',
            content: 0,
            dataArray: [],
            ordersPendingFulfillment: 0
        }
    },

     mounted() {
         this.content = 1
         this.getOrdersPendingFulfillment();
    },

    methods: {
        displayContent(id){
            this.content=id;
        },
        getOrdersPendingFulfillment(){
             fetch('api/orders/pendingfulfillment')
            .then(res => res.json ())
            .then(res => {
                this.ordersPendingFulfillment = res;
            })
        }
    },
}
</script>
