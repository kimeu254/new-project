<template>
    <div class="container">
      <h1>Courses</h1>
      <button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        New Course
      </button>
      <div class="modal" id="staticBackdrop"  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">New Faculty</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="" @submit.prevent="">
          <div class="modal-body">
            <div class="row">
              <div class="col-12 form-group">
                <label for="title" class="col-form-label col-form-label-lg">
                  Name 
                  <span class="text-danger">*</span>
                </label>
                <input type="name" class="form-control" required=""/>
              </div>
              <div class="col-12 form-group">
                <label for="title" class="col-form-label col-form-label-lg">
                  Faculty 
                  <span class="text-danger">*</span>
                </label>
                <select class="form-select" aria-label="Default select example">
                  <option selected></option>
                  <option value="Active">Active</option>
                  <option value="Inactive">Inactive</option>
                </select>
              </div>
              <div class="col-12 form-group">
                <label for="title" class="col-form-label col-form-label-lg">
                  Status 
                  <span class="text-danger">*</span>
                </label>
                <select class="form-select" aria-label="Default select example">
                  <option selected></option>
                  <option value="Active">Active</option>
                  <option value="Inactive">Inactive</option>
                </select>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Save Changes</button>
          </div>
        </form>
      </div>
    </div>
   </div>
   <table class="table table-hover table-bordered" id="example">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Faculty</th>
        <th>Status</th>
        <th style="width: 180px;">Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>
          <div class="d-flex flex-row" style="justify-content: space-between;" >
            <div>
              <!-- <button data-bs-toggle="modal" :data-bs-target="'#staticBackdrop' + faculty.id" type="button" class="btn btn-outline-info"><i class="bi bi-pencil"></i>Edit</button> -->
              <!-- <router-link :to="{name: 'editFaculty', params: {id: faculty.id}}">
                <button type="button" class="btn btn-outline-info"><i class="bi bi-pencil"></i>Edit</button>
              </router-link> -->

          </div>
          <div>
            <button @click="deleteFaculty(faculty.id)" type="button" class="btn btn-outline-danger"><i class="bi bi-trash"></i>Delete</button>
          </div>
          </div>
        </td>
        <!-- <div class="modal" :id="'staticBackdrop' + faculty.id"  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">New Faculty</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form action="" @submit.prevent="editFaculty(faculty.id)">
                <div class="modal-body">
                  <div class="row">
                    <div class="col-12 form-group">
                      <label for="title" class="col-form-label col-form-label-lg">
                        Name 
                        <span class="text-danger">*</span>
                      </label>
                      <input type="name" class="form-control" v-model.trim="faculty.name" required=""/>
                    </div>
                    <div class="col-12 form-group">
                      <label for="title" class="col-form-label col-form-label-lg">
                        Status 
                        <span class="text-danger">*</span>
                      </label>
                      <select class="form-select" aria-label="Default select example" v-model.trim="faculty.status">
                        <option selected></option>
                        <option value="Active">Active</option>
                        <option value="Inactive">Inactive</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
              </form>
            </div>
          </div>
        </div> -->
      </tr>
    </tbody>
  </table>
    </div>
</template>

<script>
export default{
  name: "courses",
}
</script>