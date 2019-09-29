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
