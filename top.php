<style>
/* 浮动按钮样式 */
.scroll-to-top-fab, .additional-fab {
position: fixed;
right: 20px;
z-index: 1000;
}
.scroll-to-top-fab {
bottom: 20px;
display: none; /* 默认不可见 */
}
/*.additional-fab {
bottom: 60px; /* 距离底部60px 
}*/
</style>
<!-- 另一个始终显示的浮动按钮
<mdui-fab icon="add" class="additional-fab"></mdui-fab> -->
<!-- 返回到网页顶部的浮动按钮 -->
<mdui-fab icon="arrow_upward" class="scroll-to-top-fab" onclick="scrollToTop()"></mdui-fab>
<script>
// 滚动到顶部的函数
function scrollToTop()
{
    window.scrollTo(
    {
        top: 0,
        behavior: 'smooth' // 使滚动平滑过渡
    }
    );
}
// 检查滚动位置并显示/隐藏返回顶部按钮
function checkScrollPosition()
{
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    if (scrollTop > 0)
    {
        document.querySelector('.scroll-to-top-fab').style.display = 'block';
    }
    else
    {
        document.querySelector('.scroll-to-top-fab').style.display = 'none';
    }
}
// 滚动事件监听器
window.addEventListener('scroll', checkScrollPosition);
checkScrollPosition();
// 初始检查
</script>