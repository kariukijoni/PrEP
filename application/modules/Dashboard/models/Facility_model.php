<?php

/**
 * Description of Facility_model
 *
 * @author k
 */
class Facility_model extends CI_Model {

    public function get_facility_PrEP_distribution($filters) {
        $columns = array();

        $this->db->select("`COL 44` name, COUNT(*) y", FALSE);
        $this->db->group_by('name');
//        $this->db->order_by('y', 'DESC');
        $query = $this->db->get('tbl_prep_data');
        $results = $query->result_array();

        foreach ($results as $result) {
            array_push($columns, $result['name']);
        }

        return array('main' => $results, 'columns' => $columns);
    }

}
