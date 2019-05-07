$(document).ready(function () {
    $('#imageThum2').click(function () {
        var srcc = $('#imageThum2').attr('src');
        $('#imageThum0').attr('src', srcc);
    });
    $('#imageThum3').click(function () {
        var srcc = $('#imageThum3').attr('src');
        $('#imageThum0').attr('src', srcc);
    });
    $('#imageThum4').click(function () {
        var srcc = $('#imageThum4').attr('src');
        $('#imageThum0').attr('src', srcc);
    });
    $('#imageThum5').click(function () {
        var srcc = $('#imageThum5').attr('src');
        $('#imageThum0').attr('src', srcc);
    });
});
function AddToCart(){
    alert("Sản phẩm đã được thêm");
}