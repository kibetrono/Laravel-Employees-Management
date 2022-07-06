<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" id="myForm">
 @csrf
 <label for="">FName</label>
        <input type="firstname" id="firstname">
<label for="">Lname</label>

        <input type="lastname" id="lastname">
<label for="">Email</label>

        <input type="email" id="email">
{{-- <button type="submit">Save</button> --}}
        {{-- <input type="submit" value="Submit"> --}}
        <p class="save_field">Save</p>
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).on('click','.save_field',function(e){
            e.preventDefault(); 
            let firstname= $("#firstname").val()
            let lastname= $("#lastname").val()
            let email= $("#email").val()
        
            let _token=$("input[name=_token]").val()

            // alert(_token)
                    
            $.ajax({
                url: "{{route('productintake.save')}}",
                type: "POST",
                data: {
                    firstname:firstname,
                    lastname:lastname,
                    email:email,
                    _token:_token,
                },
                success: function(response) {
                    if (response ) {
                        console.log("Successfully inserted record");
                    }
                },
                error: function(error) {
                    console.log("Returned Error",error);
                }
            });

        })
</script>
</body>
</html>