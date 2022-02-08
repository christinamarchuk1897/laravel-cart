export default {
    state: {
        isDisabled: false,
    },

    getters: {
        getButtonState(state) {
            return state.isDisabled;
        },
    },

    actions: {},

    mutations: {
        changeButtonState(state, data) {
            return (state.isDisabled = data);
        },
    },
};
