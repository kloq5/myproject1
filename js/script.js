var countDownDate = new Date("Dec 17, 2025 9:34:15").getTime();
var x = setInterval(function() {
  var coo = document.querySelector("#countdown");
  var now = new Date().getTime();
  var distance = countDownDate - now;
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  coo.innerHTML = days + " يوم " + hours + " ساعة " +
    minutes + " دقيقة " + seconds + " ثانية";

  if (distance < 0) {
    clearInterval(x);
    coo.innerHTML = "انتهى الوقت";
    const ctx = document.getElementById('circularLoader').getContext('2d');
    let al = 0;
    const start = 4.72;
    const cw = ctx.canvas.width;
    const ch = ctx.canvas.height;
    let diff;
    let sim;
    function progressSim() {
      diff = ((al / 100) * Math.PI * 2 * 10).toFixed(2);
      ctx.clearRect(0, 0, cw, ch);
      ctx.lineWidth = 17;
      ctx.fillStyle = '#b960dd';
      ctx.strokeStyle = "#b960dd";
      ctx.textAlign = "center";
      ctx.font = "28px monospace";
      ctx.fillText(al + '%', cw * .52, ch * .5 + 5, cw + 12);
      ctx.beginPath();
      ctx.arc(100, 100, 75, start, diff / 10 + start, false);
      ctx.stroke();
      if (al >= 100) {
        clearTimeout(sim);
        confetti();
        myModal.show();
        loader.style.display = 'none'; 
      }
      al++;
    }
    const win = document.querySelector("#winner");
    const loader = document.querySelector(".loader-con");
    const myModal = new bootstrap.Modal(document.getElementById('modal'), {
      keyboard: false
    });

    win.addEventListener('click', function() {
      loader.style.display = 'block'; 
      sim = setInterval(progressSim, 20);
      confitte
    });
  }
}, 1000);
