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
            isDisable: false,
        };
    },
    props: {
        product: {
            type: [Array, Object],
        },
        disabled: {
            type: String,
            default: false,
        },
    },
    methods: {
        addToCart() {
            axios
                .post("/cart", { id: this.product.id })
                .then((response) => (this.isDisable = true));
        },
    },
    mounted() {
        if (this.disabled) {
            this.isDisable = this.disabled;
        }
    },
};
</script>
