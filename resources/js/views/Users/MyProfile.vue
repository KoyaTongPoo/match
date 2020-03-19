<template>
<v-container>
    <v-row
    v-touch="{
      left: () => swipe('Left'),
      right: () => swipe('Right'),
      up: () => swipe('Up'),
      down: () => swipe('Down')
    }">
  <v-btn
  text
  color="primary"
  to="/users/edit/プロフィール編集">＞プロフィールを編集する</v-btn>
  <v-card
    class="mx-auto my-1"
    max-width="374"
  >

  <v-carousel
  height="300"
  :show-arrows="false">
    <v-carousel-item
      v-for="(item,i) in items"
      :key="i"
      :src="item.src"
      
      reverse-transition="fade-transition"
      transition="fade-transition"
    ></v-carousel-item>
  </v-carousel>
  
  
    <v-card-title>レナード　27歳　カルフォルニア在住</v-card-title>
    <div>
      <v-chip
      class="ma-2"
    >
      ゲーム
    </v-chip>

    <v-chip
      class="ma-2"
    >
      漫画好き
    </v-chip>

    <v-chip
      class="ma-2"
    >
      インドア派
    </v-chip>
    </div>
<v-card-subtitle>
自己紹介
</v-card-subtitle>
<v-card-text>
  物理学の研究者で、カリフォルニア工科大学において実験物理学者としてレーザー技術などを研究。24歳でプリンストン大学から博士号を取得。IQは173、他の科学や文学・歴史にも強い。シェルドンとルームシェアをしているが、わがままな彼に日々手を焼かされている。
</v-card-text>

<v-card-subtitle>
質問歴
</v-card-subtitle>
<v-card
    class="px-1"
    color="#26c6da"
    dark
  >
    <v-card-text class="font-weight-bold pa-1">
      世の中のみんなが身の回りのものを全部きっちり整理しないと気が済まないわけじゃないてって思ったことない？
    </v-card-text>

    <v-card-actions class="pa-0">
      <v-spacer></v-spacer>

        <v-row
          align="center"
          justify="end"
        >
          <v-icon class="mr-1">mdi-heart</v-icon>
          <span class="subheading mr-2">256</span>
<v-spacer></v-spacer>
          <v-btn to="/BBS/1"
          text="">
          <v-icon class="mr-1"
          >mdi-comment-outline</v-icon>
          <span class="subheading">45</span>
        </v-btn>
        </v-row>
<v-spacer></v-spacer>
    </v-card-actions>
  </v-card>

  <v-card-subtitle>
回答歴
</v-card-subtitle>
<v-card
    class="mx-auto"
    color="grey"
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
        <v-img src="https://www.superdramatv.com/line/bigbang/cast/img/c_amy_m.jpg"></v-img>
      
      </v-avatar>
       <v-list-item-subtitle class="font-weight-light">シェルドン</v-list-item-subtitle>
        </v-col>

      <v-list-item-content class="font-weight-bold"
      style="color: rgba(255,255,255,0.7);">
      バーや居酒屋のような社会的交流の場で相手を見つける人もいるそうよ。バーへ行って試してみた？
      </v-list-item-content>
    </v-list-item>
  </v-card>
<v-card
    class="px-1"
    color="#26c6da"
    dark
  >
    <v-card-text class="font-weight-bold pa-1">
      いや、バーで女性をひっかける気はない。
    </v-card-text>

    <v-card-actions class="pa-0">
      <v-spacer></v-spacer>

        <v-row
          align="center"
          justify="end"
        >
          <v-icon class="mr-1">mdi-heart</v-icon>
          <span class="subheading mr-2">256</span>
          
        </v-row>
<v-spacer></v-spacer>
    </v-card-actions>
  </v-card>
  <v-card
    class="mx-auto mb-1"
    color="grey"
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

      <v-list-item-content class="font-weight-bold"
      style="color: rgba(255,255,255,0.7);">
      それは賢明だ。いいかいエイミー、バーでの成功は男性の古典的な性質にかかっている。背が高く、タフで、魅力にあふれ、酒に強くてダーツがうまいっていうね。その一つでもあればいいが、レナードには一つとしてその特質がない。そうだよな？
      </v-list-item-content>
    </v-list-item>
  </v-card>
<v-card
    class="px-1"
    color="#26c6da"
    dark
  >
    <v-card-text class="font-weight-bold pa-1">
      そうだ
    </v-card-text>

    <v-card-actions class="pa-0">
      <v-spacer></v-spacer>

        <v-row
          align="center"
          justify="end"
        >
          <v-icon class="mr-1">mdi-heart</v-icon>
          <span class="subheading mr-2">256</span>
          
        </v-row>
<v-spacer></v-spacer>
    </v-card-actions>
  </v-card>


<v-card-subtitle>
フォローしている人
</v-card-subtitle>
<v-list>
<v-list-item>
<v-list-item-avatar>
  <v-img src="https://vignette.wikia.nocookie.net/the-big-bang-theory/images/6/6a/Howardwolowitz.jpg/revision/latest/top-crop/width/360/height/450?cb=20180621133808&path-prefix=ja"></v-img>
</v-list-item-avatar>

<v-list-item-content>
  大学で、応用物理学のエンジニアをしているユダヤ人。博士号を取得していないことを理由に、シェルドンらから度々からかいを受けている。
</v-list-item-content>



</v-list-item>
</v-list> 
<v-list>
<v-list-item>
<v-list-item-avatar>
  <v-img src="https://rr.img.naver.jp/mig?src=http%3A%2F%2Fimgcc.naver.jp%2Fkaze%2Fmission%2FUSER%2F20160626%2F12%2F1277332%2F22%2F491x405xb42267cc25f890bfebe5dbd8.jpg%2F300%2F600&twidth=300&theight=600&qlt=80&res_format=jpg&op=r"></v-img>
</v-list-item-avatar>

<v-list-item-content>
  カリフォルニア工科大学の物理学博士。理論物理学者で、専門は当初はひも理論、後に暗黒物質に転向。IQは187。レナードのルームメイト。
</v-list-item-content>



</v-list-item>
</v-list> 
<v-list>
<v-list-item>
<v-list-item-avatar>
  <v-img src="https://www.superdramatv.com/lineup/SN0000000042/img/cast_05.jpg"></v-img>
</v-list-item-avatar>

<v-list-item-content>
  インドのニューデリー出身。専門は素粒子論的宇宙論。イングランドのケンブリッジ大学で宇宙物理学に触れ、学問を志した。
</v-list-item-content>



</v-list-item>
</v-list> 


<v-card-subtitle>
いいねをつけたつぶやき
</v-card-subtitle>
  
  </v-card>
    </v-row>
  </v-container>





</template>

<script>
  export default {
    data () {
      return {
          swipeDirection: 'None',
          tab: null,
        items: [
          {
            src: 'https://nigiwasu.com/wp-content/uploads/2019/06/johnny-CBS.com_-240x300.jpg',
          },
          {
            src: 'https://www.superdramatv.com/line/bigbang/cast/img/photo_01.jpg',
          },
          {
            src: 'https://blogimg.goo.ne.jp/user_image/33/b8/d4c259279fc199836feef09fe0ef4e6b.jpg',
          },
          {
            src: 'https://www.monstersandcritics.com/wp-content/uploads/2019/02/ef91379a-6e98-4ae2-8182-649336439665-tbbt_michael-yarishwarner-bros-entertainment-inc.jpg',
          },
        ],
       }
    },
    methods: {
      swipe (direction) {
		  if (direction == 'Left') {
			//   console.log(direction)
			  this.$router.push('/')
          }
          else if (direction == 'Right') {
			//   console.log(direction)
			  this.$router.push('/BBS/topic/つぶやき')
          }
        this.swipeDirection = direction
      },
    },
  }
</script>