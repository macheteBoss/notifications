<?php

include_once 'Renderer.php';

class AndroidRenderer implements Renderer
{
    public function renderType()
    {
        return 'Android';
    }
}