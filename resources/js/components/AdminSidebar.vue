<template>
<div>
<div class="wrapper">
    <!-- Sidebar -->


</div>

</div>

</template>

<script>
export default {
    data() {
        return {
        }
    },

     created() {
         this.changeContent();
    },

    methods: {
        changeContent(){
            this.$emit('changeContent', 1)
        }
    },
}
</script>


