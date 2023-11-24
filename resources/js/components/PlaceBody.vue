<template>
    <main>
        <p>Номер телефона:    +7(999)999-99-99</p>
        <p>E-mail:   copystar@gmail.com </p>
        <p class="contacts-end">Адрес:     ул.Подбельского, 27а, Братск, Иркутская область </p>
        <img src="/img/map.jpg">  
    </main>
</template>
<script>
export default {
    name: "PlaceBody",
};
</script>
<style scoped>
.contacts-end{
    margin-top: 10vh;
}
main p{
    margin: 3vh 0 0 2vw;
}
main img{
    width: 100%;
    position: absolute;
    bottom: 0;
}
</style>