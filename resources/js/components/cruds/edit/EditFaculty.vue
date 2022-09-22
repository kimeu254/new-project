<template>
    <div class="container">
        <h2>Edit Faculties</h2>
        <div>
            <form action="" @submit.prevent="onSubmit(faculty.id)">
                <div class="row">
                    <div class="col-12 form-group">
                      <label for="title" class="col-form-label col-form-label-lg">
                        Name 
                        <span class="text-danger">*</span>
                      </label>
                      <input type="name" class="form-control" v-model="faculty.name" required=""/>
                    </div>
                    <div class="col-12 form-group">
                      <label for="title" class="col-form-label col-form-label-lg">
                        Status 
                        <span class="text-danger">*</span>
                      </label>
                      <select class="form-select" aria-label="Default select example" v-model="faculty.status">
                        <option selected></option>
                        <option value="Active">Active</option>
                        <option value="Inactive">Inactive</option>
                      </select>
                    </div>
                    <div class="pt-3">
                        <button type="submit" class="btn btn-outline-primary">Submit</button>
                    </div>
                  </div>
            </form>
        </div>
    </div>
</template>

<script>

export default{
    name: "editFaculty",
    data() {
        return{}
    },
    methods: {
        async onSubmit(id) {
            // this.$store.dispatch("updateFaculty", {id}).then(() => {
            //     this.$router.push("/faculties")
            // })
            // try {
            //     let result = await axios.put("/api/faculty/"+id, this.faculty)
            //     console.log(result.response.data)
            //   } catch (error) {
            //     console.error(error.response.data);    
            //   }
        }
    },
    computed: {
        faculty() {
            return this.$store.state.faculties.faculties.find(f => f.id == this.$route.params.id)
        }
    }
}
</script>