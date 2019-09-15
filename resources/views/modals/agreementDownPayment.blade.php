<div class="modal fade" id="ModalAgreements" tabindex="-1" role="dialog" aria-labelledby="modalAgreementPurchase" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content" id="modalAgreementsContent">
            <div class='modal-header'>
                <h2 class='modal-title'></h2>
                <button class='close' type='button' data-dismiss='modal' aria-label='Close'>
                    <span aria-hidden='true'>×</span>
                </button>
            </div>
            <div class='modal-body' id='AgreementContrato'>
                <a class='sidebar-brand d-flex paddingModal' href='/' id='agreementLogo'>
                    <div class='sidebar-brand-icon rotate-n-15'>
                        <img src='https://cashmarkets.es/img/logo.png' class='img-responsive my-2 mx-2' width='60px' height='60px' />
                    </div>
                    <div class='sidebar-brand-text mx-7'><span class='mLogo'>C</span>ash <span class='mLogo'>M</span>arket</div>
                </a>
                <p>En Calle Ayala n&uacute;mero 33 bajo,
                    <br /> Don Benito (Badajoz)
                    <br />Movil: &Tab;642 760 330
                    <br /> Fijo: &Tab;924 983 400
                    <br />
                </p>
                <p>
                    <strong>REUNIDOS A <label class="created"></label> </strong>
                </p>
                <p>
                    De una parte, Don
                    <strong>
                        <span class='textposition'> <label class="names"></label> </span>
                    </strong>
                    mayor de edad, con domicilio en
                    <strong><label class="address"></label></strong>,
                    con documento nacional de identidad n&uacute;mero
                    <strong> <label class="dni"></label> " 'VENDEDOR',</strong>
                    y de la otra parte, Don
                    <strong> Cash Market</strong>, domiciliado en
                    <strong> Calle Ayala n&uacute;mero 33 bajo </strong> con NIF n&uacute;mero
                    <strong>34953215T, 'COMPRADOR'.</strong>
                </p>
                <br />
                <p class='textposition'>EXPONEN </p>
                <br />
                <p>
                    <span class='tex-parrafo2'>I.-</span>
                    Que (Don <strong><span class='textposition'> <label class="names"></label> </span> </strong> /S.A., S.L., etc.)
                    Con n&uacute;mero de telefono <strong><label class="mobile"></label></strong>
                    es propietario de los <span class='tex-parrafo1'>productos:
                        <br />
                        <br />
                        <label class="productsTable"></label>
                        <br />(bienes objeto del contrato), por t&iacute;tulo de compraventa, por el cual se pagara la suma total de <strong> <label class="total"></label> &euro;</strong></p>
                <p><span class='tex-parrafo2'>II.- </span>Que Don <strong>Cash Market </strong> tiene inter&eacute;s en adquirir los bienes descritos en el ordinal precedente.</p>
                <p><span class='tex-parrafo2'>III.- </span>Que por ello ambas partes,</p>
                <p><strong>ACUERDAN </strong></p>
                <p>Llevar a efecto el presente contrato de COMPRAVENTA MERCANTIL.</p>
                <p>Firmando en conformidad.</p>
                <div class='row'>
                    <div class='col-md-6'>
                        <div id='signatureDiv'>
                            <img id='signatureImage' height='150px' width='300px' src='https://cashmarkets.es/img/firma-digital.png' /><br />
                            Firma:. <label class="names"></label><br />
                        </div>
                    </div>
                    <div class='col-md-6'>
                        <div id='signatureDiv'>
                            <img src='img/firmaFernando.png' height='150px' width='300px' /><br />
                            Firma:. Fernando Gonzalez<br />
                        </div>
                    </div>
                </div>
            </div>

            <div class='modal-footer' id='modalAgreementsFooter'>
                <button class='btn btn-secondary' type='button' data-dismiss='modal'>Cancelar</button>
                <!-- boton de capturar firma -->
                <a class='btn btn-primary' id='printAgreementButton' href='#' onclick='printDocument(this)'>Imprimir</a>
            </div>
        </div>
    </div>
</div>

<script>
    function printDocument(divThis) {
        var ventana = window.open("", "", "");
        var contenido = "<head>" +
            "<link href='https://39027243.servicio-online.net/css/backGeneral/sb-admin.css' rel='stylesheet'>" +
            "<link href='https://39027243.servicio-online.net/vendor/fontawesome-free/css/all.min.css' rel='stylesheet' type='text/css'>" +
            '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">' +
            "<link href='https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i' rel='stylesheet'>" +
            "</head><body onload='window.print();close();'>";
        contenido = contenido + $("#AgreementContrato").html() + "</body></html>";
        ventana.document.open();
        ventana.document.write(contenido);
        ventana.document.close();
    }
</script>
