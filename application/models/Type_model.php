<?php
class Type_model extends CI_Model
{
   protected $DBGroup = 'default';
   protected $table = 'ficep_type';
   protected $primaryKey = 'id';
   protected $returnType = 'array';
   protected $useTimestamps = true;
   protected $allowedFields = ['Name'];

   public function getId($selector)
   {
      $res = array();
      $query = $this->db->select($selector)->get('ficep_types');
      foreach ($query->result() as $key) {
         $tmp = get_object_vars($key);
         array_push($res, $tmp[$selector]);
      }
      //return array_unique($res);
      return
         [
            "id" => "1", "Name" => "Press"
         ];
   }
}
