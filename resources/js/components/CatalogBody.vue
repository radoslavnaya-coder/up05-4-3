<template>
    <main>
        <div>
            <label for="sorter">Упорядочить</label>
        <select id="sorter">
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
        </select>
        <label style="margin-left: 2vw;" for="category">Категория</label>
        <select id="category">
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
        </select>
        </div>
        <div class="cardplace">
            <img src="/img/items/01.jpg">
            <p>Название</p>
            <p>4000 Р.</p>
        </div>
        <div class="cardplace">
            <img src="/img/items/02.jpg">
            <p>Название</p>
            <p>4000 Р.</p>
        </div>
        <div class="cardplace">
            <img src="/img/items/03.jpg">
            <p>Название</p>
            <p>4000 Р.</p>
        </div>
        <div class="cardplace">
            <img src="/img/items/04.jpg">
            <p>Название Название Название Название Название Название Название Название</p>
            <p>4000 Р.</p>
        </div>
    </main>
</template>
<script>
export default {
    name: "CatalogBody",
};
</script>
<style scoped>
main{
    margin: 15px 75px;
}
select{
    border: none;
    margin: 0.5vh 0.5vw;
}
.cardplace{
    background: #2F2A2A;
    margin: 2.93vh 1.56vw;
    border-radius: 10px;
    width: 14.58vw;
    height: 39.06vh;
    display: inline-block;
}
.cardplace img{
    width: 200px;
    padding: 1vh 0.8vw;
    background: white;
    margin: 1.3vh 1.3vw;
}
.cardplace p{
    color: white;
    padding: 0 0 0 1vw;
}
</style>
