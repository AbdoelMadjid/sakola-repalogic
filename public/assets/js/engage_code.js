// Generic engage banner for reusable site-wide announcements.
// Usage example from Blade:
// <script>
//     window.RepalogicEngageBannerConfig = {
//         enabled: true,
//         storageKey: 'dashboard-announcement',
//         title: 'Informasi Sistem',
//         message: 'Konten banner ini bisa diubah sesuai kebutuhan halaman.',
//         iconUrl: '{{ asset('assets/media/logos/logo-letter-1.png') }}',
//         primaryAction: {
//             label: 'Lihat Detail',
//             href: '{{ url('/pengumuman') }}'
//         }
//     };
// </script>
(function(window, document) {
    'use strict';

    function createCookieStore() {
        return {
            get: function(name) {
                var matches = document.cookie.match(new RegExp(
                    '(?:^|; )' + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + '=([^;]*)'
                ));

                return matches ? decodeURIComponent(matches[1]) : null;
            },

            set: function(name, value, options) {
                if (typeof options === 'undefined' || options === null) {
                    options = {};
                }

                options = Object.assign({
                    path: '/'
                }, options);

                if (options.expires instanceof Date) {
                    options.expires = options.expires.toUTCString();
                }

                var updatedCookie = encodeURIComponent(name) + '=' + encodeURIComponent(value);

                for (var optionKey in options) {
                    if (!Object.prototype.hasOwnProperty.call(options, optionKey)) {
                        continue;
                    }

                    updatedCookie += '; ' + optionKey;

                    if (options[optionKey] !== true) {
                        updatedCookie += '=' + options[optionKey];
                    }
                }

                document.cookie = updatedCookie;
            }
        };
    }

    function getPageKey() {
        var path = window.location.pathname;
        var segments = path.split('/').filter(function(segment) {
            return segment !== '';
        });

        return segments[0] || 'home';
    }

    function mergeConfig(input) {
        return Object.assign({
            enabled: false,
            delay: 8000,
            dismissible: true,
            rememberForDays: 3,
            maxWidth: '1300px',
            bottom: '60px',
            zIndex: 10000,
            backgroundColor: '#050421',
            textColor: '#FFFFFF',
            secondaryTextColor: 'rgba(255, 255, 255, 0.75)',
            primaryButtonColor: '#00AB4E',
            primaryButtonTextColor: '#FFFFFF',
            borderRadius: '6px',
            boxShadow: '0px 5px 30px rgba(5, 4, 33, 0.3)',
            title: '',
            message: '',
            iconUrl: '',
            iconAlt: '',
            iconHeight: '26px',
            alertSymbol: '',
            alertSymbolColor: '#FFFFFF',
            alertSymbolBackgroundColor: '#FFF4DE',
            alertSymbolBorder: '1px solid rgba(255, 168, 0, 0.35)',
            alertSymbolSize: '56px',
            storageKey: 'global-engage-banner',
            primaryAction: null,
            secondaryAction: null
        }, input || {});
    }

    function createActionLink(action, styles) {
        if (!action || !action.label) {
            return null;
        }

        var link = document.createElement('a');
        link.textContent = action.label;
        link.href = action.href || '#';
        link.style.textDecoration = 'none';
        link.style.fontWeight = 'bold';
        link.style.textTransform = 'uppercase';
        link.style.padding = '10px 16px 9px 16px';
        link.style.borderRadius = '6px';
        link.style.whiteSpace = 'nowrap';
        link.style.marginRight = styles.marginRight;
        link.style.backgroundColor = styles.backgroundColor;
        link.style.color = styles.color;
        link.target = action.target || '_self';

        if (action.rel) {
            link.rel = action.rel;
        } else if (link.target === '_blank') {
            link.rel = 'noopener noreferrer';
        }

        return link;
    }

    function createDismissButton(onClick) {
        var button = document.createElement('button');
        button.type = 'button';
        button.setAttribute('aria-label', 'Dismiss banner');
        button.innerHTML = '&times;';
        button.style.position = 'absolute';
        button.style.top = '12px';
        button.style.right = '12px';
        button.style.background = 'transparent';
        button.style.border = '0';
        button.style.color = '#FFFFFF';
        button.style.cursor = 'pointer';
        button.style.fontSize = '28px';
        button.style.lineHeight = '1';
        button.style.padding = '0';
        button.style.width = '32px';
        button.style.height = '32px';
        button.style.display = 'flex';
        button.style.alignItems = 'center';
        button.style.justifyContent = 'center';
        button.style.opacity = '0.8';

        button.addEventListener('click', onClick);

        return button;
    }

    function createAlertSymbol(config) {
        if (!config.alertSymbol) {
            return null;
        }

        var symbol = document.createElement('div');
        symbol.textContent = config.alertSymbol;
        symbol.style.display = 'flex';
        symbol.style.alignItems = 'center';
        symbol.style.justifyContent = 'center';
        symbol.style.width = config.alertSymbolSize;
        symbol.style.height = config.alertSymbolSize;
        symbol.style.minWidth = config.alertSymbolSize;
        symbol.style.borderRadius = '999px';
        symbol.style.backgroundColor = config.alertSymbolBackgroundColor;
        symbol.style.border = config.alertSymbolBorder;
        symbol.style.color = config.alertSymbolColor;
        symbol.style.fontSize = '40px';
        symbol.style.fontWeight = '700';
        symbol.style.lineHeight = '1';

        return symbol;
    }

    function createBannerElement(config, dismiss) {
        var banner = document.createElement('div');
        banner.id = 'repalogic_engage_banner';
        banner.style.transform = 'translateX(-50%)';
        banner.style.position = 'fixed';
        banner.style.left = '50%';
        banner.style.bottom = config.bottom;
        banner.style.zIndex = String(config.zIndex);
        banner.style.boxSizing = 'border-box';
        banner.style.maxWidth = config.maxWidth;
        banner.style.width = 'calc(100% - 60px)';
        banner.style.backgroundColor = config.backgroundColor;
        banner.style.padding = '20px 56px 20px 20px';
        banner.style.borderRadius = config.borderRadius;
        banner.style.boxShadow = config.boxShadow;
        banner.style.display = 'flex';
        banner.style.alignItems = 'flex-start';
        banner.style.justifyContent = 'space-between';
        banner.style.gap = '16px';
        banner.style.flexWrap = 'wrap';

        var content = document.createElement('div');
        content.style.display = 'flex';
        content.style.alignItems = 'flex-start';
        content.style.flex = '1 1 320px';
        content.style.minWidth = '0';

        var alertSymbol = createAlertSymbol(config);
        if (alertSymbol) {
            alertSymbol.style.marginRight = '16px';
            content.appendChild(alertSymbol);
        }

        if (config.iconUrl) {
            var icon = document.createElement('img');
            icon.src = config.iconUrl;
            icon.alt = config.iconAlt || '';
            icon.style.height = config.iconHeight;
            icon.style.marginLeft = '10px';
            icon.style.marginRight = '25px';
            icon.style.marginBottom = '2px';
            content.appendChild(icon);
        }

        var textWrap = document.createElement('div');
        textWrap.style.display = 'flex';
        textWrap.style.flexDirection = 'column';
        textWrap.style.gap = '4px';
        textWrap.style.color = config.textColor;
        textWrap.style.fontSize = '14px';
        textWrap.style.minWidth = '0';

        if (config.title) {
            var title = document.createElement('b');
            title.textContent = config.title;
            title.style.display = 'block';
            title.style.lineHeight = '1.4';
            textWrap.appendChild(title);
        }

        if (config.message) {
            var message = document.createElement('span');
            message.textContent = config.message;
            message.style.display = 'block';
            message.style.lineHeight = '1.5';
            message.style.opacity = '0.75';
            message.style.color = config.secondaryTextColor;
            textWrap.appendChild(message);
        }

        content.appendChild(textWrap);
        banner.appendChild(content);

        var actions = document.createElement('div');
        actions.style.display = 'flex';
        actions.style.alignItems = 'center';
        actions.style.flexWrap = 'wrap';
        actions.style.gap = '12px';
        actions.style.flex = '1 1 100%';
        actions.style.justifyContent = 'flex-end';
        actions.style.paddingTop = '4px';

        var primaryAction = createActionLink(config.primaryAction, {
            marginRight: '0',
            backgroundColor: config.primaryButtonColor,
            color: config.primaryButtonTextColor
        });
        if (primaryAction) {
            actions.appendChild(primaryAction);
        }

        var secondaryAction = createActionLink(config.secondaryAction, {
            marginRight: '0',
            backgroundColor: 'transparent',
            color: config.textColor
        });
        if (secondaryAction) {
            secondaryAction.style.border = '1px solid rgba(255, 255, 255, 0.25)';
            actions.appendChild(secondaryAction);
        }

        if (actions.children.length > 0) {
            banner.appendChild(actions);
        }

        if (config.dismissible) {
            banner.appendChild(createDismissButton(dismiss));
        }

        return banner;
    }

    function createBannerManager() {
        var cookieStore = createCookieStore();
        var activeBanner = null;
        var activeConfig = null;

        function getCookieKey(config) {
            return config.storageKey + ':' + getPageKey();
        }

        function dismiss() {
            if (!activeBanner || !activeConfig) {
                return;
            }

            var expireDate = new Date();
            var rememberForDays = Math.max(parseInt(activeConfig.rememberForDays, 10) || 0, 0);
            expireDate.setTime(expireDate.getTime() + (rememberForDays * 24 * 60 * 60 * 1000));
            cookieStore.set(getCookieKey(activeConfig), '1', { expires: expireDate });

            if (activeBanner.parentNode) {
                activeBanner.parentNode.removeChild(activeBanner);
            }

            activeBanner = null;
            activeConfig = null;
        }

        function show(configInput) {
            var config = mergeConfig(configInput);

            if (!config.enabled) {
                return;
            }

            if (!config.title && !config.message) {
                return;
            }

            if (cookieStore.get(getCookieKey(config))) {
                return;
            }

            if (activeBanner) {
                dismiss();
            }

            activeConfig = config;
            activeBanner = createBannerElement(config, dismiss);

            window.setTimeout(function() {
                if (!activeBanner || activeConfig !== config) {
                    return;
                }

                document.body.appendChild(activeBanner);
            }, config.delay);
        }

        return {
            show: show,
            dismiss: dismiss
        };
    }

    var bannerManager = createBannerManager();
    window.RepalogicEngageBanner = bannerManager;

    window.addEventListener('load', function() {
        if (window.RepalogicEngageBannerConfig) {
            bannerManager.show(window.RepalogicEngageBannerConfig);
        }
    });
})(window, document);
