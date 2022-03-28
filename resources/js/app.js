import Alpine from 'alpinejs'
 
window.Alpine = Alpine

document.addEventListener('alpine:init', () => {
    Alpine.data('app', () => ({
        sidebarOpen: false,

        profileMenuOpen: false,

        themeMenuOpen: false,

        get theme() {
            if ('theme' in localStorage) {
                return localStorage.getItem('theme')
            }

            return 'system'
        },

        get themeColors() {
            if (this.theme == 'system') {
                return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
            }

            return this.theme
        },

        set theme(type) {
            if (type == 'system') {
                localStorage.removeItem('theme')
            } else {
                localStorage.setItem('theme', type)
            }
        },

        setTheme(type) {
            this.theme = type
            this.themeMenuOpen = false
        },

        toggleProfileMenu() { this.profileMenuOpen = ! this.profileMenuOpen },

        toggleThemeMenu() { this.themeMenuOpen = ! this.themeMenuOpen },
    }))
})
 
window.Alpine.start()
