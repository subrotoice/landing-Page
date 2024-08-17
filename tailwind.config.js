/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}"],
  theme: {
    extend: {
      colors: {
        // Custom colors
        hBlue: "#2e75b6", // A shade of blue
        allBlue: "#4a90e2", // A shade of pinkish-red
        allYellow: "#f8e71c",
      },
    },
  },
  plugins: [],
};
