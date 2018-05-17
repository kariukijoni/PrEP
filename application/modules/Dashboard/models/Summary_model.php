<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Description of Summary_model
 *
 * @author k
 */
class Summary_model extends CI_Model {

    public function get_support_implementing_partners($filters) {
        $columns = array();

        $this->db->select("implementing_partner_prep_service name,COUNT(*)y", FALSE);
        if (!empty($filters)) {
            foreach ($filters as $category => $filter) {
                $this->db->where_in($category, $filter);
            }
        }
        $this->db->group_by('name');
        $this->db->order_by('y', 'DESC');
        $this->db->limit(50);
        $query = $this->db->get('tbl_prep_data');
        $results = $query->result_array();

        foreach ($results as $result) {
            array_push($columns, $result['name']);
        }

        return array('main' => $results, 'columns' => $columns);
    }

}
