
DROP TABLE IF EXISTS `info`;
CREATE TABLE IF NOT EXISTS `info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `adresse` text NOT NULL,
  `tele` text NOT NULL,
  `fac` text NOT NULL,
  `link` text NOT NULL,
  `twit` text NOT NULL,
  `form` text NOT NULL,
  `comp` text NOT NULL,
  `centr` text NOT NULL,
  `exp` text NOT NULL,
  `img` text NOT NULL,
  `dsc` text NOT NULL,
  `dat` date NOT NULL,
  `ne` text NOT NULL,
  `nf` text NOT NULL,
  `ae` text NOT NULL,
  `af` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=98 DEFAULT CHARSET=utf8mb4;

INSERT INTO `info` (`id`, `name`, `email`, `adresse`, `tele`, `fac`, `link`, `twit`, `form`, `comp`, `centr`, `exp`, `img`, `dsc`, `dat`, `ne`, `nf`, `ae`, `af`) VALUES
(97, 'hicham elbanaji', 'hicham1elbanaji@gmail.com', '163 hay qods bensouda fes', '0609178344', 'HIsham elbanaji', 'hicham elbanaji', '---', 'Tâches réalisées, Duis augue magna, bibendum at nunc id, gravida ultrices tellus. Pellentesqu, ehicula ante id, dictum arcu hicula ante gravida ultrices. Lorem ipsum dolor sit amet. varius mauris. Duis augue magna, bibendum at nunc id, gravida ultrices tellus ante gravida ultrices', 'Tâches réalisées, Duis augue magna, bibendum at nunc id, gravida ultrices tellus. Pellentesqu, ehicula ante id, dictum arcu hicula ante gravida ultrices. Lorem ipsum dolor sit amet. varius mauris. Duis augue magna, bibendum at nunc id, gravida ultrices tellus ante gravida ultrices', '', 'Tâches réalisées, Duis augue magna, bibendum at nunc id, gravida ultrices tellus. Pellentesqu, ehicula ante id, dictum arcu hicula ante gravida ultrices. Lorem ipsum dolor sit amet. varius mauris. Duis augue magna, bibendum at nunc id, gravida ultrices tellus ante gravida ultrices', 'img/avatar/img5f6e0cf93ee14.png', 'ingenieur detat', '2020-09-25', 'alten', 'FST FES', '2015/2016', '2013/2015');
COMMIT;
