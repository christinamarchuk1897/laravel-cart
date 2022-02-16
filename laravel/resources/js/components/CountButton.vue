<template>
    <div>
        <b-input-group>
            <div class="wrapper">
                <b-form-input type="number" min="1" :value="qty"></b-form-input>
                <b-input-group-append>
                    <b-button
                        variant="outline-secondary"
                        @click="incrementCount"
                    >
                        <b-icon icon="chevron-up"></b-icon>
                    </b-button>
                    <b-button variant="outline-primary" @click="decrementCount">
                        <b-icon icon="chevron-down"></b-icon>
                    </b-button>
                </b-input-group-append>
            </div>
        </b-input-group>
    </div>
</template>

<script>
export default {
    data() {
        return {
            qty: this.count,
        };
    },

    props: {
        count: {
            type: [Number],
            default: 1,
        },
        id: {
            type: [Number],
        },
    },

    methods: {
        incrementCount() {
            this.qty++;
            this.changeQuantity();
        },
        decrementCount() {
            if (this.qty > 1) {
                this.qty--;
                this.changeQuantity();
            }
        },
        changeQuantity() {
            axios
                .post("/cart/update-cart", { id: this.id, quantity: this.qty })
                .then((resp) => location.reload());
        },
    },
};
</script>

<style lang="scss" scoped>
.input-group {
    flex-wrap: nowrap;
    height: 50px;
}
.wrapper {
    display: flex;
    width: 100%;
    position: relative;
    .input-group-append {
        display: flex;
        flex-direction: column;
        position: absolute;
        right: 1px;
        top: 4px;
        height: 45px;
        button {
            border: none;
            padding: 0;
            color: #324047 !important;
            background-color: #fff !important;
            height: 20px;
            width: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            &:hover,
            &:active {
                background: #fff;
            }
            .b-icon.bi {
                font-size: 90% !important;
            }
            &:focus {
                outline: none !important;
                box-shadow: none !important;
            }
        }
    }
    .form-control {
        border: 2px solid #324047 !important;
        border-radius: 8px !important;
        &:focus {
            outline: none !important;
            box-shadow: none !important;
        }
    }
}
</style>
