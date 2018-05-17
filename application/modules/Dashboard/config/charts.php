<?php

defined('BASEPATH') OR exit('No direct script access allowed');

//service offered chart
$config['hiv_service_offered_chart_chartview'] = 'charts/column_view';
$config['hiv_service_offered_chart_title'] = ' HIV Services Offered (By facility)';
$config['hiv_service_offered_chart_yaxis_title'] = 'Services';
$config['hiv_service_offered_chart_source'] = 'Source: www.commodities.nascop.org';
$config['hiv_service_offered_chart_has_drilldown'] = FALSE;
$config['hiv_service_offered_chart_filters'] = array();
$config['hiv_service_offered_chart_filters_default'] = array();

//Support Implementing partners
$config['support_implementing_partners_chart_chartview'] = 'charts/pie_view';
$config['support_implementing_partners_chart_title'] = 'Support Implementing Partners';
$config['support_implementing_partners_chart_yaxis_title'] = 'Partners';
$config['support_implementing_partners_chart_source'] = 'Source: www.commodities.nascop.org';
$config['support_implementing_partners_chart_has_drilldown'] = FALSE;
$config['support_implementing_partners_chart_filters'] = array();
$config['support_implementing_partners_chart_filters_default'] = array();

//county population offered PrEP chart
$config['county_population_offered_PrEP_chart_chartview'] = 'charts/stacked_column_view';
$config['county_population_offered_PrEP_chart_title'] = 'Population Offered PrEP (By County)';
$config['county_population_offered_PrEP_chart_yaxis_title'] = 'No. of Patients';
$config['county_population_offered_PrEP_chart_source'] = 'Source: www.commodities.nascop.org';
$config['county_population_offered_PrEP_chart_has_drilldown'] = FALSE;
$config['county_population_offered_PrEP_chart_filters'] = array();
$config['county_population_offered_PrEP_chart_filters_default'] = array();

//county creatinine availability chart
$config['county_creatinine_availability_chart_chartview'] = 'charts/combined_column_line_view';
$config['county_creatinine_availability_chart_title'] = 'Availability Of Creatinine Equipment on Facilities (By County)';
$config['county_creatinine_availability_chart_yaxis_title'] = 'No. Of Creatinine Equipments';
$config['county_creatinine_availability_chart_source'] = 'Source: www.commodities.nascop.org';
$config['county_creatinine_availability_chart_has_drilldown'] = FALSE;
$config['county_creatinine_availability_chart_filters'] = array();
$config['county_creatinine_availability_chart_filters_default'] = array();

//county hepatitis b availablity chart
$config['county_hepatitis_b_availability_chart_chartview'] = 'charts/combined_column_line_view';
$config['county_hepatitis_b_availability_chart_title'] = 'Availability Of Hepatitis B Equipment on Facilities (By County)';
$config['county_hepatitis_b_availability_chart_yaxis_title'] = 'No. Of Hepatitis B Equipments';
$config['county_hepatitis_b_availability_chart_source'] = 'Source: www.commodities.nascop.org';
$config['county_hepatitis_b_availability_chart_has_drilldown'] = FALSE;
$config['county_hepatitis_b_availability_chart_filters'] = array();
$config['county_hepatitis_b_availability_chart_filters_default'] = array();

//county hepatitis c availability chart
$config['county_hepatitis_c_availability_chart_chartview'] = 'charts/combined_column_line_view';
$config['county_hepatitis_c_availability_chart_title'] = 'Availability Of Hepatitis C Equipment on Facilities (By County)';
$config['county_hepatitis_c_availability_chart_yaxis_title'] = 'No. Of Hepatitis C Equipments';
$config['county_hepatitis_c_availability_chart_source'] = 'Source: www.commodities.nascop.org';
$config['county_hepatitis_c_availability_chart_has_drilldown'] = FALSE;
$config['county_hepatitis_c_availability_chart_filters'] = array();
$config['county_hepatitis_c_availability_chart_filters_default'] = array();

//PrEP register availability chart
$config['prep_register_availability_chart_chartview'] = 'charts/stacked_column_percent_view';
$config['prep_register_availability_chart_title'] = 'PrEP Register Availability (By County)';
$config['prep_register_availability_chart_yaxis_title'] = 'No. of registers';
$config['prep_register_availability_chart_source'] = 'Source: www.commodities.nascop.org';
$config['prep_register_availability_chart_has_drilldown'] = FALSE;
$config['prep_register_availability_chart_filters'] = array();
$config['prep_register_availability_chart_filters_default'] = array();

//Rapid Assessment tool availability chart
$config['rapid_assessment_tool_availability_chart_chartview'] = 'charts/stacked_column_percent_view';
$config['rapid_assessment_tool_availability_chart_title'] = 'Rapid Assessment Tool Availability (By County)';
$config['rapid_assessment_tool_availability_chart_yaxis_title'] = 'No. of tools';
$config['rapid_assessment_tool_availability_chart_source'] = 'Source: www.commodities.nascop.org';
$config['rapid_assessment_tool_availability_chart_has_drilldown'] = FALSE;
$config['rapid_assessment_tool_availability_chart_filters'] = array();
$config['rapid_assessment_tool_availability_chart_filters_default'] = array();

//PrEP summary tool chart
$config['prep_summary_tool_chart_chartview'] = 'charts/stacked_column_percent_view';
$config['prep_summary_tool_chart_title'] = 'PrEP Summary Tool (By County)';
$config['prep_summary_tool_chart_yaxis_title'] = 'No. of tools';
$config['prep_summary_tool_chart_source'] = 'Source: www.commodities.nascop.org';
$config['prep_summary_tool_chart_has_drilldown'] = FALSE;
$config['prep_summary_tool_chart_filters'] = array();
$config['prep_summary_tool_chart_filters_default'] = array();

//Clinical Encounter Form chart
$config['clinical_encounter_form_chart_chartview'] = 'charts/stacked_column_percent_view';
$config['clinical_encounter_form_chart_title'] = 'Clinical Encounter Form (By County)';
$config['clinical_encounter_form_chart_yaxis_title'] = 'No. of tools';
$config['clinical_encounter_form_chart_source'] = 'Source: www.commodities.nascop.org';
$config['clinical_encounter_form_chart_has_drilldown'] = FALSE;
$config['clinical_encounter_form_chart_filters'] = array();
$config['clinical_encounter_form_chart_filters_default'] = array();

//Software used to manage PrEP commodities chart
$config['software_managing_prep_commodities_chart_chartview'] = 'charts/column_view';
$config['software_managing_prep_commodities_chart_title'] = 'Application Used To Manage PrEP Commodities';
$config['software_managing_prep_commodities_chart_yaxis_title'] = 'No. of tools';
$config['software_managing_prep_commodities_chart_source'] = 'Source: www.commodities.nascop.org';
$config['software_managing_prep_commodities_chart_has_drilldown'] = FALSE;
$config['software_managing_prep_commodities_chart_filters'] = array();
$config['software_managing_prep_commodities_chart_filters_default'] = array();

//facility population offered PrEP
$config['facility_population_offered_PrEP_chart_chartview'] = 'charts/pie_view';
$config['facility_population_offered_PrEP_chart_title'] = 'Population Offered PrEP (By Facilities)';
$config['facility_population_offered_PrEP_chart_yaxis_title'] = 'Services';
$config['facility_population_offered_PrEP_chart_source'] = 'Source: www.commodities.nascop.org';
$config['facility_population_offered_PrEP_chart_has_drilldown'] = FALSE;
$config['facility_population_offered_PrEP_chart_filters'] = array();
$config['facility_population_offered_PrEP_chart_filters_default'] = array();

