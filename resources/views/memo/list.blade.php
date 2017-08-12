<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="utf-8">
    {{--<link rel="stylesheet" href="./style.css">--}}
    <title>2カラムレイアウト</title>
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <style>
        #wrap {
            width:960px;
            margin:0px auto;
        }

        header {
            border:dashed 1px #999;
        }

        #sidenavi {
            float:left;
            width:198px;
            height:498px;
            border:dashed 1px #999;
            margin:10px 10px 10px 0px;
        }

        #contents {
            float:left;
            width:748px;
            height:498px;
            border:dashed 1px #999;
            margin:10px 0px 10px 0px;
        }

        footer {
            clear:both;
            border:dashed 1px #999;
        }

        article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section {
            display: block;
        }
    </style>
</head>

<body>

<div id="wrap">

    <header>
        <h1>header</h1>
    </header>

    <div id="sidenavi">
        <h2>sidenavi</h2>
{{--        {{ var_dump($list) }}--}}
    </div>

    <div id="contents">
        <h2>contents</h2>
    </div>

    <footer>
        <h2>footer</h2>
    </footer>

</div>

</body>
</html>
