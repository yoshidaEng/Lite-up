export default class appearMobileMenu {
    constructor() {
        this.DOM = {};
        this.DOM.btn = document.querySelector('#mobileMenuBtn');
        this.DOM.nav = document.querySelector('#mobileMenu');
        this._navEvent();
    }

    _setNav() {
        const expanded = document.querySelector('#mobileMenuBtn').getAttribute('aria-expanded');
        const targetElement = document.querySelector('#mobileMenu');
        if(expanded == 'false') {
            this.DOM.btn.setAttribute('aria-label', 'メニューを閉じる');
            this.DOM.btn.setAttribute('aria-expanded', 'true');
            this.DOM.nav.setAttribute('aria-hidden', 'false');
            bodyScrollLock.disableBodyScroll(targetElement);//スクロール不可
        } else {
            this.DOM.btn.setAttribute('aria-label', 'メニューを開く');
            this.DOM.btn.setAttribute('aria-expanded', 'false');
            this.DOM.nav.setAttribute('aria-hidden', 'true');
            bodyScrollLock.enableBodyScroll(targetElement);//スクロール解除
        }
    }
    _navEvent() {
        this.DOM.btn.addEventListener('click', this._setNav.bind(this));
    }
}