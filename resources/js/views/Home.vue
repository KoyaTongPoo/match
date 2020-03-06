<template>
<v-container>
  <v-row
    v-touch="{
      left: () => swipe('Left'),
      right: () => swipe('Right'),
      up: () => swipe('Up'),
      down: () => swipe('Down')
    }">
  <v-col
  cols="12">
  <v-card
  class="mx-auto my-1"
    max-width="374"
    color="lime">
    <h3>今日のトピックス</h3>
     <v-list-item two-line to="/making">
       <v-avatar>
         <v-img src="https://rpr.c.yimg.jp/im_sigg688HsuuPIAaGOEwDatEKFA---x800-n1/amd/20170221-00067927-roupeiro-000-15-view.jpg"></v-img>
       </v-avatar>
      <v-list-item-content>
        <v-list-item-title>Two-line item</v-list-item-title>
        <v-list-item-subtitle>Secondary text</v-list-item-subtitle>
      </v-list-item-content>
    </v-list-item>

<v-divider></v-divider>

     <v-list-item two-line to="/making">
       <v-avatar>
         <v-img src="https://rpr.c.yimg.jp/im_sigg688HsuuPIAaGOEwDatEKFA---x800-n1/amd/20170221-00067927-roupeiro-000-15-view.jpg"></v-img>
       </v-avatar>
      <v-list-item-content>
        <v-list-item-title>Two-line item</v-list-item-title>
        <v-list-item-subtitle>Secondary text</v-list-item-subtitle>
      </v-list-item-content>
    </v-list-item>
  </v-card>

  <v-card class="mx-auto my-1"
    max-width="374"
    color="cyan"
    align="center">
    <h3>あなたのランク</h3>
    <h4>シルバー</h4>
    <v-divider></v-divider>
    <h3>あなたのポイント</h3>
    <h4>94P</h4>
    <v-divider></v-divider>
    <h3>あなたへの紹介</h3>
    <h4>5件</h4>
    <v-divider></v-divider>
    <h3>掲示板への返信</h3>
    <h4>20件</h4>
    <v-divider></v-divider>
    <h3>今週のいいね！</h3>
    <h4>33件</h4>
  </v-card>

   <v-card class="mx-auto my-1"
    max-width="374"
    color="light-green"
    align="center">
    <h3>あなたにぴったりの相手を探す</h3>
    <p>占いをAIが理想の相手を探します♪</p>
    <v-btn
    to="/recommend/占い？AI？"
    color="primary">
      SERCH!!

    </v-btn>
  </v-card>

 <v-card class="mx-auto my-1"
    max-width="374"
    color="amber"
    align="center">
    <h3>開発者への寄付</h3>
    <p>サービス維持の為寄付をお願いします</p>
    <v-btn 
    to="/making"
    color="primary">
      ￥300 寄付する

    </v-btn>
  </v-card>
  </v-col>
    <!-- <v-subheader>Swipe Direction</v-subheader>
    {{ swipeDirection }} -->
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
			  this.$router.push('/users/list')
      }
      else if (direction == 'Right') {
			  this.$router.push('/users/MyProfile/MyProfile')
          }
        this.swipeDirection = direction
      },
    },
  }
</script>