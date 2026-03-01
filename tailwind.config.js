/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.php",               // रुटमा भएका index.php, header.php, footer.php, functions.php आदि
    "./inc/**/*.php",        // inc फोल्डर भित्रका PHP फाइलहरू
    "./template-parts/**/*.php", // template-parts फोल्डर भित्रका PHP फाइलहरू
    "./js/**/*.js",          // JavaScript फाइलहरू
  ],
  theme: {
    extend: {
      colors: {
        // यदि तपाईंले रङहरूको नाम दिन चाहनुहुन्छ भने
        'brandOrange': '#EC4724', 
        'brandblue': '#5F849A',
        'grayv-900': '#1A1A1A',
        'blue-800': '#1877F2',
        'green-900': '#1d763d',
       
        
      }
    },
  },
  plugins: [],
}