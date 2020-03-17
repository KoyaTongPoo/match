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

    <v-tabs
      v-model="tab"
      grow
      center-active
      mobile-break-point="300px"
    >
      <v-tab
        v-for="item in tabs"
        :key="item"
      >
        {{ item }}
      </v-tab>
    </v-tabs>

    <v-tabs-items v-model="tab">
      <v-tab-item
        v-for="item in texts"
        :key="item"
      >
        <v-card
          color="basil"
          flat
        >
          <v-card-text>{{ item }}</v-card-text>
        </v-card>
      </v-tab-item>
    </v-tabs-items>

  
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
         tabs: [
          '自己紹介', '質問歴', '回答歴', 'いいねした人',
        ],
        texts: [
          '物理学の研究者で、カリフォルニア工科大学において実験物理学者としてレーザー技術などを研究。24歳でプリンストン大学から博士号を取得。IQは173、他の科学や文学・歴史にも強い。シェルドンとルームシェアをしているが、わがままな彼に日々手を焼かされている。', 
          '質問歴', '回答歴', 'いいねした人',
        ],}
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