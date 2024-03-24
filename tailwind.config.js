/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/views/pages/login.blade.php",
        "./resources/views/pages/register.blade.php",
        "./resources/views/pages/home.blade.php",
    ],
    theme: {
        extend: {},
    },
    plugins: [require("flowbite/plugin")],
};
