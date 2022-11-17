export default class setFillHeight {
    constructor() {
        this._setPropertyVh();
        this._addEventResize();
    }
    _setPropertyVh() {
        let vh = window.innerHeight * 0.01;
        document.documentElement.style.setProperty( '--vh', `${vh}px` );
    }
    _addEventResize() {
        window.addEventListener( 'resize', this._getVh);
        this._setPropertyVh();
    }
}
