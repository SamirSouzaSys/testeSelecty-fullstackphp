<template>
    <div>
        <h3 class="text-center">Adicionar Experiência</h3>
        <div class="row">
            <div class="col-md-12">
                <form @submit.prevent="addExperiencia">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-label">Instituição</label>
                            <input type="text" class="form-control" v-model="experiencia.instituicao">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label">Cargo</label>
                            <input type="text" class="form-control" v-model="experiencia.cargo">
                        </div>
                    </div>
                    <br/>

                    <div class="row">
                        <div class="form-group  col-md-6">
                            <label class="form-label">Início</label>
                            <input type="text" class="form-control" v-model="experiencia.inicio">
                        </div>
                        <div class="form-group  col-md-6">
                            <label class="form-label">Fim</label>
                            <input type="text" class="form-control" v-model="experiencia.fim">
                        </div>
                    </div>
                    <br/>

                    <div class="row">
                        <label class="form-label">Descrição</label>
                        <richtext-component></richtext-component>
                    </div>
                    <br/>

                    

                    <button type="submit" class="btn btn-primary">Adicionar Experiência</button>
                </form>
            </div>
        </div>
    </div>
</template>
 
<script>
    export default {
        data() {
            return {
                experiencia: {}
            }
        },
        created() {
            this.experiencia.usuario_id = this.$route.params.id;
        },
        methods: {
            addExperiencia() {
                this.experiencia.descricao_richtext = tinymce.activeEditor.getContent();
 
                this.axios
                    .post('http://localhost:8000/api/experienciaProfissional/add', this.experiencia)
                    .then(response => (
                        this.$router.push({ name: 'usuario/detalhes', params: { id: this.experiencia.usuario_id } })
                        // console.log(response.data)
                    ))
                    .catch(error => console.log(error))
                    .finally(() => this.loading = false)
            }
        }
    }
</script>

