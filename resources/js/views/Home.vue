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
          to="/making"
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
          src="data:image/jpeg;base64,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"></v-img>
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