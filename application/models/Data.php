<?php
class Data extends CI_Model{
    function __construct() {
       parent::__construct();
    }


    public function AllContact(){
        $this->db->select('contacts.*,users.fullname');
        $this->db->from('contacts');
        $this->db->join('users','users.userId = contacts.addedby','left');
        $this->db->where('contacts.status','public');
        $query = $this->db->get();   
        return $query->result_array();
    }

    public function userView($contactId){
        $this->db->where('contactId', $contactId);
        $this->db->set('view', 'view+1', FALSE);
        $this->db->update('contacts');
        //$this->db->insert("users",$data); 
    }

    public function ContactInfo($contactId){
        $query = $this->db->get_where('contacts', array('contactId' => $contactId));
        return $query->result_array();
    }

    public function ViewContact($userId){
        $this->db->select('*');
        $this->db->from('contacts');
        $this->db->where('addedby',$userId);
        $query = $this->db->get();   
        return $query->result_array();
    }
    
    public function userDataName(){
        $this->db->select('firstName,lastName,mobile');
        $this->db->from('contacts');
        $this->db->where('status','public');
        $query = $this->db->get();   
        return $query->result_array();
    }
    public function userDataNumber(){
        $this->db->select('firstName,lastName,mobile');
        $this->db->from('contacts');
        $this->db->where('status','public');
        $query = $this->db->get();   
        return $query->result_array();
    }
    
    public function register($data){
       $this->db->insert("users",$data);  
    }
    
    public function contact($data){
        $this->db->insert("contacts",$data);  
     }
   
    public function read_user_information($email) {
        $condition = "email =" . "'" . $email . "'";
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();        
        if ($query->num_rows() == 1) {
        return $query->result();
        } else {
        return false;
        }
    }

    // Read data using username and password
    public function login($data) {
        $condition = "email =" . "'" . $data['email'] . "' AND " . "password =" . "'" . $data['password'] . "'";
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();    
        if ($query->num_rows() == 1) {
        return true;
        } else {
        return false;
        }
    }

    public function deleteData($id){
        $this->db->query("delete from contacts where contactId='".$id."'");
    }



}