<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/css/style.css" />
    <link href="/assets/css/codemirror.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/ace.min.css" />
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css" />

    <title>添加列表</title>
</head>

<body>
        <form action="/goods/upload" method="POST">
        <div class=" clearfix cl">
                <label class="form-label col-2">选择规格sku：</label>
                <div id="goods-sku">
                    <select name="sku_id" id="">
                        <option value="0">==选择规格==</option>
                        @foreach ($sku as $v)
                            <option value="{{ $v->sku_id }}">{{$v->goods_attr_list}}</option>
                        @endforeach
                    </select>
                    <div style="clear: both;"></div>
                </div>
        </div>
        </form>
    <!--添加用户图层-->
    <div id="demo" class="demo"></div>
</body>

</html>
<script src="/js/jquery-3.2.1.min.js"></script>
<script>
	var __p = $(parent.document.getElementById('pic-list'));
	var goods_id = __p.attr("goods_id");
</script>

<link rel="stylesheet" href="/uploader/control/css/zyUpload.css" type="text/css">
<script src="/uploader/core/zyFile.js"></script>
<script src="/uploader/control/js/zyUpload.js"></script>
<script src="/uploader/core/jq22.js"></script>

