/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["views/**/*.php", "public/js/*.js", "public/*.php"],
  theme: {
    extend: {},
  },
  plugins: [require("daisyui")],
  daisyui: {
    theme: ["aqua"]
  }
};
