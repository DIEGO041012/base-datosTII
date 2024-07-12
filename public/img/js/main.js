(function () {
	"use strict";

	var treeviewMenu = $('.app-menu');

	// Toggle Sidebar
	$('[data-toggle="sidebar"]').click(function(event) {
		event.preventDefault();
		$('.app').toggleClass('sidenav-toggled');
	});

	// Activate sidebar treeview toggle
	$("[data-toggle='treeview']").click(function(event) {
		event.preventDefault();
		if(!$(this).parent().hasClass('is-expanded')) {
			treeviewMenu.find("[data-toggle='treeview']").parent().removeClass('is-expanded');
		}
		$(this).parent().toggleClass('is-expanded');
	});

})();

const getOptionChart1=()=>{
	return {
		xAxis: {
		  type: 'category',
		  data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
		},
		yAxis: {
		  type: 'value'
		},
		series: [
		  {
			data: [150, 230, 224, 218, 135, 147, 260],
			type: 'line'
		  }
		]
	  };

};

const getOptionChart2=()=>{
	return {
		title: {
		  text: 'Referer of a Website',
		  subtext: 'Fake Data',
		  left: 'center'
		},
		tooltip: {
		  trigger: 'item'
		},
		legend: {
		  orient: 'vertical',
		  left: 'left'
		},
		series: [
		  {
			name: 'Access From',
			type: 'pie',
			radius: '50%',
			data: [
			  { value: 1048, name: 'Search Engine' },
			  { value: 735, name: 'Direct' },
			  { value: 580, name: 'Email' },
			  { value: 484, name: 'Union Ads' },
			  { value: 300, name: 'Video Ads' }
			],
			emphasis: {
			  itemStyle: {
				shadowBlur: 10,
				shadowOffsetX: 0,
				shadowColor: 'rgba(0, 0, 0, 0.5)'
			  }
			}
		  }
		]
	  };

};

const getOptionChart3=()=>{
	return {
		tooltip: {
		  trigger: 'axis',
		  axisPointer: {
			type: 'cross',
			crossStyle: {
			  color: '#999'
			}
		  }
		},
		toolbox: {
		  feature: {
			dataView: { show: true, readOnly: false },
			magicType: { show: true, type: ['line', 'bar'] },
			restore: { show: true },
			saveAsImage: { show: true }
		  }
		},
		legend: {
		  data: ['Evaporation', 'Precipitation', 'Temperature']
		},
		xAxis: [
		  {
			type: 'category',
			data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
			axisPointer: {
			  type: 'shadow'
			}
		  }
		],
		yAxis: [
		  {
			type: 'value',
			name: 'Precipitation',
			min: 0,
			max: 250,
			interval: 50,
			axisLabel: {
			  formatter: '{value} ml'
			}
		  },
		  {
			type: 'value',
			name: 'Temperature',
			min: 0,
			max: 25,
			interval: 5,
			axisLabel: {
			  formatter: '{value} °C'
			}
		  }
		],
		series: [
		  {
			name: 'Evaporation',
			type: 'bar',
			tooltip: {
			  valueFormatter: function (value) {
				return value + ' ml';
			  }
			},
			data: [
			  2.0, 4.9, 7.0, 23.2, 25.6, 76.7, 135.6, 162.2, 32.6, 20.0, 6.4, 3.3
			]
		  },
		  {
			name: 'Precipitation',
			type: 'bar',
			tooltip: {
			  valueFormatter: function (value) {
				return value + ' ml';
			  }
			},
			data: [
			  2.6, 5.9, 9.0, 26.4, 28.7, 70.7, 175.6, 182.2, 48.7, 18.8, 6.0, 2.3
			]
		  },
		  {
			name: 'Temperature',
			type: 'line',
			yAxisIndex: 1,
			tooltip: {
			  valueFormatter: function (value) {
				return value + ' °C';
			  }
			},
			data: [2.0, 2.2, 3.3, 4.5, 6.3, 10.2, 20.3, 23.4, 23.0, 16.5, 12.0, 6.2]
		  }
		]
	  };

};

const getOptionChart4=()=>{
	return {
		xAxis: {
		  data: ['Animals', 'Fruits', 'Cars']
		},
		yAxis: {},
		dataGroupId: '',
		animationDurationUpdate: 500,
		series: {
		  type: 'bar',
		  id: 'sales',
		  data: [
			{
			  value: 5,
			  groupId: 'animals'
			},
			{
			  value: 2,
			  groupId: 'fruits'
			},
			{
			  value: 4,
			  groupId: 'cars'
			}
		  ],
		  universalTransition: {
			enabled: true,
			divideShape: 'clone'
		  }
		}
	  };
	  const drilldownData = [
		{
		  dataGroupId: 'animals',
		  data: [
			['Cats', 4],
			['Dogs', 2],
			['Cows', 1],
			['Sheep', 2],
			['Pigs', 1]
		  ]
		},
		{
		  dataGroupId: 'fruits',
		  data: [
			['Apples', 4],
			['Oranges', 2]
		  ]
		},
		{
		  dataGroupId: 'cars',
		  data: [
			['Toyota', 4],
			['Opel', 2],
			['Volkswagen', 2]
		  ]
		}
	  ];
	  myChart.on('click', function (event) {
		if (event.data) {
		  var subData = drilldownData.find(function (data) {
			return data.dataGroupId === event.data.groupId;
		  });
		  if (!subData) {
			return;
		  }
		  myChart.setOption({
			xAxis: {
			  data: subData.data.map(function (item) {
				return item[0];
			  })
			},
			series: {
			  type: 'bar',
			  id: 'sales',
			  dataGroupId: subData.dataGroupId,
			  data: subData.data.map(function (item) {
				return item[1];
			  }),
			  universalTransition: {
				enabled: true,
				divideShape: 'clone'
			  }
			},
			graphic: [
			  {
				type: 'text',
				left: 50,
				top: 20,
				style: {
				  text: 'Back',
				  fontSize: 18
				},
				onclick: function () {
				  myChart.setOption(option);
				}
			  }
			]
		  });
		}
	  });

};

const getOptionChart5=()=>{
	return {
		tooltip: {
		  trigger: 'item'
		},
		legend: {
		  top: '5%',
		  left: 'center'
		},
		series: [
		  {
			name: 'Access From',
			type: 'pie',
			radius: ['40%', '70%'],
			avoidLabelOverlap: false,
			itemStyle: {
			  borderRadius: 10,
			  borderColor: '#fff',
			  borderWidth: 2
			},
			label: {
			  show: false,
			  position: 'center'
			},
			emphasis: {
			  label: {
				show: true,
				fontSize: 40,
				fontWeight: 'bold'
			  }
			},
			labelLine: {
			  show: false
			},
			data: [
			  { value: 1048, name: 'Search Engine' },
			  { value: 735, name: 'Direct' },
			  { value: 580, name: 'Email' },
			  { value: 484, name: 'Union Ads' },
			  { value: 300, name: 'Video Ads' }
			]
		  }
		]
	  };

};

const getOptionChart6=()=>{
	return {
		tooltip: {
		  trigger: 'item'
		},
		legend: {
		  top: '5%',
		  left: 'center'
		},
		series: [
		  {
			name: 'Access From',
			type: 'pie',
			radius: ['40%', '70%'],
			center: ['50%', '70%'],
			// adjust the start and end angle
			startAngle: 180,
			endAngle: 360,
			data: [
			  { value: 1048, name: 'Search Engine' },
			  { value: 735, name: 'Direct' },
			  { value: 580, name: 'Email' },
			  { value: 484, name: 'Union Ads' },
			  { value: 300, name: 'Video Ads' }
			]
		  }
		]
	  };

};

const getOptionChart7=()=>{
	return {
		legend: {
		  top: 'bottom'
		},
		toolbox: {
		  show: true,
		  feature: {
			mark: { show: true },
			dataView: { show: true, readOnly: false },
			restore: { show: true },
			saveAsImage: { show: true }
		  }
		},
		series: [
		  {
			name: 'Nightingale Chart',
			type: 'pie',
			radius: [50, 250],
			center: ['50%', '50%'],
			roseType: 'area',
			itemStyle: {
			  borderRadius: 8
			},
			data: [
			  { value: 40, name: 'rose 1' },
			  { value: 38, name: 'rose 2' },
			  { value: 32, name: 'rose 3' },
			  { value: 30, name: 'rose 4' },
			  { value: 28, name: 'rose 5' },
			  { value: 26, name: 'rose 6' },
			  { value: 22, name: 'rose 7' },
			  { value: 18, name: 'rose 8' }
			]
		  }
		]
	  };

};

const getOptionChart8=()=>{
	return {
		title: {
		  text: 'Referer of a Website',
		  subtext: 'Fake Data',
		  left: 'center'
		},
		tooltip: {
		  trigger: 'item'
		},
		legend: {
		  orient: 'vertical',
		  left: 'left'
		},
		series: [
		  {
			name: 'Access From',
			type: 'pie',
			radius: '50%',
			data: [
			  { value: 1048, name: 'Search Engine' },
			  { value: 735, name: 'Direct' },
			  { value: 580, name: 'Email' },
			  { value: 484, name: 'Union Ads' },
			  { value: 300, name: 'Video Ads' }
			],
			emphasis: {
			  itemStyle: {
				shadowBlur: 10,
				shadowOffsetX: 0,
				shadowColor: 'rgba(0, 0, 0, 0.5)'
			  }
			}
		  }
		]
	  };

};


const initCharts=()=>{
	const chart1=echarts.init(document.getElementById("chart1"));
	const chart2=echarts.init(document.getElementById("chart2"));
	const chart3=echarts.init(document.getElementById("chart3"));
	const chart4=echarts.init(document.getElementById("chart4"));
	const chart5=echarts.init(document.getElementById("chart5"));
	const chart6=echarts.init(document.getElementById("chart6"));
	const chart7=echarts.init(document.getElementById("chart7"));
	const chart8=echarts.init(document.getElementById("chart8"));

	chart1.setOption(getOptionChart1());
	chart2.setOption(getOptionChart2());
	chart3.setOption(getOptionChart3());
	chart4.setOption(getOptionChart4());
	chart5.setOption(getOptionChart5());
	chart6.setOption(getOptionChart6());
	chart7.setOption(getOptionChart7());
	chart8.setOption(getOptionChart8());
}

window.addEventListener('load' ,()=>{
	console.log("ok")
});