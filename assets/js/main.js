/**
 * Jane Makeup & Hair — Main JavaScript
 * Handles mobile nav toggle and header scroll behavior.
 */

(function () {
    'use strict';

    /**
     * Toggles the mobile navigation open/closed.
     */
    function initMobileNav() {
        const toggle = document.querySelector('.mobile-menu-toggle');
        const mobileNav = document.querySelector('.main-nav');
        if (!toggle || !mobileNav) return;

        toggle.addEventListener('click', function () {
            document.body.classList.toggle('nav-open');
            const isOpen = document.body.classList.contains('nav-open');
            toggle.innerHTML = isOpen ? '✕' : '☰';
            toggle.setAttribute('aria-expanded', String(isOpen));
        });
    }

    /**
     * Adds a .scrolled class to the header once the user scrolls down,
     * allowing CSS to apply an enhanced shadow.
     */
    function initScrollHeader() {
        const header = document.querySelector('.site-header');
        if (!header) return;

        window.addEventListener('scroll', function () {
            header.classList.toggle('scrolled', window.scrollY > 40);
        }, { passive: true });
    }

    document.addEventListener('DOMContentLoaded', function () {
        initMobileNav();
        initScrollHeader();
    });

}());
