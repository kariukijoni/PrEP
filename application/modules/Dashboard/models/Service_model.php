<?php

/**
 * Description of Services_offered
 *
 * @author k
 */
class Service_model extends CI_Model {

    public function get_county_PrEP_distribution($filters) {
        $columns = array();
        $county_PrEP_data = array(
            array('type' => 'column', 'name' => 'DC', 'data' => array()),
            array('type' => 'column', 'name' => 'MSM', 'data' => array()),
            array('type' => 'column', 'name' => 'GP', 'data' => array()),
            array('type' => 'column', 'name' => 'FSW', 'data' => array()),
            array('type' => 'column', 'name' => 'AGYW', 'data' => array()),
            array('type' => 'column', 'name' => 'PWID', 'data' => array()),
            array('type' => 'column', 'name' => 'OTHERS', 'data' => array()),
        );

        $this->db->select("UPPER(`COL 4`) county, SUM(IF(`COL 44` LIKE '%DC',1,0)) dc, SUM(IF(`COL 44` LIKE '%MSM',1,0)) msm, SUM(IF(`COL 44` LIKE '%GP',1,0)) gp, SUM(IF(`COL 44` LIKE '%FSW',1,0)) fsw,SUM(IF(`COL 44` LIKE '%AGYW',1,0)) agyw,SUM(IF(`COL 44` LIKE '%PWID',1,0)) pwid,SUM(IF(`COL 44` NOT LIKE '%DC' OR '%MSM 'OR '%GP' OR '%FSW' OR '%AGYW' OR '%PWID',1,0)) others", FALSE);
        $this->db->group_by('county');
        $this->db->order_by('dc', 'DESC');
        $this->db->limit(50);
        $query = $this->db->get('tbl_prep_data');
        $results = $query->result_array();

        if ($results) {
            foreach ($results as $result) {
                $columns[] = $result['county'];
                foreach ($county_PrEP_data as $index => $county_PrEP) {
                    if ($county_PrEP['name'] == 'DC') {
                        array_push($county_PrEP_data[$index]['data'], $result['dc']);
                    } else if ($county_PrEP['name'] == 'MSM') {
                        array_push($county_PrEP_data[$index]['data'], $result['msm']);
                    } else if ($county_PrEP['name'] == 'GP') {
                        array_push($county_PrEP_data[$index]['data'], $result['gp']);
                    } else if ($county_PrEP['name'] == 'FSW') {
                        array_push($county_PrEP_data[$index]['data'], $result['fsw']);
                    } else if ($county_PrEP['name'] == 'AGYW') {
                        array_push($county_PrEP_data[$index]['data'], $result['agyw']);
                    } else if ($county_PrEP['name'] == 'PWID') {
                        array_push($county_PrEP_data[$index]['data'], $result['pwid']);
                    } else if ($county_PrEP['name'] == 'OTHERS') {
                        array_push($county_PrEP_data[$index]['data'], $result['others']);
                    }
                }
            }
        }
        return array('main' => $county_PrEP_data, 'columns' => $columns);
    }
public function get_county_creatinine_distribution($filters) {
        $columns = array();
        $county_creatinine_data = array(
            array('type' => 'column', 'name' => 'without creatinine', 'data' => array()),
            array('type' => 'column', 'name' => 'with creatinine', 'data' => array())
        );

        $this->db->select("UPPER(`COL 4`) county, SUM(IF(`COL 55` = '1', 1, 0)) with_creatinine, SUM(IF(`COL 55` = '0', 1, 0)) without_creatinine", FALSE);
        $this->db->group_by('county');
        $query = $this->db->get('tbl_prep_data');
        $results = $query->result_array();

        if ($results) {
            foreach ($results as $result) {
                $columns[] = $result['county'];
                foreach ($county_creatinine_data as $index => $county_creatinine) {
                    if ($county_creatinine['name'] == 'with creatinine') {
                        array_push($county_creatinine_data[$index]['data'], $result['with_creatinine']);
                    } else if ($county_creatinine['name'] == 'without creatinine') {
                        array_push($county_creatinine_data[$index]['data'], $result['without_creatinine']);
                    }
                }
            }
        }
        return array('main' => $county_creatinine_data, 'columns' => $columns);
    }

    public function get_county_hepatitis_b_distribution($filters) {
        $columns = array();
        $county_hepatitis_data = array(
            array('type' => 'column', 'name' => 'without hepatitis B', 'data' => array()),
            array('type' => 'column', 'name' => 'with hepatitis B', 'data' => array())
        );

        $this->db->select("UPPER(`COL 4`) county, SUM(IF(`COL 58` = '1', 1, 0)) with_hepatitis_b, SUM(IF(`COL 58` = '0', 1, 0)) without_hepatitis_b", FALSE);
        $this->db->group_by('county');
        $query = $this->db->get('tbl_prep_data');
        $results = $query->result_array();

        if ($results) {
            foreach ($results as $result) {
                $columns[] = $result['county'];
                foreach ($county_hepatitis_data as $index => $county_hepatitis) {
                    if ($county_hepatitis['name'] == 'with hepatitis B') {
                        array_push($county_hepatitis_data[$index]['data'], $result['with_hepatitis_b']);
                    } else if ($county_hepatitis['name'] == 'without hepatitis B') {
                        array_push($county_hepatitis_data[$index]['data'], $result['without_hepatitis_b']);
                    }
                }
            }
        }
        return array('main' => $county_hepatitis_data, 'columns' => $columns);
    }

    public function get_county_hepatitis_c_distribution($filters) {
        $columns = array();
        $county_hepatitis_data = array(
            array('type' => 'column', 'name' => 'without hepatitis C', 'data' => array()),
            array('type' => 'column', 'name' => 'with hepatitis C', 'data' => array())
        );

        $this->db->select("UPPER(`COL 4`) county, SUM(IF(`COL 61` = '1', 1, 0)) with_hepatitis_c, SUM(IF(`COL 61` = '0', 1, 0)) without_hepatitis_c", FALSE);
        $this->db->group_by('county');
        $query = $this->db->get('tbl_prep_data');
        $results = $query->result_array();

        if ($results) {
            foreach ($results as $result) {
                $columns[] = $result['county'];
                foreach ($county_hepatitis_data as $index => $county_hepatitis) {
                    if ($county_hepatitis['name'] == 'with hepatitis C') {
                        array_push($county_hepatitis_data[$index]['data'], $result['with_hepatitis_c']);
                    } else if ($county_hepatitis['name'] == 'without hepatitis C') {
                        array_push($county_hepatitis_data[$index]['data'], $result['without_hepatitis_c']);
                    }
                }
            }
        }
        return array('main' => $county_hepatitis_data, 'columns' => $columns);
    }
    
    public function get_hiv_service_offered($filters) {
        $columns = array();

        $this->db->select("`COL 29` LIKE '%A' name, COUNT(*) y", FALSE);
//        SELECT sum(if(`COL 30`='1',1,0)) saa, sum(if(`COL 31`='1',1,0)),sum(if(`COL 32`='1',1,0)),sum(if(`COL 33`='1',1,0)),sum(if(`COL 34`='1',1,0)),sum(if(`COL 35`='1',1,0)),sum(if(`COL 36`='1',1,0)),sum(if(`COL 37`='1',1,0))
//FROM `tbl_prep_data`
//LIMIT 50
        $this->db->group_by('name');
        $this->db->order_by('y', 'DESC');
        $query = $this->db->get('tbl_prep_data');
        $results = $query->result_array();

        foreach ($results as $result) {
            array_push($columns, $result['name']);
        }

        return array('main' => $results, 'columns' => $columns);
    }

}
