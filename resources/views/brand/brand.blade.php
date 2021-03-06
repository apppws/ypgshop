<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/css/style.css" />
    <link href="/assets/css/codemirror.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/ace.min.css" />
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css" />
    <!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->
    <!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->
    <script src="/assets/js/jquery.min.js"></script>

    <!-- <![endif]-->

    <!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->

    <!--[if !IE]> -->

    <script type="text/javascript">
        window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>" + "<" + "/script>");
    </script>

    <!-- <![endif]-->

    <!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

    <script type="text/javascript">
        if ("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
    </script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/typeahead-bs2.min.js"></script>
    <!-- page specific plugin scripts -->
    <script src="/assets/js/jquery.dataTables.min.js"></script>
    <script src="/assets/js/jquery.dataTables.bootstrap.js"></script>
    <script type="text/javascript" src="/js/H-ui.js"></script>
    <script type="text/javascript" src="/js/H-ui.admin.js"></script>
    <script src="/assets/layer/layer.js" type="text/javascript"></script>
    <script src="/assets/laydate/laydate.js" type="text/javascript"></script>
    <title>用户列表</title>
</head>

<body>
    <div class="page-content clearfix">
        <div id="Member_Ratings">
            <div class="d_Confirm_Order_style">
                <div class="search_style">
                    <form>
                        <ul class="search_content clearfix">
                            <li><label class="l_f">商品名称</label>
                                <input name="keyword" value="{{ $req->keyword }}" type="text" class="text_add" placeholder="输入商品名称" style=" width:400px" />
                            </li>
                            <li><label class="l_f">添加时间</label>
                                <input name="from" value="{{ $req->from }}" class="inline laydate-icon" id="start" style=" margin-left:10px;">
                            </li>
                            <li style="width:90px;">
                                <button type="submit" class="btn_search"><i class="icon-search"></i>查询</button>
                            </li>
                        </ul>
                    </form>

                </div>
                <!---->
                <div class="border clearfix">
                    <span class="l_f">
                        <a href="{{ route('brand_add') }}" id="member_add" class="btn btn-warning"><i class="icon-plus"></i>添加用户</a>
                        <a href="javascript:ovid()" class="btn btn-danger"><i class="icon-trash"></i>批量删除</a>
                    </span>
                    <span class="r_f">共：<b>{{ $data->count() }}</b>条</span>
                </div>
                <!---->
                <div class="table_menu_list" id="testIframe">
                        <table class="table table-striped table-bordered table-hover" id="sample-table">
                                <thead>
                                 <tr>
                                        <th width="25px"><label><input type="checkbox" class="ace"><span class="lbl"></span></label></th>
                                        <th width="80px">ID</th>
                                        <th width="120px">品牌LOGO</th>
                                        <th width="250px">品牌名称</th>
                                        <th width="130px">产地</th>
                                        <th width="400px">描述</th>
                                        <th width="180px">加入时间</th>
                                        <th width="70px">状态</th>
                                        <th width="450px">操作</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($data as $v )
                                <tr>
                                  <td width="25px"><label><input type="checkbox" class="ace" ><span class="lbl"></span></label></td>
                                  <td width="80px">{{ $v->id }}</td>
                                  <td width="120px">
                                         @if($v->logo)
                                            <img src="{{$v->logo}}" width="130">
                                        @endif
                                    </td>
                                  <th width="250px">{{ $v->name }}</th>
                                  <td width="130px">{{ $v->chandi }}</td>
                                  <td width="400px">{{ $v->note }}</td>
                                  <td width="180px">{{ $v->created_at }}</td>
                                  <td width="70px" class="td-status"><span class="label label-success radius">已启用</span></td>
                                  <td width="450px"  class="td-manage">
                                    <a onClick="member_stop(this,'10001')"  href="javascript:;" title="停用"  class="btn btn-xs btn-success">
                                        <i class="icon-ok bigger-120"></i>
                                    </a>
                                    <a title="编辑" href="/brand/edit/{{$v->id}}"  class="btn btn-xs btn-info" >
                                        <i class="icon-edit bigger-120"></i>
                                    </a>
                                    <a title="删除" onclick="confirm('你确定要删除吗？')" href="/brand/delete/{{$v->id}}" onclick="member_del(this,'1')" class="btn btn-xs btn-warning" ><i class="icon-trash  bigger-120"></i></a>
                                  </td>
                                </tr>
                                @endforeach
                                </tbody>
                                </table>
                    </div>
            </div>
        </div>
    </div>
    <!--添加用户图层-->

</body>

</html>
<script>
    jQuery(function ($) {
        var oTable1 = $('#sample-table').dataTable({
            "aaSorting": [[1, "desc"]],//默认第几个排序
            "bStateSave": true,//状态保存
            "aoColumnDefs": [
                //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
                { "orderable": false, "aTargets": [0, 8, 9] }// 制定列不参与排序
            ]
        });


        $('table th input:checkbox').on('click', function () {
            var that = this;
            $(this).closest('table').find('tr > td:first-child input:checkbox')
                .each(function () {
                    this.checked = that.checked;
                    $(this).closest('tr').toggleClass('selected');
                });

        });


        $('[data-rel="tooltip"]').tooltip({ placement: tooltip_placement });
        function tooltip_placement(context, source) {
            var $source = $(source);
            var $parent = $source.closest('table')
            var off1 = $parent.offset();
            var w1 = $parent.width();

            var off2 = $source.offset();
            var w2 = $source.width();

            if (parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2)) return 'right';
            return 'left';
        }
    })
    /*用户-添加*/
    $('#member_add').on('click', function () {
        layer.open({
            type: 1,
            title: '添加用户',
            maxmin: true,
            shadeClose: true, //点击遮罩关闭层
            area: ['800px', ''],
            content: $('#add_menber_style'),
            btn: ['提交', '取消'],
            yes: function (index, layero) {
                var num = 0;
                var str = "";
                $(".add_menber input[type$='text']").each(function (n) {
                    if ($(this).val() == "") {

                        layer.alert(str += "" + $(this).attr("name") + "不能为空！\r\n", {
                            title: '提示框',
                            icon: 0,
                        });
                        num++;
                        return false;
                    }
                });
                if (num > 0) { return false; }
                else {
                    layer.alert('添加成功！', {
                        title: '提示框',
                        icon: 1,
                    });
                    layer.close(index);
                }
            }
        });
    });
    /*用户-查看*/
    function member_show(title, url, id, w, h) {
        layer_show(title, url + '#?=' + id, w, h);
    }
    /*用户-停用*/
    function member_stop(obj, id) {
        layer.confirm('确认要停用吗？', function (index) {
            $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" class="btn btn-xs " onClick="member_start(this,id)" href="javascript:;" title="启用"><i class="icon-ok bigger-120"></i></a>');
            $(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">已停用</span>');
            $(obj).remove();
            layer.msg('已停用!', { icon: 5, time: 1000 });
        });
    }

    /*用户-启用*/
    function member_start(obj, id) {
        layer.confirm('确认要启用吗？', function (index) {
            $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" class="btn btn-xs btn-success" onClick="member_stop(this,id)" href="javascript:;" title="停用"><i class="icon-ok bigger-120"></i></a>');
            $(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已启用</span>');
            $(obj).remove();
            layer.msg('已启用!', { icon: 6, time: 1000 });
        });
    }
    laydate({
        elem: '#start',
        event: 'focus'
    });

</script>
