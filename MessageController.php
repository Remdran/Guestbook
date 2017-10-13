<?php


class MessageController {

    /**
     * @var DatabaseConfig
     */
    protected $link;

    /**
     * Message constructor.
     * @param PDO $link
     */
    public function __construct(PDO $link)
    {
        $this->link = $link;
    }

    public function getComment()
    {
        return $this->link->query("*", "messages");
    }

    public function store()
    {
        var_dump($_POST);
    }

    public function show()
    {
        # code...
    }

    public function destroy()
    {
        # code...
    }
}