document.addEventListener('DOMContentLoaded', function()
{
	const hamburger = document.querySelector("#hamburger");
	const navPane = document.querySelector("#nav");
	const overlay = document.querySelector("#overlay");
	const navMenuCloseBtn = document.querySelector("#navMenu-close");
	const navLinks = [...document.querySelectorAll(".nav-links")];

	const navMenuOpen = () => {
		navPane.classList.toggle("nav-open");
		navPane.classList.remove("nav-close");
		overlay.classList.toggle("overlay-hidden");
		overlay.classList.toggle("overlay-visible");
		document.body.style.overflow = "hidden";

		overlay.addEventListener("click", navMenuClose);
	};

	const navMenuClose = () => {
		navPane.classList.remove("nav-open");
		navPane.classList.toggle("nav-close");
		overlay.classList.toggle("overlay-hidden");
		overlay.classList.toggle("overlay-visible");
		document.body.style.overflow = "visible";
	};

	hamburger.addEventListener("click", navMenuOpen);
	navMenuCloseBtn.addEventListener("click", navMenuClose);
	navLinks.forEach((navLink) =>
		navLink.addEventListener("click", navMenuClose)
	);
});
