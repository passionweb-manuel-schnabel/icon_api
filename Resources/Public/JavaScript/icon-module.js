import Icons from '@typo3/backend/icons.js';

class IconModule {
    constructor() {
        this.initIcon().then(r => console.log("Icon initialized successfully."));
    }

    async initIcon(){
        const icon = await Icons.getIcon('tx-passionweb-svg', Icons.sizes.large);

        // use icon in your custom JS context
    }
}

export default new IconModule();