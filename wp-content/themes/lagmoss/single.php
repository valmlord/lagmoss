<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package lagmoss
 */

get_header();
?>

<section class="product">
        <div class="container">
            <div class="product-card">

                <div class="product-card__inner-slider">
                    <div class="product-card__slider">
                        <div class="product-card__slider-item">
                            <img class="product-card__slider-img" src="assets/img/catalog/seats/el-paso/el-paso01.webp"
                                srcset="assets/img/catalog/seats/el-paso/el-paso01.webp 200w, 
                        assets/img/catalog/seats/el-paso/el-paso01@2x.webp 400w,
                        assets/img/catalog/seats/el-paso/el-paso01@3x.webp 600w" alt="product-slider-img">
                        </div>
                        <div class="product-card__slider-item">
                            <img class="product-card__slider-img" src="assets/img/catalog/seats/el-paso/el-paso02.webp"
                                srcset="assets/img/catalog/seats/el-paso/el-paso02.webp 200w, 
                        assets/img/catalog/seats/el-paso/el-paso02@2x.webp 400w,
                        assets/img/catalog/seats/el-paso/el-paso02@3x.webp 600w" alt="product-slider-img">
                        </div>
                        <div class="product-card__slider-item">
                            <img class="product-card__slider-img" src="assets/img/catalog/seats/el-paso/el-paso03.webp"
                                srcset="assets/img/catalog/seats/el-paso/el-paso03.webp 200w, 
                        assets/img/catalog/seats/el-paso/el-paso03@2x.webp 400w,
                        assets/img/catalog/seats/el-paso/el-paso03@3x.webp 600w" alt="product-slider-img">
                        </div>
                    </div>

                    <div class="product-card__nav-thumbnails">
                        <div>
                            <img class="product-card__nav-thumbnails-img"
                                src="assets/img/catalog/seats/el-paso/el-paso01.webp" srcset="assets/img/catalog/seats/el-paso/el-paso01.webp 200w, 
                                assets/img/catalog/seats/el-paso/el-paso01@2x.webp 400w,
                                assets/img/catalog/seats/el-paso/el-paso01@3x.webp 600w" width="80" height="60"
                                alt="product-slider-thumbnail-img">
                        </div>
                        <div>
                            <img class="product-card__nav-thumbnails-img"
                                src="assets/img/catalog/seats/el-paso/el-paso02.webp" srcset="assets/img/catalog/seats/el-paso/el-paso02.webp 200w, 
                                assets/img/catalog/seats/el-paso/el-paso02@2x.webp 400w,
                                assets/img/catalog/seats/el-paso/el-paso02@3x.webp 600w" width="80" height="60"
                                alt="product-slider-thumbnail-img">
                        </div>
                        <div>
                            <img class="product-card__nav-thumbnails-img"
                                src="assets/img/catalog/seats/el-paso/el-paso03.webp" srcset="assets/img/catalog/seats/el-paso/el-paso03.webp 200w, 
                                assets/img/catalog/seats/el-paso/el-paso03@2x.webp 400w,
                                assets/img/catalog/seats/el-paso/el-paso03@3x.webp 600w" width="80" height="60"
                                alt="product-slider-thumbnail-img">
                        </div>
                        <div>
                            <img class="product-card__nav-thumbnails-img"
                                src="assets/img/catalog/seats/el-paso/el-paso03.webp" srcset="assets/img/catalog/seats/el-paso/el-paso03.webp 200w, 
                                assets/img/catalog/seats/el-paso/el-paso03@2x.webp 400w,
                                assets/img/catalog/seats/el-paso/el-paso03@3x.webp 600w" width="80" height="60"
                                alt="product-slider-thumbnail-img">
                        </div>
                    </div>
                </div>

                <div class="product-card__inner-info">
                    <div class="product-card__info">
                        <h2 class="product-card__info-type">
                            Кресло
                        </h2>
                        <h1 class="product-card__info-title">
                            EL-PASO
                        </h1>
                        <p class="product-card__info-description">
                            Повседневная практика показывает, что начало повседневной работы по формированию позиции
                            требуют
                            определения и уточнения направлений прогрессивного развития.Идейные высшего порядка, а также
                            постоянное информационно - пропагандистское обеспечение нашей деятельности требуют
                        </p>
                    </div>


                    <div class="product-card__options">
                        <ul class="product-card__tabs">
                            <li class="product-card__tab">
                                <a>Выбор материалов</a>
                            </li>
                            <li class="product-card__tab">
                                <a>Характеристики товара</a>
                            </li>
                            <li class="product-card__tab">
                                <a>Оплата и Доставка</a>
                            </li>
                        </ul>

                        <div class="product-card__tab-content faded">

                            <form class="product-card__materials" action="#">

                                <fieldset class="product-card__materials-item">
                                    <label for="wood-type">Тип дерева:</label>
                                    <select name="wood-type" id="wood-type">
                                        <option value="oak" data-class="oak">Дуб</option>
                                        <option value="pine" data-class="pine">Сосна</option>ы
                                    </select>
                                </fieldset>

                                <fieldset class="product-card__materials-item">
                                    <label for="wood-color">Цвет дерева:</label>
                                    <select name="wood-color" id="wood-color">
                                        <option value="venge" data-class="venge">Венге</option>
                                        <option value="mahogany" data-class="mahogany">Красное дерево</option>
                                        <option value="walnut" data-class="walnut">Орех</option>
                                    </select>
                                </fieldset>

                                <fieldset class="product-card__materials-item">
                                    <label for="metal-color">Цвет металла:</label>
                                    <select name="metal-color" id="metal-color">
                                        <option value="antique-brass" data-class="antique-brass">Античная латунь
                                        </option>
                                        <option value="copper" data-class="copper">Медь</option>
                                        <option value="black-nickel" data-class="black-nickel">Черный никель</option>
                                    </select>
                                </fieldset>

                                <fieldset class="product-card__materials-item">
                                    <label for="moss-color">Цвет мха:</label>
                                    <select name="moss-color" id="moss-color">
                                        <option value="antique-brass" data-class="antique-brass">1</option>
                                        <option value="copper" data-class="copper">2</option>
                                        <option value="black-nickel" data-class="black-nickel">3</option>
                                    </select>
                                </fieldset>

                            </form>

                            <p class="product-card__materials-description">
                                Повседневная практика показывает, что начало повседневной работы по формированию позиции
                                требуют определения и уточнения направлений прогрессивного развития. Идейные высшего
                                порядка, а также постоянное информационно-пропагандистское обеспечение нашей
                                деятельности
                                требуют
                            </p>

                        </div>

                        <div class="product-card__tab-content faded">
                            <ul class="product-card__features">
                                <li class="product-card__features-item">
                                    <div class="product-card__features-name">
                                        Ширина:
                                    </div>
                                    <div class="product-card__features-value">
                                        242 см
                                    </div>
                                </li>
                                <li class="product-card__features-item">
                                    <div class="product-card__features-name">
                                        Глубина
                                    </div>
                                    <div class="product-card__features-value">
                                        97 см
                                    </div>
                                </li>
                                <li class="product-card__features-item">
                                    <div class="product-card__features-name">
                                        Высота
                                    </div>
                                    <div class="product-card__features-value">
                                        75 см
                                    </div>
                                </li>
                                <li class="product-card__features-item">
                                    <div class="product-card__features-name">
                                        Высота спинки
                                    </div>
                                    <div class="product-card__features-value">
                                        36 см
                                    </div>
                                </li>
                                <li class="product-card__features-item">
                                    <div class="product-card__features-name">
                                        Высота подлокотников
                                    </div>
                                    <div class="product-card__features-value">
                                        75 см
                                    </div>
                                </li>
                                <li class="product-card__features-item">
                                    <div class="product-card__features-name">
                                        Материал каркаса
                                    </div>
                                    <div class="product-card__features-value">
                                        Лиственница
                                    </div>
                                </li>
                                <li class="product-card__features-item">
                                    <div class="product-card__features-name">
                                        Высота сиденья
                                    </div>
                                    <div class="product-card__features-value">
                                        43 см
                                    </div>
                                </li>
                                <li class="product-card__features-item">
                                    <div class="product-card__features-name">
                                        Глубина сиденья
                                    </div>
                                    <div class="product-card__features-value">
                                        58 см
                                    </div>
                                </li>
                                <li class="product-card__features-item">
                                    <div class="product-card__features-name">
                                        Высота ножек
                                    </div>
                                    <div class="product-card__features-value">
                                        8 см
                                    </div>
                                </li>
                                <li class="product-card__features-item">
                                    <div class="product-card__features-name">
                                        Вес в упаковке
                                    </div>
                                    <div class="product-card__features-value">
                                        90.17 кг
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="product-card__tab-content faded">
                            <p class="product-card__tab-paragraph">
                                Оплата: возможна пластиковыми картами, банковским переводом, наличными; на сайте, в
                                наших
                                магазинах, при получении доставки.
                            </p>
                            <p class="product-card__tab-paragraph">
                                Доставка: возможна по всей территории Российской Федерации. Осуществляется в ближайшие
                                дни
                                после покупки. Наш ассортимент очень разнообразен по весу и объему, поэтому стоимость и
                                сроки доставки необходимо уточнять у сотрудников магазинов.
                            </p>
                            <a class="product-card__tab-link" href="javascript:void(0)">Подробнее о Доставке и
                                Оплате</a>
                        </div>
                    </div>

                    <div class="product-card__order">
                        <button class="btn btn-order">В КОРЗИНУ</button>
                        <div class="product-card__order-price">
                            от 14 000 ₽
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="popular">
        <div class="container">
            <h3 class="title title-section">
                C ЭТИМ ТОВАРОМ ЧАСТО ПРОСМАТРИВАЮТ
            </h3>
            <div class="popular__products products">
                <div class="products__small small">
                    <div class="small__card hvr-grow">
                      <img class="small__img" 
                      src="assets/img/catalog/storage/console/portland/portland01.webp" 
                      srcset="assets/img/catalog/storage/console/portland/portland01.webp 200w, 
                              assets/img/catalog/storage/console/portland/portland01@2x.webp 400w,
                              assets/img/catalog/storage/console/portland/portland01@3x.webp 600w"
                      sizes="(min-width: 320px) 290px,
                             (min-width: 375px) 345px,
                             (min-width: 425px) 395px" 
                      alt="small-product-card">
                      <div class="small__name">PORTLAND</div>
                      <div>
                        <div class="small__type">Стеллаж</div>
                        <div class="small__price">от 16 000 ₽</div>
                      </div>
                    </div>
                    <div class="small__card hvr-grow">
                      <img class="small__img" 
                      src="assets/img/catalog/storage/table/louiseville/louiseville01.webp" 
                      srcset="assets/img/catalog/storage/table/louisville/louisville01.webp 200w, 
                              assets/img/catalog/storage/table/louiseville/louiseville01@2x.webp 400w,
                              assets/img/catalog/storage/table/louiseville/louiseville01@3x.webp 600w"
                      sizes="(min-width: 320px) 290px,
                             (min-width: 375px) 345px,
                             (min-width: 425px) 395px"  
                      alt="small-prouct-card">
                      <div class="small__name">LOUISVILLE</div>
                      <div>
                        <div class="small__type">Тумба прикроватная</div>
                        <div class="small__price">от 9 000 ₽</div>
                      </div>
                    </div>
                    <div class="small__card hvr-grow">
                      <img class="small__img" 
                      src="assets/img/catalog/seats/san-diego/san-diego01.webp" 
                      srcset="assets/img/catalog/seats/san-diego/san-diego01.webp 200w, 
                              assets/img/catalog/seats/san-diego/san-diego01@2x.webp 400w,
                              assets/img/catalog/seats/san-diego/san-diego01@3x.webp 600w"
                      sizes="(min-width: 320px) 290px,
                             (min-width: 375px) 345px,
                             (min-width: 425px) 395px" 
                      alt="small-card">
                      <div class="small__name">SAN-DIEGO</div>
                      <div>
                        <div class="small__type">Барный стул</div>
                        <div class="small__price">от 10 000 ₽</div>
                      </div>
                    </div>
                    <div class="small__card hvr-grow">
                      <img class="small__img" 
                      src="assets/img/catalog/storage/console/san-antonio/san-antonio01.webp" 
                      srcset="assets/img/catalog/storage/console/san-antonio/san-antonio01.webp 200w, 
                      assets/img/catalog/storage/console/san-antonio/san-antonio01@2x.webp 400w,
                      assets/img/catalog/storage/console/san-antonio/san-antonio01@3x.webp 600w"
                      sizes="(min-width: 320px) 290px,
                             (min-width: 375px) 345px,
                             (min-width: 425px) 395px" 
                      alt="small-card">
                      <div class="small__name">SAN-ANTONIO</div>
                      <div>
                        <div class="small__type">Cтеллаж</div>
                        <div class="small__price">от 12 000 ₽</div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </section>

<?php
get_sidebar();
get_footer();
