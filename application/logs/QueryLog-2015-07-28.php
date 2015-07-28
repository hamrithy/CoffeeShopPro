SELECT COUNT(*) AS `numrows` FROM `FOODS` 
 Execution Time:0.31701803207397

SELECT COUNT(*) AS `numrows` FROM `FOODTYPES` 
 Execution Time:0.30601787567139

SELECT COUNT(*) AS `numrows` FROM `POSTS` 
 Execution Time:0.29701709747314

SELECT COUNT(*) AS `numrows` FROM `PAGES` 
 Execution Time:0.3240180015564

SELECT *
FROM `FOODS`
 LIMIT 5 
 Execution Time:0.3520200252533

SELECT *
FROM `POSTS`
 LIMIT 5 
 Execution Time:0.31301808357239

SELECT *
FROM `MENUS` 
 Execution Time:0.27801585197449

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.28901600837708

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.28201603889465

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.28901600837708

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.27601599693298

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.28901696205139

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.30401682853699

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.27601599693298

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.28401613235474

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.31901812553406

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.3070170879364

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.27701592445374

SELECT `A`.`foodid`, `A`.`title` As `food_title`, `A`.`description` As `food_description`, `A`.`foodtypeid`, `A`.`thumbnailurl`, `A`.`promotiontype`, `A`.`price`, `A`.`userid`, `B`.`title` As `foodtype_title`, `B`.`description` As `footype_description`
FROM `FOODS` `A`
JOIN `FOODTYPES` `B` ON `A`.`foodtypeid`=`B`.`foodtypeid` 
 Execution Time:0.24201393127441

SELECT *
FROM `MENUS` 
 Execution Time:0.32501792907715

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.2650158405304

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.25701379776001

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.25601482391357

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.25601506233215

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.25601506233215

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.27301502227783

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.34002017974854

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.29001688957214

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.3540198802948

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.25901484489441

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.84504795074463

SELECT *
FROM `MENUS` 
 Execution Time:0.35802102088928

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.27701616287231

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.26801490783691

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.26801586151123

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.26401519775391

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.29201698303223

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.27601480484009

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.26801490783691

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.27101492881775

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.26501488685608

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.27401494979858

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.26401519775391

SELECT *
FROM `MENUS` 
 Execution Time:0.29901695251465

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.30301713943481

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.25601506233215

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.32101798057556

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.26401495933533

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.3520200252533

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.26401495933533

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.27401614189148

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.25701498985291

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.25601410865784

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.25701498985291

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.25601506233215

SELECT `A`.`foodid`, `A`.`title` As `food_title`, `A`.`description` As `food_description`, `A`.`foodtypeid`, `A`.`thumbnailurl`, `A`.`promotiontype`, `A`.`price`, `A`.`userid`, `B`.`title` As `foodtype_title`, `B`.`description` As `footype_description`
FROM `FOODS` `A`
JOIN `FOODTYPES` `B` ON `A`.`foodtypeid`=`B`.`foodtypeid` 
 Execution Time:0.22801303863525

SELECT *
FROM `MENUS` 
 Execution Time:0.31801795959473

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.27701592445374

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.29301691055298

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.33501887321472

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.31801819801331

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.33201909065247

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.29201698303223

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.27801609039307

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.31701803207397

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.29001688957214

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.28401589393616

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.36002087593079

DELETE FROM `FOODS`
WHERE `foodid` = '3' 
 Execution Time:0.29401707649231

SELECT *
FROM `MENUS` 
 Execution Time:0.31001806259155

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.29301714897156

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.31001710891724

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.30401706695557

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.31701803207397

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.34601998329163

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.28201603889465

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.28701686859131

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.27501583099365

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.28401589393616

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.34101915359497

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.29001688957214

SELECT `A`.`foodid`, `A`.`title` As `food_title`, `A`.`description` As `food_description`, `A`.`foodtypeid`, `A`.`thumbnailurl`, `A`.`promotiontype`, `A`.`price`, `A`.`userid`, `B`.`title` As `foodtype_title`, `B`.`description` As `footype_description`
FROM `FOODS` `A`
JOIN `FOODTYPES` `B` ON `A`.`foodtypeid`=`B`.`foodtypeid` 
 Execution Time:0.31201791763306

SELECT *
FROM `MENUS` 
 Execution Time:0.26201510429382

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.26101493835449

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.26101493835449

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.26201510429382

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.26701498031616

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.26201486587524

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.27401614189148

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.32001900672913

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.29901695251465

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.35501980781555

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.30801796913147

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.3520200252533

SELECT *
FROM `MENUS` 
 Execution Time:0.35301995277405

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.35301995277405

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.35102009773254

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.3370189666748

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.35601997375488

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.29401683807373

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.30701804161072

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.26401519775391

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.31401801109314

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.27301621437073

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.3350191116333

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.2980170249939

SELECT *
FROM `MENUS` 
 Execution Time:0.30701804161072

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.29301691055298

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.32101798057556

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.3000180721283

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.29301595687866

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.30301785469055

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.3280189037323

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.26701498031616

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.2440140247345

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.24201416969299

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.26401495933533

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.29001688957214

SELECT *
FROM `FOODTYPES`
ORDER BY `foodtypeid` DESC 
 Execution Time:0.3630211353302

SELECT *
FROM `MENUS` 
 Execution Time:0.3370189666748

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.31301784515381

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.3070170879364

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.31701803207397

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.33501887321472

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.33901882171631

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.33401894569397

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.34501910209656

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.37002205848694

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.36202001571655

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.32901883125305

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.31601786613464

SELECT *
FROM `FOODTYPES`
ORDER BY `foodtypeid` DESC 
 Execution Time:0.29001688957214

SELECT *
FROM `MENUS` 
 Execution Time:0.31801819801331

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.33901906013489

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.33101892471313

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.36602115631104

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.29401707649231

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.2850170135498

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.31301784515381

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.33601903915405

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.34001898765564

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.28801608085632

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.28901696205139

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.30301690101624

SELECT *
FROM `MENUS` 
 Execution Time:0.25301384925842

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.34002017974854

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.24201416969299

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.2980170249939

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.32901906967163

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.29501700401306

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.29301714897156

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.270015001297

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.31001782417297

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.246013879776

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.25501489639282

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.2980170249939

SELECT *
FROM `MENUS` 
 Execution Time:0.33601903915405

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.24801397323608

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.29901790618896

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.32301807403564

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.25801515579224

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.29601693153381

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.29901695251465

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.28901696205139

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.31501793861389

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.31401801109314

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.34001898765564

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.32301902770996

SELECT *
FROM `FOODTYPES`
ORDER BY `foodtypeid` DESC 
 Execution Time:0.29901695251465

SELECT *
FROM `MENUS` 
 Execution Time:0.32301807403564

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.31501793861389

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.34601902961731

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.28201699256897

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.26901507377625

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.26701521873474

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.30301785469055

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.3000168800354

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.36202096939087

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.34502005577087

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.29901695251465

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.25501394271851

DELETE FROM `FOODTYPES`
WHERE `foodtypeid` = '32' 
 Execution Time:0.29401707649231

SELECT *
FROM `FOODTYPES`
ORDER BY `foodtypeid` DESC 
 Execution Time:0.23800802230835

DELETE FROM `FOODTYPES`
WHERE `foodtypeid` = '32' 
 Execution Time:0.32601809501648

SELECT *
FROM `FOODTYPES`
ORDER BY `foodtypeid` DESC 
 Execution Time:0.36102104187012

SELECT *
FROM `FOODTYPES`
ORDER BY `foodtypeid` DESC 
 Execution Time:2.2201268672943

SELECT *
FROM `MENUS` 
 Execution Time:0.41202306747437

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.3890221118927

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.39502310752869

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:1.250070810318

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.41202402114868

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.41102313995361

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.39002299308777

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.40102291107178

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.39202189445496

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.40902400016785

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.40802311897278

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.37902212142944

SELECT *
FROM `MENUS` 
 Execution Time:0.37902212142944

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.37102103233337

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.35802102088928

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.3910219669342

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.36102104187012

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.36602091789246

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.34001898765564

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.37602090835571

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.90805196762085

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.34202003479004

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.37502098083496

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.34301996231079

SELECT *
FROM `MENUS` 
 Execution Time:0.3780210018158

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.37602210044861

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.38702201843262

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.34802007675171

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.34802007675171

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.33001899719238

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.36102104187012

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.37602090835571

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.95805501937866

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.37602186203003

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.37402105331421

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.36902093887329

SELECT *
FROM `FOODTYPES`
ORDER BY `foodtypeid` DESC 
 Execution Time:1.2800731658936

SELECT *
FROM `MENUS` 
 Execution Time:0.29201698303223

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.29901814460754

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.31201696395874

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.32101798057556

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.33301901817322

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.31901788711548

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.3370201587677

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.33201909065247

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.32801914215088

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.31901788711548

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.34401988983154

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.34201908111572

SELECT *
FROM `MENUS` 
 Execution Time:0.30301690101624

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.31001687049866

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.3260190486908

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.33001899719238

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.29201698303223

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.29001593589783

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.3000180721283

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.32801795005798

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.31701898574829

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.34201884269714

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.33101892471313

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.34502005577087

SELECT *
FROM `FOODTYPES`
ORDER BY `foodtypeid` DESC 
 Execution Time:0.27701497077942

SELECT *
FROM `MENUS` 
 Execution Time:0.32701778411865

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.31701803207397

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.29001712799072

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.30401706695557

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.31701803207397

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.33001899719238

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.35702109336853

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.32201814651489

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.34101986885071

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.85004782676697

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.3110179901123

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.33101892471313

SELECT *
FROM `MENUS` 
 Execution Time:0.36102104187012

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.31501817703247

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.34802007675171

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.32201886177063

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.31601786613464

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.32701897621155

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.35001993179321

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.36402106285095

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.35502004623413

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.35001993179321

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.32201886177063

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.34601879119873

SELECT *
FROM `FOODTYPES`
ORDER BY `foodtypeid` DESC 
 Execution Time:0.34902000427246

SELECT *
FROM `MENUS` 
 Execution Time:0.31901907920837

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.33001899719238

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.32501792907715

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.32701921463013

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.31501793861389

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.31801891326904

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.33401918411255

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.3350191116333

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.32301807403564

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.33501887321472

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.33401918411255

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.31001806259155

SELECT *
FROM `MENUS` 
 Execution Time:0.27301597595215

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.32701897621155

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.28001594543457

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.27901601791382

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.92505288124084

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.28101587295532

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.31001806259155

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.30901789665222

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.29301595687866

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.31501793861389

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.32001805305481

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.33301901817322

SELECT *
FROM `FOODTYPES`
ORDER BY `foodtypeid` DESC 
 Execution Time:0.3540210723877

SELECT *
FROM `MENUS` 
 Execution Time:0.26201510429382

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.26401495933533

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.26501488685608

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.94705414772034

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.32201790809631

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.32401895523071

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.27301502227783

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.31201696395874

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.27901601791382

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.29401588439941

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.32401895523071

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.27001595497131

SELECT *
FROM `MENUS` 
 Execution Time:0.32301902770996

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.32901906967163

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.32201790809631

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.31301712989807

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.32201790809631

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.28701615333557

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.23201298713684

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.28201603889465

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.28401613235474

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.29201602935791

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.31401801109314

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.32101893424988

SELECT *
FROM `FOODTYPES`
ORDER BY `foodtypeid` DESC 
 Execution Time:0.3520200252533

SELECT *
FROM `MENUS` 
 Execution Time:0.29101610183716

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.28901600837708

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.2740159034729

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.32001781463623

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.31601786613464

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.31401801109314

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.30301713943481

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.32001805305481

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.32101893424988

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.26801490783691

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.27701616287231

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.31201791763306

SELECT *
FROM `MENUS` 
 Execution Time:0.29901695251465

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.28601622581482

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.32701897621155

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.32501816749573

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.3000180721283

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.28701591491699

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.3110179901123

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.31301808357239

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.31801795959473

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.87905097007751

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.3350191116333

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.28401613235474

SELECT *
FROM `FOODTYPES`
ORDER BY `foodtypeid` DESC 
 Execution Time:0.3560209274292

SELECT *
FROM `MENUS` 
 Execution Time:0.30401706695557

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.31101703643799

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.3240180015564

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.34001994132996

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.35601997375488

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.35001993179321

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.36002087593079

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.34501981735229

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.35001993179321

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.3520200252533

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.33501887321472

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.33401894569397

SELECT *
FROM `MENUS` 
 Execution Time:0.33301901817322

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.32701802253723

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.32401919364929

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.3070170879364

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.33001804351807

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.3020179271698

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.3070170879364

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.33001804351807

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.32901906967163

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.2980170249939

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.82004594802856

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.30901694297791

SELECT *
FROM `FOODTYPES`
ORDER BY `foodtypeid` DESC 
 Execution Time:0.3540198802948

SELECT *
FROM `MENUS` 
 Execution Time:0.32501792907715

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.31701803207397

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.30801701545715

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.31601810455322

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.31301712989807

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.33401894569397

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.31601810455322

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.29701709747314

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.29601693153381

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.31901788711548

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.30401706695557

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.32301807403564

SELECT *
FROM `MENUS` 
 Execution Time:0.37002110481262

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.37402105331421

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.37602186203003

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.37702107429504

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.37902212142944

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.36802101135254

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.37602186203003

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.38902187347412

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.38802194595337

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.37702107429504

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.38802194595337

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.37202215194702

SELECT *
FROM `FOODTYPES`
ORDER BY `foodtypeid` DESC 
 Execution Time:0.34702014923096

SELECT *
FROM `MENUS` 
 Execution Time:0.34201884269714

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.31701803207397

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.31701803207397

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.32901906967163

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.31601810455322

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.34301996231079

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.35402011871338

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.37202095985413

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.35402083396912

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.34601998329163

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.34601998329163

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.33101892471313

SELECT *
FROM `MENUS` 
 Execution Time:0.30901718139648

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.32001900672913

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.31601786613464

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.30401682853699

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.35001993179321

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.30201697349548

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.31301808357239

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.32901906967163

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.34702014923096

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.34502005577087

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.30101704597473

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.33401894569397

SELECT *
FROM `FOODTYPES`
ORDER BY `foodtypeid` DESC 
 Execution Time:0.35002017021179

SELECT *
FROM `MENUS` 
 Execution Time:0.29201698303223

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:1.0220580101013

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.28601694107056

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.25501489639282

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.31101679801941

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.28701686859131

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.27201581001282

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.29601693153381

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.28801608085632

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.27101588249207

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.2720148563385

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.29301691055298

SELECT COUNT(*) AS `numrows` FROM `FOODS` 
 Execution Time:0.30301690101624

SELECT COUNT(*) AS `numrows` FROM `FOODTYPES` 
 Execution Time:0.3090181350708

SELECT COUNT(*) AS `numrows` FROM `POSTS` 
 Execution Time:0.3520200252533

SELECT COUNT(*) AS `numrows` FROM `PAGES` 
 Execution Time:0.35102009773254

SELECT *
FROM `FOODS`
 LIMIT 5 
 Execution Time:0.29001712799072

SELECT *
FROM `POSTS`
 LIMIT 5 
 Execution Time:0.32501792907715

SELECT *
FROM `MENUS` 
 Execution Time:0.24201393127441

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.23901414871216

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.32101798057556

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.33201909065247

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.30901718139648

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.24001407623291

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.24701404571533

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.28201603889465

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.24001288414001

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.25901508331299

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.2910168170929

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.29301691055298

SELECT *
FROM `MENUS` 
 Execution Time:0.31301808357239

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.28301596641541

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.30601692199707

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.34601998329163

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.31601810455322

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.28101587295532

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.27501511573792

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.28401708602905

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.30101704597473

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.33201885223389

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.28101587295532

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.26901602745056

SELECT *
FROM `MENUS` 
 Execution Time:0.32201790809631

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.34402012825012

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.31701803207397

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.31001782417297

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.32001805305481

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.31801891326904

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.32101798057556

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.31401801109314

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.30401802062988

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.31401801109314

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.32201790809631

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.32701897621155

SELECT *
FROM `MENUS` 
 Execution Time:0.28801584243774

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.30501794815063

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.31601810455322

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.33901906013489

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.29401588439941

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.33401989936829

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.3070170879364

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.89705204963684

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.30901718139648

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.30501699447632

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.30101704597473

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.3020179271698

SELECT *
FROM `MENUS` 
 Execution Time:1.0850620269775

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.29601693153381

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.30801796913147

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.31001710891724

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.31001806259155

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.30801796913147

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.3260190486908

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.28701615333557

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.30101704597473

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.30301809310913

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.30201697349548

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.3040177822113

SELECT *
FROM `MENUS` 
 Execution Time:0.33401918411255

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.33802008628845

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.35802006721497

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.33301877975464

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.33101892471313

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.33502006530762

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.32701802253723

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.34701991081238

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.31301808357239

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.32301902770996

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.3370189666748

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.33502006530762

SELECT *
FROM `FOODTYPES`
ORDER BY `foodtypeid` DESC 
 Execution Time:0.3260190486908

SELECT *
FROM `MENUS` 
 Execution Time:0.32501912117004

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.3370189666748

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.34102010726929

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.35402011871338

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.33001899719238

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.3090181350708

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.32101798057556

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.32401895523071

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.31401801109314

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.33301901817322

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.34802007675171

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.32801914215088

SELECT *
FROM `MENUS` 
 Execution Time:0.3520200252533

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.35502004623413

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.35902118682861

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:1.040060043335

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.33601903915405

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.34601998329163

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.35901999473572

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.36402106285095

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.35502099990845

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.3540198802948

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.35702085494995

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.3240180015564

SELECT *
FROM `FOODTYPES`
ORDER BY `foodtypeid` DESC 
 Execution Time:0.33301901817322

SELECT *
FROM `MENUS` 
 Execution Time:0.34202003479004

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.32501816749573

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.30601716041565

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.32401895523071

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.94805407524109

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.31501817703247

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.32201910018921

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.30401706695557

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.31001782417297

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.34801983833313

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.33401894569397

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.32501912117004

SELECT *
FROM `MENUS` 
 Execution Time:0.30901789665222

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.31701803207397

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.32001805305481

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.32201886177063

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.31001782417297

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.31501793861389

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.32901906967163

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.30901718139648

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.3390200138092

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.3370189666748

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.34701991081238

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.3090181350708

SELECT *
FROM `FOODTYPES`
ORDER BY `foodtypeid` DESC 
 Execution Time:0.34601998329163

SELECT *
FROM `MENUS` 
 Execution Time:0.37602210044861

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.3520200252533

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.35101985931396

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.38502216339111

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.39002180099487

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.37202095985413

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.34102010726929

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.37602114677429

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.34701991081238

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.3540210723877

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.3610200881958

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.3610200881958

SELECT *
FROM `MENUS` 
 Execution Time:0.33601903915405

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.32201910018921

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.29901695251465

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.32401895523071

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.33001899719238

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.35502004623413

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.34502005577087

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.36202096939087

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.34101891517639

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.34602022171021

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.33401894569397

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.34801983833313

SELECT *
FROM `FOODTYPES`
ORDER BY `foodtypeid` DESC 
 Execution Time:0.31001806259155

SELECT *
FROM `MENUS` 
 Execution Time:0.32901906967163

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.3630211353302

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.36902093887329

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.35102009773254

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.33802008628845

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.35201978683472

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.35102009773254

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.34202003479004

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.35601997375488

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.32401895523071

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.31501817703247

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.34301996231079

SELECT *
FROM `MENUS` 
 Execution Time:0.34401893615723

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.35802102088928

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.32401895523071

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.34601902961731

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.34001994132996

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.3520200252533

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.35502004623413

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.35502004623413

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.36802101135254

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.35301995277405

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.37202215194702

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.35002017021179

SELECT *
FROM `FOODTYPES`
ORDER BY `foodtypeid` DESC 
 Execution Time:0.37402200698853

SELECT *
FROM `MENUS` 
 Execution Time:0.31901907920837

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.33301901817322

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.33501887321472

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.33201885223389

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.34501981735229

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.33301901817322

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.31301808357239

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.2980170249939

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.31301808357239

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.33101892471313

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.32201910018921

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.32401919364929

SELECT *
FROM `MENUS` 
 Execution Time:0.35001993179321

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.34402012825012

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.34301900863647

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.33801984786987

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.37302088737488

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.36302089691162

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.3560209274292

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.34601902961731

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.34501910209656

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.35102009773254

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.31901907920837

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.35002017021179

SELECT *
FROM `FOODTYPES`
ORDER BY `foodtypeid` DESC 
 Execution Time:0.33101797103882

SELECT *
FROM `MENUS` 
 Execution Time:0.30801796913147

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.32201910018921

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.32701802253723

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.32501912117004

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.31901812553406

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.31001806259155

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.32701897621155

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.33901906013489

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.32901811599731

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.31301808357239

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.30801796913147

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.31401801109314

SELECT *
FROM `MENUS` 
 Execution Time:0.35101985931396

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.3260190486908

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.33101916313171

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.34101891517639

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.32701897621155

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.32901883125305

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.33401894569397

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.34301996231079

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.32301783561707

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.33001804351807

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.32801914215088

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.32101893424988

SELECT *
FROM `MENUS` 
 Execution Time:0.31001806259155

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.30401706695557

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.32201886177063

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.34101891517639

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.33601999282837

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.95705389976501

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.31901884078979

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.31001806259155

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.33801913261414

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.27701592445374

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.31301808357239

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.3260190486908

SELECT *
FROM `FOODTYPES`
ORDER BY `foodtypeid` DESC 
 Execution Time:0.3090181350708

SELECT *
FROM `MENUS` 
 Execution Time:0.31901812553406

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.31801795959473

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.3520200252533

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.32501792907715

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.35702085494995

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.3240180015564

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.36002016067505

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.35502004623413

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:2.0471169948578

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.33201909065247

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.34402012825012

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.36502003669739

SELECT *
FROM `MENUS` 
 Execution Time:0.3630211353302

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.35102009773254

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:1.1120629310608

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.34802007675171

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.32201814651489

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.33601903915405

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.3260190486908

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.3560209274292

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.35301995277405

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.94805407524109

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.33001899719238

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.34201979637146

SELECT *
FROM `FOODTYPES`
ORDER BY `foodtypeid` DESC 
 Execution Time:0.29801678657532

SELECT *
FROM `MENUS` 
 Execution Time:0.3780210018158

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.35001993179321

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.29601716995239

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.3540198802948

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.28601694107056

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.31001687049866

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.27801609039307

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.34202003479004

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.35802006721497

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.29101610183716

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.27301597595215

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.27301597595215

SELECT *
FROM `MENUS` 
 Execution Time:0.23501396179199

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.23401284217834

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.23401308059692

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.23601293563843

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.23401284217834

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.25901508331299

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.23501300811768

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.24001407623291

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.23401403427124

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.23501300811768

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.23401403427124

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.23501300811768

SELECT *
FROM `FOODTYPES`
ORDER BY `foodtypeid` DESC 
 Execution Time:0.26401519775391

SELECT *
FROM `MENUS` 
 Execution Time:0.30401706695557

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.22701287269592

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.22801303863525

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.22701287269592

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.23201394081116

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.2270131111145

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.22801303863525

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.2740159034729

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.22801280021667

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.29301691055298

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.22701287269592

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.22801303863525

SELECT *
FROM `MENUS` 
 Execution Time:0.27801609039307

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.26601505279541

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.24901413917542

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.25201511383057

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.24801421165466

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.24901390075684

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.29401612281799

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.2790150642395

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.31901788711548

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.2980170249939

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.24801397323608

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.24901485443115

SELECT *
FROM `FOODTYPES`
ORDER BY `foodtypeid` DESC 
 Execution Time:0.24701404571533

SELECT *
FROM `MENUS` 
 Execution Time:0.27701497077942

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.27501511573792

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.27601504325867

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.28201603889465

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.27701497077942

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.27901601791382

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.27601599693298

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.27501606941223

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.27701592445374

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.27501583099365

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.28401589393616

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.27601599693298

SELECT *
FROM `MENUS` 
 Execution Time:0.25701403617859

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.25601387023926

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.26801586151123

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.25601387023926

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.25901389122009

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.25601482391357

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.25601482391357

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.25701403617859

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.25701403617859

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.25801491737366

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.27901601791382

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.28201603889465

SELECT *
FROM `FOODTYPES`
ORDER BY `foodtypeid` DESC 
 Execution Time:0.29401588439941

SELECT *
FROM `MENUS` 
 Execution Time:0.30601692199707

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.30501818656921

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.31001806259155

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.31001710891724

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.31501793861389

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.28301596641541

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.30101704597473

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.31201791763306

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.30201697349548

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.29301714897156

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.29701709747314

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.3000180721283

SELECT *
FROM `MENUS` 
 Execution Time:0.29501700401306

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.29801797866821

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.30201697349548

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.26401495933533

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.29001712799072

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.28401613235474

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.28601598739624

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.26301598548889

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.29101610183716

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.28301692008972

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.28901600837708

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.28901696205139

SELECT *
FROM `FOODTYPES`
ORDER BY `foodtypeid` DESC 
 Execution Time:0.27701616287231

SELECT *
FROM `MENUS` 
 Execution Time:0.30701804161072

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.31701803207397

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.31801915168762

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.35901999473572

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.35301995277405

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.33801889419556

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.30501699447632

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.31501913070679

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.31701803207397

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.30901718139648

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.37302112579346

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.30601692199707

SELECT *
FROM `MENUS` 
 Execution Time:0.32101917266846

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.3280189037323

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.33201909065247

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.33901906013489

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.34101986885071

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.35402011871338

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.34502005577087

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.36102080345154

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.34501910209656

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.35502004623413

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.36702108383179

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.34101915359497

SELECT *
FROM `FOODTYPES`
ORDER BY `foodtypeid` DESC 
 Execution Time:0.30601716041565

SELECT *
FROM `MENUS` 
 Execution Time:0.27501606941223

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.29501700401306

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.29301691055298

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.3240180015564

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.33501982688904

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.34902000427246

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.35502004623413

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.3630211353302

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.37202095985413

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.36602091789246

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.32901906967163

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.35002017021179

SELECT *
FROM `MENUS` 
 Execution Time:0.28801584243774

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.24801397323608

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.27501583099365

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.26901483535767

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.2720160484314

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.29501700401306

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.28401589393616

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.25101494789124

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.30601716041565

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.33101916313171

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.30201816558838

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.30401706695557

SELECT *
FROM `FOODTYPES`
ORDER BY `foodtypeid` DESC 
 Execution Time:0.31901884078979

SELECT *
FROM `MENUS` 
 Execution Time:0.26201510429382

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.29701709747314

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.34101891517639

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.34202003479004

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.33201909065247

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.33601903915405

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.28301692008972

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.29601693153381

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.33301901817322

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.89005088806152

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.32301783561707

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.34902000427246

SELECT *
FROM `MENUS` 
 Execution Time:0.2910168170929

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.28801584243774

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.28701591491699

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.34401988983154

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.29701685905457

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.29701709747314

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.34701991081238

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.32501792907715

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.31601810455322

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.35402011871338

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.34601998329163

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.32701897621155

SELECT *
FROM `FOODTYPES`
ORDER BY `foodtypeid` DESC 
 Execution Time:0.3820219039917

SELECT *
FROM `MENUS` 
 Execution Time:0.32701897621155

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.35002017021179

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.31801795959473

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.32901811599731

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.37502217292786

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.34301996231079

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.31801795959473

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.31401801109314

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.35301995277405

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.32701897621155

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.29601716995239

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.32201886177063

SELECT *
FROM `MENUS` 
 Execution Time:0.27101492881775

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.27101612091064

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.27101492881775

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.28901696205139

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.27701616287231

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.35301995277405

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.29901695251465

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.27001595497131

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.27101492881775

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.33301901817322

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.28901600837708

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.34101986885071

SELECT `A`.`foodid`, `A`.`title` As `food_title`, `A`.`description` As `food_description`, `A`.`foodtypeid`, `A`.`thumbnailurl`, `A`.`promotiontype`, `A`.`price`, `A`.`userid`, `B`.`title` As `foodtype_title`, `B`.`description` As `footype_description`
FROM `FOODS` `A`
JOIN `FOODTYPES` `B` ON `A`.`foodtypeid`=`B`.`foodtypeid` 
 Execution Time:0.30101799964905

SELECT *
FROM `MENUS` 
 Execution Time:0.27901601791382

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.22701287269592

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.22701287269592

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.22601294517517

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.22701287269592

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.31401801109314

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:1.6940968036652

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.23201298713684

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.22601294517517

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.2270131111145

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.2270131111145

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.2270131111145

DELETE FROM `FOODS`
WHERE `foodid` = '5' 
 Execution Time:0.23201394081116

SELECT *
FROM `MENUS` 
 Execution Time:0.26301503181458

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.98405599594116

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.27301597595215

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.34401988983154

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.263014793396

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.31901788711548

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.27801585197449

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.33801913261414

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.32701802253723

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.29101705551147

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.3000168800354

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.33001899719238

SELECT `A`.`foodid`, `A`.`title` As `food_title`, `A`.`description` As `food_description`, `A`.`foodtypeid`, `A`.`thumbnailurl`, `A`.`promotiontype`, `A`.`price`, `A`.`userid`, `B`.`title` As `foodtype_title`, `B`.`description` As `footype_description`
FROM `FOODS` `A`
JOIN `FOODTYPES` `B` ON `A`.`foodtypeid`=`B`.`foodtypeid` 
 Execution Time:0.3280189037323

SELECT *
FROM `MENUS` 
 Execution Time:0.30701684951782

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.32301783561707

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.29701685905457

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.28201580047607

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.26501607894897

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.26701498031616

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.26601505279541

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.26401495933533

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.26601600646973

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.26801490783691

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.31401801109314

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.26401495933533

SELECT *
FROM `MENUS` 
 Execution Time:0.26001405715942

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.25901389122009

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.25901389122009

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.25901484489441

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.25901484489441

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.26001501083374

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.25901484489441

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.25901508331299

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.25901508331299

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.25901508331299

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.25901508331299

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.25901412963867

SELECT *
FROM `FOODTYPES`
ORDER BY `foodtypeid` DESC 
 Execution Time:0.24801397323608

SELECT *
FROM `MENUS` 
 Execution Time:0.26201510429382

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.26301503181458

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.28201603889465

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.26101517677307

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.26101493835449

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.26901507377625

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.26201510429382

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.26701498031616

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.27501606941223

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.26201510429382

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.26201510429382

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.26101493835449

SELECT *
FROM `MENUS` 
 Execution Time:0.30101704597473

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.25401401519775

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.25401496887207

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.25401401519775

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.26901578903198

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.35701990127563

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.25601482391357

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.30701780319214

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.30801701545715

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.34802007675171

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.25801515579224

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.29901695251465

SELECT *
FROM `FOODTYPES`
ORDER BY `foodtypeid` DESC 
 Execution Time:0.3370189666748

SELECT *
FROM `MENUS` 
 Execution Time:0.30701684951782

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.30401682853699

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.31401801109314

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.31901812553406

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.34601998329163

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.3110179901123

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.35502004623413

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.34301996231079

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.31201815605164

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.35102009773254

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.34001994132996

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.31401801109314

SELECT *
FROM `MENUS` 
 Execution Time:0.22801280021667

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.23001289367676

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.22801280021667

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.23001289367676

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.22701287269592

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.22601294517517

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.22801303863525

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.22601294517517

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.22901296615601

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.22901320457458

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.24001407623291

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.25901508331299

SELECT COUNT(*) AS `numrows` FROM `FOODS` 
 Execution Time:0.3370189666748

SELECT COUNT(*) AS `numrows` FROM `FOODTYPES` 
 Execution Time:0.38402199745178

SELECT COUNT(*) AS `numrows` FROM `POSTS` 
 Execution Time:0.36202096939087

SELECT COUNT(*) AS `numrows` FROM `PAGES` 
 Execution Time:0.34601902961731

SELECT *
FROM `FOODS`
 LIMIT 5 
 Execution Time:0.36802101135254

SELECT *
FROM `POSTS`
 LIMIT 5 
 Execution Time:1.6350939273834

SELECT *
FROM `MENUS` 
 Execution Time:0.24801397323608

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.31401801109314

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.2980170249939

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.30301713943481

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.32401895523071

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.3280189037323

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.27101516723633

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.29101705551147

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.30201697349548

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.33001780509949

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.35301995277405

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.30701684951782

SELECT *
FROM `MENUS` 
 Execution Time:0.2850170135498

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.24001288414001

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.24001288414001

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.31601786613464

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.24501395225525

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.29801678657532

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.27501606941223

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.28401613235474

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.35001993179321

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.32101798057556

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.24001288414001

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.28101587295532

SELECT *
FROM `FOODTYPES`
ORDER BY `foodtypeid` DESC 
 Execution Time:0.33301901817322

SELECT *
FROM `MENUS` 
 Execution Time:0.34402012825012

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.25201392173767

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.2440140247345

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.23701286315918

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.23301291465759

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.28601598739624

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.33501887321472

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.33601903915405

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.26201510429382

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.31801795959473

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.27701616287231

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.23301291465759

SELECT *
FROM `MENUS` 
 Execution Time:0.33801984786987

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.37302088737488

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.38602209091187

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.32701802253723

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.31501817703247

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.31501793861389

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.30501699447632

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.31301784515381

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.34701991081238

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.35502004623413

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.37102198600769

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.37402105331421

SELECT *
FROM `FOODTYPES`
ORDER BY `foodtypeid` DESC 
 Execution Time:0.34001898765564

SELECT *
FROM `MENUS` 
 Execution Time:0.2810161113739

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.27901601791382

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.26801514625549

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.26701521873474

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.26401495933533

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.26201510429382

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.27401614189148

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.2550151348114

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.25901508331299

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.26501512527466

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.27201509475708

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.27601480484009

SELECT *
FROM `MENUS` 
 Execution Time:0.32701778411865

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.26501488685608

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.30401682853699

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.29901695251465

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.29501700401306

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.31201791763306

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.32001900672913

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.31901788711548

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.85204887390137

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.31801795959473

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.29401683807373

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.31201791763306

SELECT *
FROM `FOODTYPES`
ORDER BY `foodtypeid` DESC 
 Execution Time:0.29001617431641

SELECT *
FROM `MENUS` 
 Execution Time:0.34301996231079

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.31301784515381

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.36101984977722

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.2980170249939

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.28301620483398

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.32101798057556

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.30001783370972

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.31101703643799

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.3350191116333

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.28701591491699

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.32201910018921

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.33201909065247

SELECT *
FROM `MENUS` 
 Execution Time:0.2980170249939

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.30401802062988

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.28301596641541

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.28201580047607

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.29701709747314

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.29101705551147

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.3090181350708

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.28301596641541

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.28901696205139

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.80004477500916

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.27401494979858

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.24001407623291

SELECT *
FROM `FOODTYPES`
ORDER BY `foodtypeid` DESC 
 Execution Time:0.30301690101624

SELECT *
FROM `MENUS` 
 Execution Time:0.31901907920837

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.30501699447632

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.33401918411255

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.2850170135498

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.31001782417297

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.2980170249939

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.263014793396

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.36102104187012

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.26201486587524

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.29001593589783

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.33101892471313

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.30301809310913

SELECT *
FROM `MENUS` 
 Execution Time:0.29401707649231

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.3260190486908

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.32101821899414

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.32501816749573

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.32801914215088

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.30801796913147

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.26601481437683

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.28701710700989

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.28401613235474

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.28901696205139

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.30901694297791

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.30401802062988

SELECT *
FROM `FOODTYPES`
ORDER BY `foodtypeid` DESC 
 Execution Time:0.3520200252533

SELECT *
FROM `MENUS` 
 Execution Time:0.34601998329163

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.33101892471313

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.33901882171631

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.34701991081238

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.34802007675171

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.34501981735229

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.34501981735229

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.34202003479004

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.33101892471313

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.34301900863647

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.34502005577087

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.35301995277405

SELECT *
FROM `MENUS` 
 Execution Time:0.34301996231079

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.34802007675171

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.2980170249939

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.32101798057556

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.35502099990845

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.33601903915405

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.3370189666748

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.32201886177063

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.33901882171631

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.34301996231079

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.3520200252533

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.35302090644836

SELECT *
FROM `FOODTYPES`
ORDER BY `foodtypeid` DESC 
 Execution Time:0.35002017021179

SELECT *
FROM `MENUS` 
 Execution Time:0.33201885223389

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.3370189666748

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.34601998329163

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.34902000427246

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.37202095985413

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.34701991081238

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.34202003479004

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.31601810455322

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.31401801109314

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.31401801109314

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.31601810455322

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.37602210044861

SELECT *
FROM `MENUS` 
 Execution Time:0.35901999473572

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.32301902770996

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.32301902770996

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.32301807403564

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.35902118682861

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.35901999473572

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.31501817703247

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.34801912307739

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.30101704597473

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.31901812553406

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.34401988983154

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.35501980781555

SELECT *
FROM `FOODTYPES`
ORDER BY `foodtypeid` DESC 
 Execution Time:1.1110639572144

SELECT *
FROM `MENUS` 
 Execution Time:0.33601903915405

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.34601998329163

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.34802007675171

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.3540198802948

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.30401706695557

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.31901812553406

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.32401895523071

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.33601903915405

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.35502099990845

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.35901999473572

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.35902094841003

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.29201698303223

DELETE FROM `FOODTYPES`
WHERE `foodtypeid` = '30' 
 Execution Time:0.30401802062988

SELECT *
FROM `MENUS` 
 Execution Time:0.34401893615723

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.36001992225647

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.36202096939087

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.35602116584778

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.35102009773254

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.3650209903717

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.37502098083496

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.3390200138092

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.35501980781555

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.35702109336853

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.36202001571655

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.36001992225647

SELECT *
FROM `FOODTYPES`
ORDER BY `foodtypeid` DESC 
 Execution Time:0.38302206993103

SELECT *
FROM `MENUS` 
 Execution Time:0.34701991081238

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.32701802253723

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.3390200138092

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.29901695251465

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.31901812553406

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.30101799964905

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.28801608085632

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.34802007675171

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.33001899719238

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.33001899719238

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.28301596641541

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.27701592445374

SELECT *
FROM `MENUS` 
 Execution Time:0.31401801109314

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.3090181350708

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.32901906967163

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.3350191116333

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.34301996231079

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.32101798057556

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.32201910018921

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.31801819801331

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.31401801109314

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.33401894569397

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.35001993179321

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.35802102088928

SELECT *
FROM `MENUS` 
 Execution Time:0.36002087593079

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.29901695251465

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.32501912117004

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.30901718139648

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.32301902770996

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.34302020072937

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.29101610183716

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.31401801109314

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.31601881980896

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.31901788711548

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.33301901817322

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.32501888275146

SELECT *
FROM `MENUS` 
 Execution Time:0.32101798057556

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.32301902770996

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.29701709747314

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.29701709747314

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.32001805305481

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.31901788711548

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.86604905128479

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.29701685905457

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.33201789855957

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.34601902961731

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.33601999282837

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.33001899719238

INSERT INTO `FOODTYPES` (`title`, `description`) VALUES ('Drink', '<p>I need a drink</p>  ') 
 Execution Time:0.35601997375488

INSERT INTO `MENUS` (`title`, `linkto`, `ordering`, `subof`) VALUES ('Drink', '/menu/foods/drink', '1', '3') 
 Execution Time:0.35902094841003

SELECT *
FROM `FOODTYPES`
ORDER BY `foodtypeid` DESC 
 Execution Time:0.35001993179321

SELECT *
FROM `MENUS` 
 Execution Time:0.33801889419556

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.34801888465881

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.34401893615723

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.36802101135254

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.32901787757874

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.35402083396912

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.34701991081238

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.33901882171631

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '21' 
 Execution Time:0.34301996231079

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.33401894569397

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.33001899719238

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.32301878929138

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.31001687049866

SELECT *
FROM `FOODTYPES`
ORDER BY `foodtypeid` DESC 
 Execution Time:0.32801914215088

SELECT *
FROM `MENUS` 
 Execution Time:0.34602022171021

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.33001899719238

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.30101704597473

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.26901507377625

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.31301808357239

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.31001806259155

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.25801515579224

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.2980170249939

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '21' 
 Execution Time:0.31601786613464

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.33101916313171

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.34302020072937

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.85604906082153

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.34101986885071

SELECT *
FROM `MENUS` 
 Execution Time:0.3370189666748

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.34701991081238

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.35301995277405

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.35202097892761

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.36802101135254

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.34301900863647

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.38202118873596

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.32001900672913

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '21' 
 Execution Time:0.31901812553406

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.38402199745178

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.33101916313171

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.38202214241028

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.38702201843262

SELECT *
FROM `MENUS` 
 Execution Time:0.30801677703857

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.28701710700989

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.28901600837708

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.28801584243774

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.27601599693298

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.29101705551147

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.30901694297791

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.30501699447632

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '21' 
 Execution Time:0.2810161113739

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.26501512527466

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.26401495933533

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.22401309013367

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.27801585197449

SELECT *
FROM `FOODTYPES`
ORDER BY `foodtypeid` DESC 
 Execution Time:0.36602091789246

SELECT *
FROM `MENUS` 
 Execution Time:0.35102009773254

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.34301996231079

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.29301595687866

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.31501793861389

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.29501700401306

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.30201697349548

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.30401682853699

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.31001710891724

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '21' 
 Execution Time:0.32701897621155

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.32501888275146

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.32901906967163

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.33601903915405

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.33701920509338

INSERT INTO `FOODS` (`title`, `description`, `thumbnailurl`, `promotiontype`, `price`, `userid`, `foodtypeid`, `seotitle`, `seodescription`) VALUES ('Meal', '<p>test</p>  ', 'http://localhost/coffeeshoppro/public/upload/sandwiches-fried-bacon.jpg', '2', '12.2', '1', '33', 'test', 'test') 
 Execution Time:0.38302206993103

SELECT `A`.`foodid`, `A`.`title` As `food_title`, `A`.`description` As `food_description`, `A`.`foodtypeid`, `A`.`thumbnailurl`, `A`.`promotiontype`, `A`.`price`, `A`.`userid`, `B`.`title` As `foodtype_title`, `B`.`description` As `footype_description`
FROM `FOODS` `A`
JOIN `FOODTYPES` `B` ON `A`.`foodtypeid`=`B`.`foodtypeid` 
 Execution Time:0.37702202796936

SELECT *
FROM `MENUS` 
 Execution Time:0.32601809501648

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.33801913261414

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.31501793861389

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.32001900672913

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.32701802253723

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.25401496887207

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.2810161113739

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.29001688957214

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '21' 
 Execution Time:0.29101586341858

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.2980170249939

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.30101704597473

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.30601716041565

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.31201791763306

SELECT *
FROM `MENUS` 
 Execution Time:0.35302090644836

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.34301900863647

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.31101703643799

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.34402012825012

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.31401801109314

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.32401895523071

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.35102009773254

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.35102009773254

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '21' 
 Execution Time:0.34402012825012

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.26701498031616

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.28601717948914

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.29201602935791

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.29201602935791

SELECT *
FROM `FOODTYPES`
ORDER BY `foodtypeid` DESC 
 Execution Time:0.31801795959473

SELECT *
FROM `MENUS` 
 Execution Time:0.3650209903717

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.37502217292786

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.3520200252533

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.34402012825012

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.35901999473572

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.35902094841003

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.36102104187012

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.3650209903717

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '21' 
 Execution Time:0.37102103233337

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.35201978683472

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.35902094841003

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.33201885223389

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.33301901817322

SELECT *
FROM `MENUS` 
 Execution Time:0.54603099822998

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:1.0510601997375

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.26401495933533

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.27301502227783

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.27601599693298

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.29701685905457

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.33201885223389

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.33101916313171

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '21' 
 Execution Time:0.34701991081238

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.36802101135254

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.30301809310913

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.34501910209656

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.35702085494995

SELECT *
FROM `FOODTYPES`
ORDER BY `foodtypeid` DESC 
 Execution Time:0.32401895523071

SELECT *
FROM `MENUS` 
 Execution Time:0.35301995277405

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.34402012825012

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.30001711845398

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.31601810455322

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.30501818656921

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.3110179901123

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.3240180015564

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.35602116584778

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '21' 
 Execution Time:0.3260178565979

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.35701990127563

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.31801795959473

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.3260190486908

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.31201791763306

SELECT *
FROM `MENUS` 
 Execution Time:0.30301785469055

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.34001898765564

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.3390200138092

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.30501699447632

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.34902000427246

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.30301785469055

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.32901883125305

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.2980170249939

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '21' 
 Execution Time:0.30801820755005

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.30801701545715

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.31801819801331

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.33001804351807

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.34001898765564

SELECT *
FROM `FOODTYPES`
ORDER BY `foodtypeid` DESC 
 Execution Time:0.34201908111572

SELECT *
FROM `MENUS` 
 Execution Time:0.30501794815063

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.32301902770996

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.28001594543457

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.30501699447632

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.32101893424988

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.32501816749573

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.33101892471313

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.34201979637146

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '21' 
 Execution Time:0.33901882171631

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.30901718139648

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.2980170249939

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.29701709747314

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.28901696205139

DELETE FROM `FOODTYPES`
WHERE `foodtypeid` = '33' 
 Execution Time:0.35202097892761

SELECT *
FROM `MENUS` 
 Execution Time:0.3240180015564

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.3370189666748

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.33101892471313

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.31201791763306

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.33001899719238

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.33401894569397

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.33501887321472

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.27301597595215

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '21' 
 Execution Time:0.27801585197449

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.26701593399048

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.2980170249939

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.33101892471313

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.33301901817322

SELECT *
FROM `FOODTYPES`
ORDER BY `foodtypeid` DESC 
 Execution Time:0.31901884078979

SELECT *
FROM `MENUS` 
 Execution Time:0.3370201587677

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.35502004623413

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.3260190486908

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.33201909065247

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.35301995277405

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.34402012825012

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.36802101135254

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.37002110481262

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '21' 
 Execution Time:0.35502004623413

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.37102103233337

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.3630211353302

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.37402105331421

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.36601996421814

SELECT *
FROM `MENUS` 
 Execution Time:0.25001406669617

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.27601599693298

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.28001618385315

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.28901696205139

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.33001899719238

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.31001806259155

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.30901789665222

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.31401801109314

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '21' 
 Execution Time:0.3240180015564

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.31401801109314

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.31701803207397

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.32701778411865

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.34701991081238

SELECT *
FROM `MENUS` 
 Execution Time:0.35702013969421

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.27701616287231

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.28801703453064

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.27701616287231

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.27701497077942

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.27601504325867

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.31501793861389

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.37502098083496

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '21' 
 Execution Time:0.27601599693298

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.3650209903717

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.27701592445374

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.29501676559448

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.34502005577087

INSERT INTO `FOODTYPES` (`title`, `description`) VALUES ('Drink', '<p>Yeah i need it.</p>  ') 
 Execution Time:0.26001501083374

INSERT INTO `MENUS` (`title`, `linkto`, `ordering`, `subof`) VALUES ('Drink', '/menu/foods/drink', '1', '3') 
 Execution Time:0.26001501083374

SELECT *
FROM `FOODTYPES`
ORDER BY `foodtypeid` DESC 
 Execution Time:0.26001501083374

SELECT *
FROM `MENUS` 
 Execution Time:0.28401589393616

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.27601504325867

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.277015209198

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.27701616287231

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.27601599693298

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.31801891326904

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.27601504325867

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.27701497077942

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '21' 
 Execution Time:0.27601599693298

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '22' 
 Execution Time:0.34800696372986

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.31260395050049

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.28080105781555

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.37440013885498

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.35880088806152

SELECT *
FROM `MENUS` 
 Execution Time:0.26520109176636

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.31200003623962

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.24960088729858

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.31200003623962

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.29640102386475

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.28080010414124

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.24960088729858

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.26520013809204

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '21' 
 Execution Time:0.3626070022583

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '22' 
 Execution Time:0.35880088806152

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.31400012969971

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.32760095596313

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.35879993438721

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.31200098991394

SELECT *
FROM `FOODTYPES`
ORDER BY `foodtypeid` DESC 
 Execution Time:0.26301503181458

SELECT *
FROM `MENUS` 
 Execution Time:0.34101915359497

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.34202003479004

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.30301713943481

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.35502004623413

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.3260190486908

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.32001805305481

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.35402011871338

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.31701803207397

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '21' 
 Execution Time:0.30201721191406

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '22' 
 Execution Time:0.27601599693298

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.30701684951782

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.30901789665222

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.27701592445374

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.32301902770996

SELECT *
FROM `FOODTYPES`
WHERE `foodtypeid` = '34' 
 Execution Time:0.30501794815063

SELECT *
FROM `MENUS` 
 Execution Time:0.30501794815063

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.28601598739624

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.2480149269104

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.29301595687866

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.29401588439941

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.26301503181458

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.29401612281799

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.30801796913147

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '21' 
 Execution Time:0.29401707649231

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '22' 
 Execution Time:0.29301714897156

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.30301713943481

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.29001712799072

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.29201698303223

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.30501699447632

SELECT *
FROM `MENUS` 
 Execution Time:0.28301596641541

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.2810161113739

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.23301315307617

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.30201816558838

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.28301620483398

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.2810161113739

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.23201298713684

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.27701497077942

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '21' 
 Execution Time:0.28801584243774

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '22' 
 Execution Time:0.32101798057556

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.2740159034729

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.29001712799072

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.23201298713684

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.23301386833191

UPDATE `FOODTYPES` SET `title` = 'Drink', `description` = '<p>Yeah i need it very much.</p>  ', `foodtypeid` = '34'
WHERE `foodtypeid` = '34' 
 Execution Time:0.32001805305481

SELECT *
FROM `FOODTYPES`
ORDER BY `foodtypeid` DESC 
 Execution Time:0.29501700401306

SELECT *
FROM `MENUS` 
 Execution Time:1.0650610923767

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.33901906013489

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.34001994132996

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.27601599693298

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.30601716041565

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.28601717948914

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.25901484489441

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.30301690101624

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '21' 
 Execution Time:0.29101705551147

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '22' 
 Execution Time:0.26201510429382

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.25901508331299

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.31001806259155

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.30901718139648

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.25901508331299

SELECT *
FROM `MENUS` 
 Execution Time:0.25801515579224

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.28801703453064

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.29401707649231

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.25701522827148

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.29201602935791

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.25701498985291

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.27201581001282

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.25901508331299

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '21' 
 Execution Time:0.25601410865784

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '22' 
 Execution Time:0.25601387023926

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.25701498985291

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.25601506233215

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.25701498985291

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.25701403617859

SELECT *
FROM `FOODTYPES`
WHERE `foodtypeid` = '34' 
 Execution Time:0.27701592445374

SELECT *
FROM `MENUS` 
 Execution Time:0.25501394271851

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.25401401519775

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.25401520729065

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.25401401519775

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.2550151348114

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.25401520729065

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.25501394271851

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.25401496887207

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '21' 
 Execution Time:0.25401496887207

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '22' 
 Execution Time:0.25401401519775

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.25501489639282

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.25401496887207

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.25401401519775

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.25401496887207

SELECT *
FROM `MENUS` 
 Execution Time:0.25501489639282

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '2' 
 Execution Time:0.25401496887207

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '3' 
 Execution Time:0.25601387023926

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '16' 
 Execution Time:0.25401496887207

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '17' 
 Execution Time:0.25401496887207

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '18' 
 Execution Time:0.25380301475525

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '19' 
 Execution Time:0.24960088729858

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '20' 
 Execution Time:0.24959993362427

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '21' 
 Execution Time:0.25160098075867

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '22' 
 Execution Time:0.24959993362427

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '4' 
 Execution Time:0.24959993362427

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '5' 
 Execution Time:0.26520109176636

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '6' 
 Execution Time:0.24959993362427

SELECT `menuid`
FROM `MENUS`
WHERE `subof` = '12' 
 Execution Time:0.24960088729858

SELECT *
FROM `FOODTYPES`
ORDER BY `title` ASC 
 Execution Time:0.29830098152161

SELECT `A`.`foodid`, `A`.`title` As `food_title`, `A`.`description` As `food_description`, `A`.`foodtypeid`, `A`.`thumbnailurl`, `A`.`promotiontype`, `A`.`price`, `A`.`userid`, `B`.`title` As `foodtype_title`, `B`.`description` As `footype_description`
FROM `FOODS` `A`
JOIN `FOODTYPES` `B` ON `A`.`foodtypeid`=`B`.`foodtypeid` 
 Execution Time:0.29143190383911

SELECT DISTINCT(A.menuid),A.title, A.linkto, A.ordering, A.subof, A.status,(CASE WHEN B.menuid IS NOT NULL THEN 1 ELSE 0 END) AS parent 
			    FROM MENUS A 
				LEFT JOIN (SELECT menuid, subof FROM MENUS) B 
				ON A.menuid = B.subof
				ORDER BY A.subof,A.ordering 
 Execution Time:0.29006886482239

SELECT `A`.`foodid`, `A`.`title` As `food_title`, `A`.`description` As `food_description`, `A`.`thumbnailurl`, `A`.`promotiontype`, `A`.`price`, `A`.`userid`, `B`.`title` As `foodtype_title`, `B`.`description` As `footype_description`
FROM `FOODS` `A`
JOIN `FOODTYPES` `B` ON `A`.`foodtypeid`=`B`.`foodtypeid`
WHERE `A`.`foodid` = '8' 
 Execution Time:0.30693292617798

SELECT *, (SELECT COUNT(A.foodid) FROM FOODS A WHERE A.foodtypeid=B.foodtypeid) AS TOTL FROM FOODTYPES B ORDER BY B.title 
 Execution Time:0.29077816009521

SELECT `A`.`foodid`, `A`.`title` As `food_title`, `A`.`description` As `food_description`, `A`.`foodtypeid`, `A`.`thumbnailurl`, `A`.`promotiontype`, `A`.`price`, `A`.`userid`, `B`.`title` As `foodtype_title`, `B`.`description` As `footype_description`
FROM `FOODS` `A`
JOIN `FOODTYPES` `B` ON `A`.`foodtypeid`=`B`.`foodtypeid` 
 Execution Time:0.27841711044312

SELECT DISTINCT(A.menuid),A.title, A.linkto, A.ordering, A.subof, A.status,(CASE WHEN B.menuid IS NOT NULL THEN 1 ELSE 0 END) AS parent 
			    FROM MENUS A 
				LEFT JOIN (SELECT menuid, subof FROM MENUS) B 
				ON A.menuid = B.subof
				ORDER BY A.subof,A.ordering 
 Execution Time:0.264976978302

SELECT `s`.`slideid`, `s`.`title`, `s`.`caption`, `s`.`linkto`, `s`.`imageurl`, `s`.`ordering`, `u`.`userid`, `u`.`username`
FROM `SLIDES` `s`
JOIN `USERS` `u` ON `s`.`userid` = `u`.`userid`
ORDER BY `s`.`ordering` DESC 
 Execution Time:0.23362898826599

SELECT `s`.`serviceid`, `s`.`title`, `s`.`description`, `s`.`linkto`, `s`.`imageurl`, `s`.`ordering`
FROM `SERVICES` `s`
ORDER BY `s`.`ordering` DESC 
 Execution Time:0.24314379692078

SELECT `A`.`foodid`, `A`.`title`, `A`.`description`, `A`.`thumbnailurl`, `A`.`promotiontype`, `A`.`price`, `A`.`userid`
FROM `FOODS` `A`
WHERE `A`.`promotiontype` = '2'
ORDER BY `A`.`foodid` DESC
 LIMIT 1 
 Execution Time:0.28354620933533

SELECT `A`.`foodid`, `A`.`title`, `A`.`description`, `A`.`thumbnailurl`, `A`.`promotiontype`, `A`.`price`, `A`.`userid`
FROM `FOODS` `A`
WHERE `A`.`promotiontype` = '1'
ORDER BY `A`.`foodid` DESC
 LIMIT 1 
 Execution Time:0.28650498390198

SELECT `A`.`foodid`, `A`.`title` As `food_title`, `A`.`description` As `food_description`, `A`.`thumbnailurl`, `A`.`promotiontype`, `A`.`price`, `A`.`userid`, `B`.`title` As `foodtype_title`, `B`.`description` As `footype_description`
FROM `FOODS` `A`
JOIN `FOODTYPES` `B` ON `A`.`foodtypeid`=`B`.`foodtypeid`
WHERE `A`.`foodid` = '7' 
 Execution Time:0.24115490913391

SELECT `A`.`foodid`, `A`.`title` As `food_title`, `A`.`description` As `food_description`, `A`.`thumbnailurl`, `A`.`promotiontype`, `A`.`price`, `A`.`userid`, `B`.`title` As `foodtype_title`, `B`.`description` As `footype_description`
FROM `FOODS` `A`
JOIN `FOODTYPES` `B` ON `A`.`foodtypeid`=`B`.`foodtypeid`
WHERE `A`.`foodid` = '8' 
 Execution Time:0.22580289840698

SELECT *, (SELECT COUNT(A.foodid) FROM FOODS A WHERE A.foodtypeid=B.foodtypeid) AS TOTL FROM FOODTYPES B ORDER BY B.title 
 Execution Time:0.28962397575378

SELECT `A`.`foodid`, `A`.`title` As `food_title`, `A`.`description` As `food_description`, `A`.`foodtypeid`, `A`.`thumbnailurl`, `A`.`promotiontype`, `A`.`price`, `A`.`userid`, `B`.`title` As `foodtype_title`, `B`.`description` As `footype_description`
FROM `FOODS` `A`
JOIN `FOODTYPES` `B` ON `A`.`foodtypeid`=`B`.`foodtypeid` 
 Execution Time:0.31999206542969

SELECT DISTINCT(A.menuid),A.title, A.linkto, A.ordering, A.subof, A.status,(CASE WHEN B.menuid IS NOT NULL THEN 1 ELSE 0 END) AS parent 
			    FROM MENUS A 
				LEFT JOIN (SELECT menuid, subof FROM MENUS) B 
				ON A.menuid = B.subof
				ORDER BY A.subof,A.ordering 
 Execution Time:0.31927084922791

SELECT `A`.`foodid`, `A`.`title`, `A`.`description`, `A`.`thumbnailurl`, `A`.`promotiontype`, `A`.`price`, `A`.`userid`
FROM `FOODS` `A`
WHERE `A`.`promotiontype` = '2'
ORDER BY `A`.`foodid` DESC
 LIMIT 1 
 Execution Time:0.26716589927673

SELECT `A`.`foodid`, `A`.`title`, `A`.`description`, `A`.`thumbnailurl`, `A`.`promotiontype`, `A`.`price`, `A`.`userid`
FROM `FOODS` `A`
WHERE `A`.`promotiontype` = '1'
ORDER BY `A`.`foodid` DESC
 LIMIT 1 
 Execution Time:0.26334691047668

SELECT `s`.`slideid`, `s`.`title`, `s`.`caption`, `s`.`linkto`, `s`.`imageurl`, `s`.`ordering`, `u`.`userid`, `u`.`username`
FROM `SLIDES` `s`
JOIN `USERS` `u` ON `s`.`userid` = `u`.`userid`
ORDER BY `s`.`ordering` DESC 
 Execution Time:0.3212878704071

SELECT `s`.`serviceid`, `s`.`title`, `s`.`description`, `s`.`linkto`, `s`.`imageurl`, `s`.`ordering`
FROM `SERVICES` `s`
ORDER BY `s`.`ordering` DESC 
 Execution Time:0.32740998268127

SELECT DISTINCT(A.menuid),A.title, A.linkto, A.ordering, A.subof, A.status,(CASE WHEN B.menuid IS NOT NULL THEN 1 ELSE 0 END) AS parent 
			    FROM MENUS A 
				LEFT JOIN (SELECT menuid, subof FROM MENUS) B 
				ON A.menuid = B.subof
				ORDER BY A.subof,A.ordering 
 Execution Time:0.32766509056091

SELECT *, (SELECT COUNT(A.foodid) FROM FOODS A WHERE A.foodtypeid=B.foodtypeid) AS TOTL FROM FOODTYPES B ORDER BY B.title 
 Execution Time:0.23721694946289

SELECT `A`.`foodid`, `A`.`title` As `food_title`, `A`.`description` As `food_description`, `A`.`foodtypeid`, `A`.`thumbnailurl`, `A`.`promotiontype`, `A`.`price`, `A`.`userid`, `B`.`title` As `foodtype_title`, `B`.`description` As `footype_description`
FROM `FOODS` `A`
JOIN `FOODTYPES` `B` ON `A`.`foodtypeid`=`B`.`foodtypeid` 
 Execution Time:0.25219011306763

SELECT DISTINCT(A.menuid),A.title, A.linkto, A.ordering, A.subof, A.status,(CASE WHEN B.menuid IS NOT NULL THEN 1 ELSE 0 END) AS parent 
			    FROM MENUS A 
				LEFT JOIN (SELECT menuid, subof FROM MENUS) B 
				ON A.menuid = B.subof
				ORDER BY A.subof,A.ordering 
 Execution Time:0.26227188110352

SELECT `A`.`foodid`, `A`.`title`, `A`.`description`, `A`.`thumbnailurl`, `A`.`promotiontype`, `A`.`price`, `A`.`userid`
FROM `FOODS` `A`
WHERE `A`.`promotiontype` = '2'
ORDER BY `A`.`foodid` DESC
 LIMIT 1 
 Execution Time:0.27368497848511

SELECT `A`.`foodid`, `A`.`title`, `A`.`description`, `A`.`thumbnailurl`, `A`.`promotiontype`, `A`.`price`, `A`.`userid`
FROM `FOODS` `A`
WHERE `A`.`promotiontype` = '1'
ORDER BY `A`.`foodid` DESC
 LIMIT 1 
 Execution Time:0.27851390838623

SELECT `s`.`serviceid`, `s`.`title`, `s`.`description`, `s`.`linkto`, `s`.`imageurl`, `s`.`ordering`
FROM `SERVICES` `s`
ORDER BY `s`.`ordering` DESC 
 Execution Time:0.28996992111206

SELECT `s`.`slideid`, `s`.`title`, `s`.`caption`, `s`.`linkto`, `s`.`imageurl`, `s`.`ordering`, `u`.`userid`, `u`.`username`
FROM `SLIDES` `s`
JOIN `USERS` `u` ON `s`.`userid` = `u`.`userid`
ORDER BY `s`.`ordering` DESC 
 Execution Time:0.33605694770813

SELECT *, (SELECT COUNT(A.foodid) FROM FOODS A WHERE A.foodtypeid=B.foodtypeid) AS TOTL FROM FOODTYPES B ORDER BY B.title 
 Execution Time:0.25943183898926

SELECT `A`.`foodid`, `A`.`title` As `food_title`, `A`.`description` As `food_description`, `A`.`foodtypeid`, `A`.`thumbnailurl`, `A`.`promotiontype`, `A`.`price`, `A`.`userid`, `B`.`title` As `foodtype_title`, `B`.`description` As `footype_description`
FROM `FOODS` `A`
JOIN `FOODTYPES` `B` ON `A`.`foodtypeid`=`B`.`foodtypeid` 
 Execution Time:0.25794196128845

SELECT DISTINCT(A.menuid),A.title, A.linkto, A.ordering, A.subof, A.status,(CASE WHEN B.menuid IS NOT NULL THEN 1 ELSE 0 END) AS parent 
			    FROM MENUS A 
				LEFT JOIN (SELECT menuid, subof FROM MENUS) B 
				ON A.menuid = B.subof
				ORDER BY A.subof,A.ordering 
 Execution Time:0.25553011894226

SELECT `s`.`serviceid`, `s`.`title`, `s`.`description`, `s`.`linkto`, `s`.`imageurl`, `s`.`ordering`
FROM `SERVICES` `s`
ORDER BY `s`.`ordering` DESC 
 Execution Time:0.22573804855347

SELECT `s`.`slideid`, `s`.`title`, `s`.`caption`, `s`.`linkto`, `s`.`imageurl`, `s`.`ordering`, `u`.`userid`, `u`.`username`
FROM `SLIDES` `s`
JOIN `USERS` `u` ON `s`.`userid` = `u`.`userid`
ORDER BY `s`.`ordering` DESC 
 Execution Time:0.25964117050171

SELECT `A`.`foodid`, `A`.`title`, `A`.`description`, `A`.`thumbnailurl`, `A`.`promotiontype`, `A`.`price`, `A`.`userid`
FROM `FOODS` `A`
WHERE `A`.`promotiontype` = '2'
ORDER BY `A`.`foodid` DESC
 LIMIT 1 
 Execution Time:0.25493597984314

SELECT `A`.`foodid`, `A`.`title`, `A`.`description`, `A`.`thumbnailurl`, `A`.`promotiontype`, `A`.`price`, `A`.`userid`
FROM `FOODS` `A`
WHERE `A`.`promotiontype` = '1'
ORDER BY `A`.`foodid` DESC
 LIMIT 1 
 Execution Time:0.27685379981995

SELECT *
FROM `FOODTYPES`
ORDER BY `title` ASC 
 Execution Time:0.27611207962036

SELECT `A`.`foodid`, `A`.`title` As `food_title`, `A`.`description` As `food_description`, `A`.`foodtypeid`, `A`.`thumbnailurl`, `A`.`promotiontype`, `A`.`price`, `A`.`userid`, `B`.`title` As `foodtype_title`, `B`.`description` As `footype_description`
FROM `FOODS` `A`
JOIN `FOODTYPES` `B` ON `A`.`foodtypeid`=`B`.`foodtypeid` 
 Execution Time:0.28842401504517

SELECT DISTINCT(A.menuid),A.title, A.linkto, A.ordering, A.subof, A.status,(CASE WHEN B.menuid IS NOT NULL THEN 1 ELSE 0 END) AS parent 
			    FROM MENUS A 
				LEFT JOIN (SELECT menuid, subof FROM MENUS) B 
				ON A.menuid = B.subof
				ORDER BY A.subof,A.ordering 
 Execution Time:0.27621793746948

SELECT *, (SELECT COUNT(A.foodid) FROM FOODS A WHERE A.foodtypeid=B.foodtypeid) AS TOTL FROM FOODTYPES B ORDER BY B.title 
 Execution Time:0.30830693244934

SELECT `A`.`foodid`, `A`.`title` As `food_title`, `A`.`description` As `food_description`, `A`.`foodtypeid`, `A`.`thumbnailurl`, `A`.`promotiontype`, `A`.`price`, `A`.`userid`, `B`.`title` As `foodtype_title`, `B`.`description` As `footype_description`
FROM `FOODS` `A`
JOIN `FOODTYPES` `B` ON `A`.`foodtypeid`=`B`.`foodtypeid` 
 Execution Time:0.25870609283447

SELECT DISTINCT(A.menuid),A.title, A.linkto, A.ordering, A.subof, A.status,(CASE WHEN B.menuid IS NOT NULL THEN 1 ELSE 0 END) AS parent 
			    FROM MENUS A 
				LEFT JOIN (SELECT menuid, subof FROM MENUS) B 
				ON A.menuid = B.subof
				ORDER BY A.subof,A.ordering 
 Execution Time:0.25819110870361

SELECT `A`.`foodid`, `A`.`title`, `A`.`description`, `A`.`thumbnailurl`, `A`.`promotiontype`, `A`.`price`, `A`.`userid`
FROM `FOODS` `A`
WHERE `A`.`promotiontype` = '2'
ORDER BY `A`.`foodid` DESC
 LIMIT 1 
 Execution Time:0.24097418785095

SELECT `s`.`slideid`, `s`.`title`, `s`.`caption`, `s`.`linkto`, `s`.`imageurl`, `s`.`ordering`, `u`.`userid`, `u`.`username`
FROM `SLIDES` `s`
JOIN `USERS` `u` ON `s`.`userid` = `u`.`userid`
ORDER BY `s`.`ordering` DESC 
 Execution Time:0.28436398506165

SELECT `s`.`serviceid`, `s`.`title`, `s`.`description`, `s`.`linkto`, `s`.`imageurl`, `s`.`ordering`
FROM `SERVICES` `s`
ORDER BY `s`.`ordering` DESC 
 Execution Time:0.26524901390076

SELECT DISTINCT(A.menuid),A.title, A.linkto, A.ordering, A.subof, A.status,(CASE WHEN B.menuid IS NOT NULL THEN 1 ELSE 0 END) AS parent 
			    FROM MENUS A 
				LEFT JOIN (SELECT menuid, subof FROM MENUS) B 
				ON A.menuid = B.subof
				ORDER BY A.subof,A.ordering 
 Execution Time:0.25456500053406

SELECT `p`.`pageid`, `p`.`title`, `p`.`body`, `u`.`userid`, `u`.`username`
FROM `PAGES` `p`
JOIN `USERS` `u` ON `p`.`userid` = `u`.`userid`
WHERE replace(LOWER(p.title),' ','') = 'aboutus'
 LIMIT 1 
 Execution Time:0.27882790565491

SELECT DISTINCT(A.menuid),A.title, A.linkto, A.ordering, A.subof, A.status,(CASE WHEN B.menuid IS NOT NULL THEN 1 ELSE 0 END) AS parent 
			    FROM MENUS A 
				LEFT JOIN (SELECT menuid, subof FROM MENUS) B 
				ON A.menuid = B.subof
				ORDER BY A.subof,A.ordering 
 Execution Time:0.27969408035278

SELECT `p`.`postid`, `p`.`title`, `p`.`shortdescription`, `p`.`longdescription`, `p`.`postdate`, `p`.`thumbnailurl`, `u`.`userid`, `u`.`username`
FROM `POSTS` `p`
JOIN `USERS` `u` ON `p`.`userid` = `u`.`userid`
ORDER BY `postid` DESC 
 Execution Time:0.32006788253784

SELECT DISTINCT(A.menuid),A.title, A.linkto, A.ordering, A.subof, A.status,(CASE WHEN B.menuid IS NOT NULL THEN 1 ELSE 0 END) AS parent 
			    FROM MENUS A 
				LEFT JOIN (SELECT menuid, subof FROM MENUS) B 
				ON A.menuid = B.subof
				ORDER BY A.subof,A.ordering 
 Execution Time:0.28955721855164

SELECT `p`.`postid`, `p`.`title`, `p`.`shortdescription`, `p`.`longdescription`, `p`.`postdate`, `p`.`thumbnailurl`, `u`.`userid`, `u`.`username`
FROM `POSTS` `p`
JOIN `USERS` `u` ON `p`.`userid` = `u`.`userid`
WHERE `p`.`title` LIKE '%%' ESCAPE '!'
ORDER BY `postid` DESC
 LIMIT 5 
 Execution Time:0.28634691238403

SELECT `foodid`, `title`, `description`, `thumbnailurl`, `promotiontype`, `price`
FROM `FOODS`
ORDER BY `foodid` DESC
 LIMIT 5 
 Execution Time:0.26225805282593

SELECT `foodtypeid`, `title`, `description`
FROM `FOODTYPES`
ORDER BY `foodtypeid` DESC
 LIMIT 5 
 Execution Time:0.28847289085388

SELECT `p`.`postid`, `p`.`title`, `p`.`shortdescription`, `p`.`longdescription`, `p`.`postdate`, `p`.`thumbnailurl`, `u`.`userid`, `u`.`username`
FROM `POSTS` `p`
JOIN `USERS` `u` ON `p`.`userid` = `u`.`userid`
WHERE `p`.`title` LIKE '%%' ESCAPE '!'
ORDER BY `postid` DESC
 LIMIT 7 
 Execution Time:0.25659203529358

SELECT `p`.`postid`, `p`.`title`, `p`.`shortdescription`, `p`.`longdescription`, `p`.`postdate`, `p`.`thumbnailurl`, `u`.`userid`, `u`.`username`
FROM `POSTS` `p`
JOIN `USERS` `u` ON `p`.`userid` = `u`.`userid`
ORDER BY `postid` DESC 
 Execution Time:0.2619800567627

SELECT *, (SELECT COUNT(A.foodid) FROM FOODS A WHERE A.foodtypeid=B.foodtypeid) AS TOTL FROM FOODTYPES B ORDER BY B.title 
 Execution Time:0.23438405990601

SELECT `A`.`foodid`, `A`.`title` As `food_title`, `A`.`description` As `food_description`, `A`.`foodtypeid`, `A`.`thumbnailurl`, `A`.`promotiontype`, `A`.`price`, `A`.`userid`, `B`.`title` As `foodtype_title`, `B`.`description` As `footype_description`
FROM `FOODS` `A`
JOIN `FOODTYPES` `B` ON `A`.`foodtypeid`=`B`.`foodtypeid` 
 Execution Time:0.23407506942749

SELECT DISTINCT(A.menuid),A.title, A.linkto, A.ordering, A.subof, A.status,(CASE WHEN B.menuid IS NOT NULL THEN 1 ELSE 0 END) AS parent 
			    FROM MENUS A 
				LEFT JOIN (SELECT menuid, subof FROM MENUS) B 
				ON A.menuid = B.subof
				ORDER BY A.subof,A.ordering 
 Execution Time:0.23372602462769

SELECT `A`.`foodid`, `A`.`title`, `A`.`description`, `A`.`thumbnailurl`, `A`.`promotiontype`, `A`.`price`, `A`.`userid`
FROM `FOODS` `A`
WHERE `A`.`promotiontype` = '1'
ORDER BY `A`.`foodid` DESC
 LIMIT 1 
 Execution Time:0.28674387931824

SELECT `s`.`serviceid`, `s`.`title`, `s`.`description`, `s`.`linkto`, `s`.`imageurl`, `s`.`ordering`
FROM `SERVICES` `s`
ORDER BY `s`.`ordering` DESC 
 Execution Time:0.26333808898926

SELECT `s`.`slideid`, `s`.`title`, `s`.`caption`, `s`.`linkto`, `s`.`imageurl`, `s`.`ordering`, `u`.`userid`, `u`.`username`
FROM `SLIDES` `s`
JOIN `USERS` `u` ON `s`.`userid` = `u`.`userid`
ORDER BY `s`.`ordering` DESC 
 Execution Time:0.25527095794678

SELECT `A`.`foodid`, `A`.`title`, `A`.`description`, `A`.`thumbnailurl`, `A`.`promotiontype`, `A`.`price`, `A`.`userid`
FROM `FOODS` `A`
WHERE `A`.`promotiontype` = '2'
ORDER BY `A`.`foodid` DESC
 LIMIT 1 
 Execution Time:0.24746012687683

