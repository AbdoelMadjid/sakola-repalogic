(function ($) {
  var styleSwitcher = $('.u-ss');

  if (!styleSwitcher.length) {
    return;
  }

  var prefix = styleSwitcher.data('cookies-prefix') || 'unify';
  var defaultsConfig = styleSwitcher.data('defaults') || [{}];
  var defaults = defaultsConfig[0] || {};
  var preDefStyle = $.cookie(prefix + '.preDefStyle') ? $.cookie(prefix + '.preDefStyle') : 'default';
  var customColor = $.cookie(prefix + '.customColor') ? $.cookie(prefix + '.customColor') : (defaults.customColor || '#72c02c');
  var outerSpaces = $.cookie(prefix + '.outerSpaces') ? $.cookie(prefix + '.outerSpaces') : (defaults.outerSpaces || '0px');
  var contentFont = $.cookie(prefix + '.contentFont') ? $.cookie(prefix + '.contentFont') : (defaults.contentFont || 'Open Sans, Helvetica, Arial, sans-serif');
  var headingFont = $.cookie(prefix + '.headingFont') ? $.cookie(prefix + '.headingFont') : (defaults.headingFont || 'Open Sans, Helvetica, Arial, sans-serif');

  function parseJSONSafe(value, fallback) {
    if (!value) {
      return fallback;
    }

    try {
      return JSON.parse(value);
    } catch (e) {
      return fallback;
    }
  }

  var customClasses = parseJSONSafe($.cookie(prefix + '.customClasses'), {});
  var customClassesAtts = parseJSONSafe($.cookie(prefix + '.customClassesAtts'), []);
  var checkIDs = parseJSONSafe($.cookie(prefix + '.checkIDs'), {});
  var checkIDsKey;

  function ensurePreDefAnchor() {
    if (!$('#preDefStyle').length) {
      $('head').append('<style id="preDefStyle"></style>');
    }
  }

  function getRuntimeStyleTag() {
    var $tag = $('#u-ss-runtime-style');

    if (!$tag.length) {
      $tag = $('<style id="u-ss-runtime-style"></style>');
      $('head').append($tag);
    }

    return $tag;
  }

  function buildRuntimeCss() {
    var css = '';

    css += ':root{--u-ss-color:' + customColor + ';--u-ss-content-font:' + contentFont + ';--u-ss-heading-font:' + headingFont + ';--u-ss-outer-space:' + outerSpaces + ';}';
    css += 'body{font-family:var(--u-ss-content-font) !important;}';
    css += 'h1,h2,h3,h4,h5,h6,.h1,.h2,.h3,.h4,.h5,.h6{font-family:var(--u-ss-heading-font) !important;}';
    css += '.g-color-primary,.g-color-primary--hover:hover,.u-icon-v1:hover,.u-icon-v2:hover{color:var(--u-ss-color) !important;}';
    css += '.g-bg-primary,.g-bg-primary--hover:hover,.u-btn-primary,.u-btn-primary:hover,.u-btn-primary.active{background-color:var(--u-ss-color) !important;border-color:var(--u-ss-color) !important;}';
    css += '.g-brd-primary,.g-brd-primary--hover:hover{border-color:var(--u-ss-color) !important;}';

    return css;
  }

  function currentSkinCss() {
    var lessCss = $('[id^="less:"]').text();

    if (lessCss) {
      return lessCss;
    }

    return $('#u-ss-runtime-style').text();
  }

  function persistSkinCss() {
    if (typeof localStorage === 'undefined') {
      return;
    }

    var css = currentSkinCss();

    if (css) {
      localStorage.setItem(prefix + '.skin.css', css);
    }
  }

  function applySkinVars(vars) {
    customColor = vars['@customColor'] || customColor;
    contentFont = vars['@contentFont'] || contentFont;
    headingFont = vars['@headingFont'] || headingFont;
    outerSpaces = vars['@outerSpaces'] || outerSpaces;

    if (window.less && typeof window.less.modifyVars === 'function' && $('[id^="less:"]').length) {
      window.less.modifyVars(vars);
    } else {
      getRuntimeStyleTag().text(buildRuntimeCss());
    }

    persistSkinCss();
  }

  ensurePreDefAnchor();

  if (typeof localStorage !== 'undefined' && localStorage.getItem(prefix + '.skin.css') !== null) {
    $('#preDefStyle').text(localStorage.getItem(prefix + '.skin.css'));
  }

  if (preDefStyle !== 'default') {
    $('<link class="u-predefined-style" href="' + preDefStyle + '" rel="stylesheet">').insertBefore('#preDefStyle');
  }

  for (var customClassesKey in customClasses) {
    $(customClassesKey).addClass(customClasses[customClassesKey]);
  }

  if (customClassesAtts.length) {
    for (var i = 0; i < customClassesAtts.length; i++) {
      $(customClassesAtts[i].s).attr(customClassesAtts[i].a, customClassesAtts[i].v);
    }
  }

  for (checkIDsKey in checkIDs) {
    if ($('#' + checkIDs[checkIDsKey]).is('option')) {
      $('#' + checkIDs[checkIDsKey]).attr('selected', 'selected');
    } else {
      $('#' + checkIDs[checkIDsKey]).attr('checked', 'checked');
    }
  }

  $('.u-ss-toggler').on('click', function (e) {
    e.preventDefault();

    if (styleSwitcher.hasClass('u-ss_initialized')) {
      $(this).closest('.u-ss').toggleClass('u-ss_opened');
      return false;
    }

    var windW = $(window).width();

    if (windW <= 1400 && $.HSCore && $.HSCore.components && $.HSCore.components.HSModalWindow) {
      $.HSCore.components.HSModalWindow.init('#semiboxed');
    }

    if ($.HSCore && $.HSCore.components && $.HSCore.components.HSScrollBar) {
      $.HSCore.components.HSScrollBar.init($('.js-ss-scrollbar'));
    }

    if ($.HSCore && $.HSCore.components && $.HSCore.components.HSSelect) {
      $.HSCore.components.HSSelect.init('.js-ss-select');
    }

    if ($.HSCore && $.HSCore.components && $.HSCore.components.HSMarkupCopy) {
      $.HSCore.components.HSMarkupCopy.init('.js-ss-copy');
    }

    if ($.HSCore && $.HSCore.components && $.HSCore.components.HSModalWindow) {
      $.HSCore.components.HSModalWindow.init('#getCSSSkin', {
        onOpen: function () {
          var target = $(this[0].offsetParent.ownerDocument.activeElement).data('content-target');

          $('.custombox-content .modal-demo')
            .append('<pre id="prism"><code class="language-css"><div></div></code></pre>')
            .find('#prism code > div')
            .text($(target).html());

          if (window.Prism) {
            Prism.highlightAll();
          }

          if ($.HSCore && $.HSCore.components && $.HSCore.components.HSScrollBar) {
            $.HSCore.components.HSScrollBar.init($('.custombox-content .modal-demo'));
          }
        },
        onClose: function () {
          if ($('#copyModal').length && typeof $('#copyModal').mCustomScrollbar === 'function') {
            $('#copyModal').mCustomScrollbar('destroy');
          }
          $('#prism').remove();
        }
      });
    }

    setTimeout(function () {
      styleSwitcher.addClass('u-ss_opened u-ss_initialized');
    }, 100);
  });

  $(document).on('ready', function () {
    $('body').hasClass('g-layout-boxed') || $('body').hasClass('g-layout-semiboxed') ? $('#customBG').addClass('u-ss-option_opened') : $('#customBG').addClass('u-ss-option_closed');

    if (customColor === (defaults.customColor || '#72c02c')) {
      $('.js-ss-color').each(function () {
        var thisVal = $(this).val();

        if (parseJSONSafe(thisVal, [{}])[0].customColor === customColor) {
          $(this).attr('checked', 'checked');
        }
      });
    }

    applySkinVars({
      '@customColor': customColor,
      '@contentFont': contentFont,
      '@headingFont': headingFont,
      '@outerSpaces': outerSpaces
    });

    $('.js-ss-color').on('change', function () {
      var $this = $(this);
      var ID = $this.attr('id');
      var thisName = $this.attr('name');
      var thisValueArr = parseJSONSafe($this.val(), [{}]);

      applySkinVars({
        '@customColor': thisValueArr[0].customColor,
        '@contentFont': contentFont,
        '@headingFont': headingFont,
        '@outerSpaces': outerSpaces
      });

      customColor = thisValueArr[0].customColor;
      checkIDs[thisName] = ID;

      $.cookie(prefix + '.customColor', thisValueArr[0].customColor);
      $.cookie(prefix + '.checkIDs', JSON.stringify(checkIDs));
      persistSkinCss();
    });

    $('.js-ss-predefined-style').on('change', function () {
      var $this = $(this);
      var ID = $this.children(':selected').attr('id');
      var thisName = 'predefined-style';
      var thisValueArr = parseJSONSafe($this.val(), [{}]);

      $('.u-predefined-style').remove();
      if (thisValueArr[0].preDefStyle !== 'default') {
        $('<link class="u-predefined-style" href="' + thisValueArr[0].preDefStyle + '" rel="stylesheet">').insertBefore('#preDefStyle');
      }

      preDefStyle = thisValueArr[0].preDefStyle;
      checkIDs = thisValueArr[0].checkIDs || {};
      checkIDs[thisName] = ID;

      for (checkIDsKey in checkIDs) {
        if ($('#' + checkIDs[checkIDsKey]).is('option')) {
          $('#' + checkIDs[checkIDsKey]).attr('selected', 'selected');
          $('.js-ss-select').trigger('chosen:updated');
        } else {
          $('#' + checkIDs[checkIDsKey]).trigger('click').attr('checked', 'checked');
        }
      }

      $.cookie(prefix + '.preDefStyle', preDefStyle);
      $.cookie(prefix + '.checkIDs', JSON.stringify(checkIDs));
      persistSkinCss();
    });

    $('.js-ss-font').on('change', function () {
      var $this = $(this);
      var ID = $this.children(':selected').attr('id');
      var thisName = 'font';
      var thisValueArr = parseJSONSafe($this.val(), [{}]);

      applySkinVars({
        '@contentFont': thisValueArr[0].contentFont,
        '@customColor': customColor,
        '@headingFont': headingFont,
        '@outerSpaces': outerSpaces
      });

      contentFont = thisValueArr[0].contentFont;
      checkIDs[thisName] = ID;

      $.cookie(prefix + '.contentFont', thisValueArr[0].contentFont);
      $.cookie(prefix + '.checkIDs', JSON.stringify(checkIDs));
      persistSkinCss();
    });

    $('.js-ss-heading-font').on('change', function () {
      var $this = $(this);
      var ID = $this.children(':selected').attr('id');
      var thisName = 'heading-font';
      var thisValueArr = parseJSONSafe($this.val(), [{}]);

      applySkinVars({
        '@headingFont': thisValueArr[0].headingFont,
        '@customColor': customColor,
        '@contentFont': contentFont,
        '@outerSpaces': outerSpaces
      });

      headingFont = thisValueArr[0].headingFont;
      checkIDs[thisName] = ID;

      $.cookie(prefix + '.headingFont', thisValueArr[0].headingFont);
      $.cookie(prefix + '.checkIDs', JSON.stringify(checkIDs));
      persistSkinCss();
    });

    $('.js-ss-color-picker').each(function () {
      $(this).spectrum({
        color: customColor ? customColor : 'transparent'
      });

      $(this).siblings('.u-ss__control').val(customColor ? customColor : 'transparent');

      $(this).on('dragstop.spectrum', function (e, color) {
        $('#customColors').find('.js-ss-color').removeAttr('checked');

        applySkinVars({
          '@customColor': color.toHexString(),
          '@contentFont': contentFont,
          '@headingFont': headingFont,
          '@outerSpaces': outerSpaces
        });

        customColor = color.toHexString();

        $.cookie(prefix + '.customColor', color.toHexString());
        $.cookie(prefix + '.checkIDs', '');
        persistSkinCss();

        $(this).siblings('.u-ss__control').val(customColor);
      });
    });

    $('#customColors .js-ss-color').on('change', function () {
      $('#userColor .js-ss-color-picker').spectrum('set', customColor);
      $('#userColor .js-ss-color-picker').siblings('.u-ss__control').val(customColor);
    });

    $('#userColor .u-ss__control').on('change', function () {
      var thisVal = $(this).val();

      applySkinVars({
        '@customColor': thisVal,
        '@contentFont': contentFont,
        '@headingFont': headingFont,
        '@outerSpaces': outerSpaces
      });

      customColor = thisVal;

      $.cookie(prefix + '.customColor', thisVal);
      $.cookie(prefix + '.checkIDs', '');
      persistSkinCss();

      $('#customColors .js-ss-color').removeAttr('checked');
      $('#userColor .js-ss-color-picker').spectrum('set', customColor);
    });

    $('.js-ss-classes').on('change', function () {
      var $this = $(this);
      var ID = $this.attr('id');
      var thisName = $this.attr('name');
      var values = $this.val();
      var selectors = $this.data('selectors');
      var radGroup = $this.attr('name');

      $(selectors).not('.u-ss *').removeClass($(selectors).attr('data-' + radGroup));
      $(selectors).attr('data-' + radGroup, values);
      $(selectors).not('.u-ss *').addClass(values);

      customClasses[selectors] = $(selectors).attr('class');
      customClassesAtts.push({
        s: selectors,
        a: 'data-' + radGroup,
        v: values
      });
      checkIDs[thisName] = ID;

      $.cookie(prefix + '.customClasses', JSON.stringify(customClasses));
      $.cookie(prefix + '.customClassesAtts', JSON.stringify(customClassesAtts));
      $.cookie(prefix + '.checkIDs', JSON.stringify(checkIDs));
      persistSkinCss();
    });

    $('.js-ss-option-open').on('click', function () {
      var $this = $(this);
      var $target = $($this.data('option-target'));

      if (!$target.hasClass('u-ss-option_opened')) {
        $target.slideDown(400, function () {
          $target.removeClass('u-ss-option_closed');
          $target.addClass('u-ss-option_opened');
        });
      }
    });

    $('.js-ss-option-close').on('click', function () {
      var $this = $(this);
      var $target = $($this.data('option-target'));
      var $checkItem = $($this.data('check-item'));

      if (!$target.hasClass('u-ss-option_closed')) {
        $checkItem.trigger('click');

        $target.slideUp(400, function () {
          $target.removeClass('u-ss-option_opened');
          $target.addClass('u-ss-option_closed');
        });
      }
    });

    $('.js-ss-reset').on('click', function () {
      $.removeCookie(prefix + '.customColor');
      $.removeCookie(prefix + '.preDefStyle');
      $.removeCookie(prefix + '.outerSpaces');
      $.removeCookie(prefix + '.contentFont');
      $.removeCookie(prefix + '.headingFont');
      $.removeCookie(prefix + '.customClasses');
      $.removeCookie(prefix + '.customClassesAtts');
      $.removeCookie(prefix + '.checkIDs');
      localStorage.removeItem(prefix + '.skin.css');
      window.location.reload();
    });
  });
})(jQuery);
