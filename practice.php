<?php
$programmingLanguages = ['php', 'java', 'c++', 'python', 'java script'];

foreach($programmingLanguages as $key => &$language) {
    // $language = 'ruby';
    echo $key . ': ' . $language . '<br />' ;
}

$user = [
    'name' => 'Tusar',
    'email' => 'tusar@mail.com',
    'skills' => ['php', 'flutter', 'react']
];

foreach($user as $key => $value) :
    echo $key . ':' ;
    if(is_array($value)){
        foreach($value as $skill) {
            echo $skill . '-';
        }
    }
    else{
        echo $value;
    }
    echo '<br />';
    // echo $key . ': '. $value . '<br />';
endforeach;

$paymentStatus = 2;

// match expression
match($paymentStatus){
    1 => print 'paid',
    2 => print 'payment decline',
    3 => print 'pending payment'
}
?>