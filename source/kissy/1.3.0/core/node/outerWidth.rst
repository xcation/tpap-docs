﻿.. currentmodule:: node

outerWidth
=================================



组件
-----------------------------------------------

  :mod:`node`


方法
-----------------------------------------------

.. function:: outerWidth

    | Number **outerWidth** ( )
    | 获取当前NodeList的第一个元素的宽度值, 注意: **该值除了包含元素本身宽度和 padding 外, 还包含 border或margin** .
    
    :returns: 当前NodeList的第一个元素的宽度值. 不包含 margin, 仅包含 border
    :rtype: Number

    .. code-block:: html

        <div style="width: 100px;">
            <div id="test" style="width: 80%; height: 20px; padding: 10px;border: 2px solid gray;margin: 6px;"></div>
        </div>
        <script>
            var S = KISSY,
            elem = S.all('#test');

            elem.outerWidth(); // 返回 104
            elem.outerHeight(); // 返回 44
        </script>