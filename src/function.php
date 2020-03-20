<?php 

function sayHello(string $name): string
{
   //corps de ma fonction
   return 'Hello ' . $name;
}


function whoAmI(string $name, array $watchMen): ?string
{
    $sentence = $name . ' n\'est pas un watchmen !';
    if( in_array($name, $watchMen))  {
        $sentence = $name . ' est un watchmen !';
    }
    return $sentence;
}




