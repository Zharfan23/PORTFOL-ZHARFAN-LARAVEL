/** @type {import('tailwindcss').Config} */
export default {
  content: ["./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",,
  ],
  theme: {
    extend: {
      colors : {
        'bg-main' : '#00006b',
        'white': '#ffffff',
        'white-grayish' : '#F4F4F4',
        'sea-blue' : '#1494EF',
        'secondary' : '#1393ee'
      },
  
    fontFamily : {
      'instrument-sans' : ['Instrument Sans'],
      'poppins' : ['Poppins']
    },

    keyframes: {
      'slide-down': {
        '0%': { transform: 'translateY(-100%)', opacity: '0' },
        '100%': { transform: 'translateY(0)', opacity: '1' },
      },
  },

  animation: {
    'slide-down': 'slide-down 0.5s ease-out forwards',
  },
},
  plugins: [],
}
}

