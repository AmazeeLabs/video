<?
// $Id$

/**
 * @file
 * The video module has some hooks which should make the adding
 * of new features to the video module easier.
 *
 * This file contains example of implementation and documentation for
 * all the available hooks defined in the video module.
 *
 * Video module hooks are different from standard drupal hooks
 * Video module hooks have a leading "v_". The name of a function which
 * is implementing a video hook is something like: modulename_v_hookname
 *
 * Although each active module which implement a video module hooks
 * will be executed when that hook is called, if you are developing a
 * video module specific addition (a plug in) I suggest you to call your
 * module video_something and place it under your video module folder.
 *
 * @author Fabio Varesano <fvaresano at yahoo dot it>
 */


/**
The hook_v_get_params is used by plugins to write an html param inside
inside video generated object tag during the play.

@param $node the node on which is being played

@return a keyed array of tipe 'param_name'=>'param_value'
*/
function hook_v_get_params(&$node) {
  return array('flashVars' => 'autostart=true&url=false');
}
