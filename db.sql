CREATE TABLE IF NOT EXISTS `base` (
  `0` varchar(10) NOT NULL COMMENT 'Campo SKU',
  `1` text NOT NULL COMMENT 'Campo para dados',
  `2` varchar(250) NOT NULL COMMENT 'Seletor 1',
  `3` varchar(250) NOT NULL COMMENT 'Seletor 2',
  `4` varchar(250) NOT NULL COMMENT 'Seletor 3',
  `5` varchar(250) DEFAULT NULL COMMENT 'Seletor 4',
  `6` int(10) NOT NULL COMMENT 'Seletor de ordem'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

