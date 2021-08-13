<?php 

class Strokesets_model extends CI_Model
{
   protected $DBGroup = 'default';
   protected $table = 'stroke_sets';
   protected $primaryKey = 'id';
   protected $returnType = 'array';
   protected $useTimestamps = true;
   protected $allowedFields = ['machine','shift','day','number_pieces','type'];

    
}