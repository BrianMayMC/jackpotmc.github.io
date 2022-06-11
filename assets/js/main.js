$(window).on("load", function() {
	setTimeout(() => {
		$('.preloader-wrapper').fadeOut(3000);
	}, 1000)
});

$(function () {
	$("#mobile-nav").click(function () {
		var x = document.getElementById("nav-menu-mob");
		var y = document.getElementById("mobile-bars");
		if(x.style.display ===  "block") {
			x.style.display = "none";
			y.classList.remove("clicked");
		} else {
			x.style.display = "block";
			y.classList.add("clicked");
		}
	});

	let serverIp = "play.jackpotmc.com";
    $(function() {
        getMCPlayers(serverIp, document.querySelector("#mc-online"));
    });

	AOS.init();
    var cpb = clipboardButton('#ip-copy');
	var cpb2 = clipboardButton('#ip-copy-big');
});

function getMCPlayers(ip, element) {
    fetch(`https://mc-api.net/v3/server/ping/${ip}`)
    .then(res => res.json())
    .then(data => element.innerHTML = data["players"]["online"])
}

$('#ip-copy').click(function(){
	Swal.fire({
		position: 'top-end',
		title: 'IP successfully copied',
		showConfirmButton: false,
		timer: 1500
	});
});

$('#ip-copy-big').click(function(){
	Swal.fire({
		position: 'top-end',
		title: 'IP successfully copied',
		showConfirmButton: false,
		timer: 1500
	});
});

var btnContainer = document.getElementById("lbs-tabs");
if (btnContainer !== null) {
	var btns = btnContainer.getElementsByClassName("tab-trigger");
	for (var i = 0; i < btns.length; i++) {
	btns[i].addEventListener("click", function() {
		var current = btnContainer.getElementsByClassName("active");
		current[0].className = current[0].className.replace(" active", "");
		this.className += " active";
		});
	}
}

function toggleMobileMenu(menu) {
    menu.classList.toggle('open');
}