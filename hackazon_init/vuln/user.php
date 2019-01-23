<?php
return array (
    'name' => 'user',
    'type' => 'controller',
    'technology' => 'web',
    'mapped_to' => 'user',
    'storage_role' => 'root',
    'children' => 
    array (
        'login' => 
        array (
            'name' => 'login',
            'type' => 'action',
            'technology' => 'web',
            'mapped_to' => 'login',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'return_url',
                    'source' => 'query',
                ),
                1 => 
                array (
                    'name' => 'email',
                    'source' => 'body',
                ),
                2 => 
                array (
                    'name' => 'password',
                    'source' => 'body',
                    'vulnerabilities' => 
                    array (
                        'vuln_list' => 
                        array (
                            'SQL' => 
                            array (
                                'enabled' => true,
                                'blind' => false,
                            ),
                        ),
                    ),
                ),
                3 => 
                array (
                    'name' => 'username',
                    'source' => 'body',
                    'vulnerabilities' => 
                    array (
                        'vuln_list' => 
                        array (
                            'SQL' => 
                            array (
                                'enabled' => true,
                                'blind' => false,
                            ),
                        ),
                    ),
                ),
            ),
            'vulnerabilities' => 
            array (
                'vuln_list' => 
                array (
                    'CSRF' => 
                    array (
                        'enabled' => true,
                    ),
                    'Referer' => 
                    array (
                        'enabled' => true,
                    ),
                    'SQL' => 
                    array (
                        'enabled' => true,
                        'blind' => false,
                    ),
                ),
            ),
        ),
        'password' => 
        array (
            'name' => 'password',
            'type' => 'action',
            'technology' => 'web',
            'mapped_to' => 'password',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'email',
                    'source' => 'body',
                ),
            ),
        ),
        'register' => 
        array (
            'name' => 'register',
            'type' => 'action',
            'technology' => 'web',
            'mapped_to' => 'register',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'first_name',
                    'source' => 'body',
                ),
                1 => 
                array (
                    'name' => 'last_name',
                    'source' => 'body',
                ),
                2 => 
                array (
                    'name' => 'email',
                    'source' => 'body',
                ),
                3 => 
                array (
                    'name' => 'display_name',
                    'source' => 'body',
                ),
                4 => 
                array (
                    'name' => 'password',
                    'source' => 'body',
                ),
                5 => 
                array (
                    'name' => 'password_confirmation',
                    'source' => 'body',
                ),
            ),
        ),
        'recover' => 
        array (
            'name' => 'recover',
            'type' => 'action',
            'technology' => 'web',
            'mapped_to' => 'recover',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'username',
                    'source' => 'query',
                ),
                1 => 
                array (
                    'name' => 'recover',
                    'source' => 'query',
                    'vulnerabilities' => 
                    array (
                        'vuln_list' => 
                        array (
                            'SQL' => 
                            array (
                                'enabled' => true,
                                'blind' => false,
                            ),
                        ),
                    ),
                ),
            ),
        ),
        'newpassw' => 
        array (
            'name' => 'newpassw',
            'type' => 'action',
            'technology' => 'web',
            'mapped_to' => 'newpassw',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'username',
                    'source' => 'body',
                ),
                1 => 
                array (
                    'name' => 'recover',
                    'source' => 'body',
                ),
                2 => 
                array (
                    'name' => 'password',
                    'source' => 'body',
                ),
                3 => 
                array (
                    'name' => 'cpassword',
                    'source' => 'body',
                ),
            ),
        ),
    ),
);