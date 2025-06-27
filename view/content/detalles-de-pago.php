<div class="container-carrito">
    <div class="center-flex flex-around carrito-btns">
        <button class="btn ">Bolsa de compras</button>
        <button class="btn ">Detalles de pago</button>
        <button class="btn ">Metodo de pago</button>
    </div>
    <div class="carrito-info" style="margin-top: 30px;">
        <div class="cont-dp">
            <p>Datos Personales</p>
            <div class="cont-dp-input">
                <div class="input-2">
                    <div class="input-form">
                        <label for="Nombres">Nombres</label>
                        <input type="text" name="Nombres" id="Nombres">
                    </div>
                    <div class="input-form">
                        <label for="Apellidos">Apellidos</label>
                        <input type="text" name="Apellidos" id="Apellidos">
                    </div>
                </div>
                <div class="input-2">
                    <div class="input-form">
                        <label for="Telefono">Teléfono</label>
                        <input type="number" name="Telefono" id="Telefono">
                    </div>
                    <div class="input-form">
                        <label for="Correo">Correo</label>
                        <input type="email" name="Correo" id="Correo">
                    </div>
                </div>
                <div class="input-3">
                    <div class="input-form">
                        <label for="Departamento">Departamento</label>
                        <select name="Departamento" id="Departamento">
                            <option value="">Seleccione</option>
                            <option value="1">Departamento 1</option>
                            <option value="2">Departamento 2</option>
                            <option value="3">Departamento 3</option>
                        </select>
                    </div>
                    <div class="input-form">
                        <label for="Provincia">Provincia</label>
                        <select name="Provincia" id="Provincia">
                            <option value="">Seleccione</option>
                            <option value="1">Provincia 1</option>
                            <option value="2">Provincia 2</option>
                            <option value="3">Provincia 3</option>
                        </select>
                    </div>
                    <div class="input-form">
                        <label for="Distrito">Distrito</label>
                        <select name="Distrito" id="Distrito">
                            <option value="">Seleccione</option>
                            <option value="1">Distrito 1</option>
                            <option value="2">Distrito 2</option>
                            <option value="3">Distrito 3</option>
                        </select>
                    </div>
                </div>
                <div class="input-1">
                    <div class="input-form">
                        <label for="Direccion">Dirección</label>
                        <input type="text" name="Direccion" id="Direccion">
                    </div>
                </div>
                <div class="input-1">
                    <div class="input-form">
                        <label for="Referencia">Referencia de dirección</label>
                        <input type="text" name="Referencia" id="Referencia">
                    </div>
                </div>
            </div>
        </div>
        <div class="cont-rp">
            <p class="title">Resumen de pedido</p>
            <div class="tabla-resumen">
                <table id="TableResumen" class="display">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Descripción</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="<?php echo SERVERURL . 'view/assets/img/addreciente/1484-2067847-430x491.jpg' ?>" width="100" height="100"></td>
                            <td class="tb-resumen">
                                <div class="nameproducto">
                                    <p>MORRAL EN CUERO SUAVE Y COLORES DE PRIMAVERA</p>
                                </div>
                                <div class="center-flex info-nameproducto">
                                    <div class="color">
                                        <p>Color: Negro</p>
                                    </div>
                                    <div class="cantidad">
                                        <span>2</span>
                                    </div>
                                </div>
                            </td>
                            <td>S/ 1300.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="separador"></div>
            <div class="carrito_precio_total">
                <p class="">
                    <span>Subtotal</span>
                    <span>S/ 1300.00</span>
                </p>
                <div class="separador"></div>
                <p class="">
                    <span>Envío</span>
                    <span>Gratis</span>
                </p>
                <div class="separador"></div>
                <p class="">
                    <span>Total</span>
                    <span>S/ 1300.00</span>
                </p>
                <div class="separador"></div>
            </div>
            <button type="submit" class="btn btn-carrito-pagar">
                Continuar con pago
            </button>
        </div>
    </div>
</div>