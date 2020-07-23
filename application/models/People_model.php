<?php 
    class People_model extends CI_model
    {
        public function getAllPeople()
        {
            return $this->db->get('people')->result_array();
        }

        public function getPeople($limit, $start, $keyword = null)
        {
            if($keyword){
                $this->db->like('name', $keyword);
            }
            return $this->db->get('people', $limit, $start)->result_array();
        }

        public function countAllPeople()
        {
            return $this->db->get('people')->num_rows();
        }

        public function getPeopleById($id)
        {
            return $this->db->get_where('people',['id'=>$id])->row_array();
        }

        public function addPeople()
        {
            $data = [
                "name" => $this->input->post('name',true),
                "email" => $this->input->post('email',true),
                "address" => $this->input->post('address',true)
            ];

            $this->db->insert('people', $data);
        }

        public function editPeople()
        {
            $data = [
                "name" => $this->input->post('name',true),
                "email" => $this->input->post('email',true),
                "address" => $this->input->post('address',true)
            ];

            $this->db->where('id',$this->input->post('id'));
            $this->db->update('people', $data);
        }

        public function deletePeople($id)
        {
            $this->db->where('id', $id);
            $this->db->delete('people');
        }
    }
    
?>