module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      "./node_modules/flowbite/**/*.js"
    ],

        // enable dark mode via class strategy
    // darkMode: 'class',
    
    theme: {
      extend: {},
    },
    daisyui: {
        themes: ["light", "dark", "synthwave"], 
      },
    plugins: [
        //  require('flowbite/plugin'),
        require('daisyui'),
    ],
  }