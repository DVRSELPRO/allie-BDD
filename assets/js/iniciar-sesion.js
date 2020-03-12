//carga una sola vez
function widthDIV() {
    var width = $(document).width();
    var login = 540;
    var x = ((login * 100) / width);
    x = (100 - x);
    var style = "display: table;height: 100%;position: relative;width: " + x + "%;";
    $("div.height100").attr("style", style);
}

widthDIV();
$(window).resize(function () {
    widthDIV();
});