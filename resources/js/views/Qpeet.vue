<template>

<v-container class="pa-1">
  <v-row
    v-touch="{
      left: () => swipe('Left'),
      right: () => swipe('Right'),
      up: () => swipe('Up'),
      down: () => swipe('Down')
    }"
    align="center"
    justify="center">
<v-card class="pa-2"
 max-width="374px">
  <v-card-actions>
      <v-btn
      to="/BBS/topic/BBS"
      >
        Back
      </v-btn>
      <v-spacer></v-spacer>
      <v-btn
        color="primary"
        to="/making"
      >
        つぶやく
      </v-btn>
    </v-card-actions>
    <v-container fluid>
      <v-row
        align="center"
      >
      
         <v-form
          ref="form"
          v-model="valid"
          lazy-validation
        >
          <v-select
            v-model="qpeet.to_user"
            :items="items"
            attach
            chips
            label="質問する対象"
            multiple
            :rules="[v => !!v || 'Item is required']"
            required
          ></v-select>
        
        <v-textarea
        v-model="qpeet.message"
          label="どんな質問をしますか？"
          auto-grow
          outlined
          rows="3"
          row-height="25"
          shaped
          dense=""
          :counter="50"
          class="px-1"
          
          :rules="nameRules"
          required
        ></v-textarea>
        <!-- <v-btn
      :disabled="!valid"
      color="success"
      class="mr-4"
      @click="validate"
    >
      Validate
    </v-btn>

    <v-btn
      color="error"
      class="mr-4"
      @click="reset"
    >
      Reset Form
    </v-btn>

    <v-btn
      color="warning"
      @click="resetValidation"
    >
      Reset Validation
    </v-btn> -->
    <v-btn class="mr-4" @click="submit">送信</v-btn>
  </v-form>
      </v-row>
    </v-container>
</v-card>
  </v-row>
</v-container>
</template>

<script>
  export default {
    data: () => ({
      swipeDirection: 'None',
      items: ['女性', '男性', '相手のいる女性', '相手のいる男性','234'],
      // to_user: ['女性', '男性', '相手のいる女性', '相手のいる男性'],
      valid: true,
      nameRules: [
        v => !!v || 'Name is required',
        v => (v && v.length <= 50) || 'Name must be less than 10 characters',
      ],
      qpeet:{
					message: '',
          to_user:'234',
          from_user:'234',
          read_flg:'0',
          delete_flg:'0'
				},

      checkbox: false,

    }),
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


      submit () {
				axios.post('/api/message',{
					message: this.qpeet
				})
				.then(response => {
					this.qpeet = response.data.qpeet;
					this.$router.push({ name: 'BBS'})
				})
				.catch(error => console.log(error));
			},


      validate () {
        this.$refs.form.validate()
      },
      reset () {
        this.$refs.form.reset()
      },
      resetValidation () {
        this.$refs.form.resetValidation()
      },
    },
  }
  
    
</script>