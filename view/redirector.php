
    function timer() {
      suggest++;
      console.log(suggest);
      var el = document.getElementById('seconds'),
        total = el.innerHTML,
        timeinterval = setInterval(function () {
          total = --total;
          el.textContent = total;
          if (total <= 0) {
            clearInterval(timeinterval);
            create();
          }
        }, 1000);
    }
    su = document.getElementById('clicks');
    su.textContent = suggest;