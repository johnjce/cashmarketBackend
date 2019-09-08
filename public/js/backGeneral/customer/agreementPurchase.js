$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

var agreementId = Math.floor(Math.random() * (4000 - 100 + 1)) + 100;
var agreementPurchase = new Map();
var tablePurchase = document.getElementById("tablePurchase");
var i = 0;

function enableSubmit(idButton) {
    $(idButton).removeAttr("disabled");
}

function disableSubmit(idButton) {
    $(idButton).attr("disabled", true);
}

function checkInput(idInput) {
    return $(idInput).val() != "" ? true : false;
}

function checkInputNumber(idInput) {
    var patt = new RegExp("[^0-9]");
    return checkInput(idInput) ? !patt.test($(idInput).val()) : false;
}

function delRow(idA, id) {
    agreementPurchase.delete(id);
    tablePurchase.deleteRow(idA);
    agreementPurchase.size > 0 ? enableSubmit("#buttonAddAgreement") : disableSubmit("#buttonAddAgreement");
}

$("#buttonAddProduct").click(function () {
    event.preventDefault();

    video.pause();
    let contexto = canvasproducPicture.getContext("2d");
    canvasproducPicture.width = video.videoWidth;
    canvasproducPicture.height = video.videoHeight;
    contexto.drawImage(video, 0, 0, canvasproducPicture.width, canvasproducPicture.height);
    let productImage = canvasproducPicture.toDataURL();
    // let signaturePicture = signaturePictureCanvas.toDataURL();

    video.play();



    enableSubmit("#buttonAddAgreement");
    var product = new Map();
    product.set("make", $("#make").val());
    product.set("model", $("#model").val());
    product.set("sn", $("#sn").val());
    product.set("type", $("select[name=type]").val());
    product.set("pricePurchase", $("#pricePurchase").val());
    product.set("priceSale", $("#priceSale").val());
    product.set("stock", $("#stock").val());
    product.set("state", $("select[name=state]").val());
    product.set("productImage", encodeURIComponent(productImage));
    agreementPurchase.set(i, product);

    var row = tablePurchase.insertRow(1);
    row.insertCell(0).innerHTML = $("#make").val();
    row.insertCell(1).innerHTML = $("#model").val();
    row.insertCell(2).innerHTML = $("#stock").val();
    row.insertCell(3).innerHTML = $("#pricePurchase").val() + "&euro;";
    row.insertCell(4).innerHTML = $("#stock").val() * $("#pricePurchase").val() + "&euro;";
    row.insertCell(5).innerHTML = "<button type=\"button\" class=\"btn btn-success\" onclick=\"delRow(this.parentNode.parentNode.rowIndex, " + i + ")\"><i class=\"far fa-trash-alt\"></i></button>";
    i++;

    $("#make").val("");
    $("#model").val("");
    $("#sn").val("");
    $("#stock").val(1);
    $("#pricePurchase").val("");
    $("#priceSale").val("");

    disableSubmit("#buttonAddProduct");


});

var postProducts = "{";
function toString(value, key) {
    tablePurchase.deleteRow(1);
    postProducts += "\"" + key + "\":{";
    value.forEach(sendProducts);
    postProducts = postProducts.substring(0, postProducts.length - 1);
    postProducts += "},";
}

function sendProducts(value, key, map) {
    postProducts += `"${key}":"${value}",`;
}

$("#buttonAddAgreement").click(function () {
    event.preventDefault();
    if ($("#IDCL").val() == null) {
        document.querySelector('#message').innerHTML = "<div class='alert alert-danger alert-dismissible fade show' role='alert'><strong>Error!</strong> Existe un problema, porfavor revise si selecciono un cliente e intentelo de nuevo.<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
        return false;
    }
    let names;
    let address;
    let dni;
    let telephone;
    var client = $.post("./customerSearch", { "q": $("#IDCL").val() });
    client.done(function (data) {
        var jdata = JSON.parse(data);
        var x = "";
        names = jdata[0].names + " " + jdata[0].lastname;
        address = jdata[0].address;
        dni = jdata[0].dni;
        telephone = jdata[0].telephone;

    });

    agreementPurchase.forEach(toString);
    postProducts = postProducts.substring(0, postProducts.length - 1);
    postProducts += "}";
    var posting = $.post("./savePurchase", {
        "products": jQuery.parseJSON(postProducts),
        "IDCL": $("#IDCL").val(),
        "total": 145
    });
    posting.done(function (data) {
        $("#inputSearch").val("");
        document.querySelector('#customersResult').innerHTML = "";
        postProducts = "{";
        disableSubmit("#buttonAddAgreement");
        var currentdate = new Date();
        var datetime = currentdate.getDate() + "/"
            + (currentdate.getMonth() + 1) + "/"
            + currentdate.getFullYear() + " SIENDO LAS "
            + currentdate.getHours() + ":"
            + currentdate.getMinutes() + ":"
            + currentdate.getSeconds();

        let documento =
            "<div class='modal-header'>" +
            "        <h5 class='modal-title' id='exampleModalLabel'>Contrato de Compra</h5>" +
            "        <button class='close' type='button' data-dismiss='modal' aria-label='Close'>" +
            "            <span aria-hidden='true'>×</span>" +
            "        </button>" +
            "    </div>" +
            "    <div class='modal-body' id='Agreement{{ $purchase->documentoId }}'>" +
            "        <a class='sidebar-brand d-flex paddingModal' href='index.php' id='agreementLogo'>" +
            "            <div class='sidebar-brand-icon rotate-n-15'>" +
            "                <i class='fas fa-laugh-wink cLogo '></i>" +
            "            </div>" +
            "            <div class='sidebar-brand-text mx-7'><span class='mLogo'>C</span>ash <span class='mLogo'>M</span>arket</div>" +
            "        </a>" +
            "        <p>En Calle Ayala n&uacute;mero 33 bajo," +
            "            <br /> Don Benito (Badajoz) " +
            "            <br />Movil: &Tab;642 760 330 " +
            "            <br /> Fijo: &Tab;924 983 400 " +
            "            <br />" +
            "        </p>" +
            "        <p>" +
            "            <strong>REUNIDOS A " + datetime + "</strong>" +
            "        </p>" +
            "        <p>" +
            "            De una parte, Don" +
            "            <strong>" +
            "                <span class='textposition'>" + names + "</span>" +
            "            </strong>" +
            "            mayor de edad, con domicilio en " +
            "            <strong>" + address + "</strong>," +
            "            con documentoo nacional de identidad n&uacute;mero " +
            "            <strong>" + dni + " 'VENDEDOR',</strong>" +
            "            y de la otra parte, Don" +
            "            <strong> Cash Market</strong>, domiciliado en" +
            "            <strong> Calle Ayala n&uacute;mero 33 bajo </strong> con NIF n&uacute;mero " +
            "            <strong>34953215T, 'COMPRADOR'.</strong>" +
            "        </p>" +
            "        <br/>" +
            "        <p class='textposition'>EXPONEN </p>" +
            "        <br/>" +
            "        <p>" +
            "            <span class='tex-parrafo2'>I.-</span> " +
            "            Que (Don <strong><span class='textposition'>" + names + "</span> </strong> /S.A., S.L., etc.) " +
            "            Con n&uacute;mero de telefono <strong>" + telephone + " </strong>" +
            "            es propietario de los <span class='tex-parrafo1'>productos:" +
            "                <br />" +
            "                <br />" +
            "                <table width='100%' border='1' cellpadding='5' cellspacing='0' bordercolor='#3D3C2C'>" +
            "                    <tr>" +
            "                        <th></th>" +
            "                        <th>Marca</th>" +
            "                        <th>Modelo</th>" +
            "                        <th>S/N</th>" +
            "                        <th>Estado de<br />producto</th>" +
            "                        <th>Precio unidad</th>" +
            "                        <th>Cantidad</th>" +
            "                        <th>Total</th>" +
            "                    </tr>";
        let total = 0;
        for (var [key, product] of agreementPurchase) {
            i = key + 1;
            documento += "    <tr><td>" + i + "</td>";
            documento += "<td>" + agreementPurchase.get(key).get("make") + "</td>";
            documento += "<td>" + agreementPurchase.get(key).get("model") + "</td>";
            documento += "<td>" + agreementPurchase.get(key).get("sn") + "</td>";
            let state = agreementPurchase.get(key).get("state") == 1 ? "Nuevo" : "Segundamano";
            documento += "<td>" + state + "</td>";
            documento += "<td>" + agreementPurchase.get(key).get("pricePurchase") + "</td>";
            documento += "<td>" + agreementPurchase.get(key).get("stock") + "</td>";
            let productPrice = agreementPurchase.get(key).get("stock") * agreementPurchase.get(key).get("pricePurchase");
            documento += "<td>" + productPrice + "</td>";
            total += productPrice;
            document += "       </tr>";
        }
        documento +=
            "                </table>" +
            "                <br />(bienes objeto del contrato), por t&iacute;tulo de compraventa, por el cual se pagara la suma total de <strong>" + total + "&euro;</strong></p>" +
            "        <p><span class='tex-parrafo2'>II.- </span>Que Don <strong>Cash Market </strong> tiene inter&eacute;s en adquirir los bienes descritos en el ordinal precedente.</p>" +
            "        <p><span class='tex-parrafo2'>III.- </span>Que por ello ambas partes,</p>" +
            "        <p><strong>ACUERDAN </strong></p>" +
            "        <p>Llevar a efecto el presente contrato de COMPRAVENTA MERCANTIL.</p>" +
            "        <p>Firmando en conformidad.</p>" +
            "        <p>&nbsp;</p>" +
            "        <p>&nbsp;</p>" +

            "<div class='row'>" +
            "   <div class='col-md-6'>"+
            "       <div id='signatureDiv'>"+
            "           Firma" + names + ":<br />"+
            "           <img id='signatureImage' src='#' />"+
            "       </div>"+
            "   </div>"+
            "   <div class='col-md-6'>"+
            "       <div id='signatureDiv'>"+
            "           Firma Fernando Gonzalez:<br />"+
            "           <img src='img/firmaFernando.png' height='100px' height='50px' /></p>" +
            "       </div>"+
            "   </div>"+
            "</div>"+
            "    </div>" +

            "    <div class='modal-footer'>" +
            "    <button class='btn btn-secondary' type='button' data-dismiss='modal'>Cancelar</button>" +
            "    <!-- boton de capturar firma -->" +
            "    <a class='btn btn-primary' id='printAgreementButton' href='#' onclick='printDocument()'>Imprimir</a>" +
            '<div class="row">' +
            '<div class="col-md-6">' +
            '<button id="signButton" value="Firmar" class="btn btn-primary btn-lg ligth-text block" onClick="tabletDemo()">Firmar <i class="fas fa-signature"></i></button>' +
            '</div>' +
            "</div>";
        console.log(agreementPurchase);
        document.querySelector('#modalAgreementsContent').innerHTML = documento;
        document.querySelector('#message').innerHTML = "<div class='alert alert-success alert-dismissible fade show' role='alert'>" +
            "    <strong>Ok!</strong> Se creo correctamente el contrato. " +
            '<a href="#" data-toggle="modal" data-target="#ModalAgreements">' +
            '<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>' +
            'ver/firmar' +
            '</a>' +
            "    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>" +
            "        <span aria-hidden='true'>&times;</span>" +
            "    </button>" +
            "</div>";
        agreementPurchase = new Map();
    });
    posting.fail(function (data) {
        document.querySelector('#message').innerHTML = "<div class='alert alert-danger alert-dismissible fade show' role='alert'><strong>Error!</strong> Existe un problema, porfavor revise el formulario e intentelo de nuevo.<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
    });

});

$("#addProductForm *").on("change keydown keyup", function () {
    if (checkInput("#make") &&
        checkInput("#model") &&
        checkInput("#sn") &&
        checkInputNumber("#pricePurchase") &&
        checkInputNumber("#priceSale")) {
        enableSubmit("#buttonAddProduct");
    } else {
        disableSubmit("#buttonAddProduct");
    }
});

//de aqui para abajo la puta camara

function isUserMediaSupport() {
    return !!(navigator.getUserMedia || (navigator.mozGetUserMedia || navigator.mediaDevices.getUserMedia) || navigator.webkitGetUserMedia || navigator.msGetUserMedia)
}

function _getUserMedia() {
    return (navigator.getUserMedia || (navigator.mozGetUserMedia || navigator.mediaDevices.getUserMedia) || navigator.webkitGetUserMedia || navigator.msGetUserMedia).apply(navigator, arguments);
}

let video = document.querySelector("#video"),
    canvasproducPicture = document.querySelector("#canvasproducPicture"),
    deviceList = document.querySelector("#deviceList");

let setDeviceList = () => {
    navigator
        .mediaDevices
        .enumerateDevices()
        .then(function (devices) {
            let videoDevice = [];
            devices.forEach(function (dispositivo) {
                let tipo = dispositivo.kind;
                if (tipo === "videoinput") {
                    videoDevice.push(dispositivo);
                }
            });

            if (videoDevice.length > 0) {
                videoDevice.forEach(dispositivo => {
                    let option = document.createElement("option");
                    option.value = dispositivo.deviceId;
                    option.text = dispositivo.label;
                    deviceList.appendChild(option);
                });
            }
        });
}




(function () {
    if (!isUserMediaSupport()) {
        alert("Su navegador no acepta la captura de imagenes.");
        $("#state").text("Parece que tu navegador no soporta esta característica. Intenta actualizarlo.");
        return;
    }


    let stream;

    navigator
        .mediaDevices
        .enumerateDevices()
        .then(function (devices) {
            let videoDevice = [];

            devices.forEach(function (dispositivo) {
                let tipo = dispositivo.kind;
                if (tipo === "videoinput") {
                    videoDevice.push(dispositivo);
                }
            });

            if (videoDevice.length > 0) {
                showStream(videoDevice[0].deviceId);
            }
        });



    let showStream = idDeDispositivo => {
        _getUserMedia(
            {
                video: {
                    deviceId: idDeDispositivo,
                    width: 300,
                    height: 200
                }
            },
            function (streamObtenido) {
                setDeviceList();

                deviceList.onchange = () => {
                    if (stream) {
                        stream.getTracks().forEach(function (track) {
                            track.stop();
                        });
                    }
                    showStream(deviceList.value);
                }
                stream = streamObtenido;
                video.srcObject = stream;
                video.play();
            }, function (error) {
                $("#state").text("No se puede acceder a la cámara, o no le diste permiso.");
            });
    }
})();