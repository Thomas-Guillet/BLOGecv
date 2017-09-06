<?php
CREATE
 ALGORITHM = UNDEFINED
 VIEW `nb_article_by_date`
 AS select
`tag`.`id` AS `tag`,
count(`article`.`id`) AS `nb_article`
from `article`
inner join `tag_article`
ON `tag_article`.`article_id` = `article`.`id`
inner join `tag`
ON `tag_article`.`tag_id` = `tag`.`id`
group by
`tag`.`id`
order by `tag`.`id`;