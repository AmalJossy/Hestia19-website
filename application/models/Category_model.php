<?php
class Category_model extends CI_Model {
    public function create($data){
        $data['pswd']=password_hash($data['pswd'],PASSWORD_BCRYPT);
        $this->db->insert('categories', $data);
    }
    public function modify($id,$data){
        foreach($data as $attribute => $value){
            if( $value != NULL ){
                $this->db->set($attribute, $value);
            }
            if( $key == 'pswd' ){
                $this->db->set($key,password_hash($value,PASSWORD_BCRYPT));
            }
        }
        $this->db->where('cat_id', $data['cat_id']);
        $this->db->update('categories');
    }
    public function delete($id){
        $this->db->delete('categories', array('id' => $id));
    }
}
?>