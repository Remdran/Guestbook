<?php


class QueryBuilder {

    protected $pdo;

    /**
     * QueryBuilder constructor.
     * @param $pdo
     */
    public function __construct(PDO $pdo)
    {

        $this->pdo = $pdo;
    }

    /**
     * @param $table
     * @return mixed
     */
    public function retrieveAll($table, $intoClass)
    {
        $statement = $this->pdo->prepare("SELECT * FROM " . $table);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);
    }
}