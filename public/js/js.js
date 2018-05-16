$('#weixin').mouseover(function () {
	$('#weixin-img').show(500);
});
$('#weixin').mouseout(function () {
	$('#weixin-img').hide(500);
});
$('#qq').mouseover(function () {
	$('#qq-img').show(500);
});
$('#qq').mouseout(function () {
	$('#qq-img').hide(500);
});
function reheight(){
    var img = $('.item').find('img');
    for(let i=0;i<img.length;i++){
        var diwidth = $(img[i]).width();
        $(img[i]).css('height',diwidth*0.7);
    }}
    reheight();
