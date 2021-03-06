module.exports = {
    "env": {
        "browser": true,
        "jquery": true,
        "node": true,
    },
    "extends": [
        "eslint:recommended",
        "plugin:vue/essential",
    ],
    "parserOptions": {
        "ecmaVersion": 2018,
        "sourceType": "module",
    },
    "rules": {
        "indent": [
            "error",
            4,
        ],
        "linebreak-style": [
            "error",
            "unix",
        ],
        "quotes": [
            "error",
            "single",
        ],
        "semi": [
            "error",
            "always",
        ],
        "no-console": 1,
    },
};
