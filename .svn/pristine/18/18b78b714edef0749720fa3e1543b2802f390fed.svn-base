<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Help</title>

<style type="text/css">
body {
	background-color: #fff;
	margin: 40px;
	font: 13px/ 20px normal Helvetica, Arial, sans-serif;
	color: #4F5155;
}

a {
	color: #003399;
	background-color: transparent;
	font-weight: normal;
}

h1 {
	color: #444;
	background-color: transparent;
	border-bottom: 1px solid #D0D0D0;
	font-size: 19px;
	font-weight: normal;
	margin: 0 0 14px 0;
	padding: 14px 15px 10px 15px;
}

code {
	font-family: Consolas, Monaco, Courier New, Courier, monospace;
	font-size: 12px;
	background-color: #f9f9f9;
	border: 1px solid #D0D0D0;
	color: #002166;
	display: block;
	margin: 14px 0 14px 0;
	padding: 12px 10px 12px 10px;
}

pre {
	font-family: Consolas, Monaco, Courier New, Courier, monospace;
	font-size: 12px;

}

#body {
	margin: 0 15px 0 15px;
}

p.footer {
	text-align: right;
	font-size: 11px;
	border-top: 1px solid #D0D0D0;
	line-height: 32px;
	padding: 0 10px 0 10px;
	margin: 20px 0 0 0;
}

#container {
	margin: 10px;
	border: 1px solid #D0D0D0;
	-webkit-box-shadow: 0 0 8px #D0D0D0;
}
</style>
</head>
<body>

<div id="container">
<h1>Help</h1>

<div id="body">

<p>model</p>
<code>model是一个类（面向对象代码） 装载方法：$this->load->model('display');
使用方法：$this->display->mainpage(); 如何定义： 必须以如下格式开始：class Display extends
Model 必须包含构造函数和构造语句： function display() { parent::Model(); }
必须包含一个mainpage()函数 概念性总结：用户手册这样描述：“Models是设计用来表示数据库中信息的PHP类。”</code>

<p>library</p>
<code> 存放在application和system目录中。
也是一个类（注意：你自己的类库不会自动地包含在CI超类中，因此你必须用不同的方法来词用，详见第七章）
装载方法：$this->load->library('display'); 使用方法：$this->display->mainpage();
如何中定义： 不需要从父类继承，不一定需要构造函数。 这样足够了： chass Display() { function mainpage()
{ // code here } } 概念性总结：如果你想扩充CI的功能，或者创建特别的功能可以使用library</code>


<p>helper</p>
<code> helper 可以保存在system/helpers或application/helpers目录中
。是一段脚本（过程式代码，不是类） 装载方法：$this->load->helper('display');
使用方法：直接调用，如：mainpage(); 如何定义： 文件必须被保存为，如：display_helper.php
(文件名必须加上_helper)
mainpage()必须作为一个函数包含在这个文件中，整个文件就是一过程式函数的集合。因此你不可以在这个文件的函数中调用CI的其它资源。
概念性总结：helper是用来适度帮助你实现特定目的的低级函数。

</code>


</div>

<pre>
	application
	config       存放配置文件：包含网站的基本配置信息

	controllers  控制器

	errors       包含出错信息页，你不必修改这个目录

	hooks        首次安装时为空，用来存放你创建的钩子。钩子是 用来装载其它文件的控制方法

	libraries    代码库，针对本项目的专用代码

	models       代码库，本项目的模型层文件

	views        存放视图的模板目录

	cache        第一次安装时为空，如果你打开缓存设置（详见第十章），这个目录存放              缓存数据

	codeigniter  组成CI框架的文件

	database     CI框架的数据库类的类库文件

	fonts        没有在用户手册中介绍，存放水印图像使用的字体

	helpers      "系统级"助手类

	language     你可以存放你本国语言的键名列表-详见11章

	libraries    “系统级”类库

	logs         如果你打开系统错误日志，日志文件默认保存在这个目录

	plugins      更多的系统级代码文件

	scaffolding  "系统级"类库，实现简单的“脚手架”功能
</pre>
</div>

</body>
</html>