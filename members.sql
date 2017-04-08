CREATE TABLE `members` (
  `sid` int(11) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `certification` varchar(255) NOT NULL,
  `activated` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`sid`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `members`
--
ALTER TABLE `members`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT;


INSERT INTO `members` (`sid`, `email_id`, `password`, `nickname`, `mobile`, `address`, `created_at`, `certification`, `activated`) VALUES
(1, 'shinder@g2g.com', '3a395dff3e8994c93a2b8ec12e8eb47ef7139743', 'hhh', '346456', 'rete', '2016-11-30 10:18:21', 'b7a04d7c0ac4efcbbc5b0a280ffc8b2d3777e7b7', 0),
(2, '1232@gmail.com', '774f2dce6c08445939f0e09c9d93278f29db604f', '222222', '0934687951', '台北', '2016-11-30 10:35:12', '13de3709676f010212154fad7c8996730e5616f7', 0),
(3, '777@yahoo.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '阿讚', '', '', '2016-11-30 10:38:36', '8014bb3b9876cfc0587f931d713d3f2e75a64340', 0),
(4, 'gg@gmail.com', '19dd466e43cdbd3833abc0609eba6d8786f9b342', '555', '', '', '2016-11-30 10:44:58', '15a242b95781f3b7d4ab018f105e354615f798f1', 0),
(6, 'shinde2r@g2g.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'adsvsdvas', '', '', '2016-11-30 11:19:34', '3056b730eaecd3d2c977df1b4ce06373084ea6ae', 0),
(7, 'ap311036@gmail.com', 'ac805ae25b2f9f40bedb3fcc65431b5d5a8244ea', 'aj', '', '', '2016-11-30 11:27:28', '54f79b9ca0148f9515b98bf8193e541b4214905e', 0),
(8, 'ap311077@gmail.com', '0f8dc919328b6135bc1a925bb50adebf89f94f26', 'aj', '', '', '2016-11-30 11:35:25', 'dc944ffcae1f9ee10a8de30eae2520bdc32179cb', 0),
(9, '7727@yahoo.com', '68db750f9d45ac8a0dbc39ae184847c1c19352b0', '123', '', '', '2016-11-30 11:38:25', 'dd3e5073f3f03cc2cac952e05e03a68b10806299', 0),
(10, 'd820430@yahoo.com', 'b55593db3f83483e94bf67206c45a7385c1e65be', '333', '', '', '2016-11-30 11:45:42', '4e255c7a0c56024304d0f9d1434ae58ed9278b02', 0),
(12, 'dfaf2@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'zzz', '', '', '2016-11-30 11:53:00', '9ff02ab14e1c30e8887760acacc7dda4ac434563', 0),
(13, 'zxc@yahoo.com', '30986c81059b460882d5416484691d178c367ff6', 'zz', 'zz', '', '2016-11-30 13:18:56', 'a4b30ccbea9559926da6997267d0082fef965fb8', 0),
(18, '777@yahoo.com.tw', 'f3d73901ae955469051b792d8daf61a1ded9f9ec', '123', '', '', '2016-11-30 13:49:56', 'e74355146cc86dbeb8bb4d288382af203eac2519', 0),
(19, 'shinder@gg.com', '88a7645677d2a29b04f508e428bd8e3c8aebee85', 'sdfsdf', 'sdfs', '', '2016-12-01 09:28:51', '3ffffc02d7d683f150d19fb39da58720622c6b09', 0),
(20, '7c77@yahoo.com.tw', '7c4a8d09ca3762af61e59520943dc26494f8941b', '+++', '', '', '2016-12-01 09:31:54', 'c3843fc0b10b6c27bdc0092a8d4e7e5bbf4c7483', 0),
(22, 'a123@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '123456', '', '', '2016-12-01 15:28:23', '24fd92d0b64d1d88393164f33a9b14b3894fb4a7', 0);