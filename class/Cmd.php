<?php

class Cmd {

    private $title;
    private $cmd;

    public function __construct ($title, $cmd) {
        $this->title = $title;
        $this->cmd = $cmd;
    }

    public function getResponse() {
        $response = '<div class="title-cmd">'.$this->title.'</div>';
        $response .= '<div class="code"><code>'.$this->cmd.'</code></div>';
        return $response;
    }
}