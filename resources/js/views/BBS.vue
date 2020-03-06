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
          :key="item.title"
          @click=""
          to="/making"
        >
          <v-list-item-avatar
          tile>
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
          avatar: 'https://lh3.googleusercontent.com/proxy/y2RrY0UsQVqifeN8ZCZ3FzLp5xUKhktHFBdnz2ep67-6V0mgkgHIlfmJn_gIIFnX-XSR9rr-Vi2dq4zvLX-jgKDcRyCAWl0l5m9rMqpjoL4qZMEz6yXI3Q',
          title: '東京五輪「年内延期」の可能性も　新型ウイルス流行で橋本五輪相',
          subtitle: "<span class='text--primary'>Ali Connors</span> &mdash; I'll be in your neighborhood doing errands this weekend. Do you want to hang out?",
          action: '15 min',
          comment: '321 comment',
        },
        { divider: true, inset: true },
        {
          avatar: 'https://lh3.googleusercontent.com/proxy/y2RrY0UsQVqifeN8ZCZ3FzLp5xUKhktHFBdnz2ep67-6V0mgkgHIlfmJn_gIIFnX-XSR9rr-Vi2dq4zvLX-jgKDcRyCAWl0l5m9rMqpjoL4qZMEz6yXI3Q',
          title: 'Summer BBQ <span class="end grey--text text--lighten-1">15 min</span>',
          subtitle: "<span class='text--primary'>to Alex, Scott, Jennifer</span> &mdash; Wish I could come, but I'm out of town this weekend.",
        },
        { divider: true, inset: true },
        {
          avatar: 'https://lh3.googleusercontent.com/proxy/y2RrY0UsQVqifeN8ZCZ3FzLp5xUKhktHFBdnz2ep67-6V0mgkgHIlfmJn_gIIFnX-XSR9rr-Vi2dq4zvLX-jgKDcRyCAWl0l5m9rMqpjoL4qZMEz6yXI3Q',
          title: 'Oui oui',
          subtitle: "<span class='text--primary'>Sandra Adams</span> &mdash; Do you have Paris recommendations? Have you ever been?",
        },
        { divider: true, inset: true },
        {
          avatar: 'https://lh3.googleusercontent.com/proxy/y2RrY0UsQVqifeN8ZCZ3FzLp5xUKhktHFBdnz2ep67-6V0mgkgHIlfmJn_gIIFnX-XSR9rr-Vi2dq4zvLX-jgKDcRyCAWl0l5m9rMqpjoL4qZMEz6yXI3Q',
          title: 'Birthday gift',
          subtitle: "<span class='text--primary'>Trevor Hansen</span> &mdash; Have any ideas about what we should get Heidi for her birthday?",
        },
        { divider: true, inset: true },
        {
          avatar: 'https://lh3.googleusercontent.com/proxy/y2RrY0UsQVqifeN8ZCZ3FzLp5xUKhktHFBdnz2ep67-6V0mgkgHIlfmJn_gIIFnX-XSR9rr-Vi2dq4zvLX-jgKDcRyCAWl0l5m9rMqpjoL4qZMEz6yXI3Q',
          title: 'Recipe to try',
          subtitle: "<span class='text--primary'>Britta Holt</span> &mdash; We should eat this: Grate, Squash, Corn, and tomatillo Tacos.",
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