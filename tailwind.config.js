const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Inter var", "Nunito", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                laravel: "#1f2d61",
                accentPrimary: "#d3e187",
                buttonPrimary: "#f36f4f",
                buttonSecondary: "#09b4ad",
                buttonTertiary: "#78be20",
                tintPrimary: "#def2f2",
            },
            typography: {
                DEFAULT: {
                    css: {
                        h1: {
                            // color: "#00f",
                            fontWeight: "400",
                        },
                        color: "#333",
                        // a: {
                        //     color: "#3182ce",
                        //     "&:hover": {
                        //         color: "#2c5282",
                        //     },
                        // },
                    },
                },
            },
        },
    },
    plugins: [require("@tailwindcss/typography")],
};
