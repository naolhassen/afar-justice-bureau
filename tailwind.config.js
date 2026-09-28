/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                background: '#ffffff',
                foreground: '#171717',
                primary: {
                    DEFAULT: '#7987a1',
                    dark: '#64738e',
                    light: '#93a1b8',
                },
                secondary: '#2B1343',
                accent: '#9b59b6',
                muted: {
                    DEFAULT: '#f5f5f5',
                    dark: '#e9e9e9',
                },
                dark: {
                    DEFAULT: '#2B1343',
                    light: '#3d1d5c',
                },
                gray: {
                    DEFAULT: '#434343',
                    light: '#7987a1',
                },
                success: '#10b981',
                border: '#e9e9e9',
            },
            fontFamily: {
                sans: ['Inter', 'ui-sans-serif', 'system-ui', 'sans-serif'],
            },
        },
    },
    plugins: [],
}
