<?php

class Cmd
{

    private $title;
    private $cmd;
    private $description;

    public function __construct ($title, $cmd, $description = null)
    {
        $this->title = $title;
        $this->cmd = $cmd;
        $this->description = $description;
    }

    public function getResponse()
    {
        $response = '<div class="div-cmd">';
        $response .= '<div class="title-cmd">'.$this->title.'</div>';
        // if (isset($this->description)) {
        //     $response .= '# ';
        // }
        $response .= '<pre><code>'.$this->cmd.'</code></pre>';
        $response .= '</div>';

        return $response;
    }
}