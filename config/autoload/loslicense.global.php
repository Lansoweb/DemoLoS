<?php
use \LosLicense\License\LicenseInterface;

$conf = [

    /**
     * Which view template will be used when using the Template Strategy.
     * Default: 'error/403'
     */
    'template_strategy' => [
        //'template' => 'error/403'
    ],
    /**
     * Which route will be used when using the Redirect Strategy
     * Default: 'license-error'
     */
    'redirect_strategy' => [
        //'redirect_to' => 'license-error'
    ],
    /**
     * Defines how Unlicensed Validators will me matched
     *
     * whitelist: Only the specified controller/action or routes will NOT be blocked by an unlicensed access, all others will.
     * blacklist: Only the specified controller/action or routes will be blocked by an unlicensed access, all others will NOT.
     *
     * Default: 'blacklist'
     */
    //'unlicensed_mode' => 'blacklist',

    /**
     * The Unlicensed Validator list that will be used when an unlicensed access is used. Unlicensed means an invalid, expired, tempered or missing licene.
     *
     * It's best to use either the Controller or the Route validator, but can be both, specially when in 'blacklist' mode. If using
     * 'whitelist', you will need to specify each combination of Controller and Route, for one will impact and possibly conflict with the other.
     *
     * If use the 'whitelist' mode and you have a login page, add it (and all necessary pages) to the unlicensed validator or you the login will be unaccessible.
     *
     * The Controller Validator is an array of controller (and optionally a list of actions) and the Route Validator is an array of routes.
     *
     * Default: empty. Meaning all controllers and routes will be accessible, even with an invalid license.
     */
    'unlicensed_validators' => [
        /*
        'LosLicense\Validator\ControllerValidator' => [
            [
                'controller' => 'application\controller\index',
            ],
            [
                'controller' => 'application\controller\login',
                'actions' => ['register','login']
            ]
        ],
        'LosLicense\Validator\RouteValidator' => [
            'home',
            'login'
        ]*/
    ],

    /**
     * The Licensed Validator list that will be used when an licensed access is used.
     *
     * This can be used to limit access to specific controller/action or routes to license types or licensed features.
     *
     * The Controller Validator is an array of controller (and optionally a list of actions) and the Route Validator is an array of routes.
     * Both validators can receive a list of license types and/or a list of required features. Only when the access with the specified license type and/or
     * ALL specified features will be granted. You can specify only a list license type (can be only one), only a list of features (can be only one), or both.
     *
     * Default: empty. Meaning all controllers and routes will be accessible by any license type or features.
     */
    'licensed_validators' => [
        /*'LosLicense\Validator\ControllerValidator' => [
            [
                'controller' => 'application\controller\index',
                'actions' => ['Foo'],
                'licenses' => [LicenseInterface::LICENSE_TRIAL],
                'features' => ['testFeature']
            ]
        ],
        'LosLicense\Validator\RouteValidator' => [
            'foo' => [
                'licenses' => [LicenseInterface::LICENSE_TRIAL],
                'features' => ['testFeature']
            ]
        ]*/
    ],

    /**
     * Here, you can define your system features that can be used by licenses. Can be only a string or an associative array.
     *
     *  Default: empty
     */
    'features' => [
        /*
        'maxUsers' => 20,
        'testFeature'
        */
    ],

    /**
     * If the licensed should be signed or not. If this option is true, then the validators will check for the signature to garantee that
     * the license was not tempered (any field was changed)
     *
     * Default: false
     */
    'sign_license' => false,

    /**
     * If siging a license, you can specify a salt string to be used in the signature generation.
     *
     * Warning: If you change the salt string, all previous licenses will be considered tempered and you need to recrete them.
     */
    'signature_salt' => 'SaltToBeUsed',

    /**
     * The license. You can specify any parameter bellow:
     *
     * 'type': The type of the license. @see \LosLicense\License\License
     * 'valid_from': License will be considered invalid if used before this date
     * 'valid_until': License will be considered invalid if used after this date
     * 'custumer': A string defining the custumer
     * 'features': A list of features that this license has. Needs to be a subset of the 'features' defined above.
     * 'attributes': You can define an array of attributes. The signature does not use the attributes list, so you can change it without invalidate the license.
     * 'signature': The signature of the license.
     */
    /*
    'license' => [
        'type' => LicenseInterface::LICENSE_TRIAL,
        'valid_from' => '2014-12-25 12:01:02',
        'valid_until' => '2014-12-30',
        'customer' => 'Leandro Silva',
        'features' => [
            'maxUsers' => 2,
            'singleFeature'
        ],
        'attributes' => [
            'contact' => 'contact@theircompany.com'
            'testNumber' => 20,
            'singleAttribute'
        ],
        'signature' => '1f22f0199f9e9646a8dc59c6dd45d9d4'
    ],
    */
    'license' => [
        'type' => LicenseInterface::LICENSE_STANDARD,
    ],
];

return [
    'loslicense' => $conf,
];
