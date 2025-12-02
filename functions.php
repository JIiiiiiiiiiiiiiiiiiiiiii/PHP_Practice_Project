<?php

function urlIs($path) {
    return $_SERVER['REQUEST_URI'] === $path;
}