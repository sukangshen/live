<template>
  <div id="app">
  <div id="app1">
  <Iheader></Iheader>
  <Zuo></Zuo>
  </div>
  <router-view></router-view>
  </div>
</template>

<script>

import Iheader from './components/Header'
import Zuo from './components/Zuo'
import Main from './components/Main'
export default {
  name: 'app',
  components:{
    Iheader,Zuo,Main
  }
}
</script>

<style>
#app {

}
</style>
