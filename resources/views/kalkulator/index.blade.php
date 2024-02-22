<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FEBI</title>
    <style>
        table {
            border: 1px solid black;
            margin-left: auto;
            margin-right: auto;
            border: 1px black;
            margin-left: auto;
            margin-right: auto;
            border collapse: collapse;
            border: none;
            outline: black;
            border-radius: 10px;
            background-color: palevioletred;
            width: 40px;
            box-shadow: 10px 10px 20px 0px rgba(0, 0, 0, 0.5);
            
        }
        td{
            width: 80px;
            padding: 15px
        }
        tr{
            width:100px;
            padding: 15px
        }
        input[type="submit"]{
            width: 100%;
            padding: 20px 40px;
            background-color: pink;
            color:black;
            margin-bottom: 10px;
            border: none;
            border-radius: 20px;
            font-weight:bold;
            
        }
        input[type="reset"]{
            width: 100%;
            padding: 20px 20px;
            background-color:pink;
            color:white;
            margin-bottom: 10px;
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
        input[type="number"]{
            width: 80%;
            padding: 10px;
            border: 2px black;
            border-radius: 50px;
            box-shadow: inset;
            text-align: justify;
        }
    </style>
    
</head>
<body>
    <h1><center>KALKULATOR FEBI</center></h1>
    <center>
   
    <br>
    <form action=" {{ route('proses.store') }} " method="post">
        @csrf
    <table border=1 width=300>
        <tr>
            <td colspan=2><input type="number" name="a" id=""></td>
            
            <td colspan=2 rowspan=2><input type="submit" value="reset" name="op"></td>
            
        </tr>
        <tr>
            <td colspan=2><input type="number" name="b" id=""></td>
            
        </tr>
        <tr>
            <td colspan=4>Hasil</td>
            
        </tr>
        <tr>
            <td><input type="submit" value="+" name="op"></td>
            <td><input type="submit" value="-" name="op"></td>
            <td><input type="submit" value="x" name="op"></td>
            <td><input type="submit" value="/" name="op"></td>
        </tr>
        <tr>
            <td colspan=4><center>
                Nama :Febi Febrianti
                <br>
                Kelas:XII PPLG 2
    </center>

            </td>
            
        </tr>
</center>   
</body>

</html>