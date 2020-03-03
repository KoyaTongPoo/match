import Vue from "vue";
import VueRouter from "vue-router";
import Home from './views/Home.vue'
import About from './views/About.vue'
import NotFound from './views/NotFound.vue'
import User from './views/User.vue'
import UserDetail from './views/UserDetail.vue'
import UserEdit from './views/UserEdit.vue'
import UserCreate from './views/UserCreate.vue'
import Appbar from './components/Appbar.vue'


Vue.use(VueRouter);

const routes = [
    {
        path: '*',
        component: NotFound
      },  
    {
        path: "/",
        components: {
         default : Home,
         header : Appbar
        }
    },
    {
        path: '/about',
        components: {
          default : About,
          header : Appbar
         }
      },
      {
        path: '/user',
        components: {
          default : User,
          header : Appbar
         }
      },
      {
        path: '/user/create',
        components: {
          default : UserCreate,
          header : Appbar
         }
      },
      {
        path: '/user/:id',
        components: {
          default : UserDetail,
          header : Appbar
         }
      },
      {
        path: '/user/:id/edit',
        components: {
          default : UserEdit,
          header : Appbar
         }
      },
      
 
];

export default new VueRouter({ routes });