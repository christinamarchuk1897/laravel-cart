<template>
    <button
        class="button-28 add-btn"
        role="button"
        @click="addToCart"
        :disabled="disable"
    >
        <a href="#" v-if="!disable">Add to cart</a>
        <a href="#" v-else>Added to cart</a>
    </button>
</template>

<script>
import axios from "axios";
export default {
    data() {
        return {
            disable: this.disabled,
        };
    },
    props: {
        product: {
            type: [Object],
        },
        disabled: {
            type: [Boolean],
            default: false,
        },
    },
    methods: {
        addToCart() {
            axios
                .post("/guest/cart", { product: this.product })
                .then((res) => (this.disable = true));
        },
    },
};
</script>
