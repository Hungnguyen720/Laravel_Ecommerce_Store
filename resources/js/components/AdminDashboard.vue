<template>
<div>
    <nav id="sidebar">
        <div class="sidebar-header">
            <button class="btn" v-on:click="displayContent(5)"><h3 class="c-w">Dashboard</h3></button>
        </div>
        <ul class="list-unstyled components">
            <li>
                <a  v-on:click="displayContent(1)" href="#">Analytics</a>
            </li>
            <li>
                <a v-on:click="displayContent(2)" href="#">Products</a>
            </li>
            <li>
                <a v-on:click="displayContent(3)" href="#">Orders</a>
            </li>
            <li>
                <a v-on:click="displayContent(4)" href="#">Users</a>
            </li>
        </ul>
    </nav>

    <div class="container">
        <span style="display: none">{{content}}</span>
                    <div v-if="content == 5" id="app3">
                <adminhome></adminhome>
            </div>
            <div v-if="content == 1" id="app3">
                <adminanalytics></adminanalytics>
            </div>
            <div v-if="content == 2" id="app4">
                <adminproducts></adminproducts>
            </div>
            <div v-if="content == 3" id="app5">
                <adminorders></adminorders>
            </div>
            <div v-if="content == 4" id="app6">
                <adminmanageusers></adminmanageusers>
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
        }
    },

     mounted() {
         this.content = 3
    },

    methods: {
        displayContent(id){
            this.content=id;
        }
    },
}
</script>
