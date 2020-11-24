<div style="background-color: #00304E;">
    <br>
    <div class="container">
        <div style="background-color: #CCCCFF;">
            <div class="container">
                <h1>REGISTRO</h1>
                <br>
                <form action="<?php echo base_url() ?>/registro/addweb_tienda" method="post">
                    <div class="form-group">
                        <label for="nombre">NOMBRE</label>
                        <input type="text" name="nombre" id="nombre" autocomplete="off" class="form-control" required placeholder="Digite nombre ">
                    </div>
                    <div class="form-group">
                        <label for="apellido">APELLIDO</label>
                        <input type="text" name="apellido" id="apellido" autocomplete="off" class="form-control" required placeholder="Digite apellido">
                    </div>
                    <div class="form-group">
                        <label for="documento">DOCUMENTO</label>
                        <input type="text" name="documento" id="documento" autocomplete="off" class="form-control" required placeholder="Digite documento">
                    </div>

                    <div class="form-group">
                        <label for="contraseña">CONTRASEÑA</label>
                        <input type="text" name="contraseña" id="contraseña" autocomplete="off" class="form-control" required placeholder="Digite su contraseña">
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
                            <label class="form-check-label" for="invalidCheck3">
                                Acepta terminos y condiciones
                            </label>
                            <div class="invalid-feedback">
                                Usted debe estar de acuerdo antes de guardar
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="boton"></label>
                        <button name="boton" id="boton" class="btn btn-info">GUARDAR</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br>
</div>

