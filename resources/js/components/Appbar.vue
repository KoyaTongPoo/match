<template>
  <v-app>
    <v-navigation-drawer app v-model="drawer" clipped >
  <v-container>
    <v-list-item>
      <v-list-item-content>
        <v-list-item-title class="title">
          Navigation lists
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

    <v-app-bar color="primary" dark app clipped-left>
      <v-app-bar-nav-icon @click="drawer=!drawer"></v-app-bar-nav-icon>
      <v-toolbar-title>Vuetify</v-toolbar-title>
      <v-spacer></v-spacer>

      <v-toolbar-items>
<v-btn text>For Enterprise</v-btn>
<v-menu offset-y>
  <template v-slot:activator="{on}">
  <v-btn v-on="on" text>Support<v-icon>mdi-menu-down</v-icon></v-btn>
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
    <v-footer color="primary" dark app>
      Vuetify
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
    name: 'Discord community',
    icon: 'mdi-discord',
    link:'/discord-community'},
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
  }
}
</script>