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

    public function storeToDB()
    {
        // Bind these to variables and other security
        $statement = $this->pdo->prepare("INSERT INTO messages (user_name, comment, created_at) VALUES ('" .
            $_POST['name'] . "', '" . $_POST['comment'] . "', '" . date('Y-m-d h:i:s') . "')");

        $statement->execute();
    }
}