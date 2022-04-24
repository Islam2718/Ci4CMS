<?php 
namespace App\Models;
use CodeIgniter\Model;

class GalleryModel extends Model
{
    protected $table = 'tbl_gallery';
    //protected $primaryKey = 'id'; 
    protected $allowedFields = [
        'id', 'title', 'description', 'thumb', 'link_url','meta_key', 'meta_des', 'meta_schema', 'status','created_at'
    ];
    
    // protected $beforeInsert = ['beforeInsert'];
    // protected $beforeUpdate = ['beforeUpdate']; 

    // protected function beforeInsert(array $data){    
    //  $data['data']['access'] = 1; 
    //  return $data; 
    // }

    // protected function beforeUpdate(array $data){
    //  return $data; 
    // }
}