$(document).ready(function() {

	/**
	 * call the data.php file to fetch the result from db table.
	 */
	$.ajax({
		url : "http://35.224.227.85/chartjs2/api/data-avaliacoes.php",
		type : "GET",
		success : function(data){
			console.log(data);
			
			var colors = ['green', 'orange', 'blue', 'red', 'brown', 'black', 'Magenta', 'OrangeRed', 'Purple', 'DeepPink', 'Indigo', 'Gold', 'Teal'];
			var len = data.length;
			var presets = window.chartColors;
			var utils = Samples.utils;
			
			var ctx1 = $("#radar-avaliacoes");

			var datasetValue = [];
			
			for (var i=0; i<len; i++) {
				datasetValue[i] = {
					label : data[i].pessoa,
					backgroundColor: "transparent",
					borderColor: colors[i],
					fill: '-1',
					data : [data[i].Agressividade, data[i].Desenv_Relacionamento, data[i].Facilidade_Mudancas, data[i].Extroversao, data[i].Dominancia, data[i].Desenv_Trab, data[i].Formalidade, data[i].Condescendencia, data[i].Concentracao, data[i].Perfil_Tecnico, data[i].Exatidao, data[i].Detalhismo, data[i].Perfil_Artistico, data[i].Paciencia, data[i].Empatia, data[i].Sociabilidade, data[i].Entusiasmo, data[i].Cap_Sonhar, data[i].Automotivacao, data[i].Independencia],
				}
			}
			
			var data1 = {
				labels : ["Agressividade", "Desenv. Relacionamento", "Facilidade com Mudanças", "Extroversão", "Dominância", "Desenv. Trabalho", "Formalidade", "Condescendência", "Concentração", "Perfil Técnico", "Exatidão", "Detalhismo", "Perfil Artístico", "Paciência", "Empatia", "Sociabilidade", "Entusiasmo", "Capacidade de Sonhar", "Automotivação", "Independência"],
				datasets : datasetValue
			};

			var options = {
				title : {
					display : true,
					position : "top",
					text : "Radar do Time "+data[0].time,
					fontSize : 18,
					fontColor : "#111"
				},
				legend : {
					display : true,
					position : "bottom"
				},
				maintainAspectRatio: true,
				spanGaps: false,
				elements: {
					line: {
						tension: 0.000001
					}
				},
				scale: {
					ticks: {
					    beginAtZero: true,
					    max: 100
					}
				}
			};


			var chart1 = new Chart( ctx1, {
				type : "radar",
				data : data1,
				options : options
			});


		},
		error : function(data) {
			console.log(data);
		}
	});

});
