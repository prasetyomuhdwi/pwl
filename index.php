<?php

abstract class Nation
{
    abstract public function greet();
}

class Indonesia extends Nation
{
    public function greet()
    {
        return 'Halo!';
    }
}

class English extends Nation
{
    public function greet()
    {
        return 'Hello!';
    }
}

class Japan extends Nation
{
    public function greet()
    {
        return "こんにちは! (Kon'nichiwa!)";
    }
}

class French extends Nation
{
    public function greet()
    {
        return 'Bonjour!';
    }
}

class American extends Nation
{
    public function greet()
    {
        return 'Hi!';
    }
}

function greeting($nation)
{
    foreach ($nation as $people) {
        echo $people->greet() . '<br>';
    }
}

$nation = [
    new Indonesia(),
    new English(),
    new Japan(),
    new French(),
    new American()
];
?>
<h2>Salam dalam berbagai macam negara : </h2>

<?php
greeting($nation);
?>