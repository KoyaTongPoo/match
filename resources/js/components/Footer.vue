   <template>
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

    <v-btn to="/mail">
      <span>Mail</span>
      <v-icon>mdi-email</v-icon>
    </v-btn>

    <v-btn to="/users/1">
      <span>BBS</span>
      <v-icon>mdi-bulletin-board</v-icon>
    </v-btn>

    <v-btn to="/user">
      <span>Account</span>
      <v-icon>mdi-account</v-icon>
    </v-btn>
  </v-bottom-navigation>
    </v-footer>
    </template>
    <script>
    export default {
  data(){
    
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