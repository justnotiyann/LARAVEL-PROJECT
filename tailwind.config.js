/** @type {import('tailwindcss').Config} */
export default {
  content: ["./resources/views/**/*.blade.php"],
  theme: {
    container: {
      center: true,
      padding: "1em"
    },
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}

