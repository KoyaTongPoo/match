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
  >
    <v-img
      height="250px"
      src="/img/ball.jpg"
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
              <v-list-item-title class="title">相性占いでマッチング</v-list-item-title>
              <v-list-item-subtitle>○○なあなたと相性の良い人を探します。</v-list-item-subtitle>
            </v-list-item-content>
          </v-list-item>
          <v-btn color="primary"
          @click="dialog = true">Push!</v-btn>
          

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
  >
    <v-img
      height="250px"
      src="/img/artificial-intelligence-3382507_640.jpg"
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
              <v-list-item-title class="title">AIで相性の良い人を探す</v-list-item-title>
              <v-list-item-subtitle>AIが相性の良い人を探します。</v-list-item-subtitle>
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



 <v-dialog
      v-model="dialog"
      max-width="290"
    >
      <v-card>
        <v-card-title class="headline">ポイントを消費しますがよろしいですか?</v-card-title>

        <v-card-text>
          あなたの現在のポイントは543ポイントです。100ポイント消費して最近オンラインだった人の中から相性の良い人と一人マッチングします。
        </v-card-text>

        <v-card-actions>
          <v-spacer></v-spacer>

          <v-btn
            color="green darken-1"
            text
            to="/users/match/Match!!"
          >
            支払う
          </v-btn>

          <v-btn
            color="green darken-1"
            text
            @click="dialog = false"
          >
            キャンセル
          </v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
  </v-row>
</v-container>
</template>

<script>
  export default {
    data: () => ({
      swipeDirection: 'None',
      dialog: false,
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