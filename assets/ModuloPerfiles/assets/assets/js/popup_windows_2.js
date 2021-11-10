var btnAbrirPopup = document.getElementById('btn-abrir-popup'),
	overlay = document.getElementById('overlay'),
	overlay_l = document.getElementById('overlay_login'),
	popup = document.getElementById('popup'),
	popup_l = document.getElementById('popup_login'),
	login = document.getElementById('login'),
	btnCerrarPopup = document.getElementById('btn-cerrar-popup'),
	btnCerrarPopupLogin = document.getElementById('btn-cerrar-popup_login');


	
overlay.classList.add('active');
popup.classList.add('active');


btnCerrarPopup.addEventListener('click', function(e){
	e.preventDefault();
	overlay.classList.remove('active');
	popup.classList.remove('active');

});
btnCerrarPopupLogin.addEventListener('click', function(e){
	e.preventDefault();
	overlay_l.classList.remove('active');
	popup_l.classList.remove('active');

});
$(document).on('click','#btn-abrir-popup', function(){
	overlay_l.classList.add('active');
	popup_l.classList.add('active');
});
