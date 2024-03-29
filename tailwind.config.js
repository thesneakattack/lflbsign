module.exports = {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
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
            screens: {
                "lfd-1080v": {
                    raw: "((max-width: 1080px) and (max-height: 1920px))",
                },
                "lfd-1920h": {
                    raw: "((max-width: 1920px) and (max-height: 1080px))",
                },
            },
        },
    },
    plugins: [require("@tailwindcss/typography")],
};
