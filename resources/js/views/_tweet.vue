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
    class="mx-auto"
    elevation="8"
    max-width="374"

  >
<v-card
    class="mx-auto mb-1"
    color="#26c6da"
    dark
    max-width="400"
  >
    <v-card-title>
      <v-avatar
      class="elevation-6"
        left
      >
        <v-img src="https://vignette.wikia.nocookie.net/the-big-bang-theory/images/6/6a/Howardwolowitz.jpg/revision/latest/top-crop/width/360/height/450?cb=20180621133808&path-prefix=ja"></v-img>
      </v-avatar>
      <span class="title font-weight-light">ハワード</span>
    </v-card-title>

    <v-card-text class="headline font-weight-bold"
    style="color: rgba(255,255,255,0.8);">
      もし君がロボットで、それを君は知らなかったら僕に教えて欲しい？
    </v-card-text>


  </v-card>




<v-card
    class="mx-auto mb-1"
    color="#26c6da"
    dark
    max-width="400"
  >
    <v-list-item>
        <v-col align-self="start"
        class="pl-0"
        cols="3">
      <v-avatar
      class="elevation-6"
        
      >
        <v-img src="https://rr.img.naver.jp/mig?src=http%3A%2F%2Fimgcc.naver.jp%2Fkaze%2Fmission%2FUSER%2F20160626%2F12%2F1277332%2F22%2F491x405xb42267cc25f890bfebe5dbd8.jpg%2F300%2F600&twidth=300&theight=600&qlt=80&res_format=jpg&op=r"></v-img>
      
      </v-avatar>
       <v-list-item-subtitle class="font-weight-light">シェルドン</v-list-item-subtitle>
        </v-col>

      <v-list-item-content class="headline font-weight-bold"
      style="color: rgba(255,255,255,0.8);">
      場合による。もしロボットだとわかっても、うまくやっていけるかな？
      </v-list-item-content>
    </v-list-item>
  </v-card>


  <v-card
    class="mx-auto mb-1"
    color="#26c6da"
    dark
    max-width="400"
  >
    <v-list-item>
        <v-col align-self="start"
        class="pl-0"
        cols="3">
      <v-avatar
      class="elevation-6"
        
      >
        <v-img src="https://vignette.wikia.nocookie.net/the-big-bang-theory/images/6/6a/Howardwolowitz.jpg/revision/latest/top-crop/width/360/height/450?cb=20180621133808&path-prefix=ja"></v-img>
      
      </v-avatar>
       <v-list-item-subtitle class="font-weight-light">ハワード</v-list-item-subtitle>
        </v-col>

      <v-list-item-content class="headline font-weight-bold"
      style="color: rgba(255,255,255,0.8);">
      たぶんね。SFではあまりうまくいった試しないけど。
      </v-list-item-content>
    </v-list-item>
  </v-card>


  <v-card
    class="mx-auto mb-1"
    color="#26c6da"
    dark
    max-width="400"
  >
    <v-list-item>
        <v-col align-self="start"
        class="pl-0"
        cols="3">
      <v-avatar
      class="elevation-6"
        
      >
        <v-img src="https://rr.img.naver.jp/mig?src=http%3A%2F%2Fimgcc.naver.jp%2Fkaze%2Fmission%2FUSER%2F20160626%2F12%2F1277332%2F22%2F491x405xb42267cc25f890bfebe5dbd8.jpg%2F300%2F600&twidth=300&theight=600&qlt=80&res_format=jpg&op=r"></v-img>
      
      </v-avatar>
       <v-list-item-subtitle class="font-weight-light">シェルドン</v-list-item-subtitle>
        </v-col>

      <v-list-item-content class="headline font-weight-bold"
      style="color: rgba(255,255,255,0.8);">
      あー、じゃあ聞くけど、ロボットだとわかった場合、アシモフのロボット三原則に縛られるのかな？
      </v-list-item-content>
    </v-list-item>
  </v-card>


  <v-card
    class="mx-auto mb-1"
    color="#26c6da"
    dark
    max-width="400"
  >
    <v-list-item>
        <v-col align-self="start"
        class="pl-0"
        cols="3">
      <v-avatar
      class="elevation-6"
        
      >
        <v-img src="https://www.superdramatv.com/lineup/SN0000000042/img/cast_05.jpg"></v-img>
      
      </v-avatar>
       <v-list-item-subtitle class="font-weight-light">ラージ</v-list-item-subtitle>
        </v-col>

      <v-list-item-content class="headline font-weight-bold"
      style="color: rgba(255,255,255,0.8);">
      君の場合はすでに縛られているかもしれない。
      </v-list-item-content>
    </v-list-item>
  </v-card>


  <v-card
    class="mx-auto mb-1"
    color="#26c6da"
    dark
    max-width="400"
  >
    <v-list-item>
        <v-col align-self="start"
        class="pl-0"
        cols="3">
      <v-avatar
      class="elevation-6"
        
      >
        <v-img src="https://vignette.wikia.nocookie.net/the-big-bang-theory/images/6/6a/Howardwolowitz.jpg/revision/latest/top-crop/width/360/height/450?cb=20180621133808&path-prefix=ja"></v-img>
      
      </v-avatar>
       <v-list-item-subtitle class="font-weight-light">ハワード</v-list-item-subtitle>
        </v-col>

      <v-list-item-content class="headline font-weight-bold"
      style="color: rgba(255,255,255,0.8);">
      そうだな、今まで人間を傷つけたり、危険を放置して危害を及ぼしたことは？
      </v-list-item-content>
    </v-list-item>
  </v-card>


  <v-card
    class="mx-auto mb-1"
    color="#26c6da"
    dark
    max-width="400"
  >
    <v-list-item>
        <v-col align-self="start"
        class="pl-0"
        cols="3">
      <v-avatar
      class="elevation-6"
        
      >
        <v-img src="https://rr.img.naver.jp/mig?src=http%3A%2F%2Fimgcc.naver.jp%2Fkaze%2Fmission%2FUSER%2F20160626%2F12%2F1277332%2F22%2F491x405xb42267cc25f890bfebe5dbd8.jpg%2F300%2F600&twidth=300&theight=600&qlt=80&res_format=jpg&op=r"></v-img>
      
      </v-avatar>
       <v-list-item-subtitle class="font-weight-light">シェルドン</v-list-item-subtitle>
        </v-col>

      <v-list-item-content class="headline font-weight-bold"
      style="color: rgba(255,255,255,0.8);">
      もちろんない
      </v-list-item-content>
    </v-list-item>
  </v-card>


  <v-card
    class="mx-auto mb-1"
    color="#26c6da"
    dark
    max-width="400"
  >
    <v-list-item>
        <v-col align-self="start"
        class="pl-0"
        cols="3">
      <v-avatar
      class="elevation-6"
        
      >
        <v-img src="https://vignette.wikia.nocookie.net/the-big-bang-theory/images/6/6a/Howardwolowitz.jpg/revision/latest/top-crop/width/360/height/450?cb=20180621133808&path-prefix=ja"></v-img>
      
      </v-avatar>
       <v-list-item-subtitle class="font-weight-light">ハワード</v-list-item-subtitle>
        </v-col>

      <v-list-item-content class="headline font-weight-bold"
      style="color: rgba(255,255,255,0.8);">
      人間に危害が及ぶ恐れのある場合を除き、自己を守らなかったことはあるか？
      </v-list-item-content>
    </v-list-item>
  </v-card>


  <v-card
    class="mx-auto mb-1"
    color="#26c6da"
    dark
    max-width="400"
  >
    <v-list-item>
        <v-col align-self="start"
        class="pl-0"
        cols="3">
      <v-avatar
      class="elevation-6"
        
      >
        <v-img src="https://rr.img.naver.jp/mig?src=http%3A%2F%2Fimgcc.naver.jp%2Fkaze%2Fmission%2FUSER%2F20160626%2F12%2F1277332%2F22%2F491x405xb42267cc25f890bfebe5dbd8.jpg%2F300%2F600&twidth=300&theight=600&qlt=80&res_format=jpg&op=r"></v-img>
      
      </v-avatar>
       <v-list-item-subtitle class="font-weight-light">シェルドン</v-list-item-subtitle>
        </v-col>

      <v-list-item-content class="headline font-weight-bold"
      style="color: rgba(255,255,255,0.8);">
      そりゃ、ないけど
      </v-list-item-content>
    </v-list-item>
  </v-card>


   <v-card
    class="mx-auto mb-1"
    color="#26c6da"
    dark
    max-width="400"
  >
    <v-list-item>
        <v-col align-self="start"
        class="pl-0"
        cols="3">
      <v-avatar
      class="elevation-6"
        
      >
        <v-img src="https://vignette.wikia.nocookie.net/the-big-bang-theory/images/6/6a/Howardwolowitz.jpg/revision/latest/top-crop/width/360/height/450?cb=20180621133808&path-prefix=ja"></v-img>
      
      </v-avatar>
       <v-list-item-subtitle class="font-weight-light">ハワード</v-list-item-subtitle>
        </v-col>

      <v-list-item-content class="headline font-weight-bold"
      style="color: rgba(255,255,255,0.8);">
      ロボットくさいな、、
      </v-list-item-content>
    </v-list-item>
  </v-card>
  
   </v-sheet>
    </v-col>
    </v-row>
  </v-container>





</template>

<script>
  export default {
    data () {
      return {
          swipeDirection: 'None',
      }
    },
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