/**
 * Js paginación
 * 
 * @description paginar resultados
 * @author NAR
 * @modified 
 * @version 1.0
 * 
 */

(function(window) {
    var _self = null;
    var js = {
        defaultConfig:{
        	urlController: "",    
        },
        config:{
        	urlController: "",
        },

        vars:{
            ini: 1001,
            fin: 1000,
            more: true
        },

        init: function(config) {
            _self = this;
            $.extend(true,_self.config,_self.defaultConfig,config);
            _self.ui.getElements();
            _self.ui.setEvents();
        },

        ui:{
            elements:{
            
            },
            setEvents: function(){
                $("#cargaMas").click(function(e) {
	                	e.stopPropagation();
	                	if(_self.vars.more){
		                	_self.actions.cargarMas();	
	                	}
                });
            },
            getElements: function(){
               
            }
        },

        actions: {
            cargarMas: function(){
	            $.ajax({
	            			method: "POST",
                    url: _self.config.urlController,
                    cache: false,
                    data: { ini: _self.vars.ini.toString(), fin: _self.vars.fin.toString()},
                    success: function (data) {
                        _self.actions.process(data);
                    },
                    error: function () {
											alert("errorrrrrrsssss");                        
                    }
                });
            },
            process: function(data){
	            	var tempPort = $(data).filter("#lista");
	            	var licant = $(tempPort).find("li");
	            	if(licant.length!=1000){
		            	_self.vars.more = false;
	            	}
	            	
	            	$("#lista").append(tempPort.html());
	            	_self.vars.ini = _self.vars.ini + 1000;
            }
            
        }
    };
     window.js = js;
})(window);
