import Alpine from 'alpinejs';
window.Alpine = Alpine;

Alpine.data('adminDropDown', () => ({
    visible: false,
    toggle() {
        this.visible = !this.visible;
    }
}));


Alpine.start();
