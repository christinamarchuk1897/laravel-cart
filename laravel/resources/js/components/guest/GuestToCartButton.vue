<template>
    <button class="button-28 add-btn" role="button" @click="addToCart">
        <a href="#">Add to cart</a>
        <!-- <a href="#">Added to cart</a> -->
    </button>
</template>

<script>
import axios from "axios";
export default {
    data() {
        return {};
    },
    props: {
        product: {
            type: [Object],
        },
    },
    mounted() {},
    methods: {
        addToCart() {
            axios
                .post("/guest/cart", { product: this.product })
                .then((res) => console.log(res.data, this.product));
        },
    },
};
</script>
