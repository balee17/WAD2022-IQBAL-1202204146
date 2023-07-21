/** @type {import('tailwindcss').Config} */
const optic = require('@smarteye/tailwind-optic-preset');

module.exports = {
  presets: [optic],
  theme: {
    extend: {}
  },
  plugins: [],
  content: ['src/**/*.{ts,tsx}']
};
