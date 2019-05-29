<?php
    
    namespace Medoo;
    require 'Medoo.php';

    $database = new Medoo([
        // required
        'database_type' => 'mysql',
        'database_name' => 'ai_2018',
        'server' => 'localhost',
        'username' => 'root',
        'password' => ''
    ]);
    
    session_start();

    if(isset($_SESSION)){
        echo "<script>console.log( 'Debug Objects: ".$_SESSION['usr']."' );</script>";
    }else{
        echo "<script>console.log( 'Debug Objects: Session no' );</script>";

    }
    $recipes = $database->select("tb_recipes", "*");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registered Recipes</title>
    <style>
    
        .container{
            width: 90%;
            margin: auto;
            clear: both;
        }
        
        .row{
            width: 100%;
        }
        
        .col{
            width: 33.3%;
            float: left;
        }

        ul{
            float: right;
            clear: both;
            margin: 0;
            padding: 0;
        }

        li{
            list-style-type: none;
            display: inline-block;
            margin: 0 10px;
        }

        .btn{
            display: block;
            background: #000;
            width: 50%;
            text-align: center;
            color: #fff;
            padding: 5px;
            text-decoration: none;
            font-family: Arial;
            font-weight: bold;
            transition: all .5s;
            cursor: pointer;
        }

        .btn:hover{
            background: #f44336;
        }
        
    </style>
</head>
<body>

    <div class="container">
        
        <?php
            
            $len = count($recipes);
        
            for($i=0; $i<$len; $i++){
                echo "<div class='col'>".
                        "<h3>".$recipes[$i]["recipe_name"]."</h3>".
                        "<p>".$recipes[$i]["recipe_desc"]."</p>".
                        "<a id='recipe".$i."' class='btn' data-recipe='".$recipes[$i]["id_recipe"]."'>VOTE</a>".
                    "</div>";
            }
        
        ?>
        
        <input id="recipes" type="hidden" value="<?php echo $len; ?>">
        <input id="id_usr" type="hidden" value="<?php echo $_SESSION["usrid"]; ?>">
        
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
        
        $(document).ready(function(){
            
            var len = $('#recipes').val();
            for(var i=0; i< len; i++){
                $('#recipe'+i).click(function(){
                    var temp = $(this).attr('data-recipe');
                    var id = $('#id_usr').val();
                    
                    $.ajax({
                        method: 'POST',
                        url: 'voting.php',
                        data: {
                            recipe: temp,
                            user: id
                        },
                        error: function() {
                          console.log('ERROR');
                        },
                        dataType: 'text',
                        success: function(data) {
                          console.log(data);
                        }
                    });
                    
                });
            }
            
            
        });
    
    </script>
    
</body>
</html>