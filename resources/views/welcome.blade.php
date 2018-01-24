@extends('layouts.app')
@section('content')
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script id="source" language="javascript" type="text/javascript">

        var url = 'http://localhost:8000/jsonapi';
        var options = $.ajax( url, {
            method: "OPTIONS",
            dataType: "json"
        });

        options.done( function( servicedesc ) {
            var params = {};

            var result = $.ajax({
                method: "GET",
                dataType: "json",
                url: servicedesc.meta.resources['product'],
                data: params
            });

            result.done( function( result ) {
                console.log( result.data );
                var str =""
                str +="<td>";
                for (var i = 0; i < result.data.length; i++)
                {
                    str += "<td><a href="+JSON.stringify(result.data[i].links.self.href)+">"+JSON.stringify(result.data[i].links.self.href)+"</a></td>";
                }
                str +="</tr>";
                $("#myinfo").html(str);
            });
        });
</script>
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <div id="myinfo"></div>
            <
        </div>
    </div>
</div>
@endsection