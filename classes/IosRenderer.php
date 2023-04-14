<?php

include_once 'Renderer.php';

class IosRenderer implements Renderer
{
    public function renderType()
    {
        return 'Ios';
    }
}