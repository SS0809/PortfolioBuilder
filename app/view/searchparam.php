  <div class="avoid-clicks">
    <h2>CLICK AND CLOSE<small>(window)</small></h2>
    <h3>upto 8 cycles then it will automatically redirect you</h3>SECONDS<time><strong id="seconds">0</strong></time>
  </div>
  <script>
  var p = 0;
    const urlParams = new URLSearchParams(location.search);
    let suggest;
    for (const [key, value] of urlParams.entries()) {
      console.log(`${key}, ${value}`);

      if (key == 'c0123l123i123c546k123c8l123i45812c3458k123') {
        suggest = value;
        if (value >= 8) {
          suggest = 0;
                    //alert("click ok to submit");
          document.getElementById("myForm").submit();

        }
      } else {
        p = value;
      }

    }
    var clic = 0,cli=0;
        const el = document.getElementById('container-<?php echo $temp_link; ?>');
    el.addEventListener('click', function handleClick(event) {
      console.log('element clicked 🎉🎉🎉', event);

         timer();
    });

