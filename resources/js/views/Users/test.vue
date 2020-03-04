<template>
  <v-card
    :loading="loading"
    class="mx-auto my-12"
    max-width="374"
  >

  <div class="text-center">
    <v-avatar
            class="profile"
            color="grey"
            size="300"
          >
            <v-img src="https://ouchi-time.com/wp-content/uploads/2018/05/ba8babaca28e197b0958bffff219591d.jpg"></v-img>
          </v-avatar>
          </div>
<v-row justify="space-around">

    <v-avatar color="indigo" size="50">
      <v-img src="https://ouchi-time.com/wp-content/uploads/2018/05/ba8babaca28e197b0958bffff219591d.jpg"></v-img>
    </v-avatar>

    <v-avatar color="teal" size="50">
      <v-img src="https://pbs.twimg.com/media/EKls-RZX0AEF93m.jpg"></v-img>
    </v-avatar>

    <v-avatar color="orange" size="50">
      <v-img src="https://memorylane-media.com/wp-content/uploads/2018/07/%E3%82%B9%E3%82%AF%E3%83%AA%E3%83%BC%E3%83%B3%E3%82%B7%E3%83%A7%E3%83%83%E3%83%88-2018-07-22-23.52.42.jpg"></v-img>
    </v-avatar>

    <v-avatar color="indigo" size="50">
      <v-img src="https://dramanavi.net/drama/upring/202002/20200225-00000018-dramanavi-1-00-view.jpg"></v-img>
    </v-avatar>

    <v-avatar color="teal" size="50">
      <v-img src="https://pbs.twimg.com/media/EKls-RZX0AEF93m.jpg"></v-img>
    </v-avatar>

    <v-avatar color="orange" size="50">
      <v-img src="https://memorylane-media.com/wp-content/uploads/2018/07/%E3%82%B9%E3%82%AF%E3%83%AA%E3%83%BC%E3%83%B3%E3%82%B7%E3%83%A7%E3%83%83%E3%83%88-2018-07-22-23.52.42.jpg"></v-img>
    </v-avatar>

  </v-row>
    <v-card-title>ペニー</v-card-title>

    <v-card-text>
      <v-row
        align="center"
        class="mx-0"
      >
        <v-rating
          :value="4.5"
          color="amber"
          dense
          half-increments
          readonly
          size="14"
        ></v-rating>

        <div class="grey--text ml-4">4.5 (413)</div>
      </v-row>

      <div class="my-4 subtitle-1">
        $ • Italian, Cafe
      </div>

      <div>Small plates, salads & sandwiches - an intimate setting with 12 indoor seats plus patio seating.</div>
    </v-card-text>

    <v-divider class="mx-4"></v-divider>

    <v-card-title>Tonight's availability</v-card-title>

    <v-card-text>
      <v-chip-group
        v-model="selection"
        active-class="deep-purple accent-4 white--text"
        column
      >
        <v-chip>5:30PM</v-chip>

        <v-chip>7:30PM</v-chip>

        <v-chip>8:00PM</v-chip>

        <v-chip>9:00PM</v-chip>
      </v-chip-group>
    </v-card-text>


  </v-card>
</template>

