import Vue from "vue";
import VueRouter from "vue-router";
import Home from './views/Home.vue'
import About from './views/About.vue'
import NotFound from './views/NotFound.vue'
import Making from './views/Making.vue'
import User from './views/User.vue'
import UserDetail from './views/UserDetail.vue'
import UserEdit from './views/UserEdit.vue'
import UserCreate from './views/UserCreate.vue'
import Appbar from './components/Appbar.vue'
import LikeButton from './components/LikeButton.vue'
import RButton from './components/RButton.vue'
import UserId from './views/Users/_id.vue'
import UserList from './views/Users/List.vue'
import Women from './views/Users/Women.vue'
import Thanks from './views/Users/Thanks.vue'
import MyProfile from './views/Users/MyProfile.vue'
import Mail from './views/Mail.vue'
import BBS from './views/BBS.vue'
import ARecommend from './views/ARecommend.vue'
import SheldonCooper from './views/Users/SheldonCooper.vue'

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
      path: '/making',
      components: {
        default : Making,
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
      {
        path: '/users/SheldonCooper',
        components: {
          default : SheldonCooper,
          header : Appbar,
          button : RButton
         }
      },
      {
        path: '/users/MyProfile/:title',
        components: {
          default : MyProfile,
          header : Appbar
         }
      },
      {
        path: '/users/women/:title',
        components: {
          default : Women,
          header : Appbar
         }
      },
      {
        path: '/users/thanks/:title',
        components: {
          default : Thanks,
          header : Appbar
         }
      },
      {
        path: '/users/list',
        components: {
          default : UserList,
          header : Appbar
         }
      },
      {
        path: '/users/:id',
        components: {
          default : UserId,
          header : Appbar,
          button : LikeButton
         }
      },
      {
        path: '/mail/:title',
        components: {
          default : Mail,
          header : Appbar
         }
      },
      {
        path: '/BBS/topic/:title',
        components: {
          default : BBS,
          header : Appbar
         }
      },
      {
        path: '/recommend/:title',
        components: {
          default : ARecommend,
          header : Appbar
         }
      },
 
];

export default new VueRouter({ routes });