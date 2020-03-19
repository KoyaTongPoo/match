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
   <v-sheet
    class="mx-auto pb-1"
    elevation="8"
    max-width="374"
    color="lime"
  >

    <v-slide-group
      center-active
      class="pa-1"
      mobile-break-point="450"
    >
      <v-slide-item
        v-for="n in 6"
        :key="n"
       
      >
      
        <v-card
          class="mx-2"
          width="320"
          height="200"
          to="/guide/初心者ガイド"
        >
<div class="d-flex flex-no-wrap justify-space-between">
              <div>
          <v-card-title>初心者ガイド</v-card-title>
          <v-card-subtitle>アプリの使い方はこの画層をクリック！</v-card-subtitle>
                   </div>
         <v-img
      src="/img/job_information.png"
      contain
      width="150px"
    >
        </v-img>
   </div>
        </v-card>

      </v-slide-item>
    </v-slide-group>

  </v-sheet>

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



  <v-sheet
    class="mx-auto pb-1"
    elevation="8"
    max-width="374"
    color="lime"
  >
  
<v-list-item  class="pb-1">
  <v-card-title class="pb-0 pl-0">紹介成功率ランキング</v-card-title>
  <v-spacer></v-spacer>
   <v-btn text=""
   class="pa-0"
   right
   to="/making"><a>すべて表示</a></v-btn>

</v-list-item>

    <v-slide-group
      center-active
      class="pa-0 ma-2"
      mobile-break-point="450"
    >
      <v-slide-item
        v-for="n in 15"
        :key="n"
       
      >
        <v-card
          class="mx-2"
     
          width="280"

        >
        
        <v-card height="70">
            <v-list subheader>
      
      <v-list-item two-line class="pa-1">
        <v-list-item-avatar
        left
        size="24"
        class="ma-0 pa-0">
          1
       </v-list-item-avatar>
          
          
        <v-list-item-avatar>
          <v-img class="pa-1"
          src="https://thetv.jp/i/nw/201335/1219715.jpg?w=615"></v-img>
        </v-list-item-avatar>
        

        <v-list-item-content>
          <v-list-item-title>ちさ子</v-list-item-title>
          <v-list-item-subtitle>今やっていることを無駄で終わらせるのか、次に繋げるのかは自分次第。</v-list-item-subtitle>
        </v-list-item-content>
        
        <v-btn color="primary"
            to="/making"
            dark>依頼</v-btn>
      </v-list-item>
      
      
    </v-list>
        </v-card>
 
 
            <v-card height="70">
            <v-list subheader>
      
      <v-list-item class="pa-1">
          
        <v-list-item-avatar
        left
        size="24"
        class="ma-0 pa-0">
          2
       </v-list-item-avatar>
          
        <v-list-item-avatar>
          <v-img class="pa-1"
          src="https://rancolle.com/images/item/uid4_1558088664/155808894338.jpg"></v-img>
        </v-list-item-avatar>
        

        <v-list-item-content>
          <v-list-item-title>老婆</v-list-item-title>
          <v-list-item-subtitle>好機はいつもあなたの目の前にぶら下がってございます</v-list-item-subtitle>
        </v-list-item-content>
        
        <v-btn color="primary"
            to="/making"
            dark>依頼</v-btn>
      </v-list-item>
      
      
    </v-list>
        </v-card>



<v-card height="70">
            <v-list subheader>
      
      <v-list-item class="pa-1">
          
        <v-list-item-avatar
        left
        size="24"
        class="ma-0 pa-0">
          3
       </v-list-item-avatar>
          
        <v-list-item-avatar>
          <v-img class="pa-1"
          src="https://dot.asahi.com/S2000/upload/2018020600055_1.jpg"></v-img>
        </v-list-item-avatar>
        

        <v-list-item-content>
          <v-list-item-title>徹子</v-list-item-title>
          <v-list-item-subtitle>ルールル、ルルル、ルールル♪</v-list-item-subtitle>
        </v-list-item-content>
        
        <v-btn color="primary"
            to="/making"
            dark>依頼</v-btn>
      </v-list-item>
      

    </v-list>
        </v-card>
        </v-card>

      </v-slide-item>
    </v-slide-group>

  </v-sheet>



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
			  this.$router.push('/recommender/キューピット一覧')
      }
      else if (direction == 'Right') {
			  this.$router.push('/users/MyProfile/MyProfile')
          }
        this.swipeDirection = direction
      },
    },
  }
</script>