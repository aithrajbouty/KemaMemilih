<?php namespace App\Models;
use CodeIgniter\Model;

class M_login extends Model
{
    public function get_data($npm, $password){
        return $this->db->table('user')
        ->where(array('npm' => $npm, 'password' => $password))
        ->get()->getRowArray();
    }
}