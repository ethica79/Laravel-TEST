
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout1</title>
    <style>
        body {
            background-color:cadetblue;
            text-align: center;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: darkred;
            padding: 30px;
            text-align: center;
            font-size: 35px;
            color: white;
        }

        .subtitle-box {
        background-color: rgb(86, 93, 108);
        padding: 10px 20px;
        text-align: center;
        font-size: 18px;
        color: white;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 20px; 
             
        }
        .box {
            background-color: whitesmoke;
            padding: 20px;
            width: 50%;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: left;
        }
        footer {
            background-color: darkred;
            color: white;
            padding: 10px;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

    <header>
        <h2>MyMoodle</h2>
    </header>

<div class="subtitle-box">
    <h2>@yield('titre')</h2>
    
</div>

    <div class="container">
        
        <div class="box">
            
            <h2>@yield('contenue')</h2>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel magna sed velit fermentum sollicitudin. Morbi scelerisque quam ac nisl malesuada, in gravida mi euismod. Sed consequat turpis eu eros suscipit, non tincidunt purus dictum. Integer vitae libero nec elit eleifend ullamcorper. Donec ut quam id lectus feugiat tincidunt non sit amet nisl. Nulla facilisi. Fusce vel lacus urna.</p>
            
        
        </div>
    </div>

    <footer>
        <h2>Page created by therence</h2>
    </footer>
</body>
</html>