import { createStore } from 'vuex'
import createPersistedState from 'vuex-persistedstate'
import auth from '@/store/auth'
import faculties from '@/store/faculties'
import courses from '@/store/courses'

const store = createStore({
    plugins:[
        createPersistedState()
    ],
    modules:{
        auth,
        faculties,
        courses,
    }
})

export default store