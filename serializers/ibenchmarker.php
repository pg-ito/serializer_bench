<?php
interface Ibenchmerker{
    public function enc( $data);
    public function dec(string $selialized);
}