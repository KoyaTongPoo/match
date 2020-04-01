<template>

<v-container>


    <v-card max-width="374px">
        <h1>削除します</h1>
    <v-img src="/img/kouji_rammer.png"
    max-width="374px"
    ></v-img>
    
    </v-card>

</v-container>
</template>

<script>
  export default {
    data: () => ({
      a: 1,
    }),
    created: function() {
    setInterval(() => { this.a-- }, 1000)
  },watch: {
    a: function(v) {
    if (v <= 0) {
        this.$router.push({ name: 'user'})
      }
    }
  },
   
  }
  
    
</script>