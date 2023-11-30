CREATE TABLE IF NOT EXISTS registered_users (
  id int NOT NULL,
  user_name varchar(100) NOT NULL,
  display_name varchar(100) NOT NULL DEFAULT 'DEFAULT',
  password varchar(100) NOT NULL,
  email varchar(100) NOT NULL DEFAULT 'DEFAULT',
  points int NOT NULL DEFAULT 5,
  suggest varchar(100) DEFAULT NULL,
  filename varchar(100) DEFAULT NULL,
  sudo varchar(100) NOT NULL DEFAULT '0',
  chart_data varchar(100) NOT NULL DEFAULT '0, 0, 0, 0, 0, 0, 0',
  pay int NOT NULL DEFAULT 0,
  goal text DEFAULT NULL,
  sabout varchar(100) DEFAULT NULL,
  about varchar(100) DEFAULT NULL,
  youtube varchar(100) DEFAULT NULL,
  insta int DEFAULT NULL,
  user_browser varchar(400) DEFAULT NULL,
  pointa varchar(100) DEFAULT NULL,
  pointb varchar(100) DEFAULT NULL,
  lastpoint varchar(100) DEFAULT NULL,
  timestampp int DEFAULT NULL,
  streak int DEFAULT 0,
  lasttime int DEFAULT NULL
);


INSERT INTO `registered_users` (`id`, `user_name`, `display_name`, `password`, `email`, `points`, `suggest`, `filename`, `sudo`, `chart_data`, `pay`, `goal`, `sabout`, `about`, `youtube`, `insta`,`user_browser`,`pointa`,`pointb`,`lastpoint`,`timestampp`,`streak`,`lasttime`) VALUES
(1, 'devil', 'Saurabh Saraswat', 'd81e8213797f23651cf57e59b4bd8da0', 'saurabh45215@gmail.com', 2216, '', 'https://ucarecdn.com/3396501d-4c27-4465-bf4b-e62f54f37c93/', '1', '10203040506070', 0, 'Developer && Dreamer', 'Eat phir repeat ', 'Developing php and myself', NULL, NULL, 'a:1:{i:0;s:113:\"Mozilla/5.0 (Linux; Android 11) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.134 Mobile Safari/537.36\";}', NULL, NULL, '/view/super.php?page=4?cc=0', 1670726624, 0, 1670726624),
(2, 'saurabhss', 'Saurabh Saraswat', 'd81e8213797f23651cf57e59b4bd8da0', 'saurabh45215@gmail.com', 163, '', 'https://ucarecdn.com/40cf449f-7469-4bbb-897e-9004ae15eb51/', '1', '10203040506070', 1,'Developer && Dreamer', 'Eat phir repeat ', 'Developing php and myself', NULL, NULL, 'a:1:{i:0;s:113:\"Mozilla/5.0 (Linux; Android 11) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.134 Mobile Safari/537.36\";}', NULL, NULL, '/view/super.php?page=4?cc=0', 1670726624, 0, 1670726624);
--
-- Indexes for dumped tables
--

--
-- Indexes for table `registered_users`
--
ALTER TABLE `registered_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registered_users`
--
ALTER TABLE `registered_users`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;
COMMIT;