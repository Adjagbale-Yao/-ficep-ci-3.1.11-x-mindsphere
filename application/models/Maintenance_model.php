<?php 

class Maintenance_model extends CI_Model
{
   protected $DBGroup = 'default';
   protected $table = 'maintenance_delay';
   protected $primaryKey = 'id';
   protected $returnType = 'array';
   protected $useTimestamps = true;
   protected $allowedFields = ['code','message','start','end','duration','machine'];

   public function getLatest()
   {
      // get lates maintenance
      return   [
         "id" => "1", "code" => "23", "message" => "Sostituzione valvola 3", 
         "start" => "2021-06-15 08:19:06", "end" => "2021-06-15 16:19:06",
         "duration" => "01:00:06", "machine" => "1"
      ];     
   }
    
}