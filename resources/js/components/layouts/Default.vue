<template>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-success">
            <div class="container">
                <router-link :to="{name:'dashboard'}" class="navbar-brand">
                    <h2>
                        <span class="text-white">Past</span>
                        <span class="text-warning">Papers</span>
                    </h2>
                </router-link>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav mx-auto" style="font-family: 'Barlow Semi Condensed', sans-serif; font-size:large; font-weight: 700;">
                        <!-- v-if="roles.has('admin')" -->
                        <li class="nav-item active text-center-lg">
                            <router-link :to="{name:'dashboard'}" class="nav-link">Home</router-link>
                        </li>
                        <li class="nav-item active text-center-lg">
                            <router-link :to="{name:'users'}" class="nav-link">Users</router-link>
                        </li>
                        <li class="nav-item active text-center-lg">
                            <router-link :to="{name:'faculties'}" class="nav-link">Faculties</router-link>
                        </li>
                        <li class="nav-item active text-center-lg">
                            <router-link :to="{name:'courses'}" class="nav-link">Courses</router-link>
                        </li>
                        <li class="nav-item active text-center-lg">
                            <router-link :to="{name:'units'}" class="nav-link">Units</router-link>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ user.first_name }} 
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="javascript:void(0)" @click="logout">Logout</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <main class="mt-3">
            <router-view></router-view>
        </main>
    </div>
</template>

<script>
import {mapActions} from 'vuex'
export default {
    name:"default-layout",
    data(){
        return {
            user:this.$store.state.auth.user,
            current_user: {},
            roles: new Set(),
            permissions: new Set(),
        }
    },
    // created() {
    //     console.log(window.user)
    //     console.log(window.user_roles)
    //     console.log(window.user_permissions)

    //     this.current_user = window.user

    //     window.user_roles.forEach(r => {
    //         this.roles.add(r.name)
    //     })

    //     window.user_permissions.forEach(p => {
    //         this.permissions.add(p.name)
    //     })
    // },
    methods:{
        ...mapActions({
            signOut:"auth/logout"
        }),
        async logout(){
            await axios.post('/logout').then(({data})=>{
                this.signOut()
                this.$router.push({name:"login"})
                //location.reload()
            })
        }
    }
}
</script>

<style scoped>
/* nav .navbar-nav li a{
  color: white !important;
} 
nav .navbar-nav li a:hover{
  color:lightgray!important;
} */
</style>