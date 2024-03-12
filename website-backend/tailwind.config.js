/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
    fontFamily: {
      'open-sans': ['Open sans', 'sans-serif'],
      'roboto': ['Roboto', 'sans-serif']
    }
  },
  plugins: [],
}

