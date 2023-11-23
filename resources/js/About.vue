<template>
    <div id="app">
      <Header />
      <AboutBody />
    </div>
  </template>
  <script>
  import Header from './components/Header.vue';
  import AboutBody from './components/AboutBody.vue';
  
  export default {
    name: 'app',
    components: {Header, AboutBody}
  }
  </script>