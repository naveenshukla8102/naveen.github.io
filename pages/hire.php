<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hire</title>
    <link rel="stylesheet" href="../scss/website.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@500&family=Rajdhani:wght@300&display=swap"
        rel="stylesheet">
</head>

<body class="hire-body">
    <?php
include "navbar.php";
    ?>

    <div class="pt-5 mt-5">
        <h1 class="text-center " id="responce">Want To Get In Touch?</h1>
    </div>
    <div class="col-lg-6 col-md-8 col-sm-10 mx-auto ">
        <form  method="POST" class="row p-5" id="form">
            <div class="col-md-6 p-1"><input name="name" id="name" type="text" placeholder="enter name"
                    class="col-12 bg-secondary-subtle py-3 my-2 rounded"></div>
            <div class="col-md-6 p-1"><input name="email" id="email" type="email" placeholder="email"
                    class="col-12 bg-secondary-subtle py-3 my-2 rounded"></div>
            <div class="col-12 p-1"><input name="phone" id="phone" type="number" placeholder="phone"
                    class="col-12 bg-secondary-subtle py-3 my-2 rounded"></div>
            <div class="col-12 p-1"><input name="message" id="message" type="text" placeholder="message"
                    class="col-12 bg-secondary-subtle py-3 my-2 rounded"></div>

            <div class="col-6 p-1"> <input id="submit" name="submit" onsubmit="getclintdata()" placeholder="submit now" type="submit"
                    class="btn btn-success btn-lg rounded-pill px-5"></div>


        </form>
        <img src="../img/7efs.gif" id="success" alt="">
        <h1 class="text-center" id="return_link"><a href="../index.php">continue on website</a></h1>
    </div>
    <div class="bg-primary-subtle text-center py-5 container-6">
        <h1> UI Portfolio</h1>
        <h5><i class="fa-solid fa-phone"></i> +91 8118823210 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i
                class="fa-solid fa-envelope"></i> shuklanaveen8102@gmail.com&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i
                class="fa-solid fa-location-dot"></i> delhi,india.</h5>
    </div>


    <!-- <script src="js.js"></script> -->
    <script src="../js/jquery.js"></script>

        <script>
        $(document).ready(function(){
            
            $("#return_link").hide();
            $("#success").hide();
        $("#submit").click(function(e){
            e.preventDefault();
            var name = $("#name").val();
            var email = $("#email").val();
            var phone = $("#phone").val();
            var message = $("#message").val();
            console.log("name");

            $.ajax({
                url : "submit.php",
                type : "POST",
                data : {name:name,email:email,phone:phone,message:message},
                success : function(r){
                    if(r=1){
                        $('#responce').text('thank you for connect with us').addClass("bg-success py-5 text-white");
                        $('#form').hide();
                        
                        $("#success").show();
                        setTimeout(function(){
                            $("#success").fadeOut("slow");
                            $("#return_link").show();

                },2000);

                    }
                    else{
                        $('#responce').text('all fields are requred').addClass("bg-danger py-5 text-white");
                    }

                }
                    
            })

        })
        });
        </script>
</body>

</html>


