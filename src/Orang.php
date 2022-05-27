<?php
namespace Adit\SayHello;
class Orang
{

    public function __construct(private string $nama)
    {
    }

    function sayhello(string $nama = "Tamu"): string{
        return "hai $nama, namaku $this->nama";
    }
}