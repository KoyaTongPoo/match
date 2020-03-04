<template>
<v-container>


<div class="text-center">
    <v-btn
    slot="activator"
      class="elevation-0"
      :style="{left: '50%', transform:'translateX(-50%)'}"
      style="
  width: 240px;
  left:25%;
  border: 2px solid #9ec34b;
  font-size: 20px;
  text-decoration: none;
  font-weight: bold;
  padding: 8px 16px;
  font-style: italic; 
  border-radius: 4px;
  transition: .4s;
  bottom: 96px;"
      dark
      fab
      fixed
      bottom
      color="primary"
      to="/users/list"
      elevation="24"
    >
      紹介ポイントGET!!
    </v-btn>
</div>



    <v-container py-1 px-0>
  <v-card
    class="mx-auto"
    max-width="434"
    shaped
    to="/users/SheldonCooper"
  >
    <v-img
      height="200px"
      src="https://livedoor.sp.blogimg.jp/toei23/imgs/9/9/992392ef.jpg"
    >
      <v-row
        align="end"
        class="fill-height"
      >
        <v-col
          align-self="start"
          class="pa-0"
          cols="5"
        >
          <v-avatar
            class="profile"
            color="grey"
            size="164"
            tile
          >
            <v-img src="https://lh3.googleusercontent.com/proxy/uefYmslmhwGfBF4kVrJRIuwvNKPo0iGHgCUK_p3xEuM_Baui6ee8ZWlsYRK5-cvpBqsEWkx7GlPqSG3PQFgCVz0Q1YkWxtgQvZuTRfiO5EQXa2_zycN_uZvTbVvjcmY8C8ip77EL7ilrs7yvjw"></v-img>
          </v-avatar>
        </v-col>
 <v-col
        align-self="center"
          class="pa-0"
          cols="7"
          justify="space-around"
          >
        
<v-col class="text-center">
         
            <v-btn
            dark
            color="pink"
            style="font-style: italic;"
            rounded
            
            >
                  Thanks!!!
              </v-btn>
         
    
        </v-col>
        
        </v-col>
   
      </v-row>
    </v-img>
  </v-card>
 </v-container>
   <v-container py-1 px-0>
  <v-card
    class="mx-auto"
    max-width="434"
    shaped
  >
    <v-img
      height="200px"
      src="https://lh3.googleusercontent.com/proxy/J-TDGKMvMiqr3hTcJHesw80lJoaKFqDdgjtlxB2jCvhsf4Go5MINmVW-wn6i7uOH3zJ1LPIJIYQJzurbOEVc0k86WYdWzh_igIX0bMYn4vNiLJcIeP3OKNZx9x494CE9kkpnFd8QRM4kO4Ibhv5ExuMg6RN7gCNa1hjcwckbfjjE0wyPQ7Wc3y6wCg8"
    >
      <v-row
        align="end"
        class="fill-height"
      >
        <v-col
          align-self="start"
          class="pa-0"
          cols="5"
        >
          <v-avatar
            class="profile"
            color="grey"
            size="164"
            tile
          >
            <v-img src="https://ouchi-time.com/wp-content/uploads/2018/05/ba8babaca28e197b0958bffff219591d.jpg"></v-img>
          </v-avatar>
        </v-col>
<v-col
        align-self="center"
          class="pa-0"
          cols="7"
          justify="space-around"
          >
        
<v-col class="text-center">
         
            <v-btn
            dark
            color="pink"
            style="font-style: italic;"
            rounded
            
            >
                  Thanks!!!
              </v-btn>
         
    
        </v-col>
        
        </v-col>
      </v-row>
    </v-img>
  </v-card>
 </v-container>
  </v-container>
</template>

<script>
  export default {
    data: () => ({
      tags: [
        'アメコミ好き',
        'タバコ吸わない',
        'SF好き',
        'ルールは大事',
        'バジンガ',
      ],
    }),
  }
</script>