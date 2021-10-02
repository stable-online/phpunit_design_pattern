# phpunit 设计模式

## 5种创建型 (created type)

## 7种结构型 (struct type)

## 11种行为型 (behavior type)
* <font color=red>迭代器模式 (iterator)  </font>
* <font color=red>状态模式 (status)</font>  
  <font size = 3>一句话需求: 不同时间段的状态场景:  早上去上班, 白天然后工作 , 下午下班, 然后晚上睡觉.</font>   
  <font size = 3>  
  测试列表:
    - [x] 早上时间段 返回上班
    - [x] 工作时间时间段 返回工作
    - [x] 下午时间段 返回下班
    - [x] 晚上时间段 返回睡觉
      </font>  
      
* <font color=red>访问者模式 (visitor)   </font>  
<font size = 3>一句话需求: 不同的文件, 工厂需要提取不同的格式的内容,而且提取的内容可能要加不同的特殊处理.</font>   
  <font size = 3>  
    测试列表:
    - [x] 有 pdf 文件 ,pdf的内容是123.
    - [x] 有 word 文件其内容为456 .
    - [x] 测试访问者 vistA 处理后  pdf的值为vistApdf123
    - [x] 测试访问者 vistA 处理后 word的值为vistAword456
    - [x] 测试访问者 vistA 处理Excel, 但不存在对应的处理逻辑. 返回访问异常.
    - [x] 访问者上下文类 其中有文件类属性  以及 添加文件类行为 添加成功 返回为true
    - [x] 访问者上下文类, 其中有文件类属性  以及 执行文件类行为 添加访问者依次验证访问每个文件类. 当某个类不存在访问者执行程序时.剖异常.
    </font>  

* <font color=red>模板模式 (template)   </font>  
  <font size = 3>一句话需求: 坐各种车</font>   
  <font size = 3>思考: 先写测试,在尽快将功能实现. 然后在重构实现, 重构的过程中如果发现测试变红了, 应该尽快让其变绿</font>
  <font size = 3>

  验收标准:
  - [x] 丰田车 返回 丰田车,红色车轱辘,蓝色方向盘,黑色车身
  - [x] 奔驰车 返回 奔驰车,白色车轱辘,青色方向盘,黄色色车身
    </font>  
    
* <font color=red>观察者模式 (observer)   </font>  
  <font size = 3>一句话需求: 监听后台上架一个商品时, 通知在多个店铺上架.</font>   
  <font size = 3>思考: 先写测试,在尽快将功能实现. 然后在重构实现, 重构的过程中如果发现测试变红了, 应该尽快让其变绿</font>
  <font size = 3>
  
  验收标准:
  - [ ] 向观察者类中添加一个被观察者对象返回为true
  - [ ] 向观察者添加一个被观察者, 当观察者接到信息123, 被观察者也会收到123的信息. 
    </font>  
    
