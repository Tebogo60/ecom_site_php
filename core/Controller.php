<?php

abstract class Controller
{
    protected mysqli $conn;

    protected function __construct(mysqli $conn)
    {
        $this->conn = $conn;
    }

    protected function render(string $viewPath, array $data = []): void
    {
        extract($data);
        require __DIR__ . "/../app/View/pages/" . $viewPath . ".php";
    }
}
