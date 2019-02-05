<script type="text/javascript" src="<?php echo js_url('materialize.min');?>"></script>
<script type="text/javascript" src="<?php echo js_url('materialize');?>"></script>

<script type="text/javascript">
/* JS */
    var TxtRotate = function(el, toRotate, period) {
      this.toRotate = toRotate;
      this.el = el;
      this.loopNum = 0;
      this.period = parseInt(period, 10) || 2000;
      this.txt = '';
      this.tick();
      this.isDeleting = false;
    };

    TxtRotate.prototype.tick = function() {
      var i = this.loopNum % this.toRotate.length;
      var fullTxt = this.toRotate[i];

      if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
      } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
      }

      this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

      var that = this;
      var delta = 150 - Math.random() * 100;

      if (this.isDeleting) { delta /= 2; }

      if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
      } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
      }

      setTimeout(function() {
        that.tick();
      }, delta);
    };

    window.onload = function() {
      var elements = document.getElementsByClassName('txt-rotate');
      for (var i=0; i<elements.length; i++) {
        var toRotate = elements[i].getAttribute('data-rotate');
        var period = elements[i].getAttribute('data-period');
        if (toRotate) {
          new TxtRotate(elements[i], JSON.parse(toRotate), period);
        }
      }
      // INJECT CSS
      var css = document.createElement("style");
      css.type = "text/css";
      css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
      document.body.appendChild(css);
    };
    
  // Obligatoire
    	/* Nav */
    	  $(document).ready(function(){
        	$('.sidenav').sidenav();
      	});

      	$(document).ready(function(){
        	$('.tooltipped').tooltip();
      	});

      	/* Modal */
      	$(document).ready(function(){
        	$('.modal').modal();
      	});

        var obj = new Object(),
            YousK2 = "TEST";

      	/* Form Select */
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('select');
            var instances = M.FormSelect.init(elems, {dropdownOptions : obj });
        });


        /* Character count */
        $(document).ready(function() {
          $('.countChar').characterCounter();
        });

        /* Colider */
        $(document).ready(function(){
          $('.collapsible').collapsible();

        });

        /* Dropdown */
        $(document).ready(function(){
          $(".dropdown-trigger").dropdown();
        });

        document.addEventListener('DOMContentLoaded', function() {
          var elems = document.querySelectorAll('.dropdown-trigger-nav');
          var instances = M.Dropdown.init(elems, {  hover           : true,
                                                    container       : 'test',
                                                    constrainWidth  : false,
                                                    closeOnClick    : false,
                                                    autoTrigger     : true,
                                                    coverTrigger    : false
                                                  });
        });

        /* Media */
        $(document).ready(function(){
          $('.materialboxed').materialbox();
        });




        /* Tabs */

        $(document).ready(function(){
          $('.tabs').tabs();
        });


</script>
