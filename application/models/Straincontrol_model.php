<?php 

class Straincontrol_model extends CI_Model
{
   protected $DBGroup = 'default';
   protected $table = 'strain_control';
   protected $primaryKey = 'id';
   protected $returnType = 'array';
   protected $useTimestamps = true;
   protected $allowedFields = ['minimum','maximum','first_threshold_out','second_threshold_out','value','machine'];

   public function get()
   {
      return [
         "id"=>"7",
         "minimum"=>"2",
         "maximum"=>"200",
         "first_threshold_out"=>"46",
         "second_threshold_out"=>"44",
         "value"=>"12",
         "machine"=>"1"
      ];
   }
}