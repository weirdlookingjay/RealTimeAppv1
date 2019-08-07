<template>
<nav>
<v-toolbar flat app>
<v-toolbar-side-icon class="grey--text" @click="drawer = !drawer"></v-toolbar-side-icon>
<v-toolbar-title class="text-uppercase">
<span class="blue--text">Sand</span>
<span>Box</span>
</v-toolbar-title>
</v-toolbar>

<v-navigation-drawer v-model="drawer" app class="primary">
<v-list>
<v-list-tile v-for="link in links" :key="link.text" :to="link.to" v-if="link.show">
<v-list-tile-action>
<v-icon class="white--text">{{ link.icon }}</v-icon>
</v-list-tile-action>
<v-list-tile-content>
<v-list-tile-title class="white--text">{{ link.text }}</v-list-tile-title>
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
{ icon: 'dashboard', text: 'Dashboard', to: '/', show: User.loggedIn()},
{ icon: 'power_settings_new', text: 'Login', to: '/login', show: !User.loggedIn()},
{ icon: 'exit_to_app', text: 'Logout', to: '/logout', show: User.loggedIn()},
{ icon: 'chat', text: 'Forum', to: '/forum', show: true},
{ icon: 'question_answer', text: 'Questions', to: '/ask', show: User.loggedIn()},
{ icon: 'list', text: 'Category', to: '/category', show: !User.loggedIn()},
]

}
},
created() {
    EventBus.$on('logout', () => {
        User.logout()
})
}

}
</script>
