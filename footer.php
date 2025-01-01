<footer style="margin-top: 0px; margin-bottom: 20px; text-align: center;">
<!--分割线-->
<div style="width: 100%; height: 15px;"></div>
<div class="divider" style="text-align: left;margin-top: 0px;" data-v-6022fb55="">
<svg aria-hidden="true" width="100%" height="8" fill="none" xmlns="http://www.w3.org/2000/svg" data-v-6022fb55=""><pattern id="a" width="91" height="8" patternunits="userSpaceOnUse" data-v-6022fb55="">
<g clip-path="url(#clip0_2426_11367)" data-v-6022fb55="">
<path d="M114 4c-5.067 4.667-10.133 4.667-15.2 0S88.667-.667 83.6 4 73.467 8.667 68.4 4 58.267-.667 53.2 4 43.067 8.667 38 4 27.867-.667 22.8 4 12.667 8.667 7.6 4-2.533-.667-7.6 4s-10.133 4.667-15.2 0S-32.933-.667-38 4s-10.133 4.667-15.2 0-10.133-4.667-15.2 0-10.133 4.667-15.2 0-10.133-4.667-15.2 0-10.133 4.667-15.2 0-10.133-4.667-15.2 0-10.133 4.667-15.2 0-10.133-4.667-15.2 0-10.133 4.667-15.2 0-10.133-4.667-15.2 0-10.133 4.667-15.2 0-10.133-4.667-15.2 0-10.133 4.667-15.2 0-10.133-4.667-15.2 0-10.133 4.667-15.2 0-10.133-4.667-15.2 0-10.133 4.667-15.2 0-10.133-4.667-15.2 0-10.133 4.667-15.2 0-10.133-4.667-15.2 0-10.133 4.667-15.2 0-10.133-4.667-15.2 0-10.133 4.667-15.2 0-10.133-4.667-15.2 0-10.133 4.667-15.2 0" stroke="#E1E3E1" stroke-linecap="square" data-v-6022fb55=""></path>
</g>
</pattern> <rect width="100%" height="100%" fill="url(#a)" data-v-6022fb55=""></rect>
</svg>
</div>
<a target="_blank" href="https://icp.gov.moe/?keyword=20244044" style="color: black; display: flex; align-items: center; justify-content: center; margin-top: 10px; margin-bottom: 10px; text-decoration: none;"> <img src="/images/moe.png" width="15" height="15" style="margin-right: 5px;"> 萌ICP备20244044号 </a>
<div class="github-badge-big" style="width: 10dp;"><span class="badge-subject"> <i class="fa fa-clock-o"></i>本站已运行<span id="blog_running_years" class="odometer odometer-auto-theme"></span>年<span id="blog_running_days" class="odometer odometer-auto-theme"></span>天<span id="blog_running_hours" class="odometer odometer-auto-theme"></span>时<span id="blog_running_mins" class="odometer odometer-auto-theme"></span>分<span id="blog_running_secs" class="odometer odometer-auto-theme"></span>秒</span>
</div>
<script no-pjax="">
var blog_running_years = document.getElementById("blog_running_years");
var blog_running_days = document.getElementById("blog_running_days");
var blog_running_hours = document.getElementById("blog_running_hours");
var blog_running_mins = document.getElementById("blog_running_mins");
var blog_running_secs = document.getElementById("blog_running_secs");
function refresh_blog_running_time()
{
    var startTimestamp = new Date(2024, 2, 24, 0, 0, 0).getTime();
    // 假设站点开始运行的时间为2024年3月24日
    var currentTime = new Date().getTime();
    var totalMilliseconds = currentTime - startTimestamp;
    var totalSeconds = Math.floor(totalMilliseconds / 1000);
    var totalMinutes = Math.floor(totalSeconds / 60);
    var totalHours = Math.floor(totalMinutes / 60);
    var totalDays = Math.floor(totalHours / 24);
    var totalYears = Math.floor(totalDays / 365);
    // 简化的年数计算（非闰年）
    var remainingDays = totalDays % 365;
    var hours = Math.floor((totalMilliseconds % (24 * 60 * 60 * 1000)) / (60 * 60 * 1000));
    var minutes = Math.floor((totalMilliseconds % (60 * 60 * 1000)) / (60 * 1000));
    var seconds = Math.floor((totalMilliseconds % (60 * 1000)) / 1000);
    blog_running_years.innerHTML = totalYears;
    blog_running_days.innerHTML = remainingDays;
    blog_running_hours.innerHTML = hours;
    blog_running_mins.innerHTML = minutes;
    blog_running_secs.innerHTML = seconds;
}
refresh_blog_running_time();
if (typeof bottomTimeIntervalHasSet == "undefined")
{
    var bottomTimeIntervalHasSet = true;
    setInterval(refresh_blog_running_time, 500);
}
</script>
<script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?9f7463b73611457bff2be833913ae54f";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
</footer>