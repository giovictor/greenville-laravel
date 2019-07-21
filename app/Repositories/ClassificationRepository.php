<?php

namespace App\Repositories;

use App\Classification;

class ClassificationRepository implements ClassificationRepositoryInterface {

    public function getClassificationByID($id)
    {
        return Classification::where('classificationID','=', $id)->first();
    }
}

?>
