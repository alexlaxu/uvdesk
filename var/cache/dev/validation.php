<?php

// This file has been auto-generated by the Symfony Cache Component.

return [[

'Symfony.Component.Form.Form' => 0,
'IteratorAggregate' => 1,
'Symfony.Component.Form.FormInterface' => 2,
'Symfony.Component.Form.ClearableErrorsInterface' => 3,
'Traversable' => 4,
'Countable' => 5,
'ArrayAccess' => 6,
'Webkul.UVDesk.CoreFrameworkBundle.DataProxies.CreateTicketDataClass' => 7,
'Webkul.UVDesk.SupportCenterBundle.Entity.Solutions' => 8,
'Webkul.UVDesk.SupportCenterBundle.Entity.SolutionCategory' => 9,
'Webkul.UVDesk.SupportCenterBundle.Entity.Article' => 10,

], [

0 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            (\Symfony\Component\VarExporter\Internal\Registry::$factories['Symfony\\Component\\Validator\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::f('Symfony\\Component\\Validator\\Mapping\\ClassMetadata'))(),
            clone (\Symfony\Component\VarExporter\Internal\Registry::$prototypes['Symfony\\Component\\Form\\Extension\\Validator\\Constraints\\Form'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Symfony\\Component\\Form\\Extension\\Validator\\Constraints\\Form')),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'Symfony\\Component\\Form\\Form',
                ],
                'defaultGroup' => [
                    'Form',
                ],
                'traversalStrategy' => [
                    2,
                ],
                'constraints' => [
                    [
                        $o[1],
                    ],
                ],
                'constraintsByGroup' => [
                    [
                        'Default' => [
                            $o[1],
                        ],
                        'Form' => [
                            $o[1],
                        ],
                    ],
                ],
                'groups' => [
                    1 => [
                        'Default',
                        'Form',
                    ],
                ],
            ],
        ],
        $o[0],
        []
    );
},
1 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            (\Symfony\Component\VarExporter\Internal\Registry::$factories['Symfony\\Component\\Validator\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::f('Symfony\\Component\\Validator\\Mapping\\ClassMetadata'))(),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'IteratorAggregate',
                ],
                'defaultGroup' => [
                    'IteratorAggregate',
                ],
            ],
        ],
        $o[0],
        []
    );
},
2 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            (\Symfony\Component\VarExporter\Internal\Registry::$factories['Symfony\\Component\\Validator\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::f('Symfony\\Component\\Validator\\Mapping\\ClassMetadata'))(),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'Symfony\\Component\\Form\\FormInterface',
                ],
                'defaultGroup' => [
                    'FormInterface',
                ],
            ],
        ],
        $o[0],
        []
    );
},
3 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            (\Symfony\Component\VarExporter\Internal\Registry::$factories['Symfony\\Component\\Validator\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::f('Symfony\\Component\\Validator\\Mapping\\ClassMetadata'))(),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'Symfony\\Component\\Form\\ClearableErrorsInterface',
                ],
                'defaultGroup' => [
                    'ClearableErrorsInterface',
                ],
            ],
        ],
        $o[0],
        []
    );
},
4 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            (\Symfony\Component\VarExporter\Internal\Registry::$factories['Symfony\\Component\\Validator\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::f('Symfony\\Component\\Validator\\Mapping\\ClassMetadata'))(),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'Traversable',
                ],
                'defaultGroup' => [
                    'Traversable',
                ],
            ],
        ],
        $o[0],
        []
    );
},
5 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            (\Symfony\Component\VarExporter\Internal\Registry::$factories['Symfony\\Component\\Validator\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::f('Symfony\\Component\\Validator\\Mapping\\ClassMetadata'))(),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'Countable',
                ],
                'defaultGroup' => [
                    'Countable',
                ],
            ],
        ],
        $o[0],
        []
    );
},
6 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            (\Symfony\Component\VarExporter\Internal\Registry::$factories['Symfony\\Component\\Validator\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::f('Symfony\\Component\\Validator\\Mapping\\ClassMetadata'))(),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'ArrayAccess',
                ],
                'defaultGroup' => [
                    'ArrayAccess',
                ],
            ],
        ],
        $o[0],
        []
    );
},
7 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            (($f = &\Symfony\Component\VarExporter\Internal\Registry::$factories)['Symfony\\Component\\Validator\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::f('Symfony\\Component\\Validator\\Mapping\\ClassMetadata'))(),
            ($f['Symfony\\Component\\Validator\\Mapping\\PropertyMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::f('Symfony\\Component\\Validator\\Mapping\\PropertyMetadata'))(),
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Symfony\\Component\\Validator\\Constraints\\NotBlank'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Symfony\\Component\\Validator\\Constraints\\NotBlank')),
            $f['Symfony\\Component\\Validator\\Mapping\\PropertyMetadata'](),
            clone $p['Symfony\\Component\\Validator\\Constraints\\NotBlank'],
            clone ($p['Symfony\\Component\\Validator\\Constraints\\Email'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Symfony\\Component\\Validator\\Constraints\\Email')),
            $f['Symfony\\Component\\Validator\\Mapping\\PropertyMetadata'](),
            clone $p['Symfony\\Component\\Validator\\Constraints\\NotBlank'],
            $f['Symfony\\Component\\Validator\\Mapping\\PropertyMetadata'](),
            clone $p['Symfony\\Component\\Validator\\Constraints\\NotBlank'],
            clone ($p['Symfony\\Component\\Validator\\Constraints\\GroupSequence'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Symfony\\Component\\Validator\\Constraints\\GroupSequence')),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'Webkul\\UVDesk\\CoreFrameworkBundle\\DataProxies\\CreateTicketDataClass',
                    'name',
                    3 => 'from',
                    6 => 'subject',
                    8 => 'reply',
                ],
                'defaultGroup' => [
                    'CreateTicketDataClass',
                ],
                'members' => [
                    [
                        'name' => [
                            $o[1],
                        ],
                        'from' => [
                            $o[3],
                        ],
                        'subject' => [
                            $o[6],
                        ],
                        'reply' => [
                            $o[8],
                        ],
                    ],
                ],
                'properties' => [
                    [
                        'name' => $o[1],
                        'from' => $o[3],
                        'subject' => $o[6],
                        'reply' => $o[8],
                    ],
                ],
                'groupSequence' => [
                    $o[10],
                ],
                'class' => [
                    1 => 'Webkul\\UVDesk\\CoreFrameworkBundle\\DataProxies\\CreateTicketDataClass',
                    3 => 'Webkul\\UVDesk\\CoreFrameworkBundle\\DataProxies\\CreateTicketDataClass',
                    6 => 'Webkul\\UVDesk\\CoreFrameworkBundle\\DataProxies\\CreateTicketDataClass',
                    8 => 'Webkul\\UVDesk\\CoreFrameworkBundle\\DataProxies\\CreateTicketDataClass',
                ],
                'property' => [
                    1 => 'name',
                    3 => 'from',
                    6 => 'subject',
                    8 => 'reply',
                ],
                'constraints' => [
                    1 => [
                        $o[2],
                    ],
                    3 => [
                        $o[4],
                        $o[5],
                    ],
                    6 => [
                        $o[7],
                    ],
                    8 => [
                        $o[9],
                    ],
                ],
                'constraintsByGroup' => [
                    1 => [
                        'CreateTicket' => [
                            $o[2],
                        ],
                    ],
                    3 => [
                        'CreateTicket' => [
                            $o[4],
                            $o[5],
                        ],
                    ],
                    6 => [
                        'CreateTicket' => [
                            $o[7],
                        ],
                        'CustomerCreateTicket' => [
                            $o[7],
                        ],
                    ],
                    8 => [
                        'CreateTicket' => [
                            $o[9],
                        ],
                        'CustomerCreateTicket' => [
                            $o[9],
                        ],
                    ],
                ],
                'message' => [
                    2 => 'This field is mandatory',
                    4 => 'This field is mandatory',
                    'The email {{ value }} is not a valid email.',
                    7 => 'This field is mandatory',
                    9 => 'This field is mandatory',
                ],
                'groups' => [
                    2 => [
                        'CreateTicket',
                    ],
                    4 => [
                        'CreateTicket',
                    ],
                    [
                        'CreateTicket',
                    ],
                    7 => [
                        'CreateTicket',
                        'CustomerCreateTicket',
                    ],
                    9 => [
                        'CreateTicket',
                        'CustomerCreateTicket',
                    ],
                    [
                        'CreateTicketDataClass',
                    ],
                ],
            ],
        ],
        $o[0],
        []
    );
},
8 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            (($f = &\Symfony\Component\VarExporter\Internal\Registry::$factories)['Symfony\\Component\\Validator\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::f('Symfony\\Component\\Validator\\Mapping\\ClassMetadata'))(),
            ($f['Symfony\\Component\\Validator\\Mapping\\PropertyMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::f('Symfony\\Component\\Validator\\Mapping\\PropertyMetadata'))(),
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Symfony\\Component\\Validator\\Constraints\\NotBlank'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Symfony\\Component\\Validator\\Constraints\\NotBlank')),
            clone ($p['Symfony\\Component\\Validator\\Constraints\\Length'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Symfony\\Component\\Validator\\Constraints\\Length')),
            clone ($p['Symfony\\Component\\Validator\\Constraints\\Regex'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Symfony\\Component\\Validator\\Constraints\\Regex')),
            $f['Symfony\\Component\\Validator\\Mapping\\PropertyMetadata'](),
            clone $p['Symfony\\Component\\Validator\\Constraints\\Length'],
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'Webkul\\UVDesk\\SupportCenterBundle\\Entity\\Solutions',
                    'name',
                    5 => 'description',
                ],
                'defaultGroup' => [
                    'Solutions',
                ],
                'members' => [
                    [
                        'name' => [
                            $o[1],
                        ],
                        'description' => [
                            $o[5],
                        ],
                    ],
                ],
                'properties' => [
                    [
                        'name' => $o[1],
                        'description' => $o[5],
                    ],
                ],
                'class' => [
                    1 => 'Webkul\\UVDesk\\SupportCenterBundle\\Entity\\Solutions',
                    5 => 'Webkul\\UVDesk\\SupportCenterBundle\\Entity\\Solutions',
                ],
                'property' => [
                    1 => 'name',
                    5 => 'description',
                ],
                'constraints' => [
                    1 => [
                        $o[2],
                        $o[3],
                        $o[4],
                    ],
                    5 => [
                        $o[6],
                    ],
                ],
                'constraintsByGroup' => [
                    1 => [
                        'Default' => [
                            $o[2],
                            $o[3],
                            $o[4],
                        ],
                        'Solutions' => [
                            $o[2],
                            $o[3],
                            $o[4],
                        ],
                    ],
                    5 => [
                        'Default' => [
                            $o[6],
                        ],
                        'Solutions' => [
                            $o[6],
                        ],
                    ],
                ],
                'message' => [
                    2 => 'solution.name.not_blank',
                    4 => 'This field must have characters only',
                ],
                'groups' => [
                    2 => [
                        'Default',
                        'Solutions',
                    ],
                    [
                        'Default',
                        'Solutions',
                    ],
                    [
                        'Default',
                        'Solutions',
                    ],
                    6 => [
                        'Default',
                        'Solutions',
                    ],
                ],
                'maxMessage' => [
                    3 => 'solution.name.length',
                    6 => 'solution.description.length',
                ],
                'max' => [
                    3 => 50,
                    6 => 500,
                ],
                'pattern' => [
                    4 => '/[$%<]/',
                ],
                'match' => [
                    4 => false,
                ],
            ],
        ],
        $o[0],
        []
    );
},
9 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            (($f = &\Symfony\Component\VarExporter\Internal\Registry::$factories)['Symfony\\Component\\Validator\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::f('Symfony\\Component\\Validator\\Mapping\\ClassMetadata'))(),
            ($f['Symfony\\Component\\Validator\\Mapping\\PropertyMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::f('Symfony\\Component\\Validator\\Mapping\\PropertyMetadata'))(),
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Symfony\\Component\\Validator\\Constraints\\NotBlank'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Symfony\\Component\\Validator\\Constraints\\NotBlank')),
            clone ($p['Symfony\\Component\\Validator\\Constraints\\Length'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Symfony\\Component\\Validator\\Constraints\\Length')),
            clone ($p['Symfony\\Component\\Validator\\Constraints\\Regex'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Symfony\\Component\\Validator\\Constraints\\Regex')),
            $f['Symfony\\Component\\Validator\\Mapping\\PropertyMetadata'](),
            clone $p['Symfony\\Component\\Validator\\Constraints\\Length'],
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'Webkul\\UVDesk\\SupportCenterBundle\\Entity\\SolutionCategory',
                    'name',
                    5 => 'description',
                ],
                'defaultGroup' => [
                    'SolutionCategory',
                ],
                'members' => [
                    [
                        'name' => [
                            $o[1],
                        ],
                        'description' => [
                            $o[5],
                        ],
                    ],
                ],
                'properties' => [
                    [
                        'name' => $o[1],
                        'description' => $o[5],
                    ],
                ],
                'class' => [
                    1 => 'Webkul\\UVDesk\\SupportCenterBundle\\Entity\\SolutionCategory',
                    5 => 'Webkul\\UVDesk\\SupportCenterBundle\\Entity\\SolutionCategory',
                ],
                'property' => [
                    1 => 'name',
                    5 => 'description',
                ],
                'constraints' => [
                    1 => [
                        $o[2],
                        $o[3],
                        $o[4],
                    ],
                    5 => [
                        $o[6],
                    ],
                ],
                'constraintsByGroup' => [
                    1 => [
                        'Default' => [
                            $o[2],
                            $o[3],
                            $o[4],
                        ],
                        'SolutionCategory' => [
                            $o[2],
                            $o[3],
                            $o[4],
                        ],
                    ],
                    5 => [
                        'Default' => [
                            $o[6],
                        ],
                        'SolutionCategory' => [
                            $o[6],
                        ],
                    ],
                ],
                'message' => [
                    2 => 'category.name.not_blank',
                    4 => 'This field must have characters only',
                ],
                'groups' => [
                    2 => [
                        'Default',
                        'SolutionCategory',
                    ],
                    [
                        'Default',
                        'SolutionCategory',
                    ],
                    [
                        'Default',
                        'SolutionCategory',
                    ],
                    6 => [
                        'Default',
                        'SolutionCategory',
                    ],
                ],
                'maxMessage' => [
                    3 => 'category.name.length',
                    6 => 'category.description.length',
                ],
                'max' => [
                    3 => 50,
                    6 => 500,
                ],
                'pattern' => [
                    4 => '/[$%<]/',
                ],
                'match' => [
                    4 => false,
                ],
            ],
        ],
        $o[0],
        []
    );
},
10 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            (($f = &\Symfony\Component\VarExporter\Internal\Registry::$factories)['Symfony\\Component\\Validator\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::f('Symfony\\Component\\Validator\\Mapping\\ClassMetadata'))(),
            ($f['Symfony\\Component\\Validator\\Mapping\\PropertyMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::f('Symfony\\Component\\Validator\\Mapping\\PropertyMetadata'))(),
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Symfony\\Component\\Validator\\Constraints\\NotBlank'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Symfony\\Component\\Validator\\Constraints\\NotBlank')),
            clone ($p['Symfony\\Component\\Validator\\Constraints\\Length'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Symfony\\Component\\Validator\\Constraints\\Length')),
            $f['Symfony\\Component\\Validator\\Mapping\\PropertyMetadata'](),
            clone $p['Symfony\\Component\\Validator\\Constraints\\NotBlank'],
            clone $p['Symfony\\Component\\Validator\\Constraints\\Length'],
            clone ($p['Symfony\\Component\\Validator\\Constraints\\Regex'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Symfony\\Component\\Validator\\Constraints\\Regex')),
            $f['Symfony\\Component\\Validator\\Mapping\\PropertyMetadata'](),
            clone ($p['Symfony\\Component\\Validator\\Constraints\\File'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Symfony\\Component\\Validator\\Constraints\\File')),
            clone ($p['Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntity'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntity')),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'Webkul\\UVDesk\\SupportCenterBundle\\Entity\\Article',
                    'name',
                    4 => 'slug',
                    8 => 'contentFile',
                ],
                'defaultGroup' => [
                    'Article',
                ],
                'members' => [
                    [
                        'name' => [
                            $o[1],
                        ],
                        'slug' => [
                            $o[4],
                        ],
                        'contentFile' => [
                            $o[8],
                        ],
                    ],
                ],
                'properties' => [
                    [
                        'name' => $o[1],
                        'slug' => $o[4],
                        'contentFile' => $o[8],
                    ],
                ],
                'constraints' => [
                    [
                        $o[10],
                    ],
                    [
                        $o[2],
                        $o[3],
                    ],
                    4 => [
                        $o[5],
                        $o[6],
                        $o[7],
                    ],
                    8 => [
                        $o[9],
                    ],
                ],
                'constraintsByGroup' => [
                    [
                        'Default' => [
                            $o[10],
                        ],
                        'Article' => [
                            $o[10],
                        ],
                    ],
                    [
                        'Default' => [
                            $o[2],
                            $o[3],
                        ],
                        'Article' => [
                            $o[2],
                            $o[3],
                        ],
                    ],
                    4 => [
                        'Default' => [
                            $o[5],
                            $o[6],
                            $o[7],
                        ],
                        'Article' => [
                            $o[5],
                            $o[6],
                            $o[7],
                        ],
                    ],
                    8 => [
                        'Default' => [
                            $o[9],
                        ],
                        'Article' => [
                            $o[9],
                        ],
                    ],
                ],
                'class' => [
                    1 => 'Webkul\\UVDesk\\SupportCenterBundle\\Entity\\Article',
                    4 => 'Webkul\\UVDesk\\SupportCenterBundle\\Entity\\Article',
                    8 => 'Webkul\\UVDesk\\SupportCenterBundle\\Entity\\Article',
                ],
                'property' => [
                    1 => 'name',
                    4 => 'slug',
                    8 => 'contentFile',
                ],
                'message' => [
                    2 => 'Name should not be blank !!',
                    5 => 'Slug should not be blank !!',
                    7 => 'Slug must not have special characters !!',
                    10 => 'Warning! This Slug is not available !!',
                ],
                'groups' => [
                    2 => [
                        'Default',
                        'Article',
                    ],
                    [
                        'Default',
                        'Article',
                    ],
                    5 => [
                        'Default',
                        'Article',
                    ],
                    [
                        'Default',
                        'Article',
                    ],
                    [
                        'Default',
                        'Article',
                    ],
                    9 => [
                        'Default',
                        'Article',
                    ],
                    [
                        'Default',
                        'Article',
                    ],
                ],
                'maxMessage' => [
                    3 => 'Name length must not be greater than 200 !!',
                    6 => 'Slug length must not be greater than 200 !!',
                ],
                'max' => [
                    3 => 200,
                    6 => 200,
                ],
                'pattern' => [
                    7 => '/[a-zA-Z-]/',
                ],
                'binaryFormat' => [
                    9 => false,
                ],
                'mimeTypes' => [
                    9 => [
                        'text/html',
                        'text/plain',
                    ],
                ],
                'maxSizeMessage' => [
                    9 => 'File size must not be greater than 2Mb !!',
                ],
                'mimeTypesMessage' => [
                    9 => 'Please upload HTML file !!',
                ],
                'fields' => [
                    10 => [
                        'slug',
                    ],
                ],
            ],
            'Symfony\\Component\\Validator\\Constraints\\File' => [
                'maxSize' => [
                    9 => 2000000,
                ],
            ],
        ],
        $o[0],
        []
    );
},

]];
