<template>
<v-app id="app">
    <router-view name= "button"></router-view>
            <router-view name= "header"></router-view>
            <v-content fluid>
        
                
            <transition name="fade">
            <router-view />
            </transition>

                

                </v-content>
</v-app> 
</template>

<style scoped>

</style>