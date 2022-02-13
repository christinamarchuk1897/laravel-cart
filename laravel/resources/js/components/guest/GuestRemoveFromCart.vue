<template>
    <div>
        <button
            v-if="isClear"
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
        return {};
    },
    props: {
        isClear: {
            type: [Boolean],
            default: false,
        },
        id: {
            type: [Number],
        },
    },
    methods: {
        clearCart() {
            axios
                .post("/guest/cart/clear", { id: 1 })
                .then((response) => location.reload());
        },
        removeFromCart() {
            axios
                .post("/guest/cart/remove", { id: this.id })
                .then((res) => location.reload());
        },
    },
};
</script>
<style lang="scss" scoped>
.clear {
    width: 100%;
}
</style>
