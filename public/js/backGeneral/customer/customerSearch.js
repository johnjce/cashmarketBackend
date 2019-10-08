$("#inputSearch").on("change paste keyup", ()=> {
    var value = $("#inputSearch").val();
    var posting = $.post("./customerSearch", { "q": value });
    posting.done(function (data) {
        var jdata = JSON.parse(data);
        var x = "";
        for (i in jdata) {
            x += "<a onclick=$('#inputSearch').val(\"" + jdata[i].dni + "\").trigger('change') class='customerResultLabel'>" + jdata[i].names + " " + jdata[i].lastname + "-" + jdata[i].dni + '</a>' + "<br/>"+"<input type=\"hidden\" id=\"IDCL\" value=\"" + jdata[i].IDCL + "\"/>";
        }
        document.querySelector('#customersResult').innerHTML = x;
    });
    posting.fail(function (data) {
        document.querySelector('#customersResult').innerHTML = `Algo fallo, intentelo de nuevo.`;
    });
});
