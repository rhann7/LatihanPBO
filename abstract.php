<?php
abstract class User
{
    // abstract method memiliki body, ditandai
    // dengan disertai {}
    // ini yang salah
    // abstract protected function showName(){
    //     //
    // }

    // ini yang benar
    abstract protected function showGreeting();
}