/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        container: {
            center: true,
            padding: "16px",
        },
        extend: {
            width: {
                "30rem": "28rem",
            },
            colors: {
                primary: "#019B65",
                backgpround: "#2A2A2A",
                footer: "#023322",
                second: "#023322",
            },
            screens: {
                desktop: "8",
                "2xl": "1320px",
            },
            spacing: {
                "140px": "140px",
            },
            backgroundImage: {
                portofolio: "url('webportofolio.png')",
            },
        },
    },
    plugins: [],
};
