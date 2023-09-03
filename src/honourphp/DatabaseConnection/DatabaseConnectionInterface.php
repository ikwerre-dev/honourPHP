<?php

declare(strict_types=1);

namespace honourphp\DatabaseConnection;

interface DatabaseConnectionInterface
{
    /**
     * Creates a new database connection
     * @return PDO
     */
    public function open() : PDO;

    /**
     * Close databse connection
     */
    public function close() : void;
}
