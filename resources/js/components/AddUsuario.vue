<template>
    <div>
        <h3 class="text-center">Adicionar Usuário</h3>
        <div class="row">
            <div class="col-md-12">
                <form @submit.prevent="addUsuario">
                    <div class="form-group">
                        <label class="form-label">Nome</label>
                        <input type="text" class="form-control" v-model="usuario.nome">
                    </div>
                    <br/>

                    <div class="form-group">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control" v-model="usuario.email">
                    </div>
                    <br/>

                    <div class="form-group">
                        <label class="form-label">Telefone</label>
                        <input type="text" class="form-control" v-model="usuario.telefone">
                    </div>
                    <br/>

                    <div class="form-group">
                        <label class="form-label">Usuario</label>
                        <input type="text" class="form-control" v-model="usuario.usuario">
                    </div>
                    <br/>

                    <div class="form-group">
                        <label class="form-label">Senha</label>
                        <input type="text" class="form-control" v-model="usuario.senha">
                    </div>
                    <br/>

                    <div class="form-group">
                        <label class="form-label">Confirme a sua senha</label>
                        <input type="text" class="form-control">
                    </div>
                    <br/>

                    

                    <button type="submit" class="btn btn-primary">Adicionar Usuário</button>
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
        methods: {
            addUsuario() {
 
                this.axios
                    .post('http://localhost:8000/api/usuario/add', this.usuario)
                    .then(response => (
                        this.$router.push({name: 'home'})
                        // console.log(response.data)
                    ))
                    .catch(error => console.log(error))
                    .finally(() => this.loading = false)
            }
        }
    }
</script>