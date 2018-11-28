//[Dashboard Javascript]

//Project:	Aries Admin - Responsive Admin Template
//Last change:  25/11/2017
//Primary use:   Used only for the main dashboard (index.html)


$(function () {

  'use strict';

  // Make the dashboard widgets sortable Using jquery UI
  $('.connectedSortable').sortable({
    placeholder         : 'sort-highlight',
    connectWith         : '.connectedSortable',
    handle              : '.box-header, .nav-tabs',
    forcePlaceholderSize: true,
    zIndex              : 999999
  });
  $('.connectedSortable .box-header, .connectedSortable .nav-tabs-custom').css('cursor', 'move');

	
	// Morris-chart

Morris.Area({
        element: 'morris-area-chart',
        data: [{
            period: '2010',
            mobile: 50,
            laptop: 80,
            tv: 20
        }, {
            period: '2011',
            mobile: 230,
            laptop: 200,
            tv: 180
        }, {
            period: '2012',
            mobile: 80,
            laptop: 160,
            tv: 70
        }, {
            period: '2013',
            mobile: 270,
            laptop: 200,
            tv: 100
        }, {
            period: '2014',
            mobile: 220,
            laptop: 180,
            tv: 190
        }, {
            period: '2015',
            mobile: 185,
            laptop: 180,
            tv: 140
        },
         {
            period: '2016',
            mobile: 50,
            laptop: 280,
            tv: 210
        }],
        xkey: 'period',
        ykeys: ['mobile', 'laptop', 'tv'],
        labels: ['mobile', 'laptop', 'tv'],
        pointSize: 3,
        fillOpacity: 0.5,
        pointStrokeColors:['#48b0f7', '#f96197', '#465161'],
        behaveLikeLine: true,
        gridLineColor: '#e0e0e0',
        lineWidth: 3,
        hideHover: 'auto',
        lineColors: ['#06d79c', '#398bf7', '#926dde'],
        resize: true
        
    });
	
	Morris.Area({
        element: 'morris-area-chart2',
        data: [{
            period: '2010',
            SiteA: 0,
            SiteB: 0,
            
        }, {
            period: '2011',
            SiteA: 130,
            SiteB: 100,
            
        }, {
            period: '2012',
            SiteA: 80,
            SiteB: 60,
            
        }, {
            period: '2013',
            SiteA: 70,
            SiteB: 200,
            
        }, {
            period: '2014',
            SiteA: 180,
            SiteB: 150,
            
        }, {
            period: '2015',
            SiteA: 105,
            SiteB: 90,
            
        },
         {
            period: '2016',
            SiteA: 250,
            SiteB: 150,
           
        }],
        xkey: 'period',
        ykeys: ['SiteA', 'SiteB'],
        labels: ['Site A', 'Site B'],
        pointSize: 0,
        fillOpacity: 0.9,
        pointStrokeColors:['#b4becb', '#01c0c8'],
        behaveLikeLine: true,
        gridLineColor: '#e0e0e0',
        lineWidth: 0,
        smooth: false,
        hideHover: 'auto',
        lineColors: ['#398bf7', '#f96868'],
        resize: true
        
    });
	
	 // WeatherIcon
	
	WeatherIcon.add('icon1'	, WeatherIcon.SLEET , {stroke:false , shadow:false , animated:true } );
	
	
	
 
  // SLIMSCROLL FOR CHAT WIDGET
  $('#direct-chat').slimScroll({
    height: '300px'
  });

	
// donut chart
		$('.donut').peity('donut');


}); // End of use strict
