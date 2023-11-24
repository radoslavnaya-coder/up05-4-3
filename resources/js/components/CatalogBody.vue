<template>
    <main>
        <div>
        <select id="sorter">
            <option value="1" selected="selected">Упорядочить</option>
            <option value="1">4</option>
            <option value="1">3</option>
            <option value="1">2</option>
            <option value="1">1</option>
        </select>
        <select style="margin-left: 2vw;" id="category">
            <option value="1" selected="selected">Категория</option>
            <option value="1">2</option>
            <option value="1">4</option>
            <option value="1">5</option>
            <option value="1">8</option>
        </select>
        </div>
        <!-- Cardplace -->
        <section>
            <div class="cardplace">
            <img src="/img/items/01.jpg">
            <p>Название</p>
            <p style="margin-top: 8vh;">4000 Р.</p>
            <a>+ В корзину</a>
        </div>
        <div class="cardplace">
            <img src="/img/items/02.jpg">
            <p>Название</p>
            <p style="margin-top: 8vh;">4000 Р.</p>
            <a>+ В корзину</a>
        </div>
        <div class="cardplace">
            <img src="/img/items/03.jpg">
            <p>Название</p>
            <p style="margin-top: 8vh;">4000 Р.</p>
            <a>+ В корзину</a>
        </div>
        <div class="cardplace">
            <img src="/img/items/04.jpg">
            <p>Название Название Название</p>
            <p style="margin-top: 8vh;">4000 Р.</p>
            <a>+ В корзину</a>
        </div>
        <div class="cardplace">
            <img src="/img/items/05.jpg">
            <p>Название Название Название</p>
            <p style="margin-top: 8vh;">4000 Р.</p>
            <a>+ В корзину</a>
        </div>
        <div class="cardplace">
            <img src="/img/items/06.jpg">
            <p>Название Название Название</p>
            <p style="margin-top: 8vh;">4000 Р.</p>
            <a>+ В корзину</a>
        </div>
        <div class="cardplace">
            <img src="/img/items/07.jpg">
            <p>Название Название Название</p>
            <p style="margin-top: 8vh;">4000 Р.</p>
            <a>+ В корзину</a>
        </div>
        <div class="cardplace">
            <img src="/img/items/08.jpg">
            <p>Название Название Название</p>
            <p style="margin-top: 8vh;">4000 Р.</p>
            <a>+ В корзину</a>
        </div>
        <div class="cardplace">
            <img src="/img/items/08.jpg">
            <p>Название Название Название</p>
            <p style="margin-top: 8vh;">4000 Р.</p>
            <a>+ В корзину</a>
        </div>
        <div class="cardplace">
            <img src="/img/items/08.jpg">
            <p>Название Название Название</p>
            <p style="margin-top: 8vh;">4000 Р.</p>
            <a>+ В корзину</a>
        </div>
        <div class="cardplace">
            <img src="/img/items/08.jpg">
            <p>Название Название Название</p>
            <p style="margin-top: 8vh;">4000 Р.</p>
            <a>+ В корзину</a>
        </div>
        <div class="cardplace">
            <img src="/img/items/08.jpg">
                <p>Название Название Названиe</p>
                <p style="margin-top: 8vh;">4000 Р.</p>
                <a>+ В корзину</a>  
        </div>
        </section>
        
          <!-- End cardplace -->
    </main>
</template>
<script>
export default {
    name: "CatalogBody",
};
</script>
<style scoped>
main{
    margin: 15px 15%;
    width: 80%;
}
select{
    border: none;
    margin: 0.5vh 0.5vw;
}
select:active, select:focus{
  outline:none
}
.cardplace{
    background: #2F2A2A;
    margin: 2.93vh 1.56vw;
    border-radius: 10px;
    width: 14.58vw;
    max-height: 39.06vh;
    display: inline-block;
    position: relative;
}
.cardplace img{
    width: 200px;
    height: 200px;
    padding: 1vh 0.8vw;
    background: white;
    margin: 1.3vh 2vw;
    border-radius: 3px;
}
.cardplace p{
    color: white;
    padding: 0 0 0 1vw;
}
.cardplace a{
    color: white;
    position: absolute;
    font-weight: 700;
    border: 1px solid white;
    border-radius: 100px;
    padding: 0.6vh 0.8vw;
    cursor: pointer;
    font-size: 16px;
    bottom: 1vh;
    right: 1vw;
}
</style>
