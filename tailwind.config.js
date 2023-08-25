module.exports = {
  mode: "jit",
  content: ["./**/*.php", "./src/**/*.js"],
  darkMode: "class",
  safelist: [
    'text-green-500',
  ],
  theme: {
    zIndex: {
      1: 1,
      2: 2,
      10: 10,
      11: 11,
    },
    listStyleType: {
      auto: "auto",
      none: "none",
      disc: "disc",
      decimal: "decimal",
      square: "square",
    },
    container: {
      center: true,
    },
    extend: {
      lineHeight: {
        12: "3rem",
        16: "4rem",
      },
      colors: {
        "main-dark": "#0B0B0F",
        "main-gray": "#17171a",
        "custom-gray": "#f7f7f7",
        primary: "#6266f0",
      },
      fontSize: {
        // '20xl': '20rem'
      },
      fontFamily: {
        heading: "Playfair Display",
      },
    },
  },
  variants: {
    extend: {},
  },
  // plugins: [require('@tailwindcss/typography')],
};
