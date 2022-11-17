export default class TabSwitch {
    constructor() {
        this.tabButtons = document.querySelectorAll('.js-tabButton');
        this._init();
    }
    _init() {
        this._attachEvent();
    }
    _attachEvent() {
        for(const button of this.tabButtons) {
            button.addEventListener('click', (e) => {
                let id = button.getAttribute('aria-controls');
                this._hideTabpanels(id, e);
                this._showTabpanel(id, e);
            });
        }
    }
    _hideTabpanels(id, e) {
        //タブの親要素を取得
        let buttonParent = e.target.closest('.js-tab-list');
        //タブパネルの親要素を取得
        let tabpanelParent = document.querySelector(`#${id}`).closest('.js-tab-panel-wrapper');

        //表示状態のタブ・タブパネルの状態を取得
        let activeButton = buttonParent.querySelector('.js-tabButton[aria-selected="true"]');
        let activeTabpanel = tabpanelParent.querySelector('.js-tabpanel[aria-hidden="false"]');

        //タブがクリックされた時、現在表示状態の属性値を変更
        activeButton.setAttribute('aria-selected', 'false');
        activeTabpanel.setAttribute('aria-hidden', 'true');
    }
    _showTabpanel(id, e) {
        e.target.closest('.js-tabButton').setAttribute('aria-selected', 'true');
        document.querySelector(`#${id}`).setAttribute('aria-hidden', false);
    }
}