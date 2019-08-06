<template>
  <v-app class="grey lighten-4">
    <Navbar />
    <v-content class="mx-4 mb-4">
      <router-view></router-view>
    </v-content>
  </v-app>
</template>

<script>
import Navbar from './NavBar'
import Login from './auth/Login'

  export default {
    name: 'App',
    components: { Navbar, Login },
    data() {
      return {
        //
      }
    }
  }
</script>
