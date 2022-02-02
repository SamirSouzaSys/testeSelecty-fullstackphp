<template>
  <div>
    <h3 class="fw-bolder">Adicionar Usuário</h3>
    <div class="row">
      <div class="col-md-12">
        <form @submit.prevent="addUsuario">
        <!-- <form @submit.prevent="handleSubmit"> -->
          <div class="row">
            <div class="form-group col-md-4">
              <label class="form-label fw-bolder">Nome</label>
              <input type="text" class="form-control" v-model="usuario.nome" />
            </div>
            <div class="form-group col-md-4">
              <label class="form-label fw-bolder">Email</label>
              <input
                type="email"
                class="form-control"
                v-model="usuario.email"
                :class="{ 'is-invalid': submitted && $v.usuario.email.$error }"
              />
              <div
                class="invalid-feedback"
                v-if="submitted && !$v.usuario.email.$error"
              >
                <!-- Email é requerido -->
                <span v-if="!$v.usuario.email.required">Email is required</span>
                <span v-if="!$v.usuario.email.email">Email is invalid</span>
              </div>

            </div>
              <!-- <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" v-model="user.email" id="email" name="email" class="form-control" :class="{ 'is-invalid': submitted && $v.user.email.$error }" />
                  <div v-if="submitted && $v.user.email.$error" class="invalid-feedback">
                      <span v-if="!$v.user.email.required">Email is required</span>
                      <span v-if="!$v.user.email.email">Email is invalid</span>
                  </div>
              </div> -->
            <div class="form-group col-md-4">
              <label class="form-label fw-bolder">Telefone</label>
              <input
                type="text"
                class="form-control"
                v-model="usuario.telefone"
              />
            </div>
          </div>
          <br />

          <div class="row">
            <div class="form-group col-md-4">
              <label class="form-label fw-bolder">Usuario</label>
              <input
                type="text"
                class="form-control"
                v-model="usuario.usuario"
              />
            </div>
            <div class="form-group col-md-4">
              <label class="form-label fw-bolder">Senha</label>
              <input type="text" class="form-control" v-model="usuario.senha" />
            </div>
            <div class="form-group col-md-4">
              <label class="form-label fw-bolder">Confirme a sua senha</label>
              <input type="text" class="form-control" />
            </div>
          </div>
          <br />

          <button type="submit" class="btn btn-primary">
            Adicionar Usuário
          </button>
        </form>
      </div>
    </div>
  </div>
</template>
 
<script>
// import { reactive } from 'vue' // "from '@vue/composition-api'" if you are using Vue 2.x
import { reactive } from '@vue/composition-api' // "from '@vue/composition-api'" if you are using Vue 2.x
// import useVuelidate from '@vuelidate/core'
// import { required, email } from '@vuelidate/validators'
// import { required, email, minLength, sameAs } from "@vuelidate/validators'";
import { required, email } from "@vuelidate/validators";

export default {
  setup() {
    const state = reactive({
      email: "",
    });
    const rules = {
      usuario: {
        email: { required, email }, // Matches state.contact.email
      },
    };

    const v$ = useVuelidate(rules, state);

    return { state, v$ };
  },
  data() {
    return {
      usuario: {
        email: "",
      },
      submitted: false,
    };
  },
  validations: {
    usuario: {
      // firstName: { required },
      // lastName: { required },
      email: { required, email },
      // password: { required, minLength: minLength(6) },
      // confirmPassword: { required, sameAsPassword: sameAs('password') }
    },
  },
  methods: {
    addUsuario(e) {
      this.submitted = true;

      // stop here if form is invalid
      this.$v.$touch();
      if (this.$v.$invalid) {
        return;
      }

      this.axios
        .post("http://localhost:8000/api/usuario/add", this.usuario)
        .then(
          (response) => this.$router.push({ name: "home" })
          // console.log(response.data)
        )
        .catch((error) => console.log(error))
        .finally(() => (this.loading = false));
    },
    // handleSubmit(e) {
    //   // this.submitted = true;

    //   // stop here if form is invalid
    //   this.$v.$touch();
    //   if (this.$v.$invalid) {
    //     return;
    //   }

    //   alert("SUCCESS!! :-)\n\n" + JSON.stringify(this.user));
    // },
  },
};
</script>