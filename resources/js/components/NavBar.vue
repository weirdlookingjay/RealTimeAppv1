<template>
<nav>
<v-toolbar flat app>
<v-toolbar-side-icon class="grey--text" @click="drawer = !drawer"></v-toolbar-side-icon>
<v-toolbar-title class="text-uppercase">
<span class="blue--text">Todo</span>
<span>App</span>
</v-toolbar-title>
</v-toolbar>

<v-navigation-drawer v-model="drawer" app class="primary">
<v-list>
<v-list-tile router to="/">
<v-list-tile-action>
<v-icon class="white--text">dashboard</v-icon>
</v-list-tile-action>
<v-list-tile-content>
<v-list-tile-title class="white--text">Dashboard</v-list-tile-title>
</v-list-tile-content>
</v-list-tile>

<v-list-tile router to="/login">
<v-list-tile-action>
<v-icon class="white--text">power_settings_new</v-icon>
</v-list-tile-action>
<v-list-tile-content>
<v-list-tile-title class="white--text">Login</v-list-tile-title>
</v-list-tile-content>
</v-list-tile>

</v-list>
</v-navigation-drawer>
</nav>
</template>

<script>
export default {
data() {
return {
drawer: false,
links: [
{ icon: 'dashboard', text: 'Dashboard', route: '/' },
{ icon: 'folder', text: 'My Projects', route: '/projects' },
{ icon: 'person', text: 'Team', route: '/team' }
]
}
}

}
</script>
