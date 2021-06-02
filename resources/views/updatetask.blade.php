<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Update Task</title>
    <div class="text-center">
        <h1>Daily Tasks</h1>
</head>
<body>
    <div class="container">
        <br>
        <form action="/updatetasks" method="post">
            {{csrf_field()}}
            <input type="text" class="form-control" name="task" value="{{$taskdata->task}}" />
            <br>
            <input type="hidden" name="id" value="{{$taskdata->id}}" />
            <input type="submit" class="btn btn-warning" value="Update" />
            &nbsp;&nbsp;<input type="button" class="btn btn-danger" value="Cancle" />
        </form>
    </div>
    </div>
</body>

</html>