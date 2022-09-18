<?php

namespace App\Http\Domain\Model;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{

    protected $table = 'users';


    private $id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }



}
