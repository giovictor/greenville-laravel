<?php

namespace App\Repositories;

interface BookRepositoryInterface {

    public function basicSearch($q, $type);

    public function collectionsSearch($q, $type, $id);
}

?>
