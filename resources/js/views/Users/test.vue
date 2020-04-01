<template>
<div>
	<div>
	<h1>ユーザ詳細</h1>
	<ul>
		<li>User Id: {{ profile_same_gender.id }}</li>
		<li>User Name: {{ profile_same_gender.star_love }}</li>
		<li>User Email: {{ profile_same_gender.star_like }}</li>
	</ul>
	</div>
	
	
</div>
</template>

<script>
	export default {
		data(){
			return {
				id: this.$route.params.id,
				profile_same_gender: ''
			}
		},
		created(){
			axios.get('/api/profile_same_gender/' + this.id)
			.then(response => this.profile_same_gender = response.data.profile_same_gender)
      .catch(erorr => console.log(error));
		}

	}
</script>