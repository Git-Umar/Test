@include('layouts.bootstrap')
@include('layouts.header')
<html>
    <head>
        <title>
            Home
        </title>
    </head>
    <body>
        <div class="container-fluid">
            @yield('content')
        </div>
    </body>
    <script>
        function fun(){
            var name_val="name="+document.getElementById('name').value+" &pass="+document.getElementById('pass').value;
                    $.ajax({
                        type:"GET",
                        url:"/form-submit",
                        data:name_val,
                        success:function(result){
                            $('#values').html(result)
                        }
                    });
        }
    </script>

</html>