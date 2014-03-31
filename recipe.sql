CREATE TABLE IF NOT EXISTS `recipe_category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `recipe_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
);
 
CREATE TABLE IF NOT EXISTS `recipe_subcategory` (
  `subcategory_id` int(11) NOT NULL AUTO_INCREMENT,
  `recipe_name` varchar(250) NOT NULL DEFAULT 'No Description Available',
  PRIMARY KEY (`subcategory_id`)
);
 
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`),
  KEY `subcategory_id` (`subcategory_id`)
);
 
ALTER TABLE  `categories` ADD FOREIGN KEY (  `category_id` ) REFERENCES  `u582553789_food`.`recipe_category` (
`category_id`
) ON DELETE CASCADE ON UPDATE CASCADE ;
 
ALTER TABLE  `categories` ADD FOREIGN KEY (  `subcategory_id` ) REFERENCES  `u582553789_food`.`recipe_subcategory` (
`subcategory_id`
) ON DELETE CASCADE ON UPDATE CASCADE ;