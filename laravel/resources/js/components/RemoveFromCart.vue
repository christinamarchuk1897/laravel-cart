<template>
    <div>
        <button
            v-if="isCart"
            class="button-28 clear"
            role="button"
            @click="clearCart"
        >
            <span>Clear</span>
        </button>
        <button v-else class="button-28" role="button" @click="removeFromCart">
            <span>Remove</span>
        </button>
    </div>
</template>

<script>
import axios from "axios";
export default {
    data() {
        return {
            isGuest: this.guest ? "/guest" : "",
        };
    },
    props: {
        id: {
            type: [Number],
        },
        isCart: {
            type: Boolean,
            default: false,
        },
        guest: {
            type: [Boolean],
            default: false,
        },
    },
    methods: {
        removeFromCart() {
            axios
                .post(`${this.isGuest}/cart/remove`, { id: this.id })
                .then((response) => location.reload());
        },
        clearCart() {
            axios
                .post(`${this.isGuest}/cart/clear`, { id: 1 })
                .then((response) => location.reload());
        },
    },
};
</script>
<style lang="scss" scoped>
.clear {
    width: 100%;
}
</style>
