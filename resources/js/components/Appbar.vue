<template>
  <v-app>
    <v-navigation-drawer app v-model="drawer" clipped >
  <v-container>
    <v-list-item>
      <v-list-item-content>
        <v-list-item-title class="title">
          アプリタイトル
        </v-list-item-title>
      </v-list-item-content>
    </v-list-item>

    <v-divider></v-divider>

    <v-list nav dense>
  <v-list-group 
  v-for="nav_list in nav_lists" 
  :key="nav_list.name" 
  :prepend-icon="nav_list.icon" 
  no-action 
  :append-icon="nav_list.lists ? undefined : ''"> 
    <template v-slot:activator>
      <v-list-item-content>
        <v-list-item-title>{{ nav_list.name }}</v-list-item-title>
      </v-list-item-content>
    </template>
    <v-list-item v-for="list in nav_list.lists" :key="list.name" :to="list.link">
      <v-list-item-content>
        <v-list-item-title>{{ list }}</v-list-item-title>
      </v-list-item-content>
    </v-list-item>
  </v-list-group>
</v-list>

  </v-container>
</v-navigation-drawer>

    <v-app-bar color="primary" 
    dark
    app
    clipped-left
    fixed>
      <v-app-bar-nav-icon @click="drawer=!drawer"></v-app-bar-nav-icon>
      <v-toolbar-title>{{$route.params.title}}</v-toolbar-title>
      <v-spacer></v-spacer>

      <v-toolbar-items>

<v-btn text to="/mail/新着メッセージ">
  
   <v-badge
          color="warning"
          content="5"
        >
    <v-icon>
    mdi-email
    </v-icon>
  </v-badge>
  
</v-btn>

<v-menu offset-y>
  <template v-slot:activator="{on}">
  <v-btn v-on="on" text><v-icon>mdi-settings</v-icon>
    <v-icon>mdi-menu-down</v-icon></v-btn>
  </template>
  <v-list-item v-for="support in supports" :key="support.name" :to="support.link">
  <v-list-item-icon>
  <v-icon>{{ support.icon }}</v-icon>
  </v-list-item-icon>
  <v-list-item-content>
  <v-list-item-title>{{ support.name }}</v-list-item-title>
  </v-list-item-content>
</v-list-item>
</v-menu>
</v-toolbar-items>
    </v-app-bar>
           
    <v-footer>
       
      <v-bottom-navigation
    shift
    app
    dark
    background-color="primary"
  >
    <v-btn to="/">
      <span>Home</span>
      <v-icon>mdi-home</v-icon>
    </v-btn>

    <v-btn to="/users/list">
      <span>紹介</span>
      <v-icon>mdi-human-handsup</v-icon>
    </v-btn>

    <v-btn to="/BBS/topic/BBS">
      <span>BBS</span>
      <v-icon>mdi-bulletin-board</v-icon>
    </v-btn>

    <v-btn to="/users/MyProfile/MyProfile">
      <span>Account</span>
      <v-icon>mdi-account</v-icon>
    </v-btn>
  </v-bottom-navigation>
  
      </v-footer>

  </v-app>
</template>

<script>
export default {
  data(){
    return{
        drawer: null,
        supports:[
  {
    name: 'ユーザー一覧',
    icon: 'mdi-vuetify',
    link:'/user'
  },
  {
    name: '友達',
    icon: 'mdi-discord',
    link:'/users/1'},
  {
    name: 'Report a bug',
    icon: 'mdi-bug',
    link:'/report-a-bug'
  },
  {
    name: 'Github issue board',
    icon: 'mdi-github-face',
    link:'/guthub-issue-board'
  },
  {
    name: 'Stack overview',
    icon: 'mdi-stack-overflow',
    link:'/stack-overview'
  },
],
nav_lists:[
  {
    name: 'Getting Started',
    icon: 'mdi-speedometer',
    lists:[{
        name:'Home',link:'/'
      },
      {
        name:'About',link:'/about'
      }
    ]
  },
  {
    name: 'Customization',
    icon: 'mdi-cogs' 
  },
  {
    name: 'Styles & animations',
    icon: 'mdi-palette',
    lists:['Colors','Content','Display']
  },
  {
    name: 'UI Components',
    icon: 'mdi-view-dashboard',
    lists:['API explorer','Alerts']
  },
  {
    name: 'Directives',
    icon: 'mdi-function'
  },
  {
    name: 'Preminum themes',
    icon: 'mdi-vuetify'
  },
]
    }
  },
  computed: {
      color () {
        switch (this.bottomNav) {
          case 0: return 'blue-grey'
          case 1: return 'teal'
          case 2: return 'brown'
          case 3: return 'indigo'
        }
      },
    },
}
</script>
<style scoped>
.v-application {
  /* width: 100px; */
  height: 0px;
  background: orange;
}
</style>