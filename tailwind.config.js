const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],
    darkMode: "class",
    theme: {
        container: {
            center: true,
            padding: "16px",
        },
        extend: {
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: "#14b8a6",
                secondary: "#64748b",
                dark: "#0f172a",
                ocean: "#60a5fa",
                login: "#22c55e",
                brand: "#dc2626",
            },
            screens: {
                "2xl": "1320px",
            },
        },
    },
    plugins: [require("@tailwindcss/forms")],
};
