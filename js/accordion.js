var navJson;
$.ajax({//считывание файла в котором выводится json
    	url: 'mocks/navigation.json.php',
    	dataType : "json",                    
    	success: function (data, textStatus) {
    		navJson = data;
		}
}).done(function() {

	var navHtml;
	$.ajax({//считывание html файла в котрый выводится весь список
		type : 'POST',
		url: 'templates/nav-cats.html',
		dataType : "html",                     
		success: function (data, textStatus) {
		  	navHtml = data;
		},
		error: function(jqXHR, textStatus, errorThrown) {
		  console.log(textStatus, errorThrown);
		}
	}).done(function() {
		$("#navaccordion").append(navHtml);
		var navSubitem;
		$.ajax({//считывание html файла в котрый выводится один пункт
			type : 'POST',
			url: 'templates/nav-subitem.html',
			dataType : "html",                     
			success: function (data, textStatus) {
			  	navSubitem = data;
			},
			error: function(jqXHR, textStatus, errorThrown) {
			  console.log(textStatus, errorThrown);
			}
		}).done(function() {


			for(var i = 0; i < navJson.length; i++){
				console.log(i);
				$("#accordion").append(navSubitem);
				$("#accordion h3").eq(i).append(navJson[i].title);
				for(var j = 0; j < navJson[i].subitems.length; j++){
					var flag;
					if(navJson[i].subitems[j].description==undefined)flag=false;else flag=true;
					var href = "<a href="+navJson[i].subitems[j].url+">"+navJson[i].subitems[j].title+"</a><br/>";
					var discr = '';
					if(flag){ discr = "<div class='description'>"+navJson[i].subitems[j].description+"</div>"};
					$(".subItem").eq(i).append(href+discr);
				}
			}

		    $( "#accordion" ).accordion({
			  heightStyle: "content" ,
			  active: setActiveAccordion()
			});

		});

	/*localstoradge start*/
			function setActiveAccordion(){
				var activeAccordion = $.totalStorage('active_accordion');
				if(activeAccordion == null) activeAccordion = 1;//if there wasn't any click, so storage is empty, default active is second accordion
				$('#accordion h3').click(function(e){
					e.preventDefault();
					var activeNumber = $(this).index('h3');				
					if (activeNumber >= 0){
						$.totalStorage('active_accordion', activeNumber);
					}
					return activeNumber;
				});
				return activeAccordion;
			}
	/*localstoradge end*/
	});
		

});
	