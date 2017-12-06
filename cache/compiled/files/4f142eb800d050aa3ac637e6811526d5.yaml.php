<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/reynell/user/config/plugins/email.yaml',
    'modified' => 1511920376,
    'data' => [
        'enabled' => true,
        'from' => 'bobihisreynell@gmail.com',
        'to' => 'reynellbobihis@gmail.com',
        'mailer' => [
            'engine' => 'smtp',
            'smtp' => [
                'server' => 'smtp.gmail.com',
                'port' => 465,
                'encryption' => 'ssl',
                'user' => 'bobihisreynell@gmail.com',
                'password' => 'scrjcgfqzbbgeswi'
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail'
            ]
        ]
    ]
];
