$("#inputSearch").on("keyup", function () {
    var value = $("#inputSearch").val();
    var posting = $.post("./index.php?controller=Customer&action=search", { "value": value });
    posting.done(function (data) {
        var jdata = JSON.parse(data);
        if (jdata.names != null) {
            document.querySelector('#customersResult').innerHTML = jdata.names + " " + jdata.lastname + "-" + jdata.dni;
            document.querySelector('#customersResult').innerHTML += "<input type=\"hidden\" id=\"IDCL\" value=\"" + jdata.IDCL + "\"/>";
            return;
        }
        var x = "";
        for (i in jdata) {
            x += jdata[i].names + " " + jdata[i].lastname + "-" + jdata[i].dni + "<br/>";
        }
        document.querySelector('#customersResult').innerHTML = x;
    });
    posting.fail(function (data) {
        document.querySelector('#customersResult').innerHTML = `Algo fallo, intentelo de nuevo.`;
    });
});