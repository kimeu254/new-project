<template>
    <!-- <div class="vh-100" >
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card" style="border-radius: 1rem;">
                <div class="row g-0">
                    <div class="col-md-6 col-lg-5 d-none d-md-block">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                        alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 0;" />
                    </div>
                    <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">

                        <form action="javascript:void(0)" @submit="register" class="row" method="post">

                        <div class="d-flex align-items-center mb-3 pb-1">
                            <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                            <span class="h1 fw-bold mb-0">Logo</span>
                        </div>

                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                        <div class="col-12" v-if="Object.keys(validationErrors).length > 0">
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        <li v-for="(value, key) in validationErrors" :key="key">{{ value[0] }}</li>
                                    </ul>
                                </div>
                            </div>

                        <div class="form-outline mb-4">
                            <input type="text" v-model="user.name" name="name" id="email" class="form-control form-control-lg">
                            <label class="form-label" for="form2Example17">Name</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="text" v-model="user.email" name="email" id="email" class="form-control form-control-lg">
                            <label class="form-label" for="form2Example17">Email address</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="password" v-model="user.password" name="password" id="password" class="form-control form-control-lg">
                            <label class="form-label" for="form2Example27">Password</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="password_confirmation" name="password_confirmation" v-model="user.password_confirmation" id="password_confirmation" placeholder="Enter Password" class="form-control form-control-lg">
                            <label class="form-label" for="form2Example27">Password Confirm</label>
                        </div>

                        <div class="pt-1 mb-4">
                            <button type="submit" :disabled="processing" class="btn btn-primary btn-lg btn-block">
                                {{ processing ? "Please wait" : "Register" }}
                            </button>
                        </div>

                        <p class="mb-5 pb-lg-2" style="color: #393f81;">Already have an account? <router-link :to="{name:'login'}">Login Now!</router-link></p>
                        <a href="#!" class="small text-muted">Terms of use.</a>
                        <a href="#!" class="small text-muted">Privacy policy</a>
                        </form>

                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        </div>
    </div> -->
</template>
<script>
export default{
    name:"createFaculty",
    data() {
        return{
            faculty: {
                name: '',
                status: '',
            },
            validationErrors:{},
            processing:false
        }
    },
    methods: {},
}
</script>