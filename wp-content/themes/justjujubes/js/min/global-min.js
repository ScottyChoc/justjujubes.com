/**
 * This script adds the jquery effects to the Altitude Pro Theme.
 *
 * @package Altitude\JS
 * @author StudioPress
 * @license GPL-2.0+
 */
jQuery(function($){$(document).scrollTop()>0&&$(".site-header").addClass("dark"),$(document).on("scroll",function(){$(document).scrollTop()>0?$(".site-header").addClass("dark"):$(".site-header").removeClass("dark")})}),jQuery(function($){var s=$(this);s.find("header").click(function(){"block"==$(this).siblings("section").css("display")?s.find("section").slideUp(150):(s.find("section").slideUp(150),$(this).siblings("section").slideDown(150))})});