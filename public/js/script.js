$(document).ready(function () {
    getTemperature();
});

function getTemperature() {
    $.ajax({
        type: 'GET',
        url: '/weather/getTemperature',
        success: function (data) {
            $("#temp-location").html(data.location);
            $("#temp-value").html(data.value);
        }
    });
}
