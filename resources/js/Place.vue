<template>
    <div id="app">
      <Header />
      <PlaceBody />
    </div>
  </template>
  <script>
  import Header from './components/Header.vue';
  import PlaceBody from './components/PlaceBody.vue';
  
  export default {
    name: 'app',
    components: {Header, PlaceBody}
  }
  </script>