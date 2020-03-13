<template>
<v-container>
      <v-row
    v-touch="{
      left: () => swipe('Left'),
      right: () => swipe('Right'),
      up: () => swipe('Up'),
      down: () => swipe('Down')
    }">
  <v-card
    class="mx-auto my-1"
    max-width="374"
  >


    <v-list three-line>
      <template v-for="(item, index) in items">
        <v-subheader
          v-if="item.header"
          :key="item.header"
          v-text="item.header"
        ></v-subheader>

        <v-divider
          v-else-if="item.divider"
          :key="index"
          :inset="item.inset"
        ></v-divider>

        <v-list-item
          v-else
          :key="item.id"
          @click=""
          to="/making"
        >
          <v-list-item-avatar>
            <v-img :src="item.avatar"></v-img>
          </v-list-item-avatar>

          <v-list-item-content>
           <v-list-item-title v-html="item.title"></v-list-item-title>
            <v-list-item-subtitle v-html="item.subtitle"></v-list-item-subtitle>
          </v-list-item-content>
          <v-list-item-action>
          <v-list-item-action-text v-text="item.action"></v-list-item-action-text>
          <v-list-item-action-text v-text="item.comment"></v-list-item-action-text>
          </v-list-item-action>
          
        </v-list-item>
        <v-item-group multiple>
        <v-subheader>Tags</v-subheader>
        <v-item
          v-for="n in 8"
          :key="n"
          v-slot:default="{ active, toggle }"
        >
          <v-chip
            active-class="purple--text"
            :input-value="active"
            @click="toggle"
          >
            Tag {{ n }}
          </v-chip>
        </v-item>
      </v-item-group>
      </template>
    </v-list>
  </v-card>
      </v-row>
</v-container>
</template>

<script>
  export default {
    data: () => ({
        swipeDirection: 'None',
      items: [
        { header: 'Today' },
        {
          id: '1',
          avatar: 'https://vignette.wikia.nocookie.net/the-big-bang-theory/images/6/6a/Howardwolowitz.jpg/revision/latest/top-crop/width/360/height/450?cb=20180621133808&path-prefix=ja',
          title: 'ハワード',
          subtitle: "<span class='text--primary'>ホゲホゲな質問、ホゲホゲホゲホゲ？ホゲホゲな質問、ホゲホゲホゲホゲ？</span> &mdash; <span class='text--primary'>ホゲホゲな質問、ホゲホゲホゲホゲ？ホゲホゲな質問、ホゲホゲホゲホゲ？</span>",
          action: '15 min',
          comment: '321 comment',
        },
        { divider: true, inset: true },
        {
          id: '22',
          avatar: 'https://vignette.wikia.nocookie.net/the-big-bang-theory/images/6/6a/Howardwolowitz.jpg/revision/latest/top-crop/width/360/height/450?cb=20180621133808&path-prefix=ja',
          title: 'ハワード',
          subtitle: "<span class='text--primary'>ホゲホゲな質問、ホゲホゲホゲホゲ？ホゲホゲな質問、ホゲホゲホゲホゲ？</span> &mdash; <span class='text--primary'>ホゲホゲな質問、ホゲホゲホゲホゲ？ホゲホゲな質問、ホゲホゲホゲホゲ？</span>",
          action: '15 min',
          comment: '321 comment',
          },
        { divider: true, inset: true },
        {
          id: '3',
          avatar: 'https://rr.img.naver.jp/mig?src=http%3A%2F%2Fimgcc.naver.jp%2Fkaze%2Fmission%2FUSER%2F20160626%2F12%2F1277332%2F22%2F491x405xb42267cc25f890bfebe5dbd8.jpg%2F300%2F600&twidth=300&theight=600&qlt=80&res_format=jpg&op=r',
          title: 'シェルドン',
          subtitle: "<span class='text--primary'>ホゲホゲな質問、ホゲホゲホゲホゲ？ホゲホゲな質問、ホゲホゲホゲホゲ？</span> &mdash; ホゲホゲな質問、ホゲホゲホゲホゲ？ホゲホゲな質問、ホゲホゲホゲホゲ？",
        },
        { divider: true, inset: true },
        {
          id: '44',
          avatar: 'https://nigiwasu.com/wp-content/uploads/2019/06/johnny-CBS.com_-240x300.jpg',
          title: 'レナード',
          subtitle: "<span class='text--primary'>ホゲホゲな質問、ホゲホゲホゲホゲ？ホゲホゲな質問、ホゲホゲホゲホゲ？</span> &mdash; <span class='text--primary'>ホゲホゲな質問、ホゲホゲホゲホゲ？ホゲホゲな質問、ホゲホゲホゲホゲ？</span>",
          },
        { divider: true, inset: true },
        {
          id: '5',
          avatar: 'https://vignette.wikia.nocookie.net/the-big-bang-theory/images/6/6a/Howardwolowitz.jpg/revision/latest/top-crop/width/360/height/450?cb=20180621133808&path-prefix=ja',
          title: 'ハワード',
          subtitle: "<span class='text--primary'>ホゲホゲな質問、ホゲホゲホゲホゲ？ホゲホゲな質問、ホゲホゲホゲホゲ？</span> &mdash; <span class='text--primary'>ホゲホゲな質問、ホゲホゲホゲホゲ？ホゲホゲな質問、ホゲホゲホゲホゲ？</span>",
          },
      ],
    }),
     methods: {
      swipe (direction) {
		  if (direction == 'Left') {
			//   console.log(direction)
			  this.$router.push('/users/MyProfile/MyProfile')
          }
      else if (direction == 'Right') {
			  this.$router.push('/users/list')
          }          
        this.swipeDirection = direction
      },
    },
  }
</script>