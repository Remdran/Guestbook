<?php


class MessageController {

    /**
     * @var DatabaseConfig
     */
    protected $link;
    protected $messageArray;

    /**
     * Message constructor.
     * @param $messages
     */
    public function __construct(DatabaseConfig $link)
    {
        $this->link = $link;
    }

    public function index()
    {
        $sql = $this->link->query("*", "messages");

        foreach ($sql as $row) {
            $this->messageArray[] = $row;
        }

        return $this->messageArray;
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