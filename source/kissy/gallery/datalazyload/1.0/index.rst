.. module:: Datalazyload


Datalazyload
===============================================

|  数据延迟加载组件
|  很多时候, 用户在第一屏就发生了跳转, 大量”未曾露面”的图片下载对用户来说是无意义的.
DataLazyload 可以 “揣测” 用户的行为, 当用户想看某个区域时, 才开始下载这个区域的图片.
除了延迟图片下载, DataLazyload 还可以延迟某个区域的所有 html 的渲染, 这对 Tabs 等 UI 组件很有裨益, 能提高整个页面的性能.

.. hint::

    组件来源于 `这里 <http://docs.kissyui.com/docs/html/api/component/datalazyload/>`_


.. important::
    组件引入方式

    .. code-block:: php

        <cajamodules include="kissy/1.3.0/core,kissy/gallery/datalazyload/1.0/index" />


构造函数
-----------------------------------------------

  * :class:`Datalazyload`

参数配置
-----------------------------------------------

  * :data:`diff`
  * :data:`placeholder`
  * :data:`execScript`
  * :data:`autoDestroy`
  

实例方法
-----------------------------------------------
 
  * :meth:`addCallback()`
  * :meth:`removeCallback()`
  * :meth:`addElements()`
  * :meth:`removeElements()`
  * :meth:`refresh()`
  * :meth:`pause()`
  * :meth:`resume()`
  * :meth:`destroy()`

静态方法
-----------------------------------------------
  
  * :meth:`loadCustomLazyData()`
  

构造函数详情
-----------------------------------------------

.. class:: Datalazyload

    | **Datalazyload** (config)
    
    :param Object config: 配置项, 详细见下方 **参数配置详情** .


参数配置详情
-----------------------------------------------

.. data:: autoDestroy

    {Boolean} - 默认为 true , 当初始化时检测到的容器内懒加载元素都加载完毕后是否自动调用 destroy 方法.

.. data:: container

    {String|HTMLElement} -  图片所在容器，当懒加载元素在容器中和视窗中同时出现时进行渲染.

.. data:: diff

    {Number|Object} - 
    Number 类型时当前视窗往下, diff px 外的 img/textarea 延迟加载, 适当设置此值, 可以让用户在拖动时感觉数据已经加载好, 默认为当前视窗（容器视窗）高度(两屏以外的才延迟加载).
    Object 类型可以指定 left/top/right/bottom 数值，表示预加载当前视窗（容器视窗）以外上下左右的距离的元素.

.. data:: placeholder

    {String} -   默认为 http://a.tbcdn.cn/kissy/1.0.0/build/imglazyload/spaceball.gif, 如果懒加载图像没有设置 src 则作为图像的占位图.

.. data:: execScript

    {Boolean} - 默认为 false , 禁止执行 textarea 里面的脚本.

.. data:: autoDestroy

    {Boolean} - 当检测到无懒加载元素时是否销毁该组件，默认 true.
	



方法详情
-----------------------------------------------

.. method:: addCallback

    | **addCallback** (el,fn)
    | 添加回调函数. 当 el 即将出现在视图中时, 触发 fn

.. method:: removeCallback

    | **removeCallback** (el,fn)
    | 删除回调函数. 参数同 addCallback

.. method:: addElements

    | **addElements** (els)
    | 添加元素到懒加载列表.
    
.. method:: removeElements 

    | **removeElements ** (els)
    | 从懒加载列表中删除元素.

.. method:: refresh

    | **refresh** ()
    | 强制立刻检测懒加载元素

.. method:: pause

    | **refresh** ()
    | 暂停监控懒加载元素

.. method:: resume

    | **resume** ()
    | 继续监控懒加载元素

.. method:: destroy 

    | **destroy ** ()
    | 停止监控并销毁组件



静态方法详情
-----------------------------------------------
 .. method:: loadCustomLazyData

    | **static loadCustomLazyData ** (containers, type)
    | 加载自定义延迟数据

    Parameters: 

    containers (HTMLElement[]) – 包含自定义延迟加载项的容器元素type (String) – 延迟加载方式, 可取:
    textarea 或 area-data , 即表示延迟加载使用的是 textarea 方式;
    此时 textarea 需要有样式类 ks-datalazyload-custom，禁用脚本，iframe.

    img 或 img-src, 即表示延迟加载使用的是 img 方式.
    此时 img 的真实地址须放在属性 data-ks-lazyload-custom 中

demo 代码样例
-----------------------------------------------


    **三个简单的demo例子**

    .. raw:: html

        <iframe width="100%" height="560"  class="iframe-demo" src="http://tpap-docs.taegrid.taobao.com/kissy/gallery/datalazyload/1.0/datalazyload.php"></iframe>

    **对应DEMO html/php的代码**

    .. literalinclude:: /raw/tpap/kissy/gallery/datalazyload/1.0/datalazyload.php
        :language: html

    **对应DEMO javascript的代码**

    .. literalinclude:: /raw/tpap/kissy/gallery/datalazyload/1.0/datalazyload.js
        :language: javascript


    **对应DEMO css的代码**

    .. literalinclude:: /raw/tpap/kissy/gallery/datalazyload/1.0/datalazyload.css
        :language: css
