import { createWebHistory, createRouter } from 'vue-router'
import store from '@/store'

/* Guest Component */
const Login = () => import('@/components/Login.vue')
const Register = () => import('@/components/Register.vue')
/* Guest Component */

/* Layouts */
const DahboardLayout = () => import('@/components/layouts/Default.vue')
/* Layouts */

/* Authenticated Component */
const Dashboard = () => import('@/components/Dashboard.vue')
const Faculties = () => import('@/components/Faculties.vue')
const Courses = () => import('@/components/Courses.vue')
const Units = () => import('@/components/Units.vue')
const Users = () => import('@/components/Users.vue')
const editFaculty = () => import('@/components/cruds/edit/EditFaculty.vue')
/* Authenticated Component */


const routes = [
    {
        name: "login",
        path: "/login",
        component: Login,
        meta: {
            middleware: "guest",
            title: `Login`
        }
    },
    {
        name: "register",
        path: "/register",
        component: Register,
        meta: {
            middleware: "guest",
            title: `Register`
        }
    },
    {
        path: "/",
        component: DahboardLayout,
        meta: {
            middleware: "auth"
        },
        children: [
            {
                name: "dashboard",
                path: '/',
                component: Dashboard,
                meta: {
                    title: `Dashboard`
                }
            },
            {
                name: "users",
                path: '/users',
                component: Users,
                meta: {
                    title: `Users`
                }
            },
            {
                name: "faculties",
                path: '/faculties',
                component: Faculties,
                meta: {
                    title: `Faculties`
                }
            },
            {
                name: "editFaculty",
                path: '/editFaculty/:id',
                component: editFaculty,
                params: true,
                meta: {
                    title: `editFaculty`
                }
            },
            {
                name: "courses",
                path: '/courses',
                component: Courses,
                meta: {
                    title: `Courses`
                }
            },
            {
                name: "units",
                path: '/units',
                component: Units,
                meta: {
                    title: `Units`
                }
            },
        ]
    }
]

const router = createRouter({
    history: createWebHistory(),
    routes, // short for `routes: routes`
})

router.beforeEach((to, from, next) => {
    document.title = to.meta.title
    if (to.meta.middleware == "guest") {
        if (store.state.auth.authenticated) {
            next({ name: "dashboard" })
        }
        next()
    } else {
        if (store.state.auth.authenticated) {
            next()
        } else {
            next({ name: "login" })
        }
    }
})

export default router