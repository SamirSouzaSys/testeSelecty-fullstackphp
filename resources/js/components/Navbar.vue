<template>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand fw-bolder" href="#">Usuários - Formações e Experiências</a>
      <button
        class="navbar-toggler collapsed"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse"
        aria-controls="navbarCollapse"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse" id="navbarCollapse" style="">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <router-link to="/" class="nav-item nav-link">Home</router-link>
          </li>
          <li class="nav-item">
            <router-link to="/usuario/add" class="nav-item nav-link">Add Usuário</router-link>
          </li>
        </ul>
        <form class="d-flex">
          <input
            class="form-control me-2"
            type="search"
            placeholder="Search"
            aria-label="Search"
          />
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
</template>

<script>
  export default ({
  })
</script>