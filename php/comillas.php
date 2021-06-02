<?php 

// echo 'texto de mas de una
// linea comilla simple \' backslash \\ continuaar con mas texto';


echo ' \'texto de una sola linea\' ';
echo '<br>';

$name = 'mari';
echo "Mi nombre es $name";

$courses = [
    'backend' => [
        'PHP',
        'Laravel'
    ]
];

class User {
    public $name = 'italo';
}

$user = new User;

echo "$user->name quiere aprener {$courses['backend'][0]}";