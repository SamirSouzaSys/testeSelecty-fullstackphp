# testeSelecty-fullstackphp
Teste técnico – Fullstack PHP - 20220129

# Comandos necessários para a execução do projeto
- Clonar o projeto
git clone https://github.com/SamirSouzaSys/testeSelecty-fullstackphp.git

Vá para a pasta do projeto
- cd testeSelecty-fullstackphp
- composer update
- npm install

Agora em 2 "terminais diferentes e ao mesmo tempo" 
- npm run watch
- php artisan serve


Database
- Na pasta database/dump...
-------------------------

# Requisitos dispensáveis:
• Não será necessário efetuar autenticação do usuário.
• A qualidade do layout não será levada em consideração, apenas as funcionalidades.
• Não é necessário checar a consistência dos dados informados pelo usuário.

# Requisitos funcionais
Lista de Candidatos
* Criar uma tela de listagem dos itens (Candidatos) com opção de inclusão, exclusão e edição.

# Formulários de cadastro
Criar um formulário em 3 etapas para o cadastro de um candidato,
- com seus dados pessoais,
- profissionais
- e dados de acesso.

Etapa 1
# Campos - Regras
1 - Nome     - Obrigatório
2 - Email    - Obrigatório, somente se [Telefone] = Vazio
3 - Telefone - Obrigatório, somente se [Email] = Vazio

Etapa 2
# Campos - Regras
- Múltiplas experiências profissionais - Opcional
- Múltiplas formações acadêmicas       - Opcional

Etapa 3
# Campos - Regras
1 - Usuário            - Obrigatório
2 - Senha              - Obrigatório, Sendo [Senha] = [Confirme sua senha]
3 - Confirme sua senha -  Obrigatório, Sendo [Senha] = [Confirme sua senha]

__________________

# Comandos usandos durante o desenvolvimento
git clone https://github.com/SamirSouzaSys/testeSelecty-fullstackphp.git
composer create-project  laravel/laravel .

npm install
npm install vue
npm install vue-router vue-axios --save
npm install bootstrap @popperjs/core --save-dev
npm install bootstrap-vue
npm install jquery
npm install --save-dev "@tinymce/tinymce-vue@^3"
npm install vue-template-compiler vue-loader@^15.9.7 --save-dev --legacy-peer-deps
npm install resolve-url-loader@^5.0.0 --save-dev --legacy-peer-deps

npm install @vuelidate/core @vuelidate/validators
npm install @vue/composition-api

npm install

git add .
git commit -m "organizando o ambiente"

CREATE SCHEMA `testeSelecty-fullstackphp-DB` DEFAULT CHARACTER SET utf8 ;

php artisan make:model Usuario -m
php artisan migrate --path=/database/migrations/2022_01_29_150713_create_usuarios_table.php
php artisan make:controller API/UsuarioController

php artisan make:model ExperienciaProfissional -m
php artisan migrate --path=/database/migrations/2022_01_29_155010_create_experiencia_profissionals_table.php
php artisan make:controller API/ExperienciaProfissionalController

php artisan make:model FormacaoAcademica -m
php artisan migrate --path=/database/migrations/2022_01_29_160159_create_formacao_academicas_table.php
php artisan make:controller API/FormacaoAcademicaController

php artisan migrate:refresh


npm run dev
npm run watch


------------------
Banco de dados
Tabelas
*Usuario
*ExperienciaProfissional(idUsuario)
*FormacaoAcademica(idUsuario)

TelaHome(usuario/index)
 *-> Botão -> Tela-Usuário.Adicionar -> (usuario/add)*
 *|-> Botão (usuario/delete)*
 *-> Botão -> Tela-Usuário.Editar (usuario/edit/id) -> (usuario/update/id)*
 *-> Botão -> Tela-UsuárioDetalhes*

   *-> Botão -> Tela-ExperienciasProfissionais.Adicionar -> (experienciaProfissional/add)*
   *-> Experiencia Profissionais (experienciaProfissional/index)*
     *-> Botão -> Tela-ExperiênciaProfissional.Editar(experienciaProfissional/Edit) -> (experienciaProfissional/update/id)*
     *|-> Botão (experienciaProfissional/delete)*

  *-> Botão -> Tela-ExperienciasProfissionais.Adicionar -> (formacaoAcademica/add)*
  *-> Formação Acadêmica (formacaoAcademica/index)*
     *-> Botão -> Tela-FormaçãoAcadêmica.Editar(formacaoAcademica/Edit) -> (formacaoAcademica/id)*
     *|-> Botão (formacaoAcademica/delete)*
  
------------------
Back
* usuário       C RD
* Formações     
* Experiências  

Front
* usuário       C RD
* Formações     
* Experiências  

Front Tratamento
* usuário       C* R*
* Formações     
* Experiências  