<?php
/**
 * Plugin Name:       Blocks Course - Todo List
 * Description:       Blocks Course - Todo List.
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       boilerplate
 *
 * @package           create-block
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function blocks_course_todo_list_block_init(): void
{
	register_block_type(__DIR__ . '/build');
}

add_action('init', 'blocks_course_todo_list_block_init');
