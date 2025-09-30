<?php

class HomeController extends Controller
{
    public function __construct(mysqli $conn)
    {
        parent::__construct($conn);
    }

    public function index(): void
    {
        $this->render("home", [
            "title" => "Home Page"
        ]);
    }
}
