
背景：

*    14年的时候，学校ACM还缺个OnlineJudege，于是找了个开源的OnlineJudge项目HUSTOJ，改改前台页面，然后还报了个科研立项，把代码*    传上来托管下，免得验收的时候硬盘被格了。

关于 HUSTOJ：

*    HUSTOJ 是采用GPL的自由软件。
*    基于本项目源码从事科研、论文、系统开发，必须在文中或系统中表明来自于本项目的内容和创意，否则请勿使用本项目源码。
*    使用本项目源码和freeproblemset题库请尊重程序员职业和劳动
*    新用户必看 README 和 FAQ


关于安装使用：

*    快速安装指南：
*    1、安装Ubuntu
*    2、执行如下命令
*        sudo apt-get update
*        sudo apt-get install subversion
*        sudo svn co https://github.com/zhblue/hustoj/trunk/trunk/install hustoj
*        cd hustoj
*        sudo bash install-interactive.sh
*    3、安装后访问服务器80端口上的web服务JudgeOnline目录
*        例如 w3m http://127.0.0.1/JudgeOnline
*    4、Any Question check wiki first.有问题请先查阅Wiki或使用搜索。



关于HUSTOJ的版本跟新：

*    自定义数据运行的在线IDE模式。
*    FreeBasic? (32bits only)，测试中
*    Objective-C，测试中
*    Ajax结果查看，免刷新看提交结果
*    多进程优化，判题提速100%
*    邮件密码找回，需要安装sendmail或其他MTA
*    类Android越狱漏洞修补
*    Moodle离线作业自动批阅触发器(群共享)
*    Moodle账号登陆、Disucz账号登陆
*    腾讯、新浪微博、人人账号登陆
*    编译错误、运行错误辅助分析
*    测试数据在线管理：web方式维护测试数据
*    附加代码模式：可以给指定语言的提交指定附加代码，用于要求学生编写指定函数、类供附加代码调用。
*    OiMode 支持OI模式，显示测试数据通过率
*    memcached/file cache all pages
*    http判题端，移植到新浪云http://hustoj.sinaapp.com/
*    分时段排名 日周月年
*    status防刷缓存
*    简单内部邮件系统
*    代码共享机制OJ_AUTO_SHARE
*    用户下载所有AC代码
*    提交界面代码亮显
*    SQL注入漏洞修补
*    比赛队帐号批量生成工具
*    首页新闻编辑管理
*    系统级语言掩码，可系统级屏蔽答题语言。
*    Ruby、Bash、Python、Perl、C#、PHP 答题功能测试中 http://hustoj.sinaapp.com/
*    多语言 MultiLanguage? 한국어 中文 فارسی English ไทย 



关于我的更新：

* 去掉了web页面中的bootstrap部分
* 自定义了自己的模板
* 。。。也许还有一些，但是不记得了，以后想起再跟新吧



关于HUSTOJ特性：


*    开源 全部采用开源技术，不仅仅是提供源代码，搭建HUSTOJ?不需要购买任何商业软件。
*    采用成熟的Linux32位系统平台，通过目录锁定和用户锁定以及系统调用限制避免恶意答案损害系统。
*    支持负载均衡，可以将web服务器、数据库服务器、判题服务器分机架设，支持多台判题服务器同时工作。
*    支持单台服务器运行多个实例，即单机运行多套OJ互不影响，可降平均低运行成本。
*    管理员可以完全通过web平台添加题目，包括测试数据也可以同时添加。
*    加题界面采用fckeditor界面，支持从Word / 网页复制粘贴，支持各种格式，可以上传图片。
*    提供源码查看支持C/C++/Java代码亮显。
*    比赛可以快速复制，题目自动添加。
*    比赛可限定语言种类，用于课程练习﹑考试。
*    题目、数据、标程，均可批量导出、导入，采用公开的基于XML的FPS格式，方便导入其他OJ系统，方便学校联赛交换题目。单场比赛用题*    可以快捷导出。
*    题目﹑用户提交历史统计饼图显示。
*    支持内置和外挂论坛系统。
*    FPS项目提供400余道题目，导入就可以用于教学、比赛、测试。
*    极低的系统需求，曾在C-600/128M/15G的老爷机上无故障运行一年，期间完成多次校赛。
*    可以由POJ免费版转换，能够保留全部题目、帐号、历史数据。浙江工商大学POJ服务器崩溃后成功升级到HUSTOJ
*    界面本地化，中英韩可用。
*    原生支持64位系统 amd64/x86-64bit (beta)
*    支持反作弊功能，提示管理者相似答案。
*    提供LiveCD系统，无须安装即可试用。 



写在最后：

*    感谢HUSTOJ，感谢GPL。

