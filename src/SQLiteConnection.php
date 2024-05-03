<?php

namespace Kotodama;

use PDO;
use PDOException;

class SQLiteConnection {
    private $pdo;
    private $dbPath = __DIR__ . '/../resources/database/kotodama.db';

    public function __construct() {
        try {
            $this->pdo = new PDO("sqlite:$this->dbPath");
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("DB connection failed: " . $e->getMessage());
        }
    }

    /**
     * データベース接続を取得
     * @return PDO
     */
    public function getConnection() {
        return $this->pdo;
    }

    /**
     * データベース接続を閉じる
     */
    public function closeConnection() {
        $this->pdo = null;
    }
}