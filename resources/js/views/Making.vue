<template>

<v-container>
  <v-row
    v-touch="{
      left: () => swipe('Left'),
      right: () => swipe('Right'),
      up: () => swipe('Up'),
      down: () => swipe('Down')
    }"
    align="center"
    justify="center">

    <v-card max-width="374px">
        <h1>このページは制作中です</h1>
    <v-img src="img/kouji_rammer.png"
    max-width="374px"
    ></v-img>
    
    </v-card>
  </v-row>
</v-container>
</template>

<script>
  export default {
    data: () => ({
      swipeDirection: 'None',
    }),
    methods: {
      swipe (direction) {
		  if (direction == 'Left') {
			  this.$router.go(1)
		  }
      else if (direction == 'Right') {
			  this.$router.go(-1)
          }      
        this.swipeDirection = direction
      },
    },
  }
  
    
</script>