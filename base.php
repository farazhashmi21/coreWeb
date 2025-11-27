<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="css/styles.css"> -->
    <style>
    .header{
        display: flex;
        flex-direction: column;
        align-content: center;
        justify-content: center;
        align-items: center;
        padding-top: 20px;
    }
    .container {
	display: flex;
	flex-direction: row;
	background-color: steelblue;
	color: aliceblue;
    padding: 20px;
}
.row{
	display: flex;
	width: 50%;
	height: 100%;
	justify-content: center;
    align-items: center;
}
.coffee {
	background-image: url('assets/img/coffee.png');
	background-size: cover;
	background-position: center;
	height: 100vh;
	border-radius: 70px;
}.col {
	display: flex;
	flex-direction: column;
	align-self: center;
	align-items: center;
	justify-content: center;
	height: 100vh;
	width: 100%;
}
    </style>
</head>
<body>
    <header class="header">
        <h1>Welcome to My Page</h1>
        <p>Lets DO IT</p>
    </header>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Column 1</h2>
                <p>This is the first column.</p>
                <button>Click Me</button>
            </div>
        </div>
        <div class="row coffee">
            <div class="col">
                <h2>Column 2</h2>
                <p>This is the second column.</p>
            </div>
        </div>
    </div>
</body>
</html>