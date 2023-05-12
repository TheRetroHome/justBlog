import { createStore } from 'vuex';

const store = createStore({
    state: {
        firstname: 'Jon',
        lastname: 'Jayson'
    },
    actions: {
        textAction(context, payload) {
            context.commit('SET_FIRSTNAME', response.data.name);
            context.commit('SET_LASTNAME', response.data.lastname);
        }
    },
    getters: {
        getFullName(state) {
            return state.firstname + ' ' + state.lastname;
        },
    },
    mutations: {
        SET_FIRSTNAME(state, payload) {
            state.firstname = payload;
        },
        SET_LASTNAME(state, payload) {
            state.lastname = payload;
        },
    }
});

export default store;
