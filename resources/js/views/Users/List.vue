<template>
<v-container>
  <v-row
    v-touch="{
      left: () => swipe('Left'),
      right: () => swipe('Right'),
      up: () => swipe('Up'),
      down: () => swipe('Down')
    }">
    <h2>異性の紹介を希望している同性のユーザー一覧、各ユーザーに他の人がタグ付できるようにするのと、検索機能を実装予定</h2>
    <v-container py-1 px-0>
  <v-card
    class="mx-auto"
    max-width="434"
    shaped
    to="/users/SheldonCooper"
  >
    <v-img
      height="250px"
      src="https://livedoor.sp.blogimg.jp/toei23/imgs/9/9/992392ef.jpg"
    >
      <v-row
        align="end"
        class="fill-height"
      >
        <v-col
          align-self="start"
          class="pa-0"
          cols="5"
        >
          <v-avatar
            class="profile"
            color="grey"
            size="164"
            tile
          >
            <v-img src="https://rr.img.naver.jp/mig?src=http%3A%2F%2Fimgcc.naver.jp%2Fkaze%2Fmission%2FUSER%2F20160626%2F12%2F1277332%2F22%2F491x405xb42267cc25f890bfebe5dbd8.jpg%2F300%2F600&twidth=300&theight=600&qlt=80&res_format=jpg&op=r"></v-img>
          </v-avatar>
        </v-col>
        <v-col
        align-self="start"
          class="pa-0"
          cols="7"
          justify="space-around"
          >
        <v-chip-group
          column
          active-class="primary--text"
        >
          <v-chip v-for="tag in tags" :key="tag">
            {{ tag }}
          </v-chip>
        </v-chip-group>

    
        </v-col>
        <v-col class="py-0">
          <v-list-item
            color="rgba(0, 0, 0, .4)"
            dark
          >
            <v-list-item-content>
              <v-list-item-title class="title">27歳　カルフォルニア在住</v-list-item-title>
              <v-list-item-subtitle>カリフォルニア工科大学 理論物理学者</v-list-item-subtitle>
            </v-list-item-content>
          </v-list-item>
        </v-col>
      </v-row>
    </v-img>
  </v-card>
 </v-container>
<v-container py-1 px-0>
    <v-card
    class="mx-auto"
    max-width="434"
    shaped
  >
    <v-img
      height="250px"
      src="https://amd.c.yimg.jp/amd/20191121-00011897-weather-002-1-view.jpg"
    >
      <v-row
        align="end"
        class="fill-height"
      >
        <v-col
          align-self="start"
          class="pa-0"
          cols="5"
        >
          <v-avatar
            class="profile"
            color="grey"
            size="164"
            tile
          >
            <v-img src="https://vignette.wikia.nocookie.net/the-big-bang-theory/images/6/6a/Howardwolowitz.jpg/revision/latest/top-crop/width/360/height/450?cb=20180621133808&path-prefix=ja"></v-img>
          </v-avatar>
        </v-col>
        <v-col
        align-self="start"
          class="pa-0"
          cols="7"
          justify="space-around"
          >
        <v-chip-group
          column
          active-class="primary--text"
        >
          <v-chip>宇宙飛行士</v-chip>
          <v-chip>ダンジョンズ&ドラゴンズ</v-chip>
          <v-chip>ゲームが好き</v-chip>
          <v-chip>マザコン</v-chip>
          <v-chip>ユダヤ人</v-chip>
        </v-chip-group>

    
        </v-col>
        <v-col class="py-0">
          <v-list-item
            color="rgba(0, 0, 0, .4)"
            dark
          >
            <v-list-item-content>
              <v-list-item-title class="title">26歳　カルフォルニア在住</v-list-item-title>
              <v-list-item-subtitle>応用物理学のエンジニア</v-list-item-subtitle>
            </v-list-item-content>
          </v-list-item>
        </v-col>
      </v-row>
    </v-img>
  </v-card>

  </v-container>
<v-container py-1 px-0>


    <v-card
    class="mx-auto"
    max-width="434"
    shaped
  >
    <v-img
      height="250px"
      src="https://up.gc-img.net/post_img/2017/04/LRd6QlYT42KfNBP_pPXKw_16.jpeg"
    >
      <v-row
        align="end"
        class="fill-height"
      >
        <v-col
          align-self="start"
          class="pa-0"
          cols="5"
        >
          <v-avatar
            class="profile"
            color="grey"
            size="164"
            tile
          >
            <v-img src="https://www.superdramatv.com/lineup/SN0000000042/img/cast_05.jpg"></v-img>
          </v-avatar>
        </v-col>
        <v-col
        align-self="start"
          class="pa-0"
          cols="7"
          justify="space-around"
          >
        <v-chip-group
          column
          active-class="primary--text"
        >
          <v-chip>6人兄弟</v-chip>
          <v-chip>親が医者</v-chip>
          <v-chip>企画・主催が好き</v-chip>
          <v-chip>お酒が飲めない</v-chip>
          <v-chip>インド料理は苦手</v-chip>
        </v-chip-group>

    
        </v-col>
        <v-col class="py-0">
          <v-list-item
            color="rgba(0, 0, 0, .4)"
            dark
          >
            <v-list-item-content>
              <v-list-item-title class="title">25歳　ニューデリー出身</v-list-item-title>
              <v-list-item-subtitle>宇宙物理学者</v-list-item-subtitle>
            </v-list-item-content>
          </v-list-item>
        </v-col>
      </v-row>
    </v-img>
  </v-card>

  </v-container>
<v-container py-1 px-0>

    <v-card
    class="mx-auto"
    max-width="434"
    shaped
  >
    <v-img
      height="250px"
      src="https://www.superdramatv.com/line/bigbang/episode/img/epi_photo_97.jpg"
    >
      <v-row
        align="end"
        class="fill-height"
      >
        <v-col
          align-self="start"
          class="pa-0"
          cols="5"
        >
          <v-avatar
            class="profile"
            color="grey"
            size="164"
            tile
          >
            <v-img src="https://i.pinimg.com/originals/0f/14/e4/0f14e4c9177e3c1def125814de1d8d3a.jpg"></v-img>
          </v-avatar>
        </v-col>
        <v-col
        align-self="start"
          class="pa-0"
          cols="7"
          justify="space-around"
          >
        <v-chip-group
          column
          active-class="primary--text"
        >
          <v-chip>経営者</v-chip>
          <v-chip>イラストレーター</v-chip>
          <v-chip>孤独</v-chip>
          <v-chip>生活困窮</v-chip>
          <v-chip>全焼</v-chip>
        </v-chip-group>

    
        </v-col>
        <v-col class="py-0">
          <v-list-item
            color="rgba(0, 0, 0, .4)"
            dark
          >
            <v-list-item-content>
              <v-list-item-title class="title">カルフォルニア在住</v-list-item-title>
              <v-list-item-subtitle>コミックブックストアを経営</v-list-item-subtitle>
            </v-list-item-content>
          </v-list-item>
        </v-col>
      </v-row>
    </v-img>
  </v-card>
  </v-container>
  </v-row>
</v-container>
</template>

<script>
  export default {
    data: () => ({
      swipeDirection: 'None',
      tags: [
        'アメコミ好き',
        'タバコ吸わない',
        'SF好き',
        'ルールは大事',
        'バジンガ',
      ],
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