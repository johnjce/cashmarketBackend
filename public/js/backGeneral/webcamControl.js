function isUserMediaSupport() {
    return !!(navigator.getUserMedia || (navigator.mozGetUserMedia || navigator.mediaDevices.getUserMedia) || navigator.webkitGetUserMedia || navigator.msGetUserMedia)
}

function _getUserMedia() {
    return (navigator.getUserMedia || (navigator.mozGetUserMedia || navigator.mediaDevices.getUserMedia) || navigator.webkitGetUserMedia || navigator.msGetUserMedia).apply(navigator, arguments);
}

let video = document.querySelector("#video");
let canvasProductPicture = document.querySelector("#canvasProductPicture");
let deviceList = document.querySelector("#deviceList");

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
            }
        );
    }
})();