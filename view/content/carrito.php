<div class="container-carrito">
    <div class="center-flex flex-around carrito-btns">
        <button class="btn ">Bolsa de compras</button>
        <button class="btn ">Detalles de pago</button>
        <button class="btn ">Metodo de pago</button>
    </div>
    <div class="carrito-info" style="margin-top: 30px;">
        <div class="carrito-items">
            <h2>Productos en bolsa</h2>
            <table id="myTable" class="display">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Descripción</th>
                        <th>Precio unitario</th>
                        <th>Cantidad</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="<?php echo SERVERURL . 'view/assets/img/addreciente/1484-2067847-430x491.jpg' ?>" width="100" height="100"></td>
                        <td>MORRAL EN CUERO SUAVE Y COLORES DE PRIMAVERA</td>
                        <td>S/ 650.00</td>
                        <td>
                            <div class="quantity">
                                <input type="button" value="-" class="minus">
                                <label class="screen-reader-text">Naomi 4411 cantidad</label>
                                <input type="number" class="input-text qty text" value="1" aria-label="Cantidad de productos" min="1" max="20" name="cart" step="1" placeholder="" inputmode="numeric" autocomplete="off">
                                <input type="button" value="+" class="plus">
                            </div>
                        </td>
                        <td>S/ 1300.00</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="carrito-precio">
            <div class="title-carrito_precio">
                <p>TOTAL DE LA BOLSA</p>
            </div>
            <div class="carrito_precio_total">
                <p class="">
                    <span>Subtotal</span>
                    <span>S/ 1300.00</span>
                </p>
                <div class="separador"></div>
                <p class="">
                    <span>Total</span>
                    <span>S/ 1300.00</span>
                </p>
            </div>
            <button type="submit" class="btn btn-carrito-pagar">
                Continuar
            </button>
        </div>
    </div>
</div>