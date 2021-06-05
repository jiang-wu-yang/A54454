<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Document</title>
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./font/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--引用百度地图API-->
    <!-- <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=3udelfeIG2d1yXZOxzT5bD3VajMGXeSW"></script> -->
</head>
<body>
    <!-- 导航strat -->
    <?php include('header.php')?>
     <!-- 导航end -->
     <!-- 面包屑start -->
     <?php include('crumbs.php')?>
     <!-- 面包屑end -->

    <div class="container">
        <!--百度地图容器-->
        <div class="baidu-map" id="map"></div>
        <div class="content-wrap clearfix">
            <div class="info">
                <h4 class="title">医疗公司</h4>
                <span>集团热线</span>
                <a class="telphone" href="tel:0755-9998888">0755-9998888</a>
                <p>
                    <strong>地址</strong><br>
                    生在南山
                </p>
                <p>
                    <strong>联系人</strong>生在南山
                </p>
                <p>
                    <strong>邮箱</strong><br>
                    生在南山
                </p>
                <p>
                    <strong>网址</strong><br>
                    生在南山
                </p>
            </div>

            <div class="message-form">
                <p class="title">合影工作</p>
                <form action="">
                    <div class="row-container">
                        <div class="col-item-4">
                            <div class="input-item gutter-16">
                                <input type="text" id="name" placeholder="姓名">
                            </div>
                        </div>
                        <div class="col-item-4">
                            <div class="input-item">
                                <input type="text" id="mobile" placeholder="手机号">
                            </div>
                        </div>
                        <div class="col-item-4">
                            <div class="input-item">
                                <input type="text" id="email" placeholder="邮箱">
                            </div>
                        </div>
                        <div class="col-item-12">
                            <div class="input-item">
                                <textarea placeholder="内容" id="text" rows="5" cols="100"></textarea>
                            </div>
                        </div>
                        <div class="col-item-4">
                            <div class="input-item">
                                <input type="text" id="code" placeholder="验证码">
                            </div>
                        </div>
                        <div class="col-item-4">
                            <div class="input-item">
                                <img src="./images/pic006.jpg" alt="" width="100%">
                            </div>
                        </div>
                    </div>
                    <button type="button" onclick="checkForm()">提交</button>
                </form>
            </div>
        </div>
    </div>

    <div class="jobs-banner">
        <h4>加入我们</h4>
        <p>共展宏图伟业</p>
        <span>OPPORTUNITY SELDOM JOINS US</span>
    </div>
    <div class="container">
        <div class="jobs-list" id="jobsList">
            <section>
                <header>
                    <div class="mark" data-type="mark"></div>
                    <span>工作地点:<strong>深圳</strong></span>
                    <span>工作岗位:<strong>深圳</strong></span>
                </header>
                <div class="content">
                    岗位职责<br>
                    岗位职责<br>
                    岗位职责<br>
                    岗位职责<br>
                    岗位职责<br>
                    岗位职责<br>
                    岗位职责<br>
                    岗位职责<br>
                    岗位职责<br>
                    <a href="" class="button">立即申请</a>
                    <div class="info">
                        <span>邮箱:<a href="">1494988584@qq.com</a></span>
                        <span>手机:<a href="">1494988584@qq.com</a></span>
                        <span>座机:<a href="">1494988584@qq.com</a></span>
                    </div>
                </div>
            </section>

            <section>
                <header>
                    <span>工作地点:<strong>深圳</strong></span>
                    <span>工作岗位:<strong>深圳</strong></span>
                </header>
                <div class="content">
                    岗位职责<br>
                    岗位职责<br>
                    岗位职责<br>
                    岗位职责<br>
                    岗位职责<br>
                    岗位职责<br>
                    岗位职责<br>
                    岗位职责<br>
                    岗位职责<br>
                    <a href="" class="button">立即申请</a>
                    <div class="info">
                        <span>邮箱:<a href="">1494988584@qq.com</a></span>
                        <span>手机:<a href="">1494988584@qq.com</a></span>
                        <span>座机:<a href="">1494988584@qq.com</a></span>
                    </div>
                </div>
            </section>

            <section>
                <header>
                    <span>工作地点:<strong>深圳</strong></span>
                    <span>工作岗位:<strong>深圳</strong></span>
                </header>
                <div class="content">
                    岗位职责<br>
                    岗位职责<br>
                    岗位职责<br>
                    岗位职责<br>
                    岗位职责<br>
                    岗位职责<br>
                    岗位职责<br>
                    岗位职责<br>
                    岗位职责<br>
                    <a href="" class="button">立即申请</a>
                    <div class="info">
                        <span>邮箱:<a href="">1494988584@qq.com</a></span>
                        <span>手机:<a href="">1494988584@qq.com</a></span>
                        <span>座机:<a href="">1494988584@qq.com</a></span>
                    </div>
                </div>
            </section>
        </div>

        <div class="pagetion padding-top-90">
            <a href="">1</a>
            <span>2</span>
            <a href="">3</a>
            <a href="">4</a>
            <a href="">5</a>
            <a href="">6</a>
        </div>
    </div>

     <!-- 底部strat -->
     <?php include('footer.php')?>
     <!-- 底部end -->
     <!-- <script src="./js/baiduMap.js"></script> -->
     <script>
         //jobs内容显示
         /*
        1.标签内嵌
         */
        /*
        2.获取DOM对象，传统绑定
        */
       /*
        3.事件注册
       */
        let jobsList = document.getElementById('jobsList');
        jobsList.addEventListener('click', function(e) {
            let target = e.target
            let targetType = target.getAttribute('data-type');
            let targetName = target.tagName.toLowerCase()
            let hastClassName = ''
            if(targetType == 'mark' && targetName == 'div'){
                hastClassName = target.parentNode.parentNode.className
                if(hastClassName){
                    target.parentNode.parentNode.className = ''
                }else{
                    target.parentNode.parentNode.className = 'show'
                }
            }
        })


         //表单验证
         function checkForm(){
             let name = document.getElementById('name');
             let mobile = document.getElementById('mobile');
             let email = document.getElementById('email');
             let text = document.getElementById('text');
             let code = document.getElementById('code');

             if(!name.value){
                 alert('姓名不能为空')
                 return false
             }
             if(!mobile.value){
                 alert('手机号不能为空')
                 return false
             }
             if(!/^1[345678]\d{9}$/.test(mobile.value)){
                 alert('手机号格式错误')
                 return false
             }
         }
     </script>
</body>
</html>