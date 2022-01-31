<template>
    <div>
        <h3 class="text-center">Detalhes do Usuário {{ usuario.nome}}</h3>
        <hr/>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="form-group col-md-3">
                        <label class="form-label fw-bolder">Email:</label>
                        <label class="form-label">{{ usuario.email }}</label>
                    </div>
                    <div class="form-group  col-md-2">
                        <label class="form-label fw-bolder">Telefone:</label>
                        <label class="form-label">{{ usuario.telefone }}</label>
                    </div>
                    <div class="form-group  col-md-3">
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
                <br/>

                <!-- <div class="row">
                </div>
                <br/> -->

            </div>
        </div>

        <hr/>
        <br/>
        <h4 class="text-center">Formações deste Usuário</h4>
        <table class="table table-bordered">
            <thead>
                <tr>
                <th>ID</th>
                <th>Instituicao</th>
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
                <tr v-for="formacoes in formacoess" :key="formacoes.id">
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
                            :to="{ name: 'formacao/detalhes', params: { id: formacao.id } }"
                            class="btn btn-primary"
                        >
                            Detalhes
                        </router-link>
                        <router-link
                            :to="{ name: 'formacao/edit', params: { id: formacao.id } }"
                            class="btn btn-warning"
                        >
                            Editar
                        </router-link>
                        <button class="btn btn-danger" @click="deleteFormacao(formacao.id)">
                            Apagar
                        </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <hr/>
        <br/>

        <h4 class="text-center">Experiências deste Usuário</h4>
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
                            :to="{ name: 'experiencia/detalhes', params: { id: experiencia.id } }"
                            class="btn btn-primary"
                        >
                            Detalhes
                        </router-link>
                        <router-link
                            :to="{ name: 'experiencia/edit', params: { id: experiencia.id } }"
                            class="btn btn-warning"
                        >
                            Editar
                        </router-link>
                        <button class="btn btn-danger" @click="deleteExperiencia(experiencia.id)">
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
                usuario: {}
            }
        },
        created() {
            this.axios
            .get(`http://localhost:8000/api/usuario/edit/${this.$route.params.id}`)
            .then((response) => {
                this.usuario = response.data;
                document.getElementById("usuario.senhaConfirmacao").value = this.usuario.senha;
            });
        },
        methods: {
            updateUsuario() {
                if( this.usuario.senha == document.getElementById("usuario.senhaConfirmacao").value ) {
                    this.axios
                    .post(`http://localhost:8000/api/usuario/update/${this.$route.params.id}`,this.usuario)
                    .then((response) => {
                        this.$router.push({name: 'home'})
                    })
                    .catch(error => console.log(error))
                    .finally(() => this.loading = false)
                } else {
                    alert("Erro! A senha precisa ser igual nos 2 campos - Senha/Confirmação de senha")
                }
            }
        }
    }
</script>