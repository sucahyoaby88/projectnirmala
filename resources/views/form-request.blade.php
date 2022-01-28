<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

    <link rel="stylesheet" href="css/style2.css">
    
    
    <title>Form Request</title>
</head>
<body>
<h2 class="text-center" style="font-family:Century Gothic; margin-top:100px;">Form Request Product</h2>
    <div class="container">
        <form action="{{ url('sendrequest/') }}" method="post">
        @csrf
        <div class="form-group"> 
            <label for="name" class="controllabel">Name</label> 
            <input name="name" type="text" class="form-control" placeholder="Enter your Company name"> 
        </div>
        <div class="form-group"> 
            <label for="email" class="controllabel">Email</label> 
            <input name="email" type="email" class="form-control" placeholder="Enter your email"> 
        </div>
        <div class="form-group"> 
            <label for="reqproduct" class="controllabel">Request</label> 
            <input name="reqproduct" type="text" class="form-control" placeholder="Enter request product"> 
        </div>
        <div class="text-center">

            <a href="{{ url()->previous() }}" class="btn btn-primary" style="background-color:#968345; border:none">
                <i class="fa fa-arrow-left" style="margin-right:5px"></i>Back
            </a>

            <button type="submit" class="btn btn-primary" style="margin-left:15px; background-color:#968345; border:none">
            <i class="fa fa-send" style="margin-right:5px"></i>Send</button>
            
        </div>
    </form>
    </div>
</body>
</html>