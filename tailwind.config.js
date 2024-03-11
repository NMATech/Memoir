/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/views/pages/login.blade.php"],
    theme: {
        extend: {},
    },
    plugins: [require("flowbite/plugin")],
};
