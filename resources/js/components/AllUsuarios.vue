<template>
  <div>
    <h3 class="text-center fw-bolder">Todos Usuários</h3>
    <br />
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Email</th>
          <th>Contato / Telefone</th>
          <th>Formações</th>
          <th>Experiências</th>
          <th>Usuário</th>
          <th>Senha *</th>
          <th>Created At</th>
          <th>Updated At</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="usuario in usuarios" :key="usuario.id">
          <td>{{ usuario.id }}</td>
          <td>{{ usuario.nome }}</td>
          <td>{{ usuario.email }}</td>
          <td>{{ usuario.telefone }}</td>
          <td>{{ usuario.formacoesTotal }}</td>
          <td>{{ usuario.ExperienciasTotal }}</td>
          <td>{{ usuario.usuario }}</td>
          <td>{{ usuario.senha }}</td>
          <td>{{ usuario.created_at }}</td>
          <td>{{ usuario.updated_at }}</td>
          <td>
            <div class="btn-group" role="group">
              <router-link
                :to="{ name: 'usuario/detalhes', params: { id: usuario.id } }"
                class="btn btn-primary"
              >
                Detalhes
              </router-link>
              <router-link
                :to="{ name: 'usuario/edit', params: { id: usuario.id } }"
                class="btn btn-warning"
              >
                Editar
              </router-link>
              <button class="btn btn-danger" @click="deleteUsuario(usuario.id)">
                Apagar
              </button>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
    * observação - exibida devido a ser um sistema de aprendizado
    <hr />
  </div>
</template>
 
<script>
export default {
  data() {
    return {
      usuarios: [],
    };
  },
  created() {
    this.axios.get("http://localhost:8000/api/usuario").then((response) => {
      this.usuarios = response.data;
    });
  },
  methods: {
    deleteUsuario(id) {
      this.axios
        .delete(`http://localhost:8000/api/usuario/delete/${id}`)
        .then((response) => {
          let i = this.usuarios.map((item) => item.id).indexOf(id); // find index of your object
          this.usuarios.splice(i, 1);
        });
    },
  },
};
</script>