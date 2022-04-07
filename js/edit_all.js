$(document).ready(function(){

 function fetch_data(){

  $.ajax({
   url: "select.php",
   method: "POST",
   success: function(data){
	   $('#liveDisp').html(data);
	}

 });//end of ajax
 
 }
 
 $(document). on('click','#myBtn1', function(){
      fetch_data();  
		})
 
    function add_users(){
		// here we assign and declare our variables
		var usr_access_lv = $("#accesslevel").val();
		var userName = $("#username").val();
		var pass = $("#password").val();
             
                if (usr_access_lv == "" && userName == ""  ){
			alert("Empty fields, Enter something!");
			return false;
		}else{
		$.ajax({
         url: "edit.php",
         data:{usrAccess:usr_access_lv, usrName:userName, pswrd:pass},
		 dataType: "text",
 beforeSend: function(){
   $(".loader").show(2000);
},
         method: "POST",
        success: function(data){
	    alert(data);
          
	    }//end of success

 });//end of ajax
		}//end of if else statement
		
	}// end of add_users()

	  $(document). on('click','#submit', function(){
      add_users(); 
	  return false;
		})



//add category
 
    function add_category(){
		// here we assign and declare our variables
		var cat_id = $("#categoryId").val();
		var cat_name = $("#categoryname").val();
             
                if (cat_id == "" || cat_name == ""  ){
			alert("Empty fields, Enter something!");
			return false;
		}else{
		$.ajax({
         url: "addcategory.php",
         data:{cid:cat_id, cname:cat_name},
		 dataType: "text",
 beforeSend: function(){
   $(".loader").show(2000);
},
         method: "POST",
        success: function(data){
	    alert(data);
          
	    }//end of success

 });//end of ajax
		}//end of if else statement
		
	}// end of add categgory()


  $(document). on('click','#add_cat', function(){
      add_category(); 
	  return false;
		})

// search category
    function search_category(){
		// here we assign and declare our variables
		var search_category = $("#categorysearch").val();
	if (search_category == ""  ){
			alert("Please, Enter Category");
			return false;
		}else{
		$.ajax({
         url: "searchcategory.php",
         data:{searchcat2:search_category},
 beforeSend: function(){
   $(".loader").show(2000);
},
         method: "POST",
		success: function(data){
	    $("#live_category").html(data);
		
	  }//end of success

 });//end of ajax
		}//end of if else statement
		
	}// end of add_users()

  $(document). on('click','#searchcat', function(){
      search_category(); 
	  return false;
		});











  //End of Category
     function search_users(){
		// here we assign and declare our variables
		var searchUser = $("#search").val();
	if (searchUser == ""  ){
			alert("Empty fields, Enter something!");
			return false;
		}else{
		$.ajax({
         url: "search.php",
         data:{searchMe:searchUser},
 beforeSend: function(){
   $(".loader").show(2000);
},
         method: "POST",
		success: function(data){
	    $("#live").html(data);
		
	  }//end of success

 });//end of ajax
		}//end of if else statement
		
	}// end of add_users()

  $(document). on('click','#sub', function(){
      search_users(); 
	  return false;
		});
  
  
  
   function edit_users(id, text, column_name){
			$.ajax({
         url: "update.php",
         data:{id:id, text:text, column_name:column_name},
 beforeSend: function(){
   $(".loader").show(2000);
},
         method: "POST",
		 dataType:"text",
		success: function(data){
	   $('#live').html(data);
		
	  }//end of success

 });//end of ajax
	
		
	}// end of edit_users()

  $(document). on('blur','.user_name', function(){
												
	var id = $(this).data("id2");
	var user_name = $(this).text();
	var colNam = "user_name";
	      edit_users( id, user_name, colNam); 
	 // alert(id + user_name + colNam );
		});
/*
   $(document). on('blur','.user_password', function(){
		var id = $(this).data("id3");
	var user_password = $(this).text();
	    var colNam1 = "user_password";
	      edit_users( id, user_password, colNam1); 
	   alert(id + user_name + colNam1 );
		});
	*/	
		
		/////////////////////////////
		   function delete_search(){
			   // here we assign and declare our variables
		var searchUser1 = $("#search1").val();
	if (searchUser1 == ""  ){
			alert("Empty fields, Enter something!");
			return false;
		}else{
			$.ajax({
         url: "search_usrDel.php",
         data:{del:searchUser1},
 beforeSend: function(){
   $(".loader").show();
},
         method: "POST",
		success: function(data){
	    $('.live_delete').html(data);
		
	  }//end of success

 });//end of ajax
		}//end of if
		
	}// end of delete_users()

	    $(document). on('click','#sub1', function(){
      delete_search(); 
	  return false;
		});
		
		
		
		
		////////////////
		
		  $(document).on('click','#btn_delete', function(){
													
				var id = $("#btn_delete").val();
				if(confirm("Are you sure you want to delete this ID" + id + "?" ))
				{
   $.ajax({
    url:"deleteuser.php",
	method:"POST",
	data:{id:id},
	dataType:"text",
	success:function(data){
	   $(".live_delete").html(data);
	
	}
     
		});// end of ajax 
       
	    }// end of confirm
		});//end of document on click
		
	
	  
		
// });// end of ready 


		
 $(document).on('click','#btn_deletecat', function(){
													
				var id = $(this).val();
				if(confirm("Are you sure you want to delete this ID" + id + "?" ))
				{
   $.ajax({
    url:"deletecategory.php",
	method:"POST",
	data:{id:id},
	dataType:"text",
	success:function(data){
	   $("#live_category").html(data);
	
	}
     
		});// end of ajax 
       
	    }// end of confirm
		});//end of document on click






function edit_category(id, text, categoryname){
$.ajax({
         url: "edit_category.php",
         data:{id:id, text:text, categoryname:categoryname},
 beforeSend: function(){
   $(".loader").show(2000);
},
         method: "POST",
		 dataType:"text",
		success: function(data){
	   $('#live_category').html(data);
		
	  }//end of success

 });//end of ajax
	
		
	}// end of edit_users()

  $(document). on('blur','.categoryname', function(){
												
	var id = $(this).data("id1");
	var categoryname = $(this).text();
	var colNam = "categoryname";
	      edit_category( id, categoryname, colNam); 
	 // alert(id + user_name + colNam );
		});

    //add category
 
    function add_customer(){
		// here we assign and declare our variables
	
		var cust_title = $("#customertitle").val();
         var cust_gender = $("#gender").val();
		 var cust_name = $("#customername").val();
		 var cust_phone = $("#phonenumber").val();
		 var cust_add = $("#homeaddress").val();
		 var cust_email = $("#emailaddress").val();
             if (cust_title == ""  || cust_gender == "" || cust_name == "" || cust_phone == "" || cust_add == "" || cust_email == ""){
				swal({
			title: "Ooops!",
			text: "All Fields Are Compulsory.",
			textColor: "red",
			type: "error",
			confirmButtonText:"Exit",
			 allowOutsideClick: false,
  timer: 3000
			});
			return false;}
			else{
		    $.ajax({
            url: "add_customer.php",
           data:{custTitle:cust_title , custGen:cust_gender, custName:cust_name, custPhone:cust_phone, custAdd:cust_add, custEmail:cust_email},
		   method: "POST",
           success: function(data){
			  
	      swal("Done!", '<strong style="color:green; font-size:20px; font-family:tahoma">'+data+'</strong>', "success");
	    }//end of success

 });//end of ajax
		}//end of if else statement
		
	}// end of add customer()


  $(document).on('click','#addcustomer', function(){
      add_customer(); 
	  return false;
		})

   // search customer name
    function search_customer(){
		// here we assign and declare our variables
		var search_customer = $("#customerSearch").val();
	if (search_customer == ""  ){
					swal({
			title: "Ooops!",
			text: "Empty fields, Fill all",
			type: "error",
			confirmButtonText:"Exit",
			 allowOutsideClick: false,
  timer: 3000
			});
			return false;
		}else{
		$.ajax({
         url: "search_customer.php",
         data:{searchCust:search_customer},
          method: "POST",
		success: function(data){
			//alert(data)
	    $("#liveDisp_customer").html(data);
		
	  }//end of success

 });//end of ajax
		}//end of if else statement
		
	}// end of add_users()

  $(document). on('click','#searchcust', function(){
      search_customer(); 
	  return false;
		});
  //edit button
  $(document). on('click','#searchcust', function(){
      search_customer(); 
	  return false;
		});

// edit customer

function edit_customer(id, text, columnName){
$.ajax({
         url: "edit_customer.php",
         data:{id:id, text:text, columnName:columnName},
          method: "POST",
		 dataType:"text",
		success: function(data){
	   $('#liveDisp_customer').html(data);
		
	  }//end of success

 });//end of ajax
	
		
	}// end of edit_users()

  $(document). on('blur','.custitle', function(){
												
	var id = $(this).data("id1");
	var title = $(this).text();
	var cust_titleColumn = "custitle";
	      edit_customer( id, title, cust_titleColumn); 
	 // alert(id + user_name + colNam );
		});


   $(document). on('blur','.custname', function(){
												
	var id = $(this).data("id2");
	var name = $(this).text();
	var cust_nameColumn = "custname";
	      edit_customer( id, name, cust_nameColumn); 
	 // alert(id + user_name + colNam );
		});
   
   $(document). on('blur','.custphone', function(){
												
	var id = $(this).data("id3");
	var phone = $(this).text();
	var cust_phoneColumn = "custphone";
	      edit_customer( id, phone, cust_phoneColumn); 
	 // alert(id + user_name + colNam );
		});
   
   
    $(document). on('blur','.custadd', function(){
												
	var id = $(this).data("id4");
	var address = $(this).text();
	var cust_addrsColumn = "custadd";
	      edit_customer( id, address, cust_addrsColumn); 
	 // alert(id + user_name + colNam );
		});
	
	$(document). on('blur','.custemail', function(){
												
	var id = $(this).data("id5");
	var email = $(this).text();
	var cust_emailColumn = "custemail";
	      edit_customer( id, email, cust_emailColumn); 
	 // alert(id + user_name + colNam );
		});


	
		
		
		////////////////
		
		  $(document).on('click','#deleteCustomer', function(){
													
				var id = $(this).val();
				//if(confirm("Are you sure you want to delete this ID" + id + "?" ))
				//{
			swal({	
	
   type: 'warning',
   title: '<strong style="color:red; font-size:20px; font-family:tahoma">Are you sure you want to delete this ID'+id+'?</strong>',
   text: "This action can not be undo",
   showCancelButton: true,
   ConfirmButtonColor: '#FF0000',
   ConfirmButtonText: 'Yes, Delete it!',
   allowOutsideClick: false,
   showLoaderOnConfirm: true,
   
   preConfirm: function () {
	   
	   return new Promise (function (resolve) {
	   $.ajax({
    url:"del_customer.php",
	method:"POST",
	data:{id:id},
	dataType:"text",
	success:function(data){
		swal("Deleted!", '<strong style="color:green; font-size:20px; font-family:tahoma">'+data+'</strong>', "success");
	   $("#liveDisp_customer").html(data);
	    }// end of success func
		});// end of ajax 
		 })// end of promise object
		 
   }//end of preconfirm function
		 
				 })//end of swal
	   // }// end of confirm
		});//end of document on click
		

         
		 
		// add_inventory 
		
		 function add_inventory(){
		// here we assign and declare our variables
		var productcode = $("#productcode").val();
		var productname = $("#productname").val();
		var color = $("#color").val();
		var categoryname2 = $("#categoryname2").val();	
		var quantity = $("#quantity").val();
		var reorderquantity = $("#reorderquantity").val();
		var costprice = $("#costprice").val();
		var sellingprice = $("#sellingprice").val();	
		var wholesaleprice = $("#wholesaleprice").val();
		var manufacturingdate = $("#manufacturingdate").val();	
		var expirydate = $("#expirydate").val();	
	
             
if ( (productcode  == "")  ||
     (productname  == "")  || 
     (color == "")         || 
     (categoryname == "")  || 
     (quantity == "")      ||
     (reorderquantity == "") || 
	 (costprice == "")       ||
	 (sellingprice == "")    ||
	 (wholesaleprice == "")  || 
	 (manufacturingdate == "") || 
	 (expirydate == "")
	 ){
			alert("Empty fields, Fill All!");
			return false;
		}else{
		$.ajax({
         url: "add_inventory.php",
         data:{pcode:productcode, pname:productname, pcolor:color, pcategoryname:categoryname2, pquantity:quantity, preorderqty:reorderquantity, pcostprice:costprice, psellingprice:sellingprice, pwholesaleprice:wholesaleprice, pmanufacturingdate:manufacturingdate, pexpirydate:expirydate},
		 dataType: "text",
 beforeSend: function(){
   $(".loader").show(2000);
},
         method: "POST",
        success: function(data){
	   // alert(data);
	   $("#ss").html(data);
          
	    }//end of success

 });//end of ajax
		}//end of if else statement
		
}// end of add categgory()


  $(document). on('click','#add_inventory', function(){
      add_inventory(); 
	  return false;
		});


 // search customer name
    function search_inventory(){
		// here we assign and declare our variables
		var search_inventory = $("#inventory_search").val();
	if (search_inventory == ""  ){
			alert("Empty fields, Enter something!");
			return false;
		}else{
		$.ajax({
         url: "search_inventory.php",
         data:{searchinv:search_inventory},
          method: "POST",
		success: function(data){
			//alert(data)
	    $("#ss").html(data);
		
	  }//end of success

 });//end of ajax
		}//end of if else statement
		
	}// end of add_users()

  $(document). on('click','#search_inventory', function(){
      search_inventory(); 
	  return false;
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






 
   

 function add_sales(){
		// here we assign and declare our variables
		
		var pscode = $("#pscode").val();
		var psname = $("#psname").val();
		var psquantity =parseInt( $("#psquantity").val());
		var psprice = parseInt ($("#psprice").val());	
		var psdiscount = parseInt ($("#psdiscount").val());
		var psmodeofpayment = $("#psmodeofpayment").val();
	    var color = $("#color").val();
		var bal = parseInt ($("#bal").val());
		var cashreceived = parseInt ($("#cash_rec").val());
		
             
if ( (pscode  == "")  ||
     (psname  == "")  || 
     (psquantity == "") || 
     (psprice == "")  || 
     (psdiscount == "") ||
	 (psmodeofpayment == "") ||
	  (color  == "" )||
	  (bal == "" ) ||
	  ( cashreceived == "" )
	 ){
sweetAlert({	
		    title: "Ooops!",
			text: "Empty fields, Fill all",
			type: "error",
			confirmButtonText:"Exit",
			closeOnClickOutside: false,
            timer: 3000
 })

;
			return false;
	  }else{
		$.ajax({
         url: "add_sales2.php",
         data:{vpscode:pscode, vpsname:psname, vpsquantity:psquantity, vpsprice:psprice, vpsdiscount:psdiscount, vpsmodeofpayment:psmodeofpayment, color:color, cashreceived:cashreceived, bal:bal},
		 dataType: "text",
 beforeSend: function(){
   $(".loader").show(2000);
},
         method: "POST",
        success: function(data){
	   swal("Done!", '<strong style="color:green; font-size:20px; font-family:tahoma">Item Added Successfully.</strong>', "success");
	   $("#live_add_sales").html(data);
         // add_sales(page);
	    }//end of success

 });//end of ajax

		}//end of if else statement
	
		
}// end of add add_sales()



    $(document).on('click','#add_sales', function(){
       add_sales();
	   return false;
	});




   // delete item from add sales
 $(document).on('click','#deleteItem', function(){
													
				var id = $(this).val();
				
				if(confirm("Are you sure you want to delete this ID" + id + "?" ))
				{
   $.ajax({
    url:"delete_sale_item.php",
	method:"POST",
	data:{id:id},
	dataType:"text",
	success:function(data){
	$('#live_add_sales').html(data);
	//$('#live_delete').html(data);
	}
     
		});// end of ajax 
       
	    }// end of confirm
		});//end of document on click
		
	
	  
		
// });// end of ready 




    function generate_id(){

  $.ajax({
   url: "random_id.php",
   method: "POST",
   success: function(data){
	   //alert(data);
	 // $('#live_add_sales').html(data);
	}

 });//end of ajax
 
 }
 
 $(document). on('click','#gen_id', function(){
      generate_id();
	  return false;
		})
 
 
 //on select onBlur event triggers
  $(document).on('mouseout','#psname', function (){
												
	var prdName = $("#psname").val();

	
   $.ajax({
    url:"product_code.php",
	method:"POST",
	data:{prdName:prdName},
	dataType:"text",
	success:function(data){
	$("#pscode").val(data);
	      }
		  
		});// end of ajax
   

    $.ajax({
    url:"product_qty.php",
	method:"POST",
	data:{prdName:prdName},
	dataType:"text",
	success:function(data){
		 $(".output_stream").html(data);
		 
	      }
		});// end of ajax 

 
	$.ajax({
    url:"product_price.php",
	method:"POST",
	data:{prdName:prdName},
	dataType:"text",
	success:function(data){
	$("#psprice").val(data);
	      }
		  
		});// end of ajax
        
		
			$.ajax({
           url:"getcolor.php",
	       method:"POST",
	       data:{prdName:prdName},
	       dataType:"text",
	       success:function(data){
	       $("#color").val(data);
	               }
		  
		    });// end of ajax	 
			     
		
   
   	});//end of document on blur
		
 
  
   



 //on select mouseout event triggers
  $(document).on('mouseout','#psmodeofpayment', function (){
												
	//var prdcode = $("#pscode").val();
	var total_amt;
	var amt_due;
    var psquantity =parseInt( $("#psquantity").val());
	var psprice = parseInt ($("#psprice").val());	
	var psdiscount = parseInt ($("#psdiscount").val());
	

     // get total amount
	 
	total_amt = (psquantity * psprice); 
	
	$("#tot_amt").val(total_amt)// here we display results
     
       
	   
	      // get total amount due
	 
	amt_due = (total_amt - psdiscount); 
	
	$("#amt_due").val(amt_due)// here we display results
     
		
			 
			     
		
   
   	});//end of document on mouseout
		

 $(document).on('mouseout','#cash_rec', function (){
		var balance;
        var  amt_due =parseInt ($("#amt_due").val());
		var cashReceived= parseInt ($("#cash_rec").val());
		
	
			// calculate balance
			 balance = ( cashReceived - amt_due );
			 
			 //display balance
          var bal = $("#bal").val(balance);
	
		
   
   	});//end of document on mouseout
		




    function viewItemsOnTrans(){

  $.ajax({
   url: "viewAll.php",
   method: "POST",
   success: function(data){
	 $("#live_add_sales").html(data); 
	}

 });//end of ajax
 
 }
 
 $(document). on('click','.view_All', function(){
      viewItemsOnTrans();
	  return false;
		})



// insert into cust_sale
function cust_sales(){
	
	var name = $("#cus_name").val();
	
	if ( name == "" ){
		alert("Please Enter a Name.");
	}else{
	$.ajax({
	url: "cust_sales.php",
	method: "POST",
	data:{name:name},
	success: function (data){
	alert(data);	
	}
		 
		   
     });// end of ajax
	  }//end of else
	
	
}// end of func





 $(document). on('click','#enter', function(){
      cust_sales();
	  return false;
		})


// insert into cust_sale
function getTotalAmtDue(){

	$.ajax({
	url: "getTotAmt.php",
	method: "POST",
	success: function(data){
	$("#tot_amt_due").html(data);	
	}
		 
	   
     });// end of ajax
	 
	
		
}// end of func


//setInterval(getTotalAmtDue(), 1000);


 $(document). on('click','#getAmtDue', function(){
      getTotalAmtDue();
	 
		})



 // delete item from add sales
 /*
 $(document).on('click','#itemFrmTrans', function(){
													
				var id = $(this).val();
				
				if(confirm("Are you sure you want to delete this ID" + id + "?" ))
				{
   $.ajax({
    url:"del_frm_trans_table.php",
	method:"POST",
	data:{id:id},
	dataType:"text",
	success:function(data){
	$('#live_add_sales').html(data);
	//$('#live_delete').html(data);
	}
     
		});// end of ajax 
       
	    }// end of confirm
		});//end of document on click

*/





/*
   function viewSales(){

  $.ajax({
   url: "viewSales.php",
   method: "POST",
   success: function(data){
	 $("#live_add_sales").html(data); 
	}

 });//end of ajax
 
 }


$(document). on('click','#viewSales', function(){
      viewSales();
	  return false;
		})
*/






		
	
	  
		 });// end of ready 		
		
		

