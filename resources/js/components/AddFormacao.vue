<template>
    <div>
        <h3 class="text-center">Adicionar Formação</h3>
        <div class="row">
            <div class="col-md-12">
                <form @submit.prevent="addFormacao">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-label">Instituição</label>
                            <input type="text" class="form-control" v-model="formacao.instituicao">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label">Grau</label>
                            <input type="text" class="form-control" v-model="formacao.grau">
                        </div>
                    </div>
                    <br/>

                    <div class="row">
                        <div class="form-group  col-md-6">
                            <label class="form-label">Início</label>
                            <input type="text" class="form-control" v-model="formacao.inicio">
                        </div>
                        <div class="form-group  col-md-6">
                            <label class="form-label">Fim</label>
                            <input type="text" class="form-control" v-model="formacao.fim">
                        </div>
                    </div>
                    <br/>

                    <div class="row">
                        <label class="form-label">Descrição</label>
                        <richtext-component></richtext-component>
                    </div>
                    <br/>

                    

                    <button type="submit" class="btn btn-primary">Adicionar Formação</button>
                </form>
            </div>
        </div>
    </div>
</template>
 
<script>
    export default {
        data() {
            return {
                formacao: {}
            }
        },
        created() {
            this.formacao.usuario_id = this.$route.params.id;
        },
        methods: {
            addFormacao() {
                this.formacao.descricao_richtext = tinymce.activeEditor.getContent();
 
                this.axios
                    .post('http://localhost:8000/api/formacaoAcademica/add', this.formacao)
                    .then(response => (
                        this.$router.push({ name: 'usuario/detalhes', params: { id: this.formacao.usuario_id } })
                        // console.log(response.data)
                    ))
                    .catch(error => console.log(error))
                    .finally(() => this.loading = false)
            }
        }
    }
</script>

