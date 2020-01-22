<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
<head>
    <title>Строковые и блочные элементы</title>
    <meta http-equiv="content-type"
          content="text/html; charset=utf-8" />


    <style type="text/css">
        #one {
            background-color: #CFEAFA;
            border: 2px solid #6CB5DF;
            padding: 6px;
        }
        #two {
            background-color: #CFEAFA;
            border: 2px solid #6CB5DF;
            padding: 2px 6px 2px 6px;
            display: inline;
        }
        a {
            background-color: #6CB5DF;
            color: #FFFFFF;
            text-decoration: none;
            padding: 1px 2px 1px 2px;
        }
        a.block {
            display: block;
        }
    </style>


</head>

<body>


    <div id="one">Этот div является блочным элементом.</div>

    <div id="two">Этот div показан как строковый элемент.</div>

    <p>Этот параграф содержит <a href="#">ссылку</a> которая показана как строковый элемент.</p>

    <p>Этот параграф содержит <a class="block" href="#">ссылку</a> которая показана как блочный элемент.</p>


</body>
</html>