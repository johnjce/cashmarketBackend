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

document.querySelector("#buttonAddProduct").addEventListener("click", function () {
    event.preventDefault();
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

document.querySelector("#buttonAddAgreement").addEventListener("click", function () {
    event.preventDefault();
    agreementPurchase.forEach(toString);
    postProducts = postProducts.substring(0, postProducts.length - 1);
    postProducts += "}";

    var posting = $.post("./savePurchase", { "products": jQuery.parseJSON(postProducts), "IDCL": $("#IDCL").val(), "total":145 });
    posting.done(function (data) {
        $("#inputSearch").val("");
        document.querySelector('#customersResult').innerHTML = "";
        agreementPurchase = new Map();
        postProducts = "{";
        disableSubmit("#buttonAddAgreement");
        $("#inputSearch").val().trigger('change');
        document.querySelector('#message').innerHTML ="ok";
    });
    posting.fail(function (data) {
        document.querySelector('#message').innerHTML = "bad";
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