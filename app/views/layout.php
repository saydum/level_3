<html>
<title><?=$this->e($title)?></title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<body>

<nav>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link active" href="/">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/about">About</a>
        </li>
    </ul>
</nav>

<?=$this->section('content')?>

</body>
</html>
