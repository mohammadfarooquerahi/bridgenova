/**
 * BridgeNova Theme Main JavaScript
 * Fully responsive navigation, animations, counters, and interactive widgets.
 */

document.addEventListener('DOMContentLoaded', function () {
    document.documentElement.classList.add('hp-js-ready');

    // 1. Mobile Menu & Navigation System
    const header = document.getElementById('bridgeHeader');
    const openBtn = document.getElementById('menuOpenBtn');
    const closeBtn = document.getElementById('menuCloseBtn');
    const dropdownTriggers = document.querySelectorAll('.nav-dropdown-trigger, .menu-item-has-children > a, .has-dropdown > a');

    if (openBtn && header) {
        openBtn.addEventListener('click', function (e) {
            e.stopPropagation();
            header.classList.add('nav-open');
            document.body.style.overflow = 'hidden';
        });
    }

    if (closeBtn && header) {
        closeBtn.addEventListener('click', function () {
            header.classList.remove('nav-open');
            document.body.style.overflow = '';
        });
    }

    // Close mobile menu when clicking outside
    document.addEventListener('click', function (e) {
        if (header && header.classList.contains('nav-open')) {
            const nav = document.getElementById('mainNav');
            if (nav && !nav.contains(e.target) && (!openBtn || !openBtn.contains(e.target))) {
                header.classList.remove('nav-open');
                document.body.style.overflow = '';
            }
        }
    });

    // Close on Escape key
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && header && header.classList.contains('nav-open')) {
            header.classList.remove('nav-open');
            document.body.style.overflow = '';
        }
    });

    // Mobile dropdown toggle
    dropdownTriggers.forEach(function (trigger) {
        trigger.addEventListener('click', function (e) {
            if (window.innerWidth <= 1024) {
                const parentLi = trigger.closest('.nav-item, .menu-item');
                if (parentLi) {
                    const hasSub = parentLi.querySelector('.dropdown-menu, .sub-menu');
                    if (hasSub) {
                        if (trigger.tagName === 'A') {
                            const href = trigger.getAttribute('href');
                            if (!href || href === '#' || href === 'javascript:void(0)' || !parentLi.classList.contains('dropdown-open')) {
                                e.preventDefault();
                            }
                        } else {
                            e.preventDefault();
                        }
                        parentLi.classList.toggle('dropdown-open');
                    }
                }
            }
        });
    });

    // Safety Interceptor: Ensure any legacy demo anchor links map to actual pages
    const legacyLinkMap = {
        'SERVICES': '/services/',
        'OUR SERVICES': '/services/',
        'ABOUT': '/about-us/',
        'ABOUT US': '/about-us/',
        'ABOUT BRIDGE': '/about-us/',
        'GALLERY': '/gallery-2/',
        'OUR TEAM': '/our-team/',
        'PARTNERS': '/partners/',
        'SPEAKERS': '/speakers/',
        'EVENTS': '/events-bridge/',
        'REGISTRATION': '/registration/',
        'EVENT REGISTRATION': '/event-registration/',
        'CONTACT': '/contact-us/',
        'CONTACT US': '/contact-us/'
    };

    document.querySelectorAll('.bridge-custom-header a').forEach(function (a) {
        const text = a.textContent.replace(/[▼✕]/g, '').trim().toUpperCase();
        const href = a.getAttribute('href') || '';
        if (href.startsWith('#') || href === '' || href.endsWith('/#services') || href.endsWith('/#about') || href.endsWith('/#contact')) {
            if (legacyLinkMap[text]) {
                const homeUrl = (typeof bridgenovaAjax !== 'undefined' && bridgenovaAjax.homeUrl) ? bridgenovaAjax.homeUrl.replace(/\/$/, '') : '';
                a.setAttribute('href', homeUrl + legacyLinkMap[text]);
            }
        }
    });

    // Sticky header background
    window.addEventListener('scroll', function () {
        if (header) {
            if (window.scrollY > 40) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        }
    });

    // 2. Scroll Reveal Animations (IntersectionObserver)
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const revealElements = document.querySelectorAll('.hp-reveal, .hp-reveal-stagger');

    if (!prefersReducedMotion && 'IntersectionObserver' in window) {
        const revealObserver = new IntersectionObserver(function (entries, observer) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('hp-in-view');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12 });

        revealElements.forEach(function (el) {
            revealObserver.observe(el);
        });
    } else {
        revealElements.forEach(function (el) {
            el.classList.add('hp-in-view');
        });
    }

    // 3. Animated Number Counters
    const counterElements = document.querySelectorAll('[data-count]');
    if (counterElements.length > 0) {
        function hpAnimateCounter(el) {
            const target = parseInt(el.getAttribute('data-count'), 10) || 0;
            const suffix = el.getAttribute('data-suffix') || '';
            const duration = 1600;
            let startTime = null;

            function step(timestamp) {
                if (!startTime) startTime = timestamp;
                const progress = Math.min((timestamp - startTime) / duration, 1);
                const eased = 1 - Math.pow(1 - progress, 3);
                el.textContent = Math.floor(eased * target) + suffix;
                if (progress < 1) {
                    requestAnimationFrame(step);
                } else {
                    el.textContent = target + suffix;
                }
            }
            requestAnimationFrame(step);
        }

        if ('IntersectionObserver' in window && !prefersReducedMotion) {
            const counterObserver = new IntersectionObserver(function (entries, observer) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        hpAnimateCounter(entry.target);
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.2 });

            counterElements.forEach(function (el) {
                counterObserver.observe(el);
            });
        } else {
            counterElements.forEach(function (el) {
                const target = el.getAttribute('data-count') || '0';
                const suffix = el.getAttribute('data-suffix') || '';
                el.textContent = target + suffix;
            });
        }
    }

    // 4. FAQ Accordion Handler (Clean, robust, single-click toggle)
    window.hpToggleFaq = function (btn, evt) {
        if (evt) {
            evt.preventDefault();
            evt.stopPropagation();
        }
        const item = btn.closest('.hp-faq-item');
        if (!item) return;
        const isOpen = item.classList.contains('hp-faq-open');

        // Close all items
        document.querySelectorAll('.hp-faq-item').forEach(function (other) {
            other.classList.remove('hp-faq-open');
        });

        // Toggle current
        if (!isOpen) {
            item.classList.add('hp-faq-open');
        }
    };

    // Attach click listeners to FAQ questions and strip inline onclick
    document.querySelectorAll('.hp-faq-q').forEach(function (btn) {
        btn.removeAttribute('onclick');
        btn.addEventListener('click', function (e) {
            e.preventDefault();
            window.hpToggleFaq(this, e);
        });
    });

    // 5. Testimonial Scroll Buttons
    window.hpScrollTesti = function (direction) {
        const row = document.getElementById('hp-testi-row');
        if (!row) return;
        const card = row.querySelector('.hp-testi-card');
        const cardWidth = card ? card.offsetWidth + 24 : 380;
        row.scrollBy({ left: direction * cardWidth, behavior: 'smooth' });
    };

    // 6. Scroll to Top Button
    const scrollTopBtn = document.querySelector('.scroll-to-top') || document.getElementById('scrollToTop');
    if (scrollTopBtn) {
        window.addEventListener('scroll', function () {
            if (window.scrollY > 400) {
                scrollTopBtn.classList.add('scroll-show');
            } else {
                scrollTopBtn.classList.remove('scroll-show');
            }
        });

        scrollTopBtn.addEventListener('click', function () {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    // 7. Dynamic Year in Footer
    const currentYear = new Date().getFullYear();
    document.querySelectorAll('.mobile-menu-year, .footer-year').forEach(function (el) {
        el.textContent = currentYear;
    });

    // 8. Contact Form AJAX Submission (if on contact page)
    const contactForm = document.querySelector('.ctc-form');
    if (contactForm && typeof bridgenovaAjax !== 'undefined') {
        contactForm.addEventListener('submit', function (e) {
            e.preventDefault();
            const submitBtn = contactForm.querySelector('button[type="submit"]');
            const originalText = submitBtn ? submitBtn.textContent : '';
            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.textContent = 'Sending...';
            }

            const formData = new FormData(contactForm);
            formData.append('action', 'bridgenova_contact');
            formData.append('nonce', bridgenovaAjax.nonce);

            fetch(bridgenovaAjax.ajaxurl, {
                method: 'POST',
                body: formData
            })
            .then(res => res.json())
            .then(data => {
                const notice = document.querySelector('.ctc-form-notice') || document.createElement('div');
                notice.className = 'ctc-form-notice ' + (data.success ? 'notice-success' : 'notice-error');
                notice.textContent = data.data && data.data.message ? data.data.message : (data.success ? 'Message sent!' : 'Error sending message');
                contactForm.prepend(notice);
                if (data.success) contactForm.reset();
            })
            .catch(() => {
                alert('An error occurred. Please try again.');
            })
            .finally(() => {
                if (submitBtn) {
                    submitBtn.disabled = false;
                    submitBtn.textContent = originalText;
                }
            });
        });
    }
});
