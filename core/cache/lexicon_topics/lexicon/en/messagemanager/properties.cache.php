<?php  return array (
  'mm_exclude_groups_desc' => 'Comma-separated list of User Group IDs or names that can not be sent bulk messages; if empty all user groups can be sent messages; default: empty',
  'mm_user_group_desc' => 'User Group ID or name that has opted to receive messages; if empty, all users can be sent a message; default: empty.',
  'cssFile_desc' => 'CSS file to use for Message Manager; default: messagemanager.css',
  'jsChunk_desc' => 'Chunk containing Message Manager JS; default: mmAjaxJS',
  'language_desc' => 'Language to use in Message Manager; default: en',
  'outerTpl_desc' => 'Outer Tpl chunk for Message Manager;default: MessageOuterTpl',
  'tpl_desc' => 'Tpl chunk for individual messages; default: MessageTpl',
  'redirect_to_desc' => 'Id of Resource to redirect to if user is not logged in (e.g. the Login page); If this is not set, MessageManager will redirect to the Login page if its pagetitle is Login, or the site_start page if not.',
  'allowed_groups_desc' => 'Comma-separated list of User Group names or IDs that are allowed to access MessageManager; if empty all groups are allowed.',
  'mm_recipient_options_desc' => 'Options for sending messages; these options show up in the dropdown list when sending a new message; you must include at least one option; the captions for the three options are lexicon strings in the default.inc.php file; default: user,usergroup,all.',
);