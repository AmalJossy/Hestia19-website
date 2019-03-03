<?php
class Category_model extends CI_Model {
    public $cat_id;
    public $cat_name;
    public $username;
    private $pswd;
    public function create($data){
        $this->cat_id=$data['cat_id'];
        $this->cat_name=$data['cat_name'];
        $this->username=$data['username'];
        $this->pswd=password_hash($data['cat_id'],PASSWORD_BCRYPT);
        $this->db->insert('categories', $this);
    }
    public function modify($data){
        if(isset($data['cat_name'])){
            $this->db->set('cat_name', $data['cat_name']);
        }
        if(isset($data['username'])){
            $this->db->set('username', $data['username']);
        }
        if(isset($data['pswd'])){
            $this->db->set('pswd',password_hash($data['cat_id'],PASSWORD_BCRYPT));
        }
        $this->db->where('cat_id', $data['cat_id']);
        $this->db->update('categories');
    }
    public function delete($id){
        $this->db->delete('categories', array('id' => $id));
    }
}
?>