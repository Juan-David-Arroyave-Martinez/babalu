<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:39
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/js/bundle/right-sidebar.js' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec7983559cf6_68525735',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c58afaf615cc21c47a64c04d8ddbef3f41a109d7' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/js/bundle/right-sidebar.js',
      1 => 1542223690,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec7983559cf6_68525735 (Smarty_Internal_Template $_smarty_tpl) {
?>/* ========================================================================
 * Bootstrap: sidebar.js v0.1
 * ========================================================================
 * Copyright 2011-2014 Asyraf Abdul Rahman
 * Licensed under MIT
 * ======================================================================== */

(function ($) {
    'use strict';

    // SIDEBAR PUBLIC CLASS DEFINITION
    // ================================

    var Sidebar = function (element, options) {
        this.$element      = $(element);
        this.options       = $.extend({}, Sidebar.DEFAULTS, options);
        this.transitioning = null;

        if (this.options.parent) {
			this.$parent = $(this.options.parent);
		}
        if (this.options.toggle) {
			this.toggle();
		}
    };

    Sidebar.DEFAULTS = {
        toggle: true
    };

    Sidebar.prototype.show = function () {
        if (this.transitioning || this.$element.hasClass('sidebar-open')) {
			return;
		}

        var startEvent = $.Event('show.bs.sidebar');
        this.$element.trigger(startEvent);
        if (startEvent.isDefaultPrevented()) {
			return;
		}

        this.$element
            .addClass('sidebar-open');

        this.transitioning = 1;

        var complete = function () {
            this.transitioning = 0;
            this.$element.trigger('shown.bs.sidebar');
        };

        if(!$.support.transition) {
			return complete.call(this);
		}

        this.$element
            .one($.support.transition.end, $.proxy(complete, this))
            .emulateTransitionEnd(400);
    };

    Sidebar.prototype.hide = function () {
        if (this.transitioning || !this.$element.hasClass('sidebar-open')) {
			return;
		}

        var startEvent = $.Event('hide.bs.sidebar');
        this.$element.trigger(startEvent);
        if(startEvent.isDefaultPrevented()) {
			return;
		}

        this.$element
            .removeClass('sidebar-open');

        this.transitioning = 1;

        var complete = function () {
            this.transitioning = 0;
            this.$element
                .trigger('hidden.bs.sidebar');
        };

        if (!$.support.transition) {
			return complete.call(this);
		}

        this.$element
            .one($.support.transition.end, $.proxy(complete, this))
            .emulateTransitionEnd(400);
    };

    Sidebar.prototype.toggle = function () {
        this[this.$element.hasClass('sidebar-open') ? 'hide' : 'show']();
    };

    var old = $.fn.sidebar;

    $.fn.sidebar = function (option) {
        return this.each(function (){
            var $this = $(this);
            var data = $this.data('bs.sidebar');
            var options = $.extend({}, Sidebar.DEFAULTS, $this.data(), typeof options === 'object' && option);

            if (!data && options.toggle && option === 'show') {
				option = !option;
			}
            if (!data) {
				$this.data('bs.sidebar', (data = new Sidebar(this, options)));
			}
            if (typeof option === 'string') {
				data[option]();
			}
        });
    };

    $.fn.sidebar.Constructor = Sidebar;

    $.fn.sidebar.noConflict = function () {
        $.fn.sidebar = old;
        return this;
    };

    $(document).on('click.bs.sidebar.data-api', '[data-toggle="sidebar"]', function (e) {
        var $this = $(this), href;
        var target = $this.attr('data-target') || e.preventDefault() || (href = $this.attr('href')) && href.replace(/.*(?=#[^\s]+$)/, '');
        var $target = $(target);
        var data = $target.data('bs.sidebar');
        var option = data ? 'toggle' : $this.data();

        $target.sidebar(option);
    });

    $('html').on('click.bs.sidebar.autohide', function(event){
        var $this = $(event.target);
        var isButtonOrSidebar = $this.is('.sidebar, [data-toggle="sidebar"]') || $this.parents('.sidebar, [data-toggle="sidebar"]').length;
        if (isButtonOrSidebar) {
            return;
        } else {
            var $target = $('.sidebar');
            $target.each(function(i, trgt) {
                var $trgt = $(trgt);
                if($trgt.data('bs.sidebar') && $trgt.hasClass('sidebar-open')) {
                    $trgt.sidebar('hide');
                }
            });
        }
    });
})(jQuery);
<?php }
}
