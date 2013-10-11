<cajamodules include="kissy/1.3.0/core,kissy/1.3.0/datalazyload" />
<script src="/kissy/1.3.0/component/datalazyload/datalazyload.js"></script>
<link href="/kissy/1.3.0/component/datalazyload/datalazyload.css" rel="stylesheet"/>

<h1>Datalazyload DEMO</h1>

<div class="demo">
<div id="container" >
	<button id="pause">pause</button>
	<button id="resume">resume</button>	

	<p>lazy load module when scoll to it or jump to it</p>

	<ul>
		<li>
			<a href="#module1">Jump to module1</a>
		</li>
		<li>
			<a href="#module2">Jump to module2</a>
		</li>
		<li>
			<a href="#module3">Jump to module3</a>
		</li>
		<li>
			<a href="#module4">Jump to module4</a>
		</li>
		<li>
			<a href="#module5">Jump to module5</a>
		</li>
		<li>
			<a href="#module6">Jump to module6</a>
		</li>
	</ul>

	<div class='mod'>
		<a name="module1"></a>
		<textarea class="ks-datalazyload" >module1</textarea>
	</div>

	<div class='mod'>
		<a name="module2"></a>
		<textarea class="ks-datalazyload" >module2</textarea>
	</div>

	<div class='mod'>
		<a name="module3"></a>
		<textarea class="ks-datalazyload" >module3</textarea>
	</div>

	<div class='mod'>
		<a name="module4"></a>
		<textarea class="ks-datalazyload" >module4</textarea>
	</div>

	<div class='mod'>
		<a name="module5"></a>
		<textarea class="ks-datalazyload" >module5</textarea>
	</div>

	<div class='mod'>
		<a name="module6"></a>
		<textarea class="ks-datalazyload" >module6</textarea>
	</div>

	<div id="gap">懒加载完，会隐藏！</div>
</div>
<div class="test">
	<p>
		<img data-ks-lazyload="http://img01.taobaocdn.com/tps/i1/T1zqNUXAdcXXaCwpjX.png" />
	</p>
	<p>
		<img data-ks-lazyload="http://img02.taobaocdn.com/tps/i2/T1zqNUXAdcXXaCwpjX.png" />
	</p>
	<p>
		<img data-ks-lazyload="http://img01.taobaocdn.com/tps/i1/T1H50UXAlcXXaCwpjX.png" />
	</p>
	<p>
		<img data-ks-lazyload="http://img02.taobaocdn.com/tps/i2/T15OhHXwhbXXcE7fze-700-320.png" />
	</p>
	<p>
		<img data-ks-lazyload="http://img02.taobaocdn.com/tps/i2/T15OhHXwhbXXcE7fze-700-320.png" />
	</p>
	<p>
		<img data-ks-lazyload="http://img01.taobaocdn.com/tps/i1/T1qPRVXuJcXXaCwpjX.png" />
	</p>
</div>
<div class="test1">
	<p>
		<img data-ks-lazyload="http://img01.taobaocdn.com/tps/i1/T1zqNUXAdcXXaCwpjX.png" />
	</p>
	<p>
		<img data-ks-lazyload="http://img02.taobaocdn.com/tps/i2/T1zqNUXAdcXXaCwpjX.png" />
	</p>
	<p>
		<img data-ks-lazyload="http://img01.taobaocdn.com/tps/i1/T1H50UXAlcXXaCwpjX.png" />
	</p>
	<p>
		<img data-ks-lazyload="http://img02.taobaocdn.com/tps/i2/T15OhHXwhbXXcE7fze-700-320.png" />
	</p>
	<p>
		<img data-ks-lazyload="http://img02.taobaocdn.com/tps/i2/T15OhHXwhbXXcE7fze-700-320.png" />
	</p>
	<p>
		<img data-ks-lazyload="http://img01.taobaocdn.com/tps/i1/T1qPRVXuJcXXaCwpjX.png" />
	</p>
</div>
<div class="test3">
	<textarea class="ks-datalazyload">
	<p>
		<img data-ks-lazyload="http://img01.taobaocdn.com/tps/i1/T1zqNUXAdcXXaCwpjX.png" />
	</p>
	<p>
		<img data-ks-lazyload="http://img02.taobaocdn.com/tps/i2/T1zqNUXAdcXXaCwpjX.png" />
	</p>
	<p>
		<img data-ks-lazyload="http://img01.taobaocdn.com/tps/i1/T1H50UXAlcXXaCwpjX.png" />
	</p>
		安全考虑，禁用了脚本
		<script>KISSY.log("module1 is loaded");</script>
	</textarea>
</div>

</div>
