# chinafe网站的模板

>企业风格的模板

![](http://img.chinafe.net/typecho/screenshot.jpg)
-参考Material模板制作，搜罗了很多代码


## Contents 目录

- [General 概括](#general-概括)
- [Feature 特性](#feature-特性)
- [Demo 演示](#demo-演示)
- [Setup 设置](#setup-设置)
- [Preview 预览](#preview-预览)
- [Contributing 贡献](#contributing-贡献)
- [License 许可证](#license-许可证)


## General 概括

- Author 作者：dongzuren
- Version 版本：1.0.0
- Compatibility 兼容：PHP 5.4+, MySQL, Typecho 1.0

## Feature 特性

- 基本上用到了很多的判断，需要修改的地方后台都可以修改
- 极其丰富的自定义设置
- 自带中英文界面语言
- 自带多种功能与特效
- pjax 无刷新跳转
- PanGu.js 中英文之间自动添加空格（可选）

## Demo 演示

可以查看网站: [chinafe模板演示网站](http://bwww.chinafe.net)


## Setup 设置

- 下载最新文件 然后覆盖原文件即可更新主题, 部分新增加的功能需要到后台开启才会生效 (建议更新后先切换为其他主题, 再切换回该主题)。否则有可能会导致莫名其妙的 bug...
- 在 "设置外观" 中打造一个属于你自己的网站
- 关于文章缩略图
    - 文章缩略图为文章内第一张图片。
    - 缩略图支持 Markdown 格式, HTML 格式以及附件形式, Markdown 格式为 `![图片描述](图片链接)` 。
    - 如果想要自定义某篇文章的缩略图, 但是不想让该图片在文章中出现, 则可以使用该格式 `<img src="图片链接" width="0px" /> ` 。
- 首页文章概览默认最大输出80个字符, 可手动添加截断符 `<!-- more -->` 控制输出。
- 使用友情链接, 需安装此友情链接插件  [typecho-links-material](https://github.com/viosey/typecho-links-material)。
- 首页调用的数据来自友情链接插件，可以设置不同的分类即可。
- [浏览次数 & 点赞插件](http://qiniu.viosey.com/zipTeStat.zip) 安装该插件可实现文章内点赞, 首页文章信息与文章页分享按钮下拉选项中会显示浏览次数统计 (使用 cookie 策略)。


## Preview 预览


![](http://img.chinafe.net/typecho/www.chinafe.net_.png)



## Contributing 贡献

All kinds of contributions (enhancements, new features, documentation & code improvements, issues & bugs reporting) are welcome.

欢迎各种形式的贡献，包括但不限于优化，添加功能，文档 & 代码的改进，问题和 bugs 的报告。期待您的 `Pull Request`。


## License 许可证

Open sourced under the GPL v3.0 license.

根据 GPL V3.0 许可证开源。
