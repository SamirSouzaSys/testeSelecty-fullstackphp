<template>
    <div>
        <h3 class="text-center">Editar Usuário</h3>
        <div class="row">
            <div class="col-md-12">
                <form @submit.prevent="updateUsuario">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-label">Nome</label>
                            <input type="text" class="form-control" v-model="usuario.nome">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label">Email</label>
                            <input type="text" class="form-control" v-model="usuario.email">
                        </div>
                    </div>
                    <br/>

                    <div class="row">
                        <div class="form-group  col-md-6">
                            <label class="form-label">Telefone</label>
                            <input type="text" class="form-control" v-model="usuario.telefone">
                        </div>
                        <div class="form-group  col-md-6">
                            <label class="form-label">Usuario</label>
                            <input type="text" class="form-control" v-model="usuario.usuario">
                        </div>
                    </div>
                    <br/>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-label">Senha</label>
                            <input type="text" class="form-control" v-model="usuario.senha">
                        </div>
                        <div class="form-group  col-md-6">
                            <label class="form-label">Confirme a sua senha</label>
                            <input type="text" class="form-control" id="usuario.senhaConfirmacao">
                        </div>
                    </div>
                    <br/>

                    

                    <button type="submit" class="btn btn-primary">Atualizar Usuário</button>
                </form>
            </div>
        </div>
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