<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Description of Monitoring_evaluation_model
 *
 * @author k
 */
class Monitoring_evaluation_model extends CI_Model {

    public function get_prep_register_availability($filters) {
        $columns = array();
        $prep_register_availability_data = array(
            array('type' => 'column', 'name' => 'NO', 'data' => array()),
            array('type' => 'column', 'name' => 'YES', 'data' => array())
        );

        $this->db->select("UPPER(`COL 4`) county, SUM(IF(`prep_register` = '1', 1, 0)) YES, SUM(IF(`prep_register` = '0', 1, 0)) NO", FALSE);
        $this->db->group_by('county');
        $query = $this->db->get('tbl_prep_data');
        $results = $query->result_array();

        if ($results) {
            foreach ($results as $result) {
                $columns[] = $result['county'];
                foreach ($prep_register_availability_data as $index => $prep_register_availability) {
                    if ($prep_register_availability['name'] == 'YES') {
                        array_push($prep_register_availability_data[$index]['data'], $result['YES']);
                    } else if ($prep_register_availability['name'] == 'NO') {
                        array_push($prep_register_availability_data[$index]['data'], $result['NO']);
                    }
                }
            }
        }
        return array('main' => $prep_register_availability_data, 'columns' => $columns);
    }

    public function get_rapid_assessment_tool_availability($filters) {
        $columns = array();
        $rapid_assessment_tool_data = array(
            array('type' => 'column', 'name' => 'NO', 'data' => array()),
            array('type' => 'column', 'name' => 'YES', 'data' => array())
        );

        $this->db->select("UPPER(`COL 4`) county, SUM(IF(`rapid_assessment_tool` = '1', 1, 0)) YES, SUM(IF(`rapid_assessment_tool` = '0', 1, 0)) NO", FALSE);
        $this->db->group_by('county');
        $query = $this->db->get('tbl_prep_data');
        $results = $query->result_array();

        if ($results) {
            foreach ($results as $result) {
                $columns[] = $result['county'];
                foreach ($rapid_assessment_tool_data as $index => $rapid_assessment_tool) {
                    if ($rapid_assessment_tool['name'] == 'YES') {
                        array_push($rapid_assessment_tool_data[$index]['data'], $result['YES']);
                    } else if ($rapid_assessment_tool['name'] == 'NO') {
                        array_push($rapid_assessment_tool_data[$index]['data'], $result['NO']);
                    }
                }
            }
        }
        return array('main' => $rapid_assessment_tool_data, 'columns' => $columns);
    }

    public function get_prep_summary_tool($filters) {
        $columns = array();
        $rapid_assessment_tool_data = array(
            array('type' => 'column', 'name' => 'NO', 'data' => array()),
            array('type' => 'column', 'name' => 'YES', 'data' => array())
        );

        $this->db->select("UPPER(`COL 4`) county, SUM(IF(`prep_summary_tool` = '1', 1, 0)) YES, SUM(IF(`prep_summary_tool` = '0', 1, 0)) NO", FALSE);
        $this->db->group_by('county');
        $query = $this->db->get('tbl_prep_data');
        $results = $query->result_array();

        if ($results) {
            foreach ($results as $result) {
                $columns[] = $result['county'];
                foreach ($rapid_assessment_tool_data as $index => $rapid_assessment_tool) {
                    if ($rapid_assessment_tool['name'] == 'YES') {
                        array_push($rapid_assessment_tool_data[$index]['data'], $result['YES']);
                    } else if ($rapid_assessment_tool['name'] == 'NO') {
                        array_push($rapid_assessment_tool_data[$index]['data'], $result['NO']);
                    }
                }
            }
        }
        return array('main' => $rapid_assessment_tool_data, 'columns' => $columns);
    }

    public function get_clinical_encounter_form($filters) {
        $columns = array();
        $rapid_assessment_tool_data = array(
            array('type' => 'column', 'name' => 'NO', 'data' => array()),
            array('type' => 'column', 'name' => 'YES', 'data' => array())
        );

        $this->db->select("UPPER(`COL 4`) county, SUM(IF(`clinical_encounter_form` = '1', 1, 0)) YES, SUM(IF(`clinical_encounter_form` = '0', 1, 0)) NO", FALSE);
        $this->db->group_by('county');
        $query = $this->db->get('tbl_prep_data');
        $results = $query->result_array();

        if ($results) {
            foreach ($results as $result) {
                $columns[] = $result['county'];
                foreach ($rapid_assessment_tool_data as $index => $rapid_assessment_tool) {
                    if ($rapid_assessment_tool['name'] == 'YES') {
                        array_push($rapid_assessment_tool_data[$index]['data'], $result['YES']);
                    } else if ($rapid_assessment_tool['name'] == 'NO') {
                        array_push($rapid_assessment_tool_data[$index]['data'], $result['NO']);
                    }
                }
            }
        }
        return array('main' => $rapid_assessment_tool_data, 'columns' => $columns);
    }

}
