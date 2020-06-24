<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- bootstrap4 cdn -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> 
    <title>Ajax with php</title>
</head>
<body>
    <h2>Ajax with PHP => Load Values</h2>
    <div class="container">
        <form method="POST">
            <div class="row">
                <div class="col-4">
                    <input type="submit" name="load" id="load" value="Result" />
                    <a href="index.php">Insert Data</a>
                </div>
                <div class="col-4">

                </div>
                <div class="col-4">
                </div>
            </div>
        </form>
    </div>

    <div class="container">
        <div class="row mt-2">
            <div id="result">
            </div>
        </div>
    </div>

    <!-- bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>   

     <!-- ajax script -->
     <script>
        $(document).ready(function(){
            $('#load').click(function (event){
                event.preventDefault();
                $.ajax({
                    url : "load.php",
                    dataType : "html",
                    success : function (Result){
                        $('#result').html(Result);
                    }
                });

            });    
        });
    </script>

</body>
</html>