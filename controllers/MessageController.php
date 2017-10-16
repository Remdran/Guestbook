<?php
require('Message.php');

class MessageController {

    /**
     * @var DatabaseConfig
     */
    protected $query;

    /**
     * Message constructor.
     * @param $query
     */
    public function __construct(QueryBuilder $query)
    {
        $this->query = $query;
    }

    public function getComment()
    {
        return $this->query->retrieveAll("messages", 'Message');
    }

    public function store()
    {
        $this->query->storeToDB();
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