<template>
    <div class="container">
      <h1>Users</h1>
      <router-link to="/createUser">
        <button class="btn btn-outline-success">
        New User
      </button>
      </router-link>
      <table class="table table-hover table-bordered" id="example">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>{{  }}</td>
            <td>{{  }}</td>
            <td>{{  }}</td>
            <td>{{  }}</td>
            <td>{{  }}</td>
          </tr>
        </tbody>
      </table>
    </div>
</template>
<script>
export default{
  name: "users",
}
</script>