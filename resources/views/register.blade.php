<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
    </head>
    <body>
            <div class="content">
                <h1>Buat Account Baru</h1>
                <h2>Sign Up Form</h2>
   

            </div>
            <form action="{{url('/welcome')}}" method="post">
                @csrf    
                    <div>
                    <label for="">First Name</label>
                    <input type="text" name="fname">
                    </div>
                    <div>
                    <label for="">Last Name</label>
                    <input type="text" name="lname">
                    </div>
                    <div>
                    <label for="">Gender</label>
                    <input type="radio" name="gender" value="1"> Men
                    <input type="radio" name="gender" value="2"> Woman
                    <input type="radio" name="gender" value="3"> Other
                    </div>
                    <div>
                    <label for="">Nationaly</label>
                    <select name="Nationaly" id="id">
                        <option value="id">Indonesia</option>
                        <option value="ml">Malaysia</option>
                    </select>
                    </div>
                    <div>
                    <label for="">Langguage</label>
                    <input type="checkbox" value="id"> Indonesia
                    <input type="checkbox" value="in"> Inggris
                    <input type="checkbox" value="ar"> Arab
                    </div>
                    <div>
                        
                    <label for="">Box</label>
                    <textarea name="box" id="" cols="30" rows="10"></textarea>
                    </div>

                    <div>
                        <input type="submit" value="Sign Up">
                    </div>



                </form>
    </body>
</html>
