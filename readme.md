# I.关于主题 #

- bluefly 遵循GPLv2协议发布。你可以在license.txt中查看具体内容。
- WP4.5标准版测试通过。未经过中文版测试。
- 你可以随意使用和修改这个主题,再次发布请遵循GPL。

----------

# II. 资源 #

## a) FontAwesome ##
- 来源: http://fontawesome.io
- 协议: SIL Open Font License, Version 1.1
- 协议源: https://scripts.sil.org/OFL?

## b) Infinite scroll ##
- 来源: https://github.com/infinite-scroll/infinite-scroll
- 协议： MIT
- 协议源: http://opensource.org/licenses/MIT

## c)ajax-comment ##
- 来源: https://fatesinger.com/59
- 协议: 未知

## i)CSSgram ##
- 来源: https://github.com/una/CSSgram
- 协议: MIT

----------

# III. 注意事项和使用说明 #
1. 如果不是以为GPL的要求，本人其实根本不想把这个主题公开。为了省事，所有的注释以及可配置的字符串都设成了中文UTF8编码。所有的歪果仁朋友，对不起了。    
	Sorry for non-Chinese developers, the author had never supposed to support any foreign languages.     
	非中国の開発者のため申し訳ありませんが、著者は、任意の外国語をサポートする予定はありませんでした。
1. 	无限加载效果与lazyload有冲突。我解决了使用unveil-ui.min.js时的冲突，如果有其它实现方法的需要自行解决。
2.  不支持文章内翻页（wp_link_pages（）），因为我觉得这是个没用的功能。
3.  不支持原生的gallery风格（media.h）。
4.	支持自定义标题字体。包括标题和副标题，上传字体文件到\fonts下，然后在主题选项中加入字体名字即可。自定义字体教程见：
	[教程](http://pewae.com/2015/10/yonginkscapezhizuozidingyizitibingtianjiadaowordpresszhong.html)
5.	支持首页和归档页面的无限滚动（可自定义）。搜索页面如需要同样效果，可自行参照修改。无限滚动效果使用Infinite scroll库。想修改loading图片，替换\images\loading.gif，想替换加载文字，替换\script.js中对应的内容。查找的参数利用的是关键字posts-navigation我利用了4.3以后的新函数the_posts_pagination（）与旧函数the_posts_navigation（）的区别，如果要修改请查阅the_posts_navigation（）的相关内容。
6.  我的理念是主题不负责与显示无关的事。所以，gravatar问题、smile问题、自动版本保存问题、google字体问题、中文截断问题、图片延时加载问题统统不提供解决方案，请自行修改添加。
7.  不支持多作者。作者名已隐藏。
8.  归档页面保留类别、标签和日期，其余归档页面自动跳转到404。
9.  请自行添加一个社会化导航menu，设置好之后右上角就可以显示。
10. 自带lazyload功能，如果与安装的插件有冲突请自行调整。


----------

# IV. 版本历史 #

**2016/5/4 0.01**
----------
- 初版