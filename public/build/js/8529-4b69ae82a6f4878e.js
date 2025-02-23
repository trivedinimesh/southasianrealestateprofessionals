"use strict";
(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
    [8529],
    {
        3750: function (e, s, a) {
            var n = a(7294),
                i = a(2966),
                t = a(5893);
            s.Z = function () {
                var e = (0, n.useContext)(i.v),
                    s = e.dark,
                    a = e.setDark,
                    c = (0, n.useState)(!1),
                    l = c[0],
                    r = c[1];
                return (0, t.jsx)("div", {
                    className: "bd-theme-settings-area transition-3 ".concat(
                        l ? "settings-opened" : ""
                    ),
                    children: (0, t.jsxs)("div", {
                        className: "bd-theme-wrapper ".concat(
                            s ? "bd-theme-dark" : "bd-theme-light"
                        ),
                        children: [
                            (0, t.jsx)("div", {
                                className: "bd-theme-header text-center",
                                children: (0, t.jsx)("h4", {
                                    className: "bd-theme-header-title",
                                    children: "Template Settings",
                                }),
                            }),
                            (0, t.jsx)("div", {
                                className: "bd-theme-toggle mb-20 d-block",
                                children: (0, t.jsxs)("label", {
                                    className: "bd-theme-toggle-main",
                                    htmlFor: "bd-theme-toggler",
                                    children: [
                                        (0, t.jsxs)("span", {
                                            className:
                                                "bd-theme-toggle-dark ".concat(
                                                    s ? "active" : ""
                                                ),
                                            children: [
                                                (0, t.jsx)("i", {
                                                    className:
                                                        "fa-light fa-moon",
                                                }),
                                                " Dark",
                                            ],
                                        }),
                                        (0, t.jsx)("input", {
                                            type: "checkbox",
                                            id: "bd-theme-toggler",
                                            checked: s,
                                            onChange: function () {
                                                localStorage.removeItem(
                                                    "darkMode"
                                                ),
                                                    a(!s);
                                            },
                                        }),
                                        (0, t.jsx)("i", {
                                            className: "bd-theme-toggle-slide",
                                        }),
                                        (0, t.jsxs)("span", {
                                            className:
                                                "bd-theme-toggle-light ".concat(
                                                    s ? "" : "active"
                                                ),
                                            children: [
                                                (0, t.jsx)("i", {
                                                    className:
                                                        "fa-light fa-sun-bright",
                                                }),
                                                " Light",
                                            ],
                                        }),
                                    ],
                                }),
                            }),
                            (0, t.jsx)("div", {
                                className: "bd-theme-settings",
                                children: (0, t.jsx)("div", {
                                    className: "bd-theme-settings-wrapper",
                                    children: (0, t.jsx)("div", {
                                        className: "bd-theme-settings-open",
                                        children: (0, t.jsxs)("button", {
                                            onClick: function () {
                                                r(!l);
                                            },
                                            className:
                                                "bd-theme-settings-open-btn",
                                            children: [
                                                (0, t.jsx)("span", {
                                                    className:
                                                        "bd-theme-settings-gear",
                                                    children: (0, t.jsx)("i", {
                                                        className:
                                                            "fa-light fa-gear",
                                                    }),
                                                }),
                                                (0, t.jsx)("span", {
                                                    className:
                                                        "bd-theme-settings-close",
                                                    children: (0, t.jsx)("i", {
                                                        className:
                                                            "fa-regular fa-xmark",
                                                    }),
                                                }),
                                            ],
                                        }),
                                    }),
                                }),
                            }),
                        ],
                    }),
                });
            };
        },
        6599: function (e, s, a) {
            a.d(s, {
                Z: function () {
                    return t;
                },
            });
            var n = a(7294);
            var i = a(5893);
            var t = function (e) {
                var s = e.className;
                return (
                    (0, n.useEffect)(function () {
                        !(function (e) {
                            var s = document.querySelector(e);
                            s &&
                                (document.addEventListener(
                                    "scroll",
                                    function () {
                                        window.scrollY > 200
                                            ? (s.style.display = "block")
                                            : (s.style.display = "none");
                                    }
                                ),
                                s.addEventListener("click", function () {
                                    window.scrollTo({
                                        top: 0,
                                        behavior: "smooth",
                                    });
                                }));
                        })(".active-progress");
                    }, []),
                    (0, i.jsx)("div", {
                        className: " progress-wrap active-progress ".concat(
                            s || ""
                        ),
                        children: (0, i.jsx)("button", {
                            id: "back_to_top",
                            type: "button",
                            className: "back-to-top-btn",
                            children: (0, i.jsx)("svg", {
                                className: "progress-circle svg-content",
                                width: "100%",
                                height: "100%",
                                viewBox: "-1 -1 102 102",
                                children: (0, i.jsx)("path", {
                                    d: "M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98",
                                }),
                            }),
                        }),
                    })
                );
            };
        },
        6: function (e, s, a) {
            a.d(s, {
                Z: function () {
                    return h;
                },
            });
            var n = a(7294),
                i = a(1432),
                t = a(1664),
                c = a.n(t),
                l = "/_next/static/media/logo-black.51edaff6.svg",
                r = [
                    { text: "Home", link: "/" },
                    { text: "Dashboard", link: "/login" },
                    { text: "About", link: "/about" },
                    { text: "Speakers", link: "/speaker-list-two" },
                    { text: "Events", link: "/event-list-two" },
                    { text: "Blog", link: "/blog" },
                    { text: "Pricing", link: "/pricing" },
                    { text: "Contact2", link: "/contact" },
                    { text: "login", link: "/login" },
                ],
                d = a(5893),
                o = function () {
                    var e = (0, n.useContext)(i.I).toggleSideMenu;
                    return (0, d.jsx)("div", {
                        className: "mean-bar",
                        children: (0, d.jsx)("nav", {
                            className: "mean-nav",
                            children: (0, d.jsx)("ul", {
                                children:
                                    r.length > 0 &&
                                    r.map(function (s, a) {
                                        return (0,
                                        d.jsx)("li", { onClick: e, children: (0, d.jsx)(c(), { href: s.link, children: s.text }) }, a);
                                    }),
                            }),
                        }),
                    });
                },
                h = function () {
                    var e = (0, n.useContext)(i.I),
                        s = e.sideMenuOpen,
                        a = e.toggleSideMenu,
                        t = (0, n.useState)(!1),
                        r = t[0],
                        h = t[1];
                    return (
                        (0, n.useEffect)(function () {
                            var e = function () {
                                h(window.innerWidth <= 1199);
                            };
                            return (
                                window.addEventListener("resize", e),
                                e(),
                                function () {
                                    window.removeEventListener("resize", e);
                                }
                            );
                        }, []),
                        (0, d.jsxs)(d.Fragment, {
                            children: [
                                (0, d.jsx)("div", {
                                    className: "fix",
                                    children: (0, d.jsx)("div", {
                                        className: "offcanvas__info ".concat(
                                            s ? "info-open" : " "
                                        ),
                                        children: (0, d.jsx)("div", {
                                            className: "offcanvas__wrapper",
                                            children: (0, d.jsxs)("div", {
                                                className: "offcanvas__content",
                                                children: [
                                                    (0, d.jsxs)("div", {
                                                        className:
                                                            "offcanvas__top mb-40 d-flex justify-content-between align-items-center",
                                                        children: [
                                                            (0, d.jsx)("div", {
                                                                className:
                                                                    "offcanvas__logo",
                                                                children: (0,
                                                                d.jsx)(c(), {
                                                                    href: "/",
                                                                    children:
                                                                        (0,
                                                                        d.jsx)(
                                                                            "a",
                                                                            {
                                                                                children:
                                                                                    (0,
                                                                                    d.jsx)(
                                                                                        "img",
                                                                                        {
                                                                                            src: l,
                                                                                            alt: "logo not found",
                                                                                        }
                                                                                    ),
                                                                            }
                                                                        ),
                                                                }),
                                                            }),
                                                            (0, d.jsx)("div", {
                                                                className:
                                                                    "offcanvas__close",
                                                                children: (0,
                                                                d.jsx)(
                                                                    "button",
                                                                    {
                                                                        onClick:
                                                                            a,
                                                                        children:
                                                                            (0,
                                                                            d.jsx)(
                                                                                "i",
                                                                                {
                                                                                    className:
                                                                                        "fal fa-times",
                                                                                }
                                                                            ),
                                                                    }
                                                                ),
                                                            }),
                                                        ],
                                                    }),
                                                    (0, d.jsx)("div", {
                                                        className:
                                                            "offcanvas__search mb-25",
                                                        children: (0, d.jsxs)(
                                                            "form",
                                                            {
                                                                action: "#",
                                                                children: [
                                                                    (0, d.jsx)(
                                                                        "input",
                                                                        {
                                                                            type: "text",
                                                                            placeholder:
                                                                                "What are you searching for?",
                                                                        }
                                                                    ),
                                                                    (0, d.jsx)(
                                                                        "button",
                                                                        {
                                                                            type: "submit",
                                                                            children:
                                                                                (0,
                                                                                d.jsx)(
                                                                                    "i",
                                                                                    {
                                                                                        className:
                                                                                            "far fa-search",
                                                                                    }
                                                                                ),
                                                                        }
                                                                    ),
                                                                ],
                                                            }
                                                        ),
                                                    }),
                                                    (0, d.jsx)("div", {
                                                        className:
                                                            "mobile-menu fix mb-40 ".concat(
                                                                r
                                                                    ? "mean-container"
                                                                    : ""
                                                            ),
                                                        children:
                                                            r &&
                                                            (0, d.jsx)(o, {}),
                                                    }),
                                                    (0, d.jsxs)("div", {
                                                        className:
                                                            "offcanvas__contact mt-30 mb-20",
                                                        children: [
                                                            (0, d.jsx)("h4", {
                                                                children:
                                                                    "Contact Info",
                                                            }),
                                                            (0, d.jsxs)("ul", {
                                                                children: [
                                                                    (0, d.jsxs)(
                                                                        "li",
                                                                        {
                                                                            className:
                                                                                "d-flex align-items-center",
                                                                            children:
                                                                                [
                                                                                    (0,
                                                                                    d.jsx)(
                                                                                        "div",
                                                                                        {
                                                                                            className:
                                                                                                "offcanvas__contact-icon mr-15",
                                                                                            children:
                                                                                                (0,
                                                                                                d.jsx)(
                                                                                                    "i",
                                                                                                    {
                                                                                                        className:
                                                                                                            "fal fa-map-marker-alt",
                                                                                                    }
                                                                                                ),
                                                                                        }
                                                                                    ),
                                                                                    (0,
                                                                                    d.jsx)(
                                                                                        "div",
                                                                                        {
                                                                                            className:
                                                                                                "offcanvas__contact-text",
                                                                                            children:
                                                                                                (0,
                                                                                                d.jsx)(
                                                                                                    c(),
                                                                                                    {
                                                                                                        target: "_blank",
                                                                                                        href: "https://www.google.com/maps/place/Dhaka/@23.7806207,90.3492859,12z/data=!3m1!4b1!4m5!3m4!1s0x3755b8b087026b81:0x8fa563bbdd5904c2!8m2!3d23.8104753!4d90.4119873",
                                                                                                        children:
                                                                                                            "12/A, Mirnada City Tower, NYC",
                                                                                                    }
                                                                                                ),
                                                                                        }
                                                                                    ),
                                                                                ],
                                                                        }
                                                                    ),
                                                                    (0, d.jsxs)(
                                                                        "li",
                                                                        {
                                                                            className:
                                                                                "d-flex align-items-center",
                                                                            children:
                                                                                [
                                                                                    (0,
                                                                                    d.jsx)(
                                                                                        "div",
                                                                                        {
                                                                                            className:
                                                                                                "offcanvas__contact-icon mr-15",
                                                                                            children:
                                                                                                (0,
                                                                                                d.jsx)(
                                                                                                    "i",
                                                                                                    {
                                                                                                        className:
                                                                                                            "far fa-phone",
                                                                                                    }
                                                                                                ),
                                                                                        }
                                                                                    ),
                                                                                    (0,
                                                                                    d.jsx)(
                                                                                        "div",
                                                                                        {
                                                                                            className:
                                                                                                "offcanvas__contact-text",
                                                                                            children:
                                                                                                (0,
                                                                                                d.jsx)(
                                                                                                    "a",
                                                                                                    {
                                                                                                        href: "tel:+088889797697",
                                                                                                        children:
                                                                                                            "+088889797697",
                                                                                                    }
                                                                                                ),
                                                                                        }
                                                                                    ),
                                                                                ],
                                                                        }
                                                                    ),
                                                                    (0, d.jsxs)(
                                                                        "li",
                                                                        {
                                                                            className:
                                                                                "d-flex align-items-center",
                                                                            children:
                                                                                [
                                                                                    (0,
                                                                                    d.jsx)(
                                                                                        "div",
                                                                                        {
                                                                                            className:
                                                                                                "offcanvas__contact-icon mr-15",
                                                                                            children:
                                                                                                (0,
                                                                                                d.jsx)(
                                                                                                    "i",
                                                                                                    {
                                                                                                        className:
                                                                                                            "fal fa-envelope",
                                                                                                    }
                                                                                                ),
                                                                                        }
                                                                                    ),
                                                                                    (0,
                                                                                    d.jsx)(
                                                                                        "div",
                                                                                        {
                                                                                            className:
                                                                                                "offcanvas__contact-text",
                                                                                            children:
                                                                                                (0,
                                                                                                d.jsx)(
                                                                                                    "a",
                                                                                                    {
                                                                                                        href: "tel:+012-345-6789",
                                                                                                        children:
                                                                                                            (0,
                                                                                                            d.jsx)(
                                                                                                                "span",
                                                                                                                {
                                                                                                                    className:
                                                                                                                        "mailto:support@mail.com",
                                                                                                                    children:
                                                                                                                        "support@mail.com",
                                                                                                                }
                                                                                                            ),
                                                                                                    }
                                                                                                ),
                                                                                        }
                                                                                    ),
                                                                                ],
                                                                        }
                                                                    ),
                                                                ],
                                                            }),
                                                        ],
                                                    }),
                                                    (0, d.jsx)("div", {
                                                        className:
                                                            "offcanvas__social",
                                                        children: (0, d.jsxs)(
                                                            "ul",
                                                            {
                                                                children: [
                                                                    (0, d.jsx)(
                                                                        "li",
                                                                        {
                                                                            children:
                                                                                (0,
                                                                                d.jsx)(
                                                                                    c(),
                                                                                    {
                                                                                        href: "https://www.facebook.com/",
                                                                                        target: "_blank",
                                                                                        children:
                                                                                            (0,
                                                                                            d.jsx)(
                                                                                                "a",
                                                                                                {
                                                                                                    children:
                                                                                                        (0,
                                                                                                        d.jsx)(
                                                                                                            "i",
                                                                                                            {
                                                                                                                className:
                                                                                                                    "fa-brands fa-facebook",
                                                                                                            }
                                                                                                        ),
                                                                                                }
                                                                                            ),
                                                                                    }
                                                                                ),
                                                                        }
                                                                    ),
                                                                    (0, d.jsx)(
                                                                        "li",
                                                                        {
                                                                            children:
                                                                                (0,
                                                                                d.jsx)(
                                                                                    c(),
                                                                                    {
                                                                                        href: "https://twitter.com/",
                                                                                        target: "_blank",
                                                                                        children:
                                                                                            (0,
                                                                                            d.jsx)(
                                                                                                "a",
                                                                                                {
                                                                                                    children:
                                                                                                        (0,
                                                                                                        d.jsx)(
                                                                                                            "i",
                                                                                                            {
                                                                                                                className:
                                                                                                                    "fa-brands fa-twitter",
                                                                                                            }
                                                                                                        ),
                                                                                                }
                                                                                            ),
                                                                                    }
                                                                                ),
                                                                        }
                                                                    ),
                                                                    (0, d.jsx)(
                                                                        "li",
                                                                        {
                                                                            children:
                                                                                (0,
                                                                                d.jsx)(
                                                                                    c(),
                                                                                    {
                                                                                        href: "https://bd.linkedin.com/",
                                                                                        target: "_blank",
                                                                                        children:
                                                                                            (0,
                                                                                            d.jsx)(
                                                                                                "a",
                                                                                                {
                                                                                                    children:
                                                                                                        (0,
                                                                                                        d.jsx)(
                                                                                                            "i",
                                                                                                            {
                                                                                                                className:
                                                                                                                    "fa-brands fa-linkedin",
                                                                                                            }
                                                                                                        ),
                                                                                                }
                                                                                            ),
                                                                                    }
                                                                                ),
                                                                        }
                                                                    ),
                                                                    (0, d.jsx)(
                                                                        "li",
                                                                        {
                                                                            children:
                                                                                (0,
                                                                                d.jsx)(
                                                                                    c(),
                                                                                    {
                                                                                        href: "https://www.youtube.com/",
                                                                                        target: "_blank",
                                                                                        children:
                                                                                            (0,
                                                                                            d.jsx)(
                                                                                                "a",
                                                                                                {
                                                                                                    children:
                                                                                                        (0,
                                                                                                        d.jsx)(
                                                                                                            "i",
                                                                                                            {
                                                                                                                className:
                                                                                                                    "fa-brands fa-youtube",
                                                                                                            }
                                                                                                        ),
                                                                                                }
                                                                                            ),
                                                                                    }
                                                                                ),
                                                                        }
                                                                    ),
                                                                ],
                                                            }
                                                        ),
                                                    }),
                                                ],
                                            }),
                                        }),
                                    }),
                                }),
                                (0, d.jsx)("div", {
                                    onClick: a,
                                    className: "offcanvas__overlay ".concat(
                                        s ? "overlay-open" : " "
                                    ),
                                }),
                                (0, d.jsx)("div", {
                                    className: "offcanvas__overlay-white",
                                }),
                            ],
                        })
                    );
                };
        },
        2185: function (e, s, a) {
            a.d(s, {
                Z: function () {
                    return h;
                },
            });
            var n = a(1664),
                i = a.n(n),
                t = (a(7294), "/_next/static/media/footer-1.fdedce64.png"),
                c = "/_next/static/media/footer-2.4606daf3.png",
                l = "/_next/static/media/footer-3.5f937102.png",
                r = "/_next/static/media/footer-4.b96cb493.png",
                d = a(3313),
                o = a(5893),
                h = function () {
                    return (0, o.jsx)(o.Fragment, {
                        children: (0, o.jsx)("footer", {
                            children: (0, o.jsxs)("section", {
                                className:
                                    "footer__area footer-bg fix p-relative pt-145",
                                children: [
                                    (0, o.jsxs)("div", {
                                        className: "footer__shape",
                                        children: [
                                            (0, o.jsx)("img", {
                                                className: "footer__shape-1",
                                                src: t,
                                                alt: "image not found",
                                            }),
                                            (0, o.jsx)("img", {
                                                className: "footer__shape-2",
                                                src: c,
                                                alt: "image not found",
                                            }),
                                            (0, o.jsx)("img", {
                                                className: "footer__shape-3",
                                                src: l,
                                                alt: "image not found",
                                            }),
                                            (0, o.jsx)("img", {
                                                className: "footer__shape-4",
                                                src: r,
                                                alt: "image not found",
                                            }),
                                        ],
                                    }),
                                    (0, o.jsxs)("div", {
                                        className: "container",
                                        children: [
                                            (0, o.jsxs)("div", {
                                                className: "row",
                                                children: [
                                                    (0, o.jsx)("div", {
                                                        className:
                                                            "col-xxl-3 col-xl-3 col-lg-4 col-md-6",
                                                        children: (0, o.jsxs)(
                                                            "div",
                                                            {
                                                                className:
                                                                    "footer__widget-1 mb-70",
                                                                children: [
                                                                    (0, o.jsx)(
                                                                        "div",
                                                                        {
                                                                            className:
                                                                                "footer__logo mb-30",
                                                                            children:
                                                                                (0,
                                                                                o.jsx)(
                                                                                    "img",
                                                                                    {
                                                                                        src: d
                                                                                            .Z
                                                                                            .src,
                                                                                        alt: "image bnot found",
                                                                                    }
                                                                                ),
                                                                        }
                                                                    ),
                                                                    (0, o.jsxs)(
                                                                        "div",
                                                                        {
                                                                            className:
                                                                                "footer__content",
                                                                            children:
                                                                                [
                                                                                    (0,
                                                                                    o.jsx)(
                                                                                        "p",
                                                                                        {
                                                                                            children:
                                                                                                "Velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh. aliquam purus sit amet magna elemen facilisis. Enim praesent elementum facilisis.",
                                                                                        }
                                                                                    ),
                                                                                    (0,
                                                                                    o.jsxs)(
                                                                                        "div",
                                                                                        {
                                                                                            className:
                                                                                                "footer__social",
                                                                                            children:
                                                                                                [
                                                                                                    (0,
                                                                                                    o.jsx)(
                                                                                                        i(),
                                                                                                        {
                                                                                                            href: "https://www.facebook.com/",
                                                                                                            target: "_blank",
                                                                                                            children:
                                                                                                                (0,
                                                                                                                o.jsx)(
                                                                                                                    "a",
                                                                                                                    {
                                                                                                                        children:
                                                                                                                            (0,
                                                                                                                            o.jsx)(
                                                                                                                                "i",
                                                                                                                                {
                                                                                                                                    className:
                                                                                                                                        "fa-brands fa-facebook",
                                                                                                                                }
                                                                                                                            ),
                                                                                                                    }
                                                                                                                ),
                                                                                                        }
                                                                                                    ),
                                                                                                    (0,
                                                                                                    o.jsx)(
                                                                                                        i(),
                                                                                                        {
                                                                                                            href: "https://twitter.com/",
                                                                                                            target: "_blank",
                                                                                                            children:
                                                                                                                (0,
                                                                                                                o.jsx)(
                                                                                                                    "a",
                                                                                                                    {
                                                                                                                        children:
                                                                                                                            (0,
                                                                                                                            o.jsx)(
                                                                                                                                "i",
                                                                                                                                {
                                                                                                                                    className:
                                                                                                                                        "fa-brands fa-twitter",
                                                                                                                                }
                                                                                                                            ),
                                                                                                                    }
                                                                                                                ),
                                                                                                        }
                                                                                                    ),
                                                                                                    (0,
                                                                                                    o.jsx)(
                                                                                                        i(),
                                                                                                        {
                                                                                                            href: "https://bd.linkedin.com/",
                                                                                                            target: "_blank",
                                                                                                            children:
                                                                                                                (0,
                                                                                                                o.jsx)(
                                                                                                                    "a",
                                                                                                                    {
                                                                                                                        children:
                                                                                                                            (0,
                                                                                                                            o.jsx)(
                                                                                                                                "i",
                                                                                                                                {
                                                                                                                                    className:
                                                                                                                                        "fa-brands fa-linkedin",
                                                                                                                                }
                                                                                                                            ),
                                                                                                                    }
                                                                                                                ),
                                                                                                        }
                                                                                                    ),
                                                                                                    (0,
                                                                                                    o.jsx)(
                                                                                                        i(),
                                                                                                        {
                                                                                                            href: "https://www.youtube.com/",
                                                                                                            target: "_blank",
                                                                                                            children:
                                                                                                                (0,
                                                                                                                o.jsx)(
                                                                                                                    "a",
                                                                                                                    {
                                                                                                                        children:
                                                                                                                            (0,
                                                                                                                            o.jsx)(
                                                                                                                                "i",
                                                                                                                                {
                                                                                                                                    className:
                                                                                                                                        "fa-brands fa-youtube",
                                                                                                                                }
                                                                                                                            ),
                                                                                                                    }
                                                                                                                ),
                                                                                                        }
                                                                                                    ),
                                                                                                ],
                                                                                        }
                                                                                    ),
                                                                                ],
                                                                        }
                                                                    ),
                                                                ],
                                                            }
                                                        ),
                                                    }),
                                                    (0, o.jsx)("div", {
                                                        className:
                                                            "col-xxl-3 col-xl-3 col-lg-4 col-md-6",
                                                        children: (0, o.jsxs)(
                                                            "div",
                                                            {
                                                                className:
                                                                    "footer__widget-2 mb-70",
                                                                children: [
                                                                    (0, o.jsx)(
                                                                        "div",
                                                                        {
                                                                            className:
                                                                                "footer__widget-title",
                                                                            children:
                                                                                (0,
                                                                                o.jsx)(
                                                                                    "h4",
                                                                                    {
                                                                                        children:
                                                                                            "Useful Links",
                                                                                    }
                                                                                ),
                                                                        }
                                                                    ),
                                                                    (0, o.jsx)(
                                                                        "div",
                                                                        {
                                                                            className:
                                                                                "footer__link",
                                                                            children:
                                                                                (0,
                                                                                o.jsxs)(
                                                                                    "ul",
                                                                                    {
                                                                                        children:
                                                                                            [
                                                                                                (0,
                                                                                                o.jsx)(
                                                                                                    "li",
                                                                                                    {
                                                                                                        children:
                                                                                                            (0,
                                                                                                            o.jsx)(
                                                                                                                i(),
                                                                                                                {
                                                                                                                    href: "/speaker-list-two",
                                                                                                                    children:
                                                                                                                        (0,
                                                                                                                        o.jsx)(
                                                                                                                            "a",
                                                                                                                            {
                                                                                                                                children:
                                                                                                                                    "Speakers",
                                                                                                                            }
                                                                                                                        ),
                                                                                                                }
                                                                                                            ),
                                                                                                    }
                                                                                                ),
                                                                                                (0,
                                                                                                o.jsx)(
                                                                                                    "li",
                                                                                                    {
                                                                                                        children:
                                                                                                            (0,
                                                                                                            o.jsx)(
                                                                                                                i(),
                                                                                                                {
                                                                                                                    href: "/pricing",
                                                                                                                    children:
                                                                                                                        (0,
                                                                                                                        o.jsx)(
                                                                                                                            "a",
                                                                                                                            {
                                                                                                                                children:
                                                                                                                                    "Pricing Info",
                                                                                                                            }
                                                                                                                        ),
                                                                                                                }
                                                                                                            ),
                                                                                                    }
                                                                                                ),
                                                                                                (0,
                                                                                                o.jsx)(
                                                                                                    "li",
                                                                                                    {
                                                                                                        children:
                                                                                                            (0,
                                                                                                            o.jsx)(
                                                                                                                i(),
                                                                                                                {
                                                                                                                    href: "#",
                                                                                                                    children:
                                                                                                                        (0,
                                                                                                                        o.jsx)(
                                                                                                                            "a",
                                                                                                                            {
                                                                                                                                children:
                                                                                                                                    "Our Partners",
                                                                                                                            }
                                                                                                                        ),
                                                                                                                }
                                                                                                            ),
                                                                                                    }
                                                                                                ),
                                                                                                (0,
                                                                                                o.jsx)(
                                                                                                    "li",
                                                                                                    {
                                                                                                        children:
                                                                                                            (0,
                                                                                                            o.jsx)(
                                                                                                                i(),
                                                                                                                {
                                                                                                                    href: "/contact",
                                                                                                                    children:
                                                                                                                        (0,
                                                                                                                        o.jsx)(
                                                                                                                            "a",
                                                                                                                            {
                                                                                                                                children:
                                                                                                                                    "Contact Support",
                                                                                                                            }
                                                                                                                        ),
                                                                                                                }
                                                                                                            ),
                                                                                                    }
                                                                                                ),
                                                                                            ],
                                                                                    }
                                                                                ),
                                                                        }
                                                                    ),
                                                                ],
                                                            }
                                                        ),
                                                    }),
                                                    (0, o.jsx)("div", {
                                                        className:
                                                            "col-xxl-3 col-xl-3 col-lg-4 col-md-6",
                                                        children: (0, o.jsxs)(
                                                            "div",
                                                            {
                                                                className:
                                                                    "footer__widget-3 mb-70",
                                                                children: [
                                                                    (0, o.jsx)(
                                                                        "div",
                                                                        {
                                                                            className:
                                                                                "footer__widget-title",
                                                                            children:
                                                                                (0,
                                                                                o.jsx)(
                                                                                    "h4",
                                                                                    {
                                                                                        children:
                                                                                            "Useful Links",
                                                                                    }
                                                                                ),
                                                                        }
                                                                    ),
                                                                    (0, o.jsx)(
                                                                        "div",
                                                                        {
                                                                            className:
                                                                                "footer__link",
                                                                            children:
                                                                                (0,
                                                                                o.jsxs)(
                                                                                    "ul",
                                                                                    {
                                                                                        children:
                                                                                            [
                                                                                                (0,
                                                                                                o.jsx)(
                                                                                                    "li",
                                                                                                    {
                                                                                                        children:
                                                                                                            (0,
                                                                                                            o.jsx)(
                                                                                                                i(),
                                                                                                                {
                                                                                                                    href: "/event-list-two",
                                                                                                                    children:
                                                                                                                        (0,
                                                                                                                        o.jsx)(
                                                                                                                            "a",
                                                                                                                            {
                                                                                                                                children:
                                                                                                                                    "Business Conference",
                                                                                                                            }
                                                                                                                        ),
                                                                                                                }
                                                                                                            ),
                                                                                                    }
                                                                                                ),
                                                                                                (0,
                                                                                                o.jsx)(
                                                                                                    "li",
                                                                                                    {
                                                                                                        children:
                                                                                                            (0,
                                                                                                            o.jsx)(
                                                                                                                i(),
                                                                                                                {
                                                                                                                    href: "/event-list-two",
                                                                                                                    children:
                                                                                                                        (0,
                                                                                                                        o.jsx)(
                                                                                                                            "a",
                                                                                                                            {
                                                                                                                                children:
                                                                                                                                    "Design Conference",
                                                                                                                            }
                                                                                                                        ),
                                                                                                                }
                                                                                                            ),
                                                                                                    }
                                                                                                ),
                                                                                                (0,
                                                                                                o.jsx)(
                                                                                                    "li",
                                                                                                    {
                                                                                                        children:
                                                                                                            (0,
                                                                                                            o.jsx)(
                                                                                                                i(),
                                                                                                                {
                                                                                                                    href: "/event-list-two",
                                                                                                                    children:
                                                                                                                        (0,
                                                                                                                        o.jsx)(
                                                                                                                            "a",
                                                                                                                            {
                                                                                                                                children:
                                                                                                                                    "Web Design Seminar",
                                                                                                                            }
                                                                                                                        ),
                                                                                                                }
                                                                                                            ),
                                                                                                    }
                                                                                                ),
                                                                                                (0,
                                                                                                o.jsx)(
                                                                                                    "li",
                                                                                                    {
                                                                                                        children:
                                                                                                            (0,
                                                                                                            o.jsx)(
                                                                                                                i(),
                                                                                                                {
                                                                                                                    href: "/event-list-two",
                                                                                                                    children:
                                                                                                                        (0,
                                                                                                                        o.jsx)(
                                                                                                                            "a",
                                                                                                                            {
                                                                                                                                children:
                                                                                                                                    "Global Conference",
                                                                                                                            }
                                                                                                                        ),
                                                                                                                }
                                                                                                            ),
                                                                                                    }
                                                                                                ),
                                                                                            ],
                                                                                    }
                                                                                ),
                                                                        }
                                                                    ),
                                                                ],
                                                            }
                                                        ),
                                                    }),
                                                    (0, o.jsx)("div", {
                                                        className:
                                                            "col-xxl-3 col-xl-3 col-lg-6 col-md-6",
                                                        children: (0, o.jsxs)(
                                                            "div",
                                                            {
                                                                className:
                                                                    "footer__widget-4 mb-70",
                                                                children: [
                                                                    (0, o.jsx)(
                                                                        "div",
                                                                        {
                                                                            className:
                                                                                "footer__widget-title",
                                                                            children:
                                                                                (0,
                                                                                o.jsx)(
                                                                                    "h4",
                                                                                    {
                                                                                        children:
                                                                                            "Subscribe us",
                                                                                    }
                                                                                ),
                                                                        }
                                                                    ),
                                                                    (0, o.jsxs)(
                                                                        "div",
                                                                        {
                                                                            className:
                                                                                "footer__contact",
                                                                            children:
                                                                                [
                                                                                    (0,
                                                                                    o.jsx)(
                                                                                        "p",
                                                                                        {
                                                                                            children:
                                                                                                "Subscribe Our Newsletter To Get Latest Update And News",
                                                                                        }
                                                                                    ),
                                                                                    (0,
                                                                                    o.jsx)(
                                                                                        "div",
                                                                                        {
                                                                                            className:
                                                                                                "footer__input",
                                                                                            children:
                                                                                                (0,
                                                                                                o.jsxs)(
                                                                                                    "form",
                                                                                                    {
                                                                                                        action: "#",
                                                                                                        children:
                                                                                                            [
                                                                                                                (0,
                                                                                                                o.jsx)(
                                                                                                                    "span",
                                                                                                                    {
                                                                                                                        children:
                                                                                                                            (0,
                                                                                                                            o.jsx)(
                                                                                                                                "i",
                                                                                                                                {
                                                                                                                                    className:
                                                                                                                                        "fa-solid fa-envelope-open",
                                                                                                                                }
                                                                                                                            ),
                                                                                                                    }
                                                                                                                ),
                                                                                                                (0,
                                                                                                                o.jsx)(
                                                                                                                    "input",
                                                                                                                    {
                                                                                                                        type: "text",
                                                                                                                        placeholder:
                                                                                                                            "Enter mail",
                                                                                                                    }
                                                                                                                ),
                                                                                                                (0,
                                                                                                                o.jsx)(
                                                                                                                    "button",
                                                                                                                    {
                                                                                                                        className:
                                                                                                                            "input__btn w-100",
                                                                                                                        type: "submit",
                                                                                                                        children:
                                                                                                                            "Subscribe Now",
                                                                                                                    }
                                                                                                                ),
                                                                                                            ],
                                                                                                    }
                                                                                                ),
                                                                                        }
                                                                                    ),
                                                                                ],
                                                                        }
                                                                    ),
                                                                ],
                                                            }
                                                        ),
                                                    }),
                                                ],
                                            }),
                                            (0, o.jsx)("div", {
                                                className: "row",
                                                children: (0, o.jsx)("div", {
                                                    className: "col-12",
                                                    children: (0, o.jsx)(
                                                        "div",
                                                        {
                                                            className:
                                                                "footer__copyright text-center",
                                                            children: (0,
                                                            o.jsxs)("p", {
                                                                children: [
                                                                    "Copyright & design by",
                                                                    (0, o.jsx)(
                                                                        i(),
                                                                        {
                                                                            target: "_blank",
                                                                            href: "https://themeforest.net/user/bdevs",
                                                                            children:
                                                                                "@Bdevs",
                                                                        }
                                                                    ),
                                                                    "- 2023",
                                                                ],
                                                            }),
                                                        }
                                                    ),
                                                }),
                                            }),
                                        ],
                                    }),
                                ],
                            }),
                        }),
                    });
                };
        },
        5796: function (e, s, a) {
            a.d(s, {
                Z: function () {
                    return x;
                },
            });
            var n = a(1664),
                i = a.n(n),
                t = a(7294),
                c = a(3313),
                l = "/_next/static/media/logo-dark.f5dee282.svg",
                r = a(1432),
                d = [
                    {
                        text: "Home",
                        link: "/",
                        dropdown: !0,
                        megaMenu: !0,
                        megaMenuItems: [
                            {
                                link: "/",
                                style: {
                                    backgroundImage: "url(".concat(
                                        "/_next/static/media/landing.227cfd5a.jpg",
                                        ")"
                                    ),
                                },
                            },
                            {
                                link: "/login",
                                style: {
                                    backgroundImage: "url(".concat(
                                        "/_next/static/media/dashboard.44ab482c.jpg",
                                        ")"
                                    ),
                                },
                            },
                            {
                                link: "/login",
                                style: {
                                    backgroundImage: "url(".concat(
                                        "/_next/static/media/event.ac7ebef9.jpg",
                                        ")"
                                    ),
                                },
                            },
                        ],
                    },
                    { text: "About", link: "/about" },
                    { text: "Speakers", link: "/speaker-list-two" },
                    { text: "Events", link: "/event-list-two" },
                    { text: "Blog", link: "/blog" },
                    { text: "Pricing", link: "/pricing" },
                    { text: "Contact2", link: "/contact" },
                ],
                o = a(5893),
                h = function () {
                    return (0, o.jsx)("ul", {
                        children: d.map(function (e, s) {
                            return (0, o.jsxs)(
                                "li",
                                {
                                    className: e.dropdown
                                        ? "has-dropdown has-mega-menu"
                                        : "",
                                    children: [
                                        (0, o.jsx)(i(), {
                                            href: e.link,
                                            children: e.text,
                                        }),
                                        e.megaMenu &&
                                            (0, o.jsx)("ul", {
                                                className: "mega-menu",
                                                children: e.megaMenuItems.map(
                                                    function (e, s) {
                                                        return (0, o.jsx)(
                                                            "li",
                                                            {
                                                                children: (0,
                                                                o.jsx)(i(), {
                                                                    href: e.link,
                                                                    children:
                                                                        (0,
                                                                        o.jsx)(
                                                                            "a",
                                                                            {
                                                                                style: e.style,
                                                                            }
                                                                        ),
                                                                }),
                                                            },
                                                            s
                                                        );
                                                    }
                                                ),
                                            }),
                                    ],
                                },
                                s
                            );
                        }),
                    });
                },
                x = function (e) {
                    var s = e.breadcrumb_shadow,
                        a = (0, t.useContext)(r.I).toggleSideMenu,
                        n = (0, t.useState)("down"),
                        d = n[0],
                        x = n[1];
                    return (
                        (0, t.useEffect)(function () {
                            var e = window.scrollY,
                                s = function () {
                                    var s = window.scrollY;
                                    x(s > e ? "down" : "up"), (e = s);
                                };
                            return (
                                window.addEventListener("scroll", s),
                                function () {
                                    window.removeEventListener("scroll", s);
                                }
                            );
                        }, []),
                        (0, o.jsx)(o.Fragment, {
                            children: (0, o.jsx)("header", {
                                children: (0, o.jsx)("div", {
                                    id: "header-sticky",
                                    className:
                                        "header__area header-1 header__transparent menu-sticky dark_light_class "
                                            .concat(
                                                "up" === d ? "sticky" : "",
                                                " "
                                            )
                                            .concat(s || "", " "),
                                    children: (0, o.jsx)("div", {
                                        className: "container",
                                        children: (0, o.jsx)("div", {
                                            className: "row align-items-center",
                                            children: (0, o.jsx)("div", {
                                                className: "col-12",
                                                children: (0, o.jsx)("div", {
                                                    className:
                                                        "mega__menu-wrapper p-relative",
                                                    children: (0, o.jsxs)(
                                                        "div",
                                                        {
                                                            className:
                                                                "header__navigation d-flex align-items-center justify-content-between",
                                                            children: [
                                                                (0, o.jsx)(
                                                                    "div",
                                                                    {
                                                                        className:
                                                                            "header__logo",
                                                                        children:
                                                                            (0,
                                                                            o.jsx)(
                                                                                i(),
                                                                                {
                                                                                    href: "/",
                                                                                    children:
                                                                                        (0,
                                                                                        o.jsxs)(
                                                                                            "a",
                                                                                            {
                                                                                                children:
                                                                                                    [
                                                                                                        (0,
                                                                                                        o.jsx)(
                                                                                                            "img",
                                                                                                            {
                                                                                                                className:
                                                                                                                    "logo__white",
                                                                                                                src: c
                                                                                                                    .Z
                                                                                                                    .src,
                                                                                                                alt: "logo not found",
                                                                                                            }
                                                                                                        ),
                                                                                                        (0,
                                                                                                        o.jsx)(
                                                                                                            "img",
                                                                                                            {
                                                                                                                className:
                                                                                                                    "logo__dark",
                                                                                                                src: l,
                                                                                                                alt: "logo not found",
                                                                                                            }
                                                                                                        ),
                                                                                                    ],
                                                                                            }
                                                                                        ),
                                                                                }
                                                                            ),
                                                                    }
                                                                ),
                                                                (0, o.jsxs)(
                                                                    "div",
                                                                    {
                                                                        className:
                                                                            "header__right",
                                                                        children:
                                                                            [
                                                                                (0,
                                                                                o.jsx)(
                                                                                    "div",
                                                                                    {
                                                                                        className:
                                                                                            "main-menu smooth d-none d-none d-xl-block",
                                                                                        children:
                                                                                            (0,
                                                                                            o.jsx)(
                                                                                                "nav",
                                                                                                {
                                                                                                    id: "mobile-menu",
                                                                                                    children:
                                                                                                        (0,
                                                                                                        o.jsx)(
                                                                                                            h,
                                                                                                            {}
                                                                                                        ),
                                                                                                }
                                                                                            ),
                                                                                    }
                                                                                ),
                                                                                (0,
                                                                                o.jsxs)(
                                                                                    "div",
                                                                                    {
                                                                                        className:
                                                                                            "header__action-inner",
                                                                                        children:
                                                                                            [
                                                                                                (0,
                                                                                                o.jsx)(
                                                                                                    "div",
                                                                                                    {
                                                                                                        className:
                                                                                                            "header__btn d-none d-xl-block",
                                                                                                        children:
                                                                                                            (0,
                                                                                                            o.jsx)(
                                                                                                                i(),
                                                                                                                {
                                                                                                                    href: "/login",
                                                                                                                    children:
                                                                                                                        (0,
                                                                                                                        o.jsxs)(
                                                                                                                            "a",
                                                                                                                            {
                                                                                                                                className:
                                                                                                                                    "fill__btn",
                                                                                                                                children:
                                                                                                                                    [
                                                                                                                                        "login",
                                                                                                                                        (0,
                                                                                                                                        o.jsx)(
                                                                                                                                            "i",
                                                                                                                                            {
                                                                                                                                                className:
                                                                                                                                                    "fa-regular fa-angle-right",
                                                                                                                                            }
                                                                                                                                        ),
                                                                                                                                    ],
                                                                                                                            }
                                                                                                                        ),
                                                                                                                }
                                                                                                            ),
                                                                                                    }
                                                                                                ),
                                                                                                (0,
                                                                                                o.jsx)(
                                                                                                    "div",
                                                                                                    {
                                                                                                        className:
                                                                                                            "header__hamburger",
                                                                                                        children:
                                                                                                            (0,
                                                                                                            o.jsx)(
                                                                                                                "div",
                                                                                                                {
                                                                                                                    className:
                                                                                                                        "sidebar__toggle",
                                                                                                                    children:
                                                                                                                        (0,
                                                                                                                        o.jsxs)(
                                                                                                                            "button",
                                                                                                                            {
                                                                                                                                type: "button",
                                                                                                                                onClick:
                                                                                                                                    a,
                                                                                                                                className:
                                                                                                                                    "bar-icon",
                                                                                                                                children:
                                                                                                                                    [
                                                                                                                                        (0,
                                                                                                                                        o.jsx)(
                                                                                                                                            "span",
                                                                                                                                            {}
                                                                                                                                        ),
                                                                                                                                        (0,
                                                                                                                                        o.jsx)(
                                                                                                                                            "span",
                                                                                                                                            {}
                                                                                                                                        ),
                                                                                                                                        (0,
                                                                                                                                        o.jsx)(
                                                                                                                                            "span",
                                                                                                                                            {}
                                                                                                                                        ),
                                                                                                                                    ],
                                                                                                                            }
                                                                                                                        ),
                                                                                                                }
                                                                                                            ),
                                                                                                    }
                                                                                                ),
                                                                                            ],
                                                                                    }
                                                                                ),
                                                                            ],
                                                                    }
                                                                ),
                                                            ],
                                                        }
                                                    ),
                                                }),
                                            }),
                                        }),
                                    }),
                                }),
                            }),
                        })
                    );
                };
        },
        3342: function (e, s, a) {
            a(7294);
            var n = a(5893);
            s.Z = function (e) {
                var s = e.children;
                return (0, n.jsx)(n.Fragment, { children: s });
            };
        },
        3313: function (e, s) {
            s.Z = {
                src: "/_next/static/media/logo.6dd2592f.svg",
                height: 40,
                width: 170,
            };
        },
    },
]);
