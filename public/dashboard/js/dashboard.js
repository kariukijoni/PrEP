var chartURL = 'Dashboard/get_chart'
var charts = {
    'summary':['support_implementing_partners_chart'],
    'services': ['county_population_offered_PrEP_chart','county_creatinine_availability_chart','county_hepatitis_b_availability_chart','county_hepatitis_c_availability_chart','hiv_service_offered_chart'],
    'county': [],
    'monitoring_evaluation':['prep_register_availability_chart','rapid_assessment_tool_availability_chart','prep_summary_tool_chart','clinical_encounter_form_chart'],
    'commodity_management':['software_managing_prep_commodities_chart'],
    'facility': ['facility_population_offered_PrEP_chart']
}
var filters = {}
var tabName = 'services'

//Autoload
$(function () {
    //Load default tab charts
    LoadTabContent(tabName)
    //Tab change Event
    $("#main_tabs li a").on("click", TabFilterHandler);
});
function LoadTabContent(tabName) {
    //Refresh tab chart(s)
    if (charts[tabName].length > 0) {
        $.each(charts[tabName], function (key, chartName) {
            LoadSpinner('#' + chartName)
        });
    }
    //Set tab filter
    setTabFilter(tabName)
}

function setTabFilter(tabName) {
    //Load charts without filter options
    if (charts[tabName].length > 0) {
        $.each(charts[tabName], function (key, chartName) {
            chartID = '#' + chartName
            LoadChart(chartID, chartURL, chartName, filters)
        });
    }
}


function LoadChart(divID, chartURL, chartName,) {
    //Load Spinner
    LoadSpinner(divID)
    //Load Chart*
    $(divID).load(chartURL, {'name': chartName});
}

function LoadSpinner(divID) {
    var spinner = new Spinner().spin()
    $(divID).empty('')
    $(divID).height('auto')
    $(divID).append(spinner.el)
}

function TabFilterHandler(e) {
    var filtername = $(e.target).attr('href');
    if (filtername !== '#' && filtername.charAt(0) == "#") {
        filters = {}
        //Set tabName
        tabName = filtername.replace('#', '');
        //Clear heading
        $(".heading").empty();
        //Load selected tab charts
        LoadTabContent(tabName)
    }
}