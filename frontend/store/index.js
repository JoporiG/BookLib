export const state = () => ({
    authenticated: false
})

export const mutations = {
    changeAuth(state){
        state.authenticated = !state.authenticated;
    }
}

export const actions = {
    changeAuth(ctx){
        ctx.commit('changeAuth');
    }
}