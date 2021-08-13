<?php

class Machine_model extends CI_Model
{
   protected $DBGroup = 'default';
   protected $table = 'ficep_machines';
   protected $primaryKey = 'machine_id';
   protected $returnType = 'array';
   protected $useTimestamps = true;
   protected $allowedFields = ['name', 'customer', 'plant', 'technology', 'model', 'tool_id', 'cemas_tool_id'];

   public function getAll()
   {
      $res = array();
      $n = -1;
      if ($n != -1) {
         $query = $this->db->get('ficep_machines',$n);
         foreach ($query->result() as $key) {
            array_push($res, get_object_vars($key));
         }
      } else {
         $query = $this->db->get('ficep_machines');
         foreach ($query->result() as $key) {
            array_push($res, get_object_vars($key));
         }
      }
      return $res;
   }
   public function getBySelector($selector)
   {
      $res = array();
      $query = $this->db->select($selector)->get('ficep_machines');
      foreach ($query->result() as $key) {
         $tmp = get_object_vars($key);
         array_push($res, $tmp[$selector]);
      }
      return array_unique($res);
   }
   public function getNameLike($val)
   {
      $res = array();
      $this->db->select();
      $this->db->from('ficep_machines');
      $this->db->like('name', $val);
      $query = $this->db->get();
      foreach ($query->result() as $key) {
         array_push($res, get_object_vars($key));
      }
      return $res;
   }
   public function getNames()
   {
      $res = array();
      $this->db->select('name');
      $this->db->from('ficep_machines');
      $query = $this->db->get();
      foreach ($query->result() as $key) {
         $tmp = get_object_vars($key);
         array_push($res, $tmp['name']);
      }
      return $res;
   }
   public function first()
   {
      $res = array();
      $query = $this->db->get('ficep_machines');
      $res = $query->result();
      return get_object_vars($res[0]);
   }
   
}
