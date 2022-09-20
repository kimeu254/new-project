import { createStore } from 'vuex'
import createPersistedState from 'vuex-persistedstate'
import auth from '@/store/auth'
import faculties from '@/store/faculties'

const store = createStore({
    plugins:[
        createPersistedState()
    ],
    modules:{
        auth,
        faculties
    }
})

export default store