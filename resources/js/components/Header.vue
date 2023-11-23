<template>
  <head>
    <meta charset="UTF-8">
  </head>
    <header>
      <a href="/"><img src="/img/logo.png"></a>
      <div>
        <a href="/"><h1>О нас</h1></a>
        <a href=""><h1>Каталог</h1></a>
        <a href=""><h1>Где нас найти?</h1></a>
      </div>
        <button>Войти</button>
    </header>
</template>

<script>
    export default {
        name: "AboutHeader"
    }
</script>
<style scoped>
*{
  font-family: 'font-falling', Arial;
  font-weight: 600;
  align-self: center;
}
body {
  margin: 0;
  padding: 0;
}
a{
  color: black;
  text-decoration: none;
}
header {
  padding: 0 75px;
  height: 14vh;
  display: inline-flex;
  justify-content: space-between;
  width: 99%;
}
header img{
  height: 100.65px;
  width: 161px;
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
    font-weight: 400;
}
</style>
