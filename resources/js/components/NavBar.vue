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

<v-list-tile router to="/login">
<v-list-tile-action>
<v-icon class="white--text">chat</v-icon>
</v-list-tile-action>
<v-list-tile-content>
<v-list-tile-title class="white--text">Forum</v-list-tile-title>
</v-list-tile-content>
</v-list-tile>

<v-list-tile router to="/login">
<v-list-tile-action>
<v-icon class="white--text">question_answer</v-icon>
</v-list-tile-action>
<v-list-tile-content>
<v-list-tile-title class="white--text">Questions</v-list-tile-title>
</v-list-tile-content>
</v-list-tile>

<v-list-tile router to="/login">
<v-list-tile-action>
<v-icon class="white--text">list</v-icon>
</v-list-tile-action>
<v-list-tile-content>
<v-list-tile-title class="white--text">Category</v-list-tile-title>
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
drawer: false

}
}

}
</script>
