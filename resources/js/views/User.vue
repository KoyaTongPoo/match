<template>
<div>
	<h1>ユーザ一覧</h1>
	<ul>
        <v-btn color="primary" :to="`/user/create`">ユーザー作成</v-btn>
		<li v-for="(user,index) in users" v-bind:key="user.id" class="mb-1">
			{{ user.name}} 
			<v-btn color="success" :to="`/user/${user.id}`">詳細</v-btn>
            <v-btn color="primary" :to="`/user/${user.id}/edit`">更新</v-btn>
            <v-btn color="warning" @click="userDelete(index, user.id)">削除</v-btn>
		</li>
	</ul>
</div>
</template>

<script>
	export default {
		data(){
			return{
				users:[],
			}
		},
		methods:{
			userDelete(index, id){
				axios.delete('/api/user/' + id)
				     .then(response => {
						 this.users.slice(id, 1)
						 this.$router.push('success')
						 
				     })
				     .catch(error => console.log(error));
			},
		},
		created(){
			axios.get('/api/user')
				.then(response=>{
					this.users = response.data.users;
				})
				.catch(error => {
					console.log(error)
				});
		}
	}
</script>