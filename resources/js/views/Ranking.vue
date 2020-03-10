<template>
<v-container>
  <v-sheet
    class="mx-auto"
    elevation="8"
    max-width="800"
  >
    <v-slide-group
      v-model="model"
      class="pa-2"
      mobile-break-point="799"
    >
      <v-slide-item
        v-for="n in 15"
        :key="n"
        v-slot:default="{ active, toggle }"
      >
        <v-card
          :color="active ? 'primary' : 'grey lighten-1'"
          class="mx-2"
          height="100"
          width="200"
          @click="toggle"
        >
          <v-row
            class="fill-height"
            align="center"
            justify="center"
          >
            <v-scale-transition>
              <v-icon
                v-if="active"
                color="white"
                size="48"
                v-text="'mdi-close-circle-outline'"
              ></v-icon>
            </v-scale-transition>
          </v-row>
        </v-card>
      </v-slide-item>
    </v-slide-group>

    <v-slide-group
      v-model="model"
      class="pa-2"
      mobile-break-point="799"
    >
      <v-slide-item
        v-for="n in 15"
        :key="n"
        v-slot:default="{ active, toggle }"
      >
        <v-card
          :color="active ? 'primary' : 'grey lighten-1'"
          class="mx-2"
          height="100"
          width="200"
          @click="toggle"
        >
          <v-row
            class="fill-height"
            align="center"
            justify="center"
          >
            <v-scale-transition>
              <v-icon
                v-if="active"
                color="white"
                size="48"
                v-text="'mdi-close-circle-outline'"
              ></v-icon>
            </v-scale-transition>
          </v-row>
        </v-card>
      </v-slide-item>
    </v-slide-group>

    <v-slide-group
      v-model="model"
      class="pa-2"
      mobile-break-point="799"
    >
      <v-slide-item
        v-for="n in 15"
        :key="n"
        v-slot:default="{ active, toggle }"
      >
        <v-card
          :color="active ? 'primary' : 'grey lighten-1'"
          class="mx-2"
          height="100"
          width="200"
          @click="toggle"
        >
          <v-row
            class="fill-height"
            align="center"
            justify="center"
          >
            <v-scale-transition>
              <v-icon
                v-if="active"
                color="white"
                size="48"
                v-text="'mdi-close-circle-outline'"
              ></v-icon>
            </v-scale-transition>
          </v-row>
        </v-card>
      </v-slide-item>
    </v-slide-group>
  </v-sheet>


  <v-sheet
    class="mx-auto"
    elevation="8"
    max-width="800"
  >
  <v-card-title class="pb-1">トップ優良会員</v-card-title>
    <v-slide-group
      v-model="model"
      class="pa-2"
      mobile-break-point="799"
    >
      <v-slide-item
        v-for="n in 15"
        :key="n"
        v-slot:default="{ active, toggle }"
      >
        <v-card
          :color="active ? 'primary' : 'grey lighten-1'"
          class="mx-2"
     
          width="240"

        >
        
        <v-card height="70">
            <v-list subheader>
      
      <v-list-item class="pa-1">
          
        <v-list-item-avatar
        left
        size="24"
        class="ma-0 pa-0">
          1
       </v-list-item-avatar>
          
        <v-list-item-avatar>
          <v-img class="pa-1"
          src="https://cdn.vuetifyjs.com/images/lists/1.jpg"></v-img>
        </v-list-item-avatar>
        

        <v-list-item-content>
          <v-list-item-title>Jason Oner</v-list-item-title>
          <v-list-item-subtitle>説明文</v-list-item-subtitle>
        </v-list-item-content>
        
        <v-btn color="primary"
            to="/making"
            dark>依頼</v-btn>
      </v-list-item>
      
      
    </v-list>




        </v-card>
            <v-card height="70">
            <v-list subheader>
      
      <v-list-item class="pa-1">
          
        <v-list-item-avatar
        left
        size="24"
        class="ma-0 pa-0">
          1
       </v-list-item-avatar>
          
        <v-list-item-avatar>
          <v-img class="pa-1"
          src="https://cdn.vuetifyjs.com/images/lists/1.jpg"></v-img>
        </v-list-item-avatar>
        

        <v-list-item-content>
          <v-list-item-title>Jason Oner</v-list-item-title>
          <v-list-item-subtitle>説明文</v-list-item-subtitle>
        </v-list-item-content>
        
        <v-btn color="primary"
            to="/making"
            dark>依頼</v-btn>
      </v-list-item>
      
      
    </v-list>
        </v-card>



<v-card height="70">
            <v-list subheader>
      
      <v-list-item class="pa-1">
          
        <v-list-item-avatar
        left
        size="24"
        class="ma-0 pa-0">
          1
       </v-list-item-avatar>
          
        <v-list-item-avatar>
          <v-img class="pa-1"
          src="https://cdn.vuetifyjs.com/images/lists/1.jpg"></v-img>
        </v-list-item-avatar>
        

        <v-list-item-content>
          <v-list-item-title>Jason Oner</v-list-item-title>
          <v-list-item-subtitle>説明文</v-list-item-subtitle>
        </v-list-item-content>
        
        <v-btn color="primary"
            to="/making"
            dark>依頼</v-btn>
      </v-list-item>
      

    </v-list>
        </v-card>
        </v-card>
      </v-slide-item>
    </v-slide-group>



  <v-card-title class="pb-1">トップ優良会員</v-card-title>
    <v-slide-group
      v-model="model"
      class="pa-0 ma-2"
      mobile-break-point="799"
    >
      <v-slide-item
        v-for="n in 15"
        :key="n"
        v-slot:default="{ active, toggle }"
      >
        <v-card
          :color="active ? 'primary' : 'grey lighten-1'"
          class="mx-2"
     
          width="240"

        >
        
        <v-card height="70">
            <v-list subheader>
      
      <v-list-item class="pa-1">
        <v-list-item-avatar
        left
        size="24"
        class="ma-0 pa-0">
          1
       </v-list-item-avatar>
          
          
        <v-list-item-avatar>
          <v-img class="pa-1"
          src="https://cdn.vuetifyjs.com/images/lists/1.jpg"></v-img>
        </v-list-item-avatar>
        

        <v-list-item-content>
          <v-list-item-title>Jason Oner</v-list-item-title>
          <v-list-item-subtitle>説明文</v-list-item-subtitle>
        </v-list-item-content>
        
        <v-btn color="primary"
            to="/making"
            dark>依頼</v-btn>
      </v-list-item>
      
      
    </v-list>




        </v-card>
            <v-card height="70">
            <v-list subheader>
      
      <v-list-item class="pa-1">
          
        <v-list-item-avatar
        left
        size="24"
        class="ma-0 pa-0">
          2
       </v-list-item-avatar>
          
        <v-list-item-avatar>
          <v-img class="pa-1"
          src="https://cdn.vuetifyjs.com/images/lists/1.jpg"></v-img>
        </v-list-item-avatar>
        

        <v-list-item-content>
          <v-list-item-title>Jason Oner</v-list-item-title>
          <v-list-item-subtitle>説明文</v-list-item-subtitle>
        </v-list-item-content>
        
        <v-btn color="primary"
            to="/making"
            dark>依頼</v-btn>
      </v-list-item>
      
      
    </v-list>
        </v-card>



<v-card height="70">
            <v-list subheader>
      
      <v-list-item class="pa-1">
          
        <v-list-item-avatar
        left
        size="24"
        class="ma-0 pa-0">
          3
       </v-list-item-avatar>
          
        <v-list-item-avatar>
          <v-img class="pa-1"
          src="https://cdn.vuetifyjs.com/images/lists/1.jpg"></v-img>
        </v-list-item-avatar>
        

        <v-list-item-content>
          <v-list-item-title>Jason Oner</v-list-item-title>
          <v-list-item-subtitle>説明文</v-list-item-subtitle>
        </v-list-item-content>
        
        <v-btn color="primary"
            to="/making"
            dark>依頼</v-btn>
      </v-list-item>
      

    </v-list>
        </v-card>
        </v-card>







      </v-slide-item>
    </v-slide-group>

  </v-sheet>
      

</v-container>
</template>

<script>
  export default {
    data: () => ({
      model: null,
      items: [
        { active: true, title: 'Jason Oner', avatar: 'https://cdn.vuetifyjs.com/images/lists/1.jpg' },
        { active: true, title: 'Ranee Carlson', avatar: 'https://cdn.vuetifyjs.com/images/lists/2.jpg' },
        { title: 'Cindy Baker', avatar: 'https://cdn.vuetifyjs.com/images/lists/3.jpg' },
        { title: 'Ali Connors', avatar: 'https://cdn.vuetifyjs.com/images/lists/4.jpg' },
      ],
      items2: [
        { title: 'Travis Howard', avatar: 'https://cdn.vuetifyjs.com/images/lists/5.jpg' },
      ],
    
    }),
  }
</script>