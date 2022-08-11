<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Geekseat - Witches Rule</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row g-12">
            <div class="col-md-12 col-lg-12 order-md-last">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-primary">Witches Rule</span>
                </h4>

                <div class="row">
                    <div class="col-md-4">
                        <button id="addPeople" class="btn btn-primary" type="button">Add People</button>
                    </div>
                    <form id="frmRules">
                        <div class="col-md-12">
                            <table id="tblRules" class="table table-responsive table-borderless">
                                <thead>
                                    <tr>
                                        <th>Age of Death</th>
                                        <th>Year of Death</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="number" class="form-control" name="age_of_death[]" placeholder="Age of Death" required></td>
                                        <td><input type="number" class="form-control" name="year_of_death[]" placeholder="Year of Death" required></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-primary" type="submit">Calculation</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        var i = 1;
        $("#addPeople").click(function() {
            $('#tblRules tr:last').after("\
            <tr>\
                <td><input type='number' class='form-control' name='age_of_death[]' placeholder='Age of Death' required></td>\
                <td><input type='number' class='form-control' name='year_of_death[]' placeholder='Year of Death' required></td>\
            </tr>");
            i++;
        });

        $("#frmRules").submit(function(e) {
            e.preventDefault();
            var form = $(this);
            var actionUrl = form.attr('action');
            $.ajax({
                type: "POST",
                url: "post.php?method=calcRules",
                data: form.serialize(), 
                success: function(data) {
                    alert(data); 
                }
            });
        });
    });
</script>


</html>