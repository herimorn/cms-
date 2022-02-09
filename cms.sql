CREATE TABLE `category` (
 `cat_id` int(33) NOT NULL AUTO_INCREMENT,
 `cat_title` varchar(255) NOT NULL,
 PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4
CREATE TABLE `login` (
 `id` int(32) NOT NULL AUTO_INCREMENT,
 `username` varchar(32) NOT NULL,
 `password` varchar(255) NOT NULL,
 `email` varchar(80) NOT NULL,
 `role` varchar(32) NOT NULL DEFAULT 'subscriber',
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4
CREATE TABLE `postspost` (
 `post_id` int(3) NOT NULL AUTO_INCREMENT,
 `post_category_id` int(32) NOT NULL,
 `post_title` varchar(255) NOT NULL,
 `post_author` varchar(255) NOT NULL,
 `post_date` date NOT NULL,
 `post_image` text NOT NULL,
 `post_price` varchar(32) NOT NULL,
 `post_location` varchar(255) NOT NULL,
 `post_tags` varchar(255) NOT NULL,
 `post_status` varchar(255) NOT NULL DEFAULT 'drafts',
 `post_content` varchar(255) NOT NULL,
 `category` varchar(22) NOT NULL,
 PRIMARY KEY (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4
CREATE TABLE `user` (
 `userid` int(33) NOT NULL AUTO_INCREMENT,
 `username` varchar(32) NOT NULL,
 `userpassword` varchar(255) NOT NULL,
 `userfirstname` varchar(32) NOT NULL,
 `userlastname` varchar(32) NOT NULL,
 `useremail` varchar(32) NOT NULL,
 `userimage` text NOT NULL,
 `userrole` varchar(34) NOT NULL,
 `usersalt` varchar(255) NOT NULL,
 PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4
