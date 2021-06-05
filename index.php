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
    <link rel="stylesheet" href="./js/swiper-4.5.3/dist/css/swiper.min.css">
    <link rel="stylesheet" href="./font/font-awesome-4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- 导航strat -->
    <?php include('header.php')?>
    <!-- 导航end -->

    <!-- 轮播strat -->
    <div id="slide-wrap">
        <div class="slide-content">
            <ul class="clearfix">
                <li><img src="./images/img.jpg" alt="" width="100%"></li>
                <li><img src="./images/img.jpg" alt="" width="100%"></li>
                <li><img src="./images/img.jpg" alt="" width="100%"></li>
            </ul>
        </div>
        <ul class="slide-nav">
            <a href="javascript:void(0);" class="current"></a>
            <a href="javascript:void(0);"></a>
            <a href="javascript:void(0);"></a>
        </ul>
        <span class="slide-prev"><i class="fa fa-angle-left"></i></span>
        <span class="slide-next"><i class="fa fa-angle-right"></i></span>
    </div>
    <!-- 轮播end -->

    <!-- 第一个内容 -->
    <div class="container">
        <!-- 口腔内容 -->
        <section>
            <header>
                <div class="main-colum padding-top-90 padding-bottom-70">
                    <h3>朗朗口腔</h3>
                    <p>
                        健康呵护成长
                        <span></span>
                        chhkeeieh hehkajhe kh
                    </p>
                </div>
            </header>
            <div class="list-info">
                <div id="infowListWrap"></div>
                <a href="#" class="more-link">查看更多</a>
            </div>
        </section>
        
        <!-- 公益内容 -->
        <section class="welfare">
            <header>
                <div class="main-colum padding-top-53 padding-bottom-53">
                    <h3>朗朗口腔</h3>
                    <p>
                        健康呵护成长
                        <span></span>
                        chhkeeieh hehkajhe kh
                    </p>
                </div>
            </header>
            <div class="welfare-wrap" id="welfarewrap"></div>
        </section>


    </div>

    <!-- 医生模块strat -->
    <section class="doctor">
        <header class="display-none">
            <div>
                <h3>朗朗口腔</h3>
                <p>
                    健康呵护成长
                    <span></span>
                    chhkeeieh hehkajhe kh
                </p>
            </div>
        </header>
        <div class="container">
            <!-- Swiper -->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">

                        <div class="doctor-slide-item clearfix doctor-info">
                            <div class="img">
                                <span class="name">将武杨</span>
                                <img src="./images/pic005.jpg" alt="">
                            </div>
                            <div class="content">
                                <h4 class="title">压抑真实</h4>
                                <span class="txt">杀了肯德基去我姥姥期望立刻就完全我</span>
                                <i class="line"></i>
                                <p class="dec">荔湾区氪金大佬去我看见了为契机断路器我空间离开我请假荔湾区空间另外请教离开我请假另外请教两千万</p>
                                <a href="" class="link-more border-none">
                                    查看更多
                                    <i class="fa fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="doctor-slide-item clearfix doctor-info">
                            <div class="img">
                                <span class="name">将武杨</span>
                                <img src="./images/pic005.jpg" alt="">
                            </div>
                            <div class="content">
                                <h4 class="title">压抑真实</h4>
                                <span class="txt">杀了肯德基去我姥姥期望立刻就完全我</span>
                                <i class="line"></i>
                                <p class="dec">荔湾区氪金大佬去我看见了为契机断路器我空间离开我请假荔湾区空间另外请教离开我请假另外请教两千万</p>
                                <a href="" class="link-more border-none">
                                    查看更多
                                    <i class="fa fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>


            
        </div>
    </section>
    <!-- 医生模块end -->

    <!-- 资讯动态 -->
    <div class="container">
        <section>
            <header>
                <div class="main-colum padding-top-90 padding-bottom-40">
                    <h3>朗朗口腔</h3>
                    <p>
                        健康呵护成长
                        <span></span>
                        chhkeeieh hehkajhe kh
                    </p>
                </div>
            </header>
            <ul class="tab-menu"></ul>
            <div id="tab-content-wrap"></div>
        </section>
    </div>

    <?php include('footer.php')?>

    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/banner.js"></script>
    <script src="./js/common.js"></script>
    <script src="./js/swiper-4.5.3/dist/js/swiper.min.js"></script>
    <script src="./js/doctorSwiper.js"></script>
    <script src="./js/indexNewsAjax.js" type="text/javascript"></script>
    <script>
        loadingMsg({
            wrap:'infowListWrap',
            message:'加载中'
        });
        $.ajax({
            url:"./data/index.php", //请求的url地址
            dataType:"json",   //返回格式为json
            async:false,//请求是否异步，默认为异步，这也是ajax重要特性
            cache:false,//是否读取缓存
            data:{ 
                categoryId:123456 
            },//参数值
            type:"post",//请求方式
            beforeSend:function(){
                //请求前的处理
            },
            success:function(req){//请求成功时处理
                let infoListWrap = document.getElementById('infowListWrap');

                //判断数据是否存在
                if(!req.data || req.data.lenght === 0){
                    loadingMsg({
                        wrap:'infowListWrap',
                        message:'当前数据为空'
                    });
                    return false;
                }
                //处理数据
                let ul = '<ul class="clearfix">'

                req.data.forEach(item => {
                    ul += `
                <figure>
                    <a href="newsDetail.php?id=${item.title}">
                        <img src="${item.imgUrl}" alt="${item.title}}">
                        <figcaption>${item.title}</figcaption>
                        <p>${item.dec}</p>
                    </a>
                </figure>
                `
                })
                ul += '</ul>'
                //请求成功后处理视图渲染
                infoListWrap.innerHTML = ul
            },
            complete:function(){
                //请求完成的处理
            },
            error:function(){
                //请求出错处理
            }
        });


        $.ajax({
            url:"./data/index.php", //请求的url地址
            dataType:"json",   //返回格式为json
            async:false,//请求是否异步，默认为异步，这也是ajax重要特性
            cache:false,//是否读取缓存
            data:{ 
                module:'welfare',
                categoryId:10000 
            },//参数值
            type:"post",//请求方式
            beforeSend:function(){
                //请求前的处理
            },
            success:function(req){//请求成功时处理
                let data = req.data;
                let html = '';
                let welfareWrap= document.getElementById('welfarewrap');
                //处理第一个
                html += `
                <div class="row">
                    <div class="content-flex">
                        <div class="content-flex-big">
                            <img src="${data[0].imgUrl}" alt="${data[0].title}">
                        </div>
                        <div class="content-flex-small"  style="background-color:#${data[0].bgColor};">
                            <div class="content-dec">
                                <h4 class="title">${data[0].title}</h4>
                                <time datetime="${data[0].date}" pubdate="${data[0].date}">${data[0].date}</time>
                                <i class="line"></i>
                                <a href="" class="link-more">
                                    查看更多
                                    <i class="fa fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                `

                req.data.forEach((item, index) => {
                    if(index != 0 ){ 
                    html += `
                        <div class="row">
                            <div class="content-flex">
                                <div class="content-flex-big"  style="background-color:#${item.bgColor};">
                                    <div class="content-dec">
                                        <h4 class="title">${item.title}</h4>
                                        <time datetime="${item.date}" pubdate="${item.date}">${item.date}</time>
                                        <i class="line"></i>
                                        <p class="dec">${item.dec}</p>
                                        <a href="" class="link-more">
                                            查看更多
                                            <i class="fa fa-long-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="content-flex-small">
                                    <img src="${item.imgUrl}" alt="${item.title}">
                                </div>
                            </div>
                        </div>
                        `
                        }
                    })
                    welfareWrap.innerHTML = html;
            },
            complete:function(){
                //请求完成的处理
            },
            error:function(){
                //请求出错处理
            }
        });
    </script>
</body>

</html>