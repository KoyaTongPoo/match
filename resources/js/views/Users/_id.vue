<template>
<v-container>
    <v-row
    v-touch="{
      left: () => swipe('Left'),
      right: () => swipe('Right'),
      up: () => swipe('Up'),
      down: () => swipe('Down')
    }">

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
  
  
    <v-card-title>ペニー　21歳　ネブラスカ州出身</v-card-title>

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

      <div>普段はチーズケーキ・ファクトリー (The Cheesecake Factory) というレストランでウェイトレスとして働いている。度々金欠に陥り、レナードやシェルドンたちに食事を世話になったり、彼らのWi-Fiの電波を利用させてもらったりしている。
レナードやシェルドン、並びに彼らの家に出入りするハワードやラージに対して、オタクに対する偏見をあまり持たずに、彼らと友好的な関係を保っている。バーナデットやエイミーもしばしば奇妙な言動を見せるが、それに対しても温かく接する。とはいえ彼らがあまりに風変りな行動をとった時は皮肉で対応している。
レナードらと違って学歴が低いことを幾らか気にしているようで、初めてレナードと交際していた頃、本当は中退したコミュニティカレッジを卒業したと嘘を付いていた。レナードが「学歴の高い女性でないと満足しない」と誤解した末に別れたこともある。その後はコミュニティカレッジの授業をパートタイムで受講するなど、彼女なりに努力をしている。
レナードと一旦は別れるも、シーズン2最終話でレナードが北極の調査旅行に行ってしまうと知って彼への愛に気付き、シーズン3で再び交際を始めたが再び破局。その後、シーズン4でレナードがプリヤと交際を始めて以降は、レナードと別れたことは失敗だったと語った。レナードがプリヤと別れた後に、再びレナードとデートを重ね、今度こそ互いの齟齬を乗り越えようと努力している。
一番好きな映画は「映画版セックス・アンド・ザ・シティー」である。レギュラー放送も好きでレナードに無理やり全シーズンを見せるほどである。
レナードたちが好きなアメコミ、SFドラマなどに殆ど興味はないがドラマ「ゲーム・オブ・スローンズ」だけは好きで一緒に見ている。
女優を目指しているが、才能は皆無であると周囲からは思われており、また本人はそれに無自覚であるように描写されている。
主な女優としてのキャリアはボーリング場で演じたアンネフランク役、痔のCM、海外ドラマ「NCIS」でのウェイトレス役（しかしオンエアの際はカットになってしまった）映画「恐怖の変態ゴリラ」パート1、パート2の主役である。特にゴリラ映画は極一部の人たちにカルト的な人気がありシーズン10では出演者としてコミコンにも参加している。パート2にウィル・ウィトンも出演し、ペニーとの初共演を果たしている。
シーズン7では女優としてのキャリアに悲観的になり、酔ったうえでレナードにプロポーズした。その際は、レナードは返事をしなかったが、シーズン7終盤ではレナードがペニーに改めてプロポーズし、婚約した。シーズン8より、バーナデットに紹介された製薬会社の営業として働き始める。当初は不採用だったが、帰り際に面接官のダン（スティーヴン・ルート (Stephen Root)）とバーナデットの性格のことで意気投合したため採用された（恐らくダンが味方が欲しかったため）。
転職後はレナードの2倍の月給があるなど安定した収入を得ているものの仕事内容自体はあまり好きではないと度々話すシーンがあり再転職を考えているが、カードローンの返済の為と割り切って働いている。</div>
    </v-card-text>

    <v-divider class="mx-4"></v-divider>
    

  
  </v-row>
 
  </v-container>





</template>

<script>
  export default {
    data () {
      return {
        items: [
          {
            src: 'https://ouchi-time.com/wp-content/uploads/2018/05/ba8babaca28e197b0958bffff219591d.jpg',
          },
          {
            src: 'https://pbs.twimg.com/media/EKls-RZX0AEF93m.jpg',
          },
          {
            src: 'https://memorylane-media.com/wp-content/uploads/2018/07/%E3%82%B9%E3%82%AF%E3%83%AA%E3%83%BC%E3%83%B3%E3%82%B7%E3%83%A7%E3%83%83%E3%83%88-2018-07-22-23.52.42.jpg',
          },
          {
            src: 'https://dramanavi.net/drama/upring/202002/20200225-00000018-dramanavi-1-00-view.jpg',
          },
        ],
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