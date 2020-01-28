<template>
        <div class="container" >
        <div class="header">
            <h1>Orders</h1>
            <button class="btn">Create Order</button>
        </div>
            <div class="sub-header">
                <span class="btn">Export</span>
                <span class="btn">Import</span>
            </div>
            <div class="admin-product-content">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Order</th>
                            <th scope="col">Date</th>
                            <th scope="col">Customer</th>
                            <th scope="col">Payment</th>
                            <th scope="col">status</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="order in orders" v-bind:key="order.id">
                            <td>{{order.order_number}}</td>
                            <td>{{order.date_ordered}}</td>
                            <td>{{order.customer}}</td>
                            <td>{{order.payment_status}}</td>
                            <td>{{order.fulfillment_status}}</td>
                            <td>{{order.order_total}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            orders: []
        }
    },

     mounted() {
         this.getOrders();
    },

    methods: {
        getOrders(){
            fetch('/api/orders')
            .then(res => res.json ())
            .then(res => {
                this.orders = res
                console.log(res)
            })
        }
    },
}
</script>


