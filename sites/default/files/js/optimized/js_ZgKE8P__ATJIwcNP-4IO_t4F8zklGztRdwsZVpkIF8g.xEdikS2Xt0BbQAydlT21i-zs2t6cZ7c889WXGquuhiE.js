/* Source and licensing information for the line(s) below can be found at http://local.aayushientpune.com/modules/contrib/module_filter/js/module_filter.js. */
(function($, Drupal) {

  'use strict';

  Drupal.ModuleFilter = Drupal.ModuleFilter || {};

  Drupal.ModuleFilter.localStorage = {
    getItem: function(key) {
      if (typeof Storage !== 'undefined') {
        return localStorage.getItem('moduleFilter.' + key);
      }

      return null;
    },
    getBoolean: function(key) {
      var item = Drupal.ModuleFilter.localStorage.getItem(key);

      if (item != null) {
        return (item == 'true');
      }

      return null;
    },
    setItem: function(key, data) {
      if (typeof Storage !== 'undefined') {
        localStorage.setItem('moduleFilter.' + key, data)
      }
    },
    removeItem: function(key) {
      if (typeof Storage !== 'undefined') {
        localStorage.removeItem('moduleFilter.' + key);
      }
    }
  };

  /**
   * Filter enhancements.
   */
  Drupal.behaviors.moduleFilter = {
    attach: function(context) {

    }
  };

})(jQuery, Drupal);

/* Source and licensing information for the above line(s) can be found at http://local.aayushientpune.com/modules/contrib/module_filter/js/module_filter.js. */