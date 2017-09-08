CREATE TABLE IF NOT EXISTS `forms` (
  `formID` int(8) NOT NULL auto_increment,
  `formnum` text,
  `title` text,
  `subtitle` text,
  PRIMARY KEY  (`formID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

CREATE TABLE IF NOT EXISTS `form03` (
  `entryID` int(8) NOT NULL auto_increment,
 `dateInspect` text,
 `owner` text,
 `ownerID` text,
 `woID` text,
 `mfg` text,
 `vin` text,
 `datemfg` text,
 `dotspec` text,
 `head` text,
 `shell` text,
 `RadioGroup1` text,
 `RadioGroup2` text,
 `RadioGroup3` text,
 `RadioGroup4` text,
 `comp1cap` text,
 `comp2cap` text,
 `comp3cap` text,
 `comp4cap` text,
 `comp5cap` text,
 `RadioGroup5` text,
 `RadioGroup6` text,
 `RadioGroup7` text,
 `comp1des` text,
 `comp2des` text,
 `comp3des` text,
 `comp4des` text,
 `comp5des` text,
 `comp1open` text,
 `comp2open` text,
 `comp3open` text,
 `comp4open` text,
 `comp5open` text,
 `comp1close` text,
 `comp2close` text,
 `comp3close` text,
 `comp4close` text,
 `comp5close` text,
 `radio1` text,
 `radio2` text,
 `radio3` text,
 `radio4` text,
 `radio5` text,
 `radio6` text,
 `radio7` text,
 `radio8` text,
 `radio9` text,
 `radio10` text,
 `CorrectiveAction` text,
 `RadioGroup8` text,
 `RadioGroup9` text,
 `RadioGroup10` text,
 `Rstamp` text,
 `Ustamp` text,
 `RadioGroup11` text,
 `meetsReq` text,
 `failsReq` text,
 `markingApplied` text,
 `inspector` text,
 `inspectorID` text,
 `dateInspector` text,
PRIMARY KEY  (`entryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

CREATE TABLE IF NOT EXISTS `form04` (
  `form_id` int(8) NOT NULL auto_increment,
 `dateInspect` text,
 `owner` text,
 `ownerID` text,
 `woID` text,
 `mfg` text,
 `vin` text,
 `datemfg` text,
 `dotspec` text,
 `RadioGroupInsulated` text,
 `RadioGroupLined` text,
 `RadioGroupDedicated` text,
 `RadioGroupCorrosive` text,
 `press-one-start` text,
 `press-one-start-time` text,
 `press-two-start` text,
 `press-two-start-time` text,
 `press-one-finish` text,
 `press-one-finish-time` text,
 `press-two-finish` text,
 `press-two-finish-time` text,
 `press-one-change` text,
 `press-two-change` text,
 `press-measured-change` text,
 `press-calculate-change` text,
 `vac-one-start` text,
 `vac-one-start-time` text,
 `vac-two-start` text,
 `vac-two-start-time` text,
 `vac-one-finish` text,
 `vac-one-finish-time` text,
 `vac-two-finish` text,
 `vac-two-finish-time` text,
 `vac-one-change` text,
 `vac-two-change` text,
 `vac-measured-change` text,
 `vac-calculate-change` text,
 `vapor-vent` text,
 `RadioGroupRepair` text,
 `RadioGroupWeld` text,
 `Rstamp` text,
 `Ustamp` text,
 `CorrectiveAction` text,
 `meetsReq` text,
 `failsReq` text,
 `markingApplied` text,
 `inspector` text,
 `inspectorID` text,
 `dateInspector` text,
PRIMARY KEY  (`form_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;