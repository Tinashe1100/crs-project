import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",

        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    prefix: "tw-",

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                brightRed: "hsl(12, 88%, 59%)",
                brightRedLight: "hsl(12, 88%, 69%)",
                brightRedSupLight: "hsl(12, 88%, 95%)",
                darkBlue: "hsl(228, 39%, 23%)",
                darkGrayishBlue: "hsl(210, 11%, 15%)",
                veryDarkBlue: "hsl(233, 12%, 13%)",
                veryPaleRed: "hsl(13, 100%, 96%)",
                veryLightGray: "#e5e5e5",
                pale: "#f4f4f4",
                veryDarkBlue: "#22262A",
                lightGray: "#eee",
                grayish: "#f4f4f4",
                white: " #FFFFFF",
            },
        },
        screens: {
            sm: "480px",
            md: "768px",
            lg: "976px",
            xl: "1440px",
        },
    },

    plugins: [forms],
};
