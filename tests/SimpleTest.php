<?php


public function testFunctionOne(){

    if($false) { return true; }
}

public function testEmptyTryCatch() {

    try {
        echo 'test';
    } catch { }
}
