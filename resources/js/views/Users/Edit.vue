<template>
  <v-container
    id="user-profile"
    fluid
    tag="section"
  >
    <v-row
    justify="center"
    v-touch="{
      left: () => swipe('Left'),
      right: () => swipe('Right'),
      up: () => swipe('Up'),
      down: () => swipe('Down')
    }">
      <v-col
        cols="12"
        md="8"
      >
        <v-card>
          <v-card-title>
                  記入必須のプロフィール
                </v-card-title>
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
                    label="メールアドレス(メアドは非公開)"
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
        md="8"
      >
        <v-card>
          <v-form>
            <v-container class="py-0">
              <v-row>
                <v-col
                  cols="12"
                  md="4"
                >
                <v-card-title>
                  異性には非公開のプロフィール
                </v-card-title>
                  <v-text-field
                    v-model="profile_same_gender.star_like"
                    label="好みの芸能人"
                  
                    
                ></v-text-field>
                </v-col>

                <v-col
                  cols="12"
                  md="4"
                >
                  <v-text-field
                    v-model="profile_same_gender.star_love"
                    class="purple-input"
                    label="結婚したいと思う芸能人"
                  
                  />
                </v-col>

                <v-col
                  cols="12"
                  md="4"
                >
                  <v-text-field
                    v-model="profile_same_gender.star_dislike"
                    label="嫌いな芸能人"
                    class="purple-input"
                  
                  />
                </v-col>

                <!-- <v-col
                  cols="12"
                  md="6"
                >
                  <v-text-field
                    v-model="profile_same_gender.star_dislike"
                    label="苦手や弱点１"
                    class="purple-input"
                  />
                </v-col> -->

                <v-col
                  cols="12"
                  md="6"
                >
                  <v-text-field
                  v-model="profile_same_gender.dislike_2"
                    label="苦手や弱点２"
                    class="purple-input"
                  />
                </v-col>

                <v-col cols="12">
                  <v-text-field
                    v-model="profile_same_gender.dislike_3"
                    label="苦手や弱点３"
                    class="purple-input"
                  />
                </v-col>

                <v-col
                  cols="12"
                  md="4"
                >
                  <v-text-field
                    v-model="profile_same_gender.dislike_4"
                    label="苦手や弱点４"
                    class="purple-input"
                    value=""
                  />
                </v-col>

                <v-col
                  cols="12"
                  md="4"
                >
                  <v-text-field
                    v-model="profile_same_gender.dislike_5"
                    label="苦手や弱点５"
                    class="purple-input"
                    value=""
                  />
                </v-col>

                <!-- <v-col cols="12" sm="6">
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
                </v-col> -->

                <v-col
                  cols="12"
                  md="4"
                >
                  <v-text-field
                    v-model="profile_same_gender.dream_3y"
                    label="３年後の夢・目標"
                    class="purple-input"
                    value=""
                  />
                </v-col>

                <v-col
                  cols="12"
                  md="4"
                >
                  <v-text-field
                    v-model="profile_same_gender.dream_10y"
                    label="１０年後の夢・目標"
                    class="purple-input"
                    value=""
                  />
                </v-col>

                <v-col
                  cols="12"
                  md="4"
                >
                  <v-text-field
                    v-model="profile_same_gender.dream_20y"
                    label="２０年後の夢・目標"
                    class="purple-input"
                    value=""
                  />
                </v-col>

                <v-col
                  cols="12"
                  md="4"
                >
                  <v-text-field
                    v-model="profile_same_gender.dream"
                    label="人生の目標"
                    class="purple-input"
                  />
                </v-col>

                <v-col class="d-flex" cols="12" sm="6">
                  <v-select
                    v-model="profile_same_gender.status"
                    :items="items"
                    label="結婚に対する意思"
                    item-text="categoryName"
                    item-value="id"
                    
                 
                  ></v-select>
                </v-col>

                <v-col class="d-flex" cols="12" sm="6">
                  <v-select
                    v-model="profile_same_gender.tobacco"
                    :items="tabacos"
                    label="タバコ"
                    item-text="categoryName"
                    item-value="id"
                    
                  ></v-select>
                </v-col>
                
                <v-col
                  cols="12"
                  md="4"
                >
                  <v-text-field
                    v-model="profile_same_gender.salary"
                    label="年収(万円)"
                    class="purple-input"
               
                  />
                </v-col>

                <v-col class="d-flex" cols="12" sm="6">
                  <v-select
                    v-model="profile_same_gender.liquor"
                    :items="liquors"
                    item-text="state"
                    item-value="id"
                    label="お酒"
                    return-object
                  ></v-select>
                </v-col>


                <v-col class="d-flex" cols="12" sm="6">
                  <v-select
                    v-model="profile_same_gender.blood"
                    :items="hoges"
                    label="血液型"
                  ></v-select>
                </v-col>

                <v-col class="d-flex" cols="12" sm="6">
                  <v-select
                    :items="hoges"
                    label="結婚歴"
                  ></v-select>
                </v-col>

                <v-col class="d-flex" cols="12" sm="6">
                  <v-select
                    v-model="profile_same_gender.children"
                    :items="hoges"
                    label="子供の有無"
                  ></v-select>
                </v-col>

                <v-col class="d-flex" cols="12" sm="6">
                  <v-select
                    v-model="profile_same_gender.body"
                    :items="hoges"
                    label="体型"
                  ></v-select>
                </v-col>

                <v-col class="d-flex" cols="12" sm="6">
                  <v-select
                    v-model="profile_same_gender.height"
                    :items="hoges"
                    label="身長"
                  ></v-select>
                </v-col>

                <v-col class="d-flex" cols="12" sm="6">
                  <v-select
                    v-model="profile_same_gender.Living_together"
                    :items="hoges"
                    label="同居人"
                  ></v-select>
                </v-col>

                <v-col
                  cols="12"
                  md="4"
                >
                  <v-text-field
                    v-model="profile_same_gender.value"
                    label="大切にしていること、考え"
                    class="purple-input"
                    value=""
                  />
                </v-col>

                <v-col class="d-flex" cols="12" sm="6">
                  <v-select
                    v-model="profile_same_gender.recommend_flg"
                    :items="hoges"
                    label="異性の紹介を希望しているか"
                  ></v-select>
                </v-col>




                <v-col cols="12">
                  <v-textarea
                    v-model="profile_same_gender.profile"
                    class="purple-input"
                    label="自由記述欄"
                    rows="7"
                    row-height="25"
                    counter="150"
                    value=""
                  />
                </v-col>

                <v-col
                  cols="12"
                  class="text-right"
                >
                  <v-btn
                    color="success"
                    class="mr-0"
                    @click="updateUser"
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
        items: [{ categoryName: 'すぐにでも', id: 1 },{ categoryName: '２〜３年のうちに', id: 2 }, { categoryName: '良い人がいれば', id: 3 },{ categoryName: '今のところ結婚は考えていない', id: 4 }, { categoryName: '良い人がいれば', id: 5 }],
        tabacos: [{ categoryName: '吸わない', id: 1 },{ categoryName: '吸う', id: 2 }, { categoryName: '吸う(電子タバコのみ)', id: 3 },{ categoryName: '時々吸う', id: 4 }, { categoryName: '人前では吸わない', id: 5 }, { categoryName: 'やめる予定', id: 5 }],
        liquors: [{ state: '飲む', id: '1' },{ state: '飲まない', id: '2' }, { state: '時々飲む', id: '3' }],
        hoges: ['Foo', 'Bar', 'Fizz', 'Buzz'],

        id: this.$route.params.id,
        profile_same_gender:{

				}
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
      updateUser(){
				axios.patch('/api/profile_same_gender/' + this.id,{
					profile_same_gender: this.profile_same_gender
				})
				.then(response => {
					this.profile_same_gender = response.data.profile_same_gender;
					this.$router.push({ name: 'BBS'})
				})
				.catch(error => console.log(error));
      },
    },
		created(){
      axios.get('/api/profile_same_gender/' + this.id)
			.then(
        response => {this.profile_same_gender = response.data.profile_same_gender;
        console.log("axios");
        }
        )
      .catch(erorr => {console.log(error)});
		}
  
    
  
  }

</script>
