<template>
  <v-card
    max-width="500"
    class="mx-auto"
  >

    <v-list two-line>
      <v-list-item-group
        v-model="selected"
        multiple
        active-class="pink--text"
      >
        <template v-for="(item, index) in items">
          <v-list-item :key="item.title"
          :to="item.to">
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
                  mdi-bell-outline
                </v-icon>

                <v-icon
                  v-else
                  color="orange"
                >
                  mdi-bell-ring
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
</template>

<script>
  export default {
    data: () => ({
      selected: [0,1],
      items: [
        {
          action: '15 min',
          headline: '５件',
          title: 'メッセージ',
          to: '/mail/新着メッセージ',
        //   subtitle: "I'll be in your neighborhood doing errands this weekend. Do you want to hang out?",
        },
        {
          action: '2 hr',
          headline: '２件',
          title: '紹介の依頼',
          to: '/making',
        //   subtitle: "Wish I could come, but I'm out of town this weekend.",
        },
        {
          action: '6 hr',
          headline: '０件',
          title: '運営からのお知らせ',
          to: '/making',
        //   subtitle: 'Do you have Paris recommendations? Have you ever been?',
        },
       
      ],
    }),
  }
</script>