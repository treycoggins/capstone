document.addEventListener("DOMContentLoaded", function () {
	const hamburger = document.querySelector("#hamburger");
	const navMenu = document.querySelector("#nav");
	const overlay = document.querySelector("#overlay");
	const navMenuCloseBtn = document.querySelector("#navMenu-close");
	const navLinks = [...document.querySelectorAll(".nav-links")];
	// Get all focusable elements
	const focusableElements = document.querySelectorAll(
		"a, button, input, select, textarea, [tabindex]"
	);
	let expanded = navMenu.getAttribute("aria-expanded") === "true";

	// Disable tabbing for background page when nav is open
	const disableTabbing = () => {
		// Set tabindex to -1 for all focusable elements
		focusableElements.forEach((el) => {
			// Exclude nav-link elements
			if (!el.classList.contains("nav-links")) {
				// Save original tabindex value
				el.setAttribute(
					"data-original-tabindex",
					el.getAttribute("tabindex") || 0
				);
				// Set tabindex to -1
				el.setAttribute("tabindex", "-1");
			}
		});
	};

	// Reenable tabbing after nav closes
	const enableTabbing = () => {
		focusableElements.forEach((el) => {
			// Restore original tabindex values for each focusable element unless its a nav-link, then disable
			const originalTabIndex = el.getAttribute("data-original-tabindex");
			el.setAttribute("tabindex", originalTabIndex || "-1");
			// Remove the attribute
			el.removeAttribute("data-original-tabindex");
		});
	};

	const toggleTabIndexForNav = () => {
		navLinks.forEach((link) => {
			const children = link.children;
			const oddChildren = Array.from(children).filter(
				(child, index) => index % 2 !== 0
			);
			if (expanded) {
				oddChildren.forEach((child) => child.setAttribute("tabindex", "1"));
			} else {
				oddChildren.forEach((child) => child.setAttribute("tabindex", "-1"));
			}
		});
	};

	const navMenuOpen = () => {
		disableTabbing();
		expanded = !expanded;
		navMenu.setAttribute("aria-expanded", expanded);
		toggleTabIndexForNav();
		navMenu.classList.toggle("nav-open");
		navMenu.classList.remove("nav-close");
		overlay.classList.toggle("overlay-hidden");
		overlay.classList.toggle("overlay-visible");
		document.body.style.overflow = "hidden";

		overlay.addEventListener("click", navMenuClose);

		return expanded;
	};

	const navMenuClose = () => {
		enableTabbing();
		expanded = !expanded;
		navMenu.setAttribute("aria-expanded", expanded);
		toggleTabIndexForNav();
		navMenu.classList.remove("nav-open");
		navMenu.classList.toggle("nav-close");
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
