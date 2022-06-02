<h2 class="form__titulo">Datos personales</h2>
<div class="form__d_f">
    <div class="form__100">
        <label for="fname" class="form__label">Nombre completo:</label><br>
        <input type="text" class="form__input" name="form_name" id="form-name" min="6" max="100"><br>
    </div>
    <div class="form__50">
        <label for="fname" class="form__label">Edad:</label><br>
        <input type="number" class="form__input" name="form_edad" id="form-edad" min="6" max="100">
    </div>
    <div class="form__50">
        <label for="fname" class="form__label">WhatsApp:</label><br>
        <input type="tel" class="form__input" name="form_num" id="form-num" min="6" max="100"
            placeholder="(10 dígitos)"><br>
    </div>
    <div class="form__50">
        <label for="fname" class="form__label">E-mail:</label><br>
        <input type="email" class="form__input" name="form_email" id="form-email" min="6" max="100"
            placeholder="correo@servidor.com"><br>
    </div>
    <div class="form__50">
        <label for="fname" class="form__label">Facebook:</label><br>
        <input type="url" class="form__input" name="form_face" id="form-face" min="6" max="100"
            value="https://facebook.com/" placeholder="https://facebook.com/"><br>
    </div>
    <div class="form__100">
        <label for="fname" class="form__label">Domicilio:</label><br>
        <input type="text" class="form__input" name="form_dom" id="form-dom" min="6" max="100"><br>
    </div>
</div>
<h2 class="form__titulo">Datos académicos</h2>
<div class="form__d_f">
    <div class="form__50">
        <label for="fname" class="form__label">¿A qué universidad deseas ingresar?</label><br>
        <div class="form__selector">
            <select type="search" class="form__input" name="form_uni" id="form-uni" min="6" max="100">
                <option value=null>---Selecciona---</option>
                @foreach ($universidades as $universidad )
                    <option value="{{$universidad->id}}">{{$universidad->nombre}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form__50">
        <label for="fname" class="form__label">¿A qué carrera deseas ingresar?</label><br>
        <input type="text" class="form__input" name="form_carrera" id="form-carrera" min="6" max="100"><br>
    </div>
    <div class="form__100">
        <label for="fname" class="form__label">Escuela de procedencia:</label><br>
        <input type="text" class="form__input" name="form_escuela" id="form-escuela" min="6" max="100"><br>
    </div>
    <div class="form__100">
        <label for="fname" class="form__label">¿Qué horario te interesa?</label><br>
        <div class="form__selector">
            <select type="text" class="form__input" name="form_horario" id="form-horario" min="6" max="100">
                <option>---Selecciona---</option>
                <option value="Matutino">Matutino (de 9:00 AM a 12:00 PM)</option>
                <option value="Vespertino">Vespertino (de 4:00 PM a 7:00 PM)</option>
                <option value="Sabatino">Sabatino (de 8:00 AM a 4:00 PM)</option>
            </select>
        </div>
    </div>
    <div class="form__100">
        <label for="fname" class="form__label">Cuéntanos ¿Por qué quieres ingresar a la universidad?</label><br>
        <textarea type="text" class="form__input" name="form_cuentanos" id="form-cuentanos" min="6" max="100"></textarea>
    </div>
</div>
<h2 class="form__titulo">Datos de referencia</h2>
<div class="form__d_f">
    <div class="form__100">
        <label for="fname" class="form__label">¿Cómo supiste de Thinkers?</label><br>
        <input type="text" class="form__input" name="form_csdt" id="form-csdt" min="6" max="100"><br>
    </div>
    <div class="form__50">
        <label for="fname" class="form__label">Nombre de tu padre o tutor:</label><br>
        <input type="text" class="form__input" name="form_name_padre" id="form-name_padre" min="6" max="100"><br>
    </div>
    <div class="form__50">
        <label for="fname" class="form__label">Celular de tu padre o tutor:</label><br>
        <input type="tel" class="form__input" name="form_tel_padre" id="form-tel_padre" min="6" max="100"><br>
    </div>
</div>
<div class="form__acuerdo">
    <label for="fname" class="form__label">Acuerdo legal:</label><br>
    <span class="form__option">
        <input type="checkbox" class="form__input_check" name="form_check" id="form-check">
        <label for="fname" class="form__label_check">Al enviar mi ficha, acepto la <a target="blank"
                href="https://thinkersmx.com/politica-privacidad">Política de Privacidad</a>, así como los <a
                target="blank" href="https://thinkersmx.com/terminos-y-condiciones/">Términos y Condiciones</a> de
            Thinkers.</label>
    </span>
</div>



<!-- <script src="../public/js/main.js"></script> -->
