 $(document).ready(function(){


 function search_trans(){
		// here we assign and declare our variables
		var searchTrans = $("#search_trans").val();
	if (searchTrans == ""  ){
			alert("Empty fields, Enter Transaction ID?");
			return false;
		}else{
		$.ajax({
         url: "search_transaction.php",
         data:{searchtrans:searchTrans},
 beforeSend: function(){
   $(".loader").show(2000);
},
         method: "POST",
		success: function(data){
	    $("#display_trans").html(data);
		
	  }//end of success

 });//end of ajax
		}//end of if else statement
		
	}// end of add_users()

  $(document). on('click','#searchtrans', function(){
      search_trans(); 
	  return false;
		});

  function edit_trans(id, text, qty_taken){
         $.ajax({
         url: "partial_trans.php",
         data:{id:id, text:text, qty_taken:qty_taken},
 beforeSend: function(){
   $(".loader").show(2000);
},
         method: "POST",
		 dataType:"text",
		success: function(data){
	   $('#display_trans').html(data);
		
	  }//end of success

 });//end of ajax
	
		
	}// end of edit_users()

  $(document). on('blur','.qty_taken', function(){
												
	var id = $(this).data("id7");
    var qty_taken = parseInt($(this).text());
	var colNam = "qty_taken";
	      edit_trans( id, qty_taken, colNam); 
	 // alert(id + user_name + colNam );
		});

function edit_inventory(pcode, text, columnName){
$.ajax({
         url: "edit_inventory.php",
         data:{pcode:pcode, text:text, columnName:columnName},
          method: "POST",
		 dataType:"text",
		success: function(data){
	   $('#ss').html(data);
		
	  }//end of success

 });//end of ajax
	
		
	}// end of edit_users()

  $(document). on('blur','.pquantity', function(){
												
	var pcode = $(this).data("id3");
	var title = $(this).text();
	var prod_titleColumn = "pquantity";
	      edit_inventory( pcode, title, prod_titleColumn); 
	 // alert(id + user_name + colNam );
		});
  
   function add_expenses(){
		// here we assign and declare our variables
		var expdate =  $("#expdate").val();
		var expid =    $("#expid").val();
	    var exptitle = $("#exptitle").val();
	    var expprice = $("#expprice").val();


             
            if (expdate == "" || expid == "" || exptitle == "" || expprice == ""  ){
			alert("Empty fields, Enter something!");
			return false;
		}else{
		$.ajax({
         url: "addexpenses.php",
         data:{expdate:expdate, expid:expid, exptitle:exptitle, expprice:expprice},
		 dataType: "text",
 beforeSend: function(){
   $(".loader").show(2000);
},
         method: "POST",
        success: function(data){
	    $("#display_expenses").html(data);
          
	    }//end of success

 });//end of ajax
		}//end of if else statement
		
	}// end of add categgory()


  $(document). on('click','#add_exp', function(){
      add_expenses(); 
	  return false;
		})
  
   function search_exp(){
		// here we assign and declare our variables
	var exp_search = $("#exp_search").val();
	if (exp_search == ""  ){
			alert("Empty fields, Enter Transaction ID?");
			return false;
		}else{
		$.ajax({
         url: "searchexpenses.php",
         data:{exp_search:exp_search},
 beforeSend: function(){
   $(".loader").show(2000);
},
         method: "POST",
		success: function(data){
	    $("#display_expenses").html(data);
		
	  }//end of success

 });//end of ajax
		}//end of if else statement
		
	}// end of add_users()

  $(document). on('click','#search_exp', function(){
      search_exp(); 
	  return false;
		});




   });// end of ready 		
