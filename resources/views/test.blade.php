<html>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<body>
<div class="container">
    <form action="{{route('submitmultiple')}}" method="post">
{{csrf_field()}}
        <div class="row">
            <div class="col">
                <label>Name1</label>
                <input type="text" name="row[0][name]">
            </div>
            <div class="col">
                <label>Email1</label>
                <input type="email" name="row[0][eamil]">
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label>Name2</label>
                <input type="text" name="row[1][name]">
            </div>
            <div class="col">
                <label>Email2</label>
                <input type="email" name="row[1][eamil]">
            </div>
        </div>
        <div>
            <input type="submit" name="submit" value="Sbmit" class="btn btn-primary btn-block">
        </div>
    </form>
</div>
</body>
</html>
