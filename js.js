$(document).ready(function() {
  
    // نمایش لودینگ به مدت 3 ثانیه
    setTimeout(function() {
        $("#loader").fadeOut("slow", function() { // مخفی کردن لودینگ با افکت fadeOut
            $("#main-content").fadeIn("slow"); // نمایش محتوای اصلی با افکت fadeIn
        });
    }, 3000); // 3000 میلی‌ثانیه = 3 ثانیه
      /////////////timer/////////////////
    const targetDate = new Date('2025-03-05T21:00:00');

    // تابعی برای محاسبه زمان باقی‌مانده تا تاریخ موردنظر
    function countdown() {
        const now = new Date();
        const difference = targetDate - now;

        if (difference <= 0) {
            clearInterval(timer);
            // window.location.href = "play.php";
        } else {
            const days = Math.floor(difference / (1000 * 60 * 60 * 24));
            const hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((difference % (1000 * 60)) / 1000);

            $('#days').fadeOut(200, function() {
                $(this).text(days).fadeIn(200);
            });
            $('#hours').fadeOut(200, function() {
                $(this).text(hours).fadeIn(200);
            });
            $('#minutes').fadeOut(200, function() {
                $(this).text(minutes).fadeIn(200);
            });
            $('#seconds').fadeOut(200, function() {
                $(this).text(seconds).fadeIn(200);
            });

            // Play tick sound
            $('#tick-sound')[0].play();
        }
    }

    // فراخوانی تابع countdown() هر ثانیه
    var timer = setInterval(countdown, 1000);
     //////////////////timer play/////////////////////
     
     /////////////////////////////

   
});
