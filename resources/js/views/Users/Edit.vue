<template>
  <v-container
    id="user-profile"
    fluid
    tag="section"
  >
    <v-row justify="center">
      <v-col
        cols="12"
        md="8"
      >
        <v-card>
          <template v-slot:heading>
            <div class="display-2 font-weight-light">
              Edit Profile
            </div>

            <div class="subtitle-1 font-weight-light">
              Complete your profile
            </div>
          </template>

          <v-form>
            <v-container class="py-0">
              <v-row>
                <v-col
                  cols="12"
                  md="4"
                >
                  <v-text-field
                    label="職業"
                    value="実験物理学者"
                  />
                </v-col>

                <v-col
                  cols="12"
                  md="4"
                >
                  <v-text-field
                    class="purple-input"
                    label="User Name"
                    value="レナード"
                  />
                </v-col>

                <v-col
                  cols="12"
                  md="4"
                >
                  <v-text-field
                    label="メールアドレス"
                    class="purple-input"
                    value="example@example.com"
                  />
                </v-col>

                <!-- <v-col
                  cols="12"
                  md="6"
                >
                  <v-text-field
                    label="First Name"
                    class="purple-input"
                  />
                </v-col>

                <v-col
                  cols="12"
                  md="6"
                >
                  <v-text-field
                    label="Last Name"
                    class="purple-input"
                  />
                </v-col> -->

                <!-- <v-col cols="12">
                  <v-text-field
                    label="Adress"
                    class="purple-input"
                  />
                </v-col> -->

                

                <v-col cols="12" sm="6">
                    <v-select
                    v-model="e7"
                    :items="states"
                    label="趣味"
                    multiple
                    chips
                    counter="5"
                    hint="最低でも３つは選びましょう"
                    persistent-hint
                    ></v-select>
                </v-col>

                <v-col
                  cols="12"
                  md="4"
                >
                  <v-text-field
                    label="勤め先"
                    class="purple-input"
                    value="カルフォルニア工科大"
                  />
                </v-col>

                <v-col
                  cols="12"
                  md="4"
                >
                  <v-text-field
                    label="学歴"
                    class="purple-input"
                    value="大学院卒業"
                  />
                </v-col>

                <v-col
                  cols="12"
                  md="4"
                >
                  <v-text-field
                    label="在住"
                    class="purple-input"
                    value="カルフォルニア"
                  />
                </v-col>
<!-- 
                <v-col
                  cols="12"
                  md="4"
                >
                  <v-text-field
                    label="Country"
                    class="purple-input"
                  />
                </v-col> -->



                <v-col cols="12">
                  <v-textarea
                    class="purple-input"
                    label="About Me"
                    rows="7"
                    row-height="25"
                    counter="150"
                    value="物理学の研究者で、カリフォルニア工科大学において実験物理学者としてレーザー技術などを研究。24歳でプリンストン大学から博士号を取得。IQは173、他の科学や文学・歴史にも強い。 シェルドンとルームシェアをしているが、わがままな彼に日々手を焼かされている。"
                  />
                </v-col>

                <v-col
                  cols="12"
                  class="text-right"
                >
                  <v-btn
                    color="success"
                    class="mr-0"
                  >
                    Update Profile
                  </v-btn>
                </v-col>
              </v-row>
            </v-container>
          </v-form>
        </v-card>
      </v-col>

      <v-col
        cols="12"
        md="4"
      >
        <v-card
          class="v-card-profile"
          avatar=""
        >
          <v-card-text class="text-center">
            <v-avatar size="200">
                <v-img
                src="https://nigiwasu.com/wp-content/uploads/2019/06/johnny-CBS.com_-240x300.jpg"></v-img>
            </v-avatar>
            <h6 class="subtitle-1 mb-1 grey--text">
              27歳　カルフォルニア在住
            </h6>

            <h4 class="title font-weight-light mb-3 black--text">
              レナード
            </h4>

            <p class="font-weight-light grey--text">
              物理学の研究者で、カリフォルニア工科大学において実験物理学者としてレーザー技術などを研究。24歳でプリンストン大学から博士号を取得。IQは173、他の科学や文学・歴史にも強い。 シェルドンとルームシェアをしているが、わがままな彼に日々手を焼かされている。
            </p>

            <v-btn
              color="success"
              rounded
              class="mr-0"
            >
              Follow
            </v-btn>
          </v-card-text>
        </v-card>
      </v-col>
    </v-row>
  </v-container>
</template>

<script>
 export default {
    data () {
      return {
        e7: ['ゲーム','漫画好き','インドア派'],
        states: [
          'カメラ', 'ランニング', 'ゲーム', 'ねこ好き',
          'ドラマ観賞', '水泳', 'ファッション好き', 'アニメ',
          'カフェ巡り', 'カラオケ', 'アーリーアダプター',
          '旅行', '映画', 'POP Music', 'お笑い',
          '食べ歩き', '居酒屋巡り', 'DIY', 'ピクニック',
          '自転車', 'ディズニー', 'Instagram',
          '散歩', 'インドア派', '筋トレ', 'スポーツ観戦',
          '語学', '昼寝', 'ヨガ', 'アウトドア派',
          'クラシック音楽', '漫画好き', 'ジャニーズ',
          '読書', '水族館', '美術館','自作PC',

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
