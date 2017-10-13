<?php


class QueryBuilder {

    protected $pdo;

    /**
     * QueryBuilder constructor.
     * @param $pdo
     */
    public function __construct($pdo)
    {

        $this->pdo = $pdo;
    }

    /**
     * @param $table
     * @return mixed
     */
    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("SELECT * FROM " . $table);
        $statement->execute();

        // Save the fetched OBjs into a Message class and return them
        return $statement->fetchAll(PDO::FETCH_CLASS, 'Message');
    }
}