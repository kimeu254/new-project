<template>
  <div class="container">
    <h1>Units</h1>
    <router-link to="/createUnit">
      <button class="btn btn-outline-success">
      New Unit
    </button>
    </router-link>
    
 <table class="table table-hover table-bordered" id="example">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Course</th>
      <th>Status</th>
      <th style="width: 180px;">Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="unit in units" :key="unit.id">
      <td>{{ unit.id }}</td>
      <td>{{ unit.name }}</td>
      <td><span v-if="courses.length > 0" v-for="course in courses" :key="course.id"><span v-if="course.id == unit.course_id">{{ course.name }}</span></span>
      <span v-else>No Course</span>
      </td>
      <td>{{ unit.status }}</td>
      <td>
        <div class="d-flex flex-row" style="justify-content: space-between;" >
          <div>
          <button type="button" class="btn btn-outline-info"><i class="bi bi-pencil"></i>Edit</button>
        </div>
        <div>
          <button @click="deleteCourse(unit.id)" type="button" class="btn btn-outline-danger"><i class="bi bi-trash"></i>Delete</button>
        </div>
        </div>
      </td>
    </tr>
  </tbody>
</table>
  </div>
</template>

<script>
import { mapGetters } from 'vuex';


export default{
name: "units",
data() {
  return{}
},
computed: {
  ...mapGetters(["units", "courses"])
},
created() {
    this.$store.dispatch("getUnits")
  },
methods: {
  deleteCourse(id) {
      this.$store.dispatch("removeUnit", id)
    },
}, 
}
</script>