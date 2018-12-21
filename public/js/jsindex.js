var $win = $(window);
$win.scroll(function() {
	if ($win.scrollTop() > 55) {
		$("nav").addClass("navbarcolor");
	} else {
		$("nav").removeClass("navbarcolor");
	}
});
$( document ).ready(function(){
	setTimeout(function(){ 
		$('#home').find('.jm-text--parallax').addClass('jm-animate');
	}, 1000);
});
function openModalTeam(id){
	var id = $('#'+id);
	var modalTeam = $('#ModalTeam');
	var imgModal = id.find('img').attr('src');
	var tituloModal = id.find('h2');
	var descripcion = id.find('p');
	var contenido = id.find('.jm-tea__contenido');
	modalTeam.find('img').attr('src',imgModal)
	modalTeam.find('h2').text(tituloModal[0].innerText);
	modalTeam.find('p').text(descripcion[0].innerText);
	modalTeam.find('.jm-modal--texto').html(contenido[0].innerHTML)
	modalTeam.modal('show');
}