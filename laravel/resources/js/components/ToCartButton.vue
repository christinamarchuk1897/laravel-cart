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
            isDisable: Array.isArray(this.inCart)
                ? this.inCart.includes(this.product.id)
                : this.inCart,
        };
    },
    props: {
        product: {
            type: [Array, Object],
        },
        inCart: {
            type: [Array, Boolean, Object],
            default: false,
        },
    },
    mounted() {
        console.log(this.inCart);
    },
    methods: {
        addToCart() {
            axios
                .post("/cart", { product_id: this.product.id })
                .then((res) => (this.isDisable = true));
        },
    },
};
</script>
