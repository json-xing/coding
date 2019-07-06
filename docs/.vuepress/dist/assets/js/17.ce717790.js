(window.webpackJsonp=window.webpackJsonp||[]).push([[17],{190:function(a,e,t){a.exports=t.p+"assets/img/icon-s.ebec732a.png"},293:function(a,e,t){"use strict";t.r(e);var s=t(0),r=Object(s.a)({},function(){var a=this,e=a.$createElement,s=a._self._c||e;return s("ContentSlotsDistributor",{attrs:{"slot-key":a.$parent.slotKey}},[s("h1",{attrs:{id:"docker"}},[s("a",{staticClass:"header-anchor",attrs:{href:"#docker","aria-hidden":"true"}},[a._v("#")]),a._v(" Docker")]),a._v(" "),s("blockquote",[s("p",[a._v("后盾人 @ 版权所有 ，请尊重他人劳动成果，转载请注明出处 houdunren.com。")]),a._v(" "),s("p",[a._v("感谢你的支持与理解。")])]),a._v(" "),s("p",[s("img",{attrs:{src:t(190),alt:"icon-s"}})]),a._v(" "),s("p",[a._v("应用应该脱离底层硬件的限制，在任何时间与地点可以获取 ，Docker就是基于此思想 ，可以快速分发与部署。")]),a._v(" "),s("p",[a._v("有了docker可以轻松将网站在不同操作系统，不同云服务器中迁移。只要把容器打包，就可以轻松部署。不需要像过去一样，重复安装 mysql/php/apache....。")]),a._v(" "),s("p",[a._v("与虚拟机比较")]),a._v(" "),s("ul",[s("li",[a._v("使用内核虚拟化技术速度更快")]),a._v(" "),s("li",[a._v("系统资源点用少，一台主机上可以同时运行数千个 Docker 容器。")]),a._v(" "),s("li",[a._v("起动速度秒级，而虚拟机分钟级")]),a._v(" "),s("li",[a._v("硬盘占用更少，虚拟机是完整系统占用往往达到G级")])]),a._v(" "),s("blockquote",[s("p",[a._v("官网文档： "),s("a",{attrs:{href:"https://docs.docker.com/install/overview/",target:"_blank",rel:"noopener noreferrer"}},[a._v("https://docs.docker.com/install/overview/"),s("OutboundLink")],1)])]),a._v(" "),s("h2",{attrs:{id:"基础知识"}},[s("a",{staticClass:"header-anchor",attrs:{href:"#基础知识","aria-hidden":"true"}},[a._v("#")]),a._v(" 基础知识")]),a._v(" "),s("p",[s("strong",[a._v("镜像")])]),a._v(" "),s("p",[a._v("镜像类似于虚拟机中的镜像，镜像是只读的，可以方便的从网上下载镜像，类似面向对象编程中的类。")]),a._v(" "),s("p",[s("strong",[a._v("容器")])]),a._v(" "),s("p",[a._v("容器是从镜像创建的运行对象。可以启动/删除/停止，容器间都是相互独立的，类似面向对象编程中的对象。")]),a._v(" "),s("p",[s("strong",[a._v("仓库")])]),a._v(" "),s("p",[a._v("类型于管理镜像的GITHUB，可以将镜像提交到仓库，供其他用户或其他平台轻松使用。")]),a._v(" "),s("h2",{attrs:{id:"加速器"}},[s("a",{staticClass:"header-anchor",attrs:{href:"#加速器","aria-hidden":"true"}},[a._v("#")]),a._v(" 加速器")]),a._v(" "),s("p",[a._v("提升国内用户访问 Docker Hub 拉取镜像的速度及稳定性。")]),a._v(" "),s("h3",{attrs:{id:"linux"}},[s("a",{staticClass:"header-anchor",attrs:{href:"#linux","aria-hidden":"true"}},[a._v("#")]),a._v(" Linux")]),a._v(" "),s("div",{staticClass:"language- extra-class"},[s("pre",{pre:!0,attrs:{class:"language-text"}},[s("code",[a._v("curl -sSL https://get.daocloud.io/daotools/set_mirror.sh | sh -s http://f1361db2.m.daocloud.io\n")])])]),s("p",[a._v("该脚本可以将 --registry-mirror 加入到你的 Docker 配置文件 /etc/docker/daemon.json 中。适用于 Ubuntu14.04、Debian、CentOS6 、CentOS7、Fedora、Arch Linux、openSUSE Leap 42.1，其他版本可能有细微不同。更多详情请访问文档。")]),a._v(" "),s("h3",{attrs:{id:"macos"}},[s("a",{staticClass:"header-anchor",attrs:{href:"#macos","aria-hidden":"true"}},[a._v("#")]),a._v(" macOS")]),a._v(" "),s("p",[a._v("Docker For Mac")]),a._v(" "),s("p",[a._v("右键点击桌面顶栏的 docker 图标，选择 Preferences ，在 Daemon 标签（Docker 17.03 之前版本为 Advanced 标签）下的 Registry mirrors 列表中加入下面的镜像地址:")]),a._v(" "),s("div",{staticClass:"language- extra-class"},[s("pre",{pre:!0,attrs:{class:"language-text"}},[s("code",[a._v("http://f1361db2.m.daocloud.io\n")])])]),s("p",[a._v("点击 Apply & Restart 按钮使设置生效。")]),a._v(" "),s("p",[a._v("Docker Toolbox 等配置方法请参考"),s("a",{attrs:{href:"http://guide.daocloud.io/dcs/daocloud-9153151.html#docker-toolbox",target:"_blank",rel:"noopener noreferrer"}},[a._v("帮助文档"),s("OutboundLink")],1),a._v("。")]),a._v(" "),s("h3",{attrs:{id:"windows"}},[s("a",{staticClass:"header-anchor",attrs:{href:"#windows","aria-hidden":"true"}},[a._v("#")]),a._v(" Windows")]),a._v(" "),s("p",[a._v("Docker For Windows")]),a._v(" "),s("p",[a._v("在桌面右下角状态栏中右键 docker 图标，修改在 Docker Daemon 标签页中的 json ，把下面的地址:")]),a._v(" "),s("div",{staticClass:"language- extra-class"},[s("pre",{pre:!0,attrs:{class:"language-text"}},[s("code",[a._v("http://f1361db2.m.daocloud.io\n")])])]),s("p",[a._v('加到" '),s("code",[a._v("registry-mirrors")]),a._v('"的数组里。点击 Apply 。')]),a._v(" "),s("h2",{attrs:{id:"ubuntu"}},[s("a",{staticClass:"header-anchor",attrs:{href:"#ubuntu","aria-hidden":"true"}},[a._v("#")]),a._v(" ubuntu")]),a._v(" "),s("h3",{attrs:{id:"环境配置"}},[s("a",{staticClass:"header-anchor",attrs:{href:"#环境配置","aria-hidden":"true"}},[a._v("#")]),a._v(" 环境配置")]),a._v(" "),s("ol",[s("li",[s("p",[a._v("删除旧版本")]),a._v(" "),s("div",{staticClass:"language- extra-class"},[s("pre",{pre:!0,attrs:{class:"language-text"}},[s("code",[a._v("sudo apt-get remove docker docker-engine docker.io containerd runc\n")])])])]),a._v(" "),s("li",[s("p",[a._v("更新"),s("code",[a._v("apt")]),a._v("包索引：")]),a._v(" "),s("div",{staticClass:"language- extra-class"},[s("pre",{pre:!0,attrs:{class:"language-text"}},[s("code",[a._v("sudo apt-get update\n")])])])]),a._v(" "),s("li",[s("p",[a._v("安装包以允许"),s("code",[a._v("apt")]),a._v("通过HTTPS使用存储库：")]),a._v(" "),s("div",{staticClass:"language- extra-class"},[s("pre",{pre:!0,attrs:{class:"language-text"}},[s("code",[a._v("sudo apt-get install \\\n    apt-transport-https \\\n    ca-certificates \\\n    curl \\\n    gnupg-agent \\\n    software-properties-common\n")])])])]),a._v(" "),s("li",[s("p",[a._v("添加Docker的官方GPG密钥：")]),a._v(" "),s("div",{staticClass:"language- extra-class"},[s("pre",{pre:!0,attrs:{class:"language-text"}},[s("code",[a._v("curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo apt-key add -\n")])])]),s("p",[s("code",[a._v("9DC8 5822 9FC7 DD38 854A E2D8 8D81 803C 0EBF CD88")]),a._v("通过搜索指纹的最后8个字符，验证您现在拥有带指纹的密钥 。")]),a._v(" "),s("div",{staticClass:"language- extra-class"},[s("pre",{pre:!0,attrs:{class:"language-text"}},[s("code",[a._v("sudo apt-key fingerprint 0EBFCD88\n    \npub   rsa4096 2017-02-22 [SCEA]\n      9DC8 5822 9FC7 DD38 854A  E2D8 8D81 803C 0EBF CD88\nuid           [ unknown] Docker Release (CE deb) <docker@docker.com>\nsub   rsa4096 2017-02-22 [S]\n")])])])]),a._v(" "),s("li",[s("p",[a._v("添加软件源")]),a._v(" "),s("div",{staticClass:"language- extra-class"},[s("pre",{pre:!0,attrs:{class:"language-text"}},[s("code",[a._v('sudo add-apt-repository \\\n   "deb [arch=amd64] https://download.docker.com/linux/ubuntu \\\n   $(lsb_release -cs) \\\n   stable"\n')])])])]),a._v(" "),s("li",[s("p",[a._v("更新"),s("code",[a._v("apt")]),a._v("包索引。")]),a._v(" "),s("div",{staticClass:"language- extra-class"},[s("pre",{pre:!0,attrs:{class:"language-text"}},[s("code",[a._v("sudo apt-get update\n")])])])])]),a._v(" "),s("p",[s("strong",[a._v("某些系统更新失败")])]),a._v(" "),s("p",[a._v("当执行 "),s("code",[a._v("apt-get update")]),a._v(" 失败时，使用命令 "),s("code",[a._v("sudo software-properties-gtk")]),a._v(" 在软件的 "),s("code",[a._v("Other Software")]),a._v("标签中将 "),s("code",[a._v("https://download.docker.com/linux/ubuntu")]),a._v(" 源的"),s("code",[a._v("distribution")]),a._v(" 值设置为 "),s("code",[a._v("bionic")]),a._v(",也可以直接修改 "),s("code",[a._v("/etc/apt/source.lists")]),a._v(" 文件。")]),a._v(" "),s("h3",{attrs:{id:"安装方法"}},[s("a",{staticClass:"header-anchor",attrs:{href:"#安装方法","aria-hidden":"true"}},[a._v("#")]),a._v(" 安装方法")]),a._v(" "),s("ol",{attrs:{start:"2"}},[s("li",[s("p",[a._v("安装"),s("em",[a._v("最新版本")]),a._v("的Docker CE和containerd，或者转到下一步安装特定版本：")]),a._v(" "),s("div",{staticClass:"language- extra-class"},[s("pre",{pre:!0,attrs:{class:"language-text"}},[s("code",[a._v("sudo apt-get install docker-ce docker-ce-cli containerd.io\n")])])])]),a._v(" "),s("li",[s("p",[a._v("通过运行"),s("code",[a._v("hello-world")]),a._v(" 映像验证是否正确安装了Docker CE 。")]),a._v(" "),s("div",{staticClass:"language- extra-class"},[s("pre",{pre:!0,attrs:{class:"language-text"}},[s("code",[a._v("sudo docker run hello-world\n")])])])])]),a._v(" "),s("h3",{attrs:{id:"进程维护"}},[s("a",{staticClass:"header-anchor",attrs:{href:"#进程维护","aria-hidden":"true"}},[a._v("#")]),a._v(" 进程维护")]),a._v(" "),s("ol",[s("li",[s("p",[a._v("停止、启动、重启docker")]),a._v(" "),s("div",{staticClass:"language- extra-class"},[s("pre",{pre:!0,attrs:{class:"language-text"}},[s("code",[a._v("sudo systemctl start | stop | restart docker.service\n")])])])]),a._v(" "),s("li",[s("p",[a._v("查看docker版本")]),a._v(" "),s("div",{staticClass:"language- extra-class"},[s("pre",{pre:!0,attrs:{class:"language-text"}},[s("code",[a._v("sudo docker version\n")])])])]),a._v(" "),s("li",[s("p",[a._v("加入开机自启")]),a._v(" "),s("div",{staticClass:"language- extra-class"},[s("pre",{pre:!0,attrs:{class:"language-text"}},[s("code",[a._v("sudo systemctl enable docker\n")])])])]),a._v(" "),s("li",[s("p",[a._v("开机启动检测")]),a._v(" "),s("div",{staticClass:"language- extra-class"},[s("pre",{pre:!0,attrs:{class:"language-text"}},[s("code",[a._v("sudo systemctl list-unit-files | grep docker \n")])])])])]),a._v(" "),s("h3",{attrs:{id:"维护"}},[s("a",{staticClass:"header-anchor",attrs:{href:"#维护","aria-hidden":"true"}},[a._v("#")]),a._v(" 维护")]),a._v(" "),s("p",[s("strong",[a._v("升级")])]),a._v(" "),s("p",[a._v("要升级Docker CE，请先运行"),s("code",[a._v("sudo apt-get update")])]),a._v(" "),s("p",[s("strong",[a._v("卸载")])]),a._v(" "),s("div",{staticClass:"language- extra-class"},[s("pre",{pre:!0,attrs:{class:"language-text"}},[s("code",[a._v("sudo apt-get purge docker-ce docker-ce-cli containerd.io docker docker.io\n\nsudo rm -rf /var/lib/docker\n\nsudo apt autoremove         \n")])])]),s("h3",{attrs:{id:"普通帐号"}},[s("a",{staticClass:"header-anchor",attrs:{href:"#普通帐号","aria-hidden":"true"}},[a._v("#")]),a._v(" 普通帐号")]),a._v(" "),s("p",[a._v("每次运行docker都要使用 "),s("code",[a._v("sudo")]),a._v("，下面介绍使用当前登录帐号执行 docker 的方法 。")]),a._v(" "),s("ol",[s("li",[s("p",[a._v("创建"),s("code",[a._v("docker")]),a._v("组。")]),a._v(" "),s("div",{staticClass:"language- extra-class"},[s("pre",{pre:!0,attrs:{class:"language-text"}},[s("code",[a._v("sudo groupadd docker\n")])])])]),a._v(" "),s("li",[s("p",[a._v("将您的用户添加到该"),s("code",[a._v("docker")]),a._v("组。")]),a._v(" "),s("div",{staticClass:"language- extra-class"},[s("pre",{pre:!0,attrs:{class:"language-text"}},[s("code",[a._v("sudo usermod -aG docker $USER\n")])])])]),a._v(" "),s("li",[s("p",[a._v("注销并重新登录，以便重新评估您的组成员身份。")]),a._v(" "),s("p",[a._v("如果在虚拟机上进行测试，则可能需要重新启动虚拟机才能使更改生效。")]),a._v(" "),s("p",[a._v("在桌面Linux环境（如X Windows）上，完全注销会话，然后重新登录。")])]),a._v(" "),s("li",[s("p",[a._v("验证您是否可以运行"),s("code",[a._v("docker")]),a._v("命令"),s("code",[a._v("sudo")]),a._v("。")]),a._v(" "),s("div",{staticClass:"language- extra-class"},[s("pre",{pre:!0,attrs:{class:"language-text"}},[s("code",[a._v("docker run hello-world\n")])])])])]),a._v(" "),s("h2",{attrs:{id:"基本使用"}},[s("a",{staticClass:"header-anchor",attrs:{href:"#基本使用","aria-hidden":"true"}},[a._v("#")]),a._v(" 基本使用")]),a._v(" "),s("h3",{attrs:{id:"镜像管理"}},[s("a",{staticClass:"header-anchor",attrs:{href:"#镜像管理","aria-hidden":"true"}},[a._v("#")]),a._v(" 镜像管理")]),a._v(" "),s("div",{staticClass:"language- extra-class"},[s("pre",{pre:!0,attrs:{class:"language-text"}},[s("code",[a._v("# 搜索镜像\ndocker search ubuntu\n\n# 安装ubuntu镜像\ndocker pull ubuntu\n\n# 查看镜像列表\ndocker images\n")])])]),s("p",[a._v("删除镜像")]),a._v(" "),s("p",[a._v("可以使用name或tag删除镜像，要保证没有容器使用该镜像。")]),a._v(" "),s("div",{staticClass:"language- extra-class"},[s("pre",{pre:!0,attrs:{class:"language-text"}},[s("code",[a._v("docker rmi -f ubuntu:latest\n")])])]),s("p",[a._v("批量删除镜像")]),a._v(" "),s("div",{staticClass:"language- extra-class"},[s("pre",{pre:!0,attrs:{class:"language-text"}},[s("code",[a._v("docker rmi `docker images -q`\n")])])]),s("h3",{attrs:{id:"服务容器"}},[s("a",{staticClass:"header-anchor",attrs:{href:"#服务容器","aria-hidden":"true"}},[a._v("#")]),a._v(" 服务容器")]),a._v(" "),s("p",[a._v("以守护进程启动容器")]),a._v(" "),s("div",{staticClass:"language- extra-class"},[s("pre",{pre:!0,attrs:{class:"language-text"}},[s("code",[a._v("docker run -tid ubuntu /bin/bash\n")])])]),s("p",[a._v("查看运行的容器")]),a._v(" "),s("div",{staticClass:"language- extra-class"},[s("pre",{pre:!0,attrs:{class:"language-text"}},[s("code",[a._v("docker ps\n")])])]),s("p",[a._v("登录容器")]),a._v(" "),s("div",{staticClass:"language- extra-class"},[s("pre",{pre:!0,attrs:{class:"language-text"}},[s("code",[a._v("docker exec -it 3c5e00452777 /bin/bash\n")])])]),s("p",[a._v("停止容器")]),a._v(" "),s("div",{staticClass:"language- extra-class"},[s("pre",{pre:!0,attrs:{class:"language-text"}},[s("code",[a._v("docker stop 3c5e00452777\n# kill 立刻停止容器，类似于直接关机\ndocker kill 3c5e00452777\n")])])]),s("p",[a._v("启动停止的容器")]),a._v(" "),s("div",{staticClass:"language- extra-class"},[s("pre",{pre:!0,attrs:{class:"language-text"}},[s("code",[a._v("docker start 3c5e00452777\n")])])]),s("p",[a._v("删除容器")]),a._v(" "),s("div",{staticClass:"language- extra-class"},[s("pre",{pre:!0,attrs:{class:"language-text"}},[s("code",[a._v("docker rm -f ubuntu:latest\n")])])]),s("p",[a._v("批量删除容器")]),a._v(" "),s("div",{staticClass:"language- extra-class"},[s("pre",{pre:!0,attrs:{class:"language-text"}},[s("code",[a._v("docker rm `docker ps -a -q`\n")])])]),s("p",[a._v("指定容器名")]),a._v(" "),s("div",{staticClass:"language- extra-class"},[s("pre",{pre:!0,attrs:{class:"language-text"}},[s("code",[a._v("# 执行 ubuntu 镜像生成新容器 hd\ndocker run -tid --name hd  ubuntu /bin/bash\n")])])]),s("p",[a._v("查看容器进程")]),a._v(" "),s("div",{staticClass:"language- extra-class"},[s("pre",{pre:!0,attrs:{class:"language-text"}},[s("code",[a._v("docker top ubuntu\n")])])]),s("p",[a._v("查看容器端口映射")]),a._v(" "),s("div",{staticClass:"language- extra-class"},[s("pre",{pre:!0,attrs:{class:"language-text"}},[s("code",[a._v("docker port hd\n")])])]),s("p",[a._v("查看容器元信息(如IP)")]),a._v(" "),s("div",{staticClass:"language- extra-class"},[s("pre",{pre:!0,attrs:{class:"language-text"}},[s("code",[a._v("docker inspect hd \n")])])])])},[],!1,null,null,null);e.default=r.exports}}]);