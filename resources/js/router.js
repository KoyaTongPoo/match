import Vue from "vue";
import VueRouter from "vue-router";
import Home from './views/Home.vue'
import About from './views/About.vue'
import NotFound from './views/NotFound.vue'
import User from './views/User.vue'
import UserDetail from './views/UserDetail.vue'
import UserEdit from './views/UserEdit.vue'
import UserCreate from './views/UserCreate.vue'

Vue.use(VueRouter);

const routes = [
    {
        path: '*',
        component: NotFound
      },  
    {
        path: "/",
        component: Home
    },
    {
        path: '/about',
        name: 'about',
        component: About
      },
      {
        path: '/user',
        name: 'user',
        component: User
      },
      {
        path: '/user/create',
        name: 'user_create',
        component: UserCreate
      },
      {
        path: '/user/:id',
        name: 'user_detail',
        component: UserDetail
      },
      {
        path: '/user/:id/edit',
        name: 'user_edit',
        component: UserEdit
      },
      
 
];

export default new VueRouter({ routes });