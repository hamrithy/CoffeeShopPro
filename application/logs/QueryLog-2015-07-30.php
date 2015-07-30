SELECT *, (SELECT COUNT(A.foodid) FROM FOODS A WHERE A.foodtypeid=B.foodtypeid) AS TOTL FROM FOODTYPES B ORDER BY B.title 
 Execution Time:0.26572704315186

SELECT `A`.`foodid`, `A`.`title` As `food_title`, `A`.`description` As `food_description`, `A`.`foodtypeid`, `A`.`thumbnailurl`, `A`.`promotiontype`, `A`.`price`, `A`.`userid`, `B`.`title` As `foodtype_title`, `B`.`description` As `footype_description`
FROM `FOODS` `A`
JOIN `FOODTYPES` `B` ON `A`.`foodtypeid`=`B`.`foodtypeid` 
 Execution Time:0.2504711151123

SELECT DISTINCT(A.menuid),A.title, A.linkto, A.ordering, A.subof, A.status,(CASE WHEN B.menuid IS NOT NULL THEN 1 ELSE 0 END) AS parent 
			    FROM MENUS A 
				LEFT JOIN (SELECT menuid, subof FROM MENUS) B 
				ON A.menuid = B.subof
				ORDER BY A.subof,A.ordering 
 Execution Time:0.2512948513031

SELECT `s`.`serviceid`, `s`.`title`, `s`.`description`, `s`.`linkto`, `s`.`imageurl`, `s`.`ordering`
FROM `SERVICES` `s`
ORDER BY `s`.`ordering` DESC 
 Execution Time:0.24076414108276

SELECT `s`.`slideid`, `s`.`title`, `s`.`caption`, `s`.`linkto`, `s`.`imageurl`, `s`.`ordering`, `u`.`userid`, `u`.`username`
FROM `SLIDES` `s`
JOIN `USERS` `u` ON `s`.`userid` = `u`.`userid`
ORDER BY `s`.`ordering` DESC 
 Execution Time:0.25813388824463

SELECT `A`.`foodid`, `A`.`title`, `A`.`description`, `A`.`thumbnailurl`, `A`.`promotiontype`, `A`.`price`, `A`.`userid`
FROM `FOODS` `A`
WHERE `A`.`promotiontype` = '1'
ORDER BY `A`.`foodid` DESC
 LIMIT 1 
 Execution Time:0.25578308105469

SELECT `A`.`foodid`, `A`.`title`, `A`.`description`, `A`.`thumbnailurl`, `A`.`promotiontype`, `A`.`price`, `A`.`userid`
FROM `FOODS` `A`
WHERE `A`.`promotiontype` = '2'
ORDER BY `A`.`foodid` DESC
 LIMIT 1 
 Execution Time:0.25703001022339

SELECT DISTINCT(A.menuid),A.title, A.linkto, A.ordering, A.subof, A.status,(CASE WHEN B.menuid IS NOT NULL THEN 1 ELSE 0 END) AS parent 
			    FROM MENUS A 
				LEFT JOIN (SELECT menuid, subof FROM MENUS) B 
				ON A.menuid = B.subof
				ORDER BY A.subof,A.ordering 
 Execution Time:0.25087285041809

SELECT *, (SELECT COUNT(A.foodid) FROM FOODS A WHERE A.foodtypeid=B.foodtypeid) AS TOTL FROM FOODTYPES B ORDER BY B.title 
 Execution Time:0.26868891716003

SELECT `A`.`foodid`, `A`.`title` As `food_title`, `A`.`description` As `food_description`, `A`.`foodtypeid`, `A`.`thumbnailurl`, `A`.`promotiontype`, `A`.`price`, `A`.`userid`, `B`.`title` As `foodtype_title`, `B`.`description` As `footype_description`
FROM `FOODS` `A`
JOIN `FOODTYPES` `B` ON `A`.`foodtypeid`=`B`.`foodtypeid` 
 Execution Time:0.26655292510986

SELECT DISTINCT(A.menuid),A.title, A.linkto, A.ordering, A.subof, A.status,(CASE WHEN B.menuid IS NOT NULL THEN 1 ELSE 0 END) AS parent 
			    FROM MENUS A 
				LEFT JOIN (SELECT menuid, subof FROM MENUS) B 
				ON A.menuid = B.subof
				ORDER BY A.subof,A.ordering 
 Execution Time:0.28338503837585

SELECT `s`.`slideid`, `s`.`title`, `s`.`caption`, `s`.`linkto`, `s`.`imageurl`, `s`.`ordering`, `u`.`userid`, `u`.`username`
FROM `SLIDES` `s`
JOIN `USERS` `u` ON `s`.`userid` = `u`.`userid`
ORDER BY `s`.`ordering` DESC 
 Execution Time:0.23190093040466

SELECT `s`.`serviceid`, `s`.`title`, `s`.`description`, `s`.`linkto`, `s`.`imageurl`, `s`.`ordering`
FROM `SERVICES` `s`
ORDER BY `s`.`ordering` DESC 
 Execution Time:0.24825382232666

SELECT `A`.`foodid`, `A`.`title`, `A`.`description`, `A`.`thumbnailurl`, `A`.`promotiontype`, `A`.`price`, `A`.`userid`
FROM `FOODS` `A`
WHERE `A`.`promotiontype` = '1'
ORDER BY `A`.`foodid` DESC
 LIMIT 1 
 Execution Time:0.25778603553772

SELECT `A`.`foodid`, `A`.`title`, `A`.`description`, `A`.`thumbnailurl`, `A`.`promotiontype`, `A`.`price`, `A`.`userid`
FROM `FOODS` `A`
WHERE `A`.`promotiontype` = '2'
ORDER BY `A`.`foodid` DESC
 LIMIT 1 
 Execution Time:0.25825715065002

SELECT *
FROM `FOODTYPES`
ORDER BY `title` ASC 
 Execution Time:0.29890704154968

SELECT `A`.`foodid`, `A`.`title` As `food_title`, `A`.`description` As `food_description`, `A`.`foodtypeid`, `A`.`thumbnailurl`, `A`.`promotiontype`, `A`.`price`, `A`.`userid`, `B`.`title` As `foodtype_title`, `B`.`description` As `footype_description`
FROM `FOODS` `A`
JOIN `FOODTYPES` `B` ON `A`.`foodtypeid`=`B`.`foodtypeid` 
 Execution Time:0.28773307800293

SELECT DISTINCT(A.menuid),A.title, A.linkto, A.ordering, A.subof, A.status,(CASE WHEN B.menuid IS NOT NULL THEN 1 ELSE 0 END) AS parent 
			    FROM MENUS A 
				LEFT JOIN (SELECT menuid, subof FROM MENUS) B 
				ON A.menuid = B.subof
				ORDER BY A.subof,A.ordering 
 Execution Time:0.81310606002808

SELECT *, (SELECT COUNT(A.foodid) FROM FOODS A WHERE A.foodtypeid=B.foodtypeid) AS TOTL FROM FOODTYPES B ORDER BY B.title 
 Execution Time:0.25448894500732

SELECT `A`.`foodid`, `A`.`title` As `food_title`, `A`.`description` As `food_description`, `A`.`foodtypeid`, `A`.`thumbnailurl`, `A`.`promotiontype`, `A`.`price`, `A`.`userid`, `B`.`title` As `foodtype_title`, `B`.`description` As `footype_description`
FROM `FOODS` `A`
JOIN `FOODTYPES` `B` ON `A`.`foodtypeid`=`B`.`foodtypeid` 
 Execution Time:0.26142692565918

SELECT DISTINCT(A.menuid),A.title, A.linkto, A.ordering, A.subof, A.status,(CASE WHEN B.menuid IS NOT NULL THEN 1 ELSE 0 END) AS parent 
			    FROM MENUS A 
				LEFT JOIN (SELECT menuid, subof FROM MENUS) B 
				ON A.menuid = B.subof
				ORDER BY A.subof,A.ordering 
 Execution Time:0.265958070755

SELECT `A`.`foodid`, `A`.`title`, `A`.`description`, `A`.`thumbnailurl`, `A`.`promotiontype`, `A`.`price`, `A`.`userid`
FROM `FOODS` `A`
WHERE `A`.`promotiontype` = '2'
ORDER BY `A`.`foodid` DESC
 LIMIT 1 
 Execution Time:0.25050115585327

SELECT `A`.`foodid`, `A`.`title`, `A`.`description`, `A`.`thumbnailurl`, `A`.`promotiontype`, `A`.`price`, `A`.`userid`
FROM `FOODS` `A`
WHERE `A`.`promotiontype` = '1'
ORDER BY `A`.`foodid` DESC
 LIMIT 1 
 Execution Time:0.25776815414429

SELECT `s`.`serviceid`, `s`.`title`, `s`.`description`, `s`.`linkto`, `s`.`imageurl`, `s`.`ordering`
FROM `SERVICES` `s`
ORDER BY `s`.`ordering` DESC 
 Execution Time:0.26627111434937

SELECT `s`.`slideid`, `s`.`title`, `s`.`caption`, `s`.`linkto`, `s`.`imageurl`, `s`.`ordering`, `u`.`userid`, `u`.`username`
FROM `SLIDES` `s`
JOIN `USERS` `u` ON `s`.`userid` = `u`.`userid`
ORDER BY `s`.`ordering` DESC 
 Execution Time:0.269779920578

SELECT DISTINCT(A.menuid),A.title, A.linkto, A.ordering, A.subof, A.status,(CASE WHEN B.menuid IS NOT NULL THEN 1 ELSE 0 END) AS parent 
			    FROM MENUS A 
				LEFT JOIN (SELECT menuid, subof FROM MENUS) B 
				ON A.menuid = B.subof
				ORDER BY A.subof,A.ordering 
 Execution Time:0.24341416358948

SELECT DISTINCT(A.menuid),A.title, A.linkto, A.ordering, A.subof, A.status,(CASE WHEN B.menuid IS NOT NULL THEN 1 ELSE 0 END) AS parent 
			    FROM MENUS A 
				LEFT JOIN (SELECT menuid, subof FROM MENUS) B 
				ON A.menuid = B.subof
				ORDER BY A.subof,A.ordering 
 Execution Time:0.25735116004944

SELECT *, (SELECT COUNT(A.foodid) FROM FOODS A WHERE A.foodtypeid=B.foodtypeid) AS TOTL FROM FOODTYPES B ORDER BY B.title 
 Execution Time:0.25762009620667

SELECT `A`.`foodid`, `A`.`title` As `food_title`, `A`.`description` As `food_description`, `A`.`foodtypeid`, `A`.`thumbnailurl`, `A`.`promotiontype`, `A`.`price`, `A`.`userid`, `B`.`title` As `foodtype_title`, `B`.`description` As `footype_description`
FROM `FOODS` `A`
JOIN `FOODTYPES` `B` ON `A`.`foodtypeid`=`B`.`foodtypeid` 
 Execution Time:0.25874781608582

SELECT DISTINCT(A.menuid),A.title, A.linkto, A.ordering, A.subof, A.status,(CASE WHEN B.menuid IS NOT NULL THEN 1 ELSE 0 END) AS parent 
			    FROM MENUS A 
				LEFT JOIN (SELECT menuid, subof FROM MENUS) B 
				ON A.menuid = B.subof
				ORDER BY A.subof,A.ordering 
 Execution Time:0.25816988945007

SELECT DISTINCT(A.menuid),A.title, A.linkto, A.ordering, A.subof, A.status,(CASE WHEN B.menuid IS NOT NULL THEN 1 ELSE 0 END) AS parent 
			    FROM MENUS A 
				LEFT JOIN (SELECT menuid, subof FROM MENUS) B 
				ON A.menuid = B.subof
				ORDER BY A.subof,A.ordering 
 Execution Time:0.2370240688324

SELECT `s`.`serviceid`, `s`.`title`, `s`.`description`, `s`.`linkto`, `s`.`imageurl`, `s`.`ordering`
FROM `SERVICES` `s`
ORDER BY `s`.`ordering` DESC 
 Execution Time:0.22867798805237

SELECT `A`.`foodid`, `A`.`title`, `A`.`description`, `A`.`thumbnailurl`, `A`.`promotiontype`, `A`.`price`, `A`.`userid`
FROM `FOODS` `A`
WHERE `A`.`promotiontype` = '2'
ORDER BY `A`.`foodid` DESC
 LIMIT 1 
 Execution Time:0.23448801040649

SELECT `s`.`slideid`, `s`.`title`, `s`.`caption`, `s`.`linkto`, `s`.`imageurl`, `s`.`ordering`, `u`.`userid`, `u`.`username`
FROM `SLIDES` `s`
JOIN `USERS` `u` ON `s`.`userid` = `u`.`userid`
ORDER BY `s`.`ordering` DESC 
 Execution Time:0.27015590667725

SELECT `A`.`foodid`, `A`.`title`, `A`.`description`, `A`.`thumbnailurl`, `A`.`promotiontype`, `A`.`price`, `A`.`userid`
FROM `FOODS` `A`
WHERE `A`.`promotiontype` = '1'
ORDER BY `A`.`foodid` DESC
 LIMIT 1 
 Execution Time:0.24339985847473

SELECT *, (SELECT COUNT(A.foodid) FROM FOODS A WHERE A.foodtypeid=B.foodtypeid) AS TOTL FROM FOODTYPES B ORDER BY B.title 
 Execution Time:0.25621700286865

SELECT `A`.`foodid`, `A`.`title` As `food_title`, `A`.`description` As `food_description`, `A`.`foodtypeid`, `A`.`thumbnailurl`, `A`.`promotiontype`, `A`.`price`, `A`.`userid`, `B`.`title` As `foodtype_title`, `B`.`description` As `footype_description`
FROM `FOODS` `A`
JOIN `FOODTYPES` `B` ON `A`.`foodtypeid`=`B`.`foodtypeid` 
 Execution Time:0.25973296165466

SELECT DISTINCT(A.menuid),A.title, A.linkto, A.ordering, A.subof, A.status,(CASE WHEN B.menuid IS NOT NULL THEN 1 ELSE 0 END) AS parent 
			    FROM MENUS A 
				LEFT JOIN (SELECT menuid, subof FROM MENUS) B 
				ON A.menuid = B.subof
				ORDER BY A.subof,A.ordering 
 Execution Time:0.25763893127441

SELECT DISTINCT(A.menuid),A.title, A.linkto, A.ordering, A.subof, A.status,(CASE WHEN B.menuid IS NOT NULL THEN 1 ELSE 0 END) AS parent 
			    FROM MENUS A 
				LEFT JOIN (SELECT menuid, subof FROM MENUS) B 
				ON A.menuid = B.subof
				ORDER BY A.subof,A.ordering 
 Execution Time:0.25045990943909

SELECT `A`.`foodid`, `A`.`title`, `A`.`description`, `A`.`thumbnailurl`, `A`.`promotiontype`, `A`.`price`, `A`.`userid`
FROM `FOODS` `A`
WHERE `A`.`promotiontype` = '1'
ORDER BY `A`.`foodid` DESC
 LIMIT 1 
 Execution Time:0.22631406784058

SELECT `s`.`slideid`, `s`.`title`, `s`.`caption`, `s`.`linkto`, `s`.`imageurl`, `s`.`ordering`, `u`.`userid`, `u`.`username`
FROM `SLIDES` `s`
JOIN `USERS` `u` ON `s`.`userid` = `u`.`userid`
ORDER BY `s`.`ordering` DESC 
 Execution Time:0.2409451007843

SELECT `A`.`foodid`, `A`.`title`, `A`.`description`, `A`.`thumbnailurl`, `A`.`promotiontype`, `A`.`price`, `A`.`userid`
FROM `FOODS` `A`
WHERE `A`.`promotiontype` = '2'
ORDER BY `A`.`foodid` DESC
 LIMIT 1 
 Execution Time:0.24943113327026

SELECT `s`.`serviceid`, `s`.`title`, `s`.`description`, `s`.`linkto`, `s`.`imageurl`, `s`.`ordering`
FROM `SERVICES` `s`
ORDER BY `s`.`ordering` DESC 
 Execution Time:0.26029491424561

SELECT `p`.`pageid`, `p`.`title`, `p`.`body`, `u`.`userid`, `u`.`username`
FROM `PAGES` `p`
JOIN `USERS` `u` ON `p`.`userid` = `u`.`userid`
WHERE replace(LOWER(p.title),' ','') = 'aboutus'
 LIMIT 1 
 Execution Time:0.26341891288757

SELECT DISTINCT(A.menuid),A.title, A.linkto, A.ordering, A.subof, A.status,(CASE WHEN B.menuid IS NOT NULL THEN 1 ELSE 0 END) AS parent 
			    FROM MENUS A 
				LEFT JOIN (SELECT menuid, subof FROM MENUS) B 
				ON A.menuid = B.subof
				ORDER BY A.subof,A.ordering 
 Execution Time:0.26204395294189

SELECT DISTINCT(A.menuid),A.title, A.linkto, A.ordering, A.subof, A.status,(CASE WHEN B.menuid IS NOT NULL THEN 1 ELSE 0 END) AS parent 
			    FROM MENUS A 
				LEFT JOIN (SELECT menuid, subof FROM MENUS) B 
				ON A.menuid = B.subof
				ORDER BY A.subof,A.ordering 
 Execution Time:0.25260710716248

SELECT DISTINCT(A.menuid),A.title, A.linkto, A.ordering, A.subof, A.status,(CASE WHEN B.menuid IS NOT NULL THEN 1 ELSE 0 END) AS parent 
			    FROM MENUS A 
				LEFT JOIN (SELECT menuid, subof FROM MENUS) B 
				ON A.menuid = B.subof
				ORDER BY A.subof,A.ordering 
 Execution Time:0.2406210899353

SELECT DISTINCT(A.menuid),A.title, A.linkto, A.ordering, A.subof, A.status,(CASE WHEN B.menuid IS NOT NULL THEN 1 ELSE 0 END) AS parent 
			    FROM MENUS A 
				LEFT JOIN (SELECT menuid, subof FROM MENUS) B 
				ON A.menuid = B.subof
				ORDER BY A.subof,A.ordering 
 Execution Time:0.23009300231934

SELECT DISTINCT(A.menuid),A.title, A.linkto, A.ordering, A.subof, A.status,(CASE WHEN B.menuid IS NOT NULL THEN 1 ELSE 0 END) AS parent 
			    FROM MENUS A 
				LEFT JOIN (SELECT menuid, subof FROM MENUS) B 
				ON A.menuid = B.subof
				ORDER BY A.subof,A.ordering 
 Execution Time:0.25017094612122

SELECT DISTINCT(A.menuid),A.title, A.linkto, A.ordering, A.subof, A.status,(CASE WHEN B.menuid IS NOT NULL THEN 1 ELSE 0 END) AS parent 
			    FROM MENUS A 
				LEFT JOIN (SELECT menuid, subof FROM MENUS) B 
				ON A.menuid = B.subof
				ORDER BY A.subof,A.ordering 
 Execution Time:0.25040793418884

SELECT DISTINCT(A.menuid),A.title, A.linkto, A.ordering, A.subof, A.status,(CASE WHEN B.menuid IS NOT NULL THEN 1 ELSE 0 END) AS parent 
			    FROM MENUS A 
				LEFT JOIN (SELECT menuid, subof FROM MENUS) B 
				ON A.menuid = B.subof
				ORDER BY A.subof,A.ordering 
 Execution Time:0.24175310134888

