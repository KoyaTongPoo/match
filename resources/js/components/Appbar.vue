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

    <v-list
        nav
        dense
      >
        <v-list-item-group
     
          active-class="deep-purple--text text--accent-4"
        >
          <v-list-item to="/">
            <v-list-item-title>Home</v-list-item-title>
          </v-list-item>

          <v-list-item to="/users/list">
            <v-list-item-title>紹介希望者</v-list-item-title>
          </v-list-item>

          <v-list-item to="/BBS/topic/つぶやき">
            <v-list-item-title>つぶやき</v-list-item-title>
          </v-list-item>

          <v-list-item to="/users/MyProfile/MyProfile">
            <v-list-item-title>MyProfile</v-list-item-title>
          </v-list-item>

          <v-list-item to="/users/edit/プロフィール編集">
            <v-list-item-title>プロフィール編集</v-list-item-title>
          </v-list-item>

          <v-list-item to="/users/list">
            <v-list-item-title>紹介希望者の一覧</v-list-item-title>
          </v-list-item>

          <v-list-item to="/mail/新着メッセージ">
            <v-list-item-title>新着メッセージ</v-list-item-title>
          </v-list-item>
        </v-list-item-group>
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

<v-btn text to="/Notification/お知らせ">
  
   <v-badge
          color="warning"
          content="5"
          overlap=""
        >
    <v-icon>
    mdi-bell
    </v-icon>
  </v-badge>
  
</v-btn>

<v-menu offset-y
 >
  <template v-slot:activator="{on}">
  <v-btn v-on="on" text><v-icon>mdi-settings</v-icon>
    <v-icon>mdi-menu-down</v-icon></v-btn>
  </template>
  <v-list-item style="background-color:#607D8B;"
  v-for="support in supports" :key="support.name" :to="support.link">
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

    <v-btn to="/recommender/キューピット一覧">
      <span>キューピット</span>
      <v-icon>mdi-human-handsup</v-icon>
    </v-btn>

    <v-btn to="/BBS/topic/つぶやき">
      <span>つぶやき</span>
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
    name: '↓作成途中の置き場↓',
    icon: 'mdi-skull',
    
  },
  {
    name: 'ユーザー一覧(作成途中)',
    icon: 'mdi-vuetify',
    link:'/user'
  },
  {
    name: '友達(作成途中)',
    icon: 'mdi-discord',
    link:'/users/1'},
  {
    name: 'ランキング(作成途中)',
    icon: 'mdi-bug',
    link:'/ranking/Ranking'
  },
  {
    name: 'Edit(作成途中)',
    icon: 'mdi-github-face',
    link:'/users/edit/プロフィール編集'
  },
  {
    name: '(作成途中)',
    icon: 'mdi-stack-overflow',
    link:'/making'
  },
],
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