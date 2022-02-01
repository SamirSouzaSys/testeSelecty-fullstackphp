<template>
  <div>
    <h3 class="text-center">Editar Experiência</h3>
    <div class="row">
      <div class="col-md-12">
        <form @submit.prevent="editExperiencia">
          <div class="row">
            <div class="form-group col-md-6">
              <label class="form-label">Instituição</label>
              <input
                type="text"
                class="form-control"
                v-model="experiencia.instituicao"
              />
            </div>
            <div class="form-group col-md-6">
              <label class="form-label">Cargo</label>
              <input
                type="text"
                class="form-control"
                v-model="experiencia.cargo"
              />
            </div>
          </div>
          <br />

          <div class="row">
            <div class="form-group col-md-6">
              <label class="form-label">Início</label>
              <input
                type="text"
                class="form-control"
                v-model="experiencia.inicio"
              />
            </div>
            <div class="form-group col-md-6">
              <label class="form-label">Fim</label>
              <input
                type="text"
                class="form-control"
                v-model="experiencia.fim"
              />
            </div>
          </div>
          <br />

          <div class="row">
            <label class="form-label">Descrição</label>
            <richtext-component></richtext-component>
          </div>
          <br />

          <button type="submit" class="btn btn-primary">
            Editar Experiência
          </button>
        </form>
      </div>
    </div>
  </div>
</template>
 
<script>
export default {
  data() {
    return {
      experiencia: {},
    };
  },
  created() {
    this.experiencia.usuario_id = this.$route.params.id;

    this.axios
      .get(
        `http://localhost:8000/api/experienciaProfissional/edit/${this.$route.params.id}`
      )
      .then((response) => {
        this.experiencia = response.data;
      })
      .then((response) => {
        setTimeout(() => {
          tinymce.activeEditor.setContent(this.experiencia.descricao_richtext);
        }, 2500);
      });
  },
  methods: {
    editExperiencia() {
      this.experiencia.descricao_richtext = tinymce.activeEditor.getContent();

      this.axios
        .post(`http://localhost:8000/api/experienciaProfissional/update/${this.$route.params.id}`,
          this.experiencia
        )
        .then((response) =>
          this.$router.push({
            name: "usuario/detalhes",
            params: { id: this.experiencia.usuario_id },
          })
        )
        .catch((error) => console.log(error))
        .finally(() => (this.loading = false));
    },
  },
};
</script>

