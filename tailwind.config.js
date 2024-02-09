/** @type {import('tailwindcss').Config} */
module.exports = {
	content: ["./views/**/*.{php, html, js}", "./src/**/*.{html,css,js}"],
	theme: {
		fontFamily: {
			sans: ["Helvetica", "Arial", "sans-serif"],
			display: ["Orbitron"],
		},
		extend: {
			colors: {
				secondary: {
					light: "#d7b87a",
					dark: "#af8c4a",
				},
				primary: {
					light: "#38785d",
					DEFAULT: "#175442",
					dark: "#063427",
				},
			},
		},
		screens: {
			tablet: "640px",
			laptop: "1024px",
			desktop: "1280px",
			tv: "1536px",
		},
	},
	plugins: [],
};
