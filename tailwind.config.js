module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
      ],
    theme: {
      extend: {
        colors: {
            laravel: "#1f2d61",
            accentPrimary: "#d3e187",
            buttonPrimary: "#f36f4f",
            buttonSecondary: "#09b4ad",
            buttonTertiary: "#78be20",
            tintPrimary: "#def2f2",
          },
      },
    },
    plugins: [
        require('@tailwindcss/typography'),
    ],
  }