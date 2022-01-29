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

npm run dev
npm run watch


------------------
Banco de dados
Tabelas
*Usuario
*ExperienciaProfissional(idUsuario)
*FormacaoAcademica(idUsuario)

TelaHome(usuario/index)
  -> Botão -> Tela-Usuário.Adicionar -> (usuario/add)
  |-> Botão (usuario/delete)
  -> Botão -> Tela-Usuário.Editar (usuario/edit/id) -> (usuario/update/id)
  -> Botão -> Tela-UsuárioDetalhes
      -> Botão -> Tela-ExperienciasProfissionais.Adicionar -> (experienciaProfissional/add)
      -> Experiencia Profissionais (experienciaProfissional/index)
                -> Botão -> Tela-ExperiênciaProfissional.Editar(experienciaProfissional/Edit) -> (experienciaProfissional/update/id)
                |-> Botão (experienciaProfissional/delete)
      -> Botão -> Tela-ExperienciasProfissionais.Adicionar -> (formacaoAcademica/add)
      -> Formação Acadêmica (formacaoAcademica/index)
                -> Botão -> Tela-FormaçãoAcadêmica.Editar(formacaoAcademica/Edit) -> (formacaoAcademica/id)
                |-> Botão (formacaoAcademica/delete)
  
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


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[CMS Max](https://www.cmsmax.com/)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**
- **[Romega Software](https://romegasoftware.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
