# Nexmoes
OneIndex 自带主题 nexmoe 的美化修改 基于：
1. [Zisbusy的OneIndex-theme主题](https://github.com/Zisbusy/OneIndex-theme)
2. [dl233的OneIndex-theme-nexmoes](https://github.com/dl233/OneIndex-theme-nexmoes)

## Update(2020.09.07)

改`layout.php`内部文件的style.css、favicon站点图片、头像为jsdelivr CND。

## 如何使用
1. fork本项目到自己Github
2. 根据自己需要，改fork版本的`theme/style.css`、`theme/favicon.png`和`picture/logo.png`文件。
3. 对fork版本打tag并改`layout.php`里的https://cdn.jsdelivr.net/gh/Mintimate/OneIndex-theme-nexmoes@latest替换为自己GitHub
4. 下载自己项目master到`view`
5. 进去oneindex管理页面，在网站主题选择 `nexmoes`，保存即可。

## 演示地址
1. [http://demo.bendaye.cf/](http://demo.bendaye.cf/)
2. [http://pan.bendaye.cf/](http://pan.bendaye.cf/)
3. [https://mintimate.tk](https://mintimate.tk/)

## 调用
 [二次元图库](http://api.mtyqx.cn/) 。
 1. APlayer
 2. metingJS

## 你需要知道的东西
1. 视频播放过慢，建议使用多线程播放器PotPlayer或者QQ影音，右键视频页面下载按钮后复制下载链接到播放器里，选择打开URL的方式播放。
2. 同理下载大型文件缓慢可以使用多线程下载工具IDM或者FDM。
3. 因主题精简了对于图片和视频的展示，更专注于视频和图片内容的展示，引用连接部分已删除，引用链接直接复制下载按钮即可。
4. QQ浏览器下请禁用或删除 【图片查看编辑器 via QQ浏览器】 插件，已知该插件会破坏部分样式，目前已知干扰是图片浏览页面不能滑动等异常。
5. 开启伪静态环境时，请注意在OneIndex的后台管理-基本设置-需要隐藏的目录中添加 `view` 关键词，以防止在网盘根目录下出现view目录时与本地资源相冲突的情况。

## OneIndex
1. [下载地址](http://demo.bendaye.cf/?/oneindex-master.zip)
2. [无法正常获取客户端ID及密钥的解决方法](https://bilibili2233.cf/index.php/archives/173)