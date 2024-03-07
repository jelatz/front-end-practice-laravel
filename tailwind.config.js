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
        'hero': '40rem',
      },
      backgroundImage: theme => ({
        'home-hero': "url('/public/images/bg-about-us.jpg')",
        'about-hero': "url('/public/images/about-bg.jpg')",
        'services-hero': "url('/public/images/bg-services.jpg')",
        'contact-hero': "url('/public/images/bg-contact.jpg')",
      }),
    },
  },
  plugins: [],
}