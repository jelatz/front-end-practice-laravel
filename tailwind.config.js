/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        primary: '#0D0630',
        secondary: '#18314F',
        tertiary: '#384E77',
        accent1: '#8BBEB2',
        accent2: '#E6F9AF'
      },
      spacing: {
        'banner': '57rem'
      },
      backgroundImage: theme => ({
        'home-bg': "url('/public/images/bg-about-us.jpg')",
      }),
    },
  },
  plugins: [],
}