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
    <v-container py-1 px-0>
  <v-card
    class="mx-auto"
    max-width="374"
    shaped
    align="center"
    color="brown"
  >
    <v-img
      height="250px"
      src=""
      
    >
      <v-row
        align="center"
        class="fill-height"
      >
        
        <v-col class="py-0">
          <v-list-item
            color="rgba(0, 0, 0, .4)"
            dark
          >
            <v-list-item-content>
              <v-list-item-title class="title">質問をつぶやく</v-list-item-title>
              <v-list-item-subtitle>対象を指定して質問を投稿します</v-list-item-subtitle>
            </v-list-item-content>
          </v-list-item>
          <v-btn color="primary"
          to="/Qpeet/Qpeet">Push!</v-btn>
          

        </v-col>
      </v-row>
    </v-img>
  </v-card>
 </v-container>
<v-container py-1 px-0>
  <v-card
    class="mx-auto"
    max-width="374"
    shaped
    align="center"
    color="light-blue"
  >
    <v-img
      height="250px"
      src=""
    >
      <v-row
        align="center"
        class="fill-height"
      >
        
        <v-col class="py-0">
          <v-list-item
            color="rgba(0, 0, 0, .4)"
            dark
          >
            <v-list-item-content>
              <v-list-item-title class="title">つぶやく</v-list-item-title>
              <v-list-item-subtitle>メッセージを発信する</v-list-item-subtitle>
            </v-list-item-content>
          </v-list-item>
          <v-btn color="primary"
          to="/making">Push！
          </v-btn>
        </v-col>
      </v-row>
    </v-img>
  </v-card>
 </v-container>



 
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