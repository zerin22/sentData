<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-4">
        <h2>Contact Us</h2>
        <form action="{{ route('send.email') }}" method="POST">
            @csrf
            <div class="input-group col-md-6 mb-3">
                <span class="input-group-text" id="basic-addon1">Name</span>
                <input type="text" name="name" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
            </div>
              
            <div class="input-group col-md-6 mb-3">
                <span class="input-group-text" id="basic-addon1">Email</span>
                <input type="text" name="email" class="form-control" placeholder="Email" aria-label="Recipient's username" aria-describedby="basic-addon2">
                
            </div>
            <div class="input-group">
                <span class="input-group-text">Message</span>
                <textarea  name="message" cols="30" rows="5" class="form-control" aria-label="With textarea"></textarea>
            </div>
            <input type="submit" value="Send Message" class="btn btn-primary mt-3">
        </form>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>