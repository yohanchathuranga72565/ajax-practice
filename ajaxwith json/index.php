<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ajax and json</title>
</head>
<body>
<div id="persons"></div>


<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>   
<script>
    $(document).ready(function (){
        // $.getJSON('data.json',function(r){
        //     if(r.persons.length){
        //         for(var i=0;  i< r.persons.length; i++){
        //             $('#persons').append('name : ' + r.persons[i].name + '</br>' + 'last name : ' + r.persons[i].lname + '</br>' + 'fav colors : '  );
        //             for(var ii=0; ii< r.persons[i].favcolors.length; ii++){
        //                 $('#persons').append(r.persons[i].favcolors[ii] + ' ')
        //             }
        //             $('#persons').append('</br></br>');
        //         }
        //     }
        // });

        $.ajax({
            url : 'data.json',
            method : 'GET',
            datatype : 'json',
            success : function(r){
                if(r.persons.length){
                for(var i=0;  i< r.persons.length; i++){
                    $('#persons').append('name : ' + r.persons[i].name + '</br>' + 'last name : ' + r.persons[i].lname + '</br>' + 'fav colors : '  );
                    for(var ii=0; ii< r.persons[i].favcolors.length; ii++){
                        $('#persons').append(r.persons[i].favcolors[ii] + ' ')
                    }
                    $('#persons').append('</br></br>');
                }
            }
            }
        });
    });
</script>
</body>
</html>