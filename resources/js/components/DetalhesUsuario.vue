<template>
  <div>
    <h3 class="text-center">
      <span class="fw-bolder">Detalhes do Usuário: </span> {{ usuario.nome }}
    </h3>
    <hr />
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="form-group col-md-3">
            <label class="form-label fw-bolder">Email:</label>
            <label class="form-label">{{ usuario.email }}</label>
          </div>
          <div class="form-group col-md-2">
            <label class="form-label fw-bolder">Telefone:</label>
            <label class="form-label">{{ usuario.telefone }}</label>
          </div>
          <div class="form-group col-md-3">
            <label class="form-label fw-bolder">Usuario:</label>
            <label class="form-label">{{ usuario.usuario }}</label>
          </div>

          <div class="form-group col-md-2">
            <label class="form-label fw-bolder">Senha:</label>
            <label class="form-label">{{ usuario.senha }}</label>
          </div>
          <div class="form-group col-md-2">
            <router-link
              :to="{ name: 'usuario/edit', params: { id: usuario.id } }"
              class="btn btn-warning"
            >
              Editar este Usuário
            </router-link>
          </div>
        </div>
        <br />
      </div>
    </div>

    <hr />
    <br />
    <div class="row">
        <div class="col-6">
            <h4 class="fw-bolder">Formações deste Usuário</h4>
        </div>
        <div class="col-6">
            <router-link
                :to="{
                  name: 'formacao/add',
                  params: { id: usuario.id },
                }"
                class="btn btn-primary float-end"
              >
                Add formação para este Usuário
              </router-link>
        </div>
    </div>
    <br />

    <table class="table table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>Instituição</th>
          <th>Grau</th>
          <th>Início</th>
          <th>Fim</th>
          <th>Descrição</th>
          <th>Criado em</th>
          <th>Atualizado em</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="formacoes in formacoes" :key="formacoes.id">
          <td>{{ formacoes.id }}</td>
          <td>{{ formacoes.instituicao }}</td>
          <td>{{ formacoes.grau }}</td>
          <td>{{ formacoes.inicio }}</td>
          <td>{{ formacoes.fim }}</td>
          <td>{{ formacoes.descricao_richtext }}</td>
          <td>{{ formacoes.created_at }}</td>
          <td>{{ formacoes.updated_at }}</td>
          <td>
            <div class="btn-group" role="group">
              <router-link
                :to="{
                  name: 'formacao/detalhes',
                  params: { id: formacoes.id },
                }"
                class="btn btn-primary"
              >
                Detalhes
              </router-link>
              <router-link
                :to="{ name: 'formacao/edit', params: { id: formacoes.id } }"
                class="btn btn-warning"
              >
                Editar
              </router-link>
              <button
                class="btn btn-danger"
                @click="deleteFormacao(formacoes.id)"
              >
                Apagar
              </button>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
    <hr />
    <br />

    <div class="row">
        <div class="col-6">
            <h4 class="fw-bolder">Experiências deste Usuário</h4>
        </div>
        <div class="col-6">
            <router-link
                :to="{
                  name: 'experiencia/add',
                  params: { id: usuario.id },
                }"
                class="btn btn-primary float-end"
              >
                Add Experiência para este Usuário
              </router-link>
        </div>
    </div>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>Instituição</th>
          <th>Cargo</th>
          <th>Início</th>
          <th>Fim</th>
          <th>Descrição</th>
          <th>Criado em</th>
          <th>Atualizado em</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="experiencia in experiencias" :key="experiencia.id">
          <td>{{ experiencia.id }}</td>
          <td>{{ experiencia.instituicao }}</td>
          <td>{{ experiencia.cargo }}</td>
          <td>{{ experiencia.inicio }}</td>
          <td>{{ experiencia.fim }}</td>
          <td>{{ experiencia.descricao_richtext }}</td>
          <td>{{ experiencia.created_at }}</td>
          <td>{{ experiencia.updated_at }}</td>
          <td>
            <div class="btn-group" role="group">
              <router-link
                :to="{
                  name: 'experiencia/detalhes',
                  params: { id: experiencia.id },
                }"
                class="btn btn-primary"
              >
                Detalhes
              </router-link>
              <router-link
                :to="{
                  name: 'experiencia/edit',
                  params: { id: experiencia.id },
                }"
                class="btn btn-warning"
              >
                Editar
              </router-link>
              <button
                class="btn btn-danger"
                @click="deleteExperiencia(experiencia.id)"
              >
                Apagar
              </button>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>
 
<script>
export default {
  data() {
    return {
      usuario: {},
      experiencias: {},
      formacoes: {},
    };
  },
  created() {
    this.axios
      .get(`http://localhost:8000/api/usuario/edit/${this.$route.params.id}`)
      .then((response) => {
        this.usuario = response.data;
      });

    this.axios
      .get(
        `http://localhost:8000/api/usuario/formacoes/${this.$route.params.id}`
      )
      .then((response) => {
        this.formacoes = response.data;
      });

    this.axios
    .get(`http://localhost:8000/api/usuario/experiencias/${this.$route.params.id}`)
    .then((response) => {
        this.experiencias = response.data;
    });
  },
  methods: {},
};
</script>