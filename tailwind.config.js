/** @config {./tailwindcss.config.js} */
module.exports = {
  content: ["./views/**/*.{html,php,js}", "./src/**/*.{html,css,scss,js}"],
  theme: {
    fontFamily: {
      sans: ["Poppins", "Helvetica", "Arial", "sans-serif"],
      serif: ["Sorts Mill Goudy", "Georgia", "serif"],
      display_serif: ["Abril Fatface", "Georgia", "serif"],
      display: ["Orbitron"],
    },
    extend: {
      colors: {
        secondary: {
          light: "rgb(254, 196, 80)",
          dark: "rgb(204, 157, 63);",
        },
        primary: {
          light: "#38785d",
          DEFAULT: "#175442",
          dark: "#063427",
        },
        bg: {
          light: "#f1f5f9",
          dark: "#cbd5e1",
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
};
