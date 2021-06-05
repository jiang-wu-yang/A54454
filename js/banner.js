//获取滚动范围对象
let slideWrap = document.getElementById('slide-wrap');
//获取滚动的对象[div div div]
let slideContent = slideWrap.getElementsByClassName('slide-content')[0];
//获取图片对象[li li li]
let liTiem = slideContent.getElementsByTagName('li');
//获取分页的按钮对象
let aItem = slideWrap.getElementsByClassName('slide-nav')[0].getElementsByTagName('a');
//next按钮
let nextButton = slideWrap.getElementsByClassName('slide-next')[0];
//prev按钮
let prevButton = slideWrap.getElementsByClassName('slide-prev')[0];
//获取可视区宽度
let viewWidth = document.documentElement.clientWidth || document.body.clientWidth;

//当前索引
let currentIndex = 0;

//滚动开关标记
let flag = false;

//标记定时器
let flagTime = null;
//自动播放定时器
let autoTime = null;

//设置滚动对象的宽度
slideContent.style.width = viewWidth * liTiem.length + "px";
//设置图片对象的宽度
for (let i = 0; i < liTiem.length; i++) {
    liTiem[i].style.width = viewWidth + "px";
}
//分页按钮的点击事件
//谁触发了事件  this就指向谁
for (let i = 0; i < aItem.length; i++) {
    aItem[i].onclick = function () {
        currentIndex = i
        slide(i);
    }
}

//执行自动播放
autoPlay()

slideWrap.onmouseenter = function () {
    clearInterval(autoTime)
}

slideWrap.onmouseleave = function () {
    autoPlay()
}

//nextButton事件
nextButton.onclick = function () {
    if (flag) {
        return false
    }
    flag = true
    next()
}
//prevButton事件
prevButton.onclick = function () {
    if (flag) {
        return false
    }
    flag = true
    prev()
}

//自动播放
function autoPlay() {
    autoTime = setInterval(function () {
        next()
    }, 2000);
}

//next
function next() {
    currentIndex++
    if (currentIndex == aItem.length) {
        currentIndex = 0
    }
    slide(currentIndex)
}

//prev
function prev() {
    currentIndex--
    if (currentIndex < 0) {
        currentIndex = aItem.length - 1
    }
    slide(currentIndex)
}

//分页按钮分页切换
function tooglight() {
    for (let k = 0; k < aItem.length; k++) {
        aItem[k].className - ''
    }
    //[a a a]
    aItem[currentIndex].className = 'current'
}

//滚动
function slide(number) {
    let left = number * viewWidth;
    slideContent.style.left = -left + "px";
    flagTime = setTimeout(() => {
        flag = false
        clearTimeout(flagTime);
    }, 1000);
    tooglight()
}

/*
0:0 * viewWidth = 0
1:1 * viewWidth = 1903
.
*/