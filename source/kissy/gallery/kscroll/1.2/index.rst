.. module:: KScroll


KScroll
===============================================

|  ``KScroll基于KISSY的滚动条组件。支持滚轮、拖拽、上下箭头加速滚动。样式可定制。``

.. hint::

    组件来源于 `这里 <http://gallery.kissyui.com/kscroll/1.2/guide/index.html>`_


.. important::

    组件引入方式

    .. code-block:: php

        <cajamodules include="kissy/1.3.0/core,kissy/gallery/kscroll/1.2/index" />


构造函数
-----------------------------------------------

  * :class:`Kscroll`

参数配置
-----------------------------------------------

  * :data:`prefix`
  * :data:`hotkey`
  * :data:`bodydrag`
  * :data:`allowArrow`
  

实例方法
-----------------------------------------------

  * :meth:`scrollByPercent`
  * :meth:`scrollByDistance`
  * :meth:`scrollToElement`
  * :meth:`resize`
  

构造函数详情
-----------------------------------------------

.. class:: Kscroll

    | **KISSY.Kscroll** (container, config)
   
    :param container:  (selector|HTMLElement) – 容器 .
    :param config: 配置项, 详细见下方 **参数配置详情** .

参数配置详情
-----------------------------------------------

.. data:: prefix

    {String} -  默认：kscroll-前缀 滚动控制区域增加控制前缀 

.. data:: hotkey

    {Boolean} 默认false ，键盘方向键支持

.. data:: bodydrag

    {Boolean} 默认为 true , 支持内容区域拖动
      

.. data:: allowArrow

    {Boolean} 默认为 true , 当初始化时,滚动条支持点击上下箭头触发滚动


方法详情
-----------------------------------------------

.. method:: scrollByPercent

    | **scrollByPercent** (num)
    | 百分比跳转，0表示底部，1表示顶部，.5表示50%，以此类推

.. method:: scrollByDistance

    | **scrollByDistance** (num)
    | 按距离跳转，50表示向上50像素，-50表示向下50像素，以此类推

   
.. method:: scrollToElement()

    | **scrollToElement** (selector)
    | 跳转到指定dom节点

.. method:: resize()

    | **resize** ()
    | 重置滚动区域大小


.. method:: on

    | **on** (type, fnc)
    | 事件注册

    :param String type: 事件类型, 参考事件详情
    :param Function fnc: 回调函数




demo 代码样例
-----------------------------------------------


    **kscroll DEMO**

    .. raw:: html

        <iframe width="100%" height="800"  class="iframe-demo" src="http://tpap-docs.taegrid.taobao.com/kissy/gallery/kscroll/1.2/kscroll.php"></iframe>

    **对应DEMO html/php的代码**

    .. literalinclude:: /raw/tpap/kissy/gallery/kscroll/1.2/kscroll.php
        :language: html

    **对应DEMO javascript的代码**

    .. literalinclude:: /raw/tpap/kissy/gallery/kscroll/1.2/kscroll.js
        :language: javascript

    **对应DEMO css的代码**

    .. literalinclude:: /raw/tpap/kissy/gallery/kscroll/1.2/kscroll.css
        :language: css
b


