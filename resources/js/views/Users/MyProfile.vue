<template>
<v-container>
    <v-row
    v-touch="{
      left: () => swipe('Left'),
      right: () => swipe('Right'),
      up: () => swipe('Up'),
      down: () => swipe('Down')
    }">
  <router-link
  to="/making">＞プロフィールを編集する</router-link>
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

    <v-card-text>
      <v-row
        align="center"
        class="mx-0"
      >
        <v-rating
          :value="4.5"
          color="pink"
          dense
          half-increments
          readonly
          size="14"
          full-icon="mdi-heart"
          half-icon="mdi-heart-half-full"
        ></v-rating>

        <div class="grey--text ml-4">4.5 (413)</div>
      </v-row>

      <div class="my-4 subtitle-1">
        自己紹介
      </div>

      <div>物理学の研究者で、カリフォルニア工科大学において実験物理学者としてレーザー技術などを研究。24歳でプリンストン大学から博士号を取得。IQは173、他の科学や文学・歴史にも強い。
シェルドンとルームシェアをしているが、わがままな彼に日々手を焼かされている。性格は内気でやや卑屈、そしてゲームやコミックブックが好きなオタクである。小型ロケットの実験の失敗によりシェルドンとルームシェアしているマンションのエレベーターを破壊した張本人である。
両親も共に科学者であり、特に後述の母ビバリーからは極端に論理的或いは合理的な考え方に基づいたやり方で育てられる。その結果として、少年時代、学業面では極めて秀でていたものの、寂しさの余り自分を抱擁する機械を制作したりしていた。子供の頃の夢はラッパーだった。また、チェロを習っていた経験があり、その腕前もなかなかのもの。
乳糖不耐症で、乳製品を食べるとオナラが止まらなくなる。
ペニーとはよく諍いを起こすが、ほとんどの場合仲直りをし、最終的にセックスに発展する。
ペニーが引っ越して来て以来ずっと片想いをしており、「僕らの子は賢くてきれいだろうな」と発言。シーズン1の最終話にて、やっとデートにこぎつけることに成功する。しかし、シーズン2の第1話にて（主に、シェルドンによる）誤解等からフラれてしまう。シーズン2の最終話でシェルドンたちとともに北極調査へ旅立つ。シーズン3では北極から帰国後にペニーと交際に発展するも、レナードが愛していると言ったことをペニーが性急に感じたため、関係にひびが入り破局。その後、ラージの妹であるプリヤと交際し、ペニーをやきもきさせる。プリヤとは彼女のインドへの帰国に伴い、破局。その後、お試し期間という名目で再びペニーと交際している。さらにその後、シーズン6にて初めてペニーから愛していると告げられ、お互いに強く惹かれる。
シーズン6最終話で、ハワードの推薦によりホーキング博士が組織した調査団に選ばれ、ブラックホールの研究のため北海へ旅行に出た。
シーズン7では、女優としてのキャリアに悲観的になり酔っていたペニーからプロポーズされた。その際は、ペニーの自暴自棄な態度とレナードの優柔不断な性格から返事が出来なかったが、シーズン7終盤ではレナードがペニーに改めてプロポーズし、婚約した。
シーズン９の１話でラスベガスで結婚式を挙げた。式の様子はネット配信された。のちに結婚式に招待されなかったことを侮辱的に感じたビバリー（英語版）のために再度結婚式を行う。
シーズン10ではシェルドン、エイミーの同棲を機にこれまで暮らしていた部屋でペニーと2人きりの結婚生活を開始する。</div>
    </v-card-text>

    <v-divider class="mx-4"></v-divider>
    

  
  </v-card>
    </v-row>
  </v-container>





</template>

<script>
  export default {
    data () {
      return {
          swipeDirection: 'None',
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
			  this.$router.push('/BBS/topic/BBS')
          }
        this.swipeDirection = direction
      },
    },
  }
</script>