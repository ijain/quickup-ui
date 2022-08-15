<?php

namespace App\Model;

use PDO;

class DataModel
{
    private PDO | null $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    /**
     * return result array
     * @return array
     */
    public function get() : array
    {
        $result = null;

        try {
            $sql = 'select * from test';
            $result = $this->db->query($sql);
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }

        return $result ? $result->fetchAll() : [];
    }

    /**
     * return created ID
     * @return int
     */
    public function create() : int
    {
        return 123;
    }

    /**
     * return records affected
     * @return int
     */
    public function update() : int
    {
        return 1;
    }

    /**
     * return records affected
     * @return int
     */
    public function delete() : int
    {
        return 3;
    }
}
