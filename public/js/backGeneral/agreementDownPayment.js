$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


var agreementId = Math.floor(Math.random() * (4000 - 100 + 1)) + 100;
var agreementDownPayment = new Map();
var productsPda = document.getElementById("productsPda");
var i = 0;
let total = 0;
var postProducts = "{";

//A la escucha de cambios en los campos de precio y porcentaje
$("#priceDownPayment").on("change keydown keyup", ()=> {
    if($("#priceDownPayment").val() == ""){
        $("#priceDownPayment").val(0);
    }
    $("#priceDownPayment").val($("#priceDownPayment").val()*1.00);
    downPaymentAvise();
});
$("#downPaymentPercent").on("change keydown keyup", ()=> {
    downPaymentAvise();
});

//funcion que cambia el div con el precio a devolver 
function downPaymentAvise() {
    let percent = $("#downPaymentPercent").val();
    let price = $("#priceDownPayment").val();
    let dv = price==null||percent==null?0:parseFloat(price * (percent / 100)) + parseFloat(price, 2);
    $('#downPaymentAmount').html("<h4>Devuelve por este producto:" + dv + " €</h4>");
}

//funcion que recoge los productos para enviarlos
$("#buttonAddProduct").on("click", ()=> {
    event.preventDefault();

    //capturo la imagen del producto
    video.pause();
    let contexto = canvasProductPicture.getContext("2d");
    canvasProductPicture.width = video.videoWidth;
    canvasProductPicture.height = video.videoHeight;
    contexto.drawImage(video, 0, 0, canvasProductPicture.width, canvasProductPicture.height);
    let productImage = canvasProductPicture.toDataURL();
    video.play();
    
    // agrego producto en mapa
    var product = new Map();
    product.set("make", $("#make").val());
    product.set("model", $("#model").val());
    product.set("sn", $("#sn").val());
    product.set("type", $("select[name=type]").val());
    product.set("pricePawn", $("#priceDownPayment").val());
    product.set("pawnPercent", $("#downPaymentPercent").val());
    product.set("state", $("select[name=state]").val());
    product.set("productImage", encodeURIComponent(productImage));

    //meto el producto al array de productos
    agreementDownPayment.set(i, product);

    let partialPrice = $("#priceDownPayment").val() * ($("#downPaymentPercent").val() / 100);
    partialPrice += parseFloat($("#priceDownPayment").val(), 2);
    total += parseFloat($("#priceDownPayment").val(), 2);

    //muestro el producto en la PDA
    let productHtml = "<div id='p_" + i + "' class='col-lg-6 col-sm-12 col-md-12 mb-0'>"+
    "<p><span><b>Marca: </b></span>" + $("#make").val() + 
    "<br/><span><b>Modelo:</b></span>" + $("#model").val() +
    "<br/><span><b>Fecha limite:</b> </span>" + $("#lastDayOfPay").val() +
    "<br/><span><b>Total devolder: </b></span>" + partialPrice + 
    "<br/><button type=\"button\" class=\"btn btn-success\" onclick=\"delRow(" + i + ")\"><i class=\"far fa-trash-alt\"></i></button></p><hr></div>";
    $("#productsPda").append(productHtml);
    i++;
    
    //reset de valores de producto
    $("#make").val("");
    $("#model").val("");
    $("#sn").val("");
    $("#stock").val(1);
    $("#priceDownPayment").val("");
    $("#downPaymentPercent").val("30");
    $('#downPaymentAmount').html("");
    
    //activo botón crear contrato, descativo agregar producto
    enableSubmit("#buttonAddAgreement");
    disableSubmit("#buttonAddProduct");
    return true;

});

//se encarga de crear el contrato
$("#buttonAddAgreement").click(()=> {
    event.preventDefault();
    //si no esta el cliente le aviso
    if ($("#IDCL").val() == null) {
        document.querySelector('#message').innerHTML = "<div class='alert alert-danger alert-dismissible fade show' role='alert'><strong>Error!</strong> Existe un problema, porfavor revise si selecciono un cliente e intentelo de nuevo.<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
        return false;
    }
    //obtengo los datos del cliente 
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
        "total": total,//numeral(total).format('0,0.00'),
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
            "    <a class='btn btn-primary' id='printAgreementButton' href='#' onclick='printDocument(this); updateSignature(\"" + data + "\");'>Imprimir</a>" +
            '<div class="row">' +
            '<div class="col-md-6">' +
            '<button id="signButton" value="Firmar" class="btn btn-primary btn-lg ligth-text block" onClick="tabletSignature()">Firmar <i class="fas fa-signature"></i></button>' +
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
        $("#terms").val("");
    });
    posting.fail(function (data) {
        document.querySelector('#message').innerHTML = "<div class='alert alert-danger alert-dismissible fade show' role='alert'><strong>Error!</strong> Existe un problema, porfavor revise el formulario e intentelo de nuevo.<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
    });

});

//validador que esta a la espera de que se pueda crear producto para guardarlo
$("#addProductForm *").on("change keydown keyup", ()=> {
    if (checkInput("#make") &&
        checkInput("#model") &&
        checkInput("#sn") &&
        checkInputNumber("#priceDownPayment") &&
        checkInputNumber("#downPaymentPercent") &&
        checkInput("#lastDayOfPay") ) {
            enableSubmit("#buttonAddProduct");
    } else {
        disableSubmit("#buttonAddProduct");
    }
});
$("#lastDayOfPay").on('change keydown keyup', ()=>{
    checkInput("#lastDayOfPay")?enableSubmit("#buttonAddProduct"):disableSubmit("#buttonAddProduct");
})