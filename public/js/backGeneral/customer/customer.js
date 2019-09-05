$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


function isUserMediaSupport() {
    return !!(navigator.getUserMedia || (navigator.mozGetUserMedia || navigator.mediaDevices.getUserMedia) || navigator.webkitGetUserMedia || navigator.msGetUserMedia)
}

function _getUserMedia() {
    return (navigator.getUserMedia || (navigator.mozGetUserMedia || navigator.mediaDevices.getUserMedia) || navigator.webkitGetUserMedia || navigator.msGetUserMedia).apply(navigator, arguments);
}

let video = document.querySelector("#video"),
    canvas = document.querySelector("#canvas"),
    signaturePictureCanvas = document.querySelector("#signaturePictureCanvas"),
    buttonCapture = document.querySelector("#buttonCapture"),
    state = document.querySelector("#state"),
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

function enableSubmit() {
    $("#buttonCapture").removeAttr("disabled");
}

function disableSubmit() {
    $("#buttonCapture").attr("disabled", "disabled");
}

function checkInput(idInput) {
    return $(idInput).val() != "" ? true : false;
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

                $("#addCustomerForm *").on("change keydown", function () {
                    if (checkInput("#names") &&
                        checkInput("#lastname") &&
                        checkInput("#dni") &&
                        checkInput("#telephone") &&
                        checkInput("#address")) {
                        enableSubmit();
                    } else {
                        disableSubmit();
                    }
                });

                buttonCapture.addEventListener("click", function () {
                    event.preventDefault();
                    video.pause();
                    let contexto = canvas.getContext("2d");
                    canvas.width = video.videoWidth;
                    canvas.height = video.videoHeight;
                    contexto.drawImage(video, 0, 0, canvas.width, canvas.height);
                    let dniPicture = canvas.toDataURL();
                    let signaturePicture = null // signaturePictureCanvas.toDataURL();

                    $("#state").text("Guardando. Por favor, espera...");
                    let email = "Sin email";
                    if ($("#email").val() != "") email = $("#email").val();
                    let customerDataForm ={
                        "IDCL": $("#IDCL").val(),
                        "names": $("#names").val(),
                        "lastname": $("#lastname").val(),
                        "dni": $("#dni").val(),
                        "telephone": $("#telephone").val(),
                        "address": $("#address").val(),
                        "email": email,
                        "img_dni": encodeURIComponent(dniPicture),
                        "signaturePicture": null//encodeURIComponent(signaturePicture)
                    };
                    
                    $.ajax({
                        url: "./customerAdd",
                        type: "post",
                        data: customerDataForm,
                        dataType: 'html',
                        success: function (result) {
                            console.log(result);
                            $("#addCustomerForm *").val("");
                            $("#state").text("Agregado correctamente");
                            disableSubmit();
                        },
                        error: function (customer) {
                            console.error(customer);
                            $("#state").text("Error: No se guardo el cliente correctamente, intentalo de nuevo");
                        }
                    });
                    video.play();
                });
            }, function (error) {
                $("#state").text("No se puede acceder a la cámara, o no le diste permiso.");
            });
    }
})();