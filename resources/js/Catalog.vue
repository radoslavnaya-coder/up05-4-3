<template>
    <div id="app">
      <Header />
      <CatalogBody />
    </div>
  </template>
  <script>
  import Header from './components/Header.vue';
  import CatalogBody from './components/CatalogBody.vue';
  export default {
    name: 'app',
    components: {Header, CatalogBody}
  }
  </script>