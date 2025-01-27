class BasePlugin {
    constructor() {
        this.init();
    }

    init() {
        console.log('Base Plugin Initialized');
    }
}

new BasePlugin();
