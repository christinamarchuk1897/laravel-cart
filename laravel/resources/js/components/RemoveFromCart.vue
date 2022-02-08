<template>
    <button class="button-28" role="button" @click="removeFromCart">
        <span>Remove</span>
    </button>
</template>

<script>
import axios from "axios";
export default {
    data() {
        return {};
    },
    props: {
        id: {
            type: [Number],
        },
    },
    methods: {
        removeFromCart() {
            axios
                .delete("/cart", { params: { id: this.id } })
                .then((response) => location.reload());
        },
    },
};
</script>
