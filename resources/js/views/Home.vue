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
    class="grey lighten-2"
    justify="center"
    style="height: 1000px"
  >
    <v-subheader>Swipe Direction</v-subheader>
    {{ swipeDirection }}
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
			//   console.log(direction)
			  this.$router.push('/users/list')
		  }
        this.swipeDirection = direction
      },
    },
  }
</script>