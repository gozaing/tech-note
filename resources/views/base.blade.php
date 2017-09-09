<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="utf-8">
    {{--<link rel="stylesheet" href="./style.css">--}}
    <title>@yield('title')</title>
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
        <h1>Tech-Memo</h1>
    </header>

    <div id="sidenavi">
        {{--<h2></h2>--}}
        <ul>
            @foreach($list as $a)
                <li><a href="/memo/{{ $a->id }}">{{ $a->title }}</a></li>
            @endforeach
        </ul>

    </div>

    <div class="container">
        <h1>@yield('title')</h1>
        @yield('content')
    </div>

    <footer>
        <h2>footer</h2>
    </footer>

</div>

</body>
</html>
