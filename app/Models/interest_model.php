<?php

namespace App\Models;

use CodeIgniter\Model;

class interest_model extends ModeL
{
    protected $table = 'interest';
    protected $useTimeStamps = true;
    protected $allowedFields = ['id','username','interest','phone'];

    public function insertInterest($data)
    {
        
        return $this->table('interest')->insert($data);
    }

}

?>