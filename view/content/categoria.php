<!-- Inicio banner Categoria -->
<div class="banner-categoria">
    <img class="img_banner-categoria" src="<?php echo SERVERURL . 'view/assets/img/categoria/banner/banner_categoria.jpg' ?>" alt="">
</div>
<!-- Fin banner Categoria -->

<!-- Inicio contenido (filtros y productos) Categoria -->
<div class="container-sec-categorias">
    <div class="container-filtros">
        <div class="btn-filtros">
            <div class="icon">
                <img src="<?php echo SERVERURL . 'view/assets/img/svg/filtro.svg' ?>" alt="">
            </div>
            <div class="subtitle-filtros">
                <p class="filtros-text">Filtros</p>
            </div>
        </div>
        <div class="separador"></div>
        <div class="cont-ordenar-por">
            <div class="cont-ordenar-por-lbl">
                <label class="ordenar-por-lbl lbl-filtro" for="odenarpor">Ordenar por</label>
            </div>
            <div class="cont-ordenar-por-select">
                <select name="" id="" class="ordenar-por-select">
                    <option value="0">Por defecto</option>
                    <option value="1">De mayor a menor precio</option>
                    <option value="2">De menor a mayor precio</option>
                </select>
            </div>
        </div>
        <div class="separador"></div>
        <div class="cont-rango-precio">
            <div class="rango-precior-por-lbl">
                <label class="rango-precio-lbl lbl-filtro" for="rangoprecio">Rango de precio</label>
            </div>
            <div class="rango-precior-por-select">
                <div class="wrapper">
                    <div class="multi-range-slider">
                        <input type="range" class="input-left" min="50" max="500" value="100">
                        <input type="range" class="input-right" min="50" max="500" value="250">
                        <div class="slider-range">
                            <div class="track"></div>
                            <div class="range"></div>
                        </div>
                    </div>
                    <div class="price__wrapper">
                        <span class="price-from">50</span>
                        <span class="price-to">500</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="separador"></div>
        <div class="cont-colores">
            <div class="cont-colores-lbl">
                <label class="colores-lbl lbl-filtro" for="colores">Colores</label>
            </div>
            <div class="cont-list-colores">
                <div class="list-color" style="background-color: #F57734;"></div>
                <div class="list-color" style="background-color: #333333;"></div>
                <div class="list-color" style="background-color: #9F3355;"></div>
                <div class="list-color" style="background-color: #90D034;"></div>
                <div class="list-color" style="background-color: #D75B41;"></div>
            </div>
        </div>
        <div class="separador"></div>
    </div>
    <div class="container-filtros-mobile">
        <div class="content-m-filtros-title">
            <div class="m-filtros-title">
                <p class="lbl-filtro">Filtros</p>
            </div>
            <div class="m-filtros-close">
                <a href="">
                    <img src="<?php echo SERVERURL.'view/assets/img/svg/close.svg' ?>" alt="">
                </a>
            </div>
        </div>
        <div class="separador"></div>
        <div class="cont-ordenar-por">
            <div class="cont-ordenar-por-lbl">
                <label class="ordenar-por-lbl lbl-filtro" for="odenarpor">Ordenar por</label>
            </div>
            <div class="cont-ordenar-por-select">
                <select name="" id="" class="ordenar-por-select">
                    <option value="0">Por defecto</option>
                    <option value="1">De mayor a menor precio</option>
                    <option value="2">De menor a mayor precio</option>
                </select>
            </div>
        </div>
        <div class="separador"></div>
        <div class="cont-rango-precio">
            <div class="rango-precior-por-lbl">
                <label class="rango-precio-lbl lbl-filtro" for="rangoprecio">Rango de precio</label>
            </div>
            <div class="rango-precior-por-select">
                <div class="wrapper">
                    <div class="multi-range-slider">
                        <input type="range" class="input-left" min="50" max="500" value="100">
                        <input type="range" class="input-right" min="50" max="500" value="250">
                        <div class="slider-range">
                            <div class="track"></div>
                            <div class="range"></div>
                        </div>
                    </div>
                    <div class="price__wrapper">
                        <span class="price-from">50</span>
                        <span class="price-to">500</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="separador"></div>
        <div class="cont-colores">
            <div class="cont-colores-lbl">
                <label class="colores-lbl lbl-filtro" for="colores">Colores</label>
            </div>
            <div class="cont-list-colores">
                <div class="list-color" style="background-color: #F57734;"></div>
                <div class="list-color" style="background-color: #333333;"></div>
                <div class="list-color" style="background-color: #9F3355;"></div>
                <div class="list-color" style="background-color: #90D034;"></div>
                <div class="list-color" style="background-color: #D75B41;"></div>
            </div>
        </div>
        <div class="separador"></div>
    </div>
    <div class="content-productos-categorias" id="productos-filtrados-categorias">
        <div class="productos_categorias">
            <div class="producto-categoria">
                <div class="prod-cat-image">
                    <a href="">
                        <img src="<?php echo SERVERURL.'view/assets/img/addreciente/1484-2067847-430x491.jpg' ?>">
                    </a>
                </div>
                <div class="prod-cat-desc">
                    <div class="prod-cat-desc-nombre">
                        <a href="#">Cartera 1234</a>
                    </div>
                    <div class="prod-cat-desc-precio">
                        <p class="prod-car-desc-precio-p">S/ 250.00</p>
                    </div>
                </div>
                <div class="btn-prod-cat-add">
                    <div class="btn-add">
                        <a href="" class="btn-add-a">Añadir a la bolsa</a>
                    </div>
                </div>
            </div>
            <div class="producto-categoria">
                <div class="prod-cat-image">
                    <a href="">
                        <img src="<?php echo SERVERURL.'view/assets/img/addreciente/1484-2067847-430x491.jpg' ?>">
                    </a>
                </div>
                <div class="prod-cat-desc">
                    <div class="prod-cat-desc-nombre">
                        <a href="#">Cartera 1234</a>
                    </div>
                    <div class="prod-cat-desc-precio">
                        <p class="prod-car-desc-precio-p">S/ 250.00</p>
                    </div>
                </div>
                <div class="btn-prod-cat-add">
                    <div class="btn-add">
                        <a href="" class="btn-add-a">Añadir a la bolsa</a>
                    </div>
                </div>
            </div>
            <div class="producto-categoria">
                <div class="prod-cat-image">
                    <a href="">
                        <img src="<?php echo SERVERURL.'view/assets/img/addreciente/1484-2067847-430x491.jpg' ?>">
                    </a>
                </div>
                <div class="prod-cat-desc">
                    <div class="prod-cat-desc-nombre">
                        <a href="#">Cartera 1234</a>
                    </div>
                    <div class="prod-cat-desc-precio">
                        <p class="prod-car-desc-precio-p">S/ 250.00</p>
                    </div>
                </div>
                <div class="btn-prod-cat-add">
                    <div class="btn-add">
                        <a href="" class="btn-add-a">Añadir a la bolsa</a>
                    </div>
                </div>
            </div>
            <div class="producto-categoria">
                <div class="prod-cat-image">
                    <a href="">
                        <img src="<?php echo SERVERURL.'view/assets/img/addreciente/1484-2067847-430x491.jpg' ?>">
                    </a>
                </div>
                <div class="prod-cat-desc">
                    <div class="prod-cat-desc-nombre">
                        <a href="#">Cartera 1234</a>
                    </div>
                    <div class="prod-cat-desc-precio">
                        <p class="prod-car-desc-precio-p">S/ 250.00</p>
                    </div>
                </div>
                <div class="btn-prod-cat-add">
                    <div class="btn-add">
                        <a href="" class="btn-add-a">Añadir a la bolsa</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>