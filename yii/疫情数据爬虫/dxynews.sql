-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2020-06-13 05:32:23
-- 服务器版本： 10.4.11-MariaDB
-- PHP 版本： 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `yii2`
--

-- --------------------------------------------------------

--
-- 表的结构 `dxynews`
--

CREATE TABLE `dxynews` (
  `pubDate` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `summary` varchar(255) DEFAULT NULL,
  `infoSource` varchar(255) DEFAULT NULL,
  `sourceTrl` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `provinceId` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `dxynews`
--

INSERT INTO `dxynews` (`pubDate`, `title`, `summary`, `infoSource`, `sourceTrl`, `province`, `provinceId`) VALUES
('1592007742000', '广东13日通报：新增1例境外输入新冠肺炎确诊病例', '6月12日0-24时，广东省新增境外输入确诊病例1例，广州报告，来自秘鲁，在入境口岸发现，入境后即被隔离观察。无新增无症状感染者。新增出院1例。截至6月12日24时，广东省累计报告新冠肺炎确诊病例1608例（境外输入213例）。目前在院10例。', '央视新闻app', 'http://app.cctv.com/special/cportal/detail/arti/index.html?id=Artiej8gZI8CthdiuiaMPdS2200613&isfromapp=1', NULL, ''),
('1592004868000', '韩国决定延长首都圈强化版防疫措施', '截至当地时间6月12日0时，韩国新增新冠肺炎确诊病例56例，累计确诊12003例，累计死亡277例，累计治愈10669例。韩国防疫部门6月12日宣布，鉴于首都圈近来频频发生小规模聚集性新冠病毒感染事件，因此决定无限期延长原定于本月14日结束的“首都圈强化版防疫措施”。', '央视新闻app', 'http://app.cctv.com/special/cportal/detail/arti/index.html?id=ArtiudL7HwY3e4oUW9qpBMij200613&isfromapp=1', NULL, ''),
('1592002803000', '巴西累计确诊病例逾82万例 死亡人数居世界第二', '根据巴西卫生部当地时间6月12日晚公布的最新数据，该国单日新增新冠肺炎确诊病例25982例，累计确诊828810例；新增死亡病例909例，累计死亡病例41828例。巴西新冠肺炎累计死亡人数已经超过英国，位列全球第二。', '人民日报海外版', 'https://m.weibo.cn/3057540037/4515249375784265', NULL, ''),
('1591996222000', '​新冠肺炎疫情危机或使全球赤贫人口增至11亿', '联合国大学世界发展经济学研究所于6月12日发布一份最新研究报告称，新冠肺炎疫情带来经济的衰退可能让赤贫人口增加3.95亿人，最差的情况下，即人均收入减少20%的话，全球日收入不足1.9美元（约合人民币13.5元）的赤贫人口总数或将增加到11.2亿。', '央视新闻app', 'http://app.cctv.com/special/cportal/detail/arti/index.html?id=Arti00meQmK1c2B26Nx5EygK200613&isfromapp=1', NULL, ''),
('1591956733000', '东京奥组委：已确定约8成比赛场馆明年将继续使用', '今天（6月12日），东京奥运会、残奥会组织委员会在东京举行第37届理事会，主要研究东京奥运会、残奥会延期一年举办的相关事宜。东京奥组委首席执行官武藤敏郎表示，经过协调，原定为东京奥运会服务的全部43个场馆当中，目前有约8成明年夏天可以确保为延期的东京奥运会所使用，其他奥运场馆的使用还需要进一步确认和协调。', '央视新闻app', 'http://app.cctv.com/special/cportal/detail/arti/index.html?id=ArtidXiiw7c61Kr1MOpBili2200612&isfromapp=1', NULL, ''),
('1591953429000', '​香港新增1例新冠肺炎确诊病例', '来自香港特区政府卫生防护中心的消息，截至6月12日17时，香港新增1例新冠肺炎本地确诊病例。患者居住在沙田的沥源邨禄泉楼，这里此前曾发现多个确诊病例。患者是5月31日该大厦首位确诊者的亲属。', '央视新闻app', 'http://app.cctv.com/special/cportal/detail/arti/index.html?id=ArtiM3O0nmH5AbyudDZCIYRd200612&isfromapp=1', NULL, ''),
('1591949760000', '北京通报6月12日新增2例新冠肺炎确诊病例', '今天下午，北京市召开第113场疫情防控新闻发布会。根据通报，6月11日、12日连续两天新增新冠肺炎确诊病例。会上通报，6月12日，北京市丰台区新增2例确诊病例，为同一单位员工，目前已转至定点医疗机构。', '央视新闻app', 'http://app.cctv.com/special/cportal/detail/arti/index.html?id=ArticyP1Q8xtCUKsvSJomYS4200612&isfromapp=1', NULL, ''),
('1591943618000', '英国4月份经济下降20.4%', '英国国家统计局最新数字显示，受新冠肺炎疫情影响，4月份英国经济下降20.4%，超过2008年金融危机时期，成为经济表现最差的月份之一。', '央视新闻app', 'http://app.cctv.com/special/cportal/detail/arti/index.html?id=ArtiFyHcirfI5lhYniSiaI0t200612&isfromapp=1', NULL, ''),
('1591940073000', '天津12日通报：新增1例境外输入新冠肺炎确诊病例', '6月12日6时至11时30分，天津新增境外输入新冠肺炎确诊病例1例（中国籍），男，32岁，私营企业务工人员，中国籍，近期居住地塞尔维亚贝尔格莱德。自塞尔维亚贝尔格莱德乘坐航班（JU045），于6月11日抵达天津滨海国际机场。', '央视新闻app', 'http://app.cctv.com/special/cportal/detail/arti/index.html?id=ArtiWNb0iZLcv6lIpkwTw6MB200612&isfromapp=1', NULL, ''),
('1591937301000', '南非卫生职业委员会主席：由衷感谢中国对非洲的抗议物资援助', '《抗击新冠肺炎疫情的中国行动》白皮书在非洲国家引起广泛关注。近日，南非卫生职业委员会主席戈西·莱特拉普在接受总台记者采访时表示，中国面对疫情迅速采取措施，在短时间内遏制住了疫情蔓延的势头；而在国内疫情得到控制之后，中国又积极协助其他国家抗击疫情，特别是很多非洲国家都得到了中国的大力支援。', '央视新闻app', 'http://app.cctv.com/special/cportal/detail/arti/index.html?id=Artip9L1rpXeIRXT6vB9Xun4200612&isfromapp=1', NULL, '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
