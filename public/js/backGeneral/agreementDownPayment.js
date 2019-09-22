$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

//A la escucha de cambios en los campos de precio y porcentaje
$("#priceDownPayment").on("change keydown keyup", function () {
    if($("#priceDownPayment").val() == ""){
        $("#priceDownPayment").val(0);
    }
    $("#priceDownPayment").val($("#priceDownPayment").val()*1.00);
    downPaymentAvise();
});
$("#downPaymentPercent").on("change keydown keyup", function () {
    downPaymentAvise();
});


//funcion que agrega un mes a la fecha
function calculateOneMonthMore(){
    let actualDate = new Date();
    let actualMonth = actualDate.getMonth();
    let newMonth = actualMonth + 2;
    newMonth -= newMonth>12?12:0;
    let lastDate = actualDate.getDate() + "/" + newMonth + "/" + actualDate.getFullYear();
    return lastDate;
}
$("#lastDayOfPay").val(calculateOneMonthMore());

//funcion que cambia el div con el precio a devolver 
function downPaymentAvise() {
    let percent = $("#downPaymentPercent").val();
    let price = $("#priceDownPayment").val();
    console.log(price +percent);
    let dv = price==null||percent==null?0:parseFloat(price * (percent / 100)) + parseFloat(price, 2);
    console.log(dv);
    $('#downPaymentAmount').html("<h4>Devuelve por este producto:" + dv + " €</h4>");
}

var agreementId = Math.floor(Math.random() * (4000 - 100 + 1)) + 100;
var agreementDownPayment = new Map();
var productsPda = document.getElementById("productsPda");
var i = 0;
let total = 0;


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

function delRow(id) {
    agreementDownPayment.delete(id);
    $("#p_" + id).remove();
    agreementDownPayment.size > 0 ? enableSubmit("#buttonAddAgreement") : disableSubmit("#buttonAddAgreement");
}

var postProducts = "{";
function toString(value, key) {
    delRow(key);
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
    $.post("./customerSearch", { "q": $("#IDCL").val() })
    .done(function (data) {
        var jdata = JSON.parse(data);
        names = jdata[0].names + " " + jdata[0].lastname;
        address = jdata[0].address;
        dni = jdata[0].dni;
        telephone = jdata[0].telephone;
    });

    agreementDownPayment.forEach(toString);
    postProducts = postProducts.substring(0, postProducts.length - 1);
    postProducts += "}";
    var posting = $.post("./saveDownPayment", {
        "products": jQuery.parseJSON(postProducts),
        "IDCL": $("#IDCL").val(),
        "total": total,
        "agreementId":agreementId,
        "terms": $("#terms").val(),
        "lastDayOfPay": $("#lastDayOfPay").val()
    });
    posting.done(function (data) {
        $("#inputSearch").val("");
        document.querySelector('#customersResult').innerHTML = "";
        postProducts = "{";
        disableSubmit("#buttonAddAgreement");

        let documento = "<div class='modal-footer'>" +
            "    <button class='btn btn-secondary' type='button' data-dismiss='modal'>Cancelar</button>" +
            "    <!-- boton de capturar firma -->" +
            "    <a class='btn btn-primary' id='printAgreementButton' href='#' onclick='printDocument(this)'>Imprimir</a>" +
            '<div class="row">' +
            '<div class="col-md-6">' +
            '<button id="signButton" value="Firmar" class="btn btn-primary btn-lg ligth-text block" onClick="tabletDemo()">Firmar <i class="fas fa-signature"></i></button>' +
            '</div>';

        document.querySelector('#modalAgreementsFooter').innerHTML = documento;

        document.querySelector('#message').innerHTML = "<div class='alert alert-success alert-dismissible fade show' role='alert'>" +
            "    <strong>Ok!</strong> Se creo correctamente el contrato. " +
            '<a href="#" data-toggle="modal" data-did=' + data + ' data-target="#ModalAgreements">' +
            '<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>' +
            'ver/firmar' +
            '</a>' +
            "    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>" +
            "        <span aria-hidden='true'>&times;</span>" +
            "    </button>" +
            "</div>";
        agreementDownPayment = new Map();
    });
    posting.fail(function (data) {
        document.querySelector('#message').innerHTML = "<div class='alert alert-danger alert-dismissible fade show' role='alert'><strong>Error!</strong> Existe un problema, porfavor revise el formulario e intentelo de nuevo.<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
    });

});

$("#addProductForm *").on("change keydown keyup", function () {
    if (checkInput("#make") &&
        checkInput("#model") &&
        checkInput("#sn") &&
        checkInputNumber("#priceDownPayment") &&
        checkInputNumber("#downPaymentPercent")) {
        enableSubmit("#buttonAddProduct");
    } else {
        disableSubmit("#buttonAddProduct");
    }
});
$("#buttonAddProduct").on("click", function () {
    event.preventDefault();

    video.pause();
    let contexto = canvasProductPicture.getContext("2d");
    canvasProductPicture.width = video.videoWidth;
    canvasProductPicture.height = video.videoHeight;
    contexto.drawImage(video, 0, 0, canvasProductPicture.width, canvasProductPicture.height);
    let productImage = canvasProductPicture.toDataURL();
    video.play();
    
    enableSubmit("#buttonAddAgreement");
    var product = new Map();
    product.set("make", $("#make").val());
    product.set("model", $("#model").val());
    product.set("sn", $("#sn").val());
    product.set("type", $("select[name=type]").val());
    product.set("pricePurchase", $("#priceDownPayment").val());
    product.set("priceSale", $("#downPaymentPercent").val());
    product.set("state", $("select[name=state]").val());
    product.set("productImage", encodeURIComponent(productImage));
    agreementDownPayment.set(i, product);
    let partialPrice = $("#priceDownPayment").val() * ($("#downPaymentPercent").val() / 100);
    partialPrice += parseFloat($("#priceDownPayment").val(), 2);
    total += $("#priceDownPayment").val();
    let productHtml = "<div id='p_" + i + "' class='col-lg-6 col-sm-12 col-md-12 mb-0'>"+
    "<p><span><b>Marca: </b></span>" + $("#make").val() + 
    "<br/><span><b>Modelo:</b></span>" + $("#model").val() +
    "<br/><span><b>Fecha limite:</b> </span>" + $("#lastDayOfPay").val() +
    "<br/><span><b>Total devolder: </b></span>" + partialPrice + 
    "<br/><button type=\"button\" class=\"btn btn-success\" onclick=\"delRow(" + i + ")\"><i class=\"far fa-trash-alt\"></i></button></p><hr></div>";
    $("#productsPda").append(productHtml);
    i++;

    $("#make").val("");
    $("#model").val("");
    $("#sn").val("");
    $("#stock").val(1);
    $("#priceDownPayment").val("");
    //$("#terms").val("");
    $("#downPaymentPercent").val("30");
    $('#downPaymentAmount').html("");

    disableSubmit("#buttonAddProduct");
    return true;

});
//de aqui para abajo la puta camara

function isUserMediaSupport() {
    return !!(navigator.getUserMedia || (navigator.mozGetUserMedia || navigator.mediaDevices.getUserMedia) || navigator.webkitGetUserMedia || navigator.msGetUserMedia)
}

function _getUserMedia() {
    return (navigator.getUserMedia || (navigator.mozGetUserMedia || navigator.mediaDevices.getUserMedia) || navigator.webkitGetUserMedia || navigator.msGetUserMedia).apply(navigator, arguments);
}

let video = document.querySelector("#video"),
    canvasProductPicture = document.querySelector("#canvasProductPicture"),
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