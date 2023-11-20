<template>
    <header>
      <img src="/logo.png">
      <div>
        <a href=""><h1>О нас</h1></a>
        <a href=""><h1>Каталог</h1></a>
        <a href=""><h1>Где нас найти?</h1></a>
      </div>
        <button>Войти</button>
    </header>
</template>

<script>
    export default {
        name: "main"
    }
</script>
<style scoped>
@font-face{
    font-family: 'font-mukta';
    src: url('/public/fonts/EkMuktaRegular-mOLv.ttf') format('ttf');
}
body {
  margin: 0;
  padding: 0;
  overflow-x: hidden;

}
a{
    color: black;
    text-decoration: none;
}
header {
  padding: 15px 75px;
  height: 7.75vh;
  display: inline-flex;
  justify-content: space-between;
  width: 90%;
}
header div{
    display: flex;
}
header div h1{
    padding: 0 20px;
    font-size: 24px;
}
header button{
    height: 37.5px;
    width: 125px;
    margin: 1% 0;
    background: #2F2A2A;
    color: white;
    border-radius: 3px;
    border: none;
    font-size: 19px;
}
</style>
