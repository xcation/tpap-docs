
<cajamodules include="kissy/1.3.0/core,kissy/gallery/datalazyload/1.0/index" />
<script src="/kissy/1.3.0/component/datalazyload/datalazyload.js"></script>
<link href="/kissy/1.3.0/component/datalazyload/datalazyload.css" rel="stylesheet"/>

<h1>Datalazyload DEMOS</h1>

    <div class="demos">
        <h2>DEMO1</h2>
        <div class="demo1" >
            <button class="pause">pause</button>
            <button class="resume">resume</button>

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

            <div class="gap">demo1懒加载完，会隐藏！</div>
        </div>
        <h2>DEMO2</h2>
        <div class="demo2">
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
        <h2>DEMO3</h2>
        <div class="demo3">
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
        <h2>DEMO4</h2>
        <div class="demo4">
            <textarea class="ks-datalazyload">
                <p>
                    <img src="http://img08.taobaocdn.com/bao/uploaded/i8/T1UZqgFnlfXXamRoc__110658.jpg_250x250.jpg" />
                </p>
                <p>
                    <img src="http://img08.taobaocdn.com/bao/uploaded/i8/T1wVGYXiptXXbLmaEW_022451.jpg_250x250.jpg" />
                </p>
                <p>
                    <img src="http://img01.taobaocdn.com/imgextra/i1/14620029131268031/T1GMZBXeRdXXXXXXXX_!!0-item_pic.jpg_250x250.jpg" />
                </p>
                安全考虑，禁用了脚本
                <script>KISSY.log("javascript运行了！");</script>
            </textarea>
        </div>

    </div>

</div>
