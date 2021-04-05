<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    body {
        background: black;
    }
    h1, p {
        color: yellow;
    }
    #mainHolder {
        width: 800px;
        margin: auto;
        height: 40vh;
        border: 1px solid yellow;
        padding: 30px;
    }
    .pagination {
        display: flex;
        justify-content: space-evenly;
        list-style: none;
        transition: 1s;
        padding: 0;
    }
    .pagination li {
        transition: 0.5s;
        width: 100%;
        text-align: center;
    }
    .pagination li:hover {
        background: orange;
    }
    .pagination li a {
        width: 100%;
        display: block;
        color: yellow;
        text-decoration: none;
        font-size: 20px;
    }
    .pagination li span {
        color: yellow;
        font-size: 20px;
    }
    .pagination .active {
        transition: 0.5s;
        background: red;
        color: yellow;
    }
</style>

<body>
    <div id="mainHolder">
        @foreach($data as $post)
                <h1>{{ $post->getHeader() }}</h1>
                <p>{{ $post->getDesc() }}</p>
        @endforeach
    </div>

</body>
<?php 
// $links = $data->render(); 
// $patterns = '#\?page=#';

// $replacements = '/news/';
// $one = preg_replace($patterns, $replacements, $links);

// $pattern2 = '#page/([1-9]+[0-9]*)/page/([1-9]+[0-9]*)#';
// $replacements2 = 'page/$2';
// $paginate_links = preg_replace($pattern2, $replacements2, $one);
// echo $paginate_links;
?>
{{ $data->render() }} 
<!-- ზედა და ქვედა იმპლემენტაციები არ მუშაობს. ლინკის ფორმატი query პარამეტრებს ამიტომაც შეიცავს. -->
<!-- {!! str_replace('?page=', '/', $data->render()) !!} -->
</html>