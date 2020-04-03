<template>

<v-container>
  <v-row
    v-touch="{
      left: () => swipe('Left'),
      right: () => swipe('Right'),
      up: () => swipe('Up'),
      down: () => swipe('Down')
    }"
    align="center"
    justify="center">

    <v-card max-width="374px">
        <h2>異性を紹介してくれるキューピットの人気ランキングを表示予定</h2>
    <v-img src="/img/kouji_rammer.png"
    max-width="374px"
    ></v-img>
    
    </v-card>
  </v-row>
</v-container>
</template>

<script>
  export default {
    data: () => ({
      items: [
        { header: '紹介率ランキング(作成途中)' },
        {
          avatar: 'https://dot.asahi.com/S2000/upload/2018020600055_1.jpg',
          title: 'Brunch this weekend?',
          subtitle: "<span class='text--primary'>Ali Connors</span> &mdash; I'll be in your neighborhood doing errands this weekend. Do you want to hang out?",
        },
        { divider: true, inset: true },
        {
          avatar: 'https://rancolle.com/images/item/uid4_1558088664/155808894338.jpg',
          title: 'Summer BBQ <span class="grey--text text--lighten-1">4</span>',
          subtitle: "<span class='text--primary'>to Alex, Scott, Jennifer</span> &mdash; Wish I could come, but I'm out of town this weekend.",
        },
        { divider: true, inset: true },
        {
          avatar: 'https://cdn.vuetifyjs.com/images/lists/3.jpg',
          title: 'Oui oui',
          subtitle: "<span class='text--primary'>Sandra Adams</span> &mdash; Do you have Paris recommendations? Have you ever been?",
        },
        { divider: true, inset: true },
        {
          avatar: 'https://cdn.vuetifyjs.com/images/lists/4.jpg',
          title: 'Birthday gift',
          subtitle: "<span class='text--primary'>Trevor Hansen</span> &mdash; Have any ideas about what we should get Heidi for her birthday?",
        },
        { divider: true, inset: true },
        {
          avatar: 'https://cdn.vuetifyjs.com/images/lists/5.jpg',
          title: 'Recipe to try',
          subtitle: "<span class='text--primary'>Britta Holt</span> &mdash; We should eat this: Grate, Squash, Corn, and tomatillo Tacos.",
        },
      ],
    }),
        methods: {
      swipe (direction) {
		  if (direction == 'Left') {
			//   console.log(direction)
			  this.$router.push('/BBS/topic/つぶやき')
		  }
      else if (direction == 'Right') {
			  this.$router.push('/')
          }      
        this.swipeDirection = direction
      },
    },
  
  }
</script>