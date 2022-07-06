<form id="studentForm" name="studentForm" class="form-horizontal" enctype="multipart/form-data" method="POST">
    {{-- @csrf --}}
            {{ csrf_field() }}


        <div class="alert alert-danger print-error-msg" style="display:none">
            <ul></ul>
        </div>

        <div class="form-group">
    <label for="name" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-12">
        <input type="text" 
            class="form-control"
            id="name"
            name="name"
            placeholder="Enter Name" value="">
        <span class="error text-danger d-none"></span>
    </div>
</div>

<div class="form-group">
    <label for="serial" class="col-sm-2 control-label">Serial</label>
    <div class="col-sm-12">
        <input type="text" 
            class="form-control"
            id="serial"
            name="serial"
            placeholder="Enter serial" value="">
        <span class="error text-danger d-none"></span>
    </div>
</div>

        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Save changes</button>
        </div>

    </form>
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    @push('scripts')
    <script type="text/javascript">




$(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#createNewStudent').click(function() {
            $('#saveBtn').val("create-student");
            $('#id').val('');
            $('#studentForm').trigger("reset");
            $('#modelHeading').html("Create New Student");
            $('#ajaxModel').modal('show');
        });

       $('#studentForm').submit(function(e) {
    e.preventDefault();
    $('#name_error').text('');
    $('#email_error').text('');
    let formData = new FormData(this);
    $.ajax({
        data: formData,
        url: "{{ route('theerrors.store') }}",
        type: "POST",
        dataType: 'json',
        contentType: false,
        cache: false,
        processData: false,
        success: function(data) {
            if (data.status == true) {
                alert('Success!');
                $('#studentForm').trigger("reset");
                $('#ajaxModel').modal('hide');
                table.draw();
            }
        },
        error: function (err) {
        $.each(err.responseJSON.errors, function (key, value) {
            $("#" + key).next().html(value[0]);
            $("#" + key).next().removeClass('d-none');
        });
    },
    });
});

        function printErrorMsg (msg) {
            $(".print-error-msg").find("ul").html('');
            $(".print-error-msg").css('display','block');
            $.each( msg, function( key, value ) {
                $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
            });
        }
    });
       
   
    </script>

    @endpush