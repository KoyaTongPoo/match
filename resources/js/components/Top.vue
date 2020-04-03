<template>
<v-app>
    <v-app-bar
      app
      color="white"
      height="100"
    >
      <v-avatar
        class="mr-3"
        color="grey lighten-5"
        size="70"
      >
      <span class="pink--text display-2 font-weight-bold">C</span>
        <!-- <v-img
          contain
          max-height="70%"
          src="img/character_cupid.png"
        ></v-img> -->
      </v-avatar>

      <v-toolbar-title class="font-weight-black headline">
        Cupitter
      </v-toolbar-title>
      
      <v-spacer></v-spacer>
      <v-btn text
      color="primary"
      
      @click="overlay = !overlay"
      >LOGIN</v-btn>
 <!-- href="/login" -->
    </v-app-bar>
 
 

    <v-content>
      <section id="hero">
        <v-row no-gutters>
          <v-img
            :min-height="'calc(100vh - ' + $vuetify.application.top + 'px)'"
            src="img/Cupidon.jpg"
            position="top"
            max-height="500px"
          >
            <v-theme-provider dark>
              <v-container fill-height>
                <v-row
                  align="center"
                  class="white--text mx-auto"
                  justify="center"
                >
                  <v-col
                    class="white--text text-center"
                    cols="12"
                    tag="h1"
                  >
                    <span
                      class="font-weight-light"
                      :class="[$vuetify.breakpoint.smAndDown ? 'display-1' : 'display-2']"
                    >
                      キューピットを探す？
                    </span>
                    <br>
                    <span
                      class="font-weight-light"
                      :class="[$vuetify.breakpoint.smAndDown ? 'display-1' : 'display-2']"
                    >
                      キューピットになる？
                    </span>

                    <br>

                    <span
                      :class="[$vuetify.breakpoint.smAndDown ? 'display-3': 'display-4']"
                      class="font-weight-black"
                    >
                      Cupitter
                    </span>

                  </v-col>

                  <v-btn
                    class="align-self-end"
                    fab
                    outlined
                    @click="$vuetify.goTo('#about-me')"
                  >
                    <v-icon>mdi-chevron-double-down</v-icon>
                  </v-btn>
                </v-row>
              </v-container>
            </v-theme-provider>
          </v-img>
        </v-row>
      </section>

      <section id="about-me">
        <div class="py-12"></div>

        <v-container class="text-center">
          <h2 class="display-2 font-weight-bold mb-3">ABOUT Cupitter</h2>

          <v-responsive
            class="mx-auto mb-8"
            width="56"
          >
            <v-divider class="mb-1"></v-divider>

            <v-divider></v-divider>
          </v-responsive>

          <v-responsive
            class="mx-auto title font-weight-light mb-8"
            max-width="720"
          >
            Cupitterは運命の相手を探してくれるサービスです。あなたがまだ気づいていない素敵な異性をキューピット達が提案してくれます。もし、あなたが誰かの恋愛相談に乗りたいのであれば、あなたがキューピットになることもできます。Cupitterは幸せを応援するサービスを目指しています。
          </v-responsive>

          <!-- <v-avatar
            class="elevation-12 mb-12"
            size="128"
          >
            <span class="pink--text display-2 font-weight-bold">C</span>
          </v-avatar> -->

          <!-- <div></div>

          <v-btn
            color="grey"
            href="https://vuetifyjs.com"
            outlined
            large
          >
            <span class="grey--text text--darken-1 font-weight-bold">
              Vuetify Documentation
            </span>
          </v-btn> -->
        </v-container>

        <div class="py-12"></div>
      </section>

      <section
        id="features"
        class="grey lighten-3"
      >
        <div class="py-12"></div>

        <v-container class="text-center">
          <h2 class="display-2 font-weight-bold mb-3">Cupitter FEATURES</h2>

          <v-responsive
            class="mx-auto mb-12"
            width="56"
          >
            <v-divider class="mb-1"></v-divider>

            <v-divider></v-divider>
          </v-responsive>

          <v-row>
            <v-col
              v-for="({ icon, title, text }, i) in features"
              :key="i"
              cols="12"
              md="4"
            >
              <v-card
                class="py-12 px-4"
                color="grey lighten-5"
                flat
              >
                <v-theme-provider dark>
                  <div>
                    <v-avatar
                      color="primary"
                      size="88"
                    >
                      <v-icon
                        large
                        v-text="icon"
                      ></v-icon>
                    </v-avatar>
                  </div>
                </v-theme-provider>

                <v-card-title
                  class="justify-center font-weight-black text-uppercase"
                  v-text="title"
                ></v-card-title>

                <v-card-text
                  class="subtitle-1"
                  v-text="text"
                >
                </v-card-text>
              </v-card>
            </v-col>
          </v-row>
        </v-container>

        <div class="py-12"></div>
      </section>

      <!-- <section id="stats">
        <v-parallax
          :height="$vuetify.breakpoint.smAndDown ? 700 : 500"
          src="https://images.unsplash.com/photo-1510915228340-29c85a43dcfe?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80"
        >
          <v-container fill-height>
            <v-row class="mx-auto">
              <v-col
                v-for="[value, title] of stats"
                :key="title"
                cols="12"
                md="3"
              >
                <div class="text-center">
                  <div
                    class="display-3 font-weight-black mb-4"
                    v-text="value"
                  ></div>

                  <div
                    class="title font-weight-regular text-uppercase"
                    v-text="title"
                  ></div>
                </div>
              </v-col>
            </v-row>
          </v-container>
        </v-parallax>
      </section> -->

      <!-- <section id="blog">
        <div class="py-12"></div>

        <v-container>
          <h2 class="display-2 font-weight-bold mb-3 text-uppercase text-center">Blog</h2>

          <v-responsive
            class="mx-auto mb-12"
            width="56"
          >
            <v-divider class="mb-1"></v-divider>

            <v-divider></v-divider>
          </v-responsive>

          <v-row>
            <v-col
              v-for="({ src, text, title }, i) in articles"
              :key="i"
              cols="12"
              md="4"
            >
              <v-img
                :src="src"
                class="mb-4"
                height="275"
                max-width="100%"
              ></v-img>

              <h3
                class="font-weight-black mb-4 text-uppercase"
                v-text="title"
              ></h3>

              <div
                class="title font-weight-light mb-5"
                v-text="text"
              ></div>

              <v-btn
                class="ml-n4 font-weight-black"
                text
              >
                Continue Reading
              </v-btn>
            </v-col>
          </v-row>
        </v-container>

        <div class="py-12"></div>
      </section> -->

      <v-sheet
        id="contact"
        color="#333333"
        dark
        tag="section"
        tile
      >
        <div class="py-12"></div>

        <v-container>
          <h2 class="display-2 font-weight-bold mb-3 text-uppercase text-center">新規会員登録</h2>

          <v-responsive
            class="mx-auto mb-12"
            width="56"
          >
            <v-divider class="mb-1"></v-divider>

            <v-divider></v-divider>
          </v-responsive>

          <v-theme-provider light>
            <v-form
          ref="form"
          v-model="valid"
          lazy-validation>
              <v-col cols="12">
                <v-text-field
                v-model="email"
                  flat
                  label="Email*"
                  solo
                ></v-text-field>
              </v-col>

              <v-col cols="12">
                <v-text-field
                v-model="password"
                  flat
                  label="パスワード*"
                  solo
                ></v-text-field>
              </v-col>

              <!-- <v-col cols="12">
                <v-card color="white">
                <v-radio-group v-model="radioGroup">
                  <v-radio
                    key="0"
                    label="男性"
                  ></v-radio>
                  <v-radio
                    key="1"
                    label="女性"
                  ></v-radio>
                </v-radio-group>
                </v-card>
              </v-col> -->

              <!-- <v-col cols="12">
                <v-card>
                <v-menu
    ref="menu"
    v-model="menu"
    :close-on-content-click="false"
    transition="scale-transition"
    offset-y
    min-width="290px"
  >
    <template v-slot:activator="{ on }">
      <v-text-field
        v-model="date"
        label="生年月日"
        prepend-icon="mdi-calendar"
        readonly
        v-on="on"
      ></v-text-field>
    </template>
    <v-date-picker
      ref="picker"
      v-model="date"
      locale="ja"
      :max="new Date().toISOString().substr(0, 10)"
      min="1950-01-01"
      @change="save"
    ></v-date-picker>
  </v-menu>
  </v-card>
              </v-col> -->

              <v-col
                class="mx-auto"
                cols="auto"
              >
                <v-btn
                  color="accent"
                  x-large
                  @click="register"
                >
                  登録                  
                </v-btn>
              </v-col>
            </v-form>
          </v-theme-provider>
        </v-container>

        <div class="py-12"></div>
      </v-sheet>

      <!-- <div>
        <label for='email'>email</label>
        <input
        id="email"
        type="email"
        v-model="name">
        <label for='password'>password</label>
        <input
        id="password"
        type="password"
        v-model="password">
<button @click="register">登録</button>
      </div> -->

      <!-- オーバーレイ -->
    <v-overlay :value="overlay">
            <v-card class="mx-auto elevation-12"
            width="100%" 
            min-width="350px"
            >
              <v-toolbar
                color="primary"
                dark
                flat
              >
                <v-toolbar-title>Login form</v-toolbar-title>
                <v-spacer></v-spacer>
                     <v-btn
                        icon
                        @click="overlay = false"
                      >
                        <v-icon>mdi-close</v-icon>
                      </v-btn>

              </v-toolbar>
              <v-card-text>
                <v-form>
                  <v-text-field
                  v-model="email"
                    label="Email"
                    prepend-icon="mdi-account"
                    type="text"
       
                  />

                  <v-text-field
                  v-model="password"
                    id="password"
                    label="Password"
                    prepend-icon="mdi-lock"
                    type="password"
    
                  />
                </v-form>
              </v-card-text>
              <v-card-actions>
 
                <v-spacer />
                <v-btn color="primary"
                @click="login">Login</v-btn>
              </v-card-actions>
            </v-card>

    </v-overlay>

    <!--  -->
    </v-content>

    <v-footer
      class="justify-center"
      color="#292929"
      height="100"
    >
      <div class="title font-weight-light grey--text text--lighten-1 text-center">
        &copy; {{ (new Date()).getFullYear() }} — Cupitter — Made with by T.Higashino
      </div>
    </v-footer>
  </v-app>
</template>

<script>
 import axios from '../axios-auth';
  export default {
    data () {
      return {
        overlay: false,
        articles: [
          {
            src: 'https://images.unsplash.com/photo-1423784346385-c1d4dac9893a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80',
            title: 'Mobile first & Responsive',
            text: 'Phasellus lorem enim, luctus ut velit eget, convallis egestas eros. Sed ornare ligula eget tortor tempor, quis porta tellus dictum.',
          },
          {
            src: 'https://images.unsplash.com/photo-1475938476802-32a7e851dad1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80',
            title: 'Think outside the box',
            text: 'Nam ut leo ipsum. Maecenas pretium aliquam feugiat. Aenean vel tempor est, vitae tincidunt risus. Sed sodales vestibulum nibh.',
          },
          {
            src: 'https://images.unsplash.com/photo-1416339442236-8ceb164046f8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1892&q=80',
            title: 'Small changes, big difference',
            text: 'Vestibulum in dictum velit, in rhoncus nibh. Maecenas neque libero, interdum a dignissim in, aliquet vitae lectus. Phasellus lorem enim, luctus ut velit eget.',
          },
        ],
        features: [
          {
            icon: 'mdi-account-group-outline',
            title: 'Cupitterへのつぶやき',
            text: 'Cupitterではあなたの疑問を「同性。異性で相手のいる方」など、選択してつぶやく事ができます。たくさんのつぶやきと回答はあなたの助けになることでしょう。また、あなたが質問に答えることもできます。質問への回答はあなたのプロフィールの一つです。不真面目な回答はあなたの誠実さまで疑われてしまうので注意しましょう。その他、素敵な回答をしている方にキューピットの依頼をお願いするのも良いでしょう。',
          },
          {
            icon: 'mdi-update',
            title: 'Cupitterの匿名性',
            text: 'Cupitterであなたのプロフィールはキューピットを通して異性に紹介されます。また、プロフィール情報はシンプルで顔写真も必須ではありません。多くのマッチングサービスのようにプライベートな情報まで不特定多数の人に見てもらう必要は無いでしょう。ただしキューピットに向けたプロフィールは充実させる事をオススメします。「あなたの異性の好み」、「将来の夢」などはオススメの人を紹介する上で大事な要素です。',
          },
          {
            icon: 'mdi-shield-outline',
            title: '占いとAI',
            text: 'Cupitterでは相性占いによる紹介機能を搭載しています。また、手相占いやAIによる分析により好相性の異性を紹介する機能を実装予定です。CupitterでのやりとりがAI作成には必要不可欠ですので、ご協力いただけると幸いです。',
          },
          {
            icon: 'mdi-account-group-outline',
            title: 'Cupitterは基本無料',
            text: 'Cupitterは毎日無料で付与されるポイントを消費してキューピットに異性の紹介を依頼できる仕様になっています。また、あなたがキューピットになったり、違反者報告、つぶやきへの回答などでランクが上がれば、付与されるポイントも増えていきます。みんなでCupitterを良くしていければ幸いです。また、もし良ければ開発者のモチベーション向上の為にに寄付をくださると大変嬉しいです。',
          },
        ],
        // stats: [
        //   ['24k', 'Github Stars'],
        //   ['330+', 'Releases'],
        //   ['1m', 'Downloads/mo'],
        //   ['5m', 'Total Downloads'],
        // ],
        radioGroup: 0,
         date: null,
      menu: false,

      valid: true,
      email:'',
      password:'',
      }
    },
    watch: {
      menu (val) {
        val && setTimeout(() => (this.$refs.picker.activePicker = 'YEAR'))
      },
    },

    props: {
      source: String,
    },
   methods: {
     login(){
       axios.post('/accounts:signInWithPassword?key=AIzaSyCte0O6BS5sVHQ-n24sDxD1RATTYIInO1I',
       {
         email: this.email,
         password: this.password,
         returnSecureToken: true,
       }).then(response => {
         console.log(response);
         window.location.href = 'main';
       }).catch(error => console.log(error));
     },
     register(){
       axios.post('/accounts:signUp?key=AIzaSyCte0O6BS5sVHQ-n24sDxD1RATTYIInO1I',
       {
         email: this.email,
         password: this.password,
         returnSecureToken: true,
       }).then(response => {
         console.log(response);
       })
     },
     save (date) {
        this.$refs.menu.save(date)
      },
        logout: function() {
        axios
            .post("logout")
            .then(res => {
            location.href = "/";
            })
            .catch(err => console.log(err.response.data));
        },
        // push: function() {
        //   axios
        //     .get("api/user/header/push", {})
        //     .then(res => {
        //       // console.log(res.data.notice);
        //       this.count = res.data.notice;
        //       if (res.data.notice == 0) {
        //         this.isPushed = false;
        //       } else {
        //         this.isPushed = true;
        //       }
        //     })
        //     .catch(err => console.log(err));
        // },
        // repush: function() {
        //   setInterval(() => {
        //     axios
        //       .get("api/user/header/push/interval")
        //       .then(res => {
        //         this.count = res.data.notice;
        //         if (res.data.notice == 0) {
        //           this.isPushed = false;
        //         } else {
        //           this.isPushed = true;
        //         }
        //       })
        //       .catch(error => console.log(error));
        //   }, 60000);
        // }
    }
  }
</script>