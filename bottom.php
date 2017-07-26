<!-- Подгрузка скриптов -->

<!--[if lt IE 9]>
<script src="libs/html5shiv/es5-shim.min.js"></script>
<script src="libs/html5shiv/html5shiv.min.js"></script>
<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
<script src="libs/respond/respond.min.js"></script>
<![endif]-->

<!-- Load CSS -->
<script>
	function loadCSS(hf) {
		var ms=document.createElement("link");ms.rel="stylesheet";
		ms.href=hf;document.getElementsByTagName("head")[0].appendChild(ms);
	}
	loadCSS("libs/animate/animate.css"); //Загрузка библиотеки CSS: Animate CSS
	loadCSS("css/style.css");               //Стили страници (perfectPixel при макетном разрищении)
	loadCSS("css/responsive.css");          //Стили адаптации
</script>

<!-- Load CSS compiled without Bootstrap & Header styles (послерелизная загрузка) -->
<script>var ms=document.createElement("link");ms.rel="stylesheet";
	// ms.href="compiled.min.css";document.getElementsByTagName("head")[0].appendChild(ms);
</script>

<!-- Load Scripts -->
<script>var scr = {"scripts":[
	{"src" : "libs/jquery/jquery-1.11.2.min.js", "async" : false},
	{"src" : "libs/animate/animate-css.js", "async" : false},
	// {"src" : "libs/jquery.maskedinput.min.js", "async" : false}, // Без 9ки
	// {"src" : "libs/jquery.maskedinputrus.min.js", "async" : false}, // Для рус сайтов с 9кой
	{"src" : "js/common.js", "async" : false}
	]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
</script>