<template>

    <v-container>
    <v-row
    v-touch="{
      left: () => swipe('Left'),
      right: () => swipe('Right'),
      up: () => swipe('Up'),
      down: () => swipe('Down')
    }">

<v-col cols="12">
    <v-card>
  <v-stepper v-model="e1">

    <v-stepper-header>
      <v-stepper-step :complete="e1 > 1" step="1">Name of step 1</v-stepper-step>

      <v-divider></v-divider>

      <v-stepper-step :complete="e1 > 2" step="2">Name of step 2</v-stepper-step>

      <v-divider></v-divider>

      <v-stepper-step :complete="e1 > 3" step="3">Name of step 3</v-stepper-step>

      <v-divider></v-divider>

      <v-stepper-step :complete="e1 > 4" step="4">Name of step 4</v-stepper-step>

      <v-divider></v-divider>

      <v-stepper-step step="4">Name of step 5</v-stepper-step>
    </v-stepper-header>

    <v-stepper-items>
      <v-stepper-content step="1">
          <v-card-title class="pa-0">
            プロフィール作成
          </v-card-title>
        <v-card
          color="grey lighten-1"
          height="200px"
        >
        画像をいれる
        </v-card>
        <v-card-text>
            左上のメニューボタンからプロフィール編集を行いましょう。
        </v-card-text>

        <v-btn
          color="primary"
          @click="e1 = 2"
        >
          次へ
        </v-btn>

        <!-- <v-btn text>Cancel</v-btn> -->
      </v-stepper-content>

      <v-stepper-content step="2">
        <v-card-title class="pa-0">
            あなたのキューピットを探そう
          </v-card-title>
        <v-card
          color="grey lighten-1"
          height="200px"
        >
        画像をいれる
        </v-card>
        <v-card-text>
            <p>左上のメニューボタンからキューピットを探すを行いましょう。</p>
            <p>気に入った方の依頼ボタンを押し、自己アピール文を送ります。</p>
            <p>（毎日付与される○○ポイントからポイントを消費して送信します。キューピットが依頼を受けてくれなくてもポイントは消費されてしまうので、キューピットの心を動かすメッセージを送りましょう）</p>

        </v-card-text>

        <v-btn
          color="primary"
          @click="e1 = 3"
        >
          次へ
        </v-btn>

        <!-- <v-btn text>Cancel</v-btn> -->
      </v-stepper-content>

      <v-stepper-content step="3">
        <v-card-title class="pa-0">
            あなたへ紹介が届いたらすぐにマッチを！
          </v-card-title>
        <v-card
          color="grey lighten-1"
          height="200px"
        >
        画像をいれる
        </v-card>
        <v-card-text>
            <p>紹介が届くと右上に通知が届きます。</p>
            <p>相手とあなたの両方がマッチを希望すればメッセージが送信できるようになります。</p>
            <p>もしお話をしてみて合わなければ、どういったところが合わなかったのかをキューピットの方やつぶやきページで相談してみましょう。アドバイスをくれるかもしれません。</p>
            <p>再度同じキューピットの方に依頼をしてもいいですし、別のキューピットを探すのも良いでしょう。</p>

        </v-card-text>

        <v-btn
          color="primary"
          @click="e1 = 4"
        >
          次へ
        </v-btn>

        <!-- <v-btn text>Cancel</v-btn> -->
      </v-stepper-content>

            <v-stepper-content step="4">
        <v-card-title class="pa-0">
            もしも合わなくても
          </v-card-title>
        <v-card
          color="grey lighten-1"
          height="200px"
        >
        画像をいれる
        </v-card>
        <v-card-text>
            <p>もしもマッチした方と合わなくても無下にしてはいけません。</p>
            <p>たくさんお話をすれば、例えマッチした方と恋人には慣れなくても、お互いのことを知り助け合える同志にはなれます。</p>
           
        </v-card-text>

        <v-btn
          color="primary"
          @click="e1 = 5"
        >
          次へ
        </v-btn>

        <!-- <v-btn text>Cancel</v-btn> -->
      </v-stepper-content>

            <v-stepper-content step="5">
        <v-card-title class="pa-0">
            あなたも誰かの為に
          </v-card-title>
        <v-card
          color="grey lighten-1"
          height="200px"
        >
        画像をいれる
        </v-card>
        <v-card-text>
            <p>あなたはお話した相手の為に同性を紹介することができます。</p>
            <p>また、誰かがつぶやいた質問に答えてあげるのもいいでしょう。誰かに協力すればそれがあなたのプロフィールにも記載されます。</p>
            <p>きっとあなたの運命の相手は、あなたの話し方や考え方も気になっているはずです。</p>

        </v-card-text>

        <v-btn
          color="primary"
          @click="e1 = 1"
        >
          次へ
        </v-btn>

        <!-- <v-btn text>Cancel</v-btn> -->
      </v-stepper-content>
    </v-stepper-items>
  </v-stepper>
  </v-card>
</v-col>
    </v-row>
  </v-container>
</template>

<script>
export default {
    data () {
      return {
          e1: 1,
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