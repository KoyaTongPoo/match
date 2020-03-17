<template>

<v-container class="pa-1">
  <v-row
    v-touch="{
      left: () => swipe('Left'),
      right: () => swipe('Right'),
      up: () => swipe('Up'),
      down: () => swipe('Down')
    }"
    align="center"
    justify="center">
<v-card class="pa-2">
  <v-card-actions>
      <v-btn
      to="/BBS/topic/BBS"
      >
        Back
      </v-btn>
      <v-spacer></v-spacer>
      <v-btn
        color="primary"
        to="/making"
      >
        つぶやく
      </v-btn>
    </v-card-actions>
    <v-container fluid>
      <v-row
        align="center"
      >
      
        <v-col cols="12" sm="6">
          <v-select
            v-model="value"
            :items="items"
            attach
            chips
            label="質問する対象"
            multiple
          ></v-select>
        </v-col>
        <v-textarea
          label="どんな質問をしますか？"
          auto-grow
          outlined
          rows="3"
          row-height="25"
          shaped
          dense=""
          counter="50"
          class="px-1"
        ></v-textarea>

      </v-row>
    </v-container>
</v-card>
  </v-row>
</v-container>
</template>

<script>
  export default {
    data: () => ({
      swipeDirection: 'None',
      items: ['女性', '男性', '相手のいる女性', '相手のいる男性'],
      value: ['女性', '男性', '相手のいる女性', '相手のいる男性'],
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