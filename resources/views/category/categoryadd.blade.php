<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="/assets/css/ace.min.css" />
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css" />
    <link href="/Widget/icheck/icheck.css" rel="stylesheet" type="text/css" />
    <!--[if IE 7]>
		  <link rel="stylesheet" href="/assets/css/font-awesome-ie7.min.css" />
		<![endif]-->
    <!--[if lte IE 8]>
		  <link rel="stylesheet" href="/assets/css/ace-ie.min.css" />
		<![endif]-->
    <script src="/js/jquery-1.9.1.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <title>添加产品分类</title>
</head>

<body>
    <div class="type_style">
        <div class="type_title">产品类型信息</div>
        <div class="type_content">
            <form target="_top" action="{{ route('categorydoadd') }}" method="post" class="form form-horizontal" id="form-user-add">
                {{ csrf_field() }}
                <div class="Operate_cont clearfix">
                    <label class="form-label"><span class="c-red">*</span>排序：</label>
                    <span style="float:left;">
                        <select name="parent1_id" size="10">
                            <option value="0" class="btn  btn-success">==一级父分类==</option>
                            @foreach($topCat as $v)
                            <option value="{{$v->id}}">{{$v->name}}</option>
                            @endforeach
                        </select>
                    </span>
                    <span style="float:right;">
                        <select name="parent2_id" size="10">
                            <option value="0" class="btn  btn-warning">==二级父分类==</option>
                        </select>
                    </span>
                </div>
                <div class="Operate_cont clearfix">
                        <label class="form-label"><span class="c-red">*</span>分类名称：</label>
                        <div class="formControls ">
                            <input type="text" class="input-text" value="" id="user-name" name="name">
                        </div>
                </div>
                <div class="">
                    <div class="" style=" text-align:center">
                        <input class="btn btn-primary radius" type="submit" value="提交">
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
    <script type="text/javascript" src="/Widget/icheck/jquery.icheck.min.js"></script>
    <script type="text/javascript" src="/Widget/Validform/5.3.2/Validform.min.js"></script>
    <script type="text/javascript" src="/assets/layer/layer.js"></script>
    <script type="text/javascript" src="/js/H-ui.js"></script>
    <script type="text/javascript" src="/js/H-ui.admin.js"></script>
    <script type="text/javascript">
        $(function () {
            $('.skin-minimal input').iCheck({
                checkboxClass: 'icheckbox-blue',
                radioClass: 'iradio-blue',
                increaseArea: '20%'
            });
        });
    // 分类添加
    $("select[name=parent1_id]").change(function(){
        var s2 = $("select[name=parent2_id]");
        var html = '<option class="btn  btn-danger" value="0">==二级父分类==</option>';
        if($(this).val()=='0')
        {
            s2.html(html);
        }
        else
        {
            // console.log($(this).val());
            $.ajax({
                type:"GET",
                url:"/subcat/"+$(this).val(),
                dataType:"json",
                contentType:"application/json",
                success:function(data)
                {
                    $(data).each(function(k,v){
                        html += '<option value="'+v.id+'">'+v.name+'</option>';
                    });
                    s2.html(html);
                }
            });
        }
});

    </script>
</body>

</html>
