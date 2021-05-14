$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(document).ready(function() {
    $('#basic-datatables').DataTable({
    });

    $('#multi-filter-select').DataTable( {
        "pageLength": 5,
        initComplete: function () {
            this.api().columns().every( function () {
                var column = this;
                var select = $('<select class="form-control"><option value=""></option></select>')
                .appendTo( $(column.footer()).empty() )
                .on( 'change', function () {
                    var val = $.fn.dataTable.util.escapeRegex(
                        $(this).val()
                        );

                    column
                    .search( val ? '^'+val+'$' : '', true, false )
                    .draw();
                } );

                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
        }
    });

    // Add Row
    $('#add-row').DataTable({
        "pageLength": 5,
    });

    var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

    $('#addRowButton').click(function() {
            $('#add-row').dataTable().fnAddData([
                $("#addName").val(),
                $("#addPosition").val(),
                $("#addOffice").val(),
                action
                ]);
            $('#addRowModal').modal('hide');

        });

        $('#datatable-discipline').DataTable({
            processing: true,
            serverSide: true,
           ajax: {
             url: "{{ route('admin/discipline') }}",
             type: 'GET',
            },
            columns: [
                     {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                     { data: 'id', name: 'id' },
                     { data: 'name', name: 'name' },
                     { data: 'action', name: 'action' }
                  ]
        });
        
        $('body').on('click', '.deleteTodo', function () {
         
            var todo_id = $(this).data("id");
            if(confirm("Are You sure want to delete !"))
            {
              $.ajax({
                  type: "get",
                  url: "{{ url('admin/discipline/delete') }}"+'/'+todo_id,
                  success: function (data) {
                  var oTable = $('#laravel-datatable-crud').dataTable(); 
                  oTable.fnDraw(false);
                  },
                  error: function (data) {
                      console.log('Error:', data);
                  }
              });
           }
        }); 
});


document.multiselect('#testSelect2');

document.multiselect('#testSelect3');

document.multiselect('#testSelect4');

document.multiselect('#testSelect5');

document.multiselect('#testSelect6');

document.multiselect('#testSelect7');

document.multiselect('#testSelect8');

document.multiselect('#testSelects');

document.multiselect('#testSelecte');


document.multiselect('#testSelecta');

document.multiselect('#testSelectb');

document.multiselect('#testSelectc');



// Ajouter des champs dynamique pour les diplomes
$(document).ready(function(){
    //group add limit
    var maxGroup = 10;
    
    //add more fields group
    $(".addMore").click(function(){
        if($('body').find('.fieldGroup').length < maxGroup){
            var fieldHTML = '<div class="form-group fieldGroup">'+$(".fieldGroupCopy").html()+'</div>';
            $('body').find('.fieldGroup:last').after(fieldHTML);
        }else{
            alert('Maximum '+maxGroup+' groups are allowed.');
        }
    });
    
    //remove fields group
    $("body").on("click",".remove",function(){ 
        $(this).parents(".fieldGroup").remove();
    });
});


$('#recipeCarousel').carousel({
    interval: 10000
  })
  
  $('.carousel .carousel-item').each(function(){
      var minPerSlide = 4;
      var next = $(this).next();
      if (!next.length) {
      next = $(this).siblings(':first');
      }
      next.children(':first-child').clone().appendTo($(this));
      
      for (var i=0;i<minPerSlide;i++) {
          next=next.next();
          if (!next.length) {
              next = $(this).siblings(':first');
            }
          
          next.children(':first-child').clone().appendTo($(this));
        }
  });