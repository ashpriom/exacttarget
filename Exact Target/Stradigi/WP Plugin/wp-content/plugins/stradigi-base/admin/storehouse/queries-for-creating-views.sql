--
-- Structure for view `syn1_view_classes`
--
DROP TABLE IF EXISTS `syn1_view_classes`;

CREATE ALGORITHM=UNDEFINED DEFINER=`synstudio`@`%` SQL SECURITY DEFINER VIEW `syn1_view_classes` AS select `syn1_term_relationships`.`object_id` AS `class_id`,`syn1_posts`.`post_name` AS `post_slug`,`syn1_posts`.`post_title` AS `class_title` from (`syn1_term_relationships` join `syn1_posts`) where ((`syn1_posts`.`ID` = `syn1_term_relationships`.`object_id`) and (`syn1_term_relationships`.`term_taxonomy_id` = 4));

-- --------------------------------------------------------

--
-- Structure for view `syn1_view_menuslugs`
--
DROP TABLE IF EXISTS `syn1_view_menuslugs`;

CREATE ALGORITHM=UNDEFINED DEFINER=`synstudio`@`%` SQL SECURITY DEFINER VIEW `syn1_view_menuslugs` AS select `syn1_postmeta`.`post_id` AS `post_id`,trim(trailing '/' from substring_index(`syn1_postmeta`.`meta_value`,'/',-(2))) AS `slug` from `syn1_postmeta` where ((`syn1_postmeta`.`meta_key` = '_menu_item_url') and (`syn1_postmeta`.`meta_value` <> ''));

-- --------------------------------------------------------

--
-- Structure for view `syn1_view_teachers`
--
DROP TABLE IF EXISTS `syn1_view_teachers`;

CREATE ALGORITHM=UNDEFINED DEFINER=`synstudio`@`%` SQL SECURITY DEFINER VIEW `syn1_view_teachers` AS select `syn1_term_relationships`.`object_id` AS `teacher_id`,`syn1_posts`.`post_name` AS `post_slug`,`syn1_posts`.`post_title` AS `teacher_title` from (`syn1_term_relationships` join `syn1_posts`) where ((`syn1_posts`.`ID` = `syn1_term_relationships`.`object_id`) and (`syn1_term_relationships`.`term_taxonomy_id` = 27));
