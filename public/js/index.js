const hamburger = document.querySelector("#hamburger");
const navPane = document.querySelector("#nav");
const overlay = document.querySelector("#overlay");
const navMenuCloseBtn = document.querySelector("#navMenu-close");

const navMenuOpen = () => {
	navPane.classList.remove("nav-close");
	navPane.classList.toggle("nav-open");
	overlay.classList.toggle("overlay-open");
	document.body.style.overflow = "hidden";
};

const navMenuClose = () => {
	navPane.classList.remove("nav-open");
	navPane.classList.add("nav-close");
	overlay.classList.remove("overlay-open");
	document.body.style.overflow = "visible";
};

hamburger.addEventListener("click", navMenuOpen);
navMenuCloseBtn.addEventListener("click", navMenuClose);
navLinks.forEach((navLink) => navLink.addEventListener("click", navMenuClose));

const findItems = () => {
	const item = document.getElementById("header-search-field").value;
	const htmlOutput = `<p>Search results for ${item}:</p>`;

	document.getElementById("search-output").innerHTML = htmlOutput;
};
