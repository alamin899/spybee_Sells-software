{{--<html>--}}
{{--<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">--}}
{{--<body>--}}
{{--<div class="container">--}}
{{--    <form action="{{route('submitmultiple')}}" method="post">--}}
{{--{{csrf_field()}}--}}
{{--        <div class="row">--}}
{{--            <div class="col">--}}
{{--                <label>Name1</label>--}}
{{--                <input type="text" name="row[0][name]">--}}
{{--            </div>--}}
{{--            <div class="col">--}}
{{--                <label>Email1</label>--}}
{{--                <input type="email" name="row[0][eamil]">--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="row">--}}
{{--            <div class="col">--}}
{{--                <label>Name2</label>--}}
{{--                <input type="text" name="row[1][name]">--}}
{{--            </div>--}}
{{--            <div class="col">--}}
{{--                <label>Email2</label>--}}
{{--                <input type="email" name="row[1][eamil]">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div>--}}
{{--            <input type="submit" name="submit" value="Sbmit" class="btn btn-primary btn-block">--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<body>
<br /><br />
<div class="container">
    <br />
    <h2 align="center">Multiple Inline Insert into Mysql using Ajax JQuery in PHP</h2>
    <br />
    <div class="table-responsive">
        <form action="{{route('submitmultiple')}}" method="post">
            {{csrf_field()}}
        <table class="table table-bordered" id="crud_table">
            <tr>
                <th>SL</th>
                <th>Item Name</th>
                <th>Email</th>
                <th></th>
            </tr>
            <tr>
                <td>1</td>
                <td><input type="text" name="row[0][name]"></td>
                <td><input type="email" name="row[0][eamil]"></td>
                <td></td>
            </tr>
        </table>

            <div align="center">
{{--                <button type="button" name="save" id="save" class="btn btn-info">Save</button>--}}
                <input type="submit" name="save">
            </div>
        </form>
        <div align="right">
            <button type="button" name="add" id="add" class="btn btn-success btn-xs">+</button>
        </div>

        <br />
        <div id="inserted_item_data"></div>
    </div>


</div>
</body>

<script>
    $(document).ready(function () {
        var count = 0;
        var sl=1;
        $('#add').click(function () {
            count = count + 1;
            sl+=1;

            var html_code = "<tr id='row" + count + "'>";
            html_code +="<td>"+sl+"</td>";
            html_code += "<td><input type='text' name='row["+count+"][name]'></td>";
            html_code += "<td><input type='email' name='row["+count+"][eamil]'></td>";
            html_code += "<td><button type='button' name='remove' data-row='row" + count + "' class='btn btn-danger btn-xs remove'>-</button></td>";
            html_code += "</tr>";
             $('#crud_table').append(html_code);
        });

        $(document).on('click', '.remove', function () {
            var delete_row = $(this).data("row");
            $('#' + delete_row).remove();
        });
    });


</script>