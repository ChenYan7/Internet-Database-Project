-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2020-06-07 07:42:11
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
-- 数据库： `yiipractice`
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
('1591438030000', '139天！邱海波终于回家了', '从严冬到酷暑，从江苏到湖北，再转战黑龙江、吉林，著名重症医学专家、东南大学附属中大医院党委副书记邱海波，抗疫 139 天后，于 6 月 5 日下午从吉林平安返回南京。在他返回的前两天，6 月 3 日，吉林省舒兰市风险等级由高风险调整为低风险。看到邱海波回家，网友纷纷致敬：「辛苦了，好好休息休息！」', '央视新闻app', 'http://app.cctv.com/special/cportal/detail/arti/index.html?id=ArtiTFBarRzB87SoCXeAwJXV200606&isfromapp=1', 'null', ''),
('1591438030000', '139天！邱海波终于回家了', '从严冬到酷暑，从江苏到湖北，再转战黑龙江、吉林，著名重症医学专家、东南大学附属中大医院党委副书记邱海波，抗疫 139 天后，于 6 月 5 日下午从吉林平安返回南京。在他返回的前两天，6 月 3 日，吉林省舒兰市风险等级由高风险调整为低风险。看到邱海波回家，网友纷纷致敬：「辛苦了，好好休息休息！」', '央视新闻app', 'http://app.cctv.com/special/cportal/detail/arti/index.html?id=ArtiTFBarRzB87SoCXeAwJXV200606&isfromapp=1', 'null', ''),
('1591489711000', '吉林市发布公告，公路卡点一律取消', '按照国家新冠肺炎疫情分区分级标准，6月7日起，吉林省吉林市城区风险等级调整为低风险，现就有关事项公告如下：一、城区内所有公路卡点一律取消。二、没有确诊病例及有确诊病例封闭超过28天的小区，解除封闭管理。有确诊病例封闭未达到28天的小区，继续实行封闭式管理，小区居民可凭通行证出行，实行测温、扫码，管控到第28天。各小区要强化社区网格化管理，加大对境外、重点地区返（来）吉人员及发热人员的排查。', '央视新闻app', 'http://app.cctv.com/special/cportal/detail/arti/index.html?id=ArtiGzEjNEht3CQmPFasiWB7200607&isfromapp=1', NULL, ''),
('1591498669000', '科技部：中国疫苗完成研制和临床试验后，将作为公共产品向全球提供', '国务院新闻办公室于6月7日（星期日）发布了《抗击新冠肺炎疫情的中国行动》白皮书。科学技术部部长王志刚在发布会上表示，疫苗研制一定要把安全性、有效性以及可及性放在非常重要的位置。中国疫苗如果完成了研制和临床试验后，将作为公共产品向全球提供。王志刚说，就疫苗本身来讲，从历史上人类应对疫情的认识来看，疫苗仍然是当前我们战胜新冠肺炎病毒的根本之策。', '央视新闻app', 'http://app.cctv.com/special/cportal/detail/arti/index.html?id=ArtiIKn6NzNy928sWuhabziE200607&isfromapp=1', NULL, ''),
('1591502713000', '科技部：当然要溯源，目的只有一个：科学应对新冠病毒', '科技部部长王志刚指出，新冠病毒在全球蔓延，当然要进行溯源，要还原其过程，这是全球科技界的一种责任，也是科研活动的一个重要组成部分。溯源的目的只有一个，就是科学地应对人类共同的威胁。', '央视新闻app', 'http://app.cctv.com/special/cportal/detail/arti/index.html?id=ArtiLH0DL4bplfVLKmAp4JTA200607&isfromapp=1', NULL, ''),
('1591502713000', '科技部：当然要溯源，目的只有一个：科学应对新冠病毒', '科技部部长王志刚指出，新冠病毒在全球蔓延，当然要进行溯源，要还原其过程，这是全球科技界的一种责任，也是科研活动的一个重要组成部分。溯源的目的只有一个，就是科学地应对人类共同的威胁。', '央视新闻app', 'http://app.cctv.com/special/cportal/detail/arti/index.html?id=ArtiLH0DL4bplfVLKmAp4JTA200607&isfromapp=1', NULL, ''),
('1591502713000', '科技部：当然要溯源，目的只有一个：科学应对新冠病毒', '科技部部长王志刚指出，新冠病毒在全球蔓延，当然要进行溯源，要还原其过程，这是全球科技界的一种责任，也是科研活动的一个重要组成部分。溯源的目的只有一个，就是科学地应对人类共同的威胁。', '央视新闻app', 'http://app.cctv.com/special/cportal/detail/arti/index.html?id=ArtiLH0DL4bplfVLKmAp4JTA200607&isfromapp=1', NULL, ''),
('1591499508000', '白皮书：3至5月中国出口口罩706亿只，防护服3.4亿套', '3至5月中国向200个国家和地区出口防疫物资，其中，口罩706亿只，防护服3.4亿套，护目镜1.15亿个，呼吸机9.67万台，检测试剂盒2.25亿人份，红外线测温仪4029万台，出口规模呈明显增长态势，有力支持了相关国家疫情防控。 \n', '人民日报', 'http://m.weibo.cn/2803301701/4513138404609313', NULL, ''),
('1591498669000', '科技部：中国疫苗完成研制和临床试验后，将作为公共产品向全球提供', '国务院新闻办公室于6月7日（星期日）发布了《抗击新冠肺炎疫情的中国行动》白皮书。科学技术部部长王志刚在发布会上表示，疫苗研制一定要把安全性、有效性以及可及性放在非常重要的位置。中国疫苗如果完成了研制和临床试验后，将作为公共产品向全球提供。王志刚说，就疫苗本身来讲，从历史上人类应对疫情的认识来看，疫苗仍然是当前我们战胜新冠肺炎病毒的根本之策。', '央视新闻app', 'http://app.cctv.com/special/cportal/detail/arti/index.html?id=ArtiIKn6NzNy928sWuhabziE200607&isfromapp=1', NULL, ''),
('1591496707000', '中国境内新冠肺炎累计治愈率94.3%', '抗击疫情的中国行动白皮书指出，截至2020年5月31日，中国境内新冠肺炎累计治愈率达94.3%。 \n', '人民日报', 'http://m.weibo.cn/2803301701/4513126656223365', NULL, ''),
('1591490884000', '全国中高风险地区再度清零', '7日，吉林调整疫情防控分区分级情况，将吉林市丰满区风险等级由高风险调整为低风险，将吉林市昌邑区、船营区风险等级由中风险调整为低风险。自此全国所有县域的风险等级均调整为低风险。每一次清零都来之不易。疫情防控常态化，坚持！\n', '人民日报', 'http://m.weibo.cn/2803301701/4513102233044278', NULL, ''),
('1591489711000', '吉林市发布公告，公路卡点一律取消', '按照国家新冠肺炎疫情分区分级标准，6月7日起，吉林省吉林市城区风险等级调整为低风险，现就有关事项公告如下：一、城区内所有公路卡点一律取消。二、没有确诊病例及有确诊病例封闭超过28天的小区，解除封闭管理。有确诊病例封闭未达到28天的小区，继续实行封闭式管理，小区居民可凭通行证出行，实行测温、扫码，管控到第28天。各小区要强化社区网格化管理，加大对境外、重点地区返（来）吉人员及发热人员的排查。', '央视新闻app', 'http://app.cctv.com/special/cportal/detail/arti/index.html?id=ArtiGzEjNEht3CQmPFasiWB7200607&isfromapp=1', NULL, ''),
('1591489046000', '美媒称抗议持续加剧疫情传播', '当地时间6日，美媒报道，全美各地持续不断的抗议活动加剧了新冠肺炎疫情传播。目前全美有23个州新增确诊病例数持续增加，其中亚利桑那州、佛罗里达州、北卡罗莱纳州、得克萨斯州和佛蒙特州，过去4天创下疫情暴发以来新增确诊病例的最高纪录。\n', '央视新闻', 'http://m.weibo.cn/2656274875/4513094523707767', NULL, ''),
('1591485351000', '中国抗疫医疗专家组向赤道几内亚递交《抗疫国家建议书》', '当地时间6月5日，受赤道几内亚总理奥巴马的邀请，中国抗疫医疗专家组到赤道几内亚大陆地区交流，并同卫生与社会福利国务部长恩圭马举行会谈。恩圭马高度评价并感谢中国政府派遣医疗专家组到赤道几内亚交流抗疫经验，认为专家组是“授之以鱼不如授之以渔”的最好抗疫经验传播者，希望中方多提好的抗疫建议和方案，让赤道几内亚大陆地区民众也能得到更好的医疗保障。', '央视新闻app', 'http://app.cctv.com/special/cportal/detail/arti/index.html?id=Arti9St0ecn4HPwgtSc7oe5q200607&isfromapp=1', NULL, ''),
('1591471566000', '希腊进一步放宽防疫限制措施，允许餐厅等开放室内就餐区域', '当地时间6月6日起，希腊境内所有餐厅、咖啡厅、酒吧等餐饮场所重新开始接纳顾客室内用餐。但商户必须严格遵守防疫规定，每2.2平米的范围内只允许容纳一个客人，每张桌子最多只可容纳6个客人等。', '央视新闻app', 'http://app.cctv.com/special/cportal/detail/arti/index.html?id=ArtipQaWQq6enyK9DSHEF5Zb200607&isfromapp=1', NULL, ''),
('1591464720000', '疫情下非洲线上购物发展迅猛，电子支付成新宠', '非洲疫情继续蔓延，肯尼亚、乌干达等国继续执行严格的防疫措施。疫情下，人们纷纷网购，线上消费成为非洲人购物的选择。危机之下往往蕴藏机遇，现阶段线下零售业受冲击影响较大，而线上销售、移动支付发展势头迅猛。除了网上购物，直播带货也走进了非洲。5 月，联合国副秘书长兼非洲经济委员会执行秘书松圭应邀参与中国网购平台的直播带货，3000 包卢旺达咖啡瞬间售罄。', '央视新闻app', 'http://app.cctv.com/special/cportal/detail/arti/index.html?id=ArtiY2vYps2WKELV0sQjzsEd200607&isfromapp=1', NULL, '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
