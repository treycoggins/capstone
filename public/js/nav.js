document.addEventListener("DOMContentLoaded", function () {
	const hamburger = document.querySelector("#hamburger");
	const navMenu = document.querySelector("#nav");
	const overlay = document.querySelector("#overlay");
	const navMenuCloseBtn = document.querySelector("#navMenu-close-X");
	const navLinks = [...document.getElementsByClassName(".nav-link")];

	// Get all focusable elements
	const focusableElements = document.querySelectorAll(
		"[href], button, input, select, textarea, [tabindex]:not([tabindex='-1'])"
	);
	let expanded = navMenu.getAttribute("aria-expanded") === "true";

	/*    NAV BAR - GENERAL BEHAVIOR     */

	const navMenuOpen = () => {
		expanded = !expanded;
		disableTabbingForPage();
		navMenu.setAttribute("aria-expanded", expanded);
		navMenu.setAttribute("aria-hidden", !expanded);
		toggleTabIndexForNav();
		toggleOverlayAndNavMenu();
	};
	const navMenuClose = () => {
		expanded = !expanded;
		navMenu.setAttribute("aria-expanded", expanded);
		navMenu.setAttribute("aria-hidden", !expanded);
		reenableTabbingForPage();
		toggleTabIndexForNav();
		toggleOverlayAndNavMenu();
	};

	const toggleOverlayAndNavMenu = () => {
		if (expanded) {
			overlay.classList.add("overlay-visible");
			overlay.classList.remove("overlay-hidden");
			document.body.style.overflow = "hidden";
			navMenu.classList.toggle("nav-open");
			navMenu.classList.toggle("nav-close");
		} else {
			overlay.classList.remove("overlay-visible");
			overlay.classList.add("overlay-hidden");
			document.body.style.overflow = "visible";
			navMenu.classList.toggle("nav-open");
			navMenu.classList.toggle("nav-close");
		}
		overlay.addEventListener("click", navMenuClose);
	};

	// navLinks.forEach((link) => {
	// 	link.addEventListener("click", (event) => {
	// 		event.preventDefault();
	// 		navMenu.addEventListener("transitioned", () => {
	// 			const targetURL = link.getAttribute("href");
	// 			window.location.href = targetURL;
	// 		});
	// 	});
	// });

	/* ACCESSIBLE KEYBOARD NAVIGATION (TAB, ENTER, ESC) */

	// Disable tabbing for background page when nav is open */
	const disableTabbingForPage = () => {
		// Set tabindex to -1 for all focusable elements
		focusableElements.forEach((el) => {
			// Exclude nav-link elements and elements already not in the tab order
			if (el.getAttribute("tabindex") !== "-1") {
				// Save original tabindex value
				el.setAttribute(
					"data-original-tabindex",
					el.getAttribute("tabindex") || "-1"
				);
				// Set tabindex to -1
				el.setAttribute("tabindex", "-1");
			}
		});
	};

	// Reenable tabbing after nav closes
	const reenableTabbingForPage = () => {
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
			if (expanded) {
				link.setAttribute("tabindex", "0");
			} else {
				link.setAttribute("tabindex", "-1");
			}
		});
	};

	/*///////		EVENT LISTENERS		 ///////*/

	hamburger.addEventListener("click", navMenuOpen);
	navMenuCloseBtn.addEventListener("click", navMenuClose);
	navLinks.forEach((link) => link.addEventListener("click", navMenuClose));

	// When "Enter" is pressed on the hamburger, toggle the menu to visible on screen readers
	hamburger.addEventListener("keypress", (event) => {
		if (event.key === "Enter") {
			navMenuOpen();
		}
	});
	// // When tabbing away from the menu, or ESC is pressed, close the menu
	/* TODO: create event listener for the BLUR event */
	// navMenu.addEventListener("blur", () => {
	// 	navMenu.setAttribute("aria-hidden", "true");
	// });
	navMenuCloseBtn.addEventListener("keypress", (event) => {
		if (event.key === "Enter") {
			navMenuClose();
		}
	});

	/*////////// End of DOMContentLoaded //////////*/
});
