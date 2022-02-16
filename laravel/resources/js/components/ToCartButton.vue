<template>
    <button
        class="button-28 add-btn"
        role="button"
        @click="addToCart"
        :disabled="isDisable"
    >
        <a v-if="!isDisable" href="#">Add to cart</a>
        <a v-else href="#">Added to cart</a>
    </button>
</template>

<script>
import axios from "axios";
export default {
    data() {
        return {
            isDisable: this.inCart[this.product.id] ? true : false,
        };
    },
    props: {
        product: {
            type: [Array, Object],
        },
        inCart: {
            type: [Array, Object],
            default: false,
        },
    },
    mounted() {},
    methods: {
        addToCart() {
            axios
                .post("/cart", { product: this.product })
                .then((res) => (this.isDisable = true));
        },
    },
};
</script>
