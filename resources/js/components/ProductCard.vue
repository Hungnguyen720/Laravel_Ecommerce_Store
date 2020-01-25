<template>
    <div>
    <h1>product card</h1>
    <div class="card card-body mb-2" v-for="item in products" v-bind:key="item.id">
        <h3>{{ item.name}}</h3>
        <h3>{{item.type}}</h3>
        <h3>{{item.quantity}}</h3>
        <h3>{{item.price}}</h3>
        
    </div>
    <h1>test</h1>
    </div>
</template>

<script>
export default {
    data(){
        return {
            products: [],
            product:{
                id:'',
                name: '',
                type: '',
                quantity: '',
                price: ''
            },
            product_id: '',
            pagination: {},
            edit: false
        }
    },

    created() {
        this.fetchProducts();
    },

    methods: {
        fetchProducts(){
            axios.get('/products')
            .then(res => {
                console.log(res.data)
                this.product = res.data
            })
        }
    }
}
</script>
