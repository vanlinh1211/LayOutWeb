<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    div.container {
        width: 100%;
        border: 1px solid gray;
    }
    header, footer {
        padding: 1em;
        color: white;
        background-color: black;
        clear: left;
        text-align: center;
    }
    nav{
        float: left;
        max-width: 160px;
        margin: 0;
        padding: 1em;
    }
    nav ul {
        list-style-type: none;
        padding: 0;
    }
    nav ul a {
        text-decoration: none;
    }
    article {
        margin-left: 170px;
        border-left: 1px solid gray;
        padding: 1em;
        overflow: hidden;
    }
</style>
<body>
<div class="container">
    <header>
        <h1>City Gallery</h1>
    </header>
    <nav>
        <ul>
            <li><a href="#">London</a></li>
            <li><a href="#">HaNoi</a></li>
            <li><a href="#">Paris</a></li>
        </ul>
    </nav>
    <article>
        <h1>London</h1>
        <p>London is the capital city of England. It is the most populous city in the  United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>
        <p>Standing onthe River Thames, London has been a major settlement for two millennia, its history going back to its founding by the Romans, who named it Londinium.</p>
    </article>

</div>
</body>
</html>