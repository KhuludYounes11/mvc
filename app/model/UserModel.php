<?php
namespace app\models;
class UserModel
{ private $db;
public function __construct($db)
{
    $this->db=$db;
}
public function getusers()
{
    $users=$this->db->get('user');
    return $users;
}
public function getuser($id)
{   $this->db->where('id',$id);
    $users=$this->db->get('user');
    return $users;
}
public function adduser($data)
{
    $add=$this->db->insert('user',$data);
    return $add;
}

public function updateuser($id,$data)
{   $this->db->where('id',$id);
    $update=$this->db->update('user',$data);
    return $update;
}
public function deleteuser($id)
{   $this->db->where('id',$id);
    $delete=$this->db->delete('user');
    return $delete;
}



}

?>