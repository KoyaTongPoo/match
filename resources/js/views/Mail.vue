<template>
  <v-container>
    <h1>制作途中</h1>
    <v-card>
    <v-list two-line>
      <v-list-item-group
        v-model="selected"
        multiple
        active-class="pink--text"
      >
        <template v-for="(item, index) in items">
          <v-list-item :key="item.title">
            <template v-slot:default="{ active, toggle }">
              <v-list-item-content>
                <v-list-item-title v-text="item.title"></v-list-item-title>
                <v-list-item-subtitle class="text--primary" v-text="item.headline"></v-list-item-subtitle>
                <v-list-item-subtitle v-text="item.subtitle"></v-list-item-subtitle>
              </v-list-item-content>

              <v-list-item-action>
                <v-list-item-action-text v-text="item.action"></v-list-item-action-text>
                <v-icon
                  v-if="!active"
                  color="grey lighten-1"
                >
                  mdi-star-outline
                </v-icon>

                <v-icon
                  v-else
                  color="yellow"
                >
                  mdi-star
                </v-icon>
              </v-list-item-action>
            </template>
          </v-list-item>

          <v-divider
            v-if="index + 1 < items.length"
            :key="index"
          ></v-divider>
        </template>
      </v-list-item-group>
    </v-list>
    </v-card>
  </v-container>
</template>

<script>
  export default {
    data: () => ({
      selected: [2],
      items: [
        {
          action: '15 min',
          headline: 'たかしさんはじめまして！',
          title: '響子',
          subtitle: "27歳の未亡人です。お互いのニーズに合致しそうだと思い、連絡してみました。自分のことを少し語ります。",
        },
        {
          action: '2 hr',
          headline: 'タッちゃんだから-----',
          title: '浅倉',
          subtitle: "南のファースト・キスなんだぞ。ありがたく思え",
        },
        {
          action: '6 hr',
          headline: 'たかしさん、はじめまして。',
          title: '綾瀬はるか',
          subtitle: '美味しいもの好きなのが一緒だと思いいいねさせて頂きました！とくにお肉が好きで、休日にはよく新しいお店を開拓しに行きます^^ 他にも旅行やカメラなど共通の趣味も多いのでぜひ話してみたいです！ よろしくお願いします。 P.S. 3枚目の猫の写真が可愛すぎます。飼ってる子ですか？',
        },
        {
          action: '12 hr',
          headline: 'もぅﾏﾁﾞ無理。彼氏が別れた。',
          title: 'むり',
          subtitle: 'どんどん分裂してぃまゎ8体になってる。ぅちに勝ち目ゎなぃんだって。完全にかこまれて る。っょぃ。勝てなぃ',
        },
        {
          action: '18hr',
          headline: '１４歳。中二。かに座のＯ型。誕生石は真珠。',
          title: '三石琴乃',
          subtitle: '性格は、人よりちょーっとおっちょこちょいで、ちょっと泣き虫、ってとこかな。あるとき、ヘンテコな黒猫ルナが現れて、セーラー服戦士にしてくれたんだけど、悪い奴らと戦えー、なんて言われちゃって、不安タラタラーって感じ。でも、ま、なーんとかなるか。あははっ',
        },
      ],
    }),
  }
</script>