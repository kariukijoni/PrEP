<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MX_Controller {

    public function index() {
        $data['page_title'] = 'PrEP | Dashboard';
        $this->load->view('template/dashboard_view', $data);
    }

    public function get_chart() {
        $chartname = $this->input->post('name');
        $selectedfilters = $this->get_filter($chartname, $this->input->post('selectedfilters'));
        //Get chart configuration
        $data['chart_name'] = $chartname;
        $data['chart_title'] = $this->config->item($chartname . '_title');
        $data['chart_yaxis_title'] = $this->config->item($chartname . '_yaxis_title');
        $data['chart_xaxis_title'] = $this->config->item($chartname . '_xaxis_title');
        $data['chart_source'] = $this->config->item($chartname . '_source');
        //Get data
        $main_data = array('main' => array(), 'drilldown' => array(), 'columns' => array());
        $main_data = $this->get_data($chartname, $selectedfilters);
        if ($this->config->item($chartname . '_has_drilldown')) {
            $data['chart_drilldown_data'] = json_encode(@$main_data['drilldown'], JSON_NUMERIC_CHECK);
        } else {
            $data['chart_categories'] = json_encode(@$main_data['columns'], JSON_NUMERIC_CHECK);
        }
        $data['selectedfilters'] = htmlspecialchars(json_encode($selectedfilters), ENT_QUOTES, 'UTF-8');
        $data['chart_series_data'] = json_encode($main_data['main'], JSON_NUMERIC_CHECK);
        //Load chart
        $this->load->view($this->config->item($chartname . '_chartview'), $data);
    }

    public function get_filter($chartname, $selectedfilters) {
        $filters = $this->config->item($chartname . '_filters_default');
        $filtersColumns = $this->config->item($chartname . '_filters');

        if (!empty($selectedfilters)) {
            foreach (array_keys($selectedfilters) as $filter) {
                if (in_array($filter, $filtersColumns)) {
                    $filters[$filter] = $selectedfilters[$filter];
                }
            }
        }
        return $filters;
    }

    public function get_data($chartname, $filters) {
        if ($chartname == 'hiv_service_offered_chart') {
            $main_data = $this->Service_model->get_hiv_service_offered($filters);
        }else if ($chartname == 'county_population_offered_PrEP_chart') {
            $main_data = $this->Service_model->get_county_PrEP_distribution($filters);
        } else if ($chartname == 'support_implementing_partners_chart') {
            $main_data = $this->Summary_model->get_support_implementing_partners($filters);
        } else if ($chartname == 'prep_register_availability_chart') {
            $main_data = $this->Monitoring_evaluation_model->get_prep_register_availability($filters);
        } else if ($chartname == 'rapid_assessment_tool_availability_chart') {
            $main_data = $this->Monitoring_evaluation_model->get_rapid_assessment_tool_availability($filters);
        } else if ($chartname == 'prep_summary_tool_chart') {
            $main_data = $this->Monitoring_evaluation_model->get_prep_summary_tool($filters);
        } else if ($chartname == 'clinical_encounter_form_chart') {
            $main_data = $this->Monitoring_evaluation_model->get_clinical_encounter_form($filters);
        } else if ($chartname == 'software_managing_prep_commodities_chart') {
            $main_data = $this->Commodity_management_model->get_software_managing_prep_commodities($filters);
        }  else if ($chartname == 'county_creatinine_availability_chart') {
            $main_data = $this->Service_model->get_county_creatinine_distribution($filters);
        } else if ($chartname == 'county_hepatitis_b_availability_chart') {
            $main_data = $this->Service_model->get_county_hepatitis_b_distribution($filters);
        } else if ($chartname == 'county_hepatitis_c_availability_chart') {
            $main_data = $this->Service_model->get_county_hepatitis_c_distribution($filters);
        } else if ($chartname == 'facility_population_offered_PrEP_chart') {
            $main_data = $this->Facility_model->get_facility_PrEP_distribution($filters);
        }
        return $main_data;
    }

}
