// import AllAutorsPosts from './components/AllAutorsPosts.vue';
import AllUsuarios from './components/AllUsuarios.vue';

// import AddPost        from './components/AddPost.vue';
// import EditPost       from './components/EditPost.vue';

// import AddAutor       from './components/AddAutor.vue';
// import EditAutor      from './components/EditAutor.vue';
 
export const routes = [
    {
        name: 'home',
        path: '/',
        component: AllUsuarios
    }
    ,
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
];