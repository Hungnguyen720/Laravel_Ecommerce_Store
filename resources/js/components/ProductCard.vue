

<template>
<div class="container">
    <div class="card ml-3 mb-4" style="width: 20rem; float: left;"
        v-for="product in products"
        v-bind:key="product.id"
        >
            <a v-bind:href = "'/shop/' + product.slug"> <img class="card-img-top" v-bind:src= product.img alt="Card image cap" /></a>
            <div class="card-body"/>
            <h3>{{product.name}}</h3>
            <h3>{{product.type}}</h3>
            <h3>${{product.price}}</h3>
        </div>
</div>
</template>

<script>
export default {
    data() {
        return {
            products: [],
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
            fetch('/api/products')
            .then(res => res.json ())
            .then(res => {
                this.products = res
                console.log(res)
            })
        }
    },
}
</script>
