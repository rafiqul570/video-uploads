//Alert settimeout(Javascript)

function alertclose(){
  document.getElementById("alert").remove('alert');
}
setTimeout(alertclose, 1000, );
 


//DS-BOX
function GetDistrict(id){
    $('#district').html('');
    $('#block').html('<option> Select Block</option>');
    $.ajax({
      type:'post',
      url: 'ajaxdata.php',
      data : { division_id : id},
      success : function(data){
         $('#district').html(data);
      }

    })
  }

  function GetUpazila(id){ 
    $('#upazila').html('');
    $.ajax({
      type:'post',
      url: 'ajaxdata.php',
      data : { district_id : id},
      success : function(data){
         $('#upazila').html(data);
      }

    })
  }


  function GetUnion(id){ 
    $('#union').html('');
    $.ajax({
      type:'post',
      url: 'ajaxdata.php',
      data : { upazila_id : id},
      success : function(data){
         $('#union').html(data);
      }

    })
  }

   function GetUnit(id){ 
    $('#unit').html('');
    $.ajax({
      type:'post',
      url: 'ajaxdata.php',
      data : { union_id : id},
      success : function(data){
         $('#unit').html(data);
      }

    })
  }


  function GetVillage(id){ 
    $('#village').html('');
    $.ajax({
      type:'post',
      url: 'ajaxdata.php',
      data : { unit_id : id},
      success : function(data){
         $('#village').html(data);
      }

    })
  }

  function GetBlock(id){ 
    $('#block').html('');
    $.ajax({
      type:'post',
      url: 'ajaxdata.php',
      data : { village_id : id},
      success : function(data){
         $('#block').html(data);
      }

    })
  }

//Search
  // var district_name = document.getElementById("district_name");

  // dselect(district_name,{
  //   search:true
  // })
