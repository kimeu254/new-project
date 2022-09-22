<template>
    <div class="container">
      <h1>Courses</h1>
      <router-link to="/createCourse">
        <button class="btn btn-outline-success">
        New Course
      </button>
      </router-link>
      
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
      <tr v-for="course in courses" :key="course.id">
        <td>{{ course.id }}</td>
        <td>{{ course.name }}</td>
        <td><span v-if="faculties.length > 0" v-for="faculty in faculties" :key="faculty.id"><span v-if="faculty.id == course.faculty_id">{{ faculty.name }}</span></span>
        <span v-else>No Faculty</span>
        </td>
        <td>{{ course.status }}</td>
        <td>
          <div class="d-flex flex-row" style="justify-content: space-between;" >
            <div>
            <button type="button" class="btn btn-outline-info"><i class="bi bi-pencil"></i>Edit</button>
          </div>
          <div>
            <button @click="deleteCourse(course.id)" type="button" class="btn btn-outline-danger"><i class="bi bi-trash"></i>Delete</button>
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
  name: "courses",
  data() {
    return{}
  },
  computed: {
    ...mapGetters(["courses", "faculties"])
  },
  created() {
      this.$store.dispatch("getCourses")
    },
  methods: {
    deleteCourse(id) {
        this.$store.dispatch("removeCourse", id)
      },
  }, 
}
</script>