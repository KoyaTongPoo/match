
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
    justify="center"
    style="height: 700px">
	<span><h1>404 Not Found</h1>
  <h3>スワイプで前のページに遷移</h3></span>
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