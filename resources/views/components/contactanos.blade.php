<section class="conten">
    <h2 class="title">Contactanos </h2>
    <div class="contact-grup">
        <div class="contact-info">
            <p>Puede contactarse con notro via telefonica, correo o visitando nuestra oficina. </p>
            <div class="info">
                <div>
                    <img src="{{ asset('icons/gmail.svg') }}" alt="gmail"> Correo:
                    <p>administracion@Frontline.com</p>
                </div>
                <div>
                    <img src="{{ asset('icons/location.svg') }}" alt="local" >Dirrecion:
                    <p>Albornoz sector campoelias mz A lot 5</p>
                </div>
                <div>
                    <img src="{{ asset('icons/phone.svg') }}" alt="telefono">Telefono:
                    <p>+57 3217717983</p>
                </div>
            </div>

            <p>Frontline Soluciones </p>

        </div>
            <div class="contact-form">
                <form action="">
                <div class="input-dat" >
                    <input  type="text" required="required">
                    <span> *nombre </span>
                </div>
                <div class="input-dat"  >
                    <input  type="text" required="required">
                    <span> *asunto</span>
                </div>
                <div class="input-dat-flex">
                    <input type="text" required="required">
                    <span> *Gmail</span>
                </div>
                {{-- <div class="input-dat-flex">
                    <input type="text" required="required" >
                    <span> direccion </span>
                </div> --}}
                <div class="input-dat-flex" >
                    <textarea type="text" required cols="24" rows="6" ></textarea>
                    <span> Comentario </span>
                </div>
                <div class="button mb-4">
                    {{-- <button  class="btn1" type="button">Enviar</button> --}}
                    <input type="button" value="Enviar" class="btn1">
                </div>
            </form>

            </div>


    </div>

</section>
