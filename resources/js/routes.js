import AllUsuarios from './components/AllUsuarios.vue';
import AddUsuario   from './components/AddUsuario.vue';
import EditUsuario   from './components/EditUsuario.vue';
import DetalhesUsuario   from './components/DetalhesUsuario.vue';

import AddFormacao   from './components/AddFormacao.vue';
import EditFormacao   from './components/EditFormacao.vue';
import DetalhesFormacao   from './components/DetalhesFormacao.vue';

import AddExperiencia   from './components/AddExperiencia.vue';
import EditExperiencia   from './components/EditExperiencia.vue';
import DetalhesExperiencia   from './components/DetalhesExperiencia.vue';

 
export const routes = [
    {
        name: 'home',
        path: '/',
        component: AllUsuarios
    },
    {
        name: 'usuario/add',
        path: '/usuario/add',
        component: AddUsuario
    },
    {
        name: 'usuario/edit',
        path: '/usuario/edit',
        component: EditUsuario
    },
    {
        name: 'usuario/detalhes',
        path: '/usuario/detalhes',
        component: DetalhesUsuario
    },
    {
        name: 'formacao/add',
        path: '/formacao/add',
        component: AddFormacao
    },
    {
        name: 'formacao/edit',
        path: '/formacao/edit',
        component: EditFormacao
    },
    {
        name: 'formacao/detalhes',
        path: '/formacao/detalhes',
        component: DetalhesFormacao
    },
    {
        name: 'experiencia/add',
        path: '/experiencia/add',
        component: AddExperiencia
    },
    {
        name: 'experiencia/edit',
        path: '/experiencia/edit',
        component: EditExperiencia
    },
    {
        name: 'experiencia/detalhes',
        path: '/experiencia/detalhes',
        component: DetalhesExperiencia
    },
];
// {
//     name: 'addUsuario',
//     path: '/addUsuario',
//     component: AddUsuario
// }
// ,
// {
//     name: 'autor/edit',
//     path: '/autor/edit/:id',
//     component: EditAutor
// },
// {
//     name: 'addPost',
//     path: '/addPost',
//     component: AddPost
// },
// {
//     name: 'editPost',
//     path: '/editPost/:id',
//     component: EditPost
// }