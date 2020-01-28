<template>
    <div class="container" >
        <div class="header">
            <h1>Products</h1>
            <button class="btn">Add product</button>
        </div>
            <div class="sub-header">
                <span class="btn">Export</span>
                <span class="btn">Import</span>
            </div>
            <div class="admin-product-content">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="col">Inventory</th>
                            <th scope="col">Type</th>
                            <th scope="col">Price</th>
                        </tr>
                    </thead>
                </table>
            </div>
    </div>
</template>

<script>
/*
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
*/
</script>

