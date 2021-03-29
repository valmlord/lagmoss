<?
/*
Template Name: Сart
*/
?>

<?php
    get_header();
?>


<section class="cart">
        <div class="container">

            <div class="cart-header">
                <h2 class="cart-header__title">Корзина</h2>
                <form class="cart-header__promocode" action="#">
                    <input class="cart-header__input" type="text">
                    <button class="btn btn-promocode">Применить промокод</button>
                </form>
                <a href="#" class="cart-delivery">Подробнее о доставке</a>
            </div>

            <div class="cart-order">
                <div class="cart-order__item">
                    <img class="cart-order__item-img" src="assets/img/catalog/tables/dinner/arlington/arlington.jpg"
                        srcset="assets/img/catalog/tables/dinner/arlington/arlington.jpg 200w, 
                                assets/img/catalog/tables/dinner/arlington/arlington@2x.jpg 400w,
                                assets/img/catalog/tables/dinner/arlington/arlington@3x.jpg 600w"
                        alt="arlington-table">
                    <div class="cart-order__item-description">
                        <h2 class="cart-order__item-name">Arlington</h2>
                        <h3 class="cart-order__item-type">Обеденный стол</h3>
                        <div class="cart-order__item-sizes">

                        </div>
                        <span class="catalog-item__price-cursive">от</span>14 000 ₽
                    </div>
                </div>
            </div>
        </div>

        </div>
    </section>

    <?php
    get_footer();
?>