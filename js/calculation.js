// Code below modified from the tutorial at http://jsfiddle.net/sushanth009/BE8c7/5/

$(document).ready(function() {
	$('.button').click(function(){		  
		         $.ajax({
                    url: "data.json",                                      
                    dataType: "text",
                    success: function(data) {	                  	                                            
                        var json = $.parseJSON(data);   
                                             
                        var htmlstring ="<h3>" + json.AC.title + "</h3>"; 
                        htmlstring += "<ul>";                                                
                        for(i in json.AC.sessions){	                        
	                    htmlstring += "<li>"+ i +"   :  "+ json.AC.sessions[i] + "</li>";
                        }                         	
                        htmlstring += "</ul>";                        
                        $('.htmlstring').html(htmlstring);							               
                   	},
                 });                                         
            });
    $('.button2').click(function(){		  
		         $.ajax({
                    url: "data.json",                                      
                    dataType: "text",
                    success: function(data) {	                  	                                            
                        var json = $.parseJSON(data);                        
                        var htmlstring ="<h3>" + json.CH.title + "</h3>"; 
                        htmlstring += "<ul>";                                                
                        for(i in json.CH.sessions){	                        
	                    htmlstring += "<li>"+ i +"   :  "+ json.CH.sessions[i] + "</li>";
                        }                         	
                        htmlstring += "</ul>";                        
                        $('.htmlstring2').html(htmlstring);							               
                   	},
                 });                                         
            });
    $('.button3').click(function(){		  
		         $.ajax({
                    url: "data.json",                                      
                    dataType: "text",
                    success: function(data) {	                  	                                            
                        var json = $.parseJSON(data);                        
                        var htmlstring ="<h3>" + json.AF.title + "</h3>"; 
                        htmlstring += "<ul>";                                                
                        for(i in json.AF.sessions){	                        
	                    htmlstring += "<li>"+ i +"   :  "+ json.AF.sessions[i] + "</li>";
                        }                         	
                        htmlstring += "</ul>";                        
                        $('.htmlstring3').html(htmlstring);							               
                   	},
                 });                                         
            });
    $('.button4').click(function(){		  
		         $.ajax({
                    url: "data.json",                                      
                    dataType: "text",
                    success: function(data) {	                  	                                            
                        var json = $.parseJSON(data);                        
                        var htmlstring ="<h3>" + json.RC.title + "</h3>"; 
                        htmlstring += "<ul>";                                                
                        for(i in json.RC.sessions){	                        
	                    htmlstring += "<li>"+ i +"   :  "+ json.RC.sessions[i] + "</li>";
                        }                         	
                        htmlstring += "</ul>";                        
                        $('.htmlstring4').html(htmlstring);							               
                   	},
                 });                                         
            });	
	
	
	
	
	
	
	
	
	$('.quantity').change(function() {
					console.log('new quantity');
					var quantity = $(this).val();
					var tr = $(this).closest('tr');
					var cost = tr.find('.cost').val();
					console.log('quantity: ' + quantity + ', cost: ' + cost);
					var subtotal = cost * quantity;
					tr.find('input.subtotal').val(subtotal);
					tr.find('span.subtotal').html(subtotal.toFixed(2));
					calculateTotal();
				});
				
				function calculateTotal(){
					var total = 0;
					$('input.subtotal').each(function(){
						total += parseInt($(this).val()) || 0;
					});
					
					$('#newTotalPriceAC').val(total);
					$('#showTotalPriceAC').html('$' + total.toFixed(2));
					$('#newTotalPriceCH').val(total);
					$('#showTotalPriceCH').html('$' + total.toFixed(2));
					$('#newTotalPriceAF').val(total);
					$('#showTotalPriceAF').html('$' + total.toFixed(2));
					$('#newTotalPriceRC').val(total);
					$('#showTotalPriceRC').html('$' + total.toFixed(2))		
					console.log('newTotal:' + total);
				}
				
				});  
  		
