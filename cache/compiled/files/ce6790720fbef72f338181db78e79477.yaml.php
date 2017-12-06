<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/storage/ssd4/593/2290593/public_html/user/config/plugins/email.yaml',
    'modified' => 1500532180,
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
