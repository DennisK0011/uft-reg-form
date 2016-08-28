<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>UFT registration</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel=”stylesheet” href=”css/style.css”>
        
    </head>

    <body>
        <table>
            <thead>
                <tr>
                    <th><label class="col-sm-2">Firstname</label></th>
                    <th><label class="col-sm-2">Lastname</label></th>
                    <th><label class="col-sm-2">Age</label></th>
                    <th><label class="col-sm-2">Weight</label></th>
                    <th><label class="col-sm-2">Grade</label></th>
                    <th><label class="col-sm-2">MMA</label></th>
                    <th><label class="col-sm-2">Submission</label></th>
                    <th><label class="col-sm-2">EDGE</label></th>
                    <th><label class="col-sm-2">Karate Ippon</label></th>
                    <th><label class="col-sm-2">Karate Sanbon</label></th>
                    <th><label class="col-sm-2">Semi contact</label></th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td><input class="form-control" name="size[]" type="text" placeholder="Firstname" /></td>
                    <td><input class="form-control" name="color[]" type="text" placeholder="Lastname" /></td>
                    <td><input class="form-control" name="other[]" type="text" placeholder="Age" /></td>
                    <td><input class="form-control" name="price[]" type="text" placeholder="Weight" /></td>
                    <td><input class="form-control" name="quantity[]" type="text" placeholder="Grade" /></td>
                    <td><input class="form-control" name="promotion[]" type="checkbox" placeholder="MMA" /></td>
                    <td><input class="form-control" name="promotion[]" type="checkbox" placeholder="MMA" /></td>
                    <td><input class="form-control" name="promotion[]" type="checkbox" placeholder="MMA" /></td>
                    <td><input class="form-control" name="promotion[]" type="checkbox" placeholder="MMA" /></td>
                    <td><input class="form-control" name="promotion[]" type="checkbox" placeholder="MMA" /></td>
                    <td><input class="form-control" name="promotion[]" type="checkbox" placeholder="MMA" /></td>
                    <td>
                        <button class="btn btn-danger btn-remove" type="button">
                            <i class="glyphicon glyphicon-minus gs"></i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>

            <button class="btn btn-success btn-add" type="button">
               <i class="glyphicon glyphicon-plus gs"></i> 
               <b> Add fighter</b>
            </button>

        <script src="js/jquery-3.1.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/table.js"></script>
    </body>
<html>


