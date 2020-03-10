<template>
<v-container>


<div class="text-center">
    <v-btn
    slot="activator"
   
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
  transition: .4s;
  bottom: 96px;"
      dark
      fab
      fixed
      bottom
     rounded
      color="primary"
      to="/making"
      elevation="16"
    >
      紹介文を送る!
    </v-btn>
</div>



    <v-container py-1 px-0>
  <v-card
    class="mx-auto"
    max-width="434"
    shaped
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
            <v-img src="https://rr.img.naver.jp/mig?src=http%3A%2F%2Fimgcc.naver.jp%2Fkaze%2Fmission%2FUSER%2F20160626%2F12%2F1277332%2F22%2F491x405xb42267cc25f890bfebe5dbd8.jpg%2F300%2F600&twidth=300&theight=600&qlt=80&res_format=jpg&op="></v-img>
          </v-avatar>
        </v-col>
 <v-col
        align-self="center"
          class="pa-0"
          cols="7"
          justify="space-around"
          >
        
<v-col class="text-center">
        
            <v-textarea
            solo
            rounded
            outlined
            clearable
            counter="25"
              color="teal"
            >
              <template v-slot:label>
                <div>
                  紹介文<small>(25文字以内))</small>
                </div>
              </template>
            </v-textarea>
    
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
      src="https://rr.img.naver.jp/mig?src=http%3A%2F%2Fcinemanavi.net%2Fwp-content%2Fuploads%2F2013%2F12%2F%25E3%2583%259A%25E3%2583%258B%25E3%2583%25BC%25E3%2583%25AA%25E3%2583%2593%25E3%2583%25B3%25E3%2582%25B0.jpg&twidth=1000&theight=0&qlt=80&res_format=jpg&op=r"
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
        
            <v-textarea
            solo
            rounded
            outlined
            clearable
            counter="25"
              color="teal"
            >
              <template v-slot:label>
                <div>
                  紹介文<small>(25文字以内))</small>
                </div>
              </template>
            </v-textarea>
    
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