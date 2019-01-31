<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <link rel="stylesheet" href="topdf/base.min.css"/>
    <link rel="stylesheet" href="topdf/fancy.min.css"/>
    <link rel="stylesheet" href="topdf/main.css"/>
    <script src="topdf/"></script>
    <script src="theViewer.min.js"></script>
    <script>
        try{
            theViewer.defaultViewer = new theViewer.Viewer({});
        }catch(e){}
    </script>
    <title></title>
</head>
<body>
    {{--<div id="sidebar">--}}
        {{--<div id="outline">--}}
            {{--<div id="page-container">--}}
                @yield('content')
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
</body>
